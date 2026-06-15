<!-- Thrust Areas Section -->
<section class="thrust-areas-section" style="background-color: #ffffff; padding: 10px 0 40px 0;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        
        <!-- Centered Header -->
        <div class="section-header-center" style="text-align: center; margin-bottom: 30px;">
            <div class="section-subtitle" style="margin-bottom: 8px; font-weight: bold; color: #009688; text-transform: uppercase; letter-spacing: 2px; font-size: 1rem;">Conference Themes</div>
            <h2 class="section-title" style="margin-top: 0; margin-bottom: 12px; color: #333; font-weight: 800;">Thrust <span>Areas</span></h2>
            <div class="header-line" style="width: 60px; height: 4px; background-color: #009688; margin: 0 auto 15px auto;"></div>
            <p class="participants-desc" style="margin-top: 0;">
                {{ $settings['thrust_areas_desc'] ?? 'Explore the latest advancements, critical challenges, and future innovations across our core diagnostic and scientific themes.' }}
            </p>
        </div>

        <div class="thrust-grid">
            
            <div class="topics-card" style="background-color: #ffffff; padding: 40px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border-top: 5px solid #009688;">
                <ul class="topic-list" style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 20px;">
                    <li style="display: flex; gap: 15px; font-size: 1.15rem; color: #333; line-height: 1.5; align-items: flex-start;">
                        <i class="fa-solid fa-circle-check" style="color: #009688; margin-top: 5px;"></i> 
                        {{ $settings['thrust_1'] ?? 'Artificial intelligence in infectious disease diagnostics' }}
                    </li>
                    <li style="display: flex; gap: 15px; font-size: 1.15rem; color: #333; line-height: 1.5; align-items: flex-start;">
                        <i class="fa-solid fa-circle-check" style="color: #009688; margin-top: 5px;"></i> 
                        {{ $settings['thrust_2'] ?? 'AI in diagnostic microbiology' }}
                    </li>
                    <li style="display: flex; gap: 15px; font-size: 1.15rem; color: #333; line-height: 1.5; align-items: flex-start;">
                        <i class="fa-solid fa-circle-check" style="color: #009688; margin-top: 5px;"></i> 
                        {{ $settings['thrust_3'] ?? 'Molecular diagnostics and genomics' }}
                    </li>
                </ul>
            </div>

            <div class="topics-card" style="background-color: #ffffff; padding: 40px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border-top: 5px solid #009688;">
                <ul class="topic-list" style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 20px;">
                    <li style="display: flex; gap: 15px; font-size: 1.15rem; color: #333; line-height: 1.5; align-items: flex-start;">
                        <i class="fa-solid fa-circle-check" style="color: #009688; margin-top: 5px;"></i> 
                        {{ $settings['thrust_4'] ?? 'Digital health and intelligent systems' }}
                    </li>
                    <li style="display: flex; gap: 15px; font-size: 1.15rem; color: #333; line-height: 1.5; align-items: flex-start;">
                        <i class="fa-solid fa-circle-check" style="color: #009688; margin-top: 5px;"></i> 
                        {{ $settings['thrust_5'] ?? 'Clinical applications and future directions' }}
                    </li>
                    <li style="display: flex; gap: 15px; font-size: 1.15rem; color: #333; line-height: 1.5; align-items: flex-start;">
                        <i class="fa-solid fa-circle-check" style="color: #009688; margin-top: 5px;"></i> 
                        {{ $settings['thrust_6'] ?? 'Antimicrobial resistance and rapid detection' }}
                    </li>
                </ul>
            </div>

            <div class="topics-card" style="background-color: #ffffff; padding: 40px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border-top: 5px solid #009688;">
                <ul class="topic-list" style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 20px;">
                    <li style="display: flex; gap: 15px; font-size: 1.15rem; color: #333; line-height: 1.5; align-items: flex-start;">
                        <i class="fa-solid fa-circle-check" style="color: #009688; margin-top: 5px;"></i> 
                        {{ $settings['thrust_7'] ?? 'Emerging infectious diseases' }}
                    </li>
                    <li style="display: flex; gap: 15px; font-size: 1.15rem; color: #333; line-height: 1.5; align-items: flex-start;">
                        <i class="fa-solid fa-circle-check" style="color: #009688; margin-top: 5px;"></i> 
                        {{ $settings['thrust_8'] ?? 'Point-of-care diagnostics' }}
                    </li>
                    <li style="display: flex; gap: 15px; font-size: 1.15rem; color: #333; line-height: 1.5; align-items: flex-start;">
                        <i class="fa-solid fa-circle-check" style="color: #009688; margin-top: 5px;"></i> 
                        {{ $settings['thrust_9'] ?? 'Clinical case studies' }}
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>
