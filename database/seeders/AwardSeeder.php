<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AwardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Text Content
        $intro = "At Biomed Summit, we celebrate the spirit of research and innovation across all fields by honoring individuals who make meaningful contributions to global progress. To foster advancement and recognize excellence, we proudly present exclusive awards to outstanding contributors during our international conferences.";
        
        \App\Models\SiteSetting::updateOrCreate(
            ['group' => 'awards_page', 'key' => 'awards_intro'], 
            ['type' => 'textarea', 'label' => 'Intro Paragraph', 'value' => $intro]
        );

        // 2. Awards
        \App\Models\Award::truncate();
        $awards = [
            [
                'name' => 'Global One Health Distinguished Researcher Award',
                'icon' => 'fa-solid fa-award',
                'icon_color' => '#fbc02d',
                'short_description' => 'Honoring pioneering scientists making outstanding contributions to the One Health paradigm.',
                'benefits' => "Recipient receives a prestigious trophy, certificate of distinction, and public recognition during the opening ceremony.
Opportunity to deliver a special guest address.
Featured spotlight in the conference proceedings and official media.",
                'eligibility' => "Open to senior researchers, academicians, or practitioners with 10+ years of active contribution in One Health related disciplines.
Requires nomination or self-nomination with a brief portfolio submission.",
                'guidelines' => "Portfolio should outline key research impacts, publications, policy contributions, or translational innovations.
Reviewed and selected by the International Scientific Advisory Board.",
                'sort_order' => 1
            ],
            [
                'name' => 'Young Scientist Award',
                'icon' => 'fa-solid fa-user-astronaut',
                'icon_color' => '#009688',
                'short_description' => 'Recognizing early-career researchers demonstrating exceptional creativity and scientific excellence.',
                'benefits' => "Winners receive a certificate of excellence and a trophy.
Free registration for the next upcoming confluence.
Featured showcase on the official website.",
                'eligibility' => "Open to researchers aged 35 or younger as of the conference date.
Must be the first author and presenter of the submitted abstract.",
                'guidelines' => "Must deliver a live presentation during the dedicated Young Researchers Forum.
Judged on scientific rigor, presentation style, and domain impact.",
                'sort_order' => 2
            ],
            [
                'name' => 'Emerging Innovator Award',
                'icon' => 'fa-solid fa-lightbulb',
                'icon_color' => '#f97316',
                'short_description' => 'Celebrating breakthrough ideas and technologies addressing global sustainability challenges.',
                'benefits' => "Certificate of innovation and innovator trophy.
Mentorship opportunities with industry experts.
Direct entry to pitch in front of potential startup incubation partners.",
                'eligibility' => "Open to students, researchers, or startups presenting original innovative models, devices, or methods.",
                'guidelines' => "Pitch deck or prototype demonstration required during the Innovation & Start-up Showcase.",
                'sort_order' => 3
            ],
            [
                'name' => 'Best Oral Presentation',
                'icon' => 'fa-solid fa-chalkboard-user',
                'icon_color' => '#3B82F6',
                'short_description' => 'Awarded for the most impactful and articulate oral research delivery.',
                'benefits' => "Best Oral Presentation certificate and medal.
Opportunity for publication in partner Scopus-indexed journals.",
                'eligibility' => "All accepted oral presentations are automatically eligible.",
                'guidelines' => "Evaluated by session chairs based on methodology, slide quality, presentation clarity, and Q&A handling.",
                'sort_order' => 4
            ],
            [
                'name' => 'Best Poster Presentation',
                'icon' => 'fa-solid fa-image',
                'icon_color' => '#84cc16',
                'short_description' => 'Recognizing outstanding visual layout, structured data, and scientific clarity.',
                'benefits' => "Best Poster certificate and medal.
Feature in the conference digital gallery.",
                'eligibility' => "All accepted poster presentations are automatically eligible.",
                'guidelines' => "Poster size: standard A1 portrait. Must be present at the poster station during evaluation hours.",
                'sort_order' => 5
            ],
            [
                'name' => 'Best Innovation Pitch',
                'icon' => 'fa-solid fa-bullhorn',
                'icon_color' => '#ec4899',
                'short_description' => 'Honoring the most compelling and translation-ready business/research pitch.',
                'benefits' => "Innovation Pitch winner certificate and cash prize / trophy.
Incubation support opportunities.",
                'eligibility' => "Participants of the Hackathon or Innovation Pitch Competition.",
                'guidelines' => "Judged on market feasibility, technical feasibility, sustainability impact, and pitch quality.",
                'sort_order' => 6
            ],
            [
                'name' => 'Best Student Research Award',
                'icon' => 'fa-solid fa-graduation-cap',
                'icon_color' => '#a855f7',
                'short_description' => 'Encouraging outstanding academic research and dedication among students.',
                'benefits' => "Student Research Excellence certificate and cash prize / gift voucher.",
                'eligibility' => "Open exclusively to undergraduate and postgraduate students presenting their own research work.",
                'guidelines' => "Work must be certified by the head of the department or research supervisor as student-led.",
                'sort_order' => 7
            ]
        ];
 
        foreach ($awards as $award) {
            \App\Models\Award::create($award);
        }
    }
}
