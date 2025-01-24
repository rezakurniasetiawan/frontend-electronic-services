<!-- Hero Section -->
<section id="hero" class="hero section">

    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        @foreach ($carousel as $item)
            <div class="carousel-item active">
                <img src="{{ $item->image_carousel }}" alt="">
                <div class="container">
                    <h2>{{ $item->title_carousel }}</h2>
                    <p>{{ $item->description_carousel }}</p>
                    <a href="{{ $item->link_carousel }}" class="btn-get-started">Hubungi Kami</a>
                </div>
            </div><!-- End Carousel Item -->
        @endforeach

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

    </div>

</section><!-- /Hero Section -->
