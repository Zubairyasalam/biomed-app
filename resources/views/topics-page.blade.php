@extends('layouts.app')

@section('content')

@include('sections.topbar')
@include('sections.navbar')

<!-- Banner Section -->
<section class="plenary-banner">
    <div class="container">
        <h1>TOPICS</h1>
    </div>
</section>

<!-- Content Section -->
<div style="padding: 60px 0;">
    @include('sections.topics', ['hideTitle' => true])
</div>

@include('sections.footer')

@endsection
