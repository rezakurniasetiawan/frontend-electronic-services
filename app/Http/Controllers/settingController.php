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

        setting::where('id', $id)->update($data);
        return redirect()->route('setting.index')->with('success', 'Data berhasil diubah');
    }
}
