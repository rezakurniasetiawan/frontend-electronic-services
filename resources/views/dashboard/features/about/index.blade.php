@extends('dashboard.layouts.app')
@section('contents')
    <div class="card">
        <div class="card-body">
            <div class="row mb-4 align-items-center">
                <div class="col">
                    <h5 class="card-title fw-semibold mb-0">Tentang Kami</h5>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Tentang Kami
                </div>
                <div class="card-body d-flex flex-wrap">
                    <div class="d-flex justify-content-center w-100 mb-4">
                        <img src="{{ $data->about_image ?? '' }}" class="rounded me-3 img-fluid" alt="Image" id="currentImage"
                            style="width: 600px; height: auto;">
                    </div>
                    <div>
                        <h5 class="card-title">{{ $data->about_title ?? 'Default Title' }}</h5>
                        <p>{{ $data->about_subtitle ?? 'Default Subtitle' }}</p>
                        <hr>
                        <p class="card-text">
                            {{ $data->about_description ?? 'Default Description' }}
                        </p>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editAbout"
                            data-id="{{ $data->id_about ?? '' }}" data-title="{{ $data->about_title ?? '' }}"
                            data-subtitle="{{ $data->about_subtitle ?? '' }}" data-description="{{ $data->about_description ?? '' }}"
                            data-image="{{ $data->about_image ?? '' }}">
                            Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('dashboard.features.about.modal.update_about')
@endsection
