<!-- About Section -->
<section class="about-section" style="padding: 60px 0; background-color: #f8fbfa;">
    <div class="container" style="max-width: 95%; margin: 0 auto; padding: 0 20px;">
        
        <!-- Preamble & Countdown Grid -->
        <div class="about-container" style="display: flex; gap: 40px; flex-wrap: wrap; align-items: stretch; margin-bottom: 60px;">
            
            <!-- Left Side: Preamble -->
            <div class="about-content" style="flex: 1; min-width: 320px; display: flex; flex-direction: column; justify-content: center;">
                <div class="section-subtitle" style="font-size: 1rem; font-weight: bold; color: #009688; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 12px;">Preamble</div>
                <h2 class="section-title" style="font-size: clamp(2rem, 4vw, 2.6rem); font-weight: 800; color: #112340; margin-bottom: 25px; line-height: 1.2;">
                    About The <span style="color: #009688;">Confluence</span>
                </h2>
                <div class="about-text" style="text-align: justify; font-size: 1.08rem; color: #475569; line-height: 1.8; display: flex; flex-direction: column; gap: 20px;">
                    {!! nl2br(e($settings['about_conference'] ?? 'The Global One Health Confluence 2026 is envisioned as a flagship international interdisciplinary forum...')) !!}
                </div>
            </div>
            
            <!-- Right Side: Countdown and Core Aims -->
            <div class="about-countdown" style="flex: 1; min-width: 320px; background: #ffffff; padding: 40px; border-radius: 20px; box-shadow: 0 15px 40px rgba(17, 35, 64, 0.05); border: 1px solid #e2e8f0; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <div class="countdown-header" style="font-size: 1.4rem; font-weight: 700; text-align: center; margin-bottom: 25px; color: #112340;">
                        Conference <span style="color: #009688;">Starts In</span>
                    </div>
                    <div class="countdown-timer" style="display: flex; justify-content: space-between; gap: 15px; margin-bottom: 35px;">
                        <div class="cd-box" style="background: #f8fbfa; padding: 15px; border-radius: 12px; text-align: center; border: 1px solid #e2e8f0; flex: 1;"><div class="cd-val" style="font-size: 2.2rem; font-weight: 800; color: #112340;">{{ $settings['conf_stat1_number'] ?? '89' }}</div><div class="cd-lbl" style="font-size: 0.75rem; font-weight: 600; color: #64748b; text-transform: uppercase; margin-top: 5px;">{{ $settings['conf_stat1_label'] ?? 'DAYS' }}</div></div>
                        <div class="cd-box" style="background: #f8fbfa; padding: 15px; border-radius: 12px; text-align: center; border: 1px solid #e2e8f0; flex: 1;"><div class="cd-val" style="font-size: 2.2rem; font-weight: 800; color: #112340;">{{ $settings['conf_stat2_number'] ?? '11' }}</div><div class="cd-lbl" style="font-size: 0.75rem; font-weight: 600; color: #64748b; text-transform: uppercase; margin-top: 5px;">{{ $settings['conf_stat2_label'] ?? 'HOURS' }}</div></div>
                        <div class="cd-box" style="background: #f8fbfa; padding: 15px; border-radius: 12px; text-align: center; border: 1px solid #e2e8f0; flex: 1;"><div class="cd-val" style="font-size: 2.2rem; font-weight: 800; color: #112340;">{{ $settings['conf_stat3_number'] ?? '52' }}</div><div class="cd-lbl" style="font-size: 0.75rem; font-weight: 600; color: #64748b; text-transform: uppercase; margin-top: 5px;">{{ $settings['conf_stat3_label'] ?? 'MINS' }}</div></div>
                        <div class="cd-box" style="background: #f8fbfa; padding: 15px; border-radius: 12px; text-align: center; border: 1px solid #e2e8f0; flex: 1;"><div class="cd-val" style="font-size: 2.2rem; font-weight: 800; color: #112340;">{{ $settings['conf_stat4_number'] ?? '31' }}</div><div class="cd-lbl" style="font-size: 0.75rem; font-weight: 600; color: #64748b; text-transform: uppercase; margin-top: 5px;">{{ $settings['conf_stat4_label'] ?? 'SECS' }}</div></div>
                    </div>
                </div>
                
                <div style="display: flex; flex-direction: column; gap: 20px;">
                    <div class="mission-box" style="background: #f8fbfa; padding: 22px; border-radius: 12px; border-left: 4px solid #009688; border-top: 1px solid #e2e8f0; border-right: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
                        <h4 style="font-size: 1.15rem; font-weight: 700; color: #112340; margin-bottom: 8px;">Our Mission</h4>
                        <p style="margin: 0; font-size: 0.95rem; color: #475569; line-height: 1.6;">{!! nl2br(e($settings['about_mission'] ?? 'To connect researchers, thought leaders, and institutions through impactful events that inspire knowledge-sharing and real-world solutions.')) !!}</p>
                    </div>
                    <div class="mission-box" style="background: #f8fbfa; padding: 22px; border-radius: 12px; border-left: 4px solid #84cc16; border-top: 1px solid #e2e8f0; border-right: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
                        <h4 style="font-size: 1.15rem; font-weight: 700; color: #112340; margin-bottom: 8px;">Our Vision</h4>
                        <p style="margin: 0; font-size: 0.95rem; color: #475569; line-height: 1.6;">{!! nl2br(e($settings['about_vision'] ?? 'To build a global platform that showcases research, fosters collaboration, and drives innovation across disciplines.')) !!}</p>
                    </div>

                </div>
            </div>
            
            {{-- Horizontal divider --}}
            <div style="height: 1px; background: linear-gradient(to right, transparent, #e2e8f0 30%, #e2e8f0 70%, transparent); margin: 60px 0 50px;"></div>

            {{-- ── CONFERENCE OBJECTIVES ── --}}
            <div style="width: 100%;">
                
                {{-- Header Block (Centered) --}}
                <div style="text-align: center; max-width: 800px; margin: 0 auto 50px;">
                    <h2 style="font-size: clamp(2.2rem, 4.5vw, 3rem); font-weight: 900; color: #112340; line-height: 1.15; letter-spacing: -0.6px; margin: 0 0 12px 0;">

                        Conference <span style="color: #009688;">Objectives</span>
                    </h2>
                    
                    <div style="width: 40px; height: 4px; background: #009688; margin: 0 auto 20px; border-radius: 2px;"></div>
                    
                    <p style="font-size: 1.05rem; color: #64748b; line-height: 1.7; margin: 0;">
                        The Global One Health Confluence 2026 brings together leaders in science, policy, and practice to address our most pressing health challenges through a unified interdisciplinary approach.
                    </p>
                </div>

                {{-- 4 Vertical Cards Row --}}
                @php
                $objectives = [
                    [
                        'num'   => '01',
                        'title' => 'Promote Interdisciplinary Collaboration',
                        'icon'  => 'fa-solid fa-microscope',
                        'desc'  => 'To promote interdisciplinary collaboration across microbiology, health and sustainability.'
                    ],
                    [
                        'num'   => '02',
                        'title' => 'Discuss Emerging Challenges',
                        'icon'  => 'fa-solid fa-globe',
                        'desc'  => 'To discuss emerging challenges and innovative solutions through global scientific discourse.'
                    ],
                    [
                        'num'   => '03',
                        'title' => 'Encourage Research Translation',
                        'icon'  => 'fa-solid fa-arrow-trend-up',
                        'desc'  => 'To encourage research translation for real-world applications and impact.'
                    ],
                    [
                        'num'   => '04',
                        'title' => 'Foster Global Partnerships',
                        'icon'  => 'fa-solid fa-handshake',
                        'desc'  => 'To foster global partnerships for a One Health and sustainable future.'
                    ],
                ];
                @endphp

                <div style="display: flex; gap: 24px; flex-wrap: wrap; justify-content: center; width: 100%;">
                    @foreach($objectives as $obj)
                    <div class="obj-v-card"
                         style="flex: 1; min-width: 220px; padding: 42px 24px 36px; border-radius: 24px; text-align: center; cursor: pointer; display: flex; flex-direction: column; align-items: center;"
                         onclick="selectObjectiveCard(this)">
                        
                        {{-- Top Circle Icon --}}
                        <div class="obj-v-circle" style="width: 76px; height: 76px; border-radius: 50%; background: rgba(0,150,136,0.12); display: flex; align-items: center; justify-content: center; margin-bottom: 22px; transition: all 0.35s ease;">
                            <i class="{{ $obj['icon'] }}" style="font-size: 1.7rem; color: #009688;"></i>
                        </div>

                        {{-- Card Title --}}

                        <h4 style="font-size: 1.15rem; font-weight: 800; color: #112340; margin: 0 0 14px 0; line-height: 1.35;">
                            {{ $obj['title'] }}
                        </h4>

                        {{-- Card Description --}}
                        <p style="font-size: 0.94rem; color: #64748b; line-height: 1.65; margin: 0; font-weight: 400;">
                            {{ $obj['desc'] }}
                        </p>
                    </div>
                    @endforeach
                </div>

            </div>

            <style>
                .obj-v-card {
                    border: 2px solid #f0f4f8 !important;
                    background-color: #ffffff !important;
                    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03) !important;
                    transition: all 0.3s ease !important;
                }
                .obj-v-card:hover {
                    border-color: #009688 !important;
                    background-color: #f0faf9 !important;
                    transform: translateY(-6px) !important;
                    box-shadow: 0 16px 40px rgba(0, 150, 136, 0.12) !important;
                }
                .obj-v-card.active-green {
                    border-color: #009688 !important;
                    background-color: #f0faf9 !important;
                    box-shadow: 0 16px 40px rgba(0, 150, 136, 0.15) !important;
                }
            </style>

            <script>
                function selectObjectiveCard(el) {
                    const isAlreadyActive = el.classList.contains('active-green');
                    document.querySelectorAll('.obj-v-card').forEach(card => card.classList.remove('active-green'));
                    if (!isAlreadyActive) {
                        el.classList.add('active-green');
                    }
                }
            </script>


        </div>
    </div>
