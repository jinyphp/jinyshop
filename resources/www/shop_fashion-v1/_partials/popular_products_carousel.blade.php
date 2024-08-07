<section class="container py-5 my-2 my-sm-3 my-lg-4 my-xl-5">
  <div class="row align-items-lg-center py-xxl-3">

    <!-- Products -->
    <div class="col-md-6 col-xl-5 offset-xl-1 order-md-2 mb-4 mb-md-0">
      <div class="ps-md-3 ps-lg-4 ps-xl-0">
        <div class="d-flex align-items-center justify-content-between pb-4 mb-md-1 mb-lg-2 mb-xl-3">
          <h2 class="me-3 mb-0">Popular products</h2>

          <!-- Slider prev/next buttons -->
          <div class="d-flex gap-2">
            <button type="button" class="btn btn-icon btn-outline-secondary animate-slide-start rounded-circle me-1" id="popularPrev" aria-label="Prev">
              <i class="ci-chevron-left fs-lg animate-target"></i>
            </button>
            <button type="button" class="btn btn-icon btn-outline-secondary animate-slide-end rounded-circle" id="popularNext" aria-label="Next">
              <i class="ci-chevron-right fs-lg animate-target"></i>
            </button>
          </div>
        </div>

        <!-- Products master slider -->
        <div class="swiper" data-swiper='{
          "spaceBetween": 24,
          "loop": true,
          "speed": 400,
          "controlSlider": "#sliderImages",
          "navigation": {
            "prevEl": "#popularPrev",
            "nextEl": "#popularNext"
          }
        }'>
          <div class="swiper-wrapper">

            <!-- Products list slide -->
            <div class="swiper-slide">
              <div class="d-flex flex-column gap-3 gap-lg-4">
                <div class="d-flex align-items-center position-relative bg-body-tertiary rounded overflow-hidden animate-underline">
                  <img src="assets/img/shop/fashion/thumbs/01.png" width="110" alt="Thumbnail">
                  <div class="nav flex-column gap-2 min-w-0 p-3">
                    <a class="nav-link text-dark-emphasis stretched-link w-100 min-w-0 p-0"
                      href="/shop-product-fashion">
                      <span class="animate-target text-truncate">Short jacket in long-pile faux fur</span>
                    </a>
                    <div class="h6 mb-0">$218.00</div>
                  </div>
                </div>
                <div class="d-flex align-items-center position-relative bg-body-tertiary rounded overflow-hidden animate-underline">
                  <img src="assets/img/shop/fashion/thumbs/02.png" width="110" alt="Thumbnail">
                  <div class="nav flex-column gap-2 min-w-0 p-3">
                    <a class="nav-link text-dark-emphasis stretched-link w-100 min-w-0 p-0"
                      href="/shop-product-fashion">
                      <span class="animate-target text-truncate">Women's walking shoes tennis sneakers</span>
                    </a>
                    <div class="h6 mb-0">$54.99</div>
                  </div>
                </div>
                <div class="d-flex align-items-center position-relative bg-body-tertiary rounded overflow-hidden animate-underline">
                  <img src="assets/img/shop/fashion/thumbs/03.png" width="110" alt="Thumbnail">
                  <div class="nav flex-column gap-2 min-w-0 p-3">
                    <a class="nav-link text-dark-emphasis stretched-link w-100 min-w-0 p-0"
                      href="/shop-product-fashion">
                      <span class="animate-target text-truncate">Classic aviator sunglasses for women</span>
                    </a>
                    <div class="h6 mb-0">$76.00</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Products list slide -->
            <div class="swiper-slide">
              <div class="d-flex flex-column gap-3 gap-lg-4">
                <div class="d-flex align-items-center position-relative bg-body-tertiary rounded overflow-hidden animate-underline">
                  <img src="assets/img/shop/fashion/thumbs/04.png" width="110" alt="Thumbnail">
                  <div class="nav flex-column gap-2 min-w-0 p-3">
                    <a class="nav-link text-dark-emphasis stretched-link w-100 min-w-0 p-0"
                      href="/shop-product-fashion">
                      <span class="animate-target text-truncate">Vintage oversized wool blazer jacket</span>
                    </a>
                    <div class="h6 mb-0">$174.00</div>
                  </div>
                </div>
                <div class="d-flex align-items-center position-relative bg-body-tertiary rounded overflow-hidden animate-underline">
                  <img src="assets/img/shop/fashion/thumbs/05.png" width="110" alt="Thumbnail">
                  <div class="nav flex-column gap-2 min-w-0 p-3">
                    <a class="nav-link text-dark-emphasis stretched-link w-100 min-w-0 p-0"
                      href="/shop-product-fashion">
                      <span class="animate-target text-truncate">Classic pilot style polarized sunglasses</span>
                    </a>
                    <div class="h6 mb-0">$93.00</div>
                  </div>
                </div>
                <div class="d-flex align-items-center position-relative bg-body-tertiary rounded overflow-hidden animate-underline">
                  <img src="assets/img/shop/fashion/thumbs/06.png" width="110" alt="Thumbnail">
                  <div class="nav flex-column gap-2 min-w-0 p-3">
                    <a class="nav-link text-dark-emphasis stretched-link w-100 min-w-0 p-0"
                      href="/shop-product-fashion">
                      <span class="animate-target text-truncate">Cotton dress straight-leg pants</span>
                    </a>
                    <div class="h6 mb-0">$65.00</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Complete look images (controlled slider) -->
    <div class="col-md-6 order-md-1">
      <div class="swiper user-select-none" id="sliderImages" data-swiper='{
        "allowTouchMove": false,
        "loop": true,
        "effect": "fade",
        "fadeEffect": {
          "crossFade": true
        }
      }'>
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="ratio d-none d-md-block" style="--cz-aspect-ratio: calc(720 / 636 * 100%)"></div>
            <div class="ratio ratio-4x3 d-md-none"></div>
            <img src="/assets/img/home/fashion/v1/popular/01.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rounded-5" alt="Image">
          </div>
          <div class="swiper-slide">
            <div class="ratio d-none d-md-block" style="--cz-aspect-ratio: calc(720 / 636 * 100%)"></div>
            <div class="ratio ratio-4x3 d-md-none"></div>
            <img src="/assets/img/home/fashion/v1/popular/02.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rounded-5" style="object-position: center top" alt="Image">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
