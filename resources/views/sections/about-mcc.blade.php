<!-- About MCC Section -->
<section class="about-section" style="background-color: #f8fbfa; padding: 60px 0;">
    <div class="container" style="max-width: 90%; margin: 0 auto; padding: 0 40px;">
        
        <div style="display: block;">
            
            <!-- Left Side: Content Card & Highlights -->
            <div class="about-content-card" style="background-color: #ffffff; padding: 25px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.05); display: flex; flex-direction: column; justify-content: center;">
                
                <!-- Main Title & Subtitle inside Left Column -->
                <div style="text-align: left; margin-bottom: 15px; flex-shrink: 0;">
                    <div class="section-subtitle" style="margin-bottom: 5px; font-weight: bold; color: #009688; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">About The Institution</div>
                    <h2 class="section-title" style="margin-top: 0; font-size: 1.8rem; color: #333; line-height: 1.2;">ABOUT <span style="color: #009688;">MADRAS CHRISTIAN COLLEGE</span></h2>
                </div>

                <!-- Full Description -->
                <div style="flex-grow: 1; font-size: 0.95rem; line-height: 1.6; text-align: left; color: #555;">
                    {!! nl2br(e($settings['about_mcc'] ?? 'Madras Christian College (MCC) is one of India’s premier educational institutions, founded by Scottish missionaries in 1837.')) !!}
                </div>

                <!-- Highlight Cards Grid -->
                <div style="display: flex; gap: 20px; margin-bottom: 30px; flex-shrink: 0; margin-top: 15px; flex-wrap: wrap;">
                    <!-- Card 1 -->
                    <div style="width: 200px; background-color: #f8fbfa; border-left: 4px solid #009688; padding: 15px; border-radius: 8px;">
                        <div style="font-size: 1.1rem; font-weight: bold; color: #333; margin-bottom: 5px;">{{ $settings['mcc_stat1_title'] ?? '1837' }}</div>
                        <div style="font-size: 0.8rem; color: #666; text-transform: uppercase;">{{ $settings['mcc_stat1_sub'] ?? 'Founded In' }}</div>
                    </div>
                    <!-- Card 2 -->
                    <div style="width: 200px; background-color: #f8fbfa; border-left: 4px solid #009688; padding: 15px; border-radius: 8px;">
                        <div style="font-size: 1.1rem; font-weight: bold; color: #333; margin-bottom: 5px;">{{ $settings['mcc_stat2_title'] ?? "'A' Grade" }}</div>
                        <div style="font-size: 0.8rem; color: #666; text-transform: uppercase;">{{ $settings['mcc_stat2_sub'] ?? 'NAAC Accredited' }}</div>
                    </div>
                    <!-- Card 3 -->
                    <div style="width: 200px; background-color: #f8fbfa; border-left: 4px solid #009688; padding: 15px; border-radius: 8px;">
                        <div style="font-size: 1.1rem; font-weight: bold; color: #333; margin-bottom: 5px;">{{ $settings['mcc_stat3_title'] ?? 'Rank 14' }}</div>
                        <div style="font-size: 0.8rem; color: #666; text-transform: uppercase;">{{ $settings['mcc_stat3_sub'] ?? 'NIRF Rankings' }}</div>
                    </div>
                </div>
                

            </div>
            
        </div>
    </div>
</section>
