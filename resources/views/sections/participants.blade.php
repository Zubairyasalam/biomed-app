{{-- Objectives + Participants + Strategic Framework — Stacked Header & Full-Width Cards Layout --}}
<section style="background: #ffffff; padding: 70px 0 20px;">
    <div style="max-width: 90%; margin: 0 auto; padding: 0 20px;">



        {{-- ── WHO CAN PARTICIPATE ── --}}
        <div style="margin-bottom: 80px;">

            {{-- Centered Header Block --}}
            <div style="text-align: center; max-width: 750px; margin: 0 auto 45px;">
                <div style="font-size: 0.85rem; font-weight: 800; color: #009688; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 8px;">
                    WHO CAN ATTEND
                </div>
                <h2 style="font-size: clamp(2.2rem, 4.5vw, 3rem); font-weight: 900; color: #112340; line-height: 1.15; letter-spacing: -0.6px; margin: 0 0 12px 0;">
                    Our <span style="color: #009688;">Participants</span>
                </h2>
                <div style="width: 50px; height: 4px; background: #009688; margin: 0 auto 18px; border-radius: 2px;"></div>
                <p style="font-size: 1.05rem; color: #64748b; line-height: 1.7; margin: 0;">
                    Join the confluence to bridge microbes, molecules & mankind for a sustainable future.
                </p>
            </div>

            {{-- 5 Vertical Cards Row --}}
            @php
            $participants = [
                ['icon' => 'fa-solid fa-graduation-cap',  'label' => "Students &\nResearch Scholars"],
                ['icon' => 'fa-solid fa-microscope',      'label' => "Academicians &\nPolicy Makers"],
                ['icon' => 'fa-solid fa-flask',           'label' => "Research\nScientists"],
                ['icon' => 'fa-solid fa-book-open-reader','label' => "Health\nProfessionals"],
                ['icon' => 'fa-solid fa-industry',         'label' => "Industry Experts (Pharma\n& Health)"],
            ];
            @endphp

            <div class="participant-cards-row" style="display: flex; gap: 20px; flex-wrap: wrap; justify-content: center;">
                @foreach($participants as $p)
                <div class="participant-v-card"
                     style="flex: 1; min-width: 190px; background: #ffffff; padding: 38px 20px; border-radius: 16px; text-align: center; border: 1px solid #f0f4f8; box-shadow: 0 10px 30px rgba(0,0,0,0.04); transition: all 0.35s ease; cursor: pointer; display: flex; flex-direction: column; align-items: center; justify-content: flex-start;">
                    
                    <div class="p-icon-circle" style="width: 68px; height: 68px; border-radius: 50%; background: rgba(0,150,136,0.12); display: flex; justify-content: center; align-items: center; margin-bottom: 22px; transition: all 0.35s ease;">
                        <i class="{{ $p['icon'] }} p-icon-fa" style="font-size: 1.6rem; color: #009688; transition: all 0.35s ease;"></i>
                    </div>

                    <h4 style="margin: 0; font-size: 1rem; color: #112340; line-height: 1.4; font-weight: 700;">
                        {!! nl2br(e($p['label'])) !!}
                    </h4>
                </div>
                @endforeach
            </div>

        </div>

        <style>
            .participant-v-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 16px 40px rgba(0, 150, 136, 0.15) !important;
                border-color: rgba(0, 150, 136, 0.25) !important;
            }
            .participant-v-card:hover .p-icon-circle {
                background: #009688 !important;
            }
            .participant-v-card:hover .p-icon-fa {
                color: #ffffff !important;
            }
        </style>



        {{-- ── STRATEGIC FRAMEWORK ── --}}
        <div class="pillars-section-wrap" style="margin-bottom: 80px; position: relative; border-radius: 32px; overflow: hidden; padding: 70px 48px 80px;">

            {{-- Animated Background --}}
            <div class="pillars-bg-orb pillars-orb-1"></div>
            <div class="pillars-bg-orb pillars-orb-2"></div>
            <div class="pillars-bg-orb pillars-orb-3"></div>

            {{-- Section Header --}}
            <div style="text-align: center; max-width: 780px; margin: 0 auto 58px; position: relative; z-index: 2;">
                <h3 class="pillars-heading">
                    Five Pillars Driving <span class="pillars-heading-accent">Our Mission</span>
                </h3>
                <div class="pillars-heading-bar"></div>
                <p class="pillars-subtext">
                    A comprehensive framework designed to integrate multi-disciplinary research, innovation, and global policy for maximum real-world impact.
                </p>
            </div>

            {{-- Pillars Grid --}}
            @php
            $pillars = [
                ['icon' => 'fa-solid fa-microscope',     'num' => '01', 'title' => 'Scientific Excellence',                'desc' => 'Facilitating high-quality interdisciplinary scientific discourse spanning microbiology, chemistry, biotechnology, environmental sciences, public health and molecular medicine.'],
                ['icon' => 'fa-solid fa-flask-vial',     'num' => '02', 'title' => 'Translational Innovation',             'desc' => 'Promoting research translation through biotechnology, diagnostics, biosensors, sustainable chemistry, advanced materials, green technologies and circular bioeconomy.'],
                ['icon' => 'fa-solid fa-landmark',       'num' => '03', 'title' => 'Policy & Governance',                  'desc' => 'Strengthening dialogue among researchers, policymakers, governmental agencies and international organizations for evidence-informed health governance.'],
                ['icon' => 'fa-solid fa-leaf',           'num' => '04', 'title' => 'Indigenous Knowledge Integration',     'desc' => 'Exploring Indian Knowledge Systems and traditional healthcare practices in complementing modern One Health approaches.'],
                ['icon' => 'fa-solid fa-earth-americas', 'num' => '05', 'title' => 'Sustainability & Global Partnerships', 'desc' => 'Building long-term collaborative networks among academia, healthcare, industry, research institutions, and international organizations.'],
            ];
            @endphp

            <div class="pillars-grid" style="position: relative; z-index: 2; display: flex; flex-wrap: wrap; justify-content: center; gap: 24px;">
                @foreach($pillars as $i => $p)
                <div class="pillar-neo-card pillar-delay-{{ $i }}">
                    {{-- Glow Overlay --}}
                    <div class="pillar-neo-glow"></div>

                    {{-- Number Badge --}}
                    <div class="pillar-neo-badge">{{ $p['num'] }}</div>

                    {{-- Icon --}}
                    <div class="pillar-neo-icon-wrap">
                        <i class="{{ $p['icon'] }} pillar-neo-icon"></i>
                    </div>

                    {{-- Title --}}
                    <h4 class="pillar-neo-title">{{ $p['title'] }}</h4>

                    {{-- Accent Bar --}}
                    <div class="pillar-neo-bar"></div>

                    {{-- Description --}}
                    <p class="pillar-neo-desc">{{ $p['desc'] }}</p>

                    {{-- Bottom Shine --}}
                    <div class="pillar-neo-shine"></div>
                </div>
                @endforeach
            </div>
        </div>

        <style>
            /* ── Pillars Section Wrapper ── */
            .pillars-section-wrap {
                background: linear-gradient(135deg, #0a1628 0%, #0d2137 40%, #0a2320 75%, #091520 100%);
            }

            /* ── Animated Background Orbs ── */
            .pillars-bg-orb {
                position: absolute;
                border-radius: 50%;
                filter: blur(80px);
                opacity: 0.18;
                pointer-events: none;
                animation: pillarsOrbFloat 8s ease-in-out infinite alternate;
            }
            .pillars-orb-1 {
                width: 500px; height: 500px;
                background: radial-gradient(circle, #009688, transparent);
                top: -120px; left: -100px;
                animation-delay: 0s;
            }
            .pillars-orb-2 {
                width: 400px; height: 400px;
                background: radial-gradient(circle, #00bcd4, transparent);
                bottom: -80px; right: -80px;
                animation-delay: 3s;
            }
            .pillars-orb-3 {
                width: 300px; height: 300px;
                background: radial-gradient(circle, #1de9b6, transparent);
                top: 50%; left: 50%; transform: translate(-50%, -50%);
                animation-delay: 5s;
                opacity: 0.08;
            }
            @keyframes pillarsOrbFloat {
                0%   { transform: scale(1) translate(0,0); }
                100% { transform: scale(1.15) translate(20px, 20px); }
            }

            /* ── Header Elements ── */
            .pillars-eyebrow {
                display: inline-block;
                font-size: 0.78rem;
                font-weight: 800;
                color: #1de9b6;
                text-transform: uppercase;
                letter-spacing: 3px;
                background: rgba(29, 233, 182, 0.1);
                border: 1px solid rgba(29, 233, 182, 0.25);
                padding: 6px 18px;
                border-radius: 50px;
                margin-bottom: 20px;
            }
            .pillars-heading {
                font-size: clamp(2rem, 4vw, 2.8rem);
                font-weight: 900;
                color: #ffffff;
                margin: 0 0 18px 0;
                letter-spacing: -0.6px;
                line-height: 1.2;
            }
            .pillars-heading-accent {
                background: linear-gradient(135deg, #1de9b6, #00bcd4);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }
            .pillars-heading-bar {
                width: 60px; height: 4px;
                background: linear-gradient(90deg, #009688, #1de9b6);
                border-radius: 2px;
                margin: 0 auto 20px;
            }
            .pillars-subtext {
                font-size: 1.05rem;
                color: rgba(255,255,255,0.6);
                line-height: 1.75;
                margin: 0;
                max-width: 680px;
                margin-left: auto;
                margin-right: auto;
            }

            /* ── Grid ── */
            .pillars-grid {
                /* flex set inline – justify-content: center centers the orphaned last cards */
            }
            @media (max-width: 600px) {
                .pillars-section-wrap { padding: 48px 24px 60px; }
            }

            /* ── Neo Card ── */
            .pillar-neo-card {
                position: relative;
                flex: 0 0 calc(33.333% - 18px);  /* 3 per row; gap 24px split = ~18px deducted */
                max-width: calc(33.333% - 18px);
                background: rgba(255,255,255,0.04);
                border: 1px solid rgba(255,255,255,0.09);
                border-radius: 24px;
                padding: 36px 30px 34px;
                overflow: hidden;
                display: flex;
                flex-direction: column;
                transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1),
                            border-color 0.3s ease,
                            box-shadow 0.3s ease;
                cursor: default;
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
                animation: pillarCardIn 0.6s ease both;
            }
            @media (max-width: 992px) {
                .pillar-neo-card {
                    flex: 0 0 calc(50% - 14px);
                    max-width: calc(50% - 14px);
                }
            }
            @media (max-width: 600px) {
                .pillar-neo-card {
                    flex: 0 0 100%;
                    max-width: 100%;
                }
            }
            .pillar-delay-0 { animation-delay: 0.05s; }
            .pillar-delay-1 { animation-delay: 0.12s; }
            .pillar-delay-2 { animation-delay: 0.19s; }
            .pillar-delay-3 { animation-delay: 0.26s; }
            .pillar-delay-4 { animation-delay: 0.33s; }
            @keyframes pillarCardIn {
                from { opacity: 0; transform: translateY(24px); }
                to   { opacity: 1; transform: translateY(0); }
            }
            .pillar-neo-card:hover {
                transform: translateY(-10px) scale(1.02);
                border-color: rgba(0,150,136,0.55);
                box-shadow: 0 30px 70px rgba(0,0,0,0.35),
                            0 0 0 1px rgba(0,150,136,0.3),
                            inset 0 1px 0 rgba(255,255,255,0.08);
            }
            .pillar-neo-card:hover .pillar-neo-glow {
                opacity: 1;
            }
            .pillar-neo-card:hover .pillar-neo-icon-wrap {
                background: linear-gradient(135deg, #009688, #1de9b6);
                box-shadow: 0 12px 30px rgba(0,150,136,0.45);
            }
            .pillar-neo-card:hover .pillar-neo-icon {
                color: #ffffff;
            }
            .pillar-neo-card:hover .pillar-neo-bar {
                width: 60px;
                background: linear-gradient(90deg, #1de9b6, #009688);
            }

            /* ── Glow overlay ── */
            .pillar-neo-glow {
                position: absolute;
                inset: 0;
                background: radial-gradient(ellipse at 30% 0%, rgba(0,150,136,0.14), transparent 65%);
                opacity: 0;
                transition: opacity 0.4s ease;
                pointer-events: none;
                border-radius: inherit;
            }

            /* ── Number Badge ── */
            .pillar-neo-badge {
                position: absolute;
                top: 20px;
                right: 24px;
                font-size: 2.6rem;
                font-weight: 900;
                color: rgba(255,255,255,0.04);
                line-height: 1;
                letter-spacing: -2px;
                pointer-events: none;
                user-select: none;
                transition: color 0.3s ease;
            }
            .pillar-neo-card:hover .pillar-neo-badge {
                color: rgba(0,150,136,0.12);
            }

            /* ── Icon ── */
            .pillar-neo-icon-wrap {
                width: 58px; height: 58px;
                border-radius: 18px;
                background: rgba(0,150,136,0.14);
                display: flex; align-items: center; justify-content: center;
                margin-bottom: 24px;
                transition: all 0.35s ease;
                border: 1px solid rgba(0,150,136,0.2);
            }
            .pillar-neo-icon {
                font-size: 1.5rem;
                color: #1de9b6;
                transition: color 0.35s ease;
            }

            /* ── Title ── */
            .pillar-neo-title {
                font-size: 1.15rem;
                font-weight: 800;
                color: #ffffff;
                margin: 0 0 14px 0;
                line-height: 1.35;
                letter-spacing: -0.2px;
            }

            /* ── Accent Bar ── */
            .pillar-neo-bar {
                width: 36px; height: 3px;
                background: linear-gradient(90deg, #009688, #1de9b6);
                border-radius: 2px;
                margin-bottom: 18px;
                transition: width 0.35s ease, background 0.35s ease;
            }

            /* ── Description ── */
            .pillar-neo-desc {
                font-size: 0.91rem;
                color: rgba(255,255,255,0.55);
                line-height: 1.75;
                margin: 0;
                font-weight: 400;
                flex-grow: 1;
            }

            /* ── Bottom Shine ── */
            .pillar-neo-shine {
                position: absolute;
                bottom: 0; left: 0; right: 0;
                height: 2px;
                background: linear-gradient(90deg, transparent, rgba(0,150,136,0.5), transparent);
                opacity: 0;
                transition: opacity 0.35s ease;
            }
            .pillar-neo-card:hover .pillar-neo-shine {
                opacity: 1;
            }
        </style>



        {{-- ── EXPECTED OUTCOMES ── --}}
        <div class="outcomes-neo-wrap" style="margin-bottom: 90px; position: relative;">
            
            {{-- Section Header --}}
            <div style="text-align: center; max-width: 800px; margin: 0 auto 60px;">
                <h3 style="font-size: clamp(2.2rem, 4vw, 3rem); font-weight: 900; color: #0f172a; margin: 0 0 16px; letter-spacing: -0.5px; line-height: 1.2;">
                    Key Expected <span style="color: #009688;">Outcomes</span>
                </h3>
                <div style="width: 60px; height: 4px; background: linear-gradient(90deg, #009688, #1de9b6); border-radius: 2px; margin: 0 auto 20px;"></div>
                <p style="font-size: 1.1rem; color: #64748b; line-height: 1.7; margin: 0;">
                    Tangible impacts and key deliverables driving the Global One Health vision forward through innovation, policy, and education.
                </p>
            </div>

            @php
            $outcomes = [
                ['icon' => 'fa-solid fa-users-gear',     'num' => '01', 'label' => 'Strengthened interdisciplinary collaborations',                         'tag' => 'Collaboration'],
                ['icon' => 'fa-solid fa-globe',          'num' => '02', 'label' => 'International research partnerships',                                    'tag' => 'Global'],
                ['icon' => 'fa-solid fa-book-bookmark',  'num' => '03', 'label' => 'High-quality scientific publications',                                   'tag' => 'Research'],
                ['icon' => 'fa-solid fa-lightbulb',      'num' => '04', 'label' => 'Translation of research into innovation',                                'tag' => 'Innovation'],
                ['icon' => 'fa-solid fa-landmark',       'num' => '05', 'label' => 'Policy recommendations for One Health',                                  'tag' => 'Policy'],
                ['icon' => 'fa-solid fa-graduation-cap', 'num' => '06', 'label' => 'Capacity building for early-career researchers',             'tag' => 'Education'],
            ];
            @endphp

            <div class="outcomes-grid">
                @foreach($outcomes as $i => $o)
                <div class="outcome-card">
                    <div class="outcome-icon-wrapper">
                        <i class="{{ $o['icon'] }}"></i>
                    </div>
                    <div class="outcome-content">
                        <div class="outcome-tag">{{ $o['tag'] }}</div>
                        <h4 class="outcome-title">{{ $o['label'] }}</h4>
                    </div>
                    <div class="outcome-num">{{ $o['num'] }}</div>
                    <div class="outcome-hover-line"></div>
                </div>
                @endforeach
            </div>
        </div>

        <style>
            .outcomes-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
                gap: 30px;
                max-width: 1100px;
                margin: 0 auto;
            }
            .outcome-card {
                background: #ffffff;
                border: 1px solid #e2e8f0;
                border-radius: 20px;
                padding: 40px 30px;
                position: relative;
                overflow: hidden;
                transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
                box-shadow: 0 10px 30px rgba(15, 23, 42, 0.03);
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                z-index: 1;
            }
            .outcome-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 20px 40px rgba(15, 23, 42, 0.08);
                border-color: rgba(0, 150, 136, 0.3);
            }
            .outcome-hover-line {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 0;
                height: 4px;
                background: linear-gradient(90deg, #009688, #1de9b6);
                transition: width 0.4s ease;
            }
            .outcome-card:hover .outcome-hover-line {
                width: 100%;
            }
            .outcome-icon-wrapper {
                width: 65px;
                height: 65px;
                border-radius: 16px;
                background: rgba(0, 150, 136, 0.08);
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 25px;
                transition: all 0.4s ease;
                border: 1px solid rgba(0, 150, 136, 0.15);
            }
            .outcome-card:hover .outcome-icon-wrapper {
                background: #009688;
                transform: scale(1.05) rotate(-5deg);
                box-shadow: 0 10px 20px rgba(0, 150, 136, 0.2);
            }
            .outcome-icon-wrapper i {
                font-size: 1.8rem;
                color: #009688;
                transition: color 0.4s ease;
            }
            .outcome-card:hover .outcome-icon-wrapper i {
                color: #ffffff;
            }
            .outcome-tag {
                font-size: 0.75rem;
                font-weight: 800;
                color: #009688;
                text-transform: uppercase;
                letter-spacing: 2px;
                margin-bottom: 10px;
            }
            .outcome-title {
                font-size: 1.25rem;
                font-weight: 800;
                color: #0f172a;
                line-height: 1.4;
                margin: 0;
                transition: color 0.3s ease;
            }
            .outcome-card:hover .outcome-title {
                color: #009688;
            }
            .outcome-num {
                position: absolute;
                top: 20px;
                right: 20px;
                font-size: 4rem;
                font-weight: 900;
                color: rgba(15, 23, 42, 0.03);
                line-height: 1;
                pointer-events: none;
                transition: color 0.4s ease, transform 0.4s ease;
            }
            .outcome-card:hover .outcome-num {
                color: rgba(0, 150, 136, 0.08);
                transform: scale(1.1) translate(-5px, 5px);
            }
            @media (max-width: 768px) {
                .outcome-card {
                    padding: 30px 20px;
                }
            }
        </style>


        {{-- ── OUR JOURNEY TO IMPACT ── --}}
        <div class="jz-section" style="position: relative; border-radius: 32px; overflow: hidden; padding: 70px 60px 80px;">

            {{-- Dark background --}}
            <div class="jz-bg"></div>
            <div class="jz-orb jz-orb-l"></div>
            <div class="jz-orb jz-orb-r"></div>

            {{-- Header --}}
            <div style="text-align: center; max-width: 680px; margin: 0 auto 35px; position: relative; z-index: 2;">
                <h3 class="jz-heading">Our Journey to <span class="jz-accent">Impact</span></h3>
                <div class="jz-bar"></div>
                <p class="jz-subtext">A strategic 4-step pathway driving global collaboration into sustainable transformation.</p>
            </div>

            {{-- Zigzag Timeline --}}
            @php
            $journeySteps = [
                ['num' => '01', 'title' => 'CONNECT',  'icon' => 'fa-solid fa-users',         'desc' => 'Bringing global minds together for meaningful collaboration.'],
                ['num' => '02', 'title' => 'SHARE',    'icon' => 'fa-solid fa-share-nodes',    'desc' => 'Sharing knowledge, innovations and best practices.'],
                ['num' => '03', 'title' => 'INNOVATE', 'icon' => 'fa-solid fa-lightbulb',      'desc' => 'Creating solutions for a healthier planet and resilient communities.'],
                ['num' => '04', 'title' => 'IMPACT',   'icon' => 'fa-solid fa-earth-americas', 'desc' => 'Driving sustainable change for generations to come.'],
            ];
            @endphp

            <div class="jz-timeline" style="position: relative; z-index: 2;">

                {{-- Central vertical spine --}}
                <div class="jz-spine">
                    <div class="jz-spine-glow"></div>
                </div>

                @foreach($journeySteps as $i => $step)
                @php $isLeft = ($i % 2 === 0); @endphp

                <div class="jz-row jz-row-delay-{{ $i }} {{ $isLeft ? 'jz-row-left' : 'jz-row-right' }}">

                    {{-- Content panel --}}
                    <div class="jz-panel">
                        <div class="jz-panel-inner">
                            <div class="jz-panel-icon-row">
                                <div class="jz-panel-icon-wrap">
                                    <i class="{{ $step['icon'] }} jz-panel-icon-fa"></i>
                                </div>
                                <span class="jz-panel-num-label">STEP {{ $step['num'] }}</span>
                            </div>
                            <h4 class="jz-panel-title">{{ $step['title'] }}</h4>
                            <p class="jz-panel-desc">{{ $step['desc'] }}</p>
                        </div>
                        <div class="jz-panel-shine"></div>
                    </div>

                    {{-- Central node --}}
                    <div class="jz-node">
                        <div class="jz-node-ring"></div>
                        <span class="jz-node-num">{{ $step['num'] }}</span>
                    </div>

                    {{-- Spacer for opposite side --}}
                    <div class="jz-spacer"></div>
                </div>
                @endforeach
            </div>
        </div>

        <style>
            /* ── Section ── */
            .jz-section {
                background: linear-gradient(150deg, #060e1a 0%, #071c2b 45%, #071c18 100%);
            }
            .jz-bg {
                position: absolute; inset: 0;
                background-image:
                    radial-gradient(ellipse 70% 50% at 50% 0%, rgba(0,150,136,0.07), transparent),
                    radial-gradient(ellipse 50% 40% at 50% 100%, rgba(0,188,212,0.05), transparent);
                pointer-events: none;
            }
            .jz-orb {
                position: absolute; border-radius: 50%;
                filter: blur(100px); opacity: 0.12; pointer-events: none;
            }
            .jz-orb-l { width: 380px; height: 380px; top: -80px; left: -60px; background: radial-gradient(circle, #009688, transparent); }
            .jz-orb-r { width: 320px; height: 320px; bottom: -50px; right: -50px; background: radial-gradient(circle, #00bcd4, transparent); }

            /* ── Header ── */
            .jz-eyebrow {
                display: inline-block; font-size: 0.73rem; font-weight: 800;
                color: #1de9b6; text-transform: uppercase; letter-spacing: 3px;
                background: rgba(29,233,182,0.08); border: 1px solid rgba(29,233,182,0.2);
                padding: 5px 16px; border-radius: 50px; margin-bottom: 16px;
            }
            .jz-heading { font-size: clamp(1.9rem, 3.5vw, 2.7rem); font-weight: 900; color: #fff; margin: 0 0 14px; letter-spacing: -0.5px; line-height: 1.2; }
            .jz-accent { background: linear-gradient(135deg, #1de9b6, #00bcd4); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
            .jz-bar { width: 52px; height: 4px; background: linear-gradient(90deg, #009688, #1de9b6); border-radius: 2px; margin: 0 auto 16px; }
            .jz-subtext { font-size: 1rem; color: rgba(255,255,255,0.5); line-height: 1.7; margin: 0; }

            /* ── Timeline container ── */
            .jz-timeline { position: relative; max-width: 860px; margin: 0 auto; }

            /* ── Vertical spine ── */
            .jz-spine {
                position: absolute;
                left: 50%; transform: translateX(-50%);
                top: 0; bottom: 0;
                width: 2px;
                background: rgba(0,150,136,0.18);
                border-radius: 2px;
                overflow: hidden;
            }
            .jz-spine-glow {
                position: absolute; inset: 0;
                background: linear-gradient(180deg, transparent 0%, #1de9b6 30%, #009688 60%, #1de9b6 80%, transparent 100%);
                animation: jzSpineFlow 2.5s linear infinite;
                opacity: 0.8;
            }
            @keyframes jzSpineFlow {
                0%   { transform: translateY(-100%); }
                100% { transform: translateY(100%); }
            }

            /* ── Each Row ── */
            .jz-row {
                display: flex;
                align-items: center;
                margin-bottom: 40px;
                animation: jzRowIn 0.65s ease both;
                gap: 0;
            }
            .jz-row:last-child { margin-bottom: 0; }
            .jz-row-delay-0 { animation-delay: 0.05s; }
            .jz-row-delay-1 { animation-delay: 0.15s; }
            .jz-row-delay-2 { animation-delay: 0.25s; }
            .jz-row-delay-3 { animation-delay: 0.35s; }
            @keyframes jzRowIn {
                from { opacity: 0; transform: translateY(20px); }
                to   { opacity: 1; transform: translateY(0); }
            }

            /* Left row: panel | node | spacer */
            .jz-row-left { flex-direction: row; }
            /* Right row: spacer | node | panel (reversed) */
            .jz-row-right { flex-direction: row-reverse; }

            /* ── Panel ── */
            .jz-panel {
                flex: 1;
                position: relative;
                overflow: hidden;
                border-radius: 20px;
                border: 1px solid rgba(255,255,255,0.07);
                background: rgba(255,255,255,0.04);
                backdrop-filter: blur(14px);
                -webkit-backdrop-filter: blur(14px);
                transition: transform 0.4s cubic-bezier(0.34,1.56,0.64,1),
                            border-color 0.3s ease, box-shadow 0.3s ease;
            }
            .jz-panel-inner { padding: 28px 30px 26px; }
            .jz-panel:hover {
                transform: scale(1.03);
                border-color: rgba(0,150,136,0.45);
                box-shadow: 0 24px 60px rgba(0,0,0,0.35), 0 0 0 1px rgba(0,150,136,0.25);
            }
            .jz-panel:hover .jz-panel-icon-wrap {
                background: linear-gradient(135deg, #009688, #1de9b6);
                box-shadow: 0 10px 28px rgba(0,150,136,0.4);
                transform: rotate(-6deg) scale(1.1);
            }
            .jz-panel:hover .jz-panel-icon-fa { color: #ffffff; }
            .jz-panel:hover .jz-panel-shine { opacity: 1; }

            /* Shine sweep */
            .jz-panel-shine {
                position: absolute; inset: 0;
                background: linear-gradient(120deg, transparent 30%, rgba(255,255,255,0.04) 50%, transparent 70%);
                opacity: 0; transition: opacity 0.35s ease;
                pointer-events: none;
            }

            /* Icon row */
            .jz-panel-icon-row { display: flex; align-items: center; gap: 14px; margin-bottom: 16px; }
            .jz-panel-icon-wrap {
                width: 52px; height: 52px; border-radius: 16px;
                background: rgba(0,150,136,0.12);
                border: 1px solid rgba(0,150,136,0.2);
                display: flex; align-items: center; justify-content: center;
                flex-shrink: 0;
                transition: all 0.4s cubic-bezier(0.34,1.56,0.64,1);
            }
            .jz-panel-icon-fa { font-size: 1.3rem; color: #1de9b6; transition: color 0.3s ease; }
            .jz-panel-num-label {
                font-size: 0.65rem; font-weight: 900;
                color: rgba(29,233,182,0.6); letter-spacing: 3px; text-transform: uppercase;
            }
            .jz-panel-title {
                font-size: 1.25rem; font-weight: 900; color: #ffffff;
                margin: 0 0 10px; letter-spacing: 2px; text-transform: uppercase;
            }
            .jz-panel-desc {
                font-size: 0.9rem; color: rgba(255,255,255,0.5); line-height: 1.65; margin: 0;
            }

            /* ── Central Node ── */
            .jz-node {
                flex: 0 0 80px;
                display: flex; align-items: center; justify-content: center;
                position: relative; z-index: 3;
            }
            .jz-node-ring {
                position: absolute;
                width: 48px; height: 48px;
                border-radius: 50%;
                border: 2px solid rgba(0,150,136,0.35);
                animation: jzNodePulse 2s ease-in-out infinite;
            }
            @keyframes jzNodePulse {
                0%, 100% { transform: scale(1); opacity: 0.4; }
                50% { transform: scale(1.25); opacity: 0; }
            }
            .jz-node-num {
                width: 38px; height: 38px;
                border-radius: 50%;
                background: linear-gradient(135deg, #009688, #1de9b6);
                display: flex; align-items: center; justify-content: center;
                font-size: 0.85rem; font-weight: 900; color: #ffffff;
                box-shadow: 0 6px 20px rgba(0,150,136,0.5);
                position: relative; z-index: 1;
                letter-spacing: 0;
            }

            /* ── Spacer ── */
            .jz-spacer { flex: 1; }

            /* ── Responsive ── */
            @media (max-width: 700px) {
                .jz-timeline { max-width: 100%; }
                .jz-row { flex-direction: column !important; align-items: flex-start; gap: 12px; }
                .jz-node { flex: 0; }
                .jz-spacer { display: none; }
                .jz-spine { display: none; }
                .jz-section { padding: 48px 24px 60px; }
            }
        </style>






    </div>
</section>


