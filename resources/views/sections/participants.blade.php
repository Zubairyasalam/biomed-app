{{-- Objectives + Participants + Strategic Framework — Stacked Header & Full-Width Cards Layout --}}
<section style="background: #ffffff; padding: 70px 0 80px;">
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


        {{-- Horizontal divider --}}
        <div style="height: 1px; background: linear-gradient(to right, transparent, #e2e8f0 30%, #e2e8f0 70%, transparent); margin-bottom: 80px;        {{-- ── STRATEGIC FRAMEWORK ── --}}
        <div>
            {{-- Section Header --}}
            <div style="text-align: center; max-width: 750px; margin: 0 auto 50px;">
                <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(0,150,136,0.08); border: 1.5px solid rgba(0,150,136,0.25); border-radius: 50px; padding: 6px 18px; margin-bottom: 16px;">
                    <i class="fa-solid fa-shapes" style="color: #009688; font-size: 0.8rem;"></i>
                    <span style="font-size: 0.75rem; font-weight: 800; color: #009688; text-transform: uppercase; letter-spacing: 2px;">STRATEGIC FRAMEWORK</span>
                </div>
                <h3 style="font-size: clamp(2rem, 4vw, 2.6rem); font-weight: 900; color: #112340; margin: 0 0 14px 0; letter-spacing: -0.5px;">
                    Five Pillars Driving <span style="color: #009688;">Our Mission</span>
                </h3>
                <div style="width: 50px; height: 4px; background: #009688; margin: 0 auto 16px; border-radius: 2px;"></div>
                <p style="font-size: 1.02rem; color: #64748b; line-height: 1.7; margin: 0;">
                    A comprehensive framework designed to integrate multi-disciplinary research, innovation, and global policy for maximum real-world impact.
                </p>
            </div>

            {{-- Pillars Grid (3 + 2 Layout) --}}
            @php
            $pillars = [
                ['icon' => 'fa-solid fa-microscope',     'num' => 'PILLAR 01', 'title' => 'Scientific Excellence',                'desc' => 'Facilitating high-quality interdisciplinary scientific discourse spanning microbiology, chemistry, biotechnology, environmental sciences, public health and molecular medicine.'],
                ['icon' => 'fa-solid fa-flask-vial',     'num' => 'PILLAR 02', 'title' => 'Translational Innovation',             'desc' => 'Promoting research translation through biotechnology, diagnostics, biosensors, sustainable chemistry, advanced materials, green technologies and circular bioeconomy.'],
                ['icon' => 'fa-solid fa-landmark',       'num' => 'PILLAR 03', 'title' => 'Policy & Governance',                  'desc' => 'Strengthening dialogue among researchers, policymakers, governmental agencies and international organizations for evidence-informed health governance.'],
                ['icon' => 'fa-solid fa-leaf',           'num' => 'PILLAR 04', 'title' => 'Indigenous Knowledge Integration',     'desc' => 'Exploring Indian Knowledge Systems and traditional healthcare practices in complementing modern One Health approaches.'],
                ['icon' => 'fa-solid fa-earth-americas', 'num' => 'PILLAR 05', 'title' => 'Sustainability & Global Partnerships', 'desc' => 'Building long-term collaborative networks among academia, healthcare, industry, research institutions, and international organizations.'],
            ];
            @endphp

            <div class="pillars-responsive-grid" style="display: flex; flex-wrap: wrap; gap: 24px; justify-content: center; width: 100%;">
                @foreach($pillars as $p)
                <div class="pillar-card-box"
                     style="flex: 1 1 300px; max-width: calc(33.333% - 16px); background: #ffffff; border: 1.5px solid #e8edf3; border-top: 4px solid #009688; border-radius: 20px; padding: 34px 28px; display: flex; flex-direction: column; position: relative; transition: all 0.35s ease; box-shadow: 0 6px 25px rgba(0,0,0,0.03);">
                    
                    {{-- Header Row: Icon & Pillar Badge --}}
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 22px;">
                        <div class="pillar-icon-wrap" style="width: 56px; height: 56px; border-radius: 16px; background: rgba(0,150,136,0.10); display: flex; align-items: center; justify-content: center; transition: all 0.35s ease;">
                            <i class="{{ $p['icon'] }}" style="font-size: 1.4rem; color: #009688; transition: all 0.35s ease;"></i>
                        </div>
                        <span style="font-size: 0.72rem; font-weight: 800; color: #009688; background: rgba(0,150,136,0.08); border: 1px solid rgba(0,150,136,0.25); padding: 4px 12px; border-radius: 20px; letter-spacing: 1px;">
                            {{ $p['num'] }}
                        </span>
                    </div>

                    {{-- Title --}}
                    <h4 style="font-size: 1.18rem; font-weight: 800; color: #112340; margin: 0 0 12px 0; line-height: 1.35;">
                        {{ $p['title'] }}
                    </h4>

                    {{-- Divider --}}
                    <div style="width: 36px; height: 3px; background: #009688; border-radius: 2px; margin-bottom: 16px;"></div>

                    {{-- Description --}}
                    <p style="font-size: 0.93rem; color: #475569; line-height: 1.7; margin: 0; font-weight: 400; flex-grow: 1;">
                        {{ $p['desc'] }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>

        <style>
            .pillar-card-box:hover {
                transform: translateY(-8px) !important;
                border-color: #009688 !important;
                box-shadow: 0 20px 45px rgba(0, 150, 136, 0.15) !important;
            }
            .pillar-card-box:hover .pillar-icon-wrap {
                background: #009688 !important;
            }
            .pillar-card-box:hover .pillar-icon-wrap i {
                color: #ffffff !important;
            }
            @media (max-width: 992px) {
                .pillar-card-box {
                    max-width: calc(50% - 16px) !important;
                }
            }
            @media (max-width: 600px) {
                .pillar-card-box {
                    max-width: 100% !important;
                }
            }
        </div>


        {{-- Horizontal divider --}}
        <div style="height: 1px; background: linear-gradient(to right, transparent, #e2e8f0 30%, #e2e8f0 70%, transparent); margin: 80px 0;"></div>

        {{-- ── EXPECTED OUTCOMES ── --}}
        <div>
            {{-- Centered Header --}}
            <div style="text-align: center; max-width: 750px; margin: 0 auto 48px;">
                <div style="font-size: 0.82rem; font-weight: 800; color: #009688; text-transform: uppercase; letter-spacing: 2.5px; margin-bottom: 8px; display: inline-flex; align-items: center; gap: 8px;">
                    <i class="fa-solid fa-chart-line" style="font-size: 0.9rem;"></i> EXPECTED OUTCOMES
                </div>
                <h3 style="font-size: clamp(2rem, 4vw, 2.6rem); font-weight: 900; color: #112340; margin: 0 0 12px; letter-spacing: -0.5px;">
                    Key Expected <span style="color: #009688;">Outcomes</span>
                </h3>
                <div style="width: 50px; height: 4px; background: #009688; margin: 0 auto 16px; border-radius: 2px;"></div>
                <p style="font-size: 1.02rem; color: #64748b; line-height: 1.7; margin: 0;">
                    Tangible impacts and key deliverables driving the Global One Health vision forward.
                </p>
            </div>

            {{-- 6 Outcome Cards --}}
            @php
            $outcomes = [
                ['icon' => 'fa-solid fa-users-gear',     'label' => 'Strengthened interdisciplinary collaborations'],
                ['icon' => 'fa-solid fa-globe',          'label' => 'International research partnerships'],
                ['icon' => 'fa-solid fa-book-bookmark',  'label' => 'High-quality scientific publications'],
                ['icon' => 'fa-solid fa-lightbulb',      'label' => 'Translation of research into innovation'],
                ['icon' => 'fa-solid fa-landmark',       'label' => 'Policy recommendations for One Health'],
                ['icon' => 'fa-solid fa-graduation-cap', 'label' => 'Capacity building for early-career researchers and students'],
            ];
            @endphp

            <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
                @foreach($outcomes as $o)
                <div class="outcome-v-card"
                     style="flex: 1; min-width: 170px; background: #ffffff; padding: 34px 20px; border-radius: 16px; border: 1px solid #f0f4f8; box-shadow: 0 10px 30px rgba(0,0,0,0.03); text-align: center; transition: all 0.35s ease; cursor: pointer; display: flex; flex-direction: column; align-items: center; justify-content: flex-start;">
                    
                    <div class="o-icon-circle" style="width: 64px; height: 64px; border-radius: 50%; background: rgba(0,150,136,0.12); display: flex; justify-content: center; align-items: center; margin-bottom: 20px; transition: all 0.35s ease;">
                        <i class="{{ $o['icon'] }} o-icon-fa" style="font-size: 1.5rem; color: #009688; transition: all 0.35s ease;"></i>
                    </div>

                    <h4 style="margin: 0; font-size: 0.95rem; color: #112340; line-height: 1.45; font-weight: 700;">
                        {{ $o['label'] }}
                    </h4>
                </div>
                @endforeach
            </div>
        </div>

        <style>
            .outcome-v-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 16px 40px rgba(0, 150, 136, 0.15) !important;
                border-color: rgba(0, 150, 136, 0.25) !important;
            }
            .outcome-v-card:hover .o-icon-circle {
                background: #009688 !important;
            }
            .outcome-v-card:hover .o-icon-fa {
                color: #ffffff !important;
            }
        </style>

        {{-- Horizontal divider --}}
        <div style="height: 1px; background: linear-gradient(to right, transparent, #e2e8f0 30%, #e2e8f0 70%, transparent); margin: 80px 0;"></div>

        {{-- ── OUR JOURNEY TO IMPACT ── --}}
        <div>
            {{-- Centered Header --}}
            <div style="text-align: center; max-width: 750px; margin: 0 auto 55px;">
                <div style="font-size: 0.82rem; font-weight: 800; color: #009688; text-transform: uppercase; letter-spacing: 2.5px; margin-bottom: 8px; display: inline-flex; align-items: center; gap: 8px;">
                    <i class="fa-solid fa-seedling" style="font-size: 0.9rem;"></i> OUR JOURNEY TO IMPACT
                </div>
                <h3 style="font-size: clamp(2rem, 4vw, 2.6rem); font-weight: 900; color: #112340; margin: 0 0 12px; letter-spacing: -0.5px;">
                    Our Journey to <span style="color: #009688;">Impact</span>
                </h3>
                <div style="width: 50px; height: 4px; background: #009688; margin: 0 auto 16px; border-radius: 2px;"></div>
                <p style="font-size: 1.02rem; color: #64748b; line-height: 1.7; margin: 0;">
                    A strategic 4-step pathway driving global collaboration into sustainable transformation.
                </p>
            </div>

            {{-- 4-Step Timeline Container --}}
            @php
            $journeySteps = [
                [
                    'num'   => '01',
                    'title' => 'CONNECT',
                    'icon'  => 'fa-solid fa-users',
                    'desc'  => 'Bringing global minds together for meaningful collaboration.'
                ],
                [
                    'num'   => '02',
                    'title' => 'SHARE',
                    'icon'  => 'fa-solid fa-share-nodes',
                    'desc'  => 'Sharing knowledge, innovations and best practices.'
                ],
                [
                    'num'   => '03',
                    'title' => 'INNOVATE',
                    'icon'  => 'fa-solid fa-lightbulb',
                    'desc'  => 'Creating solutions for a healthier planet and resilient communities.'
                ],
                [
                    'num'   => '04',
                    'title' => 'IMPACT',
                    'icon'  => 'fa-solid fa-earth-americas',
                    'desc'  => 'Driving sustainable change for generations to come.'
                ],
            ];
            @endphp

            <div style="position: relative;">

                {{-- Connector Line (Desktop) --}}
                <div class="timeline-line" style="position: absolute; top: 28px; left: 10%; right: 10%; height: 3px; background: linear-gradient(to right, #009688 0%, #009688 100%); z-index: 1; opacity: 0.25;"></div>

                {{-- Steps Grid --}}
                <div style="display: flex; flex-wrap: wrap; gap: 24px; position: relative; z-index: 2; justify-content: center;">
                    @foreach($journeySteps as $step)
                    <div class="journey-step-card"
                         style="flex: 1; min-width: 200px; background: #ffffff; padding: 34px 22px 28px; border-radius: 20px; border: 1px solid #f0f4f8; box-shadow: 0 10px 30px rgba(0,0,0,0.03); text-align: center; transition: all 0.35s ease; cursor: pointer; display: flex; flex-direction: column; align-items: center; justify-content: flex-start;">
                        
                        {{-- Step Number Badge --}}
                        <div class="step-num-badge"
                             style="width: 56px; height: 56px; border-radius: 50%; background: #009688; color: #ffffff; font-weight: 900; font-size: 1.25rem; display: flex; align-items: center; justify-content: center; margin-bottom: 22px; box-shadow: 0 8px 20px rgba(0, 150, 136, 0.3); transition: all 0.35s ease;">
                            {{ $step['num'] }}
                        </div>

                        {{-- Icon Circle --}}
                        <div class="step-icon-circle" style="width: 50px; height: 50px; border-radius: 14px; background: rgba(0,150,136,0.08); display: flex; justify-content: center; align-items: center; margin-bottom: 18px; transition: all 0.35s ease;">
                            <i class="{{ $step['icon'] }} step-icon-fa" style="font-size: 1.3rem; color: #009688; transition: all 0.35s ease;"></i>
                        </div>

                        {{-- Title --}}
                        <h4 style="margin: 0 0 10px 0; font-size: 1.1rem; color: #112340; font-weight: 900; letter-spacing: 1px; text-transform: uppercase;">
                            {{ $step['title'] }}
                        </h4>

                        {{-- Description --}}
                        <p style="margin: 0; font-size: 0.9rem; color: #64748b; line-height: 1.6; font-weight: 500;">
                            {{ $step['desc'] }}
                        </p>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>

        <style>
            .journey-step-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 16px 40px rgba(0, 150, 136, 0.15) !important;
                border-color: rgba(0, 150, 136, 0.3) !important;
            }
            .journey-step-card:hover .step-num-badge {
                transform: scale(1.1);
                box-shadow: 0 10px 25px rgba(0, 150, 136, 0.45) !important;
            }
            .journey-step-card:hover .step-icon-circle {
                background: #009688 !important;
            }
            .journey-step-card:hover .step-icon-fa {
                color: #ffffff !important;
            }
            @media (max-width: 768px) {
                .timeline-line {
                    display: none !important;
                }
            }
        </style>




    </div>
</section>


