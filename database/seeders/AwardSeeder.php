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
        $awards = [
            [
                'name' => 'Young Scientist Award',
                'icon' => 'fa-solid fa-trophy',
                'icon_color' => '#fbc02d',
                'short_description' => 'Awarded to outstanding young researchers demonstrating exceptional problem-solving and innovation.',
                'benefits' => "Two outstanding young researchers will be awarded during the closing ceremony.
Winners receive a certificate of excellence and trophy.
Free registration for the next upcoming Summit.
Publishing opportunity in indexed journals at discounted processing charges.
Featured on Biomed Summit' official website and Social medias.",
                'eligibility' => "Open to researchers <strong>35 years or younger</strong> as of the conference date.
Must submit an <strong>abstract as first author</strong> through the official submission system.
Must deliver a <strong>live oral presentation</strong> at the conference.
Research must be <strong>original, unpublished, and align with summit themes.</strong>
Affiliation with a <strong>recognized institution or research body</strong> is required.",
                'guidelines' => "Abstract and full presentation must <strong>reflect independent, high-quality research.</strong>
Presentation must be in <strong>oral format</strong> only (poster submissions are not eligible).
Submissions should demonstrate <strong>problem-solving, innovation, and impact.</strong>
Two awardees will be selected by an <strong>expert scientific panel.</strong>
Judging based on: originality, methodology, research relevance, presentation skills, and scientific impact.",
                'sort_order' => 1
            ],
            [
                'name' => 'Best Poster Award',
                'icon' => 'fa-solid fa-medal',
                'icon_color' => '#fbc02d',
                'short_description' => 'Awarded for outstanding visual communication, scientific clarity, and overall presentation impact.',
                'benefits' => "<strong>Top 3 posters</strong> will receive <strong>certificates, medals, and public recognition.</strong>
Winners get <strong>free registration</strong> for the next upcoming Summit.
Opportunity to <strong>publish full paper in indexed journals</strong> with <strong>discounted processing charges.</strong>
Awardees will be <strong>featured on Biomed Summit' website & social medias.</strong>",
                'eligibility' => "All Live posters are eligible for the Best Poster Award.
The <strong>first author must present</strong> the poster during the live session.
Poster must align with the summit's themes in <strong>Technology or Education.</strong>
Poster should be <strong>original, unpublished,</strong> and research-based.
Group submissions are allowed; award will be given to the <strong>main presenter.</strong>",
                'guidelines' => "Submit an <strong>abstract as first author through</strong> the official portal.
Poster format: <strong>A1 size (portrait)</strong> with clear sections — Title, Abstract, Methods, Results, Conclusion.
Ensure <strong>visual clarity, readable fonts, and structured content.</strong>
All accepted posters are <strong>automatically considered</strong> for the award.
Judging based on: originality, content clarity, educational relevance, visual design, and overall presentation impact.
Winners will be announced during the <strong>closing ceremony</strong> and listed in the <strong>event proceedings.</strong>",
                'sort_order' => 2
            ]
        ];

        foreach ($awards as $award) {
            \App\Models\Award::create($award);
        }
    }
}
