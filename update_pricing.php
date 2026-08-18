<?php
// Update registration fees: set offline (price_inr) and online prices from the fee table image

require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use Illuminate\Support\Facades\DB;

$fees = [
    'Student'          => ['offline' => '1,000', 'online' => '1,500'],
    'Research Scholar' => ['offline' => '1,500', 'online' => '2,000'],
    'Faculty'          => ['offline' => '2,000', 'online' => '3,000'],
    'Faculty/Scientist'=> ['offline' => '2,000', 'online' => '3,000'],
    'Industry'         => ['offline' => '5,000', 'online' => null],
    'Industrialists'   => ['offline' => '5,000', 'online' => null],
];

$rows = DB::table('registration_fees')->get();
foreach ($rows as $row) {
    foreach ($fees as $key => $prices) {
        if (stripos($row->category_name, $key) !== false || stripos($key, $row->category_name) !== false) {
            DB::table('registration_fees')->where('id', $row->id)->update([
                'price_inr'    => $prices['offline'],
                'price_online' => $prices['online'],
            ]);
            echo "Updated: {$row->category_name} → Offline: {$prices['offline']}, Online: " . ($prices['online'] ?? '—') . "\n";
            break;
        }
    }
}
echo "Done.\n";
