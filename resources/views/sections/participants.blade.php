<!-- Participants Section -->
<style>
    .participant-card-hover {
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        -webkit-tap-highlight-color: transparent;
    }
    .participant-card-hover:hover,
    .participant-card-hover:active {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0, 150, 136, 0.25) !important;
    }
    .participant-card-hover:hover .participant-icon-circle,
    .participant-card-hover:active .participant-icon-circle {
        background-color: #009688 !important;
    }
    .participant-card-hover:hover .participant-icon,
    .participant-card-hover:active .participant-icon {
        color: #ffffff !important;
    }

    /* Mobile-only scroll animation classes */
    @media (max-width: 768px) {
        .participant-card-hover.active-scroll {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0, 150, 136, 0.25) !important;
        }
        .participant-card-hover.active-scroll .participant-icon-circle {
            background-color: #009688 !important;
        }
        .participant-card-hover.active-scroll .participant-icon {
            color: #ffffff !important;
        }
    }
</style>
<section class="participants-section" style="background-color: #ffffff; padding: 10px 0 40px 0;">
    <div class="container" style="max-width: 95%; margin: 0 auto; padding: 0 20px;">
        
        <!-- Centered Header -->
        <div class="section-header-center" style="text-align: center; margin-bottom: 30px;">
            <div class="section-subtitle" style="margin-bottom: 8px; font-weight: bold; color: #009688; text-transform: uppercase; letter-spacing: 2px; font-size: 1rem;">Who Can Attend</div>
            <h2 class="section-title" style="margin-top: 0; margin-bottom: 12px; color: #333; font-weight: 800;">Our <span>Participants</span></h2>
            <div class="header-line" style="width: 60px; height: 4px; background-color: #009688; margin: 0 auto 15px auto;"></div>
            <p class="participants-desc" style="margin-top: 0;">
                {{ $settings['participants_desc'] ?? 'We invite a diverse community of professionals and aspiring researchers to join the conversation and contribute to the future of diagnostic microbiology.' }}
            </p>
        </div>

        <!-- Cards Grid -->
        <div class="participants-grid">
            
            <!-- Card 1 -->
            <div class="participant-card-hover" style="background-color: #ffffff; padding: 40px 20px; border-radius: 12px; text-align: center; box-shadow: 0 10px 40px rgba(0,0,0,0.08);">
                <div class="participant-icon-circle" style="width: 70px; height: 70px; border-radius: 50%; background-color: rgba(0, 150, 136, 0.1); display: flex; justify-content: center; align-items: center; margin: 0 auto 20px; transition: all 0.3s ease;">
                    @php $icon1 = $settings['participant_1_icon'] ?? 'fa-solid fa-user-graduate'; @endphp
                    @if(str_starts_with($icon1, 'fa-'))
                        <i class="{{ $icon1 }} participant-icon" style="font-size: 1.8rem; color: #009688; transition: all 0.3s ease;"></i>
                    @else
                        <img src="{{ asset($icon1) }}" alt="Icon" style="max-width: 40px; max-height: 40px; object-fit: contain;">
                    @endif
                </div>
                <h4 style="margin: 0; color: #333; font-size: 1.1rem; line-height: 1.4; font-weight: bold;">{!! nl2br(e($settings['participant_1'] ?? "Undergraduate &\nPostgraduate Students")) !!}</h4>
            </div>

            <!-- Card 2 -->
            <div class="participant-card-hover" style="background-color: #ffffff; padding: 40px 20px; border-radius: 12px; text-align: center; box-shadow: 0 10px 40px rgba(0,0,0,0.08);">
                <div class="participant-icon-circle" style="width: 70px; height: 70px; border-radius: 50%; background-color: rgba(0, 150, 136, 0.1); display: flex; justify-content: center; align-items: center; margin: 0 auto 20px; transition: all 0.3s ease;">
                    @php $icon2 = $settings['participant_2_icon'] ?? 'fa-solid fa-microscope'; @endphp
                    @if(str_starts_with($icon2, 'fa-'))
                        <i class="{{ $icon2 }} participant-icon" style="font-size: 1.8rem; color: #009688; transition: all 0.3s ease;"></i>
                    @else
                        <img src="{{ asset($icon2) }}" alt="Icon" style="max-width: 40px; max-height: 40px; object-fit: contain;">
                    @endif
                </div>
                <h4 style="margin: 0; color: #333; font-size: 1.1rem; line-height: 1.4; font-weight: bold;">{!! nl2br(e($settings['participant_2'] ?? "Research\nScholars")) !!}</h4>
            </div>

            <!-- Card 3 -->
            <div class="participant-card-hover" style="background-color: #ffffff; padding: 40px 20px; border-radius: 12px; text-align: center; box-shadow: 0 10px 40px rgba(0,0,0,0.08);">
                <div class="participant-icon-circle" style="width: 70px; height: 70px; border-radius: 50%; background-color: rgba(0, 150, 136, 0.1); display: flex; justify-content: center; align-items: center; margin: 0 auto 20px; transition: all 0.3s ease;">
                    @php $icon3 = $settings['participant_3_icon'] ?? 'fa-solid fa-chalkboard-user'; @endphp
                    @if(str_starts_with($icon3, 'fa-'))
                        <i class="{{ $icon3 }} participant-icon" style="font-size: 1.8rem; color: #009688; transition: all 0.3s ease;"></i>
                    @else
                        <img src="{{ asset($icon3) }}" alt="Icon" style="max-width: 40px; max-height: 40px; object-fit: contain;">
                    @endif
                </div>
                <h4 style="margin: 0; color: #333; font-size: 1.1rem; line-height: 1.4; font-weight: bold;">{!! nl2br(e($settings['participant_3'] ?? "Faculty &\nScientists")) !!}</h4>
            </div>

            <!-- Card 4 -->
            <div class="participant-card-hover" style="background-color: #ffffff; padding: 40px 20px; border-radius: 12px; text-align: center; box-shadow: 0 10px 40px rgba(0,0,0,0.08);">
                <div class="participant-icon-circle" style="width: 70px; height: 70px; border-radius: 50%; background-color: rgba(0, 150, 136, 0.1); display: flex; justify-content: center; align-items: center; margin: 0 auto 20px; transition: all 0.3s ease;">
                    @php $icon4 = $settings['participant_4_icon'] ?? 'fa-solid fa-book-open-reader'; @endphp
                    @if(str_starts_with($icon4, 'fa-'))
                        <i class="{{ $icon4 }} participant-icon" style="font-size: 1.8rem; color: #009688; transition: all 0.3s ease;"></i>
                    @else
                        <img src="{{ asset($icon4) }}" alt="Icon" style="max-width: 40px; max-height: 40px; object-fit: contain;">
                    @endif
                </div>
                <h4 style="margin: 0; color: #333; font-size: 1.1rem; line-height: 1.4; font-weight: bold;">{{ $settings['participant_4'] ?? 'Academicians' }}</h4>
            </div>

            <!-- Card 5 -->
            <div class="participant-card-hover" style="background-color: #ffffff; padding: 40px 20px; border-radius: 12px; text-align: center; box-shadow: 0 10px 40px rgba(0,0,0,0.08);">
                <div class="participant-icon-circle" style="width: 70px; height: 70px; border-radius: 50%; background-color: rgba(0, 150, 136, 0.1); display: flex; justify-content: center; align-items: center; margin: 0 auto 20px; transition: all 0.3s ease;">
                    @php $icon5 = $settings['participant_5_icon'] ?? 'fa-solid fa-industry'; @endphp
                    @if(str_starts_with($icon5, 'fa-'))
                        <i class="{{ $icon5 }} participant-icon" style="font-size: 1.8rem; color: #009688; transition: all 0.3s ease;"></i>
                    @else
                        <img src="{{ asset($icon5) }}" alt="Icon" style="max-width: 40px; max-height: 40px; object-fit: contain;">
                    @endif
                </div>
                <h4 style="margin: 0; color: #333; font-size: 1.1rem; line-height: 1.4; font-weight: bold;">{{ $settings['participant_5'] ?? 'Industrialists' }}</h4>
            </div>

        </div>

    </div>
</section>

<!-- Scroll Spy Animation for Mobile Only -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // STRICTLY mobile only (768px or less)
        if (window.innerWidth <= 768 && 'IntersectionObserver' in window) {
            
            // Card pops when it hits the middle 30% of the mobile screen
            let options = {
                root: null,
                rootMargin: '-35% 0px -35% 0px',
                threshold: 0
            };
            
            let observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    // Double check screen size inside the observer just to be safe
                    if (window.innerWidth <= 768) {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('active-scroll');
                        } else {
                            entry.target.classList.remove('active-scroll');
                        }
                    }
                });
            }, options);

            // Observe all participant cards
            document.querySelectorAll('.participant-card-hover').forEach(card => {
                observer.observe(card);
            });
        }
    });
</script>
