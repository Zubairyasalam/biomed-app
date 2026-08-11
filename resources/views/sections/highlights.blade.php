@php
    $highlightsSettings = \App\Models\SiteSetting::where('group', 'highlights')->pluck('value', 'key')->toArray();
    $dbHighlights = \App\Models\Highlight::orderBy('sort_order')->get()->groupBy('column_number');

    // Default 13 highlights from Image 2 if DB is empty
    $defaultCol1 = [
        ['title' => 'International Keynote Addresses', 'icon' => 'fa-solid fa-earth-americas'],
        ['title' => 'Plenary Sessions',                 'icon' => 'fa-solid fa-users-viewfinder'],
        ['title' => 'Invited Talks',                    'icon' => 'fa-solid fa-comments'],
        ['title' => 'Parallel Scientific Sessions',    'icon' => 'fa-solid fa-chalkboard-user'],
        ['title' => 'Industry Exhibition',              'icon' => 'fa-solid fa-store'],
    ];

    $defaultCol2 = [
        ['title' => 'Innovation & Start-up Showcase',   'icon' => 'fa-solid fa-lightbulb'],
        ['title' => 'Student Research Competition',     'icon' => 'fa-solid fa-trophy'],
        ['title' => 'Hackathon',                        'icon' => 'fa-solid fa-rocket'],
        ['title' => 'Innovation Pitch Competition',     'icon' => 'fa-solid fa-bullseye'],
        ['title' => 'Policy Roundtable Discussions',    'icon' => 'fa-solid fa-people-group'],
    ];

    $defaultCol3 = [
        ['title' => 'Networking Forum',                'icon' => 'fa-solid fa-network-wired'],
        ['title' => 'Young Researchers Forum',         'icon' => 'fa-solid fa-user-graduate'],
        ['title' => 'Women in Science Forum',          'icon' => 'fa-solid fa-venus-mars'],
    ];

    $col1 = (isset($dbHighlights[1]) && count($dbHighlights[1]) > 0) ? $dbHighlights[1]->map(fn($item) => ['title' => $item->title, 'icon' => 'fa-solid fa-circle-check'])->toArray() : $defaultCol1;
    $col2 = (isset($dbHighlights[2]) && count($dbHighlights[2]) > 0) ? $dbHighlights[2]->map(fn($item) => ['title' => $item->title, 'icon' => 'fa-solid fa-circle-check'])->toArray() : $defaultCol2;
    $col3 = (isset($dbHighlights[3]) && count($dbHighlights[3]) > 0) ? $dbHighlights[3]->map(fn($item) => ['title' => $item->title, 'icon' => 'fa-solid fa-circle-check'])->toArray() : $defaultCol3;

    $allCols = [1 => $col1, 2 => $col2, 3 => $col3];
@endphp

<!-- Key Highlights Section -->
<section class="highlights-section" style="background-color: #ffffff; padding: 70px 0 80px 0;">
    <div style="max-width: 90%; margin: 0 auto; padding: 0 20px;">

        <!-- Header -->
        <div style="text-align: center; margin-bottom: 50px;">
            <div style="font-size: 0.82rem; font-weight: 800; color: #009688; text-transform: uppercase; letter-spacing: 2.5px; margin-bottom: 8px;">
                EVENT PROGRAM
            </div>
            <h2 style="font-size: clamp(2.2rem, 4.5vw, 3rem); font-weight: 900; color: #112340; margin: 0 0 12px 0; letter-spacing: -0.6px;">
                Conference <span style="color: #009688;">Highlights</span>
            </h2>
            <div style="width: 50px; height: 4px; background: #009688; margin: 0 auto 16px; border-radius: 2px;"></div>
            <p style="font-size: 1.05rem; color: #64748b; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                {{ $highlightsSettings['highlights_subtitle'] ?? 'Key features and interactive forums scheduled for the Global One Health Confluence 2026' }}
            </p>
        </div>

        <!-- 3 Columns Layout -->
        <div style="display: flex; flex-wrap: wrap; gap: 24px; justify-content: center;">
            @foreach($allCols as $colIndex => $colItems)
            <div style="flex: 1; min-width: 280px; background: #fafcff; border: 1px solid #f0f4f8; border-radius: 20px; padding: 28px 24px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); display: flex; flex-direction: column; gap: 14px; transition: all 0.35s ease;"
                 onmouseover="this.style.borderColor='rgba(0,150,136,0.3)'; this.style.boxShadow='0 16px 40px rgba(0,150,136,0.1)';"
                 onmouseout="this.style.borderColor='#f0f4f8'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.03)';">

                @foreach($colItems as $item)
                <div style="display: flex; align-items: center; gap: 14px; padding: 12px 14px; border-radius: 12px; background: #ffffff; border: 1px solid #e8edf3; transition: all 0.25s ease;"
                     onmouseover="this.style.borderColor='#009688'; this.style.background='#f0faf9'; this.style.transform='translateX(4px)';"
                     onmouseout="this.style.borderColor='#e8edf3'; this.style.background='#ffffff'; this.style.transform='none';">
                    
                    <div style="width: 38px; height: 38px; border-radius: 50%; background: rgba(0,150,136,0.12); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <i class="{{ $item['icon'] }}" style="font-size: 1rem; color: #009688;"></i>
                    </div>

                    <span style="font-size: 0.95rem; font-weight: 700; color: #112340; line-height: 1.35;">
                        {{ $item['title'] }}
                    </span>
                </div>
                @endforeach

            </div>
            @endforeach
        </div>

    </div>
</section>
