@extends('layouts.admin_cms')

@section('header_title', 'Venue Settings')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
        <h2 style="color: var(--admin-sidebar); font-size: 1.5rem;">Venue Page Content</h2>
    </div>

    @if(session('success'))
        <div style="background: rgba(164, 198, 57, 0.15); border-left: 4px solid var(--admin-green); padding: 15px; margin-bottom: 25px; border-radius: 4px; color: #627722;">
            <i class="fa-solid fa-circle-check" style="margin-right: 5px;"></i> {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('admin.venue_settings.update') }}">
        @csrf
        
        <div class="card">
            <h3 style="margin-bottom: 20px; color: var(--admin-sidebar); border-bottom: 2px solid var(--admin-border); padding-bottom: 10px;">
                Discover MCC Section
            </h3>
            
            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; color: var(--admin-text); margin-bottom: 8px;">{{ $settings['venue']->where('key', 'venue_discover_title')->first()->label ?? 'Discover Title' }}</label>
                <input type="text" name="venue_discover_title" value="{{ $settings['venue']->where('key', 'venue_discover_title')->first()->value ?? '' }}" style="width: 100%; padding: 12px 15px; border: 1px solid var(--admin-border); border-radius: 8px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; color: var(--admin-text); margin-bottom: 8px;">{{ $settings['venue']->where('key', 'venue_discover_text')->first()->label ?? 'Discover Text' }}</label>
                <textarea name="venue_discover_text" style="width: 100%; padding: 12px 15px; border: 1px solid var(--admin-border); border-radius: 8px; font-family: 'Poppins', sans-serif;" rows="5">{{ $settings['venue']->where('key', 'venue_discover_text')->first()->value ?? '' }}</textarea>
            </div>
        </div>

        <div class="card">
            <h3 style="margin-bottom: 20px; color: var(--admin-sidebar); border-bottom: 2px solid var(--admin-border); padding-bottom: 10px;">
                Heritage & Innovation Section
            </h3>
            
            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; color: var(--admin-text); margin-bottom: 8px;">{{ $settings['venue']->where('key', 'venue_heritage_title')->first()->label ?? 'Heritage Title' }}</label>
                <input type="text" name="venue_heritage_title" value="{{ $settings['venue']->where('key', 'venue_heritage_title')->first()->value ?? '' }}" style="width: 100%; padding: 12px 15px; border: 1px solid var(--admin-border); border-radius: 8px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; color: var(--admin-text); margin-bottom: 8px;">{{ $settings['venue']->where('key', 'venue_heritage_text')->first()->label ?? 'Heritage Text' }}</label>
                <textarea name="venue_heritage_text" style="width: 100%; padding: 12px 15px; border: 1px solid var(--admin-border); border-radius: 8px; font-family: 'Poppins', sans-serif;" rows="5">{{ $settings['venue']->where('key', 'venue_heritage_text')->first()->value ?? '' }}</textarea>
            </div>
        </div>

        <div class="card">
            <h3 style="margin-bottom: 20px; color: var(--admin-sidebar); border-bottom: 2px solid var(--admin-border); padding-bottom: 10px;">
                Campus Biodiversity Section
            </h3>
            
            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; color: var(--admin-text); margin-bottom: 8px;">{{ $settings['venue']->where('key', 'venue_biodiversity_title')->first()->label ?? 'Biodiversity Title' }}</label>
                <input type="text" name="venue_biodiversity_title" value="{{ $settings['venue']->where('key', 'venue_biodiversity_title')->first()->value ?? '' }}" style="width: 100%; padding: 12px 15px; border: 1px solid var(--admin-border); border-radius: 8px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; color: var(--admin-text); margin-bottom: 8px;">{{ $settings['venue']->where('key', 'venue_biodiversity_text')->first()->label ?? 'Biodiversity Text' }}</label>
                <textarea name="venue_biodiversity_text" style="width: 100%; padding: 12px 15px; border: 1px solid var(--admin-border); border-radius: 8px; font-family: 'Poppins', sans-serif;" rows="3">{{ $settings['venue']->where('key', 'venue_biodiversity_text')->first()->value ?? '' }}</textarea>
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; color: var(--admin-text); margin-bottom: 8px;">{{ $settings['venue']->where('key', 'venue_biodiversity_list')->first()->label ?? 'Biodiversity Bullets (One per line)' }}</label>
                <textarea name="venue_biodiversity_list" style="width: 100%; padding: 12px 15px; border: 1px solid var(--admin-border); border-radius: 8px; font-family: 'Poppins', sans-serif;" rows="5">{{ $settings['venue']->where('key', 'venue_biodiversity_list')->first()->value ?? '' }}</textarea>
            </div>
        </div>

        <div class="card">
            <h3 style="margin-bottom: 20px; color: var(--admin-sidebar); border-bottom: 2px solid var(--admin-border); padding-bottom: 10px;">
                Accessibility Section
            </h3>
            
            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; color: var(--admin-text); margin-bottom: 8px;">{{ $settings['venue']->where('key', 'venue_accessibility_title')->first()->label ?? 'Accessibility Title' }}</label>
                <input type="text" name="venue_accessibility_title" value="{{ $settings['venue']->where('key', 'venue_accessibility_title')->first()->value ?? '' }}" style="width: 100%; padding: 12px 15px; border: 1px solid var(--admin-border); border-radius: 8px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; color: var(--admin-text); margin-bottom: 8px;">{{ $settings['venue']->where('key', 'venue_accessibility_text')->first()->label ?? 'Accessibility Text' }}</label>
                <textarea name="venue_accessibility_text" style="width: 100%; padding: 12px 15px; border: 1px solid var(--admin-border); border-radius: 8px; font-family: 'Poppins', sans-serif;" rows="4">{{ $settings['venue']->where('key', 'venue_accessibility_text')->first()->value ?? '' }}</textarea>
            </div>
        </div>

        <div class="card">
            <h3 style="margin-bottom: 20px; color: var(--admin-sidebar); border-bottom: 2px solid var(--admin-border); padding-bottom: 10px;">
                Conference Facilities Section
            </h3>
            
            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; color: var(--admin-text); margin-bottom: 8px;">{{ $settings['venue']->where('key', 'venue_facilities_title')->first()->label ?? 'Facilities Title' }}</label>
                <input type="text" name="venue_facilities_title" value="{{ $settings['venue']->where('key', 'venue_facilities_title')->first()->value ?? '' }}" style="width: 100%; padding: 12px 15px; border: 1px solid var(--admin-border); border-radius: 8px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; color: var(--admin-text); margin-bottom: 8px;">{{ $settings['venue']->where('key', 'venue_facilities_text')->first()->label ?? 'Facilities Text' }}</label>
                <textarea name="venue_facilities_text" style="width: 100%; padding: 12px 15px; border: 1px solid var(--admin-border); border-radius: 8px; font-family: 'Poppins', sans-serif;" rows="4">{{ $settings['venue']->where('key', 'venue_facilities_text')->first()->value ?? '' }}</textarea>
            </div>
        </div>

        <div style="margin-bottom: 40px; text-align: right;">
            <button type="submit" class="btn" style="padding: 12px 30px; font-size: 1rem;">
                <i class="fa-solid fa-save"></i> Save All Changes
            </button>
        </div>
    </form>
@endsection
