@extends('layouts.app')

@section('content')

@include('sections.topbar')
@include('sections.navbar')

    @php
        $bannerTitle = \App\Models\SiteSetting::where('group', 'page_banners')->where('key', 'banner_awards_title')->value('value') ?? 'AWARDS';
        $bannerImage = \App\Models\SiteSetting::where('group', 'page_banners')->where('key', 'banner_awards_image')->value('value');
        $awardsIntro = \App\Models\SiteSetting::where('group', 'awards_page')->where('key', 'awards_intro')->value('value');
        $awards = \App\Models\Award::orderBy('sort_order')->get();
    @endphp
    <!-- Page Banner -->
    <div class="page-banner" style="{{ $bannerImage ? "background-image: linear-gradient(rgba(10, 25, 47, 0.7), rgba(10, 25, 47, 0.8)), url('" . asset($bannerImage) . "');" : '' }}">
        <div class="page-banner-content">
            <h1 style="text-transform: uppercase;">{{ $bannerTitle }}</h1>
        </div>
    </div>

<style>
    .awards-container {
        padding: 60px 20px;
        max-width: 1100px;
        margin: 0 auto;
        font-family: Arial, Helvetica, sans-serif;
        color: #444;
        background: #fff;
    }

    .awards-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .awards-header h2 {
        font-size: 2.2rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 15px;
    }

    .awards-header p {
        font-size: 1.15rem;
        color: #555;
        margin-top: 20px;
    }

    .awards-intro {
        font-size: 0.95rem;
        line-height: 1.7;
        margin-bottom: 50px;
        text-align: justify;
    }

    .award-section {
        margin-bottom: 60px;
    }

    .award-title-center {
        text-align: center;
        font-size: 1.8rem;
        font-weight: 700;
        color: #111;
        margin-bottom: 30px;
    }

    .award-subtitle {
        font-size: 1.25rem;
        font-weight: 700;
        color: #222;
        margin-bottom: 15px;
        margin-top: 20px;
    }

    .award-list {
        list-style: none;
        padding-left: 10px;
        margin-bottom: 25px;
    }

    .award-list li {
        margin-bottom: 8px;
        font-size: 0.95rem;
        line-height: 1.5;
        display: flex;
        align-items: flex-start;
        gap: 8px;
    }
    
    .award-list.bullets li::before {
        content: "•";
        font-weight: bold;
        font-size: 1.2rem;
        line-height: 1;
        margin-top: 2px;
    }

    .award-list.checks li::before {
        content: "\2713"; /* Checkmark */
        font-weight: bold;
        color: #333;
    }

    .award-divider {
        height: 1px;
        background: #eee;
        margin: 25px 0;
    }
</style>

<section class="awards-container">
    <div class="awards-header">
        <h2><i class="fa-solid fa-award" style="color: #333; margin-right: 10px;"></i> Biomed Summit – INNOVEX Awards</h2>
        <div style="width: 100px; height: 2px; background: #0000FF; margin: 0 auto;"></div>
        <p>A Worldwide Recognition Platform For Today's Leading Innovators And Experts.</p>
    </div>

    <div class="awards-intro">
        {!! nl2br(e($awardsIntro)) !!}
    </div>

    <!-- Visual Cards -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 40px; justify-content: center; max-width: 1000px; margin: 0 auto 60px auto;">
        
        @foreach($awards as $award)
        <div style="background: linear-gradient(145deg, #f8fbfa, #ffffff); padding: 50px 40px; border-radius: 20px; display: flex; flex-direction: column; align-items: center; text-align: center; box-shadow: 0 15px 40px rgba(0,0,0,0.05); border: 1px solid rgba(0, 150, 136, 0.1); position: relative; overflow: hidden;">
            <!-- Ribbon accent -->
            <div style="position: absolute; top: 0; right: 40px; width: 40px; height: 60px; background-color: #009688; clip-path: polygon(100% 0, 100% 100%, 50% 80%, 0 100%, 0 0);"></div>
            
            <div style="width: 100px; height: 100px; border-radius: 50%; background: linear-gradient(135deg, rgba(255, 215, 0, 0.2), rgba(255, 215, 0, 0.05)); display: flex; justify-content: center; align-items: center; margin-bottom: 30px;">
                <i class="{{ $award->icon ?? 'fa-solid fa-trophy' }}" style="font-size: 3.5rem; color: {{ $award->icon_color ?? '#fbc02d' }};"></i>
            </div>
            <h3 style="margin: 0 0 15px 0; color: #333; font-size: 1.8rem; font-weight: 800;">{{ $award->name }}</h3>
            <p style="margin: 0; color: #666; font-size: 1.15rem; line-height: 1.6;">{{ $award->short_description }}</p>
            <a href="#award-{{ $award->id }}" style="margin-top: 25px; color: #009688; font-weight: bold; text-decoration: none; display: flex; align-items: center; gap: 5px;">View Guidelines <i class="fa-solid fa-arrow-down"></i></a>
        </div>
        @endforeach

    </div>

    @foreach($awards as $award)
    <div class="award-section" id="award-{{ $award->id }}" style="scroll-margin-top: 100px;">
        <h3 class="award-title-center">{{ $award->name }}</h3>
        
        @if($award->benefits)
            <h4 class="award-subtitle">Award Benefits</h4>
            <ul class="award-list bullets">
                @foreach(array_filter(array_map('trim', explode("\n", $award->benefits))) as $item)
                    <li><span>{!! $item !!}</span></li>
                @endforeach
            </ul>
            <div class="award-divider"></div>
        @endif

        @if($award->eligibility)
            <h4 class="award-subtitle">Eligibility</h4>
            <ul class="award-list checks">
                @foreach(array_filter(array_map('trim', explode("\n", $award->eligibility))) as $item)
                    <li><span>{!! $item !!}</span></li>
                @endforeach
            </ul>
            <div class="award-divider"></div>
        @endif

        @if($award->guidelines)
            <h4 class="award-subtitle">Guidelines</h4>
            <ul class="award-list checks">
                @foreach(array_filter(array_map('trim', explode("\n", $award->guidelines))) as $item)
                    <li><span>{!! $item !!}</span></li>
                @endforeach
            </ul>
        @endif
    </div>
    @endforeach

</section>

@include('sections.footer')

@endsection
