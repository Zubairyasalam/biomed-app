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
<!-- Countdown script removed as these boxes are now manually edited statistics from the admin panel -->
@endsection
