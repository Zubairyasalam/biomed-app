<!-- Keynote Visionaries Section -->
<section class="keynote-section">
    <div style="text-align: center; margin-bottom: 40px; display: flex; flex-direction: column; align-items: center; padding: 0 15px;">
        <h2 style="font-size: clamp(2.2rem, 5vw, 2.8rem); font-weight: 800; color: #0f172a; margin: 0 0 15px 0;">
            Keynote <span style="color: #009688;">Visionaries</span>
        </h2>
        <div style="width: 200px; height: 5px; background: #84cc16; border-radius: 3px; margin-bottom: 10px;"></div>
        <p style="font-size: clamp(1.05rem, 3vw, 1.2rem); color: #475569; max-width: 800px; line-height: 1.6; margin: 0;">
            Launching Biomed Summit With Visionary Thoughts
        </p>
    </div>

    <div class="keynote-grid">
        @php
            $keynoteSpeakers = \App\Models\Speaker::where('type', 'keynote')->orderBy('sort_order')->get();
        @endphp

        @foreach($keynoteSpeakers as $speaker)
            <div class="speaker-card-new">
                <div class="speaker-photo-wrap">
                    <img src="{{ asset($speaker->image_path) }}" alt="{{ $speaker->name }}">
                </div>
                <div class="speaker-body">
                    <h4>{{ $speaker->name }}</h4>
                    @if($speaker->h_index)
                        <p class="speaker-hindex">H-Index: {{ $speaker->h_index }}</p>
                    @endif
                    <p class="speaker-uni">{{ $speaker->university }}</p>
                    <p class="speaker-country-text">{{ $speaker->country }}</p>
                    @if($speaker->title)
                        <div class="speaker-title-block">
                            <span class="speaker-title-label">Presentation Title</span>
                            <p class="speaker-title-content">{{ $speaker->title }}</p>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>

    <div class="text-center mt-30">
        <a href="{{ route('keynote-speakers') }}" class="btn btn-navy">View More</a>
    </div>
</section>
