@extends('layouts.app')

@section('content')

@include('sections.topbar')
@include('sections.navbar')

<!-- Banner Section -->
<section class="plenary-banner">
    <div class="container">
        <h1>COMMITTEE</h1>
    </div>
</section>

<!-- Content Section -->
<!-- Content Section -->
<style>
    .committee-page-wrap {
        padding: 80px 5%;
        background-color: var(--bg-white);
    }
    .cm-section-title {
        text-align: center;
        margin-bottom: 50px;
    }
    .cm-section-title h2 {
        font-size: 2.5rem;
        color: var(--navy-dark);
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 15px;
    }
    .cm-section-title .cm-line {
        height: 4px;
        width: 80px;
        background: linear-gradient(90deg, var(--teal-accent), var(--green-accent));
        margin: 0 auto;
        border-radius: 2px;
    }
    .cm-grid-main {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
        margin-bottom: 60px;
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
    }
    .cm-grid-3 {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
        margin-bottom: 60px;
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
    }
    .cm-grid-4 {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin-bottom: 60px;
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
    }
    .cm-card {
        background: var(--bg-light);
        border-radius: 16px;
        padding: 35px 30px;
        border: 1px solid var(--border-light);
        box-shadow: var(--shadow-card);
        transition: var(--transition);
        text-align: center;
        position: relative;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: center;
        z-index: 1;
    }
    .cm-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: var(--bg-white);
        z-index: -1;
        opacity: 0;
        transition: var(--transition);
    }
    .cm-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(17, 35, 64, 0.1);
        border-color: var(--teal-accent);
    }
    .cm-card:hover::before {
        opacity: 1;
    }
    .cm-role-badge {
        display: inline-block;
        font-size: 0.85rem;
        font-weight: 700;
        color: var(--bg-white);
        background: var(--navy-dark);
        padding: 6px 16px;
        border-radius: 20px;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin-bottom: 20px;
        box-shadow: 0 4px 10px rgba(17, 35, 64, 0.2);
    }
    .cm-role-badge.teal { background: var(--teal-accent); box-shadow: 0 4px 10px rgba(0, 168, 150, 0.3); }
    .cm-role-badge.green { background: var(--green-accent); box-shadow: 0 4px 10px rgba(164, 198, 57, 0.3); }
    
    .cm-name {
        font-size: 1.4rem;
        color: var(--navy-dark);
        font-weight: 700;
        margin-bottom: 8px;
    }
    .cm-desc {
        font-size: 1.05rem;
        color: var(--text-body);
        line-height: 1.5;
    }
    .cm-multi-person {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        margin-top: 10px;
    }
    .cm-person {
        flex: 1;
    }
    .cm-icon {
        font-size: 2.5rem;
        color: var(--teal-accent);
        margin-bottom: 20px;
        opacity: 0.8;
    }
    
    .college-banner {
        background: linear-gradient(135deg, var(--navy-dark) 0%, var(--teal-accent) 100%);
        border-radius: 20px;
        padding: 50px;
        text-align: center;
        color: var(--bg-white);
        max-width: 900px;
        margin: 0 auto;
        box-shadow: 0 20px 40px rgba(0, 168, 150, 0.2);
    }
    .college-banner h3 {
        color: var(--bg-white);
        font-size: 2.2rem;
        margin-bottom: 15px;
    }
    .college-banner p {
        font-size: 1.2rem;
        margin-bottom: 25px;
        opacity: 0.9;
    }
    .college-banner a {
        display: inline-block;
        background: var(--bg-white);
        color: var(--navy-dark);
        padding: 12px 35px;
        border-radius: 30px;
        font-weight: 700;
        text-decoration: none;
        transition: var(--transition);
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .college-banner a:hover {
        background: var(--green-accent);
        color: var(--bg-white);
        transform: translateY(-3px);
    }

    @media (max-width: 992px) {
        .cm-grid-main, .cm-grid-3, .cm-grid-4 {
            grid-template-columns: repeat(2, 1fr);
        }
        .cm-multi-person {
            flex-direction: column;
            gap: 30px;
        }
    }
    @media (max-width: 768px) {
        .cm-grid-main, .cm-grid-3, .cm-grid-4 {
            grid-template-columns: 1fr;
        }
        .committee-page-wrap {
            padding: 50px 5%;
        }
    }
</style>

<div class="committee-page-wrap">
    
    <!-- Core Leadership -->
    <div class="cm-section-title">
        <h2>Leadership</h2>
        <div class="cm-line"></div>
    </div>
    
    <div class="cm-grid-main">
        <div class="cm-card" style="border-top: 4px solid var(--green-accent);">
            <div><span class="cm-role-badge green">Chief - Patron</span></div>
            <h4 class="cm-name">Dr. P. Wilson</h4>
            <p class="cm-desc">Principal & Secretary, MCC</p>
        </div>
        
        <div class="cm-card" style="border-top: 4px solid var(--teal-accent);">
            <div><span class="cm-role-badge teal">Patrons</span></div>
            <div class="cm-multi-person">
                <div class="cm-person">
                    <h4 class="cm-name" style="font-size: 1.2rem;">Mr. R. Sridhar</h4>
                    <p class="cm-desc" style="font-size: 0.95rem;">Vice Principal (Administration), MCC</p>
                </div>
                <div class="cm-person">
                    <h4 class="cm-name" style="font-size: 1.2rem;">Dr. J. Jannet Vennila</h4>
                    <p class="cm-desc" style="font-size: 0.95rem;">Vice Principal (SFS), MCC</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Organizing Leadership -->
    <div class="cm-grid-main">
        <div class="cm-card" style="border-top: 4px solid var(--navy-dark);">
            <div><span class="cm-role-badge">Convenor</span></div>
            <h4 class="cm-name">Dr. V. Mahalakshmi</h4>
            <p class="cm-desc">Associate Professor & Head,<br>Department of Microbiology</p>
        </div>
        
        <div class="cm-card" style="border-top: 4px solid var(--navy-dark);">
            <div><span class="cm-role-badge">Organizing Secretaries</span></div>
            <div class="cm-multi-person">
                <div class="cm-person">
                    <h4 class="cm-name" style="font-size: 1.2rem;">Dr. S. Niren Andrew</h4>
                    <p class="cm-desc" style="font-size: 0.95rem;">Assistant Professor, Dept of Microbiology</p>
                </div>
                <div class="cm-person">
                    <h4 class="cm-name" style="font-size: 1.2rem;">Dr. K. Kavitha</h4>
                    <p class="cm-desc" style="font-size: 0.95rem;">Associate Professor, Dept of Microbiology</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Organizing Committee -->
    <div class="cm-section-title">
        <h2>Organizing Committee</h2>
        <div class="cm-line"></div>
    </div>
    
    <div class="cm-grid-4">
        <div class="cm-card">
            <h4 class="cm-name" style="font-size: 1.2rem;">Dr. S. Premina</h4>
            <p class="cm-desc" style="font-size: 0.9rem;">Assistant Professor</p>
        </div>
        <div class="cm-card">
            <h4 class="cm-name" style="font-size: 1.2rem;">Dr. S. Abirami</h4>
            <p class="cm-desc" style="font-size: 0.9rem;">Assistant Professor</p>
        </div>
        <div class="cm-card">
            <h4 class="cm-name" style="font-size: 1.2rem;">Dr. P. Hanumantha Rao</h4>
            <p class="cm-desc" style="font-size: 0.9rem;">Associate Professor</p>
        </div>
        <div class="cm-card">
            <h4 class="cm-name" style="font-size: 1.2rem;">Dr. T. Sathish Kumar</h4>
            <p class="cm-desc" style="font-size: 0.9rem;">Associate Professor</p>
        </div>
        <div class="cm-card">
            <h4 class="cm-name" style="font-size: 1.2rem;">Dr. V. Vedha</h4>
            <p class="cm-desc" style="font-size: 0.9rem;">Assistant Professor</p>
        </div>
        <div class="cm-card">
            <h4 class="cm-name" style="font-size: 1.2rem;">Dr. K. Balakumar</h4>
            <p class="cm-desc" style="font-size: 0.9rem;">Assistant Professor</p>
        </div>
        <div class="cm-card">
            <h4 class="cm-name" style="font-size: 1.2rem;">Dr. Neginah Vijayasingh</h4>
            <p class="cm-desc" style="font-size: 0.9rem;">Assistant Professor</p>
        </div>
    </div>

    <!-- Advisory Committee -->
    <div class="cm-section-title">
        <h2>Advisory Committee</h2>
        <div class="cm-line"></div>
    </div>
    
    <div class="cm-grid-3">
        <div class="cm-card">
            <div class="cm-icon"><i class="fa-solid fa-user-shield"></i></div>
            <h4 class="cm-name">Dr. S. Vincent</h4>
            <p class="cm-desc">Member Secretary, Tamil Nadu State Council for Science and Technology.</p>
        </div>
        <div class="cm-card">
            <div class="cm-icon"><i class="fa-solid fa-user-shield"></i></div>
            <h4 class="cm-name">Dr. D. Alex Anand</h4>
            <p class="cm-desc">Associate Professor, Department of Bioinformatics & The Centre for Molecular Data Science</p>
        </div>
        <div class="cm-card">
            <div class="cm-icon"><i class="fa-solid fa-user-shield"></i></div>
            <h4 class="cm-name">Dr. Joyce Sudandara Priya</h4>
            <p class="cm-desc">Head, Department of Botany, MCC.</p>
        </div>
    </div>

    <!-- Venue / College Info -->
    <div class="college-banner mt-60">
        <h3>Madras Christian College</h3>
        <p><i class="fa-solid fa-location-dot" style="margin-right: 8px;"></i> Tambaram East, Chennai 600 059</p>
        <a href="https://mcc.edu.in" target="_blank">Visit Website <i class="fa-solid fa-arrow-right" style="margin-left: 8px;"></i></a>
    </div>

</div>

@include('sections.footer')

@endsection
