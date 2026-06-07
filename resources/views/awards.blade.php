@extends('layouts.app')

@section('content')

@include('sections.topbar')
@include('sections.navbar')

<!-- Banner Section -->
<section class="plenary-banner">
    <div class="container">
        <h1 style="text-transform: uppercase;">AWARDS</h1>
    </div>
</section>

<style>
    .awards-container {
        padding: 60px 20px;
        max-width: 1100px;
        margin: 0 auto;
        font-family: Arial, Helvetica, sans-serif;
        color: #444;
        background: #fff;
    }

    .awards-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .awards-header h2 {
        font-size: 2.2rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 15px;
    }

    .awards-header p {
        font-size: 1.15rem;
        color: #555;
        margin-top: 20px;
    }

    .awards-intro {
        font-size: 0.95rem;
        line-height: 1.7;
        margin-bottom: 50px;
        text-align: justify;
    }

    .award-section {
        margin-bottom: 60px;
    }

    .award-title-center {
        text-align: center;
        font-size: 1.8rem;
        font-weight: 700;
        color: #111;
        margin-bottom: 30px;
    }

    .award-subtitle {
        font-size: 1.25rem;
        font-weight: 700;
        color: #222;
        margin-bottom: 15px;
        margin-top: 20px;
    }

    .award-list {
        list-style: none;
        padding-left: 10px;
        margin-bottom: 25px;
    }

    .award-list li {
        margin-bottom: 8px;
        font-size: 0.95rem;
        line-height: 1.5;
        display: flex;
        align-items: flex-start;
        gap: 8px;
    }
    
    .award-list.bullets li::before {
        content: "•";
        font-weight: bold;
        font-size: 1.2rem;
        line-height: 1;
        margin-top: 2px;
    }

    .award-list.checks li::before {
        content: "\2713"; /* Checkmark */
        font-weight: bold;
        color: #333;
    }

    .award-divider {
        height: 1px;
        background: #eee;
        margin: 25px 0;
    }
</style>

