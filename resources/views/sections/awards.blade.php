<!-- Awards Section -->
<section class="awards-section" style="background-color: #ffffff; padding: 60px 0 40px 0;">
    <div class="container" style="max-width: 95%; margin: 0 auto; padding: 0 20px;">
        
        <!-- Centered Header -->
        <div class="section-header-center" style="text-align: center; margin-bottom: 30px;">
            <div class="section-subtitle" style="margin-bottom: 8px; font-weight: bold; color: #009688; text-transform: uppercase; letter-spacing: 2px; font-size: 1rem;">Celebrating Excellence</div>
            <h2 class="section-title" style="margin-top: 0; margin-bottom: 12px; color: #333; font-weight: 800; line-height: 1.2;">Awards & <br class="d-md-none"><span>Recognitions</span></h2>
            <div class="header-line" style="width: 60px; height: 4px; background-color: #009688; margin: 0 auto 15px auto;"></div>
            <p class="participants-desc" style="max-width: 800px; margin: 0 auto;">
                {{ $settings['awards_desc'] ?? 'To recognize outstanding research contributions, we are proud to present awards for the most exceptional presentations at the summit.' }}
            </p>
        </div>

        <!-- Awards Grid -->
        <div class="awards-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 40px; justify-content: center; max-width: 1000px; margin: 0 auto;">
            
            <!-- Award 1 -->
            <div class="awards-card" style="background: linear-gradient(145deg, #f8fbfa, #ffffff); padding: 50px 40px; border-radius: 20px; display: flex; flex-direction: column; align-items: center; text-align: center; box-shadow: 0 15px 40px rgba(0,0,0,0.05); border: 1px solid rgba(0, 150, 136, 0.1); position: relative; overflow: hidden; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                <!-- Ribbon accent -->
                <div style="position: absolute; top: 0; right: 40px; width: 40px; height: 60px; background-color: #009688; clip-path: polygon(100% 0, 100% 100%, 50% 80%, 0 100%, 0 0);"></div>
                
                <div class="awards-icon-wrapper" style="width: 100px; height: 100px; border-radius: 50%; background: linear-gradient(135deg, rgba(255, 215, 0, 0.2), rgba(255, 215, 0, 0.05)); display: flex; justify-content: center; align-items: center; margin-bottom: 30px;">
                    @php $aw1 = $settings['awards_oral_icon'] ?? 'fa-solid fa-trophy'; @endphp
                    @if(str_starts_with($aw1, 'fa-'))
                        <i class="{{ $aw1 }}" style="font-size: 3.5rem; color: #fbc02d;"></i>
                    @else
                        <img src="{{ asset($aw1) }}" alt="Icon" style="max-width: 60px; max-height: 60px; object-fit: contain;">
                    @endif
                </div>
                <h3 class="awards-title" style="margin: 0 0 15px 0; color: #333; font-size: 1.8rem; font-weight: 800;">{{ $settings['awards_oral_title'] ?? 'Best Oral Presentation' }}</h3>
                <p class="awards-desc" style="margin: 0; color: #666; font-size: 1.15rem; line-height: 1.6;">{{ $settings['awards_oral_desc'] ?? 'Awarded to the most impactful and articulate oral research presentation.' }}</p>
            </div>

            <!-- Award 2 -->
            <div class="awards-card" style="background: linear-gradient(145deg, #f8fbfa, #ffffff); padding: 50px 40px; border-radius: 20px; display: flex; flex-direction: column; align-items: center; text-align: center; box-shadow: 0 15px 40px rgba(0,0,0,0.05); border: 1px solid rgba(0, 150, 136, 0.1); position: relative; overflow: hidden; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                <!-- Ribbon accent -->
                <div style="position: absolute; top: 0; right: 40px; width: 40px; height: 60px; background-color: #009688; clip-path: polygon(100% 0, 100% 100%, 50% 80%, 0 100%, 0 0);"></div>
                
                <div class="awards-icon-wrapper" style="width: 100px; height: 100px; border-radius: 50%; background: linear-gradient(135deg, rgba(255, 215, 0, 0.2), rgba(255, 215, 0, 0.05)); display: flex; justify-content: center; align-items: center; margin-bottom: 30px;">
                    @php $aw2 = $settings['awards_poster_icon'] ?? 'fa-solid fa-medal'; @endphp
                    @if(str_starts_with($aw2, 'fa-'))
                        <i class="{{ $aw2 }}" style="font-size: 3.5rem; color: #fbc02d;"></i>
                    @else
                        <img src="{{ asset($aw2) }}" alt="Icon" style="max-width: 60px; max-height: 60px; object-fit: contain;">
                    @endif
                </div>
                <h3 class="awards-title" style="margin: 0 0 15px 0; color: #333; font-size: 1.8rem; font-weight: 800;">{{ $settings['awards_poster_title'] ?? 'Best Poster Award' }}</h3>
                <p class="awards-desc" style="margin: 0; color: #666; font-size: 1.15rem; line-height: 1.6;">{{ $settings['awards_poster_desc'] ?? 'Awarded for outstanding visual communication and scientific clarity.' }}</p>
            </div>

        </div>

    </div>
</section>
