<?php

namespace App\Http\Controllers;

use App\Models\testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;

class testimoniController extends Controller
{

    public function saveImage($image, $path = 'public')
    {
        if (!$image) {
            return null;
        }

        $filename = uniqid() . '_' . time() . '.png'; // Menggunakan uniqid() untuk memastikan keunikan
        // Simpan gambar
        Storage::disk($path)->put($filename, base64_decode($image));

        $image->storePubliclyAs('public/person', $filename);

        // Kembalikan path
        return URL::to('/') . '/storage/' . $path . '/' . $filename;
        // return URL::to('/') . '/kurniadev/storage/app/public/' . $path . '/' . $filename;

    }
    public function index()
    {
        $testimoni = testimoni::paginate(5);
        return view('dashboard.features.testimoni.index', compact('testimoni'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_testimoni' => 'required',
            'image_testimoni' => 'required',
            'description_testimoni' => 'required',
        ]);


        $image = $this->saveImage($request->image_testimoni, 'person');

        $data = [
            'name_testimoni' => $request->name_testimoni,
            'image_testimoni' => $image,
            'description_testimoni' => $request->description_testimoni,
            'status_testimoni' => 'active',
        ];



        testimoni::create($data);
        return redirect()->route('testimonials.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function destroy($id)
    {
        testimoni::where('id_testimoni', $id)->delete();
        return redirect()->route('testimonials.index')->with('success', 'Data berhasil dihapus');
    }
}
