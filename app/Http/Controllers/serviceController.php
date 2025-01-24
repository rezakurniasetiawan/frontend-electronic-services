<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;

class serviceController extends Controller
{
    public function index()
    {
        $services = Service::paginate(3);
        return view('dashboard.features.service.index', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_name' => 'required',
            'service_description' => 'required',
        ]);

        $data = [
            'service_name' => $request->service_name,
            'service_description' => $request->service_description,
            'service_icon' => 'ti ti-tool',
            'status' => 'active',
        ];

        Service::create($data);
        return redirect()->route('services.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'service_name' => 'required',
            'service_description' => 'required',
        ]);

        $data = [
            'service_name' => $request->service_name,
            'service_description' => $request->service_description,
            'status' => $request->status,
        ];

        Service::where('id_service', $id)->update($data);
        return redirect()->route('services.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        Service::where('id_service', $id)->delete();
        return redirect()->route('services.index')->with('success', 'Data berhasil dihapus');
    }
}
