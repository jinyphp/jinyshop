<div class="alert alert-dismissible bg-dark text-white rounded-0 py-2 px-0 m-0 fade show"
	data-bs-theme="dark">
    <div class="container position-relative d-flex min-w-0">
        <div class="d-flex flex-nowrap align-items-center g-2 w-100 min-w-0 mx-auto mt-n1"
			style="max-width: 458px">
            <div class="nav me-2">
                <button type="button" class="nav-link fs-lg p-0" id="topbarPrev" aria-label="Prev">
                    <i class="ci-chevron-left"></i>
                </button>
            </div>
            <div class="swiper fs-sm text-white"
                data-swiper='{
        "spaceBetween": 24,
        "loop": true,
        "autoplay": {
          "delay": 5000,
          "disableOnInteraction": false
        },
        "navigation": {
          "prevEl": "#topbarPrev",
          "nextEl": "#topbarNext"
        }
      }'>
                <div class="swiper-wrapper min-w-0">
					@foreach($rows as $item)
                    <div class="swiper-slide text-truncate text-center">
						{!! $item->title !!}
					</div>
					@endforeach
                </div>
            </div>
            <div class="nav ms-2">
                <button type="button" class="nav-link fs-lg p-0" id="topbarNext" aria-label="Next">
                    <i class="ci-chevron-right"></i>
                </button>
            </div>
        </div>
        <button type="button"
			class="btn-close position-static flex-shrink-0 p-1 ms-3 ms-md-n4"
			data-bs-dismiss="alert"
            aria-label="Close">
		</button>
    </div>
</div>
