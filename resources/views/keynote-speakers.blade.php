@extends('layouts.app')

@section('content')

@include('sections.topbar')
@include('sections.navbar')

<!-- Banner Section -->
<section class="plenary-banner">
    <div class="container">
        <h1>KEYNOTE SPEAKERS</h1>
    </div>
</section>

<!-- Speakers Grid -->
<section class="plenary-section" style="padding: 60px 0; background: #fafafa;">
    <div class="container">
        <div class="plenary-grid">

            <div class="speaker-card-extended">
                <div class="speaker-photo-wrap">
                    <img src="{{ asset('images/speakers/speaker7.png') }}" alt="Hans-Uwe Dahms">
                </div>
                <div class="speaker-body-extended">
                    <h4>Hans-Uwe Dahms</h4>
                    <p class="speaker-uni">Kaohsiung Medical University</p>
                    <p class="speaker-country-text">Taiwan</p>
                    <p class="speaker-title-text" style="color: var(--teal-accent); font-style: italic; margin-bottom: 15px;">Title: Fluorescent nano-sensors for selective and ultra-sensitive detection of trace metals</p>
                    
                    <p class="speaker-bio">Professor Hans-Uwe Dahms is a distinguished faculty member within the Department of Biomedical Science and Environmental Biology at Kaohsiung Medical ...</p>
                    <div class="full-bio" style="display:none;">Professor Hans-Uwe Dahms is a distinguished faculty member within the Department of Biomedical Science and Environmental Biology at Kaohsiung Medical University, Taiwan. His prolific career focuses on ecotoxicology and environmental health, with extensive publications detailing the environmental impacts of trace metals.</div>
                    
                    <a href="javascript:void(0)" onclick="openBioModal(this)" class="btn-show-more">SHOW MORE</a>
                </div>
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
