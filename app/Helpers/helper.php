<?php


use App\Setting;

if (! function_exists('config_web')) {
    function config_web($configKey, $default = null) {
        $setting = Setting::where('config_key', $configKey)->first();
        if(!empty($setting)) {
            return $setting->config_value;
        }
    }
}