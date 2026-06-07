@extends('layouts.app')

@section('content')

    @include('sections.topbar')
    @include('sections.navbar')
    @include('sections.hero')
    @include('sections.about-mcc')
    @include('sections.about-dept')
    @include('sections.about')
    @include('sections.participants')
    @include('sections.workshop')
    @include('sections.thrust-areas')
    @include('sections.abstract-guidelines')
    @include('sections.awards')
    @include('sections.registration-details')
    @include('sections.highlights')
    @include('sections.speakers')
    @include('sections.keynote')
    @include('sections.invited')
    @include('sections.topics')
    @include('sections.deadlines')
    @include('sections.cta')
    @include('sections.venue')
    @include('sections.footer')

@endsection

@section('scripts')
<script>
    function updateCountdown() {
        @php
            $targetDate = "September 23, 2027 00:00:00";
            if(isset($deadlines) && count($deadlines) > 0) {
                // Use the first active deadline as the target
                $targetDate = \Carbon\Carbon::parse($deadlines->first()->deadline_date)->format('F d, Y 00:00:00');
            }
        @endphp
        const targetDate = new Date('{{ $targetDate }}').getTime();
        const now = new Date().getTime();
        const difference = targetDate - now;

        if(difference > 0) {
            const days = Math.floor(difference / (1000 * 60 * 60 * 24));
            const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((difference % (1000 * 60)) / 1000);

            document.getElementById('days').innerText = days;
            document.getElementById('hours').innerText = hours.toString().padStart(2, '0');
            document.getElementById('minutes').innerText = minutes.toString().padStart(2, '0');
            document.getElementById('seconds').innerText = seconds.toString().padStart(2, '0');
        }
    }

    setInterval(updateCountdown, 1000);
    updateCountdown();
</script>
@endsection
