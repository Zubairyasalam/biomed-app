@extends('layouts.app')

@section('content')

@include('sections.topbar')
@include('sections.navbar')

<!-- Banner Section -->
<section class="plenary-banner">
    <div class="container">
        <h1>PLENARY SPEAKERS</h1>
    </div>
</section>

<!-- Plenary Speakers Extended Grid -->
<section class="plenary-section" style="padding: 60px 0; background: #fafafa;">
    <div class="container">
        <div class="plenary-grid">

            <div class="speaker-card-extended">
                <div class="speaker-photo-wrap">
                    <img src="{{ asset('images/speakers/speaker1.png') }}" alt="Boris N. Chichkov">
                </div>
                <div class="speaker-body-extended">
                    <h4>Boris N. Chichkov</h4>
                    <p class="speaker-hindex">H-Index: 103</p>
                    <p class="speaker-uni">Leibniz University Hannover</p>
                    <p class="speaker-country-text">Germany</p>
                    <p class="speaker-title-text" style="color: var(--teal-accent); font-style: italic; margin-bottom: 15px;">Title: Laser printing of cells</p>
                    
                    <p class="speaker-bio">He graduated with honors and received PhD in Physics from Moscow Institute of Physics and Technology in 1981. He started his scientific carrier at P.N...</p>
                    <div class="full-bio" style="display:none;">He graduated with honors and received PhD in Physics from Moscow Institute of Physics and Technology in 1981. He started his scientific carrier at P.N. Lebedev Institute of Physics, Russian Academy of Sciences in Moscow and later worked in many research centers worldwide. At present, he is Professor of Physics at Leibniz University Hannover, Institute of Quantum Optics and Chair of Nanoengineering. In 2024 he received the Julius Springer Prize for Applied Physics.</div>
                    
                    <a href="javascript:void(0)" onclick="openBioModal(this)" class="btn-show-more">SHOW MORE</a>
                </div>
            </div>

            <div class="speaker-card-extended">
                <div class="speaker-photo-wrap">
                    <img src="{{ asset('images/speakers/speaker2.png') }}" alt="Iwao Ojima">
                </div>
                <div class="speaker-body-extended">
                    <h4>Iwao Ojima</h4>
                    <p class="speaker-hindex">H-Index: 93</p>
                    <p class="speaker-uni">Stony Brook University</p>
                    <p class="speaker-country-text">United States</p>
                    <p class="speaker-title-text" style="color: var(--teal-accent); font-style: italic; margin-bottom: 15px;">Title: TBA</p>
                    
                    <p class="speaker-bio">Iwao Ojima received his B.S. (1968), M.S. (1970), and Ph.D. (1973) degrees from the University of Tokyo, Japan. He joined the Sagami Institute of Che...</p>
                    <div class="full-bio" style="display:none;">Iwao Ojima received his B.S. (1968), M.S. (1970), and Ph.D. (1973) degrees from the University of Tokyo, Japan. He joined the Sagami Institute of Chemical Research. His full extended biography detailing his numerous awards and contributions to organic synthesis and medicinal chemistry will be updated shortly.</div>
                    
                    <a href="javascript:void(0)" onclick="openBioModal(this)" class="btn-show-more">SHOW MORE</a>
                </div>
            </div>

            <div class="speaker-card-extended">
                <div class="speaker-photo-wrap">
                    <img src="{{ asset('images/speakers/speaker3.png') }}" alt="Shahnaz Mansouri">
                </div>
                <div class="speaker-body-extended">
                    <h4>Shahnaz Mansouri</h4>
                    <p class="speaker-uni">Monash University</p>
                    <p class="speaker-country-text">Australia</p>
                    <p class="speaker-title-text" style="color: var(--teal-accent); font-style: italic; margin-bottom: 15px;">Title: Emerging Food Cultivation and Printing Technologies for Food Security and Personalization</p>
                    
                    <p class="speaker-bio">Dr Shahnaz Mansouri is a Senior Lecturer in the School of Chemistry, Faculty of Science, Monash University, with a background in Chemical and Process ...</p>
                    <div class="full-bio" style="display:none;">Dr Shahnaz Mansouri is a Senior Lecturer in the School of Chemistry, Faculty of Science, Monash University, with a background in Chemical and Process Engineering. Her research focuses on innovative technologies such as emerging food cultivation and 3D printing technologies aimed at enhancing food security and enabling personalized nutrition.</div>
                    
                    <a href="javascript:void(0)" onclick="openBioModal(this)" class="btn-show-more">SHOW MORE</a>
                </div>
            </div>

            <div class="speaker-card-extended">
                <div class="speaker-photo-wrap">
                    <img src="{{ asset('images/speakers/speaker4.png') }}" alt="Jingwei Xie">
                </div>
                <div class="speaker-body-extended">
                    <h4>Jingwei Xie</h4>
                    <p class="speaker-hindex">H-Index: 68</p>
                    <p class="speaker-uni">University of Nebraska Medical Center</p>
                    <p class="speaker-country-text">United States</p>
                    <p class="speaker-title-text" style="color: var(--teal-accent); font-style: italic; margin-bottom: 15px;">Title: Emerging Nanofiber Materials for Biomedical Applications</p>
                    
                    <p class="speaker-bio">Jingwei Xie received his B.S. (1999) and M.S. (2002) from Nanjing University of Technology, China, and his Ph.D. from the National University of Singa...</p>
                    <div class="full-bio" style="display:none;">Jingwei Xie received his B.S. (1999) and M.S. (2002) from Nanjing University of Technology, China, and his Ph.D. from the National University of Singapore. His laboratory specializes in the development of emerging nanofiber materials with profound applications in the biomedical field, including tissue engineering and regenerative medicine.</div>
                    
                    <a href="javascript:void(0)" onclick="openBioModal(this)" class="btn-show-more">SHOW MORE</a>
                </div>
            </div>

            <div class="speaker-card-extended">
                <div class="speaker-photo-wrap">
                    <img src="{{ asset('images/speakers/speaker5.png') }}" alt="Thomas J. Webster">
                </div>
                <div class="speaker-body-extended">
                    <h4>Thomas J. Webster</h4>
                    <p class="speaker-hindex">H-Index: 137</p>
                    <p class="speaker-uni">Hebei University of Technology</p>
                    <p class="speaker-country-text">China</p>
                    <p class="speaker-title-text" style="color: var(--teal-accent); font-style: italic; margin-bottom: 15px;">Title: Ensuring Implant Success in Humans Using Nanomedicine: Over 45,000 Patients and Still Counting</p>
                    
                    <p class="speaker-bio">Thomas J. Webster's (H index: 137) degrees are in chemical engineering from the University of Pittsburgh (B.S., 1995; USA) and in biomedical enginee...</p>
                    <div class="full-bio" style="display:none;">Thomas J. Webster's (H index: 137) degrees are in chemical engineering from the University of Pittsburgh (B.S., 1995; USA) and in biomedical engineering from RPI (Ph.D., 2000; USA). He has pioneered the use of nanomedicine for ensuring implant success, directing research that has translated to over 45,000 successful patient implantations to date.</div>
                    
                    <a href="javascript:void(0)" onclick="openBioModal(this)" class="btn-show-more">SHOW MORE</a>
                </div>
            </div>

            <div class="speaker-card-extended">
                <div class="speaker-photo-wrap">
                    <img src="{{ asset('images/speakers/speaker6.png') }}" alt="Richard Spontak">
                </div>
                <div class="speaker-body-extended">
                    <h4>Richard Spontak</h4>
                    <p class="speaker-hindex">H-Index: 68</p>
                    <p class="speaker-uni">North Carolina State University</p>
                    <p class="speaker-country-text">United States</p>
                    <p class="speaker-title-text" style="color: var(--teal-accent); font-style: italic; margin-bottom: 15px;">Title: TBA</p>
                    
                    <p class="speaker-bio">Will be update soon...</p>
                    <div class="full-bio" style="display:none;">Will be updated soon. Richard Spontak's extensive biography and scientific background will be available closer to the summit date.</div>
                    
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

// Close if clicked outside
window.onclick = function(event) {
    var modal = document.getElementById('bioModal');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
</script>

@include('sections.footer')

@endsection
