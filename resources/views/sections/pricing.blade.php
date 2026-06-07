<!-- Registration Plans Section -->
<section class="pricing-section" style="background-color: #0f1524; padding: 60px 0;">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 20px;">
        
        <div class="section-header-center" style="text-align: center; margin-bottom: 50px;">
            <div class="section-subtitle" style="margin-bottom: 12px; font-weight: bold; color: #009688; text-transform: uppercase; letter-spacing: 2px; font-size: 1.1rem;">Secure Your Spot</div>
            <h2 class="section-title" style="margin-top: 0; font-size: 3.2rem; color: #ffffff; font-weight: 800;">Registration <span>Plans</span></h2>
            <div class="header-line" style="width: 80px; height: 4px; background-color: #009688; margin: 20px auto;"></div>
            <p style="font-size: 1.15rem; color: #94a3b8; max-width: 800px; margin: 20px auto 0; line-height: 1.6;">
                Choose the appropriate registration tier to access the conference.<br>
                Super early-bird rates are currently active.
            </p>
        </div>

        <div class="pricing-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; align-items: stretch;">
            
            @foreach($registrationFees as $fee)
                @php
                    $features = json_decode($fee->features, true) ?? [];
                @endphp
                <div class="pricing-card" style="background-color: #1e293b; padding: 40px 25px; border-radius: 12px; display: flex; flex-direction: column; position: relative; border: {{ $fee->is_highlighted ? '2px solid #009688' : '1px solid rgba(255,255,255,0.05)' }}; transform: {{ $fee->is_highlighted ? 'scale(1.03)' : 'scale(1)' }}; box-shadow: {{ $fee->is_highlighted ? '0 20px 40px rgba(0, 150, 136, 0.15)' : 'none' }}; z-index: {{ $fee->is_highlighted ? '10' : '1' }};">
                    
                    @if($fee->is_highlighted)
                        <div style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); background-color: #26a69a; color: #fff; padding: 6px 15px; border-radius: 20px; font-size: 0.8rem; font-weight: bold; text-transform: uppercase; letter-spacing: 1px;">
                            Most Popular
                        </div>
                    @endif

                    <h3 style="margin: 0 0 15px 0; color: #ffffff; font-size: 1.25rem; font-weight: 700;">{{ $fee->category_name }}</h3>
                    <div style="font-size: 2.8rem; font-weight: 800; color: #ffffff; margin-bottom: 25px; display: flex; align-items: baseline; gap: 5px;">
                        {{ $fee->price_inr }} <span style="font-size: 1rem; color: #94a3b8; font-weight: 400;">INR</span>
                    </div>

                    <div style="height: 1px; background-color: rgba(255,255,255,0.1); margin-bottom: 25px;"></div>

                    <ul style="list-style: none; padding: 0; margin: 0; flex-grow: 1; display: flex; flex-direction: column; gap: 15px;">
                        @foreach($features as $feature)
                            <li style="display: flex; gap: 10px; font-size: 0.95rem; color: #cbd5e1; line-height: 1.5;">
                                <i class="fa-solid fa-circle-check" style="color: #009688; margin-top: 4px; font-size: 0.9rem;"></i> 
                                {{ $feature }}
                            </li>
                        @endforeach
                    </ul>

                    <a href="{{ route('registration') }}" style="display: block; width: 100%; text-align: center; background-color: {{ $fee->is_highlighted ? '#26a69a' : 'rgba(255,255,255,0.05)' }}; color: {{ $fee->is_highlighted ? '#ffffff' : '#38bdf8' }}; padding: 12px 0; border-radius: 8px; text-decoration: none; font-weight: bold; font-size: 1rem; margin-top: 30px; transition: all 0.3s ease;">
                        Register Now
                    </a>
                </div>
            @endforeach

        </div>

        @if(isset($addons) && $addons->count() > 0)
            <div style="margin-top: 40px; display: flex; justify-content: center;">
                @foreach($addons as $addon)
                    <div style="background-color: #1e293b; padding: 25px; border-radius: 12px; border: 1px solid rgba(0, 150, 136, 0.3); max-width: 800px; width: 100%; display: flex; flex-direction: column; gap: 20px;">
                        
                        <!-- Top Row: Icon, Title, Desc -->
                        <div style="display: flex; align-items: flex-start; gap: 15px;">
                            <div style="width: 50px; height: 50px; border-radius: 10px; background-color: rgba(0, 150, 136, 0.15); display: flex; justify-content: center; align-items: center; flex-shrink: 0;">
                                <i class="fa-solid fa-laptop-medical" style="font-size: 1.5rem; color: #26a69a;"></i>
                            </div>
                            <div>
                                <h4 style="margin: 0 0 5px 0; color: #ffffff; font-size: 1.2rem; font-weight: 700;">{{ $addon->title }}</h4>
                                <p style="margin: 0; color: #94a3b8; font-size: 0.95rem;">{{ $addon->description ?? 'Intensive one-day hands-on training. Must be added to your registration.' }}</p>
                            </div>
                        </div>

                        <!-- Bottom Row: Price, Badge, Button -->
                        <div style="display: flex; align-items: center; gap: 25px;">
                            <div style="display: flex; flex-direction: column;">
                                <div style="font-size: 1.6rem; font-weight: 800; color: #26a69a;">
                                    {{ $addon->price }} <span style="font-size: 1.1rem;">INR</span>
                                </div>
                                @if($addon->badge_text)
                                    <div style="color: #ef4444; font-size: 0.75rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; margin-top: 2px;">
                                        {{ $addon->badge_text }}
                                    </div>
                                @endif
                            </div>
                            
                            <a href="{{ route('registration') }}" style="background-color: transparent; border: 1px solid rgba(255,255,255,0.1); color: #ffffff; padding: 8px 20px; border-radius: 20px; text-decoration: none; font-size: 0.9rem; font-weight: 600; transition: all 0.3s ease;">
                                Add to Ticket
                            </a>
                        </div>

                    </div>
                @endforeach
            </div>
        @endif

    </div>
</section>
