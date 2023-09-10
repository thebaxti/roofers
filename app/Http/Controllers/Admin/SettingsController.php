<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SettingsController extends Controller
{
    public function index() {
        if ($setting = Setting::all()->first()) {
            return view('admin.settings.site', compact('setting'));
        } else {
            return view('admin.settings.site');
        }
    }

    public function update(Request $request, $id)
    {
        if ($site = Setting::all()->first()) {
            $site->update($request->all());
        } else {
            Setting::create($request->all());
        }
        Alert::success ('Успешно', 'Настройки обновлены!');
        return redirect()->route('settings.index');
    }
}