</section>


<!-- Strategic Pillars Full-Width Dark Section -->
<section style="background: #0b1a2e; padding: 10px 0 30px; position: relative; overflow: hidden;">

    <!-- Background ambient glows — on-theme teal only -->
    <div style="position: absolute; top: 40%; left: 50%; transform: translate(-50%,-50%); width: 800px; height: 500px; background: radial-gradient(ellipse, rgba(0,150,136,0.10) 0%, transparent 65%); pointer-events: none; border-radius: 50%;"></div>
    <div style="position: absolute; top: -80px; right: -80px; width: 350px; height: 350px; background: radial-gradient(circle, rgba(0,150,136,0.08) 0%, transparent 70%); pointer-events: none; border-radius: 50%;"></div>

    <!-- Section Header -->
    <div style="text-align: center; padding: 50px 20px 36px; position: relative; z-index: 2;">

        <!-- Badge -->
        <!-- Heading -->
        <h3 style="font-size: clamp(2.4rem, 5vw, 3.2rem); font-weight: 900; color: #ffffff; margin: 0 0 20px 0; letter-spacing: -1px; line-height: 1.08;">

            Five Pillars of the <span style="color: #009688; font-style: italic;">Confluence</span>
        </h3>

        <!-- Decorative line with center ornament -->
        <div style="display: flex; align-items: center; justify-content: center; gap: 12px; margin-bottom: 18px;">
            <div style="height: 1px; width: 80px; background: linear-gradient(to right, transparent, rgba(0,150,136,0.5));"></div>
            <div style="width: 8px; height: 8px; border-radius: 50%; background: #009688; box-shadow: 0 0 12px rgba(0,150,136,0.7);"></div>
            <div style="height: 2px; width: 40px; background: #009688; border-radius: 2px;"></div>
            <div style="width: 8px; height: 8px; border-radius: 50%; background: #009688; box-shadow: 0 0 12px rgba(0,150,136,0.7);"></div>
            <div style="height: 1px; width: 80px; background: linear-gradient(to left, transparent, rgba(0,150,136,0.5));"></div>
        </div>

        <!-- Subtitle tagline -->
        <p style="font-size: 1rem; color: rgba(180,210,220,0.65); font-weight: 400; margin: 0; letter-spacing: 0.3px;">Interdisciplinary framework driving sustainable global health through science, policy & partnership</p>
    </div>

    <!-- 3D Carousel -->
    <div id="pillars-carousel-wrapper" style="position: relative; z-index: 2; overflow: hidden; padding: 50px 0 60px;">
        <div id="pillars-carousel" style="display: flex; align-items: center; justify-content: center; perspective: 1400px; height: 500px; position: relative;">

            @php
            $pillars = [
                [
                    'num'   => '01',
                    'icon'  => 'fa-solid fa-microscope',
                    'color' => '#009688',
                    'glow'  => 'rgba(0,150,136,0.50)',
                    'tag'   => 'Research',
                    'title' => 'Scientific Excellence',
                    'desc'  => 'Facilitating high-quality interdisciplinary scientific discourse spanning microbiology, chemistry, biotechnology, environmental sciences, public health, and molecular medicine.',
                ],
                [
                    'num'   => '02',
                    'icon'  => 'fa-solid fa-flask-vial',
                    'color' => '#22d3ee',
                    'glow'  => 'rgba(34,211,238,0.45)',
                    'tag'   => 'Innovation',
                    'title' => 'Translational Innovation',
                    'desc'  => 'Promoting research translation through biotechnology, diagnostics, biosensors, sustainable chemistry, advanced materials, green technologies, and circular bioeconomy.',
                ],
                [
                    'num'   => '03',
                    'icon'  => 'fa-solid fa-scale-balanced',
                    'color' => '#009688',
                    'glow'  => 'rgba(0,150,136,0.50)',
                    'tag'   => 'Policy',
                    'title' => 'Policy & Governance',
                    'desc'  => 'Strengthening dialogue among researchers, policymakers, governmental agencies, and international organizations for evidence-informed health governance.',
                ],
                [
                    'num'   => '04',
                    'icon'  => 'fa-solid fa-leaf',
                    'color' => '#22d3ee',
                    'glow'  => 'rgba(34,211,238,0.45)',
                    'tag'   => 'Heritage',
                    'title' => 'Indigenous Integration',
                    'desc'  => 'Exploring the role of Indian Knowledge Systems and traditional healthcare practices in complementing modern One Health approaches.',
                ],
                [
                    'num'   => '05',
                    'icon'  => 'fa-solid fa-earth-americas',
                    'color' => '#009688',
                    'glow'  => 'rgba(0,150,136,0.50)',
                    'tag'   => 'Network',
                    'title' => 'Global Partnerships',
                    'desc'  => 'Building long-term collaborative networks among academia, healthcare, industry, research institutions, and international organizations.',
                ],
            ];
            @endphp

            @foreach($pillars as $i => $pillar)
            <div class="pillar-3d-card"
                 data-index="{{ $i }}"
                 data-color="{{ $pillar['color'] }}"
                 data-glow="{{ $pillar['glow'] }}"
                 style="
                    position: absolute;
                    width: 360px;
                    min-height: 460px;
                    background: linear-gradient(160deg, #112340 0%, #0d1c33 60%, #091628 100%);
                    border-radius: 24px;
                    padding: 44px 38px;
                    display: flex;
                    flex-direction: column;
                    cursor: pointer;
                    transition: all 0.55s cubic-bezier(0.25, 0.46, 0.45, 0.94);
                    border: 1px solid rgba(255,255,255,0.07);
                    user-select: none;
                    box-sizing: border-box;
                 ">

                <!-- Top row: tag + number -->
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 36px;">
                    <span style="
                        font-size: 0.7rem; font-weight: 700; letter-spacing: 2.5px;
                        color: {{ $pillar['color'] }}; text-transform: uppercase;
                        background: {{ $pillar['color'] }}18;
                        border: 1px solid {{ $pillar['color'] }}40;
                        padding: 5px 12px; border-radius: 50px;
                    ">{{ $pillar['tag'] }}</span>
                    <span style="font-size: 3rem; font-weight: 900; color: rgba(255,255,255,0.05); line-height: 1;">{{ $pillar['num'] }}</span>
                </div>

                <!-- Title -->

                <h4 style="font-size: 1.55rem; font-weight: 800; color: #ffffff; margin: 0 0 16px 0; line-height: 1.25; letter-spacing: -0.4px;">{{ $pillar['title'] }}</h4>

                <!-- Divider -->
                <div style="width: 40px; height: 2px; background: {{ $pillar['color'] }}; border-radius: 2px; margin-bottom: 18px;"></div>

                <!-- Description -->
                <p style="font-size: 0.97rem; color: rgba(200,215,230,0.75); line-height: 1.75; margin: 0; flex: 1;">{{ $pillar['desc'] }}</p>
            </div>

            @endforeach

        </div>

        <!-- Navigation Buttons -->
        <button onclick="shiftPillars(-1)" style="
            position: absolute; left: 4%; top: 50%; transform: translateY(-50%);
            width: 56px; height: 56px; border-radius: 50%;
            background: rgba(0,150,136,0.12);
            border: 1.5px solid rgba(0,150,136,0.35);
            cursor: pointer; display: flex; align-items: center; justify-content: center;
            z-index: 10; transition: all 0.3s; color: #009688; font-size: 1.3rem;"
            onmouseover="this.style.background='rgba(0,150,136,0.3)'; this.style.borderColor='#009688'; this.style.color='#fff';"
            onmouseout="this.style.background='rgba(0,150,136,0.12)'; this.style.borderColor='rgba(0,150,136,0.35)'; this.style.color='#009688';">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
        <button onclick="shiftPillars(1)" style="
            position: absolute; right: 4%; top: 50%; transform: translateY(-50%);
            width: 56px; height: 56px; border-radius: 50%;
            background: rgba(0,150,136,0.12);
            border: 1.5px solid rgba(0,150,136,0.35);
            cursor: pointer; display: flex; align-items: center; justify-content: center;
            z-index: 10; transition: all 0.3s; color: #009688; font-size: 1.3rem;"
            onmouseover="this.style.background='rgba(0,150,136,0.3)'; this.style.borderColor='#009688'; this.style.color='#fff';"
            onmouseout="this.style.background='rgba(0,150,136,0.12)'; this.style.borderColor='rgba(0,150,136,0.35)'; this.style.color='#009688';">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>


</section>

<script>
(function() {
    var currentPillar = 2;
    var total = 5;

    // Wider spacing to show adjacent cards more prominently
    var positions = [
        { x: -720, z: -280, scale: 0.70, opacity: 0.28, rotY: 22 },
        { x: -380, z: -130, scale: 0.85, opacity: 0.62, rotY: 11 },
        { x:    0, z:    0, scale: 1.00, opacity: 1.00, rotY:  0 },
        { x:  380, z: -130, scale: 0.85, opacity: 0.62, rotY: -11 },
        { x:  720, z: -280, scale: 0.70, opacity: 0.28, rotY: -22 },
    ];

    function applyCarousel() {
        var cards = document.querySelectorAll('.pillar-3d-card');
        var dots  = document.querySelectorAll('.pillar-dot');

        cards.forEach(function(card, i) {
            var rel = ((i - currentPillar) + total) % total;
            if (rel > total / 2) rel -= total;
            var slot = rel + 2;

            if (slot < 0 || slot >= positions.length) {
                card.style.opacity = '0';
                card.style.pointerEvents = 'none';
                card.style.zIndex = '0';
                return;
            }

            var pos = positions[slot];
            card.style.transform = 'translateX(' + pos.x + 'px) translateZ(' + pos.z + 'px) rotateY(' + pos.rotY + 'deg) scale(' + pos.scale + ')';
            card.style.opacity   = pos.opacity;
            card.style.zIndex    = slot === 2 ? '10' : (slot === 1 || slot === 3 ? '7' : '4');
            card.style.pointerEvents = 'auto';

            var glow  = card.getAttribute('data-glow');
            var color = card.getAttribute('data-color');

            if (slot === 2) {
                card.style.boxShadow = '0 0 80px -15px ' + glow + ', 0 40px 80px rgba(0,0,0,0.55)';
                card.style.border    = '1.5px solid ' + color + '60';
                card.style.background = 'linear-gradient(160deg, #15294a 0%, #112340 60%, #0d1c33 100%)';
            } else {
                card.style.boxShadow = '0 20px 50px rgba(0,0,0,0.45)';
                card.style.border    = '1px solid rgba(255,255,255,0.06)';
                card.style.background = 'linear-gradient(160deg, #112340 0%, #0d1c33 60%, #091628 100%)';
            }
        });

        dots.forEach(function(dot, i) {
            if (i === currentPillar) {
                dot.style.background    = '#009688';
                dot.style.width         = '26px';
                dot.style.borderRadius  = '5px';
            } else {
                dot.style.background    = 'rgba(255,255,255,0.2)';
                dot.style.width         = '8px';
                dot.style.borderRadius  = '50%';
            }
        });
    }

    window.shiftPillars = function(dir) {
        currentPillar = ((currentPillar + dir) + total) % total;
        applyCarousel();
    };
    window.goToPillar = function(idx) {
        currentPillar = idx;
        applyCarousel();
    };

    document.querySelectorAll('.pillar-3d-card').forEach(function(card) {
        card.addEventListener('click', function() {
            goToPillar(parseInt(card.getAttribute('data-index')));
        });
    });

    setInterval(function() { shiftPillars(1); }, 4500);
    applyCarousel();
})();
</script>


