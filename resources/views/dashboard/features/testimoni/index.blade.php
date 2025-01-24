@extends('dashboard.layouts.app')
@section('contents')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-4">
                        <h5 class="card-title fw-semibold">Testimoni</h5>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addTestimoniModal">
                            <i class="fas fa-plus"></i> Tambah Testimoni
                        </button>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">No.</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Nama</h6>
                                    </th>
                                    <th class="border-bottom-0" style="width: 20%;">
                                        <h6 class="fw-semibold mb-0">Testimoni</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Status</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Aksi</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimoni as $item)
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6>
                                        </td>
                                        <td class="border-bottom-0 d-flex align-items-center gap-2">
                                            <img src="{{ asset($item->image_testimoni) }}" alt="{{ $item->name_testimoni }}"
                                                class="rounded-circle" width="40" height="40">
                                            <h6 class="fw-semibold mb-1">{{ $item->name_testimoni }}</h6>
                                        </td>
                                        <td class="border-bottom-0" style="width: 20%;">
                                            <p class="mb-0 fw-normal">{{ $item->description_testimoni }}</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center gap-2">
                                                <span
                                                    class="badge bg-primary rounded-3 fw-semibold">{{ $item->status_testimoni }}</span>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            <form action="{{ route('testimonials.destroy', $item->id_testimoni) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('dashboard.features.testimoni.modal.add_testimoni')
    @include('dashboard.features.testimoni.modal.delete_testimoni')
@endsection
