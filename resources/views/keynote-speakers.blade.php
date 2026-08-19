@extends('layouts.app')

@section('content')

@include('sections.topbar')
@include('sections.navbar')

    @php
        $bannerTitle = \App\Models\SiteSetting::where('group', 'page_banners')->where('key', 'banner_keynote_speakers_title')->value('value') ?? 'KEYNOTE SPEAKERS';
        $bannerImage = \App\Models\SiteSetting::where('group', 'page_banners')->where('key', 'banner_keynote_speakers_image')->value('value');
    @endphp
    <!-- Page Banner -->
    <div class="page-banner" style="{{ $bannerImage ? "background-image: linear-gradient(rgba(10, 25, 47, 0.7), rgba(10, 25, 47, 0.8)), url('" . asset($bannerImage) . "');" : '' }}">
        <div class="page-banner-content">
            <h1 style="text-transform: uppercase;">{{ $bannerTitle }}</h1>
        </div>
    </div>

<style>
    .keynote-page-container {
        padding: 70px 20px;
        max-width: 1140px;
        margin: 0 auto;
        font-family: 'Inter', system-ui, -apple-system, sans-serif;
    }

    .keynote-header-block {
        text-align: center;
        margin-bottom: 50px;
    }

    .keynote-header-title {
        font-size: clamp(2rem, 4vw, 2.7rem);
        font-weight: 800;
        color: #0f172a;
        margin: 0 0 12px 0;
        text-transform: uppercase;
        letter-spacing: -0.5px;
    }

    .keynote-header-title span {
        color: #009688;
    }

    .keynote-header-bar {
        width: 70px;
        height: 4px;
        background: #84cc16;
        margin: 0 auto 16px auto;
        border-radius: 2px;
    }

    .keynote-header-subtitle {
        font-size: 1.1rem;
        color: #64748b;
        margin: 0;
        font-weight: 500;
    }

    .keynote-speaker-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
        gap: 30px;
        justify-content: center;
    }

    @media (max-width: 650px) {
        .keynote-speaker-grid {
            grid-template-columns: 1fr;
        }
    }

    .speaker-card-plenary-style {
        background: #ffffff;
        border-radius: 16px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05);
        padding: 30px;
        display: flex;
        gap: 25px;
        align-items: flex-start;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .speaker-card-plenary-style:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(15, 23, 42, 0.08);
        border-color: #cbd5e1;
    }

    @media (max-width: 580px) {
        .speaker-card-plenary-style {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
    }

    .speaker-photo-frame {
        width: 140px;
        height: 140px;
        flex-shrink: 0;
        border-radius: 14px;
        overflow: hidden;
        background: #f1f5f9;
        box-shadow: 0 4px 12px rgba(0,0,0,0.06);
        border: 1px solid #e2e8f0;
    }

    .speaker-photo-frame img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .speaker-details-frame {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .speaker-name-title {
        font-size: 1.35rem;
        font-weight: 800;
        color: #0f172a;
        margin: 0 0 6px 0;
        line-height: 1.3;
    }

    .speaker-role-text {
        font-size: 0.92rem;
        color: #475569;
        font-weight: 600;
        line-height: 1.4;
        margin-bottom: 4px;
    }

    .speaker-affiliation-text {
        font-size: 0.86rem;
        color: #64748b;
        line-height: 1.4;
        margin-bottom: 12px;
    }

    .speaker-dotted-divider {
        border-top: 1px dotted #cbd5e1;
        margin: 12px 0 14px 0;
    }

    .speaker-field-block {
        margin-bottom: 10px;
    }

    .speaker-field-label {
        font-size: 0.75rem;
        font-weight: 800;
        color: #009688;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        display: block;
        margin-bottom: 2px;
    }

    .speaker-field-value {
        font-size: 0.88rem;
        color: #1e293b;
        font-weight: 600;
        margin: 0;
    }

    .btn-view-profile {
        margin-top: 14px;
        align-self: flex-start;
        background: #f8fafc;
        border: 1px solid #cbd5e1;
        color: #009688;
        padding: 7px 18px;
        border-radius: 6px;
        font-size: 0.82rem;
        font-weight: 700;
        cursor: pointer;
        text-decoration: none;
        transition: all 0.2s ease;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .btn-view-profile:hover {
        background: #009688;
        color: #ffffff;
        border-color: #009688;
    }
</style>

<section class="keynote-page-container">
    
    <!-- Title Block matching Image 1 Design -->
    <div class="keynote-header-block">
        <h2 class="keynote-header-title">
            Keynote <span>Speakers</span>
        </h2>
        <div class="keynote-header-bar"></div>
        <p class="keynote-header-subtitle">The Minds Behind the Momentum</p>
    </div>

    <!-- Speaker Grid matching Image 1 Design -->
    <div class="keynote-speaker-grid">

        @php
            $keynoteSpeakers = \App\Models\Speaker::where('type', 'keynote')->orderBy('sort_order')->get();
        @endphp

        @forelse($keynoteSpeakers as $speaker)
        <div class="speaker-card-plenary-style">
            
            <!-- Left Portrait Photo -->
            <div class="speaker-photo-frame">
                <img src="{{ asset($speaker->image_path) }}" alt="{{ $speaker->name }}" onerror="this.src='https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=400&h=400&fit=crop'">
            </div>

            <!-- Right Speaker Info -->
            <div class="speaker-details-frame">
                <h3 class="speaker-name-title">{{ $speaker->name }}</h3>
                
                <div class="speaker-role-text">{{ $speaker->title ?? $speaker->university }}</div>
                
                @if($speaker->current_role && $speaker->current_role !== $speaker->title)
                    <div class="speaker-affiliation-text">{{ $speaker->current_role }}</div>
                @elseif($speaker->country)
                    <div class="speaker-affiliation-text">{{ $speaker->university }} • {{ $speaker->country }}</div>
                @endif

                <div class="speaker-dotted-divider"></div>

                @if($speaker->field)
                <div class="speaker-field-block">
                    <span class="speaker-field-label">Field / Specialization</span>
                    <p class="speaker-field-value">{{ $speaker->field }}</p>
                </div>
                @elseif($speaker->h_index)
                <div class="speaker-field-block">
                    <span class="speaker-field-label">H-Index</span>
                    <p class="speaker-field-value">{{ $speaker->h_index }}</p>
                </div>
                @endif

                @if($speaker->honours)
                <div class="speaker-field-block" style="margin-top: 6px;">
                    <span class="speaker-field-label">Notable Honours</span>
                    <p class="speaker-field-value" style="font-weight: 500; font-size: 0.84rem; color: #475569;">{{ Str::limit($speaker->honours, 85) }}</p>
                </div>
                @endif

                <!-- Hidden details for Modal -->
                <div id="speaker-data-{{ $speaker->id }}" style="display: none;">
                    <div class="modal-speaker-name">{{ $speaker->name }}</div>
                    <div class="modal-speaker-title">{{ $speaker->title }}</div>
                    <div class="modal-speaker-role">{{ $speaker->current_role }}</div>
                    <div class="modal-speaker-field">{{ $speaker->field }}</div>
                    <div class="modal-speaker-edu">{{ $speaker->education }}</div>
                    <div class="modal-speaker-honours">{{ $speaker->honours }}</div>
                    <div class="modal-speaker-bio">{!! nl2br(e($speaker->biography)) !!}</div>
                    <div class="modal-speaker-achievements">{!! nl2br(e($speaker->key_achievements)) !!}</div>
                    <div class="modal-speaker-relevance">{!! nl2br(e($speaker->relevance)) !!}</div>
                    <div class="modal-speaker-img">{{ asset($speaker->image_path) }}</div>
                </div>

                <button type="button" class="btn-view-profile" onclick="openKeynoteModal({{ $speaker->id }})">
                    VIEW PROFILE & BIOGRAPHY <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>

        </div>
        @empty
        <div style="grid-column: 1 / -1; text-align: center; padding: 40px; color: #64748b; background: #ffffff; border-radius: 12px; font-size: 1.1rem; border: 1px solid #e2e8f0;">
            Keynote speakers will be announced shortly.
        </div>
        @endforelse

    </div>
</section>

<!-- True 100% Full Screen Keynote Speaker Modal -->
@if(!defined('KEYNOTE_MODAL_RENDERED'))
@php define('KEYNOTE_MODAL_RENDERED', true); @endphp
<div id="keynoteModal" style="display: none; position: fixed; z-index: 999999; top: 0; left: 0; width: 100vw; height: 100vh; background: #ffffff;">
    <div style="background: #ffffff; width: 100vw; height: 100vh; max-width: 100vw; max-height: 100vh; display: flex; flex-direction: column; position: relative; overflow: hidden; border: none; margin: 0; padding: 0;">
        
        <!-- Fullscreen Edge-to-Edge Modal Header -->
        <div style="background: #0f172a; color: #ffffff; padding: 20px 40px; display: flex; align-items: center; justify-content: space-between; flex-shrink: 0; border-bottom: 3px solid #009688;">
            <div style="font-weight: 800; font-size: 1.4rem; letter-spacing: 0.3px;">
                Keynote Speaker Profile & Biography
            </div>
            <button onclick="closeKeynoteModal()" style="background: #ef4444; border: none; color: #ffffff; padding: 8px 22px; border-radius: 8px; cursor: pointer; font-size: 1rem; font-weight: 700; display: flex; align-items: center; gap: 8px; transition: background 0.2s;" onmouseover="this.style.background='#dc2626'" onmouseout="this.style.background='#ef4444'">
                <span>Close</span> &times;
            </button>
        </div>

        <!-- Fullscreen Scrollable Body Content -->
        <div style="flex-grow: 1; overflow-y: auto; background: #ffffff;">
            <div style="max-width: 1300px; margin: 0 auto; padding: 40px 50px;">
                
                <!-- Top Hero Banner Card -->
                <div style="display: flex; gap: 35px; margin-bottom: 40px; align-items: center; background: #f8fafc; padding: 35px 40px; border-radius: 16px; border: 1px solid #e2e8f0; flex-wrap: wrap;">
                    <img id="km-img" src="" alt="" style="width: 180px; height: 180px; border-radius: 16px; object-fit: cover; border: 4px solid #009688; box-shadow: 0 10px 25px rgba(0,0,0,0.1); flex-shrink: 0;">
                    <div style="flex-grow: 1;">
                        <h2 id="km-name" style="margin: 0 0 10px 0; color: #0f172a; font-size: 2.2rem; font-weight: 900; line-height: 1.2;"></h2>
                        <p id="km-title" style="margin: 0 0 8px 0; color: #009688; font-weight: 700; font-size: 1.15rem; line-height: 1.4;"></p>
                        <p id="km-role" style="margin: 0; color: #475569; font-size: 1.02rem; line-height: 1.5; font-weight: 500;"></p>
                    </div>
                </div>

                <!-- Details Stack -->
                <div style="display: flex; flex-direction: column; gap: 30px; font-size: 1.05rem; color: #334155; line-height: 1.75;">
                    
                    <div id="km-field-wrap" style="background: #f0fdf4; padding: 20px 25px; border-radius: 12px; border: 1px solid #bbf7d0;">
                        <div style="font-weight: 800; color: #166534; margin-bottom: 4px; font-size: 0.88rem; text-transform: uppercase; letter-spacing: 0.8px;">Field of Specialization</div>
                        <div id="km-field" style="color: #0f766e; font-weight: 700; font-size: 1.1rem;"></div>
                    </div>

                    <div id="km-edu-wrap" style="display: none;">
                        <h3 style="margin: 0 0 12px 0; color: #0f172a; font-weight: 800; font-size: 1.25rem;">
                            Education & Qualifications
                        </h3>
                        <p id="km-edu" style="margin: 0; background: #f8fafc; border-left: 4px solid #009688; padding: 16px 22px; border-radius: 6px; color: #1e293b; font-weight: 500;"></p>
                    </div>

                    <div id="km-bio-wrap" style="display: none;">
                        <h3 style="margin: 0 0 12px 0; color: #0f172a; font-weight: 800; font-size: 1.25rem;">
                            Biography
                        </h3>
                        <div id="km-bio" style="color: #475569; text-align: justify; font-size: 1.05rem; background: #ffffff; padding: 5px 0;"></div>
                    </div>

                    <div id="km-achievements-wrap" style="display: none;">
                        <h3 style="margin: 0 0 12px 0; color: #0f172a; font-weight: 800; font-size: 1.25rem;">
                            Key Achievements & Contributions
                        </h3>
                        <div id="km-achievements" style="background: #f0fdf4; border: 1px solid #bbf7d0; padding: 22px 28px; border-radius: 12px; color: #166534; font-size: 1.02rem; line-height: 1.75;"></div>
                    </div>

                    <div id="km-relevance-wrap" style="display: none;">
                        <h3 style="margin: 0 0 12px 0; color: #0f172a; font-weight: 800; font-size: 1.25rem;">
                            Relevance as a Keynote Speaker
                        </h3>
                        <div id="km-relevance" style="background: #f0f9ff; border: 1px solid #bae6fd; padding: 22px 28px; border-radius: 12px; color: #0369a1; font-size: 1.02rem; line-height: 1.75;"></div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Fullscreen Modal Footer -->
        <div style="padding: 18px 50px; background: #f8fafc; border-top: 1px solid #e2e8f0; text-align: right; flex-shrink: 0;">
            <button onclick="closeKeynoteModal()" style="padding: 11px 32px; background: #0f172a; color: #ffffff; border: none; border-radius: 6px; font-weight: 700; cursor: pointer; font-size: 1rem; transition: background 0.2s;" onmouseover="this.style.background='#009688'" onmouseout="this.style.background='#0f172a'">
                Close Profile
            </button>
        </div>

    </div>
</div>

<script>
    function openKeynoteModal(id) {
        var data = document.getElementById('speaker-data-' + id);
        if (!data) return;

        document.getElementById('km-name').innerText = data.querySelector('.modal-speaker-name').innerText;
        document.getElementById('km-title').innerText = data.querySelector('.modal-speaker-title').innerText;
        document.getElementById('km-role').innerText = data.querySelector('.modal-speaker-role').innerText;
        document.getElementById('km-img').src = data.querySelector('.modal-speaker-img').innerText;

        var field = data.querySelector('.modal-speaker-field').innerText;
        document.getElementById('km-field').innerText = field;

        var edu = data.querySelector('.modal-speaker-edu').innerText;
        var eduWrap = document.getElementById('km-edu-wrap');
        if (edu && edu.trim() !== '') {
            document.getElementById('km-edu').innerText = edu;
            eduWrap.style.display = 'block';
        } else {
            eduWrap.style.display = 'none';
        }

        var bio = data.querySelector('.modal-speaker-bio').innerHTML;
        var bioWrap = document.getElementById('km-bio-wrap');
        if (bio && bio.trim() !== '') {
            document.getElementById('km-bio').innerHTML = bio;
            bioWrap.style.display = 'block';
        } else {
            bioWrap.style.display = 'none';
        }

        var achievements = data.querySelector('.modal-speaker-achievements').innerHTML;
        var achievementsWrap = document.getElementById('km-achievements-wrap');
        if (achievements && achievements.trim() !== '') {
            document.getElementById('km-achievements').innerHTML = achievements;
            achievementsWrap.style.display = 'block';
        } else {
            achievementsWrap.style.display = 'none';
        }

        var relevance = data.querySelector('.modal-speaker-relevance').innerHTML;
        var relevanceWrap = document.getElementById('km-relevance-wrap');
        if (relevance && relevance.trim() !== '') {
            document.getElementById('km-relevance').innerHTML = relevance;
            relevanceWrap.style.display = 'block';
        } else {
            relevanceWrap.style.display = 'none';
        }

        document.getElementById('keynoteModal').style.display = 'block';
        document.body.style.overflow = 'hidden';
    }

    function closeKeynoteModal() {
        document.getElementById('keynoteModal').style.display = 'none';
        document.body.style.overflow = 'auto';
    }
</script>
@endif

@include('sections.footer')

@endsection
