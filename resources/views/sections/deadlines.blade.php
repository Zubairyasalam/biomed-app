<!-- Important Deadlines Section -->
<section class="deadlines-section">
    <div class="deadlines-bg-wrapper">
        <div class="section-header-center">
            <h2 class="section-title">Important <span>Deadlines</span></h2>
            <div class="header-line"></div>
            <p class="highlights-subtitle">Key Dates To Mark In Your Calendar</p>
        </div>

        <div class="deadlines-container">

            <!-- Left: Illustration + stats -->
            <div class="deadlines-left">
                <div class="dl-illustration">
                    <img src="https://images.unsplash.com/photo-1506784983877-45594efa4cbe?q=80&w=600&h=500&fit=crop&crop=center"
                         alt="Calendar Schedule">
                </div>
                <div class="dl-stats-row">
                    <div class="dl-stat">
                        <span class="dl-stat-num">3</span>
                        <span class="dl-stat-label">Key Dates</span>
                    </div>
                    <div class="dl-stat">
                        <span class="dl-stat-num">3</span>
                        <span class="dl-stat-label">Days Conference</span>
                    </div>
                    <div class="dl-stat">
                        <span class="dl-stat-num">2027</span>
                        <span class="dl-stat-label">Event Year</span>
                    </div>
                </div>
            </div>

            <!-- Right: Cards -->
            <div class="deadlines-list">

                @if(isset($deadlines) && count($deadlines) > 0)
                    @foreach($deadlines as $index => $dl)
                        <div class="dl-card dl-card-{{ ($index % 3) + 1 }}">
                            <div class="dl-card-num">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</div>
                            <div class="dl-icon-circle">
                                @if($index % 3 == 0)
                                    <i class="fa-solid fa-users"></i>
                                @elseif($index % 3 == 1)
                                    <i class="fa-solid fa-file-pen"></i>
                                @else
                                    <i class="fa-solid fa-bolt"></i>
                                @endif
                            </div>
                            <div class="dl-text">
                                <div class="dl-date">{{ \Carbon\Carbon::parse($dl->deadline_date)->format('M d, Y') }}</div>
                                <div class="dl-label">{{ $dl->title }}</div>
                            </div>
                            <div class="dl-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                        </div>
                    @endforeach
                @else
                    <p style="text-align: center; color: #64748b; padding: 30px;">More dates will be announced soon.</p>
                @endif

            </div>
        </div>
    </div>
</section>
