@extends('layouts.app')

@section('content')

@include('sections.topbar')
@include('sections.navbar')

    @php
        $bannerTitle = \App\Models\SiteSetting::where('group', 'page_banners')->where('key', 'banner_guidelines_title')->value('value') ?? 'GUIDELINES';
        $bannerImage = \App\Models\SiteSetting::where('group', 'page_banners')->where('key', 'banner_guidelines_image')->value('value');
    @endphp
    <!-- Page Banner -->
    <div class="page-banner" style="{{ $bannerImage ? "background-image: linear-gradient(rgba(10, 25, 47, 0.7), rgba(10, 25, 47, 0.8)), url('" . asset($bannerImage) . "');" : '' }}">
        <div class="page-banner-content">
            <h1>{{ $bannerTitle }}</h1>
        </div>
    </div>

<!-- Content Section -->
<section class="guidelines-section" style="padding: 60px 0; background: #fff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        
        <div style="text-align: center; margin-bottom: 40px;">
            <h2 style="font-size: 2.2rem; font-weight: 600; color: #333; margin-bottom: 15px;">Abstract Submission Guidelines</h2>
            <div style="width: 150px; height: 2px; background: #0000FF; margin: 0 auto;"></div>
        </div>

        <div class="guidelines-content" style="color: #333; font-size: 1.15rem; line-height: 1.6; font-family: Arial, Helvetica, sans-serif;">
            {!! \App\Models\SiteSetting::where('group', 'guidelines')->where('key', 'guidelines_content')->value('value') !!}
        </div>
        
    </div>
</section>

@include('sections.footer')

@endsection
