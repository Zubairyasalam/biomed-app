@extends('layouts.app')

@section('content')

@include('sections.topbar')
@include('sections.navbar')


<!-- Content Section -->
<section class="guidelines-section" style="padding: 60px 0; background: #fff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        
        <div style="text-align: center; margin-bottom: 40px;">
            <h2 style="font-size: 2.2rem; font-weight: 600; color: #333; margin-bottom: 15px;">Abstract Submission Guidelines</h2>
            <div style="width: 150px; height: 2px; background: #0000FF; margin: 0 auto;"></div>
        </div>

        <div class="guidelines-content" style="color: #333; font-size: 1.15rem; line-height: 1.6; font-family: Arial, Helvetica, sans-serif;">
            <p style="margin-bottom: 15px;">Please follow the guidelines below to ensure your abstract is accepted and accurately processed for review:</p>
            
            <ul style="list-style-type: disc; padding-left: 30px;">
                <li style="margin-bottom: 10px;">All abstracts must be submitted exclusively through the official online submission system. Submissions via email, fax, or postal services will not be accepted.</li>
                <li style="margin-bottom: 10px;">Abstracts must be written in English and submitted in either .doc/.docx or PDF format, with a maximum word count of 500 words.</li>
                <li style="margin-bottom: 10px;">The presenting author is responsible for ensuring ethical compliance, obtaining any necessary approvals, and confirming the accuracy of the content.</li>
                <li style="margin-bottom: 10px;">Upon submission, an automated confirmation email will be sent, containing your unique abstract ID. This ID must be referenced in any future communication.</li>
                <li style="margin-bottom: 10px;">If you need to make changes to a submitted abstract, a written request must be sent to the conference team at least 60 days prior to the summit date.</li>
                <li style="margin-bottom: 10px;">All abstracts will undergo a scientific review process. Based on quality and relevance, submissions will be selected for oral or poster presentation.</li>
                <li style="margin-bottom: 10px;">Authors will be notified of the acceptance status and presentation format via email within 7 working days from the date of submission.</li>
                <li style="margin-bottom: 10px;">Presentation format requirements: All oral presenters must use Microsoft PowerPoint. Meeting rooms are equipped with digital projection systems only.</li>
                <li style="margin-bottom: 10px;">In cases where research is supported by industry or a funding organization, a conflict of interest declaration must be included at the bottom of the abstract.</li>
                <li style="margin-bottom: 10px;">A maximum of two abstracts per presenting author will be allowed due to program scheduling constraints.</li>
                <li style="margin-bottom: 10px;">Please ensure your abstract is proofread and finalized before submission. While we reserve the right to make editorial corrections, abstracts may be published as submitted.</li>
                <li style="margin-bottom: 10px;">Clearly indicate whether you are submitting for an oral or poster presentation.</li>
                <li style="margin-bottom: 10px;">While we encourage authors to choose the most relevant topic category, the Scientific Committee retains the right to assign the final topic classification.</li>
            </ul>
        </div>
        
    </div>
</section>

@include('sections.footer')

@endsection
