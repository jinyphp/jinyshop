<x-www-layout>

  <!-- Page content -->
  <main class="content-wrapper">

    <!-- Hero slider -->
    <section class="bg-body-tertiary min-vh-100 d-flex align-items-center overflow-hidden" style="margin-top: -110px; padding-top: 110px">
      <div class="container h-100 py-5 my-md-2 my-lg-3 my-xl-4 mb-xxl-5">
        <h1 class="display-4 text-center mx-auto mb-4" style="max-width: 680px">Everything You Need for a Modern Interior</h1>
        <div class="row align-items-center justify-content-center gx-3 gx-sm-4 mb-3 mb-sm-4">

          <!-- Prev slide preview (controlled slider) -->
          <div class="col-lg-1 col-xl-2 d-none d-lg-flex justify-content-end">
            <div class="position-relative user-select-none" style="width: 262px">
              <span class="position-absolute top-0 start-0 w-100 h-100 bg-white opacity-50 rounded-circle d-none-dark"></span>
              <span class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-circle d-none-dark d-none d-block-dark" style="opacity: .05"></span>
              <div class="swiper position-relative z-2 opacity-60 rounded-circle pe-none" id="thumbsPrev" data-swiper='{
                "allowTouchMove": false,
                "loop": true,
                "effect": "coverflow",
                "coverflowEffect": {
                  "rotate": 0,
                  "scale": 1.3,
                  "depth": -200,
                  "stretch": -100,
                  "slideShadows": false
                }
              }'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="ratio ratio-1x1">
                      <img src="/assets/img/home/furniture/hero-slider/th04.png" alt="Thumbnail">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="ratio ratio-1x1">
                      <img src="/assets/img/home/furniture/hero-slider/th01.png" alt="Thumbnail">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="ratio ratio-1x1">
                      <img src="/assets/img/home/furniture/hero-slider/th02.png" alt="Thumbnail">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="ratio ratio-1x1">
                      <img src="/assets/img/home/furniture/hero-slider/th03.png" alt="Thumbnail">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Prev button -->
          <div class="col-auto col-sm-1 order-1 order-lg-2 d-flex align-items-center justify-content-center">
            <button type="button" class="btn-prev btn btn-lg btn-icon btn-outline-secondary rounded-circle animate-slide-start" aria-label="Prev">
              <i class="ci-chevron-left fs-xl animate-target"></i>
            </button>
          </div>

          <!-- Main slider -->
          <div class="col-sm-10 col-lg-8 col-xl-6 order-3">
            <div class="swiper user-select-none rounded-pill" data-swiper='{
              "loop": true,
              "grabCursor": true,
              "speed": 600,
              "controlSlider": ["#thumbsPrev", "#thumbsNext", "#captions"],
              "effect": "coverflow",
              "coverflowEffect": {
                "rotate": 0,
                "scale": 1.3,
                "depth": -200,
                "stretch": -100,
                "slideShadows": false
              },
              "navigation": {
                "prevEl": ".btn-prev",
                "nextEl": ".btn-next"
              }
            }'>
              <div class="swiper-wrapper">
                <div class="swiper-slide" data-swiper-binded="#description1">
                  <div class="ratio" style="--cz-aspect-ratio: calc(400 / 636 * 100%)">
                    <img src="/assets/img/home/furniture/hero-slider/01.png" alt="Image">
                  </div>
                </div>
                <div class="swiper-slide" data-swiper-binded="#description2">
                  <div class="ratio" style="--cz-aspect-ratio: calc(400 / 636 * 100%)">
                    <img src="/assets/img/home/furniture/hero-slider/02.png" alt="Image">
                  </div>
                </div>
                <div class="swiper-slide" data-swiper-binded="#description3">
                  <div class="ratio" style="--cz-aspect-ratio: calc(400 / 636 * 100%)">
                    <img src="/assets/img/home/furniture/hero-slider/03.png" alt="Image">
                  </div>
                </div>
                <div class="swiper-slide" data-swiper-binded="#description4">
                  <div class="ratio" style="--cz-aspect-ratio: calc(400 / 636 * 100%)">
                    <img src="/assets/img/home/furniture/hero-slider/04.png" alt="Image">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Next button -->
          <div class="col-auto col-sm-1 order-2 order-sm-3 order-lg-4 d-flex align-items-center justify-content-center">
            <button type="button" class="btn-next btn btn-lg btn-icon btn-outline-secondary rounded-circle animate-slide-end" aria-label="Next">
              <i class="ci-chevron-right fs-xl animate-target"></i>
            </button>
          </div>

          <!-- Next slide preview (controlled slider) -->
          <div class="col-lg-1 col-xl-2 order-lg-5 d-none d-lg-block">
            <div class="position-relative user-select-none" style="width: 262px">
              <span class="position-absolute top-0 start-0 w-100 h-100 bg-white opacity-50 rounded-circle d-none-dark"></span>
              <span class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-circle d-none-dark d-none d-block-dark" style="opacity: .05"></span>
              <div class="swiper position-relative z-2 opacity-60 rounded-circle pe-none" id="thumbsNext" data-swiper='{
                "allowTouchMove": false,
                "loop": true,
                "effect": "coverflow",
                "coverflowEffect": {
                  "rotate": 0,
                  "scale": 1.3,
                  "depth": -200,
                  "stretch": -100,
                  "slideShadows": false
                }
              }'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="ratio ratio-1x1">
                      <img src="/assets/img/home/furniture/hero-slider/th02.png" alt="Thumbnail">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="ratio ratio-1x1">
                      <img src="/assets/img/home/furniture/hero-slider/th03.png" alt="Thumbnail">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="ratio ratio-1x1">
                      <img src="/assets/img/home/furniture/hero-slider/th04.png" alt="Thumbnail">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="ratio ratio-1x1">
                      <img src="/assets/img/home/furniture/hero-slider/th01.png" alt="Thumbnail">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Linked captions (controlled slider) -->
        <div class="swiper" id="captions" data-swiper='{
          "allowTouchMove": false,
          "loop": true,
          "effect": "fade"
        }'>
          <div class="swiper-wrapper">
            <div class="swiper-slide bg-body-tertiary text-center">
              <h3 class="text-secondary-emphasis fs-base fw-normal mb-2">Navy blue low sofa for relaxation</h3>
              <p class="h4 mb-4">$1,250.00</p>
              <a class="btn btn-lg btn-dark rounded-pill" href="shop-product-furniture">
                Shop now
                <i class="ci-chevron-right fs-lg ms-2 me-n2"></i>
              </a>
            </div>
            <div class="swiper-slide bg-body-tertiary text-center">
              <h3 class="text-secondary-emphasis fs-base fw-normal mb-2">Armchair with wooden legs 70x120 cm</h3>
              <p class="h4 mb-4">$269.99</p>
              <a class="btn btn-lg btn-dark rounded-pill" href="shop-product-furniture">
                Shop now
                <i class="ci-chevron-right fs-lg ms-2 me-n2"></i>
              </a>
            </div>
            <div class="swiper-slide bg-body-tertiary text-center">
              <h3 class="text-secondary-emphasis fs-base fw-normal mb-2">Bed frame light gray 140x200 cm</h3>
              <p class="h4 mb-4">$760.00</p>
              <a class="btn btn-lg btn-dark rounded-pill" href="shop-product-furniture">
                Shop now
                <i class="ci-chevron-right fs-lg ms-2 me-n2"></i>
              </a>
            </div>
            <div class="swiper-slide bg-body-tertiary text-center">
              <h3 class="text-secondary-emphasis fs-base fw-normal mb-2">Blue armchair with iron legs</h3>
              <p class="h4 mb-4">$220.00</p>
              <a class="btn btn-lg btn-dark rounded-pill" href="shop-product-furniture">
                Shop now
                <i class="ci-chevron-right fs-lg ms-2 me-n2"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Categories -->
    <section class="container py-5 my-2 my-sm-3 mb-md-2 mt-lg-4 my-xl-5">
      <div class="overflow-x-auto pt-xxl-3" data-simplebar data-simplebar-auto-hide="false">
        <div class="row flex-nowrap flex-md-wrap justify-content-md-center g-0 gap-4 gap-md-0">

          <!-- Category -->
          <div class="col col-md-4 col-lg-3 col-xl-2 mb-4">
            <div class="category-card w-100 text-center px-1 px-lg-2 px-xxl-3 mx-auto" style="min-width: 165px">
              <div class="category-card-body">
                <a class="d-block text-decoration-none" href="shop-catalog-furniture">
                  <div class="bg-body-tertiary rounded-pill mb-3 mx-auto" style="max-width: 164px">
                    <div class="ratio ratio-1x1">
                      <img src="/assets/img/home/furniture/categories/01.png" class="rounded-pill" alt="Image">
                    </div>
                  </div>
                  <h3 class="category-card-title h6 text-truncate">Bedroom</h3>
                </a>
                <ul class="category-card-list nav w-100 flex-column gap-1 pt-3">
                  <li class="w-100">
                    <a class="nav-link justify-content-center min-w-0 w-100 fw-normal hover-effect-underline p-0" href="shop-catalog-furniture">
                      <span class="text-truncate">Beds and mattresses</span>
                    </a>
                  </li>
                  <li class="w-100">
                    <a class="nav-link justify-content-center min-w-0 w-100 fw-normal hover-effect-underline p-0" href="shop-catalog-furniture">
                      <span class="text-truncate">Dressing tables</span>
                    </a>
                  </li>
                  <li class="w-100">
                    <a class="nav-link justify-content-center min-w-0 w-100 fw-normal hover-effect-underline p-0" href="shop-catalog-furniture">
                      <span class="text-truncate">Pillowcases</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Category -->
          <div class="col col-md-4 col-lg-3 col-xl-2 mb-4">
            <div class="category-card w-100 text-center px-1 px-lg-2 px-xxl-3 mx-auto" style="min-width: 165px">
              <div class="category-card-body">
                <a class="d-block text-decoration-none" href="shop-catalog-furniture">
                  <div class="bg-body-tertiary rounded-pill mb-3 mx-auto" style="max-width: 164px">
                    <div class="ratio ratio-1x1">
                      <img src="/assets/img/home/furniture/categories/02.png" class="rounded-pill" alt="Image">
                    </div>
                  </div>
                  <h3 class="category-card-title h6 text-truncate">Living room</h3>
                </a>
                <ul class="category-card-list nav w-100 flex-column gap-1 pt-3">
                  <li class="w-100">
                    <a class="nav-link justify-content-center min-w-0 w-100 fw-normal hover-effect-underline p-0" href="shop-catalog-furniture">
                      <span class="text-truncate">Bookcases and storage</span>
                    </a>
                  </li>
                  <li class="w-100">
                    <a class="nav-link justify-content-center min-w-0 w-100 fw-normal hover-effect-underline p-0" href="shop-catalog-furniture">
                      <span class="text-truncate">Coffee tables</span>
                    </a>
                  </li>
                  <li class="w-100">
                    <a class="nav-link justify-content-center min-w-0 w-100 fw-normal hover-effect-underline p-0" href="shop-catalog-furniture">
                      <span class="text-truncate">Cabinets</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Category -->
          <div class="col col-md-4 col-lg-3 col-xl-2 mb-4">
            <div class="category-card w-100 text-center px-1 px-lg-2 px-xxl-3 mx-auto" style="min-width: 165px">
              <div class="category-card-body">
                <a class="d-block text-decoration-none" href="shop-catalog-furniture">
                  <div class="bg-body-tertiary rounded-pill mb-3 mx-auto" style="max-width: 164px">
                    <div class="ratio ratio-1x1">
                      <img src="/assets/img/home/furniture/categories/03.png" class="rounded-pill" alt="Image">
                    </div>
                  </div>
                  <h3 class="category-card-title h6 text-truncate">Bathroom</h3>
                </a>
                <ul class="category-card-list nav w-100 flex-column gap-1 pt-3">
                  <li class="w-100">
                    <a class="nav-link justify-content-center min-w-0 w-100 fw-normal hover-effect-underline p-0" href="shop-catalog-furniture">
                      <span class="text-truncate">Mirrors</span>
                    </a>
                  </li>
                  <li class="w-100">
                    <a class="nav-link justify-content-center min-w-0 w-100 fw-normal hover-effect-underline p-0" href="shop-catalog-furniture">
                      <span class="text-truncate">Bathroom rugs</span>
                    </a>
                  </li>
                  <li class="w-100">
                    <a class="nav-link justify-content-center min-w-0 w-100 fw-normal hover-effect-underline p-0" href="shop-catalog-furniture">
                      <span class="text-truncate">Bathrobes and slippers</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Category -->
          <div class="col col-md-4 col-lg-3 col-xl-2 mb-4">
            <div class="category-card w-100 text-center px-1 px-lg-2 px-xxl-3 mx-auto" style="min-width: 165px">
              <div class="category-card-body">
                <a class="d-block text-decoration-none" href="shop-catalog-furniture">
                  <div class="bg-body-tertiary rounded-pill mb-3 mx-auto" style="max-width: 164px">
                    <div class="ratio ratio-1x1">
                      <img src="/assets/img/home/furniture/categories/04.png" class="rounded-pill" alt="Image">
                    </div>
                  </div>
                  <h3 class="category-card-title h6 text-truncate">Decoration</h3>
                </a>
                <ul class="category-card-list nav w-100 flex-column gap-1 pt-3">
                  <li class="w-100">
                    <a class="nav-link justify-content-center min-w-0 w-100 fw-normal hover-effect-underline p-0" href="shop-catalog-furniture">
                      <span class="text-truncate">Flowerpots</span>
                    </a>
                  </li>
                  <li class="w-100">
                    <a class="nav-link justify-content-center min-w-0 w-100 fw-normal hover-effect-underline p-0" href="shop-catalog-furniture">
                      <span class="text-truncate">Glassware</span>
                    </a>
                  </li>
                  <li class="w-100">
                    <a class="nav-link justify-content-center min-w-0 w-100 fw-normal hover-effect-underline p-0" href="shop-catalog-furniture">
                      <span class="text-truncate">Home fragrance</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Category -->
          <div class="col col-md-4 col-lg-3 col-xl-2 mb-4">
            <div class="category-card w-100 text-center px-1 px-lg-2 px-xxl-3 mx-auto" style="min-width: 165px">
              <div class="category-card-body">
                <a class="d-block text-decoration-none" href="shop-catalog-furniture">
                  <div class="bg-body-tertiary rounded-pill mb-3 mx-auto" style="max-width: 164px">
                    <div class="ratio ratio-1x1">
                      <img src="/assets/img/home/furniture/categories/05.png" class="rounded-pill" alt="Image">
                    </div>
                  </div>
                  <h3 class="category-card-title h6 text-truncate">Office</h3>
                </a>
                <ul class="category-card-list nav w-100 flex-column gap-1 pt-3">
                  <li class="w-100">
                    <a class="nav-link justify-content-center min-w-0 w-100 fw-normal hover-effect-underline p-0" href="shop-catalog-furniture">
                      <span class="text-truncate">Desks and bureaus</span>
                    </a>
                  </li>
                  <li class="w-100">
                    <a class="nav-link justify-content-center min-w-0 w-100 fw-normal hover-effect-underline p-0" href="shop-catalog-furniture">
                      <span class="text-truncate">Office chairs</span>
                    </a>
                  </li>
                  <li class="w-100">
                    <a class="nav-link justify-content-center min-w-0 w-100 fw-normal hover-effect-underline p-0" href="shop-catalog-furniture">
                      <span class="text-truncate">Filing cabinets</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Category -->
          <div class="col col-md-4 col-lg-3 col-xl-2 mb-4">
            <div class="category-card w-100 text-center px-1 px-lg-2 px-xxl-3 mx-auto" style="min-width: 165px">
              <div class="category-card-body">
                <a class="d-block text-decoration-none" href="shop-catalog-furniture">
                  <div class="bg-body-tertiary rounded-pill mb-3 mx-auto" style="max-width: 164px">
                    <div class="ratio ratio-1x1">
                      <img src="/assets/img/home/furniture/categories/06.png" class="rounded-pill" alt="Image">
                    </div>
                  </div>
                  <h3 class="category-card-title h6 text-truncate">Kitchen</h3>
                </a>
                <ul class="category-card-list nav w-100 flex-column gap-1 pt-3">
                  <li class="w-100">
                    <a class="nav-link justify-content-center min-w-0 w-100 fw-normal hover-effect-underline p-0" href="shop-catalog-furniture">
                      <span class="text-truncate">Cupboards</span>
                    </a>
                  </li>
                  <li class="w-100">
                    <a class="nav-link justify-content-center min-w-0 w-100 fw-normal hover-effect-underline p-0" href="shop-catalog-furniture">
                      <span class="text-truncate">Chest of drawers</span>
                    </a>
                  </li>
                  <li class="w-100">
                    <a class="nav-link justify-content-center min-w-0 w-100 fw-normal hover-effect-underline p-0" href="shop-catalog-furniture">
                      <span class="text-truncate">Dining tables</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Popular products carousel -->
    <section class="container pb-5 mt-md-n2 mb-2 mb-sm-3 mb-md-4 mb-xl-5">

      <!-- Heading -->
      <div class="d-flex align-items-center justify-content-between border-bottom pb-3 pb-md-4">
        <h2 class="h3 mb-0">Popular products</h2>
        <div class="nav ms-3">
          <a class="nav-link animate-underline px-0 py-2" href="shop-catalog-furniture">
            <span class="animate-target">View all</span>
            <i class="ci-chevron-right fs-base ms-1"></i>
          </a>
        </div>
      </div>

      <!-- Product carousel -->
      <div class="position-relative pb-xxl-3">

        <!-- External slider prev/next buttons visible on screens > 500px wide (sm breakpoint) -->
        <button type="button" class="popular-prev btn btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start position-absolute top-50 start-0 z-2 translate-middle mt-n5 d-none d-sm-inline-flex" aria-label="Prev">
          <i class="ci-chevron-left fs-lg animate-target"></i>
        </button>
        <button type="button" class="popular-next btn btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end position-absolute top-50 start-100 z-2 translate-middle mt-n5 d-none d-sm-inline-flex" aria-label="Next">
          <i class="ci-chevron-right fs-lg animate-target"></i>
        </button>

        <!-- Slider -->
        <div class="swiper pt-3 pt-sm-4" data-swiper='{
          "slidesPerView": 2,
          "spaceBetween": 24,
          "loop": true,
          "navigation": {
            "prevEl": ".popular-prev",
            "nextEl": ".popular-next"
          },
          "breakpoints": {
            "768": {
              "slidesPerView": 3
            },
            "992": {
              "slidesPerView": 4
            }
          }
        }'>
          <div class="swiper-wrapper">

            <!-- Item -->
            <div class="swiper-slide">
              <div class="animate-underline">
                <a class="hover-effect-opacity ratio ratio-1x1 d-block mb-3" href="shop-product-furniture">
                  <img src="/assets/img/shop/furniture/04.png" class="hover-effect-target opacity-100" alt="Product">
                  <img src="/assets/img/shop/furniture/04-hover.jpg" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
                </a>
                <div class="d-flex gap-2 mb-3">
                  <input type="radio" class="btn-check" name="colors-4" id="color-4-1" checked>
                  <label for="color-4-1" class="btn btn-color fs-base" style="color: #384043">
                    <span class="visually-hidden">Dark gray</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-4" id="color-4-2">
                  <label for="color-4-2" class="btn btn-color fs-base" style="color: #bdc5da">
                    <span class="visually-hidden">Light gray</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-4" id="color-4-3">
                  <label for="color-4-3" class="btn btn-color fs-base" style="color: #526f99">
                    <span class="visually-hidden">Bluish gray</span>
                  </label>
                </div>
                <h3 class="mb-2">
                  <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture">
                    <span class="animate-target">Bed frame light gray 140x200 cm</span>
                  </a>
                </h3>
                <div class="h6">$760.00</div>
                <div class="d-flex gap-2">
                  <button type="button" class="btn btn-dark w-100 rounded-pill px-3">Add to cart</button>
                  <button type="button" class="btn btn-icon btn-secondary rounded-circle animate-pulse" aria-label="Add to wishlist">
                    <i class="ci-heart fs-base animate-target"></i>
                  </button>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="animate-underline">
                <a class="hover-effect-opacity ratio ratio-1x1 d-block mb-3" href="shop-product-furniture">
                  <img src="/assets/img/shop/furniture/05.png" class="hover-effect-target opacity-100" alt="Product">
                  <img src="/assets/img/shop/furniture/05-hover.jpg" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
                </a>
                <div class="d-flex gap-2 mb-3">
                  <input type="radio" class="btn-check" name="colors-5" id="color-5-1" checked>
                  <label for="color-5-1" class="btn btn-color fs-base" style="color: #3a94b5">
                    <span class="visually-hidden">Blue</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-5" id="color-5-2">
                  <label for="color-5-2" class="btn btn-color fs-base" style="color: #777d7E">
                    <span class="visually-hidden">Gray</span>
                  </label>
                </div>
                <h3 class="mb-2">
                  <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture">
                    <span class="animate-target">Blue armchair with iron legs</span>
                  </a>
                </h3>
                <div class="h6">$220.00</div>
                <div class="d-flex gap-2">
                  <button type="button" class="btn btn-dark w-100 rounded-pill px-3">Add to cart</button>
                  <button type="button" class="btn btn-icon btn-secondary rounded-circle animate-pulse" aria-label="Add to wishlist">
                    <i class="ci-heart fs-base animate-target"></i>
                  </button>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="animate-underline">
                <a class="hover-effect-opacity ratio ratio-1x1 d-block mb-3" href="shop-product-furniture">
                  <div class="position-absolute top-0 start-0 z-2 mt-2 mt-sm-3 ms-2 ms-sm-3">
                    <span class="badge text-bg-danger">-13%</span>
                  </div>
                  <img src="/assets/img/shop/furniture/06.png" class="hover-effect-target opacity-100" alt="Product">
                  <img src="/assets/img/shop/furniture/06-hover.jpg" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
                </a>
                <div class="d-flex gap-2 mb-3">
                  <input type="radio" class="btn-check" name="colors-6" id="color-6-1" checked>
                  <label for="color-6-1" class="btn btn-color fs-base" style="color: #bdaB9e">
                    <span class="visually-hidden">Beige</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-6" id="color-6-2">
                  <label for="color-6-2" class="btn btn-color fs-base" style="color: #d65c46">
                    <span class="visually-hidden">Terracotta</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-6" id="color-6-3">
                  <label for="color-6-3" class="btn btn-color fs-base" style="color: #e0e5eb">
                    <span class="visually-hidden">White</span>
                  </label>
                </div>
                <h3 class="mb-2">
                  <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture">
                    <span class="animate-target">Loft-style lamp 120x80 cm</span>
                  </a>
                </h3>
                <div class="h6">$140.00 <del class="fs-sm fw-normal text-body-tertiary">$160.00</del></div>
                <div class="d-flex gap-2">
                  <button type="button" class="btn btn-dark w-100 rounded-pill px-3">Add to cart</button>
                  <button type="button" class="btn btn-icon btn-secondary rounded-circle animate-pulse" aria-label="Add to wishlist">
                    <i class="ci-heart fs-base animate-target"></i>
                  </button>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="animate-underline">
                <a class="hover-effect-opacity ratio ratio-1x1 d-block mb-3" href="shop-product-furniture">
                  <img src="/assets/img/shop/furniture/08.png" class="hover-effect-target opacity-100" alt="Product">
                  <img src="/assets/img/shop/furniture/08-hover.jpg" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
                </a>
                <div class="d-flex gap-2 mb-3">
                  <input type="radio" class="btn-check" name="colors-8" id="color-8-1" checked>
                  <label for="color-8-1" class="btn btn-color fs-base" style="color: #305853">
                    <span class="visually-hidden">Green</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-8" id="color-8-2">
                  <label for="color-8-2" class="btn btn-color fs-base" style="color: #34598f">
                    <span class="visually-hidden">Blue</span>
                  </label>
                </div>
                <h3 class="mb-2">
                  <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture">
                    <span class="animate-target">Armchair with wooden legs 60x100 cm</span>
                  </a>
                </h3>
                <div class="h6">$320.50</div>
                <div class="d-flex gap-2">
                  <button type="button" class="btn btn-dark w-100 rounded-pill px-3">Add to cart</button>
                  <button type="button" class="btn btn-icon btn-secondary rounded-circle animate-pulse" aria-label="Add to wishlist">
                    <i class="ci-heart fs-base animate-target"></i>
                  </button>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="animate-underline">
                <a class="hover-effect-opacity ratio ratio-1x1 d-block mb-3" href="shop-product-furniture">
                  <img src="/assets/img/shop/furniture/02.png" class="hover-effect-target opacity-100" alt="Product">
                  <img src="/assets/img/shop/furniture/02-hover.jpg" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
                </a>
                <div class="d-flex gap-2 mb-3">
                  <input type="radio" class="btn-check" name="colors-2" id="color-2-1" checked>
                  <label for="color-2-1" class="btn btn-color fs-base" style="color: #6a6f7b">
                    <span class="visually-hidden">Gray</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-2" id="color-2-2">
                  <label for="color-2-2" class="btn btn-color fs-base" style="color: #373b42">
                    <span class="visually-hidden">Dark gray</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-2" id="color-2-3">
                  <label for="color-2-3" class="btn btn-color fs-base" style="color: #216aae">
                    <span class="visually-hidden">Blue</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-2" id="color-2-4">
                  <label for="color-2-4" class="btn btn-color fs-base" style="color: #187c1c">
                    <span class="visually-hidden">Green</span>
                  </label>
                </div>
                <h3 class="mb-2">
                  <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture">
                    <span class="animate-target">Decorative flowerpot with a plant</span>
                  </a>
                </h3>
                <div class="h6">$107.50</div>
                <div class="d-flex gap-2">
                  <button type="button" class="btn btn-dark w-100 rounded-pill px-3">Add to cart</button>
                  <button type="button" class="btn btn-icon btn-secondary rounded-circle animate-pulse" aria-label="Add to wishlist">
                    <i class="ci-heart fs-base animate-target"></i>
                  </button>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="animate-underline">
                <a class="hover-effect-opacity ratio ratio-1x1 d-block mb-3" href="shop-product-furniture">
                  <img src="/assets/img/shop/furniture/07.png" class="hover-effect-target opacity-100" alt="Product">
                  <img src="/assets/img/shop/furniture/07-hover.jpg" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
                </a>
                <div class="d-flex gap-2 mb-3">
                  <input type="radio" class="btn-check" name="colors-7" id="color-7-1" checked>
                  <label for="color-7-1" class="btn btn-color fs-base" style="color: #71706c">
                    <span class="visually-hidden">Dark gray</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-7" id="color-7-2">
                  <label for="color-7-2" class="btn btn-color fs-base" style="color: #c1c3b8">
                    <span class="visually-hidden">Light gray</span>
                  </label>
                </div>
                <h3 class="mb-2">
                  <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture">
                    <span class="animate-target">Chair with a cushion for the legs</span>
                  </a>
                </h3>
                <div class="h6">$435.00</div>
                <div class="d-flex gap-2">
                  <button type="button" class="btn btn-dark w-100 rounded-pill px-3">Add to cart</button>
                  <button type="button" class="btn btn-icon btn-secondary rounded-circle animate-pulse" aria-label="Add to wishlist">
                    <i class="ci-heart fs-base animate-target"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- External slider prev/next buttons visible on screens < 500px wide (sm breakpoint) -->
      <div class="d-flex justify-content-center gap-2 mt-1 pt-4 d-sm-none">
        <button type="button" class="popular-prev btn btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start me-1" aria-label="Prev">
          <i class="ci-chevron-left fs-lg animate-target"></i>
        </button>
        <button type="button" class="popular-next btn btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end" aria-label="Next">
          <i class="ci-chevron-right fs-lg animate-target"></i>
        </button>
      </div>
    </section>


    <!-- Gallery -->
    <section class="container pb-5 mb-sm-2 mb-md-3 mb-lg-4 mb-xl-5">
      <h2 class="h3 pb-3">Interior design and inspiration</h2>

      <!-- Nav pills -->
      <nav class="overflow-x-auto mb-3" data-simplebar data-simplebar-auto-hide="false">
        <ul class="nav nav-pills flex-nowrap text-nowrap pb-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#!">Living room</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">Bedroom</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">Kitchen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">Decoration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">Office</a>
          </li>
        </ul>
      </nav>

      <!-- Grid -->
      <div class="row g-4 g-sm-3 g-lg-4 mb-xxl-3">
        <div class="col-sm-5 d-flex flex-column gap-4 gap-sm-3 gap-lg-4">

          <!-- Item with hotspots -->
          <div class="ratio" id="hotspots" style="--cz-aspect-ratio: calc(500 / 526 * 100%)">
            <!-- Hide when the direction is set to RTL -->
            <a class="btn btn-icon btn-sm btn-light rounded-circle shadow position-absolute z-2 d-none-rtl" href="#!" style="top: 63.4%; left: 75.8%" data-bs-toggle="popover" data-bs-html="true" data-bs-trigger="focus" data-bs-placement="top" data-bs-custom-class="popover-sm" data-bs-content='
              <div class="d-flex align-items-start position-relative">
                <img src="/assets/img/home/furniture/gallery/hotspot01.png" width="64" alt="Image">
                <div class="nav flex-column pt-2 ps-2 ms-1">
                  <a class="nav-link hover-effect-underline stretched-link p-0 mb-2" href="shop-product-furniture">Indigo coushy low sofa</a>
                  <div class="h6 mb-0">$856.00</div>
                </div>
              </div>
            ' tabindex="1" aria-label="Hotspot">
              <i class="ci-plus fs-sm"></i>
            </a>
            <!-- Show when the direction is set to RTL -->
            <a class="btn btn-icon btn-sm btn-light rounded-circle shadow position-absolute z-2 d-none d-flex-rtl" href="#!" style="top: 63.4%; right: 18.5%" data-bs-toggle="popover" data-bs-html="true" data-bs-trigger="focus" data-bs-placement="top" data-bs-custom-class="popover-sm" data-bs-content='
              <div class="d-flex align-items-start position-relative">
                <img src="/assets/img/home/furniture/gallery/hotspot01.png" width="64" alt="Image">
                <div class="nav flex-column pt-2 ps-2 ms-1">
                  <a class="nav-link hover-effect-underline stretched-link p-0 mb-2" href="shop-product-furniture">Indigo coushy low sofa</a>
                  <div class="h6 mb-0">$856.00</div>
                </div>
              </div>
            ' tabindex="1" aria-label="Hotspot">
              <i class="ci-plus fs-sm"></i>
            </a>
            <!-- Hide when the direction is set to RTL -->
            <a class="btn btn-icon btn-sm btn-light rounded-circle shadow position-absolute z-2 d-none-rtl" href="#!" style="top: 60.2%; left: 15.7%" data-bs-toggle="popover" data-bs-html="true" data-bs-trigger="focus" data-bs-placement="bottom" data-bs-custom-class="popover-sm" data-bs-content='
              <div class="d-flex align-items-start position-relative">
                <img src="/assets/img/home/furniture/gallery/hotspot02.png" width="64" alt="Image">
                <div class="nav flex-column pt-2 ps-2 ms-1">
                  <a class="nav-link hover-effect-underline stretched-link p-0 mb-2" href="shop-product-furniture">Ergonomic beige armchair</a>
                  <div class="h6 mb-0">$235.00</div>
                </div>
              </div>
            ' tabindex="1" aria-label="Hotspot">
              <i class="ci-plus fs-sm"></i>
            </a>
            <!-- Show when the direction is set to RTL -->
            <a class="btn btn-icon btn-sm btn-light rounded-circle shadow position-absolute z-2 d-none d-flex-rtl" href="#!" style="top: 60%; right: 78%" data-bs-toggle="popover" data-bs-html="true" data-bs-trigger="focus" data-bs-placement="bottom" data-bs-custom-class="popover-sm" data-bs-content='
              <div class="d-flex align-items-start position-relative">
                <img src="/assets/img/home/furniture/gallery/hotspot02.png" width="64" alt="Image">
                <div class="nav flex-column pt-2 ps-2 ms-1">
                  <a class="nav-link hover-effect-underline stretched-link p-0 mb-2" href="shop-product-furniture">Ergonomic beige armchair</a>
                  <div class="h6 mb-0">$235.00</div>
                </div>
              </div>
            ' tabindex="1" aria-label="Hotspot">
              <i class="ci-plus fs-sm"></i>
            </a>
            <a class="btn btn-icon btn-sm btn-light rounded-circle shadow position-absolute z-2 start-50 translate-middle-x" href="#!" style="top: 25.8%" data-bs-toggle="popover" data-bs-html="true" data-bs-trigger="focus" data-bs-placement="top" data-bs-custom-class="popover-sm" data-bs-content='
              <div class="d-flex align-items-start position-relative">
                <img src="/assets/img/home/furniture/gallery/hotspot03.png" width="64" alt="Image">
                <div class="nav flex-column pt-2 ps-2 ms-1">
                  <a class="nav-link hover-effect-underline stretched-link p-0 mb-2" href="shop-product-furniture">Waves modern painting</a>
                  <div class="h6 mb-0">$74.99</div>
                </div>
              </div>
            ' tabindex="1" aria-label="Hotspot">
              <i class="ci-plus fs-sm"></i>
            </a>
            <img src="/assets/img/home/furniture/gallery/01.jpg" class="rounded-5" alt="Image">
          </div>

          <!-- Item -->
          <div class="ratio" style="--cz-aspect-ratio: calc(529 / 526 * 100%)">
            <img src="/assets/img/home/furniture/gallery/02.jpg" class="rounded-5" alt="Image">
          </div>
        </div>
        <div class="col-sm-7 d-flex flex-column gap-4 gap-sm-3 gap-lg-4">

          <!-- Item -->
          <div class="ratio" style="--cz-aspect-ratio: calc(664 / 746 * 100%)">
            <img src="/assets/img/home/furniture/gallery/03.jpg" class="rounded-5" alt="Image">
          </div>

          <!-- Item -->
          <div class="ratio" style="--cz-aspect-ratio: calc(365 / 746 * 100%)">
            <img src="/assets/img/home/furniture/gallery/04.jpg" class="rounded-5" alt="Image">
          </div>
        </div>
      </div>
    </section>


    <!-- Features -->
    <section class="container pb-5 mb-sm-2 mb-md-3 mb-lg-4 mb-xl-5">
      <div class="row row-cols-1 row-cols-md-3 gy-3 gy-sm-4 gx-2 gx-lg-4 mb-xxl-3">
        <div class="col text-center">
          <svg class="d-block text-dark-emphasis mx-auto mb-3 mb-lg-4" xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="currentColor"><path d="M62.189 9.902c0-.604-.604-1.208-1.208-1.208h-6.158-3.14l-1.69.121-1.57.242c-2.174.483-4.226 1.087-6.158 2.174s-3.623 2.294-5.072 3.864h-.121c-3.14 3.019-5.313 7.004-6.038 11.351l-.241 1.57-.121 1.691v3.14 5.796c-.604.845-1.087 1.691-1.57 2.536.121-1.328.121-2.536.241-3.864 0-.966.121-1.811.121-2.777v-1.449l-.121-1.449c-.241-1.811-.845-3.743-1.691-5.434a20.6 20.6 0 0 0-3.26-4.71c-2.657-2.777-6.279-4.709-10.143-5.434L12.8 15.82l-1.449-.121H8.574 3.019c-.604 0-1.208.604-1.208 1.208v5.555 2.777l.121 1.449.242 1.449C2.898 32 4.83 35.502 7.729 38.159c1.449 1.328 3.019 2.415 4.709 3.26s3.623 1.328 5.434 1.691l1.449.121h1.449c.966 0 1.811-.121 2.777-.121 1.57-.121 3.14-.121 4.709-.242-.362.604-.604 1.328-.966 1.932-1.449 3.381-2.294 7.004-2.294 10.506.966-3.502 2.294-6.642 3.985-9.66.966-1.811 2.174-3.623 3.381-5.313h5.675 3.14l1.691-.121 1.57-.242c2.174-.483 4.227-1.087 6.159-2.174s3.623-2.294 5.072-3.864h.121c3.14-3.019 5.313-7.004 6.038-11.351l.242-1.57.121-1.69v-3.14-6.279zM49.63 35.743c-1.691.966-3.623 1.449-5.555 1.811l-1.449.242-1.449.121h-3.019-3.864c.242-.242.483-.604.725-.845 2.174-2.657 4.589-5.192 7.004-7.728l7.366-7.728c-3.019 1.932-5.917 3.985-8.694 6.279-2.657 2.294-5.192 4.709-7.487 7.487v-2.536-3.019l.121-1.449.242-1.449c.362-1.932.845-3.864 1.811-5.555.845-1.691 2.053-3.381 3.381-4.83 1.449-1.328 3.019-2.415 4.709-3.381s3.623-1.449 5.555-1.811l1.449-.241 1.449-.121h3.019 4.951v4.951 3.019l-.121 1.57-.242 1.449c-.362 1.932-.845 3.864-1.811 5.555-.845 1.691-2.053 3.381-3.381 4.83-1.449 1.449-3.019 2.536-4.709 3.381zm-26.083 6.762c-.966 0-1.811-.121-2.777-.121l-1.328-.121-1.328-.242c-3.502-.724-6.641-2.536-9.057-5.072-1.208-1.328-2.174-2.657-3.019-4.226-.725-1.57-1.208-3.26-1.57-4.951l-.242-1.328-.121-1.328V22.34v-4.347h4.347 2.777 1.328l1.328.121c1.691.242 3.381.725 4.951 1.57 1.449 1.087 2.898 2.053 4.106 3.26 2.536 2.415 4.347 5.555 5.072 9.057l.241 1.328.121 1.328c.121.845.121 1.811.121 2.777.121 1.449.121 2.777.241 4.226-.241.483-.483.845-.724 1.328-1.328-.362-2.898-.362-4.468-.483zm-5.434-12.437c-1.449-.966-2.898-1.932-4.589-2.657.966 1.449 2.174 2.777 3.381 3.985 2.415 2.536 4.83 4.709 7.487 7.124 1.328 1.087 2.536 2.294 4.106 3.381-.725-1.691-1.57-3.26-2.657-4.589-2.174-2.898-4.709-5.193-7.728-7.245z"/></svg>
          <h3 class="h5">Eco-friendly</h3>
          <p class="fs-sm px-5 mb-md-0">Decorate your space with eco-friendly furniture with low VOCs, environmentally friendly materials and safe coatings.</p>
        </div>
        <div class="col text-center">
          <svg class="d-block text-dark-emphasis mx-auto mb-3 mb-lg-4" xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="currentColor"><path d="M55.526 24.465l-.145-10.159-.094-5.08-.012-.635c-.016-.23-.016-.481-.061-.717-.06-.481-.22-.945-.413-1.384-.407-.875-1.061-1.625-1.868-2.136a4.99 4.99 0 0 0-2.699-.769l-2.548.061-15.238.437 15.238.437 2.532.069a3.93 3.93 0 0 1 2.088.71c.601.431 1.085 1.017 1.365 1.692.131.339.242.688.27 1.051.029.181.017.356.026.548l-.012.635-.094 5.08-.119 8.281c-3.476-.415-6.952-.651-10.428-.808-3.769-.185-7.537-.235-11.306-.255-3.769.023-7.537.073-11.306.258-3.471.158-6.941.392-10.412.803l-.131-9.156-.085-5.05c.009-1.448.949-2.849 2.313-3.435.691-.318 1.391-.355 2.28-.357l2.54-.066 15.239-.439-17.778-.505c-.425-.009-.83-.032-1.325-.006-.472.048-.941.145-1.388.317-1.798.674-3.123 2.475-3.216 4.432l-.105 5.109-.145 10.159-.111 10.159-.046 5.714c.011.242.006.518.048.774.054.523.214 1.031.415 1.516.421.967 1.122 1.802 1.996 2.394a5.52 5.52 0 0 0 2.985.937l1.885.008a219.85 219.85 0 0 0-2.615 7.372l-1.399 4.349-.166.552a2.42 2.42 0 0 0-.062 1.062c.109.703.567 1.362 1.196 1.705a2.42 2.42 0 0 0 2.973-.484c.144-.164.17-.207.235-.287l.177-.224c3.518-4.56 6.926-9.206 10.121-14.015l5.451.014 6.309-.017c3.205 4.808 6.615 9.457 10.14 14.017l.177.224c.065.081.092.123.235.287.753.837 2.009 1.035 2.971.484.629-.343 1.086-1.001 1.195-1.704a2.42 2.42 0 0 0-.062-1.061l-.166-.552-1.403-4.349a228.34 228.34 0 0 0-2.625-7.375l1.007-.003c.425-.003.814.01 1.383-.037.524-.067 1.042-.192 1.53-.396 1.966-.798 3.353-2.796 3.404-4.903l-.03-5.126-.112-10.159zM14.167 57.718l-.293.386c-.011.016-.023.027-.04.035-.035.018-.081.021-.114.004-.043-.018-.066-.046-.08-.095a.18.18 0 0 1-.002-.069l.153-.545 1.157-4.419c.65-2.627 1.271-5.264 1.822-7.92l7.761.02c-3.608 4.082-7.037 8.303-10.363 12.603zm34.91-4.704l1.155 4.42.153.544a.19.19 0 0 1-.002.07c-.014.049-.037.077-.081.096-.034.018-.08.015-.115-.004-.018-.008-.029-.019-.041-.035l-.294-.386c-3.321-4.302-6.749-8.521-10.35-12.607l7.309-.02.452-.001c.549 2.657 1.17 5.293 1.814 7.922zm4.528-18.39l-.05 5.033c-.051 1.297-.928 2.501-2.124 2.963-.626.251-1.14.252-2.08.235l-17.778-.047c-25.374.066 7.11-.017-17.761.043a3.42 3.42 0 0 1-1.802-.541 3.43 3.43 0 0 1-1.238-1.434c-.123-.294-.234-.599-.268-.92-.032-.162-.025-.312-.04-.492l-.046-5.714-.112-10.159-.011-.8c3.47.411 6.94.645 10.409.803 3.769.186 7.537.235 11.306.258 3.769-.02 7.537-.07 11.306-.255 3.475-.157 6.95-.393 10.425-.808l-.024 1.677-.112 10.159zm-14.693-23.94c-3.673-1.557-10.14-1.544-13.805 0 3.66 1.542 10.125 1.559 13.805 0zM25.107 28.829c3.647 1.537 10.114 1.564 13.805 0-3.697-1.567-10.167-1.533-13.805 0z"/></svg>
          <h3 class="h5">Unbeatable quality</h3>
          <p class="fs-sm px-5 mb-md-0">We choose raw materials from the best manufacturers, so our furniture and decor are of the highest quality at the best prices.</p>
        </div>
        <div class="col text-center">
          <svg class="d-block text-dark-emphasis mx-auto mb-3 mb-lg-4" xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="currentColor"><path d="M5.36 29.423c.111 0 2.111 1 6.333 2.667l-.222 10.222c-.111 3.667-.111 7.334-.111 11a1.07 1.07 0 0 0 .778 1c.333.111 10 2.778 9.889 2.667.111 0 10 2.667 9.889 2.667h.111.111.111.111.111l9.889-2.667c.111 0 10-2.778 9.889-2.667a1.07 1.07 0 0 0 .778-1c-.111-3.667-.111-7.334-.111-11l-.222-10.222 6.222-2.667c.111 0 .111-.111.222-.111.222-.222.333-.667 0-.889l-7.111-7.556 5.556 7.667c-3.111 1-6.111 2-9.111 3.111l-9.111 3.333-5.333-6.334c6.222-2.556 12-5.111 18.112-7.889-6-2.778-11.889-5.333-18-7.889l5.333-6.333 9.111 3.333c3 1.111 6.111 2.111 9.111 3.111l-5.556 7.667c2.333-2.333 4.778-4.889 7.111-7.556 0 0 .111-.111.111-.222.111-.333 0-.667-.333-.889-3.222-1.444-6.445-2.778-9.778-4l-9.778-3.889c-.444-.222-.889 0-1.222.333l-5.778 7.111c-1.889-2.445-3.889-4.778-5.778-7.111-.333-.333-.778-.556-1.222-.333-3.222 1.222-6.556 2.556-9.778 3.889-3.778 1.444-7 2.778-10.222 4.222-.111 0-.222.111-.222.111-.222.222-.333.667 0 .889 2.111 2.333 4.333 4.667 6.334 6.778-.444.444-.444 1.222 0 1.556-2.111 2.111-4.222 4.444-6.334 6.778-.444.444-.222 1 .111 1.111zm6.556-7.556l9.889 3.556 3.778 1.333 4.778 2-5.333 6.334-9.111-3.333c-3-1.111-6.111-2.111-9.111-3.111 1.667-2.222 3.222-4.444 4.889-6.778 0-.111.111 0 .222 0zm1.445 30.667c0-3.111-.111-9.556-.445-19.889.778.333 1.445.667 2.222.889l9.778 3.889c.444.222.889 0 1.222-.333 1.778-2.111 3.556-4.333 5.222-6.444-.111 1.778-.111 3.556-.111 5.333l-.222 7.556-.222 13.778-8.556-2.333-8.889-2.444zm37.334 0l-9.111 2.444-8.556 2.333c0-5.778-.111-7.222-.222-13.778l-.222-7.556c-.111-1.778-.111-3.556-.111-5.333 1.778 2.111 3.445 4.333 5.222 6.444.333.333.778.556 1.222.333 3.222-1.222 6.556-2.556 9.778-3.889.778-.333 1.444-.556 2.222-.889l-.222 19.889zm.889-31.667c-5.334 1.556-9.111 2.778-13.556 4.333-2 .667-4 1.222-6 1.889l-9.556-3.667-7-2.556 7-2.556 9.556-3.667c1.889.667 3.778 1.222 5.667 1.889l14 4.445c0-.111-.111-.111-.111-.111zm-44.89-7.667l9.222-3.222 9.111-3.333 5.333 6.333c-1.556.667-3.111 1.222-4.667 1.889l-3.889 1.333-9.889 3.556c-.111 0-.222.111-.222.111l-5-6.667z"/></svg>
          <h3 class="h5">Delivery to your door</h3>
          <p class="fs-sm px-5 mb-md-0"> We will deliver to your door anywhere in the world. If you're not 100% satisfied, let us know within 30 days and we'll solve the problem.</p>
        </div>
      </div>
    </section>


    <!-- Featured product with video -->
    <section class="container">
      <div class="row row-cols-1 row-cols-md-2 g-0 overflow-hidden rounded-5">

        <!-- Video -->
        <div class="col position-relative">
          <div class="ratio ratio-1x1 d-none d-md-block"></div>
          <div class="ratio ratio-4x3 d-md-none"></div>
          <div class="position-absolute top-0 start-0 w-100 h-100 bg-body-secondary"></div>
          <img src="/assets/img/home/furniture/featured-product.png" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-1" alt="Image">
          <div class="position-absolute start-0 bottom-0 d-flex align-items-end w-100 h-100 z-2 p-4">
            <a class="btn btn-lg btn-light rounded-pill m-md-2" href="https://www.youtube.com/watch?v=Z1xX1Kt9NkU" data-glightbox data-gallery="video">
              <i class="ci-play fs-lg ms-n1 me-2"></i>
              Play
            </a>
          </div>
        </div>

        <!-- Featured product -->
        <div class="col d-flex align-items-center justify-content-center bg-dark py-5 px-4 px-md-5" data-bs-theme="dark">
          <div class="text-center py-md-2 py-lg-3 py-xl-4" style="max-width: 400px">
            <div class="fs-xs fw-medium text-body text-uppercase mb-3">Best deal</div>
            <h2 class="h4 pb-lg-2 pb-xl-0 mb-4 mb-xl-5">Scandinavian green chair with wooden legs 60x100 cm</h2>
            <div class="d-inline-flex pb-lg-2 pb-xl-0 mb-4 mb-xl-5">
              <img src="/assets/img/home/furniture/featured-product-thumbnail.jpg" class="rounded" width="162" alt="Product">
            </div>
            <div class="h3 pb-2 pb-md-3">$357.00</div>
            <a class="btn btn-lg btn-outline-light rounded-pill" href="shop-product-furniture">Shop now</a>
          </div>
        </div>
      </div>
    </section>


    <!-- Blog grid -->
    <section class="container py-5 my-2 my-sm-3 my-lg-4 my-xl-5">

      <!-- Heading -->
      <div class="d-flex align-items-center justify-content-between pb-3 mb-2 mb-sm-3 mt-xxl-3">
        <h2 class="h3 mb-0">Blog and news</h2>
        <div class="nav ms-3">
          <a class="nav-link animate-underline px-0 py-2" href="blog-grid-v2">
            <span class="animate-target">View all</span>
            <i class="ci-chevron-right fs-base ms-1"></i>
          </a>
        </div>
      </div>

      <div class="row gy-5 mb-xxl-3">

        <!-- Article -->
        <article class="col-md-6">
          <a class="ratio d-flex hover-effect-scale rounded-4 overflow-hidden" href="#!" style="--cz-aspect-ratio: calc(500 / 636 * 100%)">
            <img src="/assets/img/blog/grid/v2/01.jpg" class="hover-effect-target" alt="Image">
          </a>
          <div class="pt-4">
            <div class="nav pb-2 mb-1">
              <a class="nav-link text-body fs-xs text-uppercase p-0" href="#!">Interior design</a>
            </div>
            <h3 class="h5 mb-3">
              <a class="hover-effect-underline" href="#!">Decorate your home for the festive season in 3 easy steps</a>
            </h3>
            <div class="nav align-items-center gap-2 fs-xs">
              <a class="nav-link text-body-secondary fs-xs fw-normal p-0" href="#!">Ava Johnson</a>
              <hr class="vr my-1 mx-1">
              <span class="text-body-secondary">September 11, 2024</span>
            </div>
          </div>
        </article>
        <div class="col-md-6">
          <div class="row row-cols-1 row-cols-sm-2 gy-5">

            <!-- Article -->
            <article class="col">
              <a class="ratio d-flex hover-effect-scale rounded-4 overflow-hidden" href="#!" style="--cz-aspect-ratio: calc(260 / 306 * 100%)">
                <img src="/assets/img/blog/grid/v2/11.jpg" class="hover-effect-target" alt="Image">
              </a>
              <div class="pt-4">
                <div class="nav pb-2 mb-1">
                  <a class="nav-link text-body fs-xs text-uppercase p-0" href="#!">Interior design</a>
                </div>
                <h3 class="h6 mb-3">
                  <a class="hover-effect-underline" href="#!">Transform your living space with these chic interior design tips</a>
                </h3>
                <div class="nav align-items-center gap-2 fs-xs">
                  <a class="nav-link text-body-secondary fs-xs fw-normal p-0" href="#!">Ethan Miller</a>
                  <hr class="vr my-1 mx-1">
                  <span class="text-body-secondary">September 5, 2024</span>
                </div>
              </div>
            </article>

            <!-- Article -->
            <article class="col">
              <a class="ratio d-flex hover-effect-scale rounded-4 overflow-hidden" href="#!" style="--cz-aspect-ratio: calc(260 / 306 * 100%)">
                <img src="/assets/img/blog/grid/v2/10.jpg" class="hover-effect-target" alt="Image">
              </a>
              <div class="pt-4">
                <div class="nav pb-2 mb-1">
                  <a class="nav-link text-body fs-xs text-uppercase p-0" href="#!">Furniture</a>
                </div>
                <h3 class="h6 mb-3">
                  <a class="hover-effect-underline" href="#!">Furnishing your space: a guide to choosing the perfect furniture pieces</a>
                </h3>
                <div class="nav align-items-center gap-2 fs-xs">
                  <a class="nav-link text-body-secondary fs-xs fw-normal p-0" href="#!">Oliver Harris</a>
                  <hr class="vr my-1 mx-1">
                  <span class="text-body-secondary">August 23, 2024</span>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
  </main>

</x-www-layout>



