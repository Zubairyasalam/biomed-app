<?php

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\CommitteeMember;

// Clear existing committee records to seed updated list
CommitteeMember::truncate();

$members = [
    // CHIEF PATRON
    [
        'category' => 'leadership',
        'subcategory' => 'chief_patron',
        'name' => 'Dr. P. Wilson',
        'designation' => "Principal & Secretary, MCC",
        'sort_order' => 1
    ],

    // PATRONS
    [
        'category' => 'leadership',
        'subcategory' => 'patrons',
        'name' => 'Mr. R. Sridhar',
        'designation' => "Vice Principal (Administration), MCC",
        'sort_order' => 2
    ],
    [
        'category' => 'leadership',
        'subcategory' => 'patrons',
        'name' => 'Dr. J. Jannet Vennila',
        'designation' => "Vice Principal (SFS), MCC",
        'sort_order' => 3
    ],

    // CONVENORS
    [
        'category' => 'leadership',
        'subcategory' => 'convenor',
        'name' => 'Dr. V. Mahalakshmi',
        'designation' => "Associate Professor & Head, Dept. of Microbiology",
        'sort_order' => 4
    ],
    [
        'category' => 'leadership',
        'subcategory' => 'convenor',
        'name' => 'Dr. Sahila',
        'designation' => "Convenor, MCC",
        'sort_order' => 5
    ],

    // CO-CONVENORS
    [
        'category' => 'leadership',
        'subcategory' => 'co_convenors',
        'name' => 'Dr. Belinda',
        'designation' => "Co-Convenor",
        'sort_order' => 6
    ],
    [
        'category' => 'leadership',
        'subcategory' => 'co_convenors',
        'name' => 'Dr. Beutilyn',
        'designation' => "Co-Convenor",
        'sort_order' => 7
    ],
    [
        'category' => 'leadership',
        'subcategory' => 'co_convenors',
        'name' => 'Heads of Departments',
        'designation' => "Departments of Botany, Chemistry, Social Work & Zoology",
        'sort_order' => 8
    ],
    [
        'category' => 'leadership',
        'subcategory' => 'co_convenors',
        'name' => 'Dr. Premalatha',
        'designation' => "Dean R&D, MCC",
        'sort_order' => 9
    ],
    [
        'category' => 'leadership',
        'subcategory' => 'co_convenors',
        'name' => 'Dean IP',
        'designation' => "Dean International Programmes, MCC",
        'sort_order' => 10
    ],

    // ORGANIZING SECRETARIES
    [
        'category' => 'leadership',
        'subcategory' => 'organizing_secretaries',
        'name' => 'Dr. K. Kavitha',
        'designation' => "Associate Professor, Dept. of Microbiology",
        'sort_order' => 11
    ],
    [
        'category' => 'leadership',
        'subcategory' => 'organizing_secretaries',
        'name' => 'Dr. Bebin',
        'designation' => "Organizing Secretary",
        'sort_order' => 12
    ],

    // ORGANIZING COMMITTEE
    [
        'category' => 'organizing_committee',
        'subcategory' => null,
        'name' => 'Microbiology & Chemistry Faculties',
        'designation' => "Faculty Members, MCC",
        'sort_order' => 13
    ],
    [
        'category' => 'organizing_committee',
        'subcategory' => null,
        'name' => 'Dr. S. Niren Andrew',
        'designation' => "Assistant Professor, Dept. of Microbiology",
        'sort_order' => 14
    ],
    [
        'category' => 'organizing_committee',
        'subcategory' => null,
        'name' => 'Dr. S. Premina',
        'designation' => "Assistant Professor",
        'sort_order' => 15
    ],
    [
        'category' => 'organizing_committee',
        'subcategory' => null,
        'name' => 'Dr. S. Abirami',
        'designation' => "Assistant Professor",
        'sort_order' => 16
    ],
    [
        'category' => 'organizing_committee',
        'subcategory' => null,
        'name' => 'Dr. P. Hanumantha Rao',
        'designation' => "Associate Professor",
        'sort_order' => 17
    ],
    [
        'category' => 'organizing_committee',
        'subcategory' => null,
        'name' => 'Dr. T. Sathish Kumar',
        'designation' => "Associate Professor",
        'sort_order' => 18
    ],
    [
        'category' => 'organizing_committee',
        'subcategory' => null,
        'name' => 'Dr. V. Vedha',
        'designation' => "Assistant Professor",
        'sort_order' => 19
    ],
    [
        'category' => 'organizing_committee',
        'subcategory' => null,
        'name' => 'Dr. K. Balakumar',
        'designation' => "Assistant Professor",
        'sort_order' => 20
    ],
    [
        'category' => 'organizing_committee',
        'subcategory' => null,
        'name' => 'Dr. Neginah Vijayasingh',
        'designation' => "Assistant Professor",
        'sort_order' => 21
    ],
    [
        'category' => 'organizing_committee',
        'subcategory' => null,
        'name' => 'Kalyani',
        'designation' => "Organizing Member",
        'sort_order' => 22
    ],
    [
        'category' => 'organizing_committee',
        'subcategory' => null,
        'name' => 'Senthil Umapathy',
        'designation' => "Organizing Member",
        'sort_order' => 23
    ],
    [
        'category' => 'organizing_committee',
        'subcategory' => null,
        'name' => 'Vijay Solomon',
        'designation' => "Organizing Member",
        'sort_order' => 24
    ],
    [
        'category' => 'organizing_committee',
        'subcategory' => null,
        'name' => 'Anulin',
        'designation' => "Organizing Member",
        'sort_order' => 25
    ],

    // ADVISORY BOARD
    [
        'category' => 'advisory_committee',
        'subcategory' => null,
        'name' => 'Dr. S. Vincent',
        'designation' => "Member Secretary, Tamil Nadu State Council for Science and Technology",
        'sort_order' => 26
    ],
    [
        'category' => 'advisory_committee',
        'subcategory' => null,
        'name' => 'Dr. D. Alex Anand',
        'designation' => "Associate Professor, Department of Bioinformatics & The Centre for Molecular Data Science",
        'sort_order' => 27
    ],
    [
        'category' => 'advisory_committee',
        'subcategory' => null,
        'name' => 'Dr. Joyce Sudandara Priya',
        'designation' => "Head, Department of Botany, MCC",
        'sort_order' => 28
    ],
];

foreach ($members as $data) {
    CommitteeMember::create($data);
}

echo "Successfully reseeded " . count($members) . " committee members.\n";
