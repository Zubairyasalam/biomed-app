<!-- Topics Of Discussion -->
<section class="topics-section">
    @if(!isset($hideTitle) || !$hideTitle)
    <div class="section-header-center">
        <h2 class="section-title">Topics Of <span>Discussion</span></h2>
        <div class="header-line"></div>
        <p class="highlights-subtitle">Science That Shapes Tomorrow's World</p>
    </div>
    @endif
    <div class="topics-grid">
        <div class="topics-card">
            <ul class="topic-list">
                <li><i class="fa-solid fa-circle-check"></i> Biomedical Imaging</li>
                <li><i class="fa-solid fa-circle-check"></i> AI and Robotics in Healthcare</li>
                <li><i class="fa-solid fa-circle-check"></i> Telemedicine and Remote Health Monitoring</li>
                <li><i class="fa-solid fa-circle-check"></i> Synthetic Biology and Bioengineering</li>
                <li><i class="fa-solid fa-circle-check"></i> Nanomedicine and Nanobiotechnology</li>
                <li><i class="fa-solid fa-circle-check"></i> Clinical Trials and Therapeutic Innovations</li>
            </ul>
        </div>
        <div class="topics-card">
            <ul class="topic-list">
                <li><i class="fa-solid fa-circle-check"></i> Biomedical Signal Processing</li>
                <li><i class="fa-solid fa-circle-check"></i> Biomedical Data Mining and Machine Learning</li>
                <li><i class="fa-solid fa-circle-check"></i> Wearable Robotics and Exoskeletons</li>
                <li><i class="fa-solid fa-circle-check"></i> Cellular Bioengineering</li>
                <li><i class="fa-solid fa-circle-check"></i> Drug Discovery & Delivery</li>
                <li><i class="fa-solid fa-circle-check"></i> Epigenetics and Gene Editing Technologies</li>
                <li><i class="fa-solid fa-circle-check"></i> Advanced Medical Imaging Modalities</li>
            </ul>
        </div>
        <div class="topics-card">
            <ul class="topic-list">
                <li><i class="fa-solid fa-circle-check"></i> Biomedical Engineering</li>
                <li><i class="fa-solid fa-circle-check"></i> Biomedical Imaging and Signal Processing</li>
                <li><i class="fa-solid fa-circle-check"></i> Medical Robotics and Automation</li>
                <li><i class="fa-solid fa-circle-check"></i> Tissue Engineering</li>
                <li><i class="fa-solid fa-circle-check"></i> Biofabrication and 3D Bioprinting Technologies</li>
                <li><i class="fa-solid fa-circle-check"></i> Pharmaceutical Engineering</li>
                <li><i class="fa-solid fa-circle-check"></i> Point-of-Care Diagnostic Technologies</li>
            </ul>
        </div>
    </div>
    <div class="text-center mt-30">
        <a href="{{ route('submit-paper') }}" class="btn btn-green">Submit Abstract</a>
    </div>
</section>
