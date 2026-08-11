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

        <!-- Scientific Publications Block -->
        <div style="margin-top: 50px; background: #ffffff; border-radius: 20px; padding: 40px; box-shadow: 0 15px 40px rgba(17, 35, 64, 0.05); border: 1px solid #e2e8f0; position: relative; overflow: hidden;">
            <div style="position: absolute; right: 20px; top: 20px; opacity: 0.03; font-size: 8rem; color: #112340; pointer-events: none;">
                <i class="fa-solid fa-book-open"></i>
            </div>
            
            <div style="text-align: center; margin-bottom: 30px;">
                <span style="font-size: 0.9rem; font-weight: bold; color: #009688; text-transform: uppercase; letter-spacing: 2px;">Publication Outlets</span>
                <h3 style="font-size: 1.8rem; font-weight: 800; color: #112340; margin-top: 8px; margin-bottom: 12px;">Scientific Publications</h3>
                <div style="width: 50px; height: 3px; background: #009688; margin: 0 auto; border-radius: 1.5px;"></div>
                <p style="font-size: 1.05rem; color: #475569; max-width: 700px; margin: 15px auto 0; line-height: 1.6;">
                    Selected peer-reviewed manuscripts will be considered for publication in our partnering international journals and indexed proceedings.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px; margin-top: 30px;">
                
                <!-- Publication 1 -->
                <div style="background: #f8fbfa; border-left: 4px solid #009688; padding: 25px; border-radius: 12px; border-top: 1px solid #e2e8f0; border-right: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0; display: flex; align-items: flex-start; gap: 15px;">
                    <div style="width: 45px; height: 45px; border-radius: 50%; background: rgba(0, 150, 136, 0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <i class="fa-solid fa-square-poll-vertical" style="font-size: 1.25rem; color: #009688;"></i>
                    </div>
                    <div>
                        <h4 style="font-size: 1.15rem; font-weight: 700; color: #112340; margin: 0 0 8px 0;">Scopus-Indexed Journals</h4>
                        <p style="margin: 0; font-size: 0.95rem; color: #475569; line-height: 1.5;">Manuscripts meeting high academic standards will be recommended for fast-track publication in Scopus-indexed journals.</p>
                    </div>
                </div>

                <!-- Publication 2 -->
                <div style="background: #f8fbfa; border-left: 4px solid #84cc16; padding: 25px; border-radius: 12px; border-top: 1px solid #e2e8f0; border-right: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0; display: flex; align-items: flex-start; gap: 15px;">
                    <div style="width: 45px; height: 45px; border-radius: 50%; background: rgba(132, 204, 22, 0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <i class="fa-solid fa-barcode" style="font-size: 1.25rem; color: #84cc16;"></i>
                    </div>
                    <div>
                        <h4 style="font-size: 1.15rem; font-weight: 700; color: #112340; margin: 0 0 8px 0;">Edited ISBN Conference Proceedings</h4>
                        <p style="margin: 0; font-size: 0.95rem; color: #475569; line-height: 1.5;">Accepted abstracts and short papers will be compiled and published in official edited conference proceedings with a registered ISBN.</p>
                    </div>
                </div>

                <!-- Publication 3 -->
                <div style="background: #f8fbfa; border-left: 4px solid #3b82f6; padding: 25px; border-radius: 12px; border-top: 1px solid #e2e8f0; border-right: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0; display: flex; align-items: flex-start; gap: 15px;">
                    <div style="width: 45px; height: 45px; border-radius: 50%; background: rgba(59, 130, 246, 0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <i class="fa-solid fa-journal-whills" style="font-size: 1.25rem; color: #3b82f6;"></i>
                    </div>
                    <div>
                        <h4 style="font-size: 1.15rem; font-weight: 700; color: #112340; margin: 0 0 8px 0;">Special Issues</h4>
                        <p style="margin: 0; font-size: 0.95rem; color: #475569; line-height: 1.5;">Special thematic issues with partnering international journals (subject to standard peer-review processes).</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

