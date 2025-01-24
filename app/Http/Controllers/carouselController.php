<?php

namespace App\Http\Controllers;

use App\Models\carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;

class carouselController extends Controller
{

    public function saveImage($image, $path = 'public')
    {
        if (!$image) {
            return null;
        }

        $filename = uniqid() . '_' . time() . '.png'; // Menggunakan uniqid() untuk memastikan keunikan
        // Simpan gambar
        Storage::disk($path)->put($filename, base64_decode($image));

        $image->storePubliclyAs('public/carousel', $filename);

        // Kembalikan path
        // return URL::to('/') . '/storage/' . $path . '/' . $filename;
        return URL::to('/') . '/frontend-electronic-services/storage/app/public/' . $path . '/' . $filename;

    }

    public function index()
    {
        $carousel = carousel::paginate(5);
        return view('dashboard.features.carousel.index ', compact('carousel'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_carousel' => 'required',
            'description_carousel' => 'required',
            'image_carousel' => 'required',
            'link_carousel' => 'required',
        ]);
        $image = $this->saveImage($request->image_carousel, 'carousel');
        $data = [
            'title_carousel' => $request->title_carousel,
            'description_carousel' => $request->description_carousel,
            'image_carousel' => $image,
            'link_carousel' => $request->link_carousel,
        ];
        carousel::create($data);
        return redirect()->route('carousel.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title_carousel' => 'required',
            'description_carousel' => 'required',
            'link_carousel' => 'required',
        ]);

        $data = [
            'title_carousel' => $request->title_carousel,
            'description_carousel' => $request->description_carousel,
            'link_carousel' => $request->link_carousel,
        ];

        if ($request->image_carousel) {
            $image = $this->saveImage($request->image_carousel, 'carousel');
            $data['image_carousel'] = $image;
        }



        carousel::where('id_carousel', $id)->update($data);
        return redirect()->route('carousel.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        carousel::where('id_carousel', $id)->delete();
        return redirect()->route('carousel.index')->with('success', 'Data berhasil dihapus');
    }
}
