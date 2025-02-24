<?php

namespace App\Http\Controllers;

use App\Models\setting;
use Illuminate\Http\Request;

class settingController extends Controller
{
    public function index()
    {
        $data = setting::first();
        return view('dashboard.features.setting.index', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Setting::where('id_setting', $id)->first();

        return view('dashboard.features.setting.update_setting', compact('data'));
    }

    public function updated(Request $request, $id)
    {
        // 'address',
        // 'phone',
        // 'email',
        // 'embed_map',

        $request->validate([
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'embed_map' => 'required',
        ]);

        $data = [
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'embed_map' => $request->embed_map,
        ];

        setting::where('id_setting', $id)->update($data);
        return redirect()->route('settings.index')->with('success', 'Data berhasil diubah');
    }
}
