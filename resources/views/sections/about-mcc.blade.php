<!-- About MCC Section -->
<section class="about-organizers-section" style="background-color: #f8fbfa; padding: 60px 0 30px 0;">
    <div class="container" style="max-width: 90%; margin: 0 auto;">
        
        <!-- Header -->
        <div style="text-align: center; margin-bottom: 40px;">
            <span class="section-subtitle" style="font-weight: bold; color: #009688; text-transform: uppercase; letter-spacing: 1.5px; font-size: 0.9rem;">About The Organizers</span>
            <h2 class="section-title" style="margin-top: 10px; font-size: 2.2rem; color: #111; font-weight: 800;">Host Institutions & Departments</h2>
            <div style="width: 60px; height: 4px; background: #009688; margin: 15px auto 0; border-radius: 2px;"></div>
        </div>

        <!-- Dashboard Wrapper -->
        <div class="organizer-dashboard" style="display: flex; gap: 30px; background: #ffffff; border-radius: 24px; box-shadow: 0 15px 50px rgba(0,0,0,0.04); overflow: hidden; border: 1px solid #eaeaea; min-height: 480px;">
            
            <!-- Sidebar Navigation -->
            <div class="dashboard-sidebar" style="width: 320px; background: #fcfdfe; border-right: 1px solid #f0f0f0; padding: 30px 20px; display: flex; flex-direction: column; gap: 15px; flex-shrink: 0;">
                <div style="font-size: 0.8rem; font-weight: 700; color: #888; text-transform: uppercase; letter-spacing: 1px; padding-left: 10px; margin-bottom: 5px;">Institutions</div>
                
                <button class="nav-tab-btn active" onclick="switchOrganizerTab(event, 'tab-mcc')" style="display: flex; align-items: center; gap: 12px; padding: 14px 18px; border: none; background: none; border-radius: 12px; cursor: pointer; text-align: left; transition: all 0.3s ease; width: 100%;">
                    <div class="tab-icon" style="width: 8px; height: 8px; border-radius: 50%; background: #ffffff; transition: all 0.3s ease;"></div>
                    <div>
                        <div style="font-weight: 700; font-size: 0.95rem; color: #333;" class="tab-title-text">Madras Christian College</div>
                        <div style="font-size: 0.75rem; color: #777; margin-top: 2px;">MCC • Chennai</div>
                    </div>
                </button>
                


                <div style="font-size: 0.8rem; font-weight: 700; color: #888; text-transform: uppercase; letter-spacing: 1px; padding-left: 10px; margin-top: 20px; margin-bottom: 5px;">Departments (MCC)</div>

                <button class="nav-tab-btn" onclick="switchOrganizerTab(event, 'tab-microbiology')" style="display: flex; align-items: center; gap: 12px; padding: 14px 18px; border: none; background: none; border-radius: 12px; cursor: pointer; text-align: left; transition: all 0.3s ease; width: 100%;">
                    <div class="tab-icon" style="width: 8px; height: 8px; border-radius: 50%; background: #ccc; transition: all 0.3s ease;"></div>
                    <div>
                        <div style="font-weight: 700; font-size: 0.95rem; color: #555;" class="tab-title-text">Dept. of Microbiology</div>
                        <div style="font-size: 0.75rem; color: #777; margin-top: 2px;">Est. 2002 • Research Unit</div>
                    </div>
                </button>

                <button class="nav-tab-btn" onclick="switchOrganizerTab(event, 'tab-chemistry')" style="display: flex; align-items: center; gap: 12px; padding: 14px 18px; border: none; background: none; border-radius: 12px; cursor: pointer; text-align: left; transition: all 0.3s ease; width: 100%;">
                    <div class="tab-icon" style="width: 8px; height: 8px; border-radius: 50%; background: #ccc; transition: all 0.3s ease;"></div>
                    <div>
                        <div style="font-weight: 700; font-size: 0.95rem; color: #555;" class="tab-title-text">Dept. of Chemistry (SFS)</div>
                        <div style="font-size: 0.75rem; color: #777; margin-top: 2px;">Est. 2003 • M.Sc. Program</div>
                    </div>
                </button>
            </div>

            <!-- Content Area -->
            <div class="dashboard-content" style="flex-grow: 1; padding: 40px; display: flex; flex-direction: column; justify-content: space-between; background: #ffffff;">
                
                <!-- Tab Panels -->
                <div>
                    <!-- MCC Panel -->
                    <div id="tab-mcc" class="tab-panel active" style="display: block;">
                        <span style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1.5px; color: #009688; font-weight: 700;">Madras Christian College</span>
                        <h3 style="font-size: 1.8rem; margin: 8px 0 20px; color: #112340; font-weight: 800;">A Legacy of Academic Excellence</h3>
                        
                        <div style="display: flex; gap: 30px; flex-wrap: wrap;">
                            <!-- Left Paragraphs -->
                            <div style="flex: 1.2; min-width: 280px;">
                                <p style="color: #475569; line-height: 1.75; font-size: 0.98rem; margin-bottom: 18px;">
                                    Madras Christian College (MCC), established in 1837, is one of India's premier institutions of higher learning with a rich heritage of academic excellence, character formation and nation building.
                                </p>
                                <p style="color: #475569; line-height: 1.75; font-size: 0.98rem; margin-bottom: 18px;">
                                    Affiliated to the University of Madras and accredited with 'A+' Grade by NAAC, MCC offers a vibrant environment for holistic education across disciplines.
                                </p>
                                <p style="color: #475569; line-height: 1.75; font-size: 0.98rem; margin-bottom: 0;">
                                    The Department of Microbiology at MCC has a strong legacy of quality teaching, innovative research and contributions to the advancement of microbial sciences with a focus on societal impact and global relevance.
                                </p>
                            </div>

                            <!-- Right Key Highlights List (From Image 2) -->
                            <div style="flex: 1; min-width: 280px; display: flex; flex-direction: column; gap: 14px;">
                                @php
                                $mccFeatures = [
                                    ['title' => 'ESTABLISHED IN 1837',      'sub' => 'A legacy of 185+ years of academic excellence',     'icon' => 'fa-solid fa-landmark'],
                                    ['title' => "'A+' GRADE BY NAAC",       'sub' => 'Recognized for quality and institutional excellence','icon' => 'fa-solid fa-award'],
                                    ['title' => 'AUTONOMOUS INSTITUTION',   'sub' => 'Affiliated to the University of Madras',            'icon' => 'fa-solid fa-graduation-cap'],
                                    ['title' => 'HOLISTIC EDUCATION',       'sub' => 'Nurturing intellect, character and leadership',     'icon' => 'fa-solid fa-users'],
                                    ['title' => 'RESEARCH & INNOVATION',    'sub' => 'Encouraging impactful research for a better world', 'icon' => 'fa-solid fa-microscope'],
                                ];
                                @endphp

                                @foreach($mccFeatures as $feat)
                                <div style="display: flex; align-items: center; gap: 14px; padding: 12px 16px; border-radius: 12px; background: #f8fbfa; border: 1px solid #e8edf3; transition: all 0.25s;"
                                     onmouseover="this.style.borderColor='#009688'; this.style.background='#f0faf9';"
                                     onmouseout="this.style.borderColor='#e8edf3'; this.style.background='#f8fbfa';">
                                    <div style="width: 40px; height: 40px; border-radius: 10px; background: rgba(0,150,136,0.12); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                        <i class="{{ $feat['icon'] }}" style="font-size: 1.1rem; color: #009688;"></i>
                                    </div>
                                    <div>
                                        <div style="font-size: 0.85rem; font-weight: 800; color: #112340; letter-spacing: 0.5px;">{{ $feat['title'] }}</div>
                                        <div style="font-size: 0.78rem; color: #64748b; margin-top: 2px;">{{ $feat['sub'] }}</div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>




                    <!-- Microbiology Panel -->
                    <div id="tab-microbiology" class="tab-panel" style="display: none;">
                        <span style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; color: #009688; font-weight: 700;">Madras Christian College</span>
                        <h3 style="font-size: 1.8rem; margin: 8px 0 20px; color: #222; font-weight: 800;">Department of Microbiology</h3>
                        <p style="color: #555; line-height: 1.7; font-size: 0.98rem; text-align: justify; margin-bottom: 30px;">
                            {!! nl2br(e($settings['about_dept'] ?? '')) !!}
                        </p>
                    </div>

                    <!-- Chemistry Panel -->
                    <div id="tab-chemistry" class="tab-panel" style="display: none;">
                        <span style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; color: #009688; font-weight: 700;">Madras Christian College</span>
                        <h3 style="font-size: 1.8rem; margin: 8px 0 20px; color: #222; font-weight: 800;">Department of Chemistry (SFS)</h3>
                        <p style="color: #555; line-height: 1.7; font-size: 0.98rem; text-align: justify; margin-bottom: 30px;">
                            {!! nl2br(e($settings['about_chemistry'] ?? '')) !!}
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Scoped Styles & Tab Script -->
<style>
    .nav-tab-btn:hover {
        background-color: #f1f8f6 !important;
    }
    .nav-tab-btn.active {
        background-color: #009688 !important;
        box-shadow: 0 4px 15px rgba(0, 150, 136, 0.15);
    }
    .nav-tab-btn.active .tab-title-text {
        color: #ffffff !important;
    }
    .nav-tab-btn.active div div {
        color: #e0f2f1 !important;
    }
    .nav-tab-btn.active .tab-icon {
        background: #ffffff !important;
        transform: scale(1.3);
    }
    
    @media (max-width: 991px) {
        .organizer-dashboard {
            flex-direction: column !important;
            min-height: auto !important;
        }
        .dashboard-sidebar {
            width: 100% !important;
            border-right: none !important;
            border-bottom: 1px solid #f0f0f0 !important;
            flex-direction: row !important;
            overflow-x: auto !important;
            white-space: nowrap !important;
            padding: 20px !important;
            gap: 10px !important;
        }
        .dashboard-sidebar > div {
            display: none !important; /* Hide headings on mobile scrollbar */
        }
        .nav-tab-btn {
            width: auto !important;
            flex-shrink: 0 !important;
            padding: 10px 16px !important;
        }
        .dashboard-content {
            padding: 30px 20px !important;
        }
    }
</style>

<script>
    function switchOrganizerTab(event, tabId) {
        // Prevent default action
        event.preventDefault();
        
        // Deactivate all buttons
        const buttons = document.querySelectorAll('.nav-tab-btn');
        buttons.forEach(btn => {
            btn.classList.remove('active');
            // reset icon color
            const icon = btn.querySelector('.tab-icon');
            if (icon) icon.style.background = '#ccc';
        });
        
        // Deactivate all panels
        const panels = document.querySelectorAll('.tab-panel');
        panels.forEach(panel => {
            panel.style.display = 'none';
        });
        
        // Activate current button
        const currentBtn = event.currentTarget;
        currentBtn.classList.add('active');
        const currentIcon = currentBtn.querySelector('.tab-icon');
        if (currentIcon) currentIcon.style.background = '#ffffff';
        
        // Activate corresponding panel
        const targetPanel = document.getElementById(tabId);
        if (targetPanel) {
            targetPanel.style.display = 'block';
        }
    }
</script>
