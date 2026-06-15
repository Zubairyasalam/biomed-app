<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$settings = [
    ['key' => 'reg_category_title', 'label' => 'Category Section Title', 'value' => 'Select Category', 'type' => 'text', 'group' => 'registration'],
    ['key' => 'reg_summary_title', 'label' => 'Order Summary Title', 'value' => 'Order Summary', 'type' => 'text', 'group' => 'registration'],
    ['key' => 'reg_total_text', 'label' => 'Total Amount Text', 'value' => 'Total Amount:', 'type' => 'text', 'group' => 'registration'],
    ['key' => 'reg_payment_title', 'label' => 'Payment Method Title', 'value' => 'Payment Method', 'type' => 'text', 'group' => 'registration']
];

foreach ($settings as $s) {
    $existing = App\Models\SiteSetting::where('key', $s['key'])->first();
    if (!$existing) {
        $setting = new App\Models\SiteSetting();
        $setting->key = $s['key'];
        $setting->label = $s['label'];
        $setting->value = $s['value'];
        $setting->type = $s['type'];
        $setting->group = $s['group'];
        $setting->save();
    }
}
echo 'Settings inserted.';
