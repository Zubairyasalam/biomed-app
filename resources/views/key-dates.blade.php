@extends('layouts.app')

@section('content')

@include('sections.topbar')
@include('sections.navbar')

<!-- Banner Section -->
<section class="plenary-banner">
    <div class="container">
        <h1 style="text-transform: uppercase;">IMPORTANT DEADLINES</h1>
    </div>
</section>

<style>
    .key-dates-container {
        padding: 60px 20px 80px 20px;
        max-width: 1100px;
        margin: 0 auto;
        font-family: Arial, Helvetica, sans-serif;
        background: #fff;
    }

    .kd-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .kd-header h2 {
        font-size: 2.2rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 15px;
    }

    .kd-header p {
        font-size: 1.15rem;
        color: #555;
        margin-top: 20px;
    }

    .kd-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
    }

    @media (max-width: 900px) {
        .kd-grid {
            grid-template-columns: 1fr;
        }
    }

    .kd-illustration {
        width: 100%;
        border-radius: 8px;
        overflow: hidden;
    }

    .kd-illustration img {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 8px;
    }

    .kd-cards {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .kd-card {
        background: var(--teal-accent, #139a95);
        border-radius: 10px;
        padding: 20px 25px;
        display: flex;
        align-items: center;
        gap: 20px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .kd-card:hover {
        transform: translateY(-3px);
    }

    .kd-icon-circle {
        width: 75px;
        height: 75px;
        background: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    
    .kd-icon-circle.yellow-bg {
        background: #fbbd05;
    }

    .kd-icon-circle i {
        font-size: 2rem;
        color: var(--navy-primary, #151c2f);
    }

    .kd-icon-circle.yellow-bg i {
        color: #5d368e; /* Purple-ish bird from image */
    }

    .kd-text {
        color: #fff;
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    .kd-date {
        font-size: 1.3rem;
        font-weight: 700;
    }

    .kd-label {
        font-size: 0.95rem;
        font-weight: 500;
    }
</style>

<section class="key-dates-container">
    <div class="kd-header">
        <h2>Important Deadlines</h2>
        <div style="width: 100px; height: 2px; background: #0000FF; margin: 0 auto;"></div>
        <p>Key Dates To Mark In Your Calendar</p>
    </div>

    <div class="kd-grid">
        <!-- Left: Illustration -->
        <div class="kd-illustration">
            <!-- Using an Unsplash calendar placeholder since we don't have the custom vector illustration from the screenshot -->
            <img src="https://images.unsplash.com/photo-1506784983877-45594efa4cbe?q=80&w=800&h=600&fit=crop&crop=center" alt="Calendar Schedule">
        </div>

        <!-- Right: Cards -->
        <div class="kd-cards">
            
            <div class="kd-card">
                <div class="kd-icon-circle">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div class="kd-text">
                    <div class="kd-date">Sep 23–25, 2027</div>
                    <div class="kd-label">Conference Dates Start</div>
                </div>
            </div>

            <div class="kd-card">
                <div class="kd-icon-circle">
                    <i class="fa-solid fa-file-signature"></i>
                </div>
                <div class="kd-text">
                    <div class="kd-date">Dec 28, 2026</div>
                    <div class="kd-label">Abstract Submission Open</div>
                </div>
            </div>

            <div class="kd-card">
                <div class="kd-icon-circle yellow-bg">
                    <i class="fa-solid fa-dove"></i>
                </div>
                <div class="kd-text">
                    <div class="kd-date">Sep 30, 2026</div>
                    <div class="kd-label">Super Early-Bird Registration</div>
                </div>
            </div>

        </div>
    </div>
</section>

@include('sections.footer')

@endsection
