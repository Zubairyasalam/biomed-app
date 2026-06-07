<!-- Abstract Guidelines Section -->
<section class="abstract-section" style="background-color: #f8fbfa; padding: 20px 0;">
    <div class="container" style="max-width: 95%; margin: 0 auto; padding: 0 20px;">
        
        <div style="background-color: #ffffff; border-radius: 24px; padding: 50px; box-shadow: 0 20px 60px rgba(0, 150, 136, 0.05); display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
            
            <!-- Left Side: Information -->
            <div>
                <div class="section-subtitle" style="margin-bottom: 12px; font-weight: bold; color: #009688; text-transform: uppercase; letter-spacing: 2px; font-size: 1.1rem;">Call For Papers</div>
                <h2 class="section-title" style="margin-top: 0; font-size: 2.8rem; color: #333; font-weight: 800; line-height: 1.2; margin-bottom: 25px;">Abstract Submission<br><span>Guidelines</span></h2>
                
                <p style="font-size: 1.2rem; color: #555; line-height: 1.7; margin-bottom: 20px;">
                    {!! nl2br(e($settings['abstract_desc_1'] ?? 'Abstracts are invited for original research work that has not been published or submitted elsewhere.')) !!}
                </p>
                <p style="font-size: 1.15rem; color: #666; line-height: 1.7; margin-bottom: 30px;">
                    {!! nl2br($settings['abstract_desc_2'] ?? 'Students, research scholars, faculty members, and industry participants may submit abstracts for <strong>oral and/or poster presentations</strong>.') !!}
                </p>

                <a href="#" style="display: inline-block; background: #009688; color: #fff; padding: 15px 40px; border-radius: 30px; text-decoration: none; font-weight: bold; font-size: 1.1rem; box-shadow: 0 8px 25px rgba(0, 150, 136, 0.3); transition: transform 0.3s, box-shadow 0.3s;">Submit Abstract</a>
            </div>

            <!-- Right Side: Formatting Rules -->
            <div style="background: linear-gradient(145deg, #009688, #26a69a); border-radius: 20px; padding: 40px; color: #ffffff; position: relative; overflow: hidden; box-shadow: 0 15px 35px rgba(0, 150, 136, 0.2);">
                <i class="fa-solid fa-file-pen" style="position: absolute; right: -20px; bottom: -20px; font-size: 150px; opacity: 0.1; color: #ffffff;"></i>
                
                <h3 style="margin-top: 0; font-size: 1.8rem; margin-bottom: 30px; border-bottom: 1px solid rgba(255,255,255,0.2); padding-bottom: 15px;">Formatting Requirements</h3>
                
                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 20px;">
                    <li style="display: flex; align-items: center; gap: 15px; font-size: 1.15rem;">
                        <div style="width: 40px; height: 40px; border-radius: 10px; background-color: rgba(255,255,255,0.2); display: flex; justify-content: center; align-items: center; flex-shrink: 0;">
                            <i class="fa-solid fa-font"></i>
                        </div>
                        <strong>Font:</strong> {{ $settings['abstract_req_font'] ?? 'Times New Roman, Size 12' }}
                    </li>
                    <li style="display: flex; align-items: center; gap: 15px; font-size: 1.15rem;">
                        <div style="width: 40px; height: 40px; border-radius: 10px; background-color: rgba(255,255,255,0.2); display: flex; justify-content: center; align-items: center; flex-shrink: 0;">
                            <i class="fa-solid fa-align-left"></i>
                        </div>
                        <strong>Spacing:</strong> {{ $settings['abstract_req_spacing'] ?? '1.5 line spacing' }}
                    </li>
                    <li style="display: flex; align-items: center; gap: 15px; font-size: 1.15rem;">
                        <div style="width: 40px; height: 40px; border-radius: 10px; background-color: rgba(255,255,255,0.2); display: flex; justify-content: center; align-items: center; flex-shrink: 0;">
                            <i class="fa-solid fa-file-word"></i>
                        </div>
                        <strong>Length:</strong> {{ $settings['abstract_req_length'] ?? 'Maximum of 250 words' }}
                    </li>
                    <li style="display: flex; align-items: center; gap: 15px; font-size: 1.15rem;">
                        <div style="width: 40px; height: 40px; border-radius: 10px; background-color: rgba(255,255,255,0.2); display: flex; justify-content: center; align-items: center; flex-shrink: 0;">
                            <i class="fa-solid fa-tags"></i>
                        </div>
                        <strong>Keywords:</strong> {{ $settings['abstract_req_keywords'] ?? 'Maximum of 5 keywords' }}
                    </li>
                </ul>

            </div>

        </div>

    </div>
</section>
