<!-- Abstract Guidelines Section -->
<section class="abstract-section" style="background-color: #f8fbfa; padding: 20px 0;">
    <div class="container" style="max-width: 95%; margin: 0 auto; padding: 0 20px;">
        
        <style>
            .premium-guideline-card {
                background: linear-gradient(145deg, #ffffff, #f8fafc);
                padding: 35px;
                border-radius: 20px;
                box-shadow: 0 10px 40px rgba(0, 150, 136, 0.08);
                border: 1px solid rgba(0, 150, 136, 0.15);
                position: relative;
                overflow: hidden;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                display: flex;
                flex-direction: column;
                height: 100%;
            }
            .premium-guideline-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 15px 50px rgba(0, 150, 136, 0.12);
            }
            .premium-guideline-title {
                margin-top: 0;
                margin-bottom: 25px;
                font-size: 1.25rem;
                color: #0f172a;
                font-weight: 800;
                line-height: 1.4;
                position: relative;
                z-index: 1;
                display: flex;
                align-items: flex-start;
                gap: 15px;
                text-transform: uppercase;
            }
            .premium-guideline-icon {
                background: rgba(0, 150, 136, 0.1);
                color: #009688;
                width: 48px;
                height: 48px;
                border-radius: 12px;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-shrink: 0;
                font-size: 1.4rem;
            }
            .premium-guideline-list {
                list-style: none;
                padding: 0;
                margin: 0;
                display: flex;
                flex-direction: column;
                gap: 16px;
                position: relative;
                z-index: 1;
                flex-grow: 1;
            }
            .premium-guideline-list li {
                display: flex;
                gap: 12px;
                font-size: 1.05rem;
                color: #475569;
                line-height: 1.5;
                align-items: flex-start;
                font-weight: 500;
            }
            .premium-guideline-list li i {
                color: #009688;
                margin-top: 5px;
                font-size: 1rem;
            }
            .guidelines-grid-2 {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
                align-items: stretch;
            }
            @media (max-width: 991px) {
                .guidelines-grid-2 {
                    grid-template-columns: 1fr;
                }
            }
        </style>

        <div style="margin-bottom: 40px;">
            
            <!-- Abstract Submission Guidelines (Full width) -->
            <div class="premium-guideline-card" style="margin-bottom: 30px;">
                <h3 class="premium-guideline-title">
                    <div class="premium-guideline-icon"><i class="fa-solid fa-file-pen"></i></div>
                    <div>ABSTRACT SUBMISSION GUIDELINES</div>
                </h3>
                <ul class="premium-guideline-list" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px 40px;">
                    <li><i class="fa-solid fa-check"></i> <span>Abstracts should be original and relevant to the conference themes.</span></li>
                    <li><i class="fa-solid fa-check"></i> <span><strong>Word Limit:</strong> 250–300 words</span></li>
                    <li><i class="fa-solid fa-check"></i> <span><strong>Format:</strong> Title, Authors, Affiliation, Background, Objectives, Methods, Results, Conclusion, Keywords</span></li>
                    <li><i class="fa-solid fa-check"></i> <span>Submit in MS Word format (.doc or .docx)</span></li>
                    <li><i class="fa-solid fa-check"></i> <span>Presenting author must register for the conference.</span></li>
                    <li><i class="fa-solid fa-check"></i> <span>All abstracts will be peer reviewed.</span></li>
                </ul>
                <div style="margin-top: 35px; padding-top: 25px; border-top: 1px dashed rgba(0, 150, 136, 0.2); text-align: center;">
                    <a href="/submit-paper" style="display: inline-block; background: #009688; color: #fff; padding: 14px 40px; border-radius: 30px; text-decoration: none; font-weight: bold; font-size: 1.05rem; box-shadow: 0 6px 20px rgba(0, 150, 136, 0.3); transition: transform 0.3s, box-shadow 0.3s;">Submit Abstract</a>
                </div>
            </div>

            <!-- Oral & Poster Guidelines (2 Columns) -->
            <div class="guidelines-grid-2">
                <!-- Oral Presentation -->
                <div class="premium-guideline-card">
                    <h3 class="premium-guideline-title">
                        <div class="premium-guideline-icon"><i class="fa-solid fa-person-chalkboard"></i></div>
                        <div>ORAL PRESENTATION GUIDELINES</div>
                    </h3>
                    <ul class="premium-guideline-list">
                        <li><i class="fa-solid fa-check"></i> <span>PowerPoint Presentation (PPT) format only</span></li>
                        <li><i class="fa-solid fa-check"></i> <span><strong>Total Time:</strong> 7 Minutes</span></li>
                        <li><i class="fa-solid fa-check"></i> <span><strong>Presentation:</strong> 5 Minutes</span></li>
                        <li><i class="fa-solid fa-check"></i> <span><strong>Q & A:</strong> 2 Minutes</span></li>
                    </ul>
                </div>

                <!-- Poster Presentation -->
                <div class="premium-guideline-card">
                    <h3 class="premium-guideline-title">
                        <div class="premium-guideline-icon"><i class="fa-solid fa-image"></i></div>
                        <div>POSTER PRESENTATION GUIDELINES</div>
                    </h3>
                    <ul class="premium-guideline-list" style="margin-bottom: 20px;">
                        <li><i class="fa-solid fa-check"></i> <span>Posters should be in English.</span></li>
                        <li><i class="fa-solid fa-check"></i> <span>Content must be clear, concise and visually appealing.</span></li>
                        <li><i class="fa-solid fa-check"></i> <span><strong>Include:</strong> Title, Authors, Affiliation, Introduction, Methods, Results, Conclusion.</span></li>
                        <li><i class="fa-solid fa-check"></i> <span>High-quality images/figures are encouraged.</span></li>
                        <li><i class="fa-solid fa-check"></i> <span>Presenters must be present during the poster session for discussion.</span></li>
                    </ul>
                    <div style="background: rgba(0, 150, 136, 0.05); border: 1px solid rgba(0, 150, 136, 0.2); padding: 15px; border-radius: 12px; margin-top: auto;">
                        <h4 style="margin: 0 0 10px 0; color: #00796B; font-size: 1rem; text-transform: uppercase; letter-spacing: 1px;">Poster Size</h4>
                        <ul class="premium-guideline-list" style="gap: 5px;">
                            <li><i class="fa-solid fa-check"></i> <span><strong>Standard Size:</strong> 90 cm (Width) × 120 cm (Height)</span></li>
                        </ul>
                    </div>
                </div>
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