<section class="awards-container">
    <div class="awards-header">
        <h2><i class="fa-solid fa-award" style="color: #333; margin-right: 10px;"></i> Biomed Summit – INNOVEX Awards</h2>
        <div style="width: 100px; height: 2px; background: #0000FF; margin: 0 auto;"></div>
        <p>A Worldwide Recognition Platform For Today's Leading Innovators And Experts.</p>
    </div>

    <div class="awards-intro">
        At Biomed Summit, we celebrate the spirit of research and innovation across all fields by honoring individuals who make meaningful contributions to global progress. To foster advancement and recognize excellence, we proudly present exclusive awards to outstanding contributors during our international conferences.
    </div>

    <!-- Visual Cards from Homepage -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 40px; justify-content: center; max-width: 1000px; margin: 0 auto 60px auto;">
        
        <!-- Award 1 -->
        <div style="background: linear-gradient(145deg, #f8fbfa, #ffffff); padding: 50px 40px; border-radius: 20px; display: flex; flex-direction: column; align-items: center; text-align: center; box-shadow: 0 15px 40px rgba(0,0,0,0.05); border: 1px solid rgba(0, 150, 136, 0.1); position: relative; overflow: hidden;">
            <!-- Ribbon accent -->
            <div style="position: absolute; top: 0; right: 40px; width: 40px; height: 60px; background-color: #009688; clip-path: polygon(100% 0, 100% 100%, 50% 80%, 0 100%, 0 0);"></div>
            
            <div style="width: 100px; height: 100px; border-radius: 50%; background: linear-gradient(135deg, rgba(255, 215, 0, 0.2), rgba(255, 215, 0, 0.05)); display: flex; justify-content: center; align-items: center; margin-bottom: 30px;">
                <i class="fa-solid fa-trophy" style="font-size: 3.5rem; color: #fbc02d;"></i>
            </div>
            <h3 style="margin: 0 0 15px 0; color: #333; font-size: 1.8rem; font-weight: 800;">Young Scientist Award</h3>
            <p style="margin: 0; color: #666; font-size: 1.15rem; line-height: 1.6;">Awarded to outstanding young researchers demonstrating exceptional problem-solving and innovation.</p>
            <a href="#young-scientist" style="margin-top: 25px; color: #009688; font-weight: bold; text-decoration: none; display: flex; align-items: center; gap: 5px;">View Guidelines <i class="fa-solid fa-arrow-down"></i></a>
        </div>

        <!-- Award 2 -->
        <div style="background: linear-gradient(145deg, #f8fbfa, #ffffff); padding: 50px 40px; border-radius: 20px; display: flex; flex-direction: column; align-items: center; text-align: center; box-shadow: 0 15px 40px rgba(0,0,0,0.05); border: 1px solid rgba(0, 150, 136, 0.1); position: relative; overflow: hidden;">
            <!-- Ribbon accent -->
            <div style="position: absolute; top: 0; right: 40px; width: 40px; height: 60px; background-color: #009688; clip-path: polygon(100% 0, 100% 100%, 50% 80%, 0 100%, 0 0);"></div>
            
            <div style="width: 100px; height: 100px; border-radius: 50%; background: linear-gradient(135deg, rgba(255, 215, 0, 0.2), rgba(255, 215, 0, 0.05)); display: flex; justify-content: center; align-items: center; margin-bottom: 30px;">
                <i class="fa-solid fa-medal" style="font-size: 3.5rem; color: #fbc02d;"></i>
            </div>
            <h3 style="margin: 0 0 15px 0; color: #333; font-size: 1.8rem; font-weight: 800;">Best Poster Award</h3>
            <p style="margin: 0; color: #666; font-size: 1.15rem; line-height: 1.6;">Awarded for outstanding visual communication, scientific clarity, and overall presentation impact.</p>
            <a href="#best-poster" style="margin-top: 25px; color: #009688; font-weight: bold; text-decoration: none; display: flex; align-items: center; gap: 5px;">View Guidelines <i class="fa-solid fa-arrow-down"></i></a>
        </div>

    </div>

    <!-- Section 1: Best Poster Award -->
    <div class="award-section" id="best-poster" style="scroll-margin-top: 100px;">
        <h3 class="award-title-center">Best Poster Award</h3>
        
        <h4 class="award-subtitle">Poster Presentation Award Benefits</h4>
        <ul class="award-list bullets">
            <li><span><strong>Top 3 posters</strong> will receive <strong>certificates, medals, and public recognition.</strong></span></li>
            <li><span>Winners get <strong>free registration</strong> for the next upcoming Summit.</span></li>
            <li><span>Opportunity to <strong>publish full paper in indexed journals</strong> with <strong>discounted processing charges.</strong></span></li>
            <li><span>Awardees will be <strong>featured on Biomed Summit' website & social medias.</strong></span></li>
        </ul>

        <div class="award-divider"></div>

        <h4 class="award-subtitle">Eligibility</h4>
        <ul class="award-list checks">
            <li><span>All Live posters are eligible for the Best Poster Award.</span></li>
            <li><span>The <strong>first author must present</strong> the poster during the live session.</span></li>
            <li><span>Poster must align with the summit's themes in <strong>Technology or Education.</strong></span></li>
            <li><span>Poster should be <strong>original, unpublished,</strong> and research-based.</span></li>
            <li><span>Group submissions are allowed; award will be given to the <strong>main presenter.</strong></span></li>
        </ul>

        <div class="award-divider"></div>

        <h4 class="award-subtitle">Guidelines For Best Poster Awards</h4>
        <ul class="award-list checks">
            <li><span>Submit an <strong>abstract as first author through</strong> the official portal.</span></li>
            <li><span>Poster format: <strong>A1 size (portrait)</strong> with clear sections — Title, Abstract, Methods, Results, Conclusion.</span></li>
            <li><span>Ensure <strong>visual clarity, readable fonts, and structured content.</strong></span></li>
            <li><span>All accepted posters are <strong>automatically considered</strong> for the award.</span></li>
            <li><span>Judging based on: originality, content clarity, educational relevance, visual design, and overall presentation impact.</span></li>
            <li><span>Winners will be announced during the <strong>closing ceremony</strong> and listed in the <strong>event proceedings.</strong></span></li>
        </ul>
    </div>

    <!-- Section 2: Young Scientist Award -->
    <div class="award-section" id="young-scientist" style="scroll-margin-top: 100px;">
        <h3 class="award-title-center">Young Scientist Award</h3>
        
        <h4 class="award-subtitle">Award Benefits</h4>
        <ul class="award-list bullets">
            <li><span>Two outstanding young researchers will be awarded during the closing ceremony.</span></li>
            <li><span>Winners receive a certificate of excellence and trophy.</span></li>
            <li><span>Free registration for the next upcoming Summit.</span></li>
            <li><span>Publishing opportunity in indexed journals at discounted processing charges.</span></li>
            <li><span>Featured on Biomed Summit' official website and Social medias.</span></li>
        </ul>

        <div class="award-divider"></div>

        <h4 class="award-subtitle">Eligibility</h4>
        <ul class="award-list checks">
            <li><span>Open to researchers <strong>35 years or younger</strong> as of the conference date.</span></li>
            <li><span>Must submit an <strong>abstract as first author</strong> through the official submission system.</span></li>
            <li><span>Must deliver a <strong>live oral presentation</strong> at the conference.</span></li>
            <li><span>Research must be <strong>original, unpublished, and align with summit themes.</strong></span></li>
            <li><span>Affiliation with a <strong>recognized institution or research body</strong> is required.</span></li>
        </ul>

        <div class="award-divider"></div>

        <h4 class="award-subtitle">Guidelines For Young Scientist Award</h4>
        <h4 class="award-subtitle" style="margin-top: -5px;">Award Benefits</h4>
        <ul class="award-list bullets">
            <li><span>Abstract and full presentation must <strong>reflect independent, high-quality research.</strong></span></li>
            <li><span>Presentation must be in <strong>oral format</strong> only (poster submissions are not eligible).</span></li>
            <li><span>Submissions should demonstrate <strong>problem-solving, innovation, and impact.</strong></span></li>
            <li><span>Two awardees will be selected by an <strong>expert scientific panel.</strong></span></li>
            <li><span>Judging based on: originality, methodology, research relevance, presentation skills, and scientific impact.</span></li>
        </ul>
    </div>

</section>

@include('sections.footer')

@endsection
