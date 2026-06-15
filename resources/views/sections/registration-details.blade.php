<!-- Registration Details Section (Professional Dark Theme) -->
<section id="registration-plans" class="registration-section" style="background-color: #0f172a; padding: 40px 0; position: relative; overflow: hidden;">
    <!-- Abstract background elements -->
    <div style="position: absolute; top: -100px; left: -100px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(0, 150, 136, 0.15) 0%, rgba(15, 23, 42, 0) 70%); border-radius: 50%;"></div>
    <div style="position: absolute; bottom: -100px; right: -100px; width: 500px; height: 500px; background: radial-gradient(circle, rgba(38, 166, 154, 0.1) 0%, rgba(15, 23, 42, 0) 70%); border-radius: 50%;"></div>

    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px; position: relative; z-index: 1;">
        
        <!-- Centered Header -->
        <div class="section-header-center" style="text-align: center; margin-bottom: 30px;">
            <div class="section-subtitle" style="margin-bottom: 8px; font-weight: bold; color: #4fd1c5; text-transform: uppercase; letter-spacing: 2px; font-size: 1rem;">Secure Your Spot</div>
            <h2 class="section-title" style="margin-top: 0; margin-bottom: 12px; color: #ffffff; font-weight: 800; line-height: 1.2;">Registration <br class="d-md-none"><span>Plans</span></h2>
            <div class="header-line" style="width: 60px; height: 4px; background-color: #4fd1c5; margin: 0 auto 15px auto;"></div>
            <p class="participants-desc" style="max-width: 700px; margin: 0 auto; color: #94a3b8 !important;">
                Choose the appropriate registration tier to access the conference. Super early-bird rates are currently active.
            </p>
        </div>

        <!-- 4-Column Pricing Grid -->
        <div class="pricing-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 25px; margin-bottom: 60px; max-width: 1200px; margin: 0 auto;">
            
            @if(isset($registrationFees) && count($registrationFees) > 0)
                @foreach($registrationFees as $fee)
                    @if($fee->is_highlighted)
                        <!-- Highlighted Card -->
                        <div class="pricing-card featured-card" style="background-color: #1e293b; border: 2px solid #4fd1c5; border-radius: 20px; padding: 40px 30px 30px 30px; display: flex; flex-direction: column; position: relative; box-shadow: 0 0 30px rgba(79, 209, 197, 0.15); z-index: 2; text-align: center;">
                            <div class="pricing-badge" style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); background: linear-gradient(90deg, #009688, #4fd1c5); color: #fff; padding: 6px 20px; border-radius: 20px; font-weight: bold; font-size: 0.85rem; letter-spacing: 1px; text-transform: uppercase; white-space: nowrap; box-shadow: 0 4px 10px rgba(0,0,0,0.2);">Most Popular</div>
                            
                            <h3 class="pricing-title" style="margin: 0 0 10px 0; color: #4fd1c5; font-size: 1.25rem; font-weight: 700;">{{ $fee->category_name }}</h3>
                            <div class="pricing-price" style="margin-bottom: 25px; padding-bottom: 25px; border-bottom: 1px solid rgba(79, 209, 197, 0.2); display: flex; justify-content: center; align-items: baseline; gap: 5px;">
                                <span style="font-size: 2.5rem; font-weight: 800; color: #ffffff;">{{ $fee->price_inr }}</span>
                                <span style="font-size: 1rem; color: #94a3b8; font-weight: 500;">INR</span>
                            </div>
                            
                            <div style="display: flex; flex-direction: column; align-items: center; flex-grow: 1; margin-bottom: 30px;">
                                <div style="display: inline-block; text-align: left;">
                                    <ul class="pricing-list" style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 12px;">
                                        @php $features = json_decode($fee->features, true) ?? []; @endphp
                                        @foreach($features as $feature)
                                            <li style="display: flex; gap: 10px; color: #cbd5e1; font-size: 0.95rem; align-items: flex-start;"><i class="fa-solid fa-circle-check" style="color: #4fd1c5; margin-top: 4px; width: 16px; text-align: center;"></i> <span>{{ $feature }}</span></li>
                                        @endforeach
                                        <li style="display: flex; gap: 10px; color: #64748b; font-size: 0.95rem; align-items: flex-start;"><i class="fa-solid fa-xmark" style="color: #64748b; margin-top: 4px; width: 16px; text-align: center;"></i> <span>Metagenomics Workshop</span></li>
                                    </ul>
                                </div>
                            </div>
                            <a class="pricing-btn" href="/registration" style="display: block; text-align: center; background: #4fd1c5; color: #0f172a; padding: 12px 0; border-radius: 10px; text-decoration: none; font-weight: bold; font-size: 1rem; box-shadow: 0 10px 20px rgba(79, 209, 197, 0.2); transition: all 0.3s ease;" onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">Register Now</a>
                        </div>
                    @else
                        <!-- Standard Card -->
                        <div class="pricing-card" style="background-color: #1e293b; border: 1px solid #334155; border-radius: 20px; padding: 40px 30px 30px 30px; display: flex; flex-direction: column; transition: all 0.3s ease; box-shadow: 0 15px 30px rgba(0,0,0,0.2); text-align: center;" onmouseover="this.style.borderColor='#4fd1c5'; this.style.boxShadow='0 0 20px rgba(79, 209, 197, 0.15)';" onmouseout="this.style.borderColor='#334155'; this.style.boxShadow='0 15px 30px rgba(0,0,0,0.2)';">
                            <h3 class="pricing-title" style="margin: 0 0 10px 0; color: #f8fafc; font-size: 1.25rem; font-weight: 700;">{{ $fee->category_name }}</h3>
                            <div class="pricing-price" style="margin-bottom: 25px; padding-bottom: 25px; border-bottom: 1px solid #334155; display: flex; justify-content: center; align-items: baseline; gap: 5px;">
                                <span style="font-size: 2.5rem; font-weight: 800; color: #ffffff;">{{ $fee->price_inr }}</span>
                                <span style="font-size: 1rem; color: #94a3b8; font-weight: 500;">INR</span>
                            </div>
                            
                            <div style="display: flex; flex-direction: column; align-items: center; flex-grow: 1; margin-bottom: 30px;">
                                <div style="display: inline-block; text-align: left;">
                                    <ul class="pricing-list" style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 12px;">
                                        @php $features = json_decode($fee->features, true) ?? []; @endphp
                                        @foreach($features as $feature)
                                            <li style="display: flex; gap: 10px; color: #cbd5e1; font-size: 0.95rem; align-items: flex-start;"><i class="fa-solid fa-circle-check" style="color: #4fd1c5; margin-top: 4px; width: 16px; text-align: center;"></i> <span>{{ $feature }}</span></li>
                                        @endforeach
                                        <li style="display: flex; gap: 10px; color: #64748b; font-size: 0.95rem; align-items: flex-start;"><i class="fa-solid fa-xmark" style="color: #64748b; margin-top: 4px; width: 16px; text-align: center;"></i> <span>Metagenomics Workshop</span></li>
                                    </ul>
                                </div>
                            </div>
                            <a class="pricing-btn" href="/registration" style="display: block; text-align: center; background: transparent; color: #4fd1c5; padding: 12px 0; border-radius: 10px; text-decoration: none; font-weight: bold; font-size: 1rem; border: 1px solid #334155; transition: all 0.3s ease;" onmouseover="this.style.background='#4fd1c5'; this.style.color='#0f172a'; this.style.borderColor='#4fd1c5';" onmouseout="this.style.background='transparent'; this.style.color='#4fd1c5'; this.style.borderColor='#334155';">Register Now</a>
                        </div>
                    @endif
                @endforeach
            @else
                <!-- Fallback if database is empty -->
                <div style="grid-column: 1 / -1; text-align: center; color: #94a3b8; padding: 40px;">
                    <i class="fa-solid fa-tags" style="font-size: 3rem; margin-bottom: 15px; color: #334155;"></i>
                    <p>Registration plans are currently being updated. Please check back soon.</p>
                </div>
            @endif

        </div>

        <!-- Add-on Workshop Alert Mobile Styles -->
        <style>
            @media (max-width: 768px) {
                .addon-card {
                    flex-direction: column !important;
                    align-items: flex-start !important;
                    padding: 25px 20px !important;
                    gap: 25px !important;
                    margin-top: 30px !important;
                }
                .addon-top-row {
                    flex-direction: column !important;
                    align-items: flex-start !important;
                    gap: 15px !important;
                    min-width: 100% !important;
                }
                .addon-bottom-row {
                    width: 100% !important;
                    flex-direction: column !important;
                    align-items: flex-start !important;
                    gap: 20px !important;
                }
                .addon-price-col {
                    align-items: flex-start !important;
                }
                .addon-btn {
                    width: 100% !important;
                    text-align: center !important;
                }
            }
        </style>
        <div class="addon-card" style="background: rgba(30, 41, 59, 0.8); backdrop-filter: blur(10px); border: 1px solid rgba(79, 209, 197, 0.3); border-radius: 16px; padding: 25px 40px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px; max-width: 1200px; width: 100%; margin: 40px auto 0 auto; box-shadow: 0 15px 30px rgba(0,0,0,0.2);">
            <div class="addon-top-row" style="display: flex; align-items: center; gap: 20px; flex: 1; min-width: 300px;">
                <div class="addon-icon-wrapper" style="width: 50px; height: 50px; border-radius: 12px; background: rgba(79, 209, 197, 0.15); display: flex; justify-content: center; align-items: center; flex-shrink: 0;">
                    <i class="fa-solid fa-laptop-medical" style="font-size: 1.8rem; color: #4fd1c5;"></i>
                </div>
                <div>
                    <h4 class="addon-title" style="margin: 0 0 5px 0; color: #f8fafc; font-size: 1.3rem;">Pre-Conference Metagenomics Workshop</h4>
                    <p style="margin: 0; color: #94a3b8; font-size: 1rem;">Intensive one-day hands-on training. Must be added to your registration.</p>
                </div>
            </div>
            <div class="addon-bottom-row" style="display: flex; align-items: center; gap: 20px; flex-shrink: 0;">
                <div class="addon-price-col" style="display: flex; flex-direction: column; align-items: flex-end;">
                    <div class="addon-price" style="color: #4fd1c5; font-size: 1.8rem; font-weight: 800; display: flex; align-items: baseline; gap: 5px; line-height: 1;">
                        500 <span style="font-size: 1.1rem;">INR</span>
                    </div>
                    <div class="addon-seats-badge" style="color: #ef4444; font-size: 0.8rem; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; margin-top: 5px;">Limited Seats</div>
                </div>
                <a class="addon-btn" href="/registration" style="background: transparent; color: #f8fafc; border: 2px solid #334155; padding: 12px 25px; border-radius: 30px; text-decoration: none; font-weight: bold; transition: all 0.3s ease; white-space: nowrap;" onmouseover="this.style.borderColor='#4fd1c5'; this.style.color='#4fd1c5'" onmouseout="this.style.borderColor='#334155'; this.style.color='#f8fafc'">Add to Ticket</a>
            </div>
        </div>

    </div>
</section>
