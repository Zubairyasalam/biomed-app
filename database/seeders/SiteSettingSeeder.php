<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\SiteSetting;

class SiteSettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // Contact Info
            ['key' => 'contact_email', 'value' => 'info@biomedsummit2027.com', 'group' => 'contact', 'type' => 'text', 'label' => 'Contact Email'],
            ['key' => 'contact_phone', 'value' => '+91 9876543210', 'group' => 'contact', 'type' => 'text', 'label' => 'Contact Phone'],
            ['key' => 'contact_address', 'value' => 'Madras Christian College, Tambaram, Chennai', 'group' => 'contact', 'type' => 'text', 'label' => 'Address'],
            ['key' => 'topbar_format', 'value' => 'Online | In-person', 'group' => 'contact', 'type' => 'text', 'label' => 'Event Format (Topbar)'],

            // Hero Section
            ['key' => 'hero_title', 'value' => "Next-Generation Diagnostics\nFor Emerging Infectious Diseases", 'group' => 'hero', 'type' => 'textarea', 'label' => 'Main Heading'],
            ['key' => 'hero_subtitle', 'value' => 'International Conference 2027', 'group' => 'hero', 'type' => 'text', 'label' => 'Subtitle'],
            ['key' => 'hero_organized_by', 'value' => 'Organized by Department of Microbiology', 'group' => 'hero', 'type' => 'text', 'label' => 'Organized By'],
            ['key' => 'hero_dates', 'value' => 'September 15-17, 2027', 'group' => 'hero', 'type' => 'text', 'label' => 'Event Dates'],
            ['key' => 'hero_location', 'value' => 'Madras Christian College, Chennai', 'group' => 'hero', 'type' => 'text', 'label' => 'Event Location'],

            // About Section
            ['key' => 'about_conference', 'value' => "The Department of Microbiology is delighted to announce this two-day conference on Next-Generation Diagnostics for Emerging Infectious Diseases.\n\nThis conference aims to foster meaningful scientific exchange, inspire innovation, and strengthen collaboration toward the future of diagnostic microbiology and infectious disease management.\n\nThe event will bring together leading experts, researchers, clinicians, and young scientists to explore the evolving landscape of infectious disease diagnostics, with a special focus on foundational and emerging technologies.", 'group' => 'about', 'type' => 'textarea', 'label' => 'About Conference'],
            ['key' => 'about_mission', 'value' => "To connect researchers, thought leaders, and institutions through impactful events that inspire knowledge-sharing and real-world solutions.", 'group' => 'about', 'type' => 'textarea', 'label' => 'Our Mission'],
            ['key' => 'about_vision', 'value' => "To build a global platform that showcases research, fosters collaboration, and drives innovation across disciplines.", 'group' => 'about', 'type' => 'textarea', 'label' => 'Our Vision'],
            ['key' => 'about_mcc', 'value' => "Madras Christian College (MCC) is one of India’s premier educational institutions, founded by Scottish missionaries in 1837. Over the years, it has evolved into an institution committed to academic excellence, spiritual vitality, and social relevance.\n\nIn 2018, MCC was re-accredited by NAAC with an 'A' Grade and ranks 14th in the NIRF rankings, reflecting its high academic standards, robust research output, and unwavering dedication to quality education.\n\nMCC established the MCC Boyd-Tandon School of Business in 2016 with the vision of providing world-class business education. The Centre for Computational Informatics serves as a research hub dedicated to advancing computational science through cutting-edge research, impactful collaborations, and hands-on training.\n\nTo further strengthen innovation and entrepreneurship, MCC launched the Institution’s Innovation Council in 2020 and the MCC-MRF Innovation Park (MMIP) in 2021. These initiatives foster advanced research, support innovation-driven startups, and nurture the next generation of entrepreneurs.", 'group' => 'about', 'type' => 'textarea', 'label' => 'About Madras Christian College'],
            ['key' => 'about_dept', 'value' => "The Department of Microbiology at Madras Christian College (MCC) was established in 2002 and has earned recognition for its academic excellence, leadership development, and commitment to research and social relevance.\n\nThe department offers a dynamic curriculum designed to equip students with the knowledge and skills required to explore emerging opportunities in the field of Microbiology, preparing them for both research and industry careers.\n\nSince 2018, the department has been a full-fledged research unit offering Ph.D. programmes in Microbiology and Applied Microbiology. Research activities span diverse disciplines within Microbiology, including areas aligned with the conference themes and emerging scientific developments.\n\nThe department is widely recognized for its strong industry-academia collaborations, faculty and student-driven innovations, active research contributions, and a culture that encourages intellectual property creation and patent development.", 'group' => 'about', 'type' => 'textarea', 'label' => 'About Department of Microbiology'],
            
            // MCC Stats
            ['key' => 'mcc_stat1_title', 'value' => '1837', 'group' => 'about', 'type' => 'text', 'label' => 'MCC Stat 1 (Title)'],
            ['key' => 'mcc_stat1_sub', 'value' => 'Founded In', 'group' => 'about', 'type' => 'text', 'label' => 'MCC Stat 1 (Subtitle)'],
            ['key' => 'mcc_stat2_title', 'value' => "'A' Grade", 'group' => 'about', 'type' => 'text', 'label' => 'MCC Stat 2 (Title)'],
            ['key' => 'mcc_stat2_sub', 'value' => 'NAAC Accredited', 'group' => 'about', 'type' => 'text', 'label' => 'MCC Stat 2 (Subtitle)'],
            ['key' => 'mcc_stat3_title', 'value' => 'Rank 14', 'group' => 'about', 'type' => 'text', 'label' => 'MCC Stat 3 (Title)'],
            ['key' => 'mcc_stat3_sub', 'value' => 'NIRF Rankings', 'group' => 'about', 'type' => 'text', 'label' => 'MCC Stat 3 (Subtitle)'],
            
            // Participants Section
            ['key' => 'participants_desc', 'value' => "We invite a diverse community of professionals and aspiring researchers to join the conversation and contribute to the future of diagnostic microbiology.", 'group' => 'participants', 'type' => 'textarea', 'label' => 'Section Description'],
            ['key' => 'participant_1', 'value' => "Undergraduate &\nPostgraduate Students", 'group' => 'participants', 'type' => 'textarea', 'label' => 'Participant Type 1'],
            ['key' => 'participant_2', 'value' => "Research\nScholars", 'group' => 'participants', 'type' => 'textarea', 'label' => 'Participant Type 2'],
            ['key' => 'participant_3', 'value' => "Faculty &\nScientists", 'group' => 'participants', 'type' => 'textarea', 'label' => 'Participant Type 3'],
            ['key' => 'participant_4', 'value' => "Academicians", 'group' => 'participants', 'type' => 'text', 'label' => 'Participant Type 4'],
            ['key' => 'participant_5', 'value' => "Industrialists", 'group' => 'participants', 'type' => 'text', 'label' => 'Participant Type 5'],

            // Workshop Section
            ['key' => 'workshop_title', 'value' => "Hands-On Metagenomics", 'group' => 'workshop', 'type' => 'text', 'label' => 'Main Title'],
            ['key' => 'workshop_desc', 'value' => "Join us for an exclusive one-day hands-on workshop on the day before the main conference. Participants will gain practical skills in metagenomic data analysis—from quality control and community profiling to assembly and visualization using tools like QIIME2 and relevant datasets.\n\nPerfect for students, researchers, and faculty looking to strengthen their bioinformatics toolkit.", 'group' => 'workshop', 'type' => 'textarea', 'label' => 'Description'],
            ['key' => 'workshop_f1_title', 'value' => "Practical Skills", 'group' => 'workshop', 'type' => 'text', 'label' => 'Feature 1 Title'],
            ['key' => 'workshop_f1_desc', 'value' => "Learn quality control, community profiling, and assembly.", 'group' => 'workshop', 'type' => 'text', 'label' => 'Feature 1 Description'],
            ['key' => 'workshop_f2_title', 'value' => "Industry Tools", 'group' => 'workshop', 'type' => 'text', 'label' => 'Feature 2 Title'],
            ['key' => 'workshop_f2_desc', 'value' => "Hands-on visualization using tools like QIIME2 and real datasets.", 'group' => 'workshop', 'type' => 'text', 'label' => 'Feature 2 Description'],
            ['key' => 'workshop_f3_title', 'value' => "Bioinformatics Toolkit", 'group' => 'workshop', 'type' => 'text', 'label' => 'Feature 3 Title'],
            ['key' => 'workshop_f3_desc', 'value' => "Designed specifically for students, researchers, and faculty.", 'group' => 'workshop', 'type' => 'text', 'label' => 'Feature 3 Description'],

            // Thrust Areas
            ['key' => 'thrust_areas_desc', 'value' => 'Explore the latest advancements, critical challenges, and future innovations across our core diagnostic and scientific themes.', 'group' => 'thrust_areas', 'type' => 'textarea', 'label' => 'Section Description'],
            ['key' => 'thrust_1', 'value' => 'Artificial intelligence in infectious disease diagnostics', 'group' => 'thrust_areas', 'type' => 'text', 'label' => 'Theme 1'],
            ['key' => 'thrust_2', 'value' => 'AI in diagnostic microbiology', 'group' => 'thrust_areas', 'type' => 'text', 'label' => 'Theme 2'],
            ['key' => 'thrust_3', 'value' => 'Molecular diagnostics and genomics', 'group' => 'thrust_areas', 'type' => 'text', 'label' => 'Theme 3'],
            ['key' => 'thrust_4', 'value' => 'Digital health and intelligent systems', 'group' => 'thrust_areas', 'type' => 'text', 'label' => 'Theme 4'],
            ['key' => 'thrust_5', 'value' => 'Clinical applications and future directions', 'group' => 'thrust_areas', 'type' => 'text', 'label' => 'Theme 5'],
            ['key' => 'thrust_6', 'value' => 'Antimicrobial resistance and rapid detection', 'group' => 'thrust_areas', 'type' => 'text', 'label' => 'Theme 6'],
            ['key' => 'thrust_7', 'value' => 'Emerging infectious diseases', 'group' => 'thrust_areas', 'type' => 'text', 'label' => 'Theme 7'],
            ['key' => 'thrust_8', 'value' => 'Point-of-care diagnostics', 'group' => 'thrust_areas', 'type' => 'text', 'label' => 'Theme 8'],
            ['key' => 'thrust_9', 'value' => 'Clinical case studies', 'group' => 'thrust_areas', 'type' => 'text', 'label' => 'Theme 9'],

            // Abstract Guidelines
            ['key' => 'abstract_desc_1', 'value' => 'Abstracts are invited for original research work that has not been published or submitted elsewhere.', 'group' => 'abstract', 'type' => 'textarea', 'label' => 'Description Paragraph 1'],
            ['key' => 'abstract_desc_2', 'value' => 'Students, research scholars, faculty members, and industry participants may submit abstracts for <strong>oral and/or poster presentations</strong>.', 'group' => 'abstract', 'type' => 'textarea', 'label' => 'Description Paragraph 2'],
            ['key' => 'abstract_req_font', 'value' => 'Times New Roman, Size 12', 'group' => 'abstract', 'type' => 'text', 'label' => 'Font Requirement'],
            ['key' => 'abstract_req_spacing', 'value' => '1.5 line spacing', 'group' => 'abstract', 'type' => 'text', 'label' => 'Spacing Requirement'],
            ['key' => 'abstract_req_length', 'value' => 'Maximum of 250 words', 'group' => 'abstract', 'type' => 'text', 'label' => 'Length Requirement'],
            ['key' => 'abstract_req_keywords', 'value' => 'Maximum of 5 keywords', 'group' => 'abstract', 'type' => 'text', 'label' => 'Keywords Requirement'],

            // Awards
            ['key' => 'awards_desc', 'value' => 'To recognize outstanding research contributions, we are proud to present awards for the most exceptional presentations at the summit.', 'group' => 'awards', 'type' => 'textarea', 'label' => 'Description'],
            ['key' => 'awards_oral_title', 'value' => 'Best Oral Presentation', 'group' => 'awards', 'type' => 'text', 'label' => 'Oral Award Title'],
            ['key' => 'awards_oral_desc', 'value' => 'Awarded to the most impactful and articulate oral research presentation.', 'group' => 'awards', 'type' => 'text', 'label' => 'Oral Award Description'],
            ['key' => 'awards_poster_title', 'value' => 'Best Poster Award', 'group' => 'awards', 'type' => 'text', 'label' => 'Poster Award Title'],
            ['key' => 'awards_poster_desc', 'value' => 'Awarded for outstanding visual communication and scientific clarity.', 'group' => 'awards', 'type' => 'text', 'label' => 'Poster Award Description'],

            // Venue
            ['key' => 'venue_discover_title', 'value' => 'Discover Madras Christian College', 'group' => 'venue', 'type' => 'text', 'label' => 'Discover Title'],
            ['key' => 'venue_discover_text', 'value' => 'Founded in 1837, Madras Christian College (MCC) is one of Asia\'s oldest and most prestigious academic institutions. Set within a sprawling, lush 320-acre scrub jungle campus in Tambaram, Chennai, MCC offers a serene, intellectually stimulating environment that provides a perfect backdrop for international conferences, global collaboration, and cutting-edge scientific exchange.', 'group' => 'venue', 'type' => 'textarea', 'label' => 'Discover Text'],
            ['key' => 'venue_heritage_title', 'value' => 'A Hub of Heritage & Innovation', 'group' => 'venue', 'type' => 'text', 'label' => 'Heritage Title'],
            ['key' => 'venue_heritage_text', 'value' => 'MCC seamlessly blends a rich historical legacy with modern scientific inquiry. With a profound history of producing renowned scholars, researchers, and global leaders, the institution continues to foster excellence. Its proximity to prominent research hubs in Chennai and its own state-of-the-art facilities make it an ideal meeting point for the BioMed Summit 2027.', 'group' => 'venue', 'type' => 'textarea', 'label' => 'Heritage Text'],
            ['key' => 'venue_biodiversity_title', 'value' => 'Campus Biodiversity & Environment', 'group' => 'venue', 'type' => 'text', 'label' => 'Biodiversity Title'],
            ['key' => 'venue_biodiversity_text', 'value' => 'The MCC campus is a documented sanctuary of rare flora and fauna, providing delegates with a refreshing escape from the urban hustle. During the conference, attendees can enjoy:', 'group' => 'venue', 'type' => 'textarea', 'label' => 'Biodiversity Text'],
            ['key' => 'venue_biodiversity_list', 'value' => "Exploring the expansive, protected scrub jungle ecosystem\nHistoric British-era architectural landmarks seamlessly integrated with modern halls\nA tranquil, pollution-free atmosphere ideal for focused scientific networking\nThe vibrant cultural heritage and traditional South Indian hospitality of Chennai", 'group' => 'venue', 'type' => 'textarea', 'label' => 'Biodiversity Bullets (One per line)'],
            ['key' => 'venue_accessibility_title', 'value' => 'Easy Accessibility', 'group' => 'venue', 'type' => 'text', 'label' => 'Accessibility Title'],
            ['key' => 'venue_accessibility_text', 'value' => 'Located in the bustling metropolis of Chennai, MCC is exceptionally well-connected. It is easily accessible via the Chennai International Airport (MAA), which offers direct flights worldwide. Furthermore, the Tambaram Railway Station and major transit hubs are situated directly opposite the campus, ensuring seamless domestic and international travel for all delegates.', 'group' => 'venue', 'type' => 'textarea', 'label' => 'Accessibility Text'],
            ['key' => 'venue_facilities_title', 'value' => 'World-Class Conference Facilities', 'group' => 'venue', 'type' => 'text', 'label' => 'Facilities Title'],
            ['key' => 'venue_facilities_text', 'value' => 'MCC boasts a wide array of premium venues, including historic grand auditoriums and highly equipped modern smart-halls. With advanced audio-visual technology, high-speed connectivity, and spacious seating, the campus provides a highly professional, comfortable, and accommodating environment for large-scale plenary sessions and specialized workshops alike.', 'group' => 'venue', 'type' => 'textarea', 'label' => 'Facilities Text'],
        ];

        foreach ($settings as $setting) {
            \App\Models\SiteSetting::updateOrCreate(['key' => $setting['key']], $setting);
        }
    }
}
