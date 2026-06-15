@extends('layouts.admin_cms')

@section('header_title', 'Manage Timeline & Deadlines')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
        <h2 style="color: var(--admin-sidebar); font-size: 1.5rem;">Important Dates</h2>
    </div>

    @if(session('success'))
        <div style="background: rgba(164, 198, 57, 0.15); border-left: 4px solid var(--admin-green); padding: 15px; margin-bottom: 25px; border-radius: 4px; color: #627722;">
            <i class="fa-solid fa-circle-check" style="margin-right: 5px;"></i> {{ session('success') }}
        </div>
    @endif

    <!-- Section Content Settings -->
    <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data">
        @csrf
        
        <div class="card">
            <h3 style="margin-bottom: 20px; color: var(--admin-sidebar); border-bottom: 2px solid var(--admin-border); padding-bottom: 10px;">
                Deadlines Section Content
            </h3>
            
            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; color: var(--admin-text); margin-bottom: 8px;">{{ $settings['deadlines']->where('key', 'deadlines_image')->first()->label ?? 'Section Image' }}</label>
                @php $currentImg = $settings['deadlines']->where('key', 'deadlines_image')->first()->value ?? ''; @endphp
                
                <div id="image-preview-container" style="margin-bottom: 10px; {{ $currentImg ? '' : 'display: none;' }}">
                    <img id="image-preview" src="{{ $currentImg ? (str_starts_with($currentImg, 'http') ? $currentImg : asset($currentImg)) : '' }}" alt="Preview" style="max-height: 150px; border-radius: 8px; border: 1px solid var(--admin-border);">
                </div>
                
                <input type="file" name="deadlines_image" id="deadlines_image" accept="image/*" style="width: 100%; padding: 10px 15px; border: 1px solid var(--admin-border); border-radius: 8px;" onchange="previewSelectedImage(this)">
                <small style="color: #64748b; display: block; margin-top: 5px;">Leave empty to keep current image. Recommended size: 600x500px.</small>
            </div>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; font-weight: 600; color: var(--admin-text); margin-bottom: 8px;">{{ $settings['deadlines']->where('key', 'deadlines_title')->first()->label ?? 'Main Title' }}</label>
                    <input type="text" name="deadlines_title" value="{{ $settings['deadlines']->where('key', 'deadlines_title')->first()->value ?? '' }}" style="width: 100%; padding: 10px 15px; border: 1px solid var(--admin-border); border-radius: 8px;">
                </div>
                <div>
                    <label style="display: block; font-weight: 600; color: var(--admin-text); margin-bottom: 8px;">{{ $settings['deadlines']->where('key', 'deadlines_subtitle')->first()->label ?? 'Subtitle' }}</label>
                    <input type="text" name="deadlines_subtitle" value="{{ $settings['deadlines']->where('key', 'deadlines_subtitle')->first()->value ?? '' }}" style="width: 100%; padding: 10px 15px; border: 1px solid var(--admin-border); border-radius: 8px;">
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; font-weight: 600; color: var(--admin-text); margin-bottom: 8px;">Stat 1 Num (Auto)</label>
                    <input type="text" disabled value="Auto-calculated ({{ count($deadlines) }})" style="width: 100%; padding: 10px 15px; border: 1px solid var(--admin-border); border-radius: 8px; margin-bottom: 10px; background-color: #f1f5f9; color: #94a3b8;">
                    <input type="hidden" name="deadlines_stat1_num" value="{{ count($deadlines) }}">
                    <input type="text" name="deadlines_stat1_label" value="{{ $settings['deadlines']->where('key', 'deadlines_stat1_label')->first()->value ?? '' }}" style="width: 100%; padding: 10px 15px; border: 1px solid var(--admin-border); border-radius: 8px;" placeholder="Label">
                </div>
                <div>
                    <label style="display: block; font-weight: 600; color: var(--admin-text); margin-bottom: 8px;">{{ $settings['deadlines']->where('key', 'deadlines_stat2_num')->first()->label ?? 'Stat 2 Num' }}</label>
                    <input type="text" name="deadlines_stat2_num" value="{{ $settings['deadlines']->where('key', 'deadlines_stat2_num')->first()->value ?? '' }}" style="width: 100%; padding: 10px 15px; border: 1px solid var(--admin-border); border-radius: 8px; margin-bottom: 10px;">
                    <input type="text" name="deadlines_stat2_label" value="{{ $settings['deadlines']->where('key', 'deadlines_stat2_label')->first()->value ?? '' }}" style="width: 100%; padding: 10px 15px; border: 1px solid var(--admin-border); border-radius: 8px;" placeholder="Label">
                </div>
                <div>
                    <label style="display: block; font-weight: 600; color: var(--admin-text); margin-bottom: 8px;">{{ $settings['deadlines']->where('key', 'deadlines_stat3_num')->first()->label ?? 'Stat 3 Num' }}</label>
                    <input type="text" name="deadlines_stat3_num" value="{{ $settings['deadlines']->where('key', 'deadlines_stat3_num')->first()->value ?? '' }}" style="width: 100%; padding: 10px 15px; border: 1px solid var(--admin-border); border-radius: 8px; margin-bottom: 10px;">
                    <input type="text" name="deadlines_stat3_label" value="{{ $settings['deadlines']->where('key', 'deadlines_stat3_label')->first()->value ?? '' }}" style="width: 100%; padding: 10px 15px; border: 1px solid var(--admin-border); border-radius: 8px;" placeholder="Label">
                </div>
            </div>
            
            <h3 style="margin-top: 30px; margin-bottom: 20px; color: var(--admin-sidebar); border-bottom: 2px solid var(--admin-border); padding-bottom: 10px;">
                Call to Action Banner
            </h3>

            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; color: var(--admin-text); margin-bottom: 8px;">{{ $settings['deadlines']->where('key', 'deadlines_banner_text')->first()->label ?? 'Banner Text' }}</label>
                <input type="text" name="deadlines_banner_text" value="{{ $settings['deadlines']->where('key', 'deadlines_banner_text')->first()->value ?? '' }}" style="width: 100%; padding: 10px 15px; border: 1px solid var(--admin-border); border-radius: 8px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; color: var(--admin-text); margin-bottom: 8px;">{{ $settings['deadlines']->where('key', 'deadlines_banner_sub')->first()->label ?? 'Banner Subtitle' }}</label>
                <input type="text" name="deadlines_banner_sub" value="{{ $settings['deadlines']->where('key', 'deadlines_banner_sub')->first()->value ?? '' }}" style="width: 100%; padding: 10px 15px; border: 1px solid var(--admin-border); border-radius: 8px;">
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; font-weight: 600; color: var(--admin-text); margin-bottom: 8px;">{{ $settings['deadlines']->where('key', 'deadlines_banner_btn')->first()->label ?? 'Button Text' }}</label>
                    <input type="text" name="deadlines_banner_btn" value="{{ $settings['deadlines']->where('key', 'deadlines_banner_btn')->first()->value ?? '' }}" style="width: 100%; padding: 10px 15px; border: 1px solid var(--admin-border); border-radius: 8px;">
                </div>
                <div>
                    <label style="display: block; font-weight: 600; color: var(--admin-text); margin-bottom: 8px;">{{ $settings['deadlines']->where('key', 'deadlines_banner_link')->first()->label ?? 'Button Link' }}</label>
                    <input type="text" name="deadlines_banner_link" value="{{ $settings['deadlines']->where('key', 'deadlines_banner_link')->first()->value ?? '' }}" style="width: 100%; padding: 10px 15px; border: 1px solid var(--admin-border); border-radius: 8px;">
                </div>
            </div>

            <div style="text-align: right;">
                <button type="submit" class="btn"><i class="fa-solid fa-save"></i> Save Content</button>
            </div>
        </div>
    </form>

    <script>
        function previewSelectedImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var container = document.getElementById('image-preview-container');
                    var img = document.getElementById('image-preview');
                    img.src = e.target.result;
                    container.style.display = 'block';
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
