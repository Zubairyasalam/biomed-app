<!-- Participants Section -->
<style>
    .participant-card-hover {
        transition: all 0.3s ease;
    }
    .participant-card-hover:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 150, 136, 0.2) !important;
    }
    .participant-card-hover:hover .participant-icon-circle {
        background-color: #009688 !important;
    }
    .participant-card-hover:hover .participant-icon {
        color: #ffffff !important;
    }
</style>
<section class="participants-section" style="background-color: #ffffff; padding: 40px 0;">
    <div class="container" style="max-width: 95%; margin: 0 auto; padding: 0 20px;">
        
        <!-- Centered Header (Matching Thrust Areas but tighter) -->
        <div class="section-header-center" style="text-align: center; margin-bottom: 40px;">
            <div class="section-subtitle" style="margin-bottom: 8px; font-weight: bold; color: #009688; text-transform: uppercase; letter-spacing: 2px; font-size: 1.1rem;">Who Can Attend</div>
            <h2 class="section-title" style="margin-top: 0; margin-bottom: 15px; font-size: 3.2rem; color: #333; font-weight: 800;">Our <span>Participants</span></h2>
            <div class="header-line" style="width: 80px; height: 4px; background-color: #009688; margin: 0 auto 20px auto;"></div>
            <p style="font-size: 1.25rem; color: #555; max-width: 800px; margin: 0 auto; line-height: 1.7;">
                {{ $settings['participants_desc'] ?? 'We invite a diverse community of professionals and aspiring researchers to join the conversation and contribute to the future of diagnostic microbiology.' }}
            </p>
        </div>

        <!-- Cards Grid (5 in a row like sample) -->
        <div style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 20px;">
            
            <!-- Card 1 -->
            <div class="participant-card-hover" style="background-color: #ffffff; padding: 40px 20px; border-radius: 12px; text-align: center; box-shadow: 0 10px 40px rgba(0,0,0,0.08);">
                <div class="participant-icon-circle" style="width: 70px; height: 70px; border-radius: 50%; background-color: rgba(0, 150, 136, 0.1); display: flex; justify-content: center; align-items: center; margin: 0 auto 20px; transition: all 0.3s ease;">
                    <i class="fa-solid fa-user-graduate participant-icon" style="font-size: 1.8rem; color: #009688; transition: all 0.3s ease;"></i>
                </div>
                <h4 style="margin: 0; color: #333; font-size: 1.1rem; line-height: 1.4; font-weight: bold;">{!! nl2br(e($settings['participant_1'] ?? "Undergraduate &\nPostgraduate Students")) !!}</h4>
            </div>

            <!-- Card 2 -->
            <div class="participant-card-hover" style="background-color: #ffffff; padding: 40px 20px; border-radius: 12px; text-align: center; box-shadow: 0 10px 40px rgba(0,0,0,0.08);">
                <div class="participant-icon-circle" style="width: 70px; height: 70px; border-radius: 50%; background-color: rgba(0, 150, 136, 0.1); display: flex; justify-content: center; align-items: center; margin: 0 auto 20px; transition: all 0.3s ease;">
                    <i class="fa-solid fa-microscope participant-icon" style="font-size: 1.8rem; color: #009688; transition: all 0.3s ease;"></i>
                </div>
                <h4 style="margin: 0; color: #333; font-size: 1.1rem; line-height: 1.4; font-weight: bold;">{!! nl2br(e($settings['participant_2'] ?? "Research\nScholars")) !!}</h4>
            </div>

            <!-- Card 3 -->
            <div class="participant-card-hover" style="background-color: #ffffff; padding: 40px 20px; border-radius: 12px; text-align: center; box-shadow: 0 10px 40px rgba(0,0,0,0.08);">
                <div class="participant-icon-circle" style="width: 70px; height: 70px; border-radius: 50%; background-color: rgba(0, 150, 136, 0.1); display: flex; justify-content: center; align-items: center; margin: 0 auto 20px; transition: all 0.3s ease;">
                    <i class="fa-solid fa-chalkboard-user participant-icon" style="font-size: 1.8rem; color: #009688; transition: all 0.3s ease;"></i>
                </div>
                <h4 style="margin: 0; color: #333; font-size: 1.1rem; line-height: 1.4; font-weight: bold;">{!! nl2br(e($settings['participant_3'] ?? "Faculty &\nScientists")) !!}</h4>
            </div>

            <!-- Card 4 -->
            <div class="participant-card-hover" style="background-color: #ffffff; padding: 40px 20px; border-radius: 12px; text-align: center; box-shadow: 0 10px 40px rgba(0,0,0,0.08);">
                <div class="participant-icon-circle" style="width: 70px; height: 70px; border-radius: 50%; background-color: rgba(0, 150, 136, 0.1); display: flex; justify-content: center; align-items: center; margin: 0 auto 20px; transition: all 0.3s ease;">
                    <i class="fa-solid fa-book-open-reader participant-icon" style="font-size: 1.8rem; color: #009688; transition: all 0.3s ease;"></i>
                </div>
                <h4 style="margin: 0; color: #333; font-size: 1.1rem; line-height: 1.4; font-weight: bold;">{{ $settings['participant_4'] ?? 'Academicians' }}</h4>
            </div>

            <!-- Card 5 -->
            <div class="participant-card-hover" style="background-color: #ffffff; padding: 40px 20px; border-radius: 12px; text-align: center; box-shadow: 0 10px 40px rgba(0,0,0,0.08);">
                <div class="participant-icon-circle" style="width: 70px; height: 70px; border-radius: 50%; background-color: rgba(0, 150, 136, 0.1); display: flex; justify-content: center; align-items: center; margin: 0 auto 20px; transition: all 0.3s ease;">
                    <i class="fa-solid fa-industry participant-icon" style="font-size: 1.8rem; color: #009688; transition: all 0.3s ease;"></i>
                </div>
                <h4 style="margin: 0; color: #333; font-size: 1.1rem; line-height: 1.4; font-weight: bold;">{{ $settings['participant_5'] ?? 'Industrialists' }}</h4>
            </div>

        </div>

    </div>
</section>
