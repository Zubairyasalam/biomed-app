@extends('layouts.app')

@section('content')

@include('sections.topbar')
@include('sections.navbar')

<!-- Banner Section -->
<section class="plenary-banner">
    <div class="container">
        <h1>INVITED SPEAKERS</h1>
    </div>
</section>

<!-- Speakers Grid -->
<section class="plenary-section" style="padding: 60px 0; background: #fafafa;">
    <div class="container">
        
        <div class="invited-protection-text" style="text-align: center; margin-bottom: 40px; color: var(--text-body); font-size: 1.05rem;">
            The speakers page you are trying to access is protected by Biomed Summit. If you are a registered participant, please use the speaker access link provided by the Program Manager to view all confirmed speakers.
        </div>
        
        <div class="section-header-center" style="margin-bottom: 40px;">
            <h2 class="section-title">Invited <span>Speaker</span></h2>
            <div class="header-line"></div>
            <p class="highlights-subtitle">The Minds Behind The Momentum</p>
        </div>
        
        <div class="plenary-grid">

            <div class="speaker-card-extended">
                <div class="speaker-photo-wrap">
                    <img src="{{ asset('images/speakers/speaker8.png') }}" alt="Tarek Mohamed Kamal Motawi">
                </div>
                <div class="speaker-body-extended">
                    <h4>Tarek Mohamed Kamal Motawi</h4>
                    <p class="speaker-uni">Cairo University</p>
                    <p class="speaker-country-text">Egypt</p>
                    <p class="speaker-title-text" style="color: var(--teal-accent); font-style: italic; margin-bottom: 15px;">Title: TBA</p>
                    
                    <p class="speaker-bio">Will be update soon...</p>
                    <div class="full-bio" style="display:none;">Will be updated soon. Tarek Mohamed Kamal Motawi's extensive biography and scientific background will be available closer to the summit date.</div>
                    
                    <a href="javascript:void(0)" onclick="openBioModal(this)" class="btn-show-more">VIEW MORE</a>
                </div>
            </div>

            <div class="speaker-card-extended">
                <div class="speaker-photo-wrap">
                    <img src="{{ asset('images/speakers/speaker9.png') }}" alt="Cesar Siqueira">
                </div>
                <div class="speaker-body-extended">
                    <h4>Cesar Siqueira</h4>
                    <p class="speaker-uni">Federal University of the State of Rio de Janeiro</p>
                    <p class="speaker-country-text">Brazil</p>
                    <p class="speaker-title-text" style="color: var(--teal-accent); font-style: italic; margin-bottom: 15px;">Title: Plant Protein Biotechnology: Frontiers of Cytotoxicity and the Future of the Pharmaceutical and Food Industries</p>
                    
                    <p class="speaker-bio">Will be update soon...</p>
                    <div class="full-bio" style="display:none;">Will be updated soon. Cesar Siqueira's extensive biography and scientific background will be available closer to the summit date.</div>
                    
                    <a href="javascript:void(0)" onclick="openBioModal(this)" class="btn-show-more">VIEW MORE</a>
                </div>
            </div>

        </div>
        
        <div class="invited-bottom-action" style="margin-top: 50px;">
            <p style="color: var(--text-body); font-size: 1.05rem; margin-bottom: 25px;">
                If you are a new visitor, kindly fill in your basic details below. This verification step helps us maintain the privacy and security of our speakers. Our Program Manager will review your request and provide access if approved.
            </p>
            <div style="text-align: right;">
                <a href="#" class="btn-teal" style="border-radius: 30px; text-decoration: none; font-weight: 600; text-transform: uppercase;">EXPLORE MORE</a>
            </div>
        </div>
        
    </div>
</section>

<!-- Biography Modal -->
<div id="bioModal" class="bio-modal">
    <div class="bio-modal-content">
        <h3 class="bio-modal-title">Biography</h3>
        <div id="bioModalText" class="bio-modal-text"></div>
        <div class="bio-modal-footer">
            <button onclick="closeBioModal()" class="btn-close-modal">Close</button>
        </div>
    </div>
</div>

<style>
.bio-modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    align-items: center;
    justify-content: center;
}
.bio-modal-content {
    background-color: #fff;
    width: 90%;
    max-width: 650px;
    border-radius: 4px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.4);
    padding: 30px;
    position: relative;
    animation: modalFadeIn 0.3s;
}
@keyframes modalFadeIn {
    from {opacity: 0; transform: translateY(-20px);}
    to {opacity: 1; transform: translateY(0);}
}
.bio-modal-title {
    font-size: 1.6rem;
    font-weight: 400;
    color: #333;
    margin-top: 0;
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 1px solid #eee;
}
.bio-modal-text {
    font-size: 1.05rem;
    color: #444;
    line-height: 1.7;
    margin-bottom: 30px;
}
.bio-modal-footer {
    text-align: right;
}
.btn-close-modal {
    background: transparent;
    border: 1px solid #ccc;
    padding: 8px 25px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 0.95rem;
    color: #333;
    transition: all 0.2s;
}
.btn-close-modal:hover {
    background: #f0f0f0;
}
</style>

<script>
function openBioModal(btn) {
    var fullBio = btn.parentElement.querySelector('.full-bio').innerHTML;
    document.getElementById('bioModalText').innerHTML = fullBio;
    document.getElementById('bioModal').style.display = 'flex';
}
function closeBioModal() {
    document.getElementById('bioModal').style.display = 'none';
}
window.onclick = function(event) {
    var modal = document.getElementById('bioModal');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
</script>

@include('sections.footer')

@endsection
