<!-- Awards Section -->
<section class="awards-section" style="background-color: #ffffff; padding: 60px 0 40px 0;">
    <div class="container" style="max-width: 95%; margin: 0 auto; padding: 0 20px;">
        
        <!-- Centered Header -->
        <div class="section-header-center" style="text-align: center; margin-bottom: 50px;">
            <div class="section-subtitle" style="margin-bottom: 8px; font-weight: bold; color: #009688; text-transform: uppercase; letter-spacing: 2px; font-size: 1rem;">Celebrating Excellence</div>
            <h2 class="section-title" style="margin-top: 0; margin-bottom: 12px; color: #333; font-weight: 800; line-height: 1.2;">Awards & <br class="d-md-none"><span>Recognitions</span></h2>
            <div class="header-line" style="width: 60px; height: 4px; background-color: #009688; margin: 0 auto 15px auto;"></div>
            <p class="participants-desc" style="max-width: 800px; margin: 0 auto; color: #666; font-size: 1.1rem;">
                To recognize outstanding research and contributions, we are proud to present the following awards at the confluence.
            </p>
        </div>

        <!-- Awards Grid -->
        <div class="awards-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; justify-content: center; max-width: 1200px; margin: 0 auto;">
            
            @php
                $awards = \App\Models\Award::orderBy('sort_order')->get();
            @endphp

            @foreach($awards as $award)
            <!-- Award Card -->
            <div class="awards-card" style="background: linear-gradient(145deg, #f8fbfa, #ffffff); padding: 40px 25px; border-radius: 20px; display: flex; flex-direction: column; align-items: center; text-align: center; box-shadow: 0 15px 40px rgba(0,0,0,0.05); border: 1px solid rgba(0, 150, 136, 0.1); position: relative; overflow: hidden; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                <!-- Ribbon accent -->
                <div style="position: absolute; top: 0; right: 30px; width: 30px; height: 45px; background-color: {{ $award->icon_color ?? '#009688' }}; clip-path: polygon(100% 0, 100% 100%, 50% 80%, 0 100%, 0 0);"></div>
                
                <div class="awards-icon-wrapper" style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, rgba(255, 215, 0, 0.2), rgba(255, 215, 0, 0.05)); display: flex; justify-content: center; align-items: center; margin-bottom: 25px;">
                    <i class="{{ $award->icon ?? 'fa-solid fa-trophy' }}" style="font-size: 2.5rem; color: {{ $award->icon_color ?? '#fbc02d' }};"></i>
                </div>
                <h3 class="awards-title" style="margin: 0 0 12px 0; color: #112340; font-size: 1.3rem; font-weight: 800; line-height: 1.3;">{{ $award->name }}</h3>
                <p class="awards-desc" style="margin: 0; color: #475569; font-size: 0.95rem; line-height: 1.6;">{{ $award->short_description }}</p>
                <a href="/awards#award-{{ $award->id }}" style="margin-top: auto; padding-top: 20px; color: #009688; font-weight: bold; text-decoration: none; display: flex; align-items: center; gap: 5px; font-size: 0.9rem;">View Guidelines & Benefits <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            @endforeach

        </div>

    </div>
</section>
