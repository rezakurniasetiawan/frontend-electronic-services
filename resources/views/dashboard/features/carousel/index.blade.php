@extends('dashboard.layouts.app')
@section('contents')
    <div class="card">
        <div class="card-body">
            <div class="row mb-4 align-items-center">
                <div class="col">
                    <h5 class="card-title fw-semibold mb-0">Carousel</h5>
                </div>
                <div class="col text-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCarouselModal">Add New
                        Carousel</button>
                </div>
            </div>
            @foreach ($carousel as $item)
                <div class="card">
                    <div class="card-header">
                        Carousel {{ ($carousel->currentPage() - 1) * $carousel->perPage() + $loop->index + 1 }}
                    </div>
                    <div class="card-body d-flex flex-column flex-md-row">
                        <img src="{{ $item->image_carousel }}" class="img-fluid rounded mb-3 mb-md-0 me-md-3" alt="Image"
                            style="width: 100%; max-width: 210px; height: auto;">
                        <div>
                            <h5 class="card-title">{{ $item->title_carousel }}</h5>
                            <p class="card-text">{{ $item->description_carousel }}</p>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#editCarouselModal" data-id="{{ $item->id_carousel }}"
                                data-title="{{ $item->title_carousel }}"
                                data-description="{{ $item->description_carousel }}"
                                data-image="{{ $item->image_carousel }}" data-link = "{{ $item->link_carousel }}">
                                <i class="ti ti-pencil"></i> Edit Carousel
                            </a>
                            <button class="btn btn-danger btn-delete" data-bs-toggle="modal"
                                data-bs-target="#deleteCarouselModal" data-id="{{ $item->id_carousel }}">
                                <i class="ti ti-trash"></i> Hapus Carousel
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center align-items-center mt-3">
                <div>
                    {{ $carousel->onEachSide(1)->links('pagination::bootstrap-4') }}
                </div>
            </div>

        </div>
    </div>
    @include('dashboard.features.carousel.modal.add_carousel')
    @include('dashboard.features.carousel.modal.update_carousel')
    @include('dashboard.features.carousel.modal.delete_carousel')
@endsection
