@php
    $highlightsSettings = \App\Models\SiteSetting::where('group', 'highlights')->pluck('value', 'key')->toArray();
@endphp
<!-- Key Highlights Section -->
<section class="topics-section" style="background-color: #f8fbfa;">
    <div style="text-align: center; margin-bottom: 50px; display: flex; flex-direction: column; align-items: center; padding: 0 15px;">
        <h2 style="font-size: clamp(2.2rem, 5vw, 2.8rem); font-weight: 800; color: #0f172a; margin: 0 0 15px 0;">
            {{ $highlightsSettings['highlights_title_black'] ?? 'Key' }} <span style="color: #009688;">{{ $highlightsSettings['highlights_title_color'] ?? 'Highlights' }}</span>
        </h2>
        <div style="width: 160px; height: 5px; background: #84cc16; border-radius: 3px; margin-bottom: 20px;"></div>
        <p style="font-size: clamp(1.05rem, 3vw, 1.2rem); color: #475569; max-width: 800px; line-height: 1.6; margin: 0;">
            {{ $highlightsSettings['highlights_subtitle'] ?? 'Experience The Impact Of Our Summits' }}
        </p>
    </div>
    <div class="topics-grid">
        @php
            $highlights = \App\Models\Highlight::orderBy('sort_order')->get()->groupBy('column_number');
            $highlightIcon = $highlightsSettings['highlights_icon'] ?? 'fa-solid fa-circle-check';
        @endphp
        
        @for ($col = 1; $col <= 3; $col++)
            <div class="topics-card">
                <ul class="topic-list">
                    @if(isset($highlights[$col]))
                        @foreach($highlights[$col] as $topic)
                            <li>
                                @if(str_starts_with($highlightIcon, 'fa-'))
                                    <i class="{{ $highlightIcon }}" style="color: #009688;"></i>
                                @else
                                    <img src="{{ asset($highlightIcon) }}" alt="Icon" style="width: 18px; height: 18px; object-fit: contain; vertical-align: middle; margin-right: 8px;">
                                @endif
                                {{ $topic->title }}
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        @endfor
    </div>
</section>
