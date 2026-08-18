@extends('layouts.app')

@section('content')

    @include('sections.topbar')
    @include('sections.navbar')

    @php
        $bannerTitle = \App\Models\SiteSetting::where('group', 'page_banners')->where('key', 'banner_registration_title')->value('value') ?? 'REGISTRATION';
        $bannerImage = \App\Models\SiteSetting::where('group', 'page_banners')->where('key', 'banner_registration_image')->value('value');
    @endphp
    <!-- Page Banner -->
    <div class="page-banner" style="{{ $bannerImage ? "background-image: linear-gradient(rgba(10, 25, 47, 0.7), rgba(10, 25, 47, 0.8)), url('" . asset($bannerImage) . "');" : '' }}">
        <div class="page-banner-content">
            <h1>{{ $bannerTitle }}</h1>
        </div>
    </div>

    <!-- Registration Section -->
    <section class="registration-section section-padding" style="background-color: #f8f9fa;">
        <div class="container registration-container">
            
            <!-- Instructions -->
            <div class="reg-instructions" style="margin-bottom: 40px; background: #fff; padding: 25px; border-radius: 12px; border-left: 4px solid var(--teal-accent); box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
                <p style="margin: 0; color: #475569; line-height: 1.6;">{!! $settings['reg_page_notice'] ?? '<strong>All fields are required.</strong> Payments (INR) are securely processed online. Confirmations are sent within 48 hours. For support: <a href="mailto:contact@biomedsummit.org" style="color: var(--teal-accent); font-weight: 600;">contact@biomedsummit.org</a>.' !!}</p>
            </div>

            <form id="registration-form" action="{{ url('/api/register') }}" method="POST">
                @csrf
                
                <!-- Personal Info Grid -->
                <!-- Personal Info Grid -->
                <div class="reg-form-grid">
                    @php
                        $formFields = \App\Models\RegistrationField::orderBy('sort_order')->get();
                    @endphp
                    @foreach($formFields as $field)
                        <div class="form-group" style="grid-column: {{ $field->grid_column === 'span 12' ? '1 / -1' : $field->grid_column }};">
                            @if($field->type === 'select' || $field->type === 'dynamic_select')
                                <select name="fields[{{ $field->name }}]" class="form-control" {{ $field->is_required ? 'required' : '' }}>
                                    <option value="">{{ $field->placeholder ?? 'Select' }}</option>
                                    @if($field->type === 'dynamic_select' && $field->name === 'interested_in')
                                        @php
                                            $interestOptions = \App\Models\InterestOption::orderBy('sort_order')->get();
                                        @endphp
                                        @foreach($interestOptions as $option)
                                            <option value="{{ $option->name }}">{{ $option->name }}</option>
                                        @endforeach
                                    @elseif($field->options)
                                        @foreach($field->options as $option)
                                            <option value="{{ $option }}">{{ $option }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            @elseif($field->type === 'textarea')
                                <textarea name="fields[{{ $field->name }}]" class="form-control" placeholder="{{ $field->placeholder }}" {{ $field->is_required ? 'required' : '' }} rows="3"></textarea>
                            @else
                                <input type="{{ $field->type }}" name="fields[{{ $field->name }}]" class="form-control" placeholder="{{ $field->placeholder }}" {{ $field->is_required ? 'required' : '' }}>
                            @endif
                        </div>
                    @endforeach
                </div>

                <div class="section-divider" style="margin: 40px 0;"></div>

                <!-- Participation Mode -->
                <div class="reg-section-title" style="margin-bottom: 20px;">
                    <h2 style="font-size: clamp(1.4rem, 5vw, 1.8rem); color: var(--navy-dark);">Mode of Participation</h2>
                    <p style="color: #64748b; font-size: clamp(0.95rem, 3vw, 1.05rem);">Select whether you will attend in-person (Offline) or virtually (Online).</p>
                </div>

                <div class="mode-selection" style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 35px;">
                    <label class="mode-option" style="flex: 1; min-width: 220px; display: flex; align-items: center; gap: 12px; padding: 18px 24px; border: 2px solid var(--teal-accent); border-radius: 12px; cursor: pointer; background: #f0fdfa; transition: all 0.3s;">
                        <input type="radio" name="participation_mode" value="online" checked style="width: 20px; height: 20px; accent-color: var(--teal-accent);">
                        <div>
                            <strong style="font-size: 1.1rem; color: var(--navy-dark); display: block;">Online (Virtual)</strong>
                            <span style="font-size: 0.85rem; color: #64748b;">Join via virtual platform</span>
                        </div>
                    </label>
                </div>

                <!-- Registration Category -->
                <div class="reg-section-title" style="margin-bottom: 25px;">
                    <h2 style="font-size: clamp(1.5rem, 6vw, 2rem); color: var(--navy-dark);">{{ $settings['reg_category_title'] ?? 'Select Category' }}</h2>
                    <p style="color: #64748b; font-size: clamp(0.95rem, 3vw, 1.05rem);">{{ $settings['reg_category_subtitle'] ?? 'Registration includes conference kit, certificate, lunch and refreshment.' }}</p>
                </div>

                <input type="hidden" name="reg_category" id="offline-fallback-category" value="0" disabled>
                <div class="category-selection" style="display: flex; flex-direction: column; gap: 15px; margin-bottom: 40px;">
                    @foreach($registrationFees as $index => $fee)
                        @php
                            $offlineVal = (int)str_replace(',', '', $fee->price_inr);
                            $onlineVal = $fee->price_online ? (int)str_replace(',', '', $fee->price_online) : null;
                        @endphp
                        <label class="payment-option category-option" style="display: flex; justify-content: space-between; align-items: center; padding: 20px; border: 2px solid #e2e8f0; border-radius: 12px; cursor: pointer; transition: all 0.3s; background: #fff;">
                            <div style="display: flex; align-items: center; gap: 15px;">
                                <input type="radio" name="reg_category" 
                                       value="{{ $offlineVal }}" 
                                       data-offline="{{ $offlineVal }}" 
                                       data-online="{{ $onlineVal ?? '' }}" 
                                       data-name="{{ $fee->category_name }}" 
                                       required style="width: 22px; height: 22px; accent-color: var(--teal-accent);">
                                <span style="font-weight: 700; font-size: 1.15rem; color: var(--navy-dark);">{{ $fee->category_name }}</span>
                            </div>
                            <strong class="cat-price-display" style="font-size: 1.3rem; color: var(--teal-accent);">{{ number_format($offlineVal) }} INR</strong>
                        </label>
                    @endforeach
                </div>

                {{-- Add-On section removed --}}
                {{-- 
                <div class="reg-section-title" style="margin-bottom: 20px;">
                    <h2 style="font-size: clamp(1.4rem, 5vw, 1.8rem); color: var(--navy-dark);">{{ $settings['reg_addon_title'] ?? 'Add-Ons' }}</h2>
                </div>
                
                <div class="addon-selection" style="margin-bottom: 40px;">
                    @foreach($addons as $addon)
                        <label class="payment-option" style="display: flex; justify-content: space-between; align-items: center; padding: 20px; border: 2px solid #e2e8f0; border-radius: 12px; cursor: pointer; transition: all 0.3s; background: #fff; position: relative; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
                            <div style="display: flex; align-items: center; gap: 15px;">
                                <input type="checkbox" name="addons[]" value="{{ $addon->price }}" data-name="{{ $addon->title }}" class="addon-checkbox" style="width: 22px; height: 22px; accent-color: var(--teal-accent);">
                                <div>
                                    <span style="font-weight: 700; font-size: 1.15rem; color: var(--navy-dark); display: block;">{{ $addon->title }}</span>
                                    @if($addon->badge_text)
                                        <span style="font-size: 0.85rem; color: #e74c3c; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; background: rgba(231, 76, 60, 0.1); padding: 3px 8px; border-radius: 4px; display: inline-block; margin-top: 5px;">{{ $addon->badge_text }}</span>
                                    @endif
                                </div>
                            </div>
                            <strong style="font-size: 1.3rem; color: var(--teal-accent);">+ {{ $addon->price }} INR</strong>
                        </label>
                    @endforeach
                </div>
                --}}

                <!-- Summary Box -->
                <div id="order-summary-section" class="reg-summary" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 35px; box-shadow: 0 15px 35px rgba(0,0,0,0.05); margin-bottom: 35px;">
                    <h3 style="margin-top: 0; margin-bottom: 25px; color: var(--navy-dark); border-bottom: 2px solid #f1f5f9; padding-bottom: 15px; font-size: clamp(1.2rem, 4vw, 1.5rem);">{{ $settings['reg_summary_title'] ?? 'Order Summary' }}</h3>
                    
                    <div class="summary-line" style="display: flex; justify-content: space-between; margin-bottom: 15px; color: #475569; font-size: 1.1rem;">
                        <span id="sum-cat-name">Select a Category</span>
                        <span id="sum-cat-price" style="font-weight: 600; color: var(--navy-dark);">0 INR</span>
                    </div>
                    <div id="dynamic-addons-summary"></div>
                    
                    <div class="summary-line summary-total" style="display: flex; justify-content: space-between; margin-top: 10px; padding-top: 15px; border-top: 2px dashed #cbd5e1; font-weight: 800; font-size: 1.5rem; color: var(--navy-dark);">
                        <span>{{ $settings['reg_total_text'] ?? 'Total Amount:' }}</span>
                        <span id="sum-total-price" style="color: var(--teal-accent);">0 INR</span>
                    </div>
                </div>

                <!-- Payment Method -->
                <div id="payment-section">
                    <div class="reg-section-title" style="margin-bottom: 20px;">
                        <h2 style="font-size: clamp(1.4rem, 5vw, 1.8rem); color: var(--navy-dark);">{{ $settings['reg_payment_title'] ?? 'Payment Method' }}</h2>
                    </div>

                    <div class="payment-method-selection" style="display: flex; flex-direction: column; gap: 15px; margin-bottom: 35px;">
                        <!-- UPI -->
                        <label class="pay-method-option" style="display: flex; justify-content: space-between; align-items: center; padding: 20px; border: 2px solid var(--teal-accent); border-radius: 12px; cursor: pointer; transition: all 0.3s; background: #f0fdfa;">
                            <div style="display: flex; align-items: center; gap: 15px;">
                                <input type="radio" name="payment_method" value="upi" checked style="width: 22px; height: 22px; accent-color: var(--teal-accent);">
                                <div style="display: flex; align-items: center; gap: 12px;">
                                    <div style="background: rgba(0, 168, 150, 0.1); width: 40px; height: 40px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                        <i class="fa-solid fa-qrcode" style="font-size: 1.2rem; color: var(--teal-accent);"></i>
                                    </div>
                                    <span style="font-weight: 700; font-size: 1.1rem; color: var(--navy-dark);">UPI (GPay, PhonePe, Paytm)</span>
                                </div>
                            </div>
                        </label>

                        <!-- Card -->
                        <label class="pay-method-option" style="display: flex; justify-content: space-between; align-items: center; padding: 20px; border: 2px solid #e2e8f0; border-radius: 12px; cursor: pointer; transition: all 0.3s; background: #fff;">
                            <div style="display: flex; align-items: center; gap: 15px;">
                                <input type="radio" name="payment_method" value="card" style="width: 22px; height: 22px; accent-color: var(--teal-accent);">
                                <div style="display: flex; align-items: center; gap: 12px;">
                                    <div style="background: rgba(10, 25, 47, 0.05); width: 40px; height: 40px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                        <i class="fa-regular fa-credit-card" style="font-size: 1.2rem; color: var(--navy-dark);"></i>
                                    </div>
                                    <span style="font-weight: 700; font-size: 1.1rem; color: var(--navy-dark);">Credit / Debit Card</span>
                                </div>
                            </div>
                            <div style="display: flex; gap: 8px;">
                                <i class="fa-brands fa-cc-visa" style="font-size: 1.8rem; color: #1a1f71;"></i>
                                <i class="fa-brands fa-cc-mastercard" style="font-size: 1.8rem; color: #eb001b;"></i>
                            </div>
                        </label>

                        <!-- Net Banking -->
                        <label class="pay-method-option" style="display: flex; justify-content: space-between; align-items: center; padding: 20px; border: 2px solid #e2e8f0; border-radius: 12px; cursor: pointer; transition: all 0.3s; background: #fff;">
                            <div style="display: flex; align-items: center; gap: 15px;">
                                <input type="radio" name="payment_method" value="netbanking" style="width: 22px; height: 22px; accent-color: var(--teal-accent);">
                                <div style="display: flex; align-items: center; gap: 12px;">
                                    <div style="background: rgba(10, 25, 47, 0.05); width: 40px; height: 40px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                        <i class="fa-solid fa-building-columns" style="font-size: 1.2rem; color: var(--navy-dark);"></i>
                                    </div>
                                    <span style="font-weight: 700; font-size: 1.1rem; color: var(--navy-dark);">Net Banking</span>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="reg-consent" style="margin-bottom: 35px; background: #f8fafc; padding: 20px; border-radius: 10px; border: 1px solid #e2e8f0;">
                    <label style="display: flex; gap: 12px; align-items: flex-start; cursor: pointer; margin: 0;">
                        <input type="checkbox" name="consent" required style="margin-top: 4px; width: 18px; height: 18px; accent-color: var(--teal-accent);"> 
                        <span style="color: #475569; line-height: 1.6; font-size: 0.95rem;">{!! $settings['reg_consent_text'] ?? 'By clicking "Proceed", I agree to the <a href="#" style="color: var(--teal-accent); font-weight: 600;">Privacy Policy</a>, <a href="#" style="color: var(--teal-accent); font-weight: 600;">Terms & Conditions</a> and <a href="#" style="color: var(--teal-accent); font-weight: 600;">Cancellation Policy</a>.' !!}</span>
                    </label>
                </div>

                <div class="reg-actions" style="display: flex; justify-content: flex-end;">
                    <button type="submit" class="btn btn-teal" style="padding: 16px 40px; font-size: 1.2rem; border-radius: 10px; width: 100%; box-shadow: 0 10px 20px rgba(0, 168, 150, 0.2); display: flex; justify-content: center; align-items: center; gap: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;"><span id="submit-button-text">{{ $settings['reg_button_text'] ?? 'Proceed to Pay' }}</span> <i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </form>

            <!-- Accordions -->
            <div class="reg-accordions">
                @foreach($policies as $index => $policy)
                    <div class="accordion-item" style="border: 1px solid var(--border-light); margin-bottom: 15px; border-radius: 6px; overflow: hidden; background: #fff; box-shadow: 0 2px 10px rgba(0,0,0,0.03);">
                        <button class="accordion-header {{ $index === 0 ? 'active' : '' }}" style="width: 100%; text-align: left; padding: 18px 20px; background: {{ $index === 0 ? '#eaf8f6' : '#f8f9fa' }}; border: none; font-weight: 700; color: var(--navy-dark); font-size: 1.1rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; text-transform: uppercase; transition: background 0.3s ease;">
                            {{ $policy->title }}
                            <i class="fa-solid {{ $index === 0 ? 'fa-circle-arrow-up' : 'fa-circle-arrow-down' }}" style="color: var(--teal-accent); font-size: 1.2rem;"></i>
                        </button>
                        <div class="accordion-content" style="padding: 20px; display: {{ $index === 0 ? 'block' : 'none' }}; color: var(--text-body); line-height: 1.6; border-top: 1px solid var(--border-light);">
                            {!! $policy->content_html !!}
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    @include('sections.footer')

    <!-- Registration Logic -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modeRadios = document.querySelectorAll('input[name="participation_mode"]');
            const categoryRadios = document.querySelectorAll('input[name="reg_category"]');
            const paymentMethodRadios = document.querySelectorAll('input[name="payment_method"]');
            const addonCheckboxes = document.querySelectorAll('.addon-checkbox');
            
            const sumCatName = document.getElementById('sum-cat-name');
            const sumCatPrice = document.getElementById('sum-cat-price');
            const dynamicAddonsSummary = document.getElementById('dynamic-addons-summary');
            const sumTotalPrice = document.getElementById('sum-total-price');
            
            const paymentSection = document.getElementById('payment-section');
            const orderSummarySection = document.getElementById('order-summary-section');
            const offlineFallbackCategory = document.getElementById('offline-fallback-category');
            const submitButtonText = document.getElementById('submit-button-text');
            const defaultButtonText = {!! json_encode($settings['reg_button_text'] ?? 'Proceed to Pay') !!};

            function updateModePrices() {
                const selectedMode = document.querySelector('input[name="participation_mode"]:checked')?.value || 'online';
                
                if (selectedMode === 'offline') {
                    if (paymentSection) paymentSection.style.display = 'none';
                    if (orderSummarySection) orderSummarySection.style.display = 'none';
                    if (offlineFallbackCategory) offlineFallbackCategory.disabled = false;
                    if (submitButtonText) submitButtonText.innerText = 'Register Now (Pay at Venue)';
                } else {
                    if (paymentSection) paymentSection.style.display = 'block';
                    if (orderSummarySection) orderSummarySection.style.display = 'block';
                    if (offlineFallbackCategory) offlineFallbackCategory.disabled = true;
                    if (submitButtonText) submitButtonText.innerText = defaultButtonText;
                }
                
                // Style mode buttons
                modeRadios.forEach(radio => {
                    const label = radio.closest('.mode-option');
                    if (radio.checked) {
                        label.style.borderColor = 'var(--teal-accent)';
                        label.style.background = '#f0fdfa';
                    } else {
                        label.style.borderColor = '#e2e8f0';
                        label.style.background = '#fff';
                    }
                });

                // Update category price radios
                categoryRadios.forEach(radio => {
                    const label = radio.closest('.category-option');
                    const displayTag = label.querySelector('.cat-price-display');
                    const offlineVal = parseInt(radio.getAttribute('data-offline')) || 0;
                    const onlineValAttr = radio.getAttribute('data-online');
                    const onlineVal = onlineValAttr ? parseInt(onlineValAttr) : null;

                    if (selectedMode === 'online') {
                        radio.style.display = 'inline-block';
                        label.style.pointerEvents = 'auto';
                        
                        if (onlineVal !== null && !isNaN(onlineVal)) {
                            radio.value = onlineVal;
                            radio.disabled = false;
                            label.style.opacity = '1';
                            label.style.cursor = 'pointer';
                            displayTag.innerText = onlineVal.toLocaleString() + ' INR';
                        } else {
                            radio.disabled = true;
                            radio.checked = false;
                            label.style.opacity = '0.5';
                            label.style.cursor = 'not-allowed';
                            displayTag.innerText = 'Offline Only';
                        }
                    } else {
                        radio.style.display = 'none';
                        radio.disabled = true;
                        radio.checked = false;
                        label.style.pointerEvents = 'none';
                        label.style.borderColor = '#e2e8f0';
                        label.style.background = '#fff';
                        
                        label.style.opacity = '1';
                        label.style.cursor = 'default';
                        displayTag.innerText = offlineVal.toLocaleString() + ' INR';
                    }
                });

                calculateTotal();
            }

            function updatePaymentStyle() {
                // Reset all
                document.querySelectorAll('.payment-option, .pay-method-option').forEach(el => {
                    if (el.style.opacity !== '0.5') {
                        el.style.borderColor = '#e2e8f0';
                        el.style.background = '#fff';
                    }
                    
                    // Reset icon background for payment methods
                    const iconBg = el.querySelector('div[style*="rgba"]');
                    if(iconBg && el.classList.contains('pay-method-option')) {
                        iconBg.style.background = 'rgba(10, 25, 47, 0.05)';
                        const icon = iconBg.querySelector('i');
                        if(icon) icon.style.color = 'var(--navy-dark)';
                    }
                });
                
                // Style selected category
                categoryRadios.forEach(radio => {
                    if (radio.checked && !radio.disabled) {
                        const label = radio.closest('.payment-option');
                        label.style.borderColor = 'var(--teal-accent)';
                        label.style.background = '#f0fdfa';
                    }
                });
                
                // Style selected payment method
                paymentMethodRadios.forEach(radio => {
                    if (radio.checked) {
                        const label = radio.closest('.pay-method-option');
                        label.style.borderColor = 'var(--teal-accent)';
                        label.style.background = '#f0fdfa';
                        
                        // Highlight icon background
                        const iconBg = label.querySelector('div[style*="rgba"]');
                        if(iconBg) {
                            iconBg.style.background = 'rgba(0, 168, 150, 0.1)';
                            const icon = iconBg.querySelector('i');
                            if(icon) icon.style.color = 'var(--teal-accent)';
                        }
                    }
                });
                
                // Style addons
                addonCheckboxes.forEach(checkbox => {
                    if (checkbox.checked) {
                        const label = checkbox.closest('.payment-option');
                        label.style.borderColor = 'var(--teal-accent)';
                        label.style.background = '#f0fdfa';
                    }
                });
            }

            function calculateTotal() {
                let total = 0;
                let catName = "";
                let catPrice = 0;
                let catSelected = false;
                
                categoryRadios.forEach(radio => {
                    if(radio.checked && !radio.disabled) {
                        catPrice = parseInt(radio.value) || 0;
                        catName = radio.getAttribute('data-name');
                        catSelected = true;
                    }
                });

                const selectedMode = document.querySelector('input[name="participation_mode"]:checked')?.value || 'offline';
                const modeLabel = selectedMode === 'online' ? ' (Online)' : ' (Offline)';

                if (catSelected) {
                    sumCatName.innerText = catName + modeLabel + ' Registration';
                    sumCatPrice.innerText = catPrice.toLocaleString() + ' INR';
                    total += catPrice;
                } else {
                    sumCatName.innerText = 'Select a Category';
                    sumCatPrice.innerText = '0 INR';
                }

                // Handle dynamic addons summary
                dynamicAddonsSummary.innerHTML = '';
                addonCheckboxes.forEach(checkbox => {
                    if(checkbox.checked) {
                        const price = parseInt(checkbox.value) || 0;
                        const name = checkbox.getAttribute('data-name');
                        total += price;
                        
                        const div = document.createElement('div');
                        div.className = 'summary-line';
                        div.style.cssText = 'display: flex; justify-content: space-between; margin-bottom: 15px; color: #475569; font-size: 1.1rem;';
                        div.innerHTML = `<span>${name}</span><span style="font-weight: 600; color: var(--navy-dark);">${price.toLocaleString()} INR</span>`;
                        dynamicAddonsSummary.appendChild(div);
                    }
                });

                sumTotalPrice.innerText = total.toLocaleString() + ' INR';
                updatePaymentStyle();
            }

            // Add event listeners
            modeRadios.forEach(m => m.addEventListener('change', updateModePrices));
            categoryRadios.forEach(r => r.addEventListener('change', calculateTotal));
            paymentMethodRadios.forEach(r => r.addEventListener('change', updatePaymentStyle));
            addonCheckboxes.forEach(r => r.addEventListener('change', calculateTotal));
            
            // Initial call
            updateModePrices();
            calculateTotal();

            // Accordion Logic
            const headers = document.querySelectorAll('.accordion-header');
            headers.forEach(header => {
                header.addEventListener('click', () => {
                    const content = header.nextElementSibling;
                    const icon = header.querySelector('i');
                    const isOpen = content.style.display === 'block';
                    
                    // Close all others
                    document.querySelectorAll('.accordion-content').forEach(c => c.style.display = 'none');
                    document.querySelectorAll('.accordion-header').forEach(h => {
                        h.classList.remove('active');
                        h.style.background = '#f8f9fa';
                        const hIcon = h.querySelector('i');
                        if (hIcon) {
                            hIcon.classList.remove('fa-circle-arrow-up', 'fa-circle-chevron-up');
                            hIcon.classList.add('fa-circle-arrow-down');
                        }
                    });
                    
                    // Toggle current
                    if (!isOpen) {
                        content.style.display = 'block';
                        header.classList.add('active');
                        header.style.background = '#eaf8f6';
                        if (icon) {
                            icon.classList.remove('fa-circle-arrow-down', 'fa-circle-chevron-down');
                            icon.classList.add('fa-circle-arrow-up');
                        }
                    }
                });
            });
        });
    </script>
@endsection
