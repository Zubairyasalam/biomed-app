<!-- Programme Schedule Section -->
<section id="schedule" class="schedule-section" style="background: #ffffff; padding: 70px 0; font-family: 'Inter', system-ui, -apple-system, sans-serif;">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 20px;">
        
        <!-- Section Header -->
        <div style="text-align: center; margin-bottom: 45px;">
            <div style="font-weight: 700; color: #009688; text-transform: uppercase; letter-spacing: 2px; font-size: 0.9rem; margin-bottom: 8px;">
                Conference Agenda
            </div>
            <h2 style="margin: 0 0 14px 0; color: #0f172a; font-size: 2.2rem; font-weight: 800; letter-spacing: -0.5px; text-transform: uppercase;">
                Programme Schedule
            </h2>
            <div style="width: 60px; height: 3px; background: #009688; margin: 0 auto 16px auto; border-radius: 2px;"></div>
            <p style="max-width: 600px; margin: 0 auto; color: #64748b; font-size: 1.05rem; line-height: 1.6;">
                Complete schedule of sessions, guest lectures, and presentations for Day 1 and Day 2.
            </p>
        </div>

        <!-- Professional Tab Navigation -->
        <div style="display: flex; justify-content: center; gap: 10px; margin-bottom: 40px; border-bottom: 2px solid #e2e8f0; padding-bottom: 0;">
            <button onclick="switchScheduleTab('day1')" id="tab-btn-day1" class="schedule-nav-tab active" style="padding: 14px 30px; border: none; border-bottom: 3px solid #009688; background: transparent; color: #009688; font-weight: 700; font-size: 1.05rem; cursor: pointer; transition: all 0.2s ease; margin-bottom: -2px;">
                <i class="fa-solid fa-calendar-day" style="margin-right: 8px;"></i> DAY – I
            </button>
            <button onclick="switchScheduleTab('day2')" id="tab-btn-day2" class="schedule-nav-tab" style="padding: 14px 30px; border: none; border-bottom: 3px solid transparent; background: transparent; color: #64748b; font-weight: 600; font-size: 1.05rem; cursor: pointer; transition: all 0.2s ease; margin-bottom: -2px;">
                <i class="fa-solid fa-calendar-days" style="margin-right: 8px;"></i> DAY – II
            </button>
            <button onclick="switchScheduleTab('tracks')" id="tab-btn-tracks" class="schedule-nav-tab" style="padding: 14px 30px; border: none; border-bottom: 3px solid transparent; background: transparent; color: #64748b; font-weight: 600; font-size: 1.05rem; cursor: pointer; transition: all 0.2s ease; margin-bottom: -2px;">
                <i class="fa-solid fa-layer-group" style="margin-right: 8px;"></i> Track-wise Schedule
            </button>
        </div>

        <!-- DAY 1 TAB PANEL -->
        <div id="schedule-content-day1" class="schedule-tab-panel" style="display: block;">
            <div style="border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; background: #ffffff; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
                
                <!-- Table Header Bar -->
                <div style="background: #0f172a; padding: 18px 28px; color: #ffffff; display: flex; align-items: center; justify-content: space-between;">
                    <div style="font-weight: 700; font-size: 1.1rem; letter-spacing: 0.5px;">
                        <i class="fa-regular fa-clock" style="color: #009688; margin-right: 10px;"></i> DAY – I SCHEDULE
                    </div>
                    <span style="font-size: 0.85rem; color: #94a3b8; font-weight: 500;">9:30 AM – 6:00 PM</span>
                </div>

                <!-- Schedule List Rows -->
                <div style="display: flex; flex-direction: column;">
                    
                    <!-- Row 1 -->
                    <div class="sched-row" style="display: flex; padding: 20px 28px; border-bottom: 1px solid #f1f5f9; align-items: center; transition: background 0.2s;">
                        <div style="width: 240px; flex-shrink: 0; font-weight: 700; color: #009688; font-size: 1rem; display: flex; align-items: center; gap: 8px;">
                            <i class="fa-regular fa-clock" style="font-size: 0.9rem; color: #94a3b8;"></i> 9:30 AM – 11:30 AM
                        </div>
                        <div style="flex-grow: 1; color: #0f172a; font-weight: 600; font-size: 1.05rem;">
                            Inauguration
                        </div>
                    </div>

                    <!-- Row 2: Tea Break -->
                    <div class="sched-row" style="display: flex; padding: 18px 28px; border-bottom: 1px solid #f1f5f9; background: #f8fafc; align-items: center;">
                        <div style="width: 240px; flex-shrink: 0; font-weight: 700; color: #64748b; font-size: 0.98rem; display: flex; align-items: center; gap: 8px;">
                            <i class="fa-solid fa-mug-hot" style="font-size: 0.9rem; color: #009688;"></i> 11:30 AM – 11:45 AM
                        </div>
                        <div style="flex-grow: 1; color: #475569; font-weight: 600; font-size: 1rem; display: flex; align-items: center; gap: 10px;">
                            <span>Tea Break</span>
                            <span style="background: #e2e8f0; color: #475569; padding: 2px 10px; border-radius: 12px; font-size: 0.78rem; font-weight: 600;">Refreshment</span>
                        </div>
                    </div>

                    <!-- Row 3 -->
                    <div class="sched-row" style="display: flex; padding: 20px 28px; border-bottom: 1px solid #f1f5f9; align-items: center; transition: background 0.2s;">
                        <div style="width: 240px; flex-shrink: 0; font-weight: 700; color: #009688; font-size: 1rem; display: flex; align-items: center; gap: 8px;">
                            <i class="fa-regular fa-clock" style="font-size: 0.9rem; color: #94a3b8;"></i> 11:45 AM – 12:30 PM
                        </div>
                        <div style="flex-grow: 1; color: #0f172a; font-weight: 600; font-size: 1.05rem;">
                            Guest Lecture - I
                        </div>
                    </div>

                    <!-- Row 4 -->
                    <div class="sched-row" style="display: flex; padding: 20px 28px; border-bottom: 1px solid #f1f5f9; align-items: center; transition: background 0.2s;">
                        <div style="width: 240px; flex-shrink: 0; font-weight: 700; color: #009688; font-size: 1rem; display: flex; align-items: center; gap: 8px;">
                            <i class="fa-regular fa-clock" style="font-size: 0.9rem; color: #94a3b8;"></i> 12:30 PM – 1:15 PM
                        </div>
                        <div style="flex-grow: 1; color: #0f172a; font-weight: 600; font-size: 1.05rem;">
                            Guest Lecture - II
                        </div>
                    </div>

                    <!-- Row 5: Lunch Break -->
                    <div class="sched-row" style="display: flex; padding: 18px 28px; border-bottom: 1px solid #f1f5f9; background: #f8fafc; align-items: center;">
                        <div style="width: 240px; flex-shrink: 0; font-weight: 700; color: #64748b; font-size: 0.98rem; display: flex; align-items: center; gap: 8px;">
                            <i class="fa-solid fa-utensils" style="font-size: 0.9rem; color: #009688;"></i> 1:15 PM – 2:15 PM
                        </div>
                        <div style="flex-grow: 1; color: #475569; font-weight: 600; font-size: 1rem; display: flex; align-items: center; gap: 10px;">
                            <span>Lunch Break</span>
                            <span style="background: #e2e8f0; color: #475569; padding: 2px 10px; border-radius: 12px; font-size: 0.78rem; font-weight: 600;">Break</span>
                        </div>
                    </div>

                    <!-- Row 6 -->
                    <div class="sched-row" style="display: flex; padding: 20px 28px; border-bottom: 1px solid #f1f5f9; align-items: center; transition: background 0.2s;">
                        <div style="width: 240px; flex-shrink: 0; font-weight: 700; color: #009688; font-size: 1rem; display: flex; align-items: center; gap: 8px;">
                            <i class="fa-regular fa-clock" style="font-size: 0.9rem; color: #94a3b8;"></i> 2:15 PM – 3:00 PM
                        </div>
                        <div style="flex-grow: 1; color: #0f172a; font-weight: 600; font-size: 1.05rem;">
                            Guest Lecture - III
                        </div>
                    </div>

                    <!-- Row 7 -->
                    <div class="sched-row" style="display: flex; padding: 20px 28px; border-bottom: 1px solid #f1f5f9; align-items: center; transition: background 0.2s;">
                        <div style="width: 240px; flex-shrink: 0; font-weight: 700; color: #009688; font-size: 1rem; display: flex; align-items: center; gap: 8px;">
                            <i class="fa-regular fa-clock" style="font-size: 0.9rem; color: #94a3b8;"></i> 3:00 PM – 6:00 PM
                        </div>
                        <div style="flex-grow: 1; color: #0f172a; font-weight: 600; font-size: 1.05rem; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 10px;">
                            <span>Paper Presentation - Tracks I, II & III</span>
                            <span style="background: #e6f4f1; color: #009688; border: 1px solid #b2dfdb; padding: 3px 12px; border-radius: 12px; font-size: 0.8rem; font-weight: 600;">Parallel Session</span>
                        </div>
                    </div>

                    <!-- Row 8 -->
                    <div class="sched-row" style="display: flex; padding: 20px 28px; align-items: center; transition: background 0.2s;">
                        <div style="width: 240px; flex-shrink: 0; font-weight: 700; color: #009688; font-size: 1rem; display: flex; align-items: center; gap: 8px;">
                            <i class="fa-regular fa-clock" style="font-size: 0.9rem; color: #94a3b8;"></i> 3:00 PM – 6:00 PM
                        </div>
                        <div style="flex-grow: 1; color: #0f172a; font-weight: 600; font-size: 1.05rem; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 10px;">
                            <span>Poster Presentation - Tracks I, II & III</span>
                            <span style="background: #e6f4f1; color: #009688; border: 1px solid #b2dfdb; padding: 3px 12px; border-radius: 12px; font-size: 0.8rem; font-weight: 600;">Parallel Session</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- DAY 2 TAB PANEL -->
        <div id="schedule-content-day2" class="schedule-tab-panel" style="display: none;">
            <div style="border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; background: #ffffff; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
                
                <!-- Table Header Bar -->
                <div style="background: #0f172a; padding: 18px 28px; color: #ffffff; display: flex; align-items: center; justify-content: space-between;">
                    <div style="font-weight: 700; font-size: 1.1rem; letter-spacing: 0.5px;">
                        <i class="fa-regular fa-clock" style="color: #009688; margin-right: 10px;"></i> DAY – II SCHEDULE
                    </div>
                    <span style="font-size: 0.85rem; color: #94a3b8; font-weight: 500;">9:30 AM – 5:30 PM</span>
                </div>

                <!-- Schedule List Rows -->
                <div style="display: flex; flex-direction: column;">
                    
                    <!-- Row 1 -->
                    <div class="sched-row" style="display: flex; padding: 20px 28px; border-bottom: 1px solid #f1f5f9; align-items: center; transition: background 0.2s;">
                        <div style="width: 240px; flex-shrink: 0; font-weight: 700; color: #009688; font-size: 1rem; display: flex; align-items: center; gap: 8px;">
                            <i class="fa-regular fa-clock" style="font-size: 0.9rem; color: #94a3b8;"></i> 9:30 AM – 10:15 AM
                        </div>
                        <div style="flex-grow: 1; color: #0f172a; font-weight: 600; font-size: 1.05rem;">
                            Lecture - I - Track IV
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class="sched-row" style="display: flex; padding: 20px 28px; border-bottom: 1px solid #f1f5f9; align-items: center; transition: background 0.2s;">
                        <div style="width: 240px; flex-shrink: 0; font-weight: 700; color: #009688; font-size: 1rem; display: flex; align-items: center; gap: 8px;">
                            <i class="fa-regular fa-clock" style="font-size: 0.9rem; color: #94a3b8;"></i> 10:15 AM – 11:00 AM
                        </div>
                        <div style="flex-grow: 1; color: #0f172a; font-weight: 600; font-size: 1.05rem;">
                            Lecture - II - Track V
                        </div>
                    </div>

                    <!-- Row 3: Break -->
                    <div class="sched-row" style="display: flex; padding: 18px 28px; border-bottom: 1px solid #f1f5f9; background: #f8fafc; align-items: center;">
                        <div style="width: 240px; flex-shrink: 0; font-weight: 700; color: #64748b; font-size: 0.98rem; display: flex; align-items: center; gap: 8px;">
                            <i class="fa-solid fa-mug-hot" style="font-size: 0.9rem; color: #009688;"></i> 11:00 AM – 11:15 AM
                        </div>
                        <div style="flex-grow: 1; color: #475569; font-weight: 600; font-size: 1rem; display: flex; align-items: center; gap: 10px;">
                            <span>Break</span>
                            <span style="background: #e2e8f0; color: #475569; padding: 2px 10px; border-radius: 12px; font-size: 0.78rem; font-weight: 600;">Refreshment</span>
                        </div>
                    </div>

                    <!-- Row 4 -->
                    <div class="sched-row" style="display: flex; padding: 20px 28px; border-bottom: 1px solid #f1f5f9; align-items: center; transition: background 0.2s;">
                        <div style="width: 240px; flex-shrink: 0; font-weight: 700; color: #009688; font-size: 1rem; display: flex; align-items: center; gap: 8px;">
                            <i class="fa-regular fa-clock" style="font-size: 0.9rem; color: #94a3b8;"></i> 11:15 AM – 1:15 PM
                        </div>
                        <div style="flex-grow: 1; color: #0f172a; font-weight: 600; font-size: 1.05rem; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 10px;">
                            <span>Oral Presentations</span>
                            <span style="background: #e6f4f1; color: #009688; border: 1px solid #b2dfdb; padding: 3px 12px; border-radius: 12px; font-size: 0.8rem; font-weight: 600;">Parallel Session</span>
                        </div>
                    </div>

                    <!-- Row 5 -->
                    <div class="sched-row" style="display: flex; padding: 20px 28px; border-bottom: 1px solid #f1f5f9; align-items: center; transition: background 0.2s;">
                        <div style="width: 240px; flex-shrink: 0; font-weight: 700; color: #009688; font-size: 1rem; display: flex; align-items: center; gap: 8px;">
                            <i class="fa-regular fa-clock" style="font-size: 0.9rem; color: #94a3b8;"></i> 11:15 AM – 1:15 PM
                        </div>
                        <div style="flex-grow: 1; color: #0f172a; font-weight: 600; font-size: 1.05rem; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 10px;">
                            <span>Poster Presentations</span>
                            <span style="background: #e6f4f1; color: #009688; border: 1px solid #b2dfdb; padding: 3px 12px; border-radius: 12px; font-size: 0.8rem; font-weight: 600;">Parallel Session</span>
                        </div>
                    </div>

                    <!-- Row 6: Lunch Break -->
                    <div class="sched-row" style="display: flex; padding: 18px 28px; border-bottom: 1px solid #f1f5f9; background: #f8fafc; align-items: center;">
                        <div style="width: 240px; flex-shrink: 0; font-weight: 700; color: #64748b; font-size: 0.98rem; display: flex; align-items: center; gap: 8px;">
                            <i class="fa-solid fa-utensils" style="font-size: 0.9rem; color: #009688;"></i> 1:15 PM – 2:00 PM
                        </div>
                        <div style="flex-grow: 1; color: #475569; font-weight: 600; font-size: 1rem; display: flex; align-items: center; gap: 10px;">
                            <span>Lunch Break</span>
                            <span style="background: #e2e8f0; color: #475569; padding: 2px 10px; border-radius: 12px; font-size: 0.78rem; font-weight: 600;">Break</span>
                        </div>
                    </div>

                    <!-- Row 7 -->
                    <div class="sched-row" style="display: flex; padding: 20px 28px; border-bottom: 1px solid #f1f5f9; align-items: center; transition: background 0.2s;">
                        <div style="width: 240px; flex-shrink: 0; font-weight: 700; color: #009688; font-size: 1rem; display: flex; align-items: center; gap: 8px;">
                            <i class="fa-regular fa-clock" style="font-size: 0.9rem; color: #94a3b8;"></i> 2:00 PM – 3:30 PM
                        </div>
                        <div style="flex-grow: 1; color: #0f172a; font-weight: 600; font-size: 1.05rem; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 10px;">
                            <span>Industry-Academia Panel Discussion & Innovative Pitch</span>
                            <span style="background: #e6f4f1; color: #009688; border: 1px solid #b2dfdb; padding: 3px 12px; border-radius: 12px; font-size: 0.8rem; font-weight: 600;">Parallel Session</span>
                        </div>
                    </div>

                    <!-- Row 8 -->
                    <div class="sched-row" style="display: flex; padding: 20px 28px; align-items: center; transition: background 0.2s;">
                        <div style="width: 240px; flex-shrink: 0; font-weight: 700; color: #009688; font-size: 1rem; display: flex; align-items: center; gap: 8px;">
                            <i class="fa-regular fa-clock" style="font-size: 0.9rem; color: #94a3b8;"></i> 3:30 PM – 5:30 PM
                        </div>
                        <div style="flex-grow: 1; color: #0f172a; font-weight: 600; font-size: 1.05rem;">
                            Valedictory Ceremony
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- TRACK-WISE TAB PANEL -->
        <div id="schedule-content-tracks" class="schedule-tab-panel" style="display: none;">
            <div style="display: flex; flex-direction: column; gap: 24px;">
                
                <!-- Day 1 Tracks -->
                <div style="border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; background: #ffffff; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
                    <div style="background: #0f172a; padding: 18px 28px; color: #ffffff; display: flex; align-items: center; justify-content: space-between;">
                        <div style="font-weight: 700; font-size: 1.1rem; letter-spacing: 0.5px;">
                            Day I – Track-wise Presentation Schedule
                        </div>
                        <span style="font-size: 0.85rem; color: #94a3b8; font-weight: 500;">3:00 PM to 6:00 PM</span>
                    </div>

                    <div style="padding: 20px 28px;">
                        <table style="width: 100%; border-collapse: collapse; text-align: left;">
                            <thead>
                                <tr style="border-bottom: 2px solid #e2e8f0; color: #64748b; font-size: 0.85rem; text-transform: uppercase;">
                                    <th style="padding: 12px 0; font-weight: 700; width: 45%;">Presentation Type</th>
                                    <th style="padding: 12px 0; font-weight: 700; width: 55%;">Tracks</th>
                                </tr>
                            </thead>
                            <tbody style="color: #0f172a; font-size: 1rem;">
                                <tr style="border-bottom: 1px solid #f1f5f9;">
                                    <td style="padding: 16px 0; font-weight: 600;">Paper Presentation</td>
                                    <td style="padding: 16px 0;">
                                        <span style="background: #e6f4f1; color: #009688; border: 1px solid #b2dfdb; padding: 4px 12px; border-radius: 6px; font-weight: 600; font-size: 0.88rem; margin-right: 6px; display: inline-block;">Track I</span>
                                        <span style="background: #e6f4f1; color: #009688; border: 1px solid #b2dfdb; padding: 4px 12px; border-radius: 6px; font-weight: 600; font-size: 0.88rem; margin-right: 6px; display: inline-block;">Track II</span>
                                        <span style="background: #e6f4f1; color: #009688; border: 1px solid #b2dfdb; padding: 4px 12px; border-radius: 6px; font-weight: 600; font-size: 0.88rem; display: inline-block;">Track III</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 16px 0; font-weight: 600;">Poster Presentation</td>
                                    <td style="padding: 16px 0;">
                                        <span style="background: #e6f4f1; color: #009688; border: 1px solid #b2dfdb; padding: 4px 12px; border-radius: 6px; font-weight: 600; font-size: 0.88rem; margin-right: 6px; display: inline-block;">Track I</span>
                                        <span style="background: #e6f4f1; color: #009688; border: 1px solid #b2dfdb; padding: 4px 12px; border-radius: 6px; font-weight: 600; font-size: 0.88rem; margin-right: 6px; display: inline-block;">Track II</span>
                                        <span style="background: #e6f4f1; color: #009688; border: 1px solid #b2dfdb; padding: 4px 12px; border-radius: 6px; font-weight: 600; font-size: 0.88rem; display: inline-block;">Track III</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Day 2 Tracks -->
                <div style="border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; background: #ffffff; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
                    <div style="background: #0f172a; padding: 18px 28px; color: #ffffff; display: flex; align-items: center; justify-content: space-between;">
                        <div style="font-weight: 700; font-size: 1.1rem; letter-spacing: 0.5px;">
                            Day II – Track-wise Presentation Schedule
                        </div>
                        <span style="font-size: 0.85rem; color: #94a3b8; font-weight: 500;">11:15 AM to 1:15 PM</span>
                    </div>

                    <div style="padding: 20px 28px;">
                        <table style="width: 100%; border-collapse: collapse; text-align: left;">
                            <thead>
                                <tr style="border-bottom: 2px solid #e2e8f0; color: #64748b; font-size: 0.85rem; text-transform: uppercase;">
                                    <th style="padding: 12px 0; font-weight: 700; width: 45%;">Presentation Type</th>
                                    <th style="padding: 12px 0; font-weight: 700; width: 55%;">Session</th>
                                </tr>
                            </thead>
                            <tbody style="color: #0f172a; font-size: 1rem;">
                                <tr style="border-bottom: 1px solid #f1f5f9;">
                                    <td style="padding: 16px 0; font-weight: 600;">Oral Presentation</td>
                                    <td style="padding: 16px 0;">
                                        <span style="background: #e6f4f1; color: #009688; border: 1px solid #b2dfdb; padding: 4px 12px; border-radius: 6px; font-weight: 600; font-size: 0.88rem; display: inline-block;">Parallel Session</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 16px 0; font-weight: 600;">Poster Presentation</td>
                                    <td style="padding: 16px 0;">
                                        <span style="background: #e6f4f1; color: #009688; border: 1px solid #b2dfdb; padding: 4px 12px; border-radius: 6px; font-weight: 600; font-size: 0.88rem; display: inline-block;">Parallel Session</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<style>
    .sched-row:hover {
        background-color: #f8fafc !important;
    }
    @media (max-width: 768px) {
        .sched-row {
            flex-direction: column !important;
            align-items: flex-start !important;
            gap: 8px !important;
        }
        .sched-row > div:first-child {
            width: 100% !important;
        }
    }
</style>

<script>
    function switchScheduleTab(tabId) {
        // Hide all tab panels
        document.querySelectorAll('.schedule-tab-panel').forEach(function(panel) {
            panel.style.display = 'none';
        });

        // Reset tab button styles
        document.querySelectorAll('.schedule-nav-tab').forEach(function(btn) {
            btn.style.color = '#64748b';
            btn.style.borderBottom = '3px solid transparent';
            btn.style.fontWeight = '600';
            btn.classList.remove('active');
        });

        // Show selected panel
        var selectedPanel = document.getElementById('schedule-content-' + tabId);
        if (selectedPanel) {
            selectedPanel.style.display = 'block';
        }

        // Highlight selected tab button
        var selectedBtn = document.getElementById('tab-btn-' + tabId);
        if (selectedBtn) {
            selectedBtn.style.color = '#009688';
            selectedBtn.style.borderBottom = '3px solid #009688';
            selectedBtn.style.fontWeight = '700';
            selectedBtn.classList.add('active');
        }
    }
</script>
