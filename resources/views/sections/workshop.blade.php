<!-- Pre-Conference Workshop Section -->
<section class="workshop-section" style="background-color: #f8fbfa; padding: 40px 0;">
    <div class="container" style="max-width: 95%; margin: 0 auto; padding: 0 20px;">
        
        <div style="background-color: #ffffff; border-radius: 24px; padding: 50px; box-shadow: 0 20px 60px rgba(0, 150, 136, 0.08); position: relative; overflow: hidden; display: grid; grid-template-columns: 1.5fr 1fr; gap: 40px; align-items: center;">
            
            <!-- Decorative Accent -->
            <div style="position: absolute; top: 0; left: 0; width: 8px; height: 100%; background: linear-gradient(to bottom, #009688, #26a69a);"></div>
            <div style="position: absolute; right: -50px; bottom: -50px; opacity: 0.03; z-index: 0;">
                <i class="fa-solid fa-laptop-code" style="font-size: 300px; color: #009688;"></i>
            </div>

            <!-- Left Content -->
            <div style="position: relative; z-index: 1;">
                <div class="section-subtitle" style="margin-bottom: 12px; font-weight: bold; color: #009688; text-transform: uppercase; letter-spacing: 2px; font-size: 1.1rem;">Pre-Conference</div>
                <h2 class="section-title" style="margin-top: 0; font-size: 2.8rem; color: #333; font-weight: 800; line-height: 1.2; margin-bottom: 25px;">{{ $settings['workshop_title'] ?? 'Hands-On Metagenomics' }} <span>Workshop</span></h2>
                
                <div style="font-size: 1.15rem; color: #555; line-height: 1.7; margin-bottom: 35px;">
                    {!! nl2br(e($settings['workshop_desc'] ?? 'Join us for an exclusive one-day hands-on workshop...')) !!}
                </div>

                <!-- Action Area -->
                <div style="display: flex; align-items: center; gap: 20px;">
                    <a href="#" style="display: inline-block; background: linear-gradient(135deg, #009688, #26a69a); color: #fff; padding: 15px 40px; border-radius: 30px; text-decoration: none; font-weight: bold; font-size: 1.1rem; box-shadow: 0 8px 25px rgba(0, 150, 136, 0.4); transition: transform 0.3s, box-shadow 0.3s;">Register Early</a>
                    <div style="color: #e53935; font-weight: bold; font-size: 1.1rem; display: flex; align-items: center; gap: 8px;">
                        <i class="fa-solid fa-fire"></i> Limited Seats Available!
                    </div>
                </div>
            </div>

            <!-- Right Side Features -->
            <div style="position: relative; z-index: 1; display: flex; flex-direction: column; gap: 20px;">
                
                <div style="background-color: #f8fbfa; padding: 25px; border-radius: 16px; display: flex; align-items: flex-start; gap: 15px; border: 1px solid rgba(0, 150, 136, 0.1);">
                    <div style="width: 50px; height: 50px; border-radius: 12px; background-color: rgba(0, 150, 136, 0.1); display: flex; justify-content: center; align-items: center; flex-shrink: 0;">
                        <i class="fa-solid fa-laptop-medical" style="font-size: 1.5rem; color: #009688;"></i>
                    </div>
                    <div>
                        <h4 style="margin: 0 0 5px 0; color: #333; font-size: 1.2rem;">{{ $settings['workshop_f1_title'] ?? 'Practical Skills' }}</h4>
                        <p style="margin: 0; color: #666; font-size: 0.95rem; line-height: 1.5;">{{ $settings['workshop_f1_desc'] ?? 'Learn quality control, community profiling, and assembly.' }}</p>
                    </div>
                </div>

                <div style="background-color: #f8fbfa; padding: 25px; border-radius: 16px; display: flex; align-items: flex-start; gap: 15px; border: 1px solid rgba(0, 150, 136, 0.1);">
                    <div style="width: 50px; height: 50px; border-radius: 12px; background-color: rgba(0, 150, 136, 0.1); display: flex; justify-content: center; align-items: center; flex-shrink: 0;">
                        <i class="fa-solid fa-database" style="font-size: 1.5rem; color: #009688;"></i>
                    </div>
                    <div>
                        <h4 style="margin: 0 0 5px 0; color: #333; font-size: 1.2rem;">{{ $settings['workshop_f2_title'] ?? 'Industry Tools' }}</h4>
                        <p style="margin: 0; color: #666; font-size: 0.95rem; line-height: 1.5;">{{ $settings['workshop_f2_desc'] ?? 'Hands-on visualization using tools like QIIME2 and real datasets.' }}</p>
                    </div>
                </div>

                <div style="background-color: #f8fbfa; padding: 25px; border-radius: 16px; display: flex; align-items: flex-start; gap: 15px; border: 1px solid rgba(0, 150, 136, 0.1);">
                    <div style="width: 50px; height: 50px; border-radius: 12px; background-color: rgba(0, 150, 136, 0.1); display: flex; justify-content: center; align-items: center; flex-shrink: 0;">
                        <i class="fa-solid fa-toolbox" style="font-size: 1.5rem; color: #009688;"></i>
                    </div>
                    <div>
                        <h4 style="margin: 0 0 5px 0; color: #333; font-size: 1.2rem;">{{ $settings['workshop_f3_title'] ?? 'Bioinformatics Toolkit' }}</h4>
                        <p style="margin: 0; color: #666; font-size: 0.95rem; line-height: 1.5;">{{ $settings['workshop_f3_desc'] ?? 'Designed specifically for students, researchers, and faculty.' }}</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
