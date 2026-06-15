<!-- Topbar (Desktop Only) -->
<div class="topbar topbar-desktop">
    <div class="topbar-left">
        <span><i class="fa-solid fa-headset"></i> {{ $settings['contact_phone'] ?? '+91 9876543210' }}</span>
        <span><i class="fa-solid fa-video"></i> {{ $settings['topbar_format'] ?? 'Online | In-person' }}</span>
    </div>
    <div class="topbar-center">
        @if(isset($deadlines) && $deadlines->count() > 0)
            <span><i class="fa-regular fa-file-lines"></i> {{ $deadlines[0]->title }}: {{ \Carbon\Carbon::parse($deadlines[0]->deadline_date)->format('M d, Y') }}</span>
        @else
            <span><i class="fa-regular fa-file-lines"></i> Abstract Sub Deadline: Dec 28, 2026</span>
        @endif
    </div>
    <div class="topbar-right">
        @if(isset($deadlines) && $deadlines->count() > 1)
            <span><i class="fa-solid fa-ticket"></i> {{ $deadlines[1]->title }}: {{ \Carbon\Carbon::parse($deadlines[1]->deadline_date)->format('M d, Y') }}</span>
        @else
            <span><i class="fa-solid fa-ticket"></i> Super Early-Bird Deadline: Sep 30, 2026</span>
        @endif
    </div>
</div>
