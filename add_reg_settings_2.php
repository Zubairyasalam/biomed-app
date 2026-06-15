<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$settings = [
    ['key' => 'reg_consent_text', 'label' => 'Consent Checkbox Text', 'value' => 'By clicking "Proceed to Pay", I agree to the <a href="#" style="color: var(--teal-accent); font-weight: 600;">Privacy Policy</a>, <a href="#" style="color: var(--teal-accent); font-weight: 600;">Terms & Conditions</a> and <a href="#" style="color: var(--teal-accent); font-weight: 600;">Cancellation Policy</a>.', 'type' => 'textarea', 'group' => 'registration'],
    ['key' => 'reg_button_text', 'label' => 'Submit Button Text', 'value' => 'Proceed to Pay', 'type' => 'text', 'group' => 'registration']
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
