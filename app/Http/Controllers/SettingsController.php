<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function displaySettings() {
        return view('settings.settings');
    }
}
