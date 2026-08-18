@extends('layouts.app')

@section('content')

@include('sections.topbar')
@include('sections.navbar')

    @php
        $bannerTitle = \App\Models\SiteSetting::where('group', 'page_banners')->where('key', 'banner_awards_title')->value('value') ?? 'CONFERENCE AWARDS';
        $bannerImage = \App\Models\SiteSetting::where('group', 'page_banners')->where('key', 'banner_awards_image')->value('value');
        $awardsIntro = \App\Models\SiteSetting::where('group', 'awards_page')->where('key', 'awards_intro')->value('value');
        $awards = \App\Models\Award::orderBy('sort_order')->get();
        $prizes = [
            'Best Scholar Award' => '₹10,000',
            'Best Researcher Award' => '₹25,000',
            'Entrepreneur Award' => '₹25,000'
        ];
    @endphp

    <!-- Page Banner -->
    <div class="page-banner" style="{{ $bannerImage ? "background-image: linear-gradient(rgba(10, 25, 47, 0.7), rgba(10, 25, 47, 0.8)), url('" . asset($bannerImage) . "');" : '' }}">
        <div class="page-banner-content">
            <h1 style="text-transform: uppercase;">{{ $bannerTitle }}</h1>
        </div>
    </div>

<style>
    .awards-container {
        padding: 70px 20px;
        max-width: 1100px;
        margin: 0 auto;
        font-family: 'Inter', system-ui, -apple-system, sans-serif;
        color: #334155;
        background: #fff;
    }

    .awards-header {
        text-align: center;
        margin-bottom: 45px;
    }

    .awards-header h2 {
        font-size: 2.2rem;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 12px;
        text-transform: uppercase;
    }

    .awards-header p {
        font-size: 1.1rem;
        color: #64748b;
        margin-top: 15px;
    }

    .awards-intro {
        font-size: 1.05rem;
        line-height: 1.7;
        margin-bottom: 50px;
        text-align: justify;
        background: #f8fafc;
        padding: 24px 30px;
        border-radius: 12px;
        border-left: 4px solid #009688;
        color: #475569;
    }

    .award-card-box {
        background: #ffffff;
        border-radius: 16px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05);
        padding: 35px;
        margin-bottom: 40px;
        scroll-margin-top: 100px;
    }

    .award-title-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 2px solid #f1f5f9;
        padding-bottom: 20px;
        margin-bottom: 25px;
        flex-wrap: wrap;
        gap: 15px;
    }

    .award-title-header h3 {
        font-size: 1.6rem;
        font-weight: 800;
        color: #0f172a;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .prize-badge {
        background: #0f172a;
        color: #ffffff;
        padding: 8px 20px;
        border-radius: 30px;
        font-weight: 800;
        font-size: 1rem;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .award-subtitle {
        font-size: 1.15rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 12px;
        margin-top: 20px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .award-list {
        list-style: none;
        padding-left: 0;
        margin-bottom: 20px;
    }

    .award-list li {
        margin-bottom: 10px;
        font-size: 0.98rem;
        line-height: 1.6;
        display: flex;
        align-items: flex-start;
        gap: 10px;
        color: #475569;
    }

    .award-list.bullets li::before {
        content: "\f058";
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        color: #009688;
        font-size: 1rem;
        line-height: 1.5;
    }

    .award-list.checks li::before {
        content: "\f00c";
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        color: #009688;
        font-size: 0.9rem;
        line-height: 1.6;
    }
</style>

<section class="awards-container">
    <div class="awards-header">
        <h2><i class="fa-solid fa-trophy" style="color: #009688; margin-right: 10px;"></i> Conference Awards</h2>
        <div style="width: 70px; height: 3px; background: #009688; margin: 0 auto 16px auto; border-radius: 2px;"></div>
        <p>A Worldwide Recognition Platform For Today's Leading Innovators, Scholars, and Experts.</p>
    </div>

    <div class="awards-intro">
        {!! nl2br(e($awardsIntro)) !!}
    </div>

    @foreach($awards as $award)
    @php
        $prize = $prizes[$award->name] ?? null;
    @endphp
    <div class="award-card-box" id="award-{{ $award->id }}">
        <div class="award-title-header">
            <h3>
                <i class="{{ $award->icon ?? 'fa-solid fa-award' }}" style="color: #009688;"></i> 
                {{ $award->name }}
            </h3>
            @if($prize)
            <div class="prize-badge">
                <i class="fa-solid fa-trophy" style="color: #009688;"></i> Cash Prize: {{ $prize }}
            </div>
            @endif
        </div>
        
        <p style="font-size: 1.05rem; color: #475569; line-height: 1.6; margin-bottom: 25px;">
            {{ str_replace(['Cash Prize: ₹10,000', 'Cash Prize: ₹25,000'], '', $award->short_description) }}
        </p>

        @if($award->benefits)
            <h4 class="award-subtitle"><i class="fa-solid fa-gift" style="color: #009688;"></i> Award Benefits</h4>
            <ul class="award-list bullets">
                @foreach(array_filter(array_map('trim', explode("\n", $award->benefits))) as $item)
                    <li><span>{!! $item !!}</span></li>
                @endforeach
            </ul>
        @endif

        @if($award->eligibility)
            <h4 class="award-subtitle"><i class="fa-solid fa-user-check" style="color: #009688;"></i> Eligibility</h4>
            <ul class="award-list checks">
                @foreach(array_filter(array_map('trim', explode("\n", $award->eligibility))) as $item)
                    <li><span>{!! $item !!}</span></li>
                @endforeach
            </ul>
        @endif

        @if($award->guidelines)
            <h4 class="award-subtitle"><i class="fa-solid fa-clipboard-list" style="color: #009688;"></i> Evaluation & Guidelines</h4>
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
