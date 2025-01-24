@extends('dashboard.layouts.app')
@section('contents')
    <div class="card">
        <div class="card-body">
            <div class="row mb-4 align-items-center">
                <div class="col">
                    <h5 class="card-title fw-semibold mb-0">Jasa Layanan</h5>
                </div>
                <div class="col text-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addServiceModal">Tambah
                        Layanan</button>
                </div>
            </div>
            @foreach ($services as $item)
                <div class="card">
                    <div class="card-header">
                        Layanan {{ ($services->currentPage() - 1) * $services->perPage() + $loop->index + 1 }}
                    </div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">{{ $item->service_name }} </h5>

                            <p class="card-text">{{ $item->service_description }}</p>
                            <a href="#" class="btn btn-primary btn-edit-layanan" data-bs-toggle="modal"
                                data-bs-target="#editServiceModal" data-id="{{ $item->id_service }}"
                                data-name="{{ $item->service_name }}" data-description="{{ $item->service_description }}"
                                data-status="{{ $item->status }}">
                                <i class="ti ti-pencil"></i> Edit Layanan
                            </a>

                            <button class="btn btn-danger btn-delete-layanan" data-bs-toggle="modal"
                                data-bs-target="#deleteServiceModal" data-id="{{ $item->id_service }}">
                                <i class="ti ti-trash"></i> Hapus Layanan
                            </button>
                        </div>
                        <div class="text-center">
                            <i class="{{ $item->service_icon }}" style="font-size: 45px;"></i>
                            <div>
                                <span
                                    class="badge mt-4 {{ $item->status == 'active' ? 'bg-primary' : 'bg-danger' }}">{{ $item->status }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center align-items-center mt-3">
                <div>
                    {{ $services->onEachSide(1)->links('pagination::bootstrap-4') }}
                </div>
            </div>

        </div>
    </div>

    @include('dashboard.features.service.modal.add_service')
    @include('dashboard.features.service.modal.update_service')
    @include('dashboard.features.service.modal.delete_service')
@endsection
