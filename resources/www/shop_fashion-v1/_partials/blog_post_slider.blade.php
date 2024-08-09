<!-- Contributors' posts slider -->
<div class="py-5 my-1 my-sm-2 my-md-3 my-lg-4 my-xl-5">

    <div class="d-flex align-items-center justify-content-between mb-4">
        <h2 class="h3 mb-0">
            best Post
        </h2>
        <div class="d-flex gap-2">
            <button type="button" id="prev-post"
                class="btn btn-prev btn-icon btn-outline-secondary rounded-circle animate-slide-start me-1"
                aria-label="Prev">
                <i class="ci-chevron-left fs-lg animate-target"></i>
            </button>
            <button type="button" id="next-post"
                class="btn btn-next btn-icon btn-outline-secondary rounded-circle animate-slide-end" aria-label="Next">
                <i class="ci-chevron-right fs-lg animate-target"></i>
            </button>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-0 overflow-hidden rounded-5">

        <!-- Binded images (controlled slider) -->
        <div class="col order-md-2 user-select-none">
            <div class="swiper h-100" id="images"
                data-swiper='{
"allowTouchMove": false,
"loop": true,
"effect": "fade"
}'>
                <div class="swiper-wrapper">
                    @foreach ($rows as $item)
                    <div class="swiper-slide">
                        <div class="ratio ratio-16x9"></div>
                        <img src="{{$item->image}}"
                            class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                            alt="{{$item->title}}">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Text slider -->
        <div class="col bg-dark order-md-1 py-5 px-4 px-sm-5" data-bs-theme="dark">
            <div class="swiper py-sm-2 py-md-3 my-xl-2 my-xxl-3"
                data-swiper='{
"spaceBetween": 40,
"loop": true,
"speed": 400,
"controlSlider": "#images",
"navigation": {
"prevEl": "#prev-post",
"nextEl": "#next-post"
}
}'>
                <div class="swiper-wrapper">
                    @foreach ($rows as $item)
                    <div class="swiper-slide">
                        <h3 class="h5">{{$item->title}}</h3>
                        <p class="text-body fs-sm pb-4">Charitable contributions are a vital aspect of
                            building a better world. These contributions come in various forms,
                            including monetary donations, volunteering time, providing expertise...</p>
                        <a class="btn btn-outline-light" href="blog-single-v1.html">Read more</a>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
