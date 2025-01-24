<?php

namespace App\Http\Controllers;

use App\Models\about;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class aboutController extends Controller
{

    public function saveImage($image, $path = 'public')
    {
        if (!$image) {
            return null;
        }

        $filename = uniqid() . '_' . time() . '.png'; // Menggunakan uniqid() untuk memastikan keunikan
        // Simpan gambar
        Storage::disk($path)->put($filename, base64_decode($image));

        $image->storePubliclyAs('public/about', $filename);

        // Kembalikan path
        // return URL::to('/') . '/storage/' . $path . '/' . $filename;
        return URL::to('/') . '/frontend-electronic-services/storage/app/public/' . $path . '/' . $filename;
    }

    public function index()
    {
        $data = about::first();
        return view('dashboard.features.about.index', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'about_title' => 'required',
            'about_subtitle' => 'required',
            'about_description' => 'required',
        ]);

        $image = $this->saveImage($request->about_image, 'about');

        $data = [
            'about_title' => $request->about_title,
            'about_subtitle' => $request->about_subtitle,
            'about_description' => $request->about_description,
            'about_image' => $image,
        ];

        about::where('id_about', $id)->update($data);
        return redirect()->route('about.index')->with('success', 'Data berhasil diubah');
    }
}
