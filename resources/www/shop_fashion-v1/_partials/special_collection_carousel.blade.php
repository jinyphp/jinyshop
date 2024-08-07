<section class="container pb-5 mb-2 mb-sm-3 mb-lg-4 mb-xl-5">
  <div class="d-md-none text-center pb-3 mb-3">
    <p class="mb-2">New arrivals</p>
    <h2 class="mb-0">Meet the Cartzilla collection</h2>
  </div>

  <div class="row align-items-center pb-xxl-3">

    <!-- Preview images (controlled slider) -->
    <div class="col-md-7 order-md-2 mb-4 mb-md-0">
      <div class="swiper user-select-none" id="previewImages" data-swiper='{
        "allowTouchMove": false,
        "loop": true,
        "effect": "fade",
        "fadeEffect": {
          "crossFade": true
        }
      }'>
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="ratio" style="--cz-aspect-ratio: calc(720 / 746 * 100%)">
              <img src="/assets/img/home/fashion/v1/collection/01.jpg" class="rounded-5" alt="Image">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="ratio" style="--cz-aspect-ratio: calc(720 / 746 * 100%)">
              <img src="/assets/img/home/fashion/v1/collection/02.jpg" class="rounded-5" alt="Image">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Products master slider -->
    <div class="col-md-5 order-md-1 text-center">
      <div class="d-none d-md-block pb-3 mb-2 mb-lg-3 mx-auto" style="max-width: 306px">
        <p class="mb-2">New arrivals</p>
        <h2 class="mb-0">Meet the Cartzilla collection</h2>
      </div>
      <div class="d-flex align-items-center justify-content-center">

        <!-- Prev button -->
        <button type="button" class="btn btn-icon btn-outline-secondary animate-slide-start rounded-circle mt-n5" id="collectionPrev" aria-label="Prev">
          <i class="ci-chevron-left fs-lg animate-target"></i>
        </button>

        <!-- Slider -->
        <div class="swiper mx-3 mx-lg-4" data-swiper='{
          "spaceBetween": 24,
          "loop": true,
          "speed": 400,
          "controlSlider": "#previewImages",
          "navigation": {
            "prevEl": "#collectionPrev",
            "nextEl": "#collectionNext"
          }
        }' style="max-width: 306px">
          <div class="swiper-wrapper">

            <!-- Item -->
            <div class="swiper-slide">
              <div class="animate-underline hover-effect-opacity">
                <a class="d-flex bg-body-tertiary rounded p-3 mb-3"
                  href="/shop-product-fashion">
                  <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                    <img src="/assets/img/shop/fashion/03.png" alt="Image">
                  </div>
                </a>
                <div class="nav justify-content-center mb-2">
                  <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0"
                    href="/shop-product-fashion">
                    <span class="text-truncate">Sneakers with a massive sole</span>
                  </a>
                </div>
                <div class="h6 mb-0">$86.50</div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="animate-underline hover-effect-opacity">
                <a class="d-flex bg-body-tertiary rounded p-3 mb-3" href="shop-product-fashion.html">
                  <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                    <img src="/assets/img/shop/fashion/12.png" alt="Image">
                  </div>
                </a>
                <div class="nav justify-content-center mb-2">
                  <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0"
                    href="/shop-product-fashion">
                    <span class="text-truncate">Single breasted oversized blazer</span>
                  </a>
                </div>
                <div class="h6 mb-0">$113.99</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Next button -->
        <button type="button" class="btn btn-icon btn-outline-secondary animate-slide-end rounded-circle mt-n5" id="collectionNext" aria-label="Next">
          <i class="ci-chevron-right fs-lg animate-target"></i>
        </button>
      </div>
    </div>
  </div>
</section>
