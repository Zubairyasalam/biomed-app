<!-- Abstract Guidelines Section -->
<section class="abstract-section" style="background-color: #f8fbfa; padding: 20px 0;">
    <div class="container" style="max-width: 95%; margin: 0 auto; padding: 0 20px;">
        
        <div class="abstract-grid workshop-box">
            
            <!-- Left Side: Information -->
            <div>
                <div class="section-subtitle" style="margin-bottom: 12px; font-weight: bold; color: #009688; text-transform: uppercase; letter-spacing: 2px; font-size: 1.1rem;">Call For Papers</div>
                <h2 class="section-title" style="margin-top: 0; color: #333; font-weight: 800; line-height: 1.2; margin-bottom: 25px;">Abstract Submission<br><span>Guidelines</span></h2>
                
                <p class="about-text" style="margin-bottom: 20px;">
                    {!! nl2br(e($settings['abstract_desc_1'] ?? 'Abstracts are invited for original research work that has not been published or submitted elsewhere.')) !!}
                </p>
                <p class="about-text" style="margin-bottom: 30px;">
                    {!! nl2br($settings['abstract_desc_2'] ?? 'Students, research scholars, faculty members, and industry participants may submit abstracts for <strong>oral and/or poster presentations</strong>.') !!}
                </p>

                <a href="/submit-paper" style="display: inline-block; background: #009688; color: #fff; padding: 12px 30px; border-radius: 30px; text-decoration: none; font-weight: bold; font-size: 0.95rem; box-shadow: 0 6px 20px rgba(0, 150, 136, 0.3); transition: transform 0.3s, box-shadow 0.3s;">Submit Abstract</a>
            </div>

            <!-- Right Side: Formatting Rules -->
            <div class="workshop-box" style="background: linear-gradient(145deg, #009688, #26a69a); color: #ffffff;">
                <i class="fa-solid fa-file-pen" style="position: absolute; right: -20px; bottom: -20px; font-size: 150px; opacity: 0.1; color: #ffffff;"></i>
                
                <h3 style="margin-top: 0; font-size: 1.8rem; margin-bottom: 30px; border-bottom: 1px solid rgba(255,255,255,0.2); padding-bottom: 15px;">Formatting Requirements</h3>
                
                <ul class="formatting-list" style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 20px;">
                    <li style="display: flex; align-items: flex-start; gap: 15px; font-size: 1.15rem; line-height: 1.4;">
                        <div style="width: 40px; height: 40px; border-radius: 10px; background-color: rgba(255,255,255,0.2); display: flex; justify-content: center; align-items: center; flex-shrink: 0; margin-top: 2px;">
                            @php $a1 = $settings['abstract_req1_icon'] ?? 'fa-solid fa-font'; @endphp
                            @if(str_starts_with($a1, 'fa-'))
                                <i class="{{ $a1 }}"></i>
                            @else
                                <img src="{{ asset($a1) }}" alt="Icon" style="max-width: 24px; max-height: 24px; object-fit: contain; filter: brightness(0) invert(1);">
                            @endif
                        </div>
                        <div style="flex: 1; text-align: left;">
                            <strong>Font:</strong> {{ $settings['abstract_req_font'] ?? 'Times New Roman, Size 12' }}
                        </div>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 15px; font-size: 1.15rem; line-height: 1.4;">
                        <div style="width: 40px; height: 40px; border-radius: 10px; background-color: rgba(255,255,255,0.2); display: flex; justify-content: center; align-items: center; flex-shrink: 0; margin-top: 2px;">
                            @php $a2 = $settings['abstract_req2_icon'] ?? 'fa-solid fa-align-left'; @endphp
                            @if(str_starts_with($a2, 'fa-'))
                                <i class="{{ $a2 }}"></i>
                            @else
                                <img src="{{ asset($a2) }}" alt="Icon" style="max-width: 24px; max-height: 24px; object-fit: contain; filter: brightness(0) invert(1);">
                            @endif
                        </div>
                        <div style="flex: 1; text-align: left;">
                            <strong>Spacing:</strong> {{ $settings['abstract_req_spacing'] ?? '1.5 line spacing' }}
                        </div>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 15px; font-size: 1.15rem; line-height: 1.4;">
                        <div style="width: 40px; height: 40px; border-radius: 10px; background-color: rgba(255,255,255,0.2); display: flex; justify-content: center; align-items: center; flex-shrink: 0; margin-top: 2px;">
                            @php $a3 = $settings['abstract_req3_icon'] ?? 'fa-solid fa-file-word'; @endphp
                            @if(str_starts_with($a3, 'fa-'))
                                <i class="{{ $a3 }}"></i>
                            @else
                                <img src="{{ asset($a3) }}" alt="Icon" style="max-width: 24px; max-height: 24px; object-fit: contain; filter: brightness(0) invert(1);">
                            @endif
                        </div>
                        <div style="flex: 1; text-align: left;">
                            <strong>Length:</strong> {{ $settings['abstract_req_length'] ?? 'Maximum of 250 words' }}
                        </div>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 15px; font-size: 1.15rem; line-height: 1.4;">
                        <div style="width: 40px; height: 40px; border-radius: 10px; background-color: rgba(255,255,255,0.2); display: flex; justify-content: center; align-items: center; flex-shrink: 0; margin-top: 2px;">
                            @php $a4 = $settings['abstract_req4_icon'] ?? 'fa-solid fa-tags'; @endphp
                            @if(str_starts_with($a4, 'fa-'))
                                <i class="{{ $a4 }}"></i>
                            @else
                                <img src="{{ asset($a4) }}" alt="Icon" style="max-width: 24px; max-height: 24px; object-fit: contain; filter: brightness(0) invert(1);">
                            @endif
                        </div>
                        <div style="flex: 1; text-align: left;">
                            <strong>Keywords:</strong> {{ $settings['abstract_req_keywords'] ?? 'Maximum of 5 keywords' }}
                        </div>
                    </li>
                </ul>

            </div>

        </div>

    </div>
</section>
