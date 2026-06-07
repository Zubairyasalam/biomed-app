@extends('layouts.app')

@section('content')

    @include('sections.topbar')
    @include('sections.navbar')

    <!-- Page Banner -->
    <div class="page-banner">
        <div class="page-banner-content">
            <h1>REGISTRATION</h1>
        </div>
    </div>

    <!-- Registration Section -->
    <section class="registration-section section-padding" style="background-color: #f8f9fa;">
        <div class="container registration-container">
            
            <!-- Instructions -->
            <div class="reg-instructions" style="margin-bottom: 40px; background: #fff; padding: 25px; border-radius: 12px; border-left: 4px solid var(--teal-accent); box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
                <p style="margin: 0; color: #475569; line-height: 1.6;">{!! $settings['reg_page_notice'] ?? 'Please complete all fields. Registration fee must be paid online. After payment, you will receive a confirmation email and receipt within 24-48 hours. If not, contact us at <a href="mailto:contact@biomedsummit.org" style="color: var(--teal-accent); font-weight: 600;">contact@biomedsummit.org</a>.<br><strong>Note:</strong> All amounts are in INR. A secure payment gateway will process your transaction on the next step.' !!}</p>
            </div>

            <form id="registration-form" action="#" method="POST">
                @csrf
                
                <!-- Personal Info Grid -->
                <div class="reg-form-grid">
                    <div class="form-group" style="grid-column: span 3;">
                        <select name="title" class="form-control" required>
                            <option value="">Select</option>
                            <option value="Mr">Mr.</option>
                            <option value="Ms">Ms.</option>
                            <option value="Dr">Dr.</option>
                            <option value="Prof">Prof.</option>
                        </select>
                    </div>
                    <div class="form-group" style="grid-column: span 9;">
                        <input type="text" name="name" class="form-control" placeholder="{{ $settings['reg_ph_name'] ?? 'Enter your name' }}" required>
                    </div>
                    
                    <div class="form-group" style="grid-column: 1 / -1;">
                        <input type="text" name="organization" class="form-control" placeholder="{{ $settings['reg_ph_org'] ?? 'Organization/Institution' }}" required>
                    </div>

                    <div class="form-group" style="grid-column: span 6;">
                        <input type="email" name="email" class="form-control" placeholder="{{ $settings['reg_ph_email'] ?? 'Enter your email' }}" required>
                    </div>
                    <div class="form-group" style="grid-column: span 6;">
                        <input type="text" name="phone" class="form-control" placeholder="{{ $settings['reg_ph_phone'] ?? 'Enter your phone number' }}" required>
                    </div>

                    <div class="form-group" style="grid-column: span 4;">
                        <input type="text" name="city" class="form-control" placeholder="{{ $settings['reg_ph_city'] ?? 'Enter your city name' }}" required>
                    </div>
                    <div class="form-group" style="grid-column: span 4;">
                        <input type="text" name="country" class="form-control" placeholder="{{ $settings['reg_ph_country'] ?? 'Enter your Country' }}" required>
                    </div>
                    <div class="form-group" style="grid-column: span 4;">
                        <input type="text" name="postal_code" class="form-control" placeholder="{{ $settings['reg_ph_postal'] ?? 'Enter your Postal Code' }}" required>
                    </div>

                    <div class="form-group" style="grid-column: 1 / -1;">
                        <select name="interested_in" class="form-control" required>
                            <option value="">Select Interested In</option>
                            @php
                                $interestOptions = \App\Models\InterestOption::orderBy('sort_order')->get();
                            @endphp
                            @foreach($interestOptions as $option)
                                <option value="{{ $option->name }}">{{ $option->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="section-divider" style="margin: 40px 0;"></div>

                <!-- Registration Category -->
                <div class="reg-section-title" style="margin-bottom: 25px;">
                    <h2 style="font-size: 2rem; color: var(--navy-dark);">Select Category</h2>
                    <p style="color: #64748b; font-size: 1.05rem;">{{ $settings['reg_category_subtitle'] ?? 'Registration includes conference kit, certificate, lunch and refreshment.' }}</p>
                </div>

                <div class="category-selection" style="display: flex; flex-direction: column; gap: 15px; margin-bottom: 40px;">
                    @foreach($registrationFees as $index => $fee)
                        <label class="payment-option" style="display: flex; justify-content: space-between; align-items: center; padding: 20px; border: 2px solid #e2e8f0; border-radius: 12px; cursor: pointer; transition: all 0.3s; background: #fff;">
                            <div style="display: flex; align-items: center; gap: 15px;">
                                <input type="radio" name="reg_category" value="{{ $fee->price_inr }}" data-name="{{ $fee->category_name }}" required style="width: 22px; height: 22px; accent-color: var(--teal-accent);">
                                <span style="font-weight: 700; font-size: 1.15rem; color: var(--navy-dark);">{{ $fee->category_name }}</span>
                            </div>
                            <strong style="font-size: 1.3rem; color: var(--teal-accent);">{{ number_format((float)$fee->price_inr) }} INR</strong>
                        </label>
                    @endforeach
                </div>

                <!-- Add-On -->
                <div class="reg-section-title" style="margin-bottom: 20px;">
                    <h2 style="font-size: 1.8rem; color: var(--navy-dark);">{{ $settings['reg_addon_title'] ?? 'Add-Ons' }}</h2>
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

                <!-- Summary Box -->
                <div class="reg-summary" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 35px; box-shadow: 0 15px 35px rgba(0,0,0,0.05); margin-bottom: 35px;">
                    <h3 style="margin-top: 0; margin-bottom: 25px; color: var(--navy-dark); border-bottom: 2px solid #f1f5f9; padding-bottom: 15px; font-size: 1.5rem;">Order Summary</h3>
                    
                    <div class="summary-line" style="display: flex; justify-content: space-between; margin-bottom: 15px; color: #475569; font-size: 1.1rem;">
                        <span id="sum-cat-name">Select a Category</span>
                        <span id="sum-cat-price" style="font-weight: 600; color: var(--navy-dark);">0 INR</span>
                    </div>
                    <div id="dynamic-addons-summary"></div>
                    
                    <div class="summary-line summary-total" style="display: flex; justify-content: space-between; margin-top: 10px; padding-top: 15px; border-top: 2px dashed #cbd5e1; font-weight: 800; font-size: 1.5rem; color: var(--navy-dark);">
                        <span>Total Amount:</span>
                        <span id="sum-total-price" style="color: var(--teal-accent);">0 INR</span>
                    </div>
                </div>

                <!-- Payment Method -->
                <div class="reg-section-title" style="margin-bottom: 20px;">
                    <h2 style="font-size: 1.8rem; color: var(--navy-dark);">Payment Method</h2>
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

                <div class="reg-consent" style="margin-bottom: 35px; background: #f8fafc; padding: 20px; border-radius: 10px; border: 1px solid #e2e8f0;">
                    <label style="display: flex; gap: 12px; align-items: flex-start; cursor: pointer; margin: 0;">
                        <input type="checkbox" name="consent" required style="margin-top: 4px; width: 18px; height: 18px; accent-color: var(--teal-accent);"> 
                        <span style="color: #475569; line-height: 1.6; font-size: 0.95rem;">By clicking "Proceed to Pay", I agree to the <a href="#" style="color: var(--teal-accent); font-weight: 600;">Privacy Policy</a>, <a href="#" style="color: var(--teal-accent); font-weight: 600;">Terms & Conditions</a> and <a href="#" style="color: var(--teal-accent); font-weight: 600;">Cancellation Policy</a>.</span>
                    </label>
                </div>

                <div class="reg-actions" style="display: flex; justify-content: flex-end;">
                    <button type="submit" class="btn btn-teal" style="padding: 16px 40px; font-size: 1.2rem; border-radius: 10px; width: 100%; box-shadow: 0 10px 20px rgba(0, 168, 150, 0.2); display: flex; justify-content: center; align-items: center; gap: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">Proceed to Pay <i class="fa-solid fa-arrow-right"></i></button>
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
            const categoryRadios = document.querySelectorAll('input[name="reg_category"]');
            const paymentMethodRadios = document.querySelectorAll('input[name="payment_method"]');
            const addonCheckboxes = document.querySelectorAll('.addon-checkbox');
            
            const sumCatName = document.getElementById('sum-cat-name');
            const sumCatPrice = document.getElementById('sum-cat-price');
            const dynamicAddonsSummary = document.getElementById('dynamic-addons-summary');
            const sumTotalPrice = document.getElementById('sum-total-price');

            function updatePaymentStyle() {
                // Reset all
                document.querySelectorAll('.payment-option, .pay-method-option').forEach(el => {
                    el.style.borderColor = '#e2e8f0';
                    el.style.background = '#fff';
                    
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
                    if (radio.checked) {
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
                    if(radio.checked) {
                        catPrice = parseInt(radio.value) || 0;
                        catName = radio.getAttribute('data-name');
                        catSelected = true;
                    }
                });

                if (catSelected) {
                    sumCatName.innerText = catName + ' Registration';
                    sumCatPrice.innerText = catPrice + ' INR';
                    total += catPrice;
                } else {
                    sumCatName.innerText = 'Select a Category';
                    sumCatPrice.innerText = '0 INR';
                }

                // Handle dynamic addons summary
                dynamicAddonsSummary.innerHTML = '';
                addonCheckboxes.forEach(checkbox => {
                    if(checkbox.checked) {
                        const price = parseInt(checkbox.value);
                        const name = checkbox.getAttribute('data-name');
                        total += price;
                        
                        const div = document.createElement('div');
                        div.className = 'summary-line';
                        div.style.cssText = 'display: flex; justify-content: space-between; margin-bottom: 15px; color: #475569; font-size: 1.1rem;';
                        div.innerHTML = `<span>${name}</span><span style="font-weight: 600; color: var(--navy-dark);">${price} INR</span>`;
                        dynamicAddonsSummary.appendChild(div);
                    }
                });

                sumTotalPrice.innerText = total + ' INR';
                updatePaymentStyle();
            }

            // Add event listeners
            categoryRadios.forEach(r => r.addEventListener('change', calculateTotal));
            paymentMethodRadios.forEach(r => r.addEventListener('change', updatePaymentStyle));
            addonCheckboxes.forEach(r => r.addEventListener('change', calculateTotal));
            
            // Initial call
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
