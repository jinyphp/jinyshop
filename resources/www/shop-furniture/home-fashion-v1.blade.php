<x-www-layout>






  <!-- Page content -->
  <main class="content-wrapper">

    <!-- Hero slider -->
    <section class="bg-body-tertiary">
      <div class="container">
        <div class="row">

          <!-- Titles master slider -->
          <div class="col-md-6 col-lg-5 d-flex flex-column">
            <div class="py-4 mt-auto">
              <div class="swiper pb-1 pt-3 pt-sm-4 py-md-4 py-lg-3" data-swiper='{
                "spaceBetween": 24,
                "loop": true,
                "speed": 400,
                "controlSlider": "#heroImages",
                "pagination": {
                  "el": "#sliderBullets",
                  "clickable": true
                },
                "autoplay": {
                  "delay": 5500,
                  "disableOnInteraction": false
                }
              }'>
                <div class="swiper-wrapper align-items-center">

                  <!-- Item -->
                  <div class="swiper-slide text-center text-md-start">
                    <p class="fs-xl mb-2 mb-lg-3 mb-xl-4">The new warm collection</p>
                    <h2 class="display-4 text-uppercase mb-4 mb-xl-5">New fall <br class="d-none d-md-inline">season 2024</h2>
                    <a class="btn btn-lg btn-outline-dark" href="shop-catalog-fashion.html">
                      Shop now
                      <i class="ci-arrow-up-right fs-lg ms-2 me-n1"></i>
                    </a>
                  </div>

                  <!-- Item -->
                  <div class="swiper-slide text-center text-md-start">
                    <p class="fs-xl mb-2 mb-lg-3 mb-xl-4">Ready for the party?</p>
                    <h2 class="display-4 text-uppercase mb-4 mb-xl-5">Choose outfits for parties</h2>
                    <a class="btn btn-lg btn-outline-dark" href="shop-catalog-fashion.html">
                      Shop now
                      <i class="ci-arrow-up-right fs-lg ms-2 me-n1"></i>
                    </a>
                  </div>

                  <!-- Item -->
                  <div class="swiper-slide text-center text-md-start">
                    <p class="fs-xl mb-2 mb-lg-3 mb-xl-4">Shades of gray for your look</p>
                    <h2 class="display-4 text-uppercase mb-4 mb-xl-5">-50% on gray Collection</h2>
                    <a class="btn btn-lg btn-outline-dark" href="shop-catalog-fashion.html">
                      Shop now
                      <i class="ci-arrow-up-right fs-lg ms-2 me-n1"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slider bullets (pagination) -->
            <div class="d-flex justify-content-center justify-content-md-start pb-4 pb-xl-5 mt-n1 mt-md-auto mb-md-3 mb-lg-4">
              <div class="swiper-pagination position-static w-auto pb-1" id="sliderBullets"></div>
            </div>
          </div>

          <!-- Linked images (controlled slider) -->
          <div class="col-md-6 col-lg-7 align-self-end">
            <div class="position-relative ms-md-n4">
              <div class="ratio" style="--cz-aspect-ratio: calc(662 / 770 * 100%)"></div>
              <div class="swiper position-absolute top-0 start-0 w-100 h-100 user-select-none" id="heroImages" data-swiper='{
                "allowTouchMove": false,
                "loop": true,
                "effect": "fade",
                "fadeEffect": {
                  "crossFade": true
                }
              }'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="assets/img/home/fashion/v1/hero-slider/01.png" class="rtl-flip" alt="Image">
                  </div>
                  <div class="swiper-slide">
                    <img src="assets/img/home/fashion/v1/hero-slider/02.png" class="rtl-flip" alt="Image">
                  </div>
                  <div class="swiper-slide">
                    <img src="assets/img/home/fashion/v1/hero-slider/03.png" class="rtl-flip" alt="Image">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Popular products carousel -->
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
                        <a class="nav-link text-dark-emphasis stretched-link w-100 min-w-0 p-0" href="shop-product-fashion.html">
                          <span class="animate-target text-truncate">Short jacket in long-pile faux fur</span>
                        </a>
                        <div class="h6 mb-0">$218.00</div>
                      </div>
                    </div>
                    <div class="d-flex align-items-center position-relative bg-body-tertiary rounded overflow-hidden animate-underline">
                      <img src="assets/img/shop/fashion/thumbs/02.png" width="110" alt="Thumbnail">
                      <div class="nav flex-column gap-2 min-w-0 p-3">
                        <a class="nav-link text-dark-emphasis stretched-link w-100 min-w-0 p-0" href="shop-product-fashion.html">
                          <span class="animate-target text-truncate">Women's walking shoes tennis sneakers</span>
                        </a>
                        <div class="h6 mb-0">$54.99</div>
                      </div>
                    </div>
                    <div class="d-flex align-items-center position-relative bg-body-tertiary rounded overflow-hidden animate-underline">
                      <img src="assets/img/shop/fashion/thumbs/03.png" width="110" alt="Thumbnail">
                      <div class="nav flex-column gap-2 min-w-0 p-3">
                        <a class="nav-link text-dark-emphasis stretched-link w-100 min-w-0 p-0" href="shop-product-fashion.html">
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
                        <a class="nav-link text-dark-emphasis stretched-link w-100 min-w-0 p-0" href="shop-product-fashion.html">
                          <span class="animate-target text-truncate">Vintage oversized wool blazer jacket</span>
                        </a>
                        <div class="h6 mb-0">$174.00</div>
                      </div>
                    </div>
                    <div class="d-flex align-items-center position-relative bg-body-tertiary rounded overflow-hidden animate-underline">
                      <img src="assets/img/shop/fashion/thumbs/05.png" width="110" alt="Thumbnail">
                      <div class="nav flex-column gap-2 min-w-0 p-3">
                        <a class="nav-link text-dark-emphasis stretched-link w-100 min-w-0 p-0" href="shop-product-fashion.html">
                          <span class="animate-target text-truncate">Classic pilot style polarized sunglasses</span>
                        </a>
                        <div class="h6 mb-0">$93.00</div>
                      </div>
                    </div>
                    <div class="d-flex align-items-center position-relative bg-body-tertiary rounded overflow-hidden animate-underline">
                      <img src="assets/img/shop/fashion/thumbs/06.png" width="110" alt="Thumbnail">
                      <div class="nav flex-column gap-2 min-w-0 p-3">
                        <a class="nav-link text-dark-emphasis stretched-link w-100 min-w-0 p-0" href="shop-product-fashion.html">
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
                <img src="assets/img/home/fashion/v1/popular/01.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rounded-5" alt="Image">
              </div>
              <div class="swiper-slide">
                <div class="ratio d-none d-md-block" style="--cz-aspect-ratio: calc(720 / 636 * 100%)"></div>
                <div class="ratio ratio-4x3 d-md-none"></div>
                <img src="assets/img/home/fashion/v1/popular/02.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rounded-5" style="object-position: center top" alt="Image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Featured products -->
    <section class="container pb-5 mb-2 mb-sm-3 mb-lg-4 mb-xl-5">
      <h2 class="text-center pb-2 pb-sm-3">This week's highlights</h2>

      <!-- Nav pills -->
      <div class="row g-0 overflow-x-auto pb-2 pb-sm-3 mb-3">
        <div class="col-auto pb-1 pb-sm-0 mx-auto">
          <ul class="nav nav-pills flex-nowrap text-nowrap">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#!">Best sellers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#!">New arrivals</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#!">Sale items</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#!">Top rated</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Products grid -->
      <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 gy-4 gy-md-5 pb-xxl-3">

        <!-- Item -->
        <div class="col mb-2 mb-sm-3 mb-md-0">
          <div class="animate-underline hover-effect-opacity">
            <div class="position-relative mb-3">
              <span class="badge text-bg-danger position-absolute top-0 start-0 z-2 mt-2 mt-sm-3 ms-2 ms-sm-3">Sale</span>
              <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                <i class="ci-heart animate-target"></i>
              </button>
              <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion.html">
                <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                  <img src="assets/img/shop/fashion/01.png" alt="Image">
                </div>
              </a>
              <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                  <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">XS</span>
                  <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">S</span>
                  <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">M</span>
                  <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">L</span>
                  <div class="nav">
                    <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="shop-product-fashion.html">+3</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="nav mb-2">
              <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion.html">
                <span class="text-truncate">Denim midi skirt with pockets</span>
              </a>
            </div>
            <div class="h6 mb-2">$126.50 <del class="fs-sm fw-normal text-body-tertiary">$156.00</del></div>
            <div class="position-relative">
              <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+1 color</div>
              <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                <input type="radio" class="btn-check" name="colors-1" id="color-1-1" checked>
                <label for="color-1-1" class="btn btn-color fs-base" style="color: #284971">
                  <span class="visually-hidden">Dark denim</span>
                </label>
                <input type="radio" class="btn-check" name="colors-1" id="color-1-2">
                <label for="color-1-2" class="btn btn-color fs-base" style="color: #8b9bc4">
                  <span class="visually-hidden">Light denim</span>
                </label>
              </div>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="col mb-2 mb-sm-3 mb-md-0">
          <div class="animate-underline hover-effect-opacity">
            <div class="position-relative mb-3">
              <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                <i class="ci-heart animate-target"></i>
              </button>
              <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion.html">
                <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                  <img src="assets/img/shop/fashion/08.png" alt="Image">
                </div>
              </a>
              <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                  <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">6.5</span>
                  <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7</span>
                  <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7.5</span>
                  <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">8</span>
                  <div class="nav">
                    <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="shop-product-fashion.html">+3</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="nav mb-2">
              <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion.html">
                <span class="text-truncate">Leather sneakers with golden laces</span>
              </a>
            </div>
            <div class="h6 mb-2">$74.00</div>
            <div class="position-relative">
              <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+2 colors</div>
              <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                <input type="radio" class="btn-check" name="colors-8" id="color-8-1" checked>
                <label for="color-8-1" class="btn btn-color fs-base" style="color: #b1aa9b">
                  <span class="visually-hidden">Cream</span>
                </label>
                <input type="radio" class="btn-check" name="colors-8" id="color-8-2">
                <label for="color-8-2" class="btn btn-color fs-base" style="color: #496c33">
                  <span class="visually-hidden">Dark green</span>
                </label>
                <input type="radio" class="btn-check" name="colors-8" id="color-8-3">
                <label for="color-8-3" class="btn btn-color fs-base" style="color: #364254">
                  <span class="visually-hidden">Black</span>
                </label>
              </div>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="col mb-2 mb-sm-3 mb-md-0">
          <div class="animate-underline hover-effect-opacity">
            <div class="position-relative mb-3">
              <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                <i class="ci-heart animate-target"></i>
              </button>
              <a class="d-flex bg-body-tertiary rounded p-3" href="#!">
                <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                  <img src="assets/img/shop/fashion/11.png" alt="Image">
                </div>
              </a>
              <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                  <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">S</span>
                  <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">M</span>
                  <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">L</span>
                  <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">XL</span>
                  <div class="nav">
                    <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="#!">+1</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="nav mb-2">
              <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="#!">
                <span class="text-truncate">Warm sweatshirts without a hoodie</span>
              </a>
            </div>
            <div class="h6 mb-2">$32.99</div>
            <div class="position-relative">
              <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+2 colors</div>
              <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                <input type="radio" class="btn-check" name="colors-11" id="color-11-1" checked>
                <label for="color-11-1" class="btn btn-color fs-base" style="color: #42675f">
                  <span class="visually-hidden">Green</span>
                </label>
                <input type="radio" class="btn-check" name="colors-11" id="color-11-2">
                <label for="color-11-2" class="btn btn-color fs-base" style="color: #476585">
                  <span class="visually-hidden">Blue</span>
                </label>
                <input type="radio" class="btn-check" name="colors-11" id="color-11-3">
                <label for="color-11-3" class="btn btn-color fs-base" style="color: #724c74">
                  <span class="visually-hidden">Purple</span>
                </label>
              </div>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="col mb-2 mb-sm-3 mb-md-0">
          <div class="animate-underline hover-effect-opacity">
            <div class="position-relative mb-3">
              <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                <i class="ci-heart animate-target"></i>
              </button>
              <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion.html">
                <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                  <img src="assets/img/shop/fashion/04.png" alt="Image">
                </div>
              </a>
            </div>
            <div class="nav mb-2">
              <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion.html">
                <span class="text-truncate">Knitted bag with a wooden handle</span>
              </a>
            </div>
            <div class="h6 mb-2">$105.00</div>
            <div class="position-relative">
              <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+1 color</div>
              <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                <input type="radio" class="btn-check" name="colors-4" id="color-4-1" checked>
                <label for="color-4-1" class="btn btn-color fs-base" style="color: #e7ddb4">
                  <span class="visually-hidden">Beige</span>
                </label>
                <input type="radio" class="btn-check" name="colors-4" id="color-4-2">
                <label for="color-4-2" class="btn btn-color fs-base" style="color: #8b9bc4">
                  <span class="visually-hidden">Blue</span>
                </label>
              </div>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="col mb-2 mb-sm-3 mb-md-0">
          <div class="animate-underline hover-effect-opacity">
            <div class="position-relative mb-3">
              <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                <i class="ci-heart animate-target"></i>
              </button>
              <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion.html">
                <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                  <img src="assets/img/shop/fashion/09.png" alt="Image">
                </div>
              </a>
              <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                  <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">XS</span>
                  <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">S</span>
                  <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">M</span>
                  <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">L</span>
                  <div class="nav">
                    <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="shop-product-fashion.html">+3</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="nav mb-2">
              <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion.html">
                <span class="text-truncate">White cotton blouse with necklace</span>
              </a>
            </div>
            <div class="h6 mb-2">$38.50</div>
            <div class="position-relative">
              <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+1 color</div>
              <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                <input type="radio" class="btn-check" name="colors-9" id="color-9-1" checked>
                <label for="color-9-1" class="btn btn-color fs-base" style="color: #e0e5eb">
                  <span class="visually-hidden">White</span>
                </label>
                <input type="radio" class="btn-check" name="colors-9" id="color-9-2">
                <label for="color-9-2" class="btn btn-color fs-base" style="color: #364254">
                  <span class="visually-hidden">Black</span>
                </label>
              </div>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="col mb-2 mb-sm-3 mb-md-0">
          <div class="animate-underline hover-effect-opacity">
            <div class="position-relative mb-3">
              <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                <i class="ci-heart animate-target"></i>
              </button>
              <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion.html">
                <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                  <img src="assets/img/shop/fashion/10.png" alt="Image">
                </div>
              </a>
            </div>
            <div class="nav mb-2">
              <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion.html">
                <span class="text-truncate">Leather handbag for women</span>
              </a>
            </div>
            <div class="h6 mb-2">$140.00</div>
            <div class="position-relative">
              <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+2 colors</div>
              <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                <input type="radio" class="btn-check" name="colors-10" id="color-10-1" checked>
                <label for="color-10-1" class="btn btn-color fs-base" style="color: #869286">
                  <span class="visually-hidden">Olive</span>
                </label>
                <input type="radio" class="btn-check" name="colors-10" id="color-10-2">
                <label for="color-10-2" class="btn btn-color fs-base" style="color: #364254">
                  <span class="visually-hidden">Black</span>
                </label>
                <input type="radio" class="btn-check" name="colors-10" id="color-10-3">
                <label for="color-10-3" class="btn btn-color fs-base" style="color: #526f99">
                  <span class="visually-hidden">Blue</span>
                </label>
              </div>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="col mb-2 mb-sm-3 mb-md-0">
          <div class="animate-underline hover-effect-opacity">
            <div class="position-relative mb-3">
              <span class="badge text-bg-danger position-absolute top-0 start-0 z-2 mt-2 mt-sm-3 ms-2 ms-sm-3">-17%</span>
              <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                <i class="ci-heart animate-target"></i>
              </button>
              <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion.html">
                <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                  <img src="assets/img/shop/fashion/05.png" alt="Image">
                </div>
              </a>
            </div>
            <div class="nav mb-2">
              <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion.html">
                <span class="text-truncate">Polarized sunglasses for men</span>
              </a>
            </div>
            <div class="h6 mb-2">$96.00 <del class="fs-sm fw-normal text-body-tertiary">$112.00</del></div>
            <div class="position-relative">
              <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+2 colors</div>
              <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                <input type="radio" class="btn-check" name="colors-5" id="color-5-1" checked>
                <label for="color-5-1" class="btn btn-color fs-base" style="color: #8cc4ac">
                  <span class="visually-hidden">Green</span>
                </label>
                <input type="radio" class="btn-check" name="colors-5" id="color-5-2">
                <label for="color-5-2" class="btn btn-color fs-base" style="color: #8cb7c4">
                  <span class="visually-hidden">Blue</span>
                </label>
                <input type="radio" class="btn-check" name="colors-5" id="color-5-3">
                <label for="color-5-3" class="btn btn-color fs-base" style="color: #ccb782">
                  <span class="visually-hidden">Brown</span>
                </label>
              </div>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="col mb-2 mb-sm-3 mb-md-0">
          <div class="animate-underline hover-effect-opacity">
            <div class="position-relative mb-3">
              <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                <i class="ci-heart animate-target"></i>
              </button>
              <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion.html">
                <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                  <img src="assets/img/shop/fashion/06.png" alt="Image">
                </div>
              </a>
              <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                  <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">M</span>
                  <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">L</span>
                  <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">XL</span>
                </div>
              </div>
            </div>
            <div class="nav mb-2">
              <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion.html">
                <span class="text-truncate">Classic cotton men's shirt</span>
              </a>
            </div>
            <div class="h6 mb-2">$27.00</div>
            <div class="position-relative">
              <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+3 colors</div>
              <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                <input type="radio" class="btn-check" name="colors-6" id="color-6-1" checked>
                <label for="color-6-1" class="btn btn-color fs-base" style="color: #c1cde7">
                  <span class="visually-hidden">Blue</span>
                </label>
                <input type="radio" class="btn-check" name="colors-6" id="color-6-2">
                <label for="color-6-2" class="btn btn-color fs-base" style="color: #526f99">
                  <span class="visually-hidden">Dark blue</span>
                </label>
                <input type="radio" class="btn-check" name="colors-6" id="color-6-3">
                <label for="color-6-3" class="btn btn-color fs-base" style="color: #e0e5eb">
                  <span class="visually-hidden">White</span>
                </label>
                <input type="radio" class="btn-check" name="colors-6" id="color-6-4">
                <label for="color-6-4" class="btn btn-color fs-base" style="color: #364254">
                  <span class="visually-hidden">Black</span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Special collection carousel -->
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
                  <img src="assets/img/home/fashion/v1/collection/01.jpg" class="rounded-5" alt="Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="ratio" style="--cz-aspect-ratio: calc(720 / 746 * 100%)">
                  <img src="assets/img/home/fashion/v1/collection/02.jpg" class="rounded-5" alt="Image">
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
                    <a class="d-flex bg-body-tertiary rounded p-3 mb-3" href="shop-product-fashion.html">
                      <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                        <img src="assets/img/shop/fashion/03.png" alt="Image">
                      </div>
                    </a>
                    <div class="nav justify-content-center mb-2">
                      <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion.html">
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
                        <img src="assets/img/shop/fashion/12.png" alt="Image">
                      </div>
                    </a>
                    <div class="nav justify-content-center mb-2">
                      <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion.html">
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


    <!-- Brands -->
    <section class="container pb-5 mb-1 mb-sm-3 mb-lg-4 mb-xl-5">
      <div class="swiper my-md-3" data-swiper='{
        "slidesPerView": 2,
        "pagination": {
          "el": ".swiper-pagination",
          "clickable": true
        },
        "breakpoints": {
          "500": {
            "slidesPerView": 3
          },
          "768": {
            "slidesPerView": 4,
            "spaceBetween": 12
          },
          "992": {
            "slidesPerView": 5,
            "spaceBetween": 20
          },
          "1200": {
            "slidesPerView": 6,
            "spaceBetween": 24
          }
        }
      }'>
        <div class="swiper-wrapper">

          <!-- Item -->
          <a class="swiper-slide text-body" href="#!" aria-label="Brooks">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 196 64" fill="currentColor"><path fill-rule="evenodd" d="M67.948 22.154c.155.003.33-.006.515-.016 1.226-.065 2.921-.155 2.515 3.051-.516 4.184-1.79 4.467-2.733 4.677l-.041.009-.06.014c-.209-.027-.342-.088-.454-.14l-.132-.056-14.174-7.832c-.665-.346-.79.119-.587.392l8.016 8.616c-11.176 1.731-20.193 11.654-20.528 12.14-.378.442-.414.798.098.783h11.046c2.662-6.303 14.636-11.3 16.422-11.259.603-.041 2.599.067 1.76 4.699-.802 4.647-3.082 5.146-4.203 5.189-.696-.042-1.088-.47-.978-1.371l1.368-6.951c-1.264.535-4.65 2.105-5.376 2.643l-.782 4.797c-.156.683-.631.761-1.235.859l-.134.022c-.759.171-1.258 1.493-.098 1.468l3.652-.192h.001 0 0l.061-.004a110 110 0 0 1 2.388.202l1.034.092c3.464.212 8.382-1.108 9.286-6.853.272-1.609-.013-4.535-3.03-5.776-.332-.008-.261-.294-.098-.294.194 0 3.864-1.498 4.301-5.189.635-4.818-3.965-5.305-5.669-5.189l-4.496.196-.794-.034c-.858-.04-1.965-.091-2.92-.064-.919-.036-1.096 1.392 0 1.371.756.021 1.149.485 1.075 1.273l-.391 2.252 4.301 2.448 1.075-5.972zM120.538 20c-2.894.034-9.024 3.246-10.557 11.553-1.603 8.397 1.248 12.466 6.06 12.727 4.738.168 9.3-3.83 11.046-11.161 1.675-7.374-2.315-13.085-6.549-13.119zm-.754 4.735c-1.744.021-5.374 1.981-6.311 7.052-.921 5.125.768 7.609 3.59 7.768 2.835.103 5.537-2.338 6.543-6.812 1.021-4.501-1.343-7.987-3.822-8.008zM102.259 20c-2.944.034-9.073 3.246-10.655 11.553-1.554 8.397 1.297 12.466 6.06 12.727 4.787.168 9.348-3.83 11.046-11.161 1.724-7.374-2.266-13.085-6.451-13.119zm-.78 4.735c-1.744.021-5.374 1.981-6.311 7.052-.921 5.125.768 7.609 3.59 7.768 2.836.102 5.538-2.338 6.543-6.812 1.021-4.501-1.342-7.987-3.821-8.008zm41.249 19.055c.9.194 3.018.576 4.496.49 1.699-.046 6.254-1.175 8.016-6.266 1.453-4.417-1.398-7.273-2.053-7.832-.064-.059-.157-.142-.273-.245-1.023-.912-3.814-3.401-3.833-4.944.021-1.513 1.196-3.138 3.031-3.133 1.871-.005 2.477 2.493 2.834 4.797.106.835.963 1.123 1.076.392l.879-4.699c.041-.46.005-.638-.195-.783h-.001c-.94-.641-1.724-1.176-4.105-1.174-2.465.07-5.85 1.819-6.94 4.014-1.851 3.795-.086 7.051.587 7.832.752.788 3.421 3.329 3.421 3.329.933 1.134 2.25 3.206.489 6.07a3.18 3.18 0 0 1-1.236 1.062c-.498.24-1.049.347-1.599.309-.893-.059-2.319-.201-2.444-5.874-.016-1.251-1.372-1.465-1.759 0l-.88 4.993c-.051-.169-.117-.332-.196-.489l-4.007-13.413 1.564-1.86c3.444-4.117 5.047-4.331 5.865-4.308 1 .055.751-1.309.099-1.273-.321-.018-.857-.009-1.365 0-.491.009-.957.017-1.178 0-.27.018-.954.009-1.665 0h-1.854c-.771-.036-.95 1.32.098 1.273 1.019-.023.806 1.189.391 1.664l-6.061 7.245c-.153.17-.474.098-.391-.196l1.271-7.245c.215-.884 1.07-1.421 1.857-1.469.78-.023.675-1.309 0-1.273-1.236-.027-2.346.026-3.179.066l-.731.032-.816-.034c-.86-.04-1.958-.09-2.898-.064-.932-.036-.968 1.356.097 1.371.789-.015 1.038.485.978 1.273l-3.324 18.112c-.169.691-.654.762-1.341.863l-.125.019c-.674.171-1.173 1.493 0 1.468l3.526-.185h0l.189-.011c.227.014.639.03 1.111.049h.001c.995.04 2.254.09 2.602.147.557-.011.878-1.046.098-1.273-.859-.273-1.393-.666-1.271-1.566l1.564-8.028h.88l2.444 8.322.021.133.001.002c.108.657.161.975-.511 1.039-.815.109-.958 1.287-.098 1.273.78.015 2.561-.057 3.421-.099l.463.027h0c.768.047 1.79.11 2.665.072.074.007.139.004.195.001.037-.002.071-.003.099-.001zM81.633 33.315h1.271l1.564 9.986c.057.326.2.504.489.489h5.474c.831.015.759-1.233 0-1.371-.81-.149-1.093-.684-1.271-1.567L88.183 34c-.2-1.296-1.02-1.653-1.955-1.666-.275.013-.205-.273 0-.294.151.021 5.212-1.3 5.572-6.168.424-4.841-4.244-5.305-5.963-5.189a172.57 172.57 0 0 1-4.496.196l-.789-.034h0c-.847-.04-1.936-.091-2.828-.064-1.004-.036-1.181 1.392-.098 1.371.771.021 1.162.485 1.075 1.273l-3.324 18.112c-.143.685-.619.761-1.236.86l-.132.021c-.745.171-1.243 1.493-.098 1.468l3.715-.196c.236.014.652.03 1.128.049 1.009.04 2.288.09 2.684.147.487-.011.806-1.046 0-1.273-.832-.272-1.367-.666-1.271-1.566l1.466-7.733zm2.053-11.161a11.27 11.27 0 0 0 .333-.001c1.191-.014 2.793-.034 2.6 3.428-.204 3.983-1.898 6.107-4.692 6.07l1.76-9.497z"/></svg>
          </a>

          <!-- Item -->
          <a class="swiper-slide text-body" href="#!" aria-label="Fila">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 196 64" fill="currentColor"><path d="M91.079 41.202c0 1.904-1.653 3.448-3.691 3.448s-3.692-1.544-3.692-3.448V23.753c0-1.904 1.653-3.448 3.692-3.448s3.691 1.543 3.691 3.448v17.449zM61.692 27.277c-2.039 0-3.692-1.544-3.692-3.448s1.653-3.448 3.692-3.448h15.907c2.038 0 3.691 1.544 3.691 3.448s-1.653 3.448-3.691 3.448H61.692zm14.847 8.915c2.038 0 3.691-1.544 3.691-3.448s-1.653-3.448-3.691-3.448H61.774c-2.039 0-3.691 1.543-3.691 3.448v8.458c0 1.904 1.653 3.448 3.691 3.448s3.692-1.544 3.692-3.448v-5.029l11.073.02zm55.224 8.486c3.249 0 5.883-2.499 5.883-5.534 0-1.138-.371-2.195-1.005-3.073l-9.531-14.5c-.657-.946-1.799-1.572-3.097-1.572-1.339 0-2.511.666-3.158 1.663l-10.301 15.501h-9.523V23.829c0-1.905-1.653-3.448-3.692-3.448s-3.691 1.544-3.691 3.448v17.372c0 1.904 1.653 3.448 3.691 3.448h13.582c1.673.018 3.344-.858 4.568-2.649l8.524-12.762 5.71 8.495-7.994.019c-2.038 0-3.691 1.543-3.691 3.448s1.653 3.448 3.691 3.448l10.034.029z"/></svg>
          </a>

          <!-- Item -->
          <a class="swiper-slide text-body" href="#!" aria-label="Zara">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 196 64" fill="currentColor"><path d="M137.486 48.905l-13.038-35.881-.008-.024h-.258l-2.685 7.374-4.887 13.424-.012-.011c-1.694-1.494-4.084-2.428-7.094-2.776l-.918-.095.911-.117c4.964-.892 8.3-4.025 8.3-7.801 0-5.177-4.871-8.791-11.849-8.791H91.429v.262h4.219v26.752L85.402 13.024 85.393 13h-.257l-2.685 7.374-10.355 28.439-.064.007a11.2 11.2 0 0 1-.525.052c-.26.02-.519.033-.779.033H60.264L80.153 14.47l.148-.259H55.976v10.652h.258c.046-5.189 3.069-10.394 9.748-10.394h8.058L54 49.163h26.997V38.957h-.258c-.035 4.522-2.6 8.818-8.177 9.788l-.177.03 4.247-11.67H88.53l4.287 11.8h-4.229v.258h16.6v-.258h-4.247V31.106h4.901c4.987 0 7.848 2.227 7.848 6.109v3.157c0 .348.023.857.049 1.282v.015l-2.634 7.234h-3.441v.258h7.123v-.258h-3.404l2.399-6.587.007.102.066.594.064.393c.4 2.429 1.33 4.215 2.762 5.307l.206.149c1.088.756 2.439 1.139 4.02 1.139 2.093 0 3.489-.522 4.642-1.75l-.151-.142c-1.062.98-1.953 1.377-3.07 1.377-1.902 0-2.898-2.307-2.898-4.581V40.48c.01-1.098-.162-2.189-.509-3.231l-.047-.137v-.005h8.703l4.287 11.8h-4.229v.258H142v-.258l-4.514-.002zM76.727 36.848l5.861-16.097 5.848 16.097h-11.71zm24.216-6V14.47h3.741c4.998 0 7.636 2.97 7.636 8.584 0 5.972-1.515 7.793-6.478 7.793h-4.899zm17.83 6l-.026-.064a8 8 0 0 0-1.659-2.531l-.245-.245-.026-.025 4.814-13.232 5.849 16.097h-8.707z"/></svg>
          </a>

          <!-- Item -->
          <a class="swiper-slide text-body" href="#!" aria-label="New Balance">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 196 64" fill="currentColor"><path d="M79.909 30.295l10.34-.366-.522.907-9.818-.542zm-1.261 2.158l10.364-.366-.51.91-9.854-.544zm-1.224 2.17l10.351-.361-.509.904-9.842-.543zm-1.224 2.17l10.364-.367-.534.909-9.831-.542zm9.837-17.287l13.197-.466.037 1.196-13.235-.73zm1.258-2.195l11.855-.413.037 1.09-11.893-.677zm1.208-2.133l10.563-.345.051.93-10.614-.585zm1.233-2.158l9.259-.307.037.852-9.295-.545zM90.881 11h8.053l.012.425L90.881 11zM74.976 38.962l10.339-.372-.211.372H74.976zm30.478-27.893h14.901c5.791.012 7.033 3.443 6.289 6.799-.821 3.695-4.971 6.367-7.357 6.91 4.275 1.382 4.275 4.146 3.379 7.206s-5.666 6.91-10.984 6.91H91.624l-.025-.593 6.151-.221c.124 0 .124-.148.037-.161l-6.213-.343-.049-1.38 7.444-.264c.149 0 .124-.16.037-.172l-7.519-.415-.038-1.255 8.749-.305c.149 0 .112-.173.025-.185l-8.823-.487-.05-1.144 10.102-.356c.137 0 .1-.148.026-.16l-10.165-.561-.037-1.022 11.408-.404c.149 0 .087-.16.025-.173l-21.474-1.184 22.668-.801c.185-.012.099-.173.012-.185L82.44 25.939l22.704-.814c.149 0 .125-.16.025-.16L83.695 23.78l22.666-.802c.15 0 .162-.173.026-.173L84.913 21.62l22.63-.753c.15 0 .136-.136.025-.148l-7.381-.407.758-1.302 7.854-.278c.149 0 .161-.148 0-.16l-7.369-.419.745-1.318 7.854-.273c.161 0 .161-.136 0-.148l-7.394-.408.732-1.261 7.867-.257c.087 0 .112-.136.012-.148l-7.406-.434.758-1.316 7.854-.261c.125 0 .125-.123.037-.123l-7.456-.393.422-.743zm-1.352 21.43h6.164c4.324 0 6.611-6.12 1.889-6.12h-4.573l-3.48 6.12zm10.563-10.514c1.887 0 3.379-1.876 3.579-2.616s.098-2.418-2.884-2.517h-2.336l-2.933 5.133h4.574zm23.893 21.419c2.389 0 4.375 1.986 4.375 4.358 0 .308-.032.539-.11 1.016h-6.545c.295.986 1.21 1.679 2.233 1.679.808 0 1.396-.323 1.846-1.031h2.265c-.512 1.679-2.234 2.91-4.048 2.91-.587.002-1.169-.11-1.712-.332a4.45 4.45 0 0 1-1.452-.961c-.415-.412-.744-.902-.968-1.441s-.338-1.117-.335-1.7c0-2.479 2.001-4.497 4.451-4.497zm.031 1.87c-1.147 0-2.078.739-2.372 1.894h4.699c-.279-1.17-1.178-1.894-2.327-1.894zm-25.059-.767v-.692h2.064v8.321h-1.893v-1.093c-.79.893-1.628 1.145-2.729 1.145-2.497 0-4.182-2.085-4.182-4.41 0-2.464 1.904-4.358 4.138-4.358 1.008 0 1.951.394 2.602 1.087zm-4.15 5.161a2.61 2.61 0 0 0 3.678 0c.487-.484.761-1.141.761-1.826s-.274-1.342-.761-1.826a2.61 2.61 0 0 0-3.678 0 2.57 2.57 0 0 0 0 3.652zm-54.472-5.247c.714-.724 1.365-1.017 2.218-1.017 1.163 0 2.295.693 2.776 1.709.326.678.419 1.247.419 2.449v4.574h-2.063v-4.173c0-1.047-.155-2.68-1.582-2.68-1.52 0-1.613 1.741-1.613 2.834v4.02H53v-8.532h1.908v.816zm10.661-1.016a4.41 4.41 0 0 1 4.374 4.358c0 .308-.031.539-.109 1.016h-6.545c.295.986 1.21 1.679 2.233 1.679.807 0 1.396-.323 1.846-1.031h2.264c-.512 1.679-2.233 2.91-4.048 2.91-.587.002-1.169-.111-1.712-.333a4.45 4.45 0 0 1-1.452-.961c-.415-.412-.744-.902-.968-1.441a4.39 4.39 0 0 1-.335-1.7c0-2.479 2.001-4.497 4.451-4.497zm.032 1.87c-1.148 0-2.079.739-2.373 1.894h4.7c-.279-1.17-1.179-1.894-2.327-1.894zm40.344 6.854h-2.062v-11.38h2.062v11.38zm12.873-7.708c.713-.724 1.365-1.017 2.218-1.017 1.164 0 2.296.693 2.776 1.709.326.678.419 1.247.419 2.449v4.574h-2.063v-4.173c0-1.047-.155-2.68-1.582-2.68-1.52 0-1.612 1.741-1.612 2.834v4.02h-2.064v-8.532h1.908v.816zm12.563 2.033c-.512-.862-1.055-1.17-2.001-1.17-1.365 0-2.388 1.093-2.388 2.586 0 1.479 1.069 2.587 2.512 2.587.776 0 1.395-.385 1.877-1.124h2.326c-.279.754-.435 1.031-.869 1.509-.429.468-.951.842-1.533 1.099a4.63 4.63 0 0 1-1.848.395c-2.497 0-4.529-2.033-4.529-4.496 0-2.449 2.017-4.435 4.529-4.435 1.986 0 3.614 1.217 4.25 3.049h-2.326zm-55.014-2.848l1.461 5.205 1.762-5.205h1.706l-2.751 8.531h-1.387l-1.628-5.528-1.675 5.528h-1.322l-2.869-8.531h1.82l1.746 5.205 1.477-5.205h1.66zm9.91.895c.651-.693 1.594-1.087 2.602-1.087 2.234 0 4.138 1.894 4.138 4.358 0 2.325-1.684 4.41-4.182 4.41-1.101 0-1.939-.252-2.73-1.145v1.093h-1.892v-11.38h2.063V44.5zm.473 5.168a2.61 2.61 0 0 0 3.678 0c.488-.484.762-1.141.762-1.826s-.274-1.342-.762-1.826a2.61 2.61 0 0 0-3.678 0c-.488.484-.762 1.141-.762 1.826s.274 1.342.762 1.826zm13.692-5.161v-.692h2.063v8.321h-1.892v-1.093c-.791.893-1.629 1.145-2.73 1.145-2.497 0-4.182-2.085-4.182-4.41 0-2.464 1.905-4.358 4.138-4.358 1.008 0 1.951.394 2.602 1.087zm-4.15 5.161a2.61 2.61 0 0 0 3.678 0c.488-.484.762-1.141.762-1.826s-.274-1.342-.762-1.826a2.61 2.61 0 0 0-3.678 0c-.488.484-.762 1.141-.762 1.826s.274 1.342.762 1.826z"/></svg>
          </a>

          <!-- Item -->
          <a class="swiper-slide text-body" href="#!" aria-label="Puma">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 196 64" fill="currentColor"><path d="M82.282 40.849c0 .669.556 1.211 1.211 1.226.658-.015 1.214-.557 1.214-1.226L84.713 19h7.141v24.085c0 1.18-.938 2.144-2.111 2.144H77.249c-1.165 0-2.114-.963-2.114-2.144V19h7.148l-.002 21.849zM96.607 19h10.818 10.821c1.28 0 2.324 1.049 2.324 2.352v23.877h-7.154V23.327c-.006-.671-.552-1.203-1.213-1.203s-1.202.519-1.21 1.184v21.921h-7.127V23.308c-.015-.665-.55-1.184-1.218-1.184s-1.204.531-1.209 1.203v21.902h-7.155V21.352c0-1.303 1.043-2.352 2.323-2.352zm-32.248 3.124a1.23 1.23 0 0 1 1.21 1.249v10.786c.005.726-.58 1.231-1.21 1.231h-1.214V22.124h1.214zm-1.214 16.513h7.221c1.297 0 2.343-1.054 2.343-2.362V21.362c0-1.307-1.007-2.362-2.297-2.362H56v26.229h7.145v-6.591zm69.42-15.319v12.077h-2.428V23.337a1.21 1.21 0 0 1 1.211-1.199c.666 0 1.2.512 1.217 1.18zm0 15.326v6.585h7.145V21.352c0-1.303-1.043-2.352-2.326-2.352h-12.065c-1.28 0-2.323 1.049-2.323 2.352v23.877h7.141v-6.585h2.428z"/></svg>
          </a>

          <!-- Item -->
          <a class="swiper-slide text-body" href="#!" aria-label="Dior">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 196 64" fill="currentColor"><path d="M56.667 14.837l-1.71-.087-.705-.139-.141-.262c0-.244.176-.348.529-.348h17.684c8.287 0 14.105 2.492 17.49 7.494 1.939 2.893 2.909 6.327 2.909 10.301a18.67 18.67 0 0 1-.97 6.013c-.74 2.039-1.763 3.835-3.085 5.439-1.446 1.69-3.209 2.998-5.237 3.956-2.169.976-4.602 1.481-7.334 1.481h-22.55c-.37 0-.547-.122-.547-.331 0-.227.265-.348.758-.348l4.32-.261c.67-.088 1.146-.28 1.375-.541l.441-.61c.159-.418.247-1.045.265-1.899V17.05c0-1.081-.617-1.743-1.816-2.005l-1.676-.209zm9.521.471l-.124.697v30.693c0 .348.071.592.212.68l.705.104h2.327l5.395-.192c1.446-.157 2.68-.383 3.65-.697.965-.348 1.868-.841 2.68-1.463.705-.575 1.428-1.395 2.222-2.44 1.322-1.708 2.274-3.887 2.856-6.553.352-1.742.529-3.433.529-5.054 0-1.429-.212-2.963-.652-4.619-.617-2.388-1.552-4.479-2.874-6.257-2.556-3.451-6.753-5.159-12.553-5.159h-3.579c-.405-.036-.67.052-.793.261zm30.008 33.116c-.035-.209.141-.296.529-.296l1.234-.035c.67-.087 1.076-.313 1.234-.662l.229-1.255V36.048c0-.383-.141-.68-.406-.854l-.917-.088-1.234.332-.67-.035c-.088-.209.176-.401.793-.575 1.463-.383 2.751-.871 3.844-1.481.67-.383 1.146-.593 1.357-.68l.529-.052c.177.034.265.383.265 1.01v12.758c0 .609.141 1.046.406 1.307.317.314 1.058.471 2.204.471.405 0 .616.088.652.279 0 .158-.123.21-.335.21h-9.398c-.212.001-.317-.086-.317-.225zm41.609-12.549c-.864.889-1.445 1.934-1.763 3.189v7.408c0 .662.229 1.133.705 1.429l1.076.191 1.128.122c.265.035.371.088.371.227l-.052.122-.3.088h-9.433c-.282 0-.44-.088-.44-.227l.264-.209 1.587-.122c.616-.105 1.005-.313 1.216-.627l.265-.784V36.223l-.177-.767-.299-.174c-.088-.087-.229-.139-.441-.174-.264-.017-.582.035-.916.174l-.899.244-.512-.122c-.088-.122-.053-.209.07-.261l.758-.314c1.728-.505 3.121-1.028 4.091-1.568l1.199-.645.529.034.211.436v3.834c1.323-2.126 2.381-3.433 3.104-3.869.44-.261.864-.471 1.181-.557l.617-.052c.388-.035.829.087 1.322.401.67.383 1.023.958 1.058 1.69.035.611-.142 1.082-.529 1.447-.353.296-.706.384-1.023.296-.299-.052-.529-.174-.687-.348l-.494-.609c-.388-.558-.758-.733-1.198-.575-.514.138-1.042.522-1.589 1.132zm-36.848-14.327c-.653 0-1.182.227-1.622.662-.476.436-.705.993-.671 1.639-.035.61.194 1.133.671 1.569.44.436.969.662 1.622.662.616 0 1.163-.227 1.604-.662s.687-.958.687-1.569a2.25 2.25 0 0 0-.687-1.639c-.441-.436-.988-.662-1.604-.662zm9.344 13.908a8.07 8.07 0 0 1 2.38-2.091 7.87 7.87 0 0 1 2.575-.959l3.262-.191c1.18.052 2.274.279 3.262.714 2.38 1.046 3.878 2.964 4.442 5.752.582 2.824.089 5.212-1.464 7.146-1.321 1.638-3.067 2.684-5.271 3.137-2.309.506-4.46.348-6.4-.435-2.522-1.011-4.055-3.016-4.549-5.944-.441-2.771.141-5.124 1.763-7.129zm10.331-.784c-1.075-1.185-2.433-1.708-4.073-1.569-1.586.157-2.802 1.028-3.596 2.684-.722 1.499-.988 3.33-.722 5.491.193 2.144.881 3.852 1.991 5.159 1.182 1.377 2.522 1.952 4.02 1.691a4.76 4.76 0 0 0 3.474-2.527c.74-1.429 1.004-3.277.828-5.63-.211-2.353-.828-4.097-1.922-5.299zm-24.559.767v.174l-.388-.244v.087l.035.157h-.053v-.332h.018l.352.262v-.262h.071l-.035.157z"/></svg>
          </a>
        </div>

        <!-- Pagination (Bullets) -->
        <div class="swiper-pagination position-static mt-3"></div>
      </div>
    </section>


    <!-- Reviews carousel -->
    <section class="bg-body-tertiary py-5">
      <div class="container py-1 py-sm-2 py-md-3 py-lg-4 py-xl-5">
        <h2 class="text-center pb-2 pb-md-3 pb-lg-4 pt-xxl-3">Happy customers</h2>
        <div class="position-relative pb-xxl-3">

          <!-- External slider prev/next buttons visible on screens > 500px wide (sm breakpoint) -->
          <button type="button" class="btn btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start position-absolute top-50 start-0 z-2 translate-middle d-none d-sm-inline-flex mt-n4" id="reviewsPrev" aria-label="Prev">
            <i class="ci-chevron-left fs-lg animate-target"></i>
          </button>
          <button type="button" class="btn btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end position-absolute top-50 start-100 z-2 translate-middle d-none d-sm-inline-flex mt-n4" id="reviewsNext" aria-label="Next">
            <i class="ci-chevron-right fs-lg animate-target"></i>
          </button>

          <!-- Slider -->
          <div class="swiper" data-swiper='{
            "slidesPerView": 1,
            "spaceBetween": 24,
            "loop": true,
            "navigation": {
              "prevEl": "#reviewsPrev",
              "nextEl": "#reviewsNext"
            },
            "pagination": {
              "el": ".swiper-pagination",
              "clickable": true
            },
            "breakpoints": {
              "600": {
                "slidesPerView": 2
              },
              "992": {
                "slidesPerView": 3
              }
            }
          }'>
            <div class="swiper-wrapper">

              <!-- Review -->
              <div class="swiper-slide h-auto">
                <div class="card h-100 border-0 rounded-4 p-sm-2">
                  <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                      <div class="ratio ratio-1x1 flex-shrink-0" style="max-width: 80px">
                        <img src="assets/img/home/fashion/v1/reviews/01.png" width="80" alt="Image">
                      </div>
                      <div class="ps-2 ms-1">
                        <div class="d-flex gap-1 fs-xs pb-2 mb-1">
                          <i class="ci-star-filled text-warning"></i>
                          <i class="ci-star-filled text-warning"></i>
                          <i class="ci-star-filled text-warning"></i>
                          <i class="ci-star-filled text-warning"></i>
                          <i class="ci-star-filled text-warning"></i>
                        </div>
                        <h3 class="h6 mb-0">Victoria Gardner</h3>
                      </div>
                    </div>
                    <p class="mb-0">Very satisfied with the bag! A wonderful shopper, not too big and not too small, but as it should be 🔥 The bag looks more expensive than it costs.</p>
                  </div>
                </div>
              </div>

              <!-- Review -->
              <div class="swiper-slide h-auto">
                <div class="card h-100 border-0 rounded-4 p-sm-2">
                  <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                      <div class="ratio ratio-1x1 flex-shrink-0" style="max-width: 80px">
                        <img src="assets/img/home/fashion/v1/reviews/02.png" width="80" alt="Image">
                      </div>
                      <div class="ps-2 ms-1">
                        <div class="d-flex gap-1 fs-xs pb-2 mb-1">
                          <i class="ci-star-filled text-warning"></i>
                          <i class="ci-star-filled text-warning"></i>
                          <i class="ci-star-filled text-warning"></i>
                          <i class="ci-star-filled text-warning"></i>
                          <i class="ci-star-filled text-warning"></i>
                        </div>
                        <h3 class="h6 mb-0">Alexandra D.</h3>
                      </div>
                    </div>
                    <p class="mb-0">A wonderful compact bag, holds a lot of things, good tailoring, smooth seams, strong fittings, good quality.</p>
                  </div>
                </div>
              </div>

              <!-- Review -->
              <div class="swiper-slide h-auto">
                <div class="card h-100 border-0 rounded-4 p-sm-2">
                  <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                      <div class="ratio ratio-1x1 flex-shrink-0" style="max-width: 80px">
                        <img src="assets/img/home/fashion/v1/reviews/03.png" width="80" alt="Image">
                      </div>
                      <div class="ps-2 ms-1">
                        <div class="d-flex gap-1 fs-xs pb-2 mb-1">
                          <i class="ci-star-filled text-warning"></i>
                          <i class="ci-star-filled text-warning"></i>
                          <i class="ci-star-filled text-warning"></i>
                          <i class="ci-star-filled text-warning"></i>
                          <i class="ci-star-filled text-warning"></i>
                        </div>
                        <h3 class="h6 mb-0">Jenny Wilson</h3>
                      </div>
                    </div>
                    <p class="mb-0">Elegant blouse and the color is very nice, the seams are neat. 🛍 Excellent quality fabric, for summer weather is very good because the fabric is light and does not stick to the body.</p>
                  </div>
                </div>
              </div>

              <!-- Review -->
              <div class="swiper-slide h-auto">
                <div class="card h-100 border-0 rounded-4 p-sm-2">
                  <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                      <div class="ratio ratio-1x1 flex-shrink-0" style="max-width: 80px">
                        <img src="assets/img/home/fashion/v1/reviews/04.png" width="80" alt="Image">
                      </div>
                      <div class="ps-2 ms-1">
                        <div class="d-flex gap-1 fs-xs pb-2 mb-1">
                          <i class="ci-star-filled text-warning"></i>
                          <i class="ci-star-filled text-warning"></i>
                          <i class="ci-star-filled text-warning"></i>
                          <i class="ci-star-filled text-warning"></i>
                          <i class="ci-star text-body-tertiary opacity-75"></i>
                        </div>
                        <h3 class="h6 mb-0">Kristin Watson</h3>
                      </div>
                    </div>
                    <p class="mb-0">The quality is impeccable, sturdy yet stylish. They provide excellent support, comfortable for all-day wear. The massive design adds a unique edge to any outfit.</p>
                  </div>
                </div>
              </div>

              <!-- Review -->
              <div class="swiper-slide h-auto">
                <div class="card h-100 border-0 rounded-4 p-sm-2">
                  <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                      <div class="ratio ratio-1x1 flex-shrink-0" style="max-width: 80px">
                        <img src="assets/img/home/fashion/v1/reviews/05.png" width="80" alt="Image">
                      </div>
                      <div class="ps-2 ms-1">
                        <div class="d-flex gap-1 fs-xs pb-2 mb-1">
                          <i class="ci-star-filled text-warning"></i>
                          <i class="ci-star-filled text-warning"></i>
                          <i class="ci-star-filled text-warning"></i>
                          <i class="ci-star-filled text-warning"></i>
                          <i class="ci-star-filled text-warning"></i>
                        </div>
                        <h3 class="h6 mb-0">Daniel Adams</h3>
                      </div>
                    </div>
                    <p class="mb-0">These sunglasses are a game-changer! Not only do they offer superior protection from the sun, but they also elevate my style.</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pagination (Bullets) -->
            <div class="swiper-pagination position-static pt-3 mt-sm-1 mt-md-2 mt-lg-3"></div>
          </div>
        </div>
      </div>
    </section>


    <!-- Instagram feed -->
    <section class="container pt-5 mt-1 mt-sm-2 mt-md-3 mt-lg-4 mt-xl-5">
      <div class="text-center pt-xxl-3 pb-2 pb-md-3">
        <h2 class="pb-2 mb-1">
          <span class="animate-underline">
            <a class="animate-target text-dark-emphasis text-decoration-none" href="#!">#cartzilla</a>
          </span>
        </h2>
        <p>Find more inspiration on our Instagram</p>
      </div>
      <div class="overflow-x-auto pb-3 mb-n3" data-simplebar>
        <div class="d-flex gap-2 gap-md-3 gap-lg-4" style="min-width: 700px">
          <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden" href="#!">
            <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
            <i class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
            <div class="hover-effect-target ratio ratio-1x1">
              <img src="assets/img/instagram/01.jpg" alt="Instagram image">
            </div>
          </a>
          <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden" href="#!">
            <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
            <i class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
            <div class="hover-effect-target ratio ratio-1x1">
              <img src="assets/img/instagram/02.jpg" alt="Instagram image">
            </div>
          </a>
          <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden" href="#!">
            <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
            <i class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
            <div class="hover-effect-target ratio ratio-1x1">
              <img src="assets/img/instagram/03.jpg" alt="Instagram image">
            </div>
          </a>
          <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden" href="#!">
            <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
            <i class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
            <div class="hover-effect-target ratio ratio-1x1">
              <img src="assets/img/instagram/04.jpg" alt="Instagram image">
            </div>
          </a>
          <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden" href="#!">
            <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
            <i class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
            <div class="hover-effect-target ratio ratio-1x1">
              <img src="assets/img/instagram/05.jpg" alt="Instagram image">
            </div>
          </a>
        </div>
      </div>
    </section>
  </main>



</x-www-layout>

