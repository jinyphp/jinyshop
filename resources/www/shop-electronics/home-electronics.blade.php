<x-www-layout>

    <!-- Page content -->
    <main class="content-wrapper">

      <!-- Hero slider -->
      <section class="container pt-4">
        <div class="row">
          <div class="col-lg-9 offset-lg-3">
            <div class="position-relative">
              <span class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none-dark rtl-flip" style="background: linear-gradient(90deg, #accbee 0%, #e7f0fd 100%)"></span>
              <span class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none d-block-dark rtl-flip" style="background: linear-gradient(90deg, #1b273a 0%, #1f2632 100%)"></span>
              <div class="row justify-content-center position-relative z-2">
                <div class="col-xl-5 col-xxl-4 offset-xxl-1 d-flex align-items-center mt-xl-n3">

                  <!-- Text content master slider -->
                  <div class="swiper px-5 pe-xl-0 ps-xxl-0 me-xl-n5" data-swiper='{
                    "spaceBetween": 64,
                    "loop": true,
                    "speed": 400,
                    "controlSlider": "#sliderImages",
                    "autoplay": {
                      "delay": 5500,
                      "disableOnInteraction": false
                    },
                    "scrollbar": {
                      "el": ".swiper-scrollbar"
                    }
                  }'>
                    <div class="swiper-wrapper">
                      <div class="swiper-slide text-center text-xl-start pt-5 py-xl-5">
                        <p class="text-body">Feel the real quality sound</p>
                        <h2 class="display-4 pb-2 pb-xl-4">Headphones ProMax</h2>
                        <a class="btn btn-lg btn-primary" href="shop-product-general-electronics">
                          Shop now
                          <i class="ci-arrow-up-right fs-lg ms-2 me-n1"></i>
                        </a>
                      </div>
                      <div class="swiper-slide text-center text-xl-start pt-5 py-xl-5">
                        <p class="text-body">Deal of the week</p>
                        <h2 class="display-4 pb-2 pb-xl-4">Powerful iPad Pro M2</h2>
                        <a class="btn btn-lg btn-primary" href="shop-product-general-electronics">
                          Shop now
                          <i class="ci-arrow-up-right fs-lg ms-2 me-n1"></i>
                        </a>
                      </div>
                      <div class="swiper-slide text-center text-xl-start pt-5 py-xl-5">
                        <p class="text-body">Virtual reality glasses</p>
                        <h2 class="display-4 pb-2 pb-xl-4">Experience New Reality</h2>
                        <a class="btn btn-lg btn-primary" href="shop-catalog-electronics">
                          Shop now
                          <i class="ci-arrow-up-right fs-lg ms-2 me-n1"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-9 col-sm-7 col-md-6 col-lg-5 col-xl-7">

                  <!-- Binded images (controlled slider) -->
                  <div class="swiper user-select-none" id="sliderImages" data-swiper='{
                    "allowTouchMove": false,
                    "loop": true,
                    "effect": "fade",
                    "fadeEffect": {
                      "crossFade": true
                    }
                  }'>
                    <div class="swiper-wrapper">
                      <div class="swiper-slide d-flex justify-content-end">
                        <div class="ratio rtl-flip" style="max-width: 495px; --cz-aspect-ratio: calc(537 / 495 * 100%)">
                          <img src="/assets/img/home/electronics/hero-slider/01.png" alt="Image">
                        </div>
                      </div>
                      <div class="swiper-slide d-flex justify-content-end">
                        <div class="ratio rtl-flip" style="max-width: 495px; --cz-aspect-ratio: calc(537 / 495 * 100%)">
                          <img src="/assets/img/home/electronics/hero-slider/02.png" alt="Image">
                        </div>
                      </div>
                      <div class="swiper-slide d-flex justify-content-end">
                        <div class="ratio rtl-flip" style="max-width: 495px; --cz-aspect-ratio: calc(537 / 495 * 100%)">
                          <img src="/assets/img/home/electronics/hero-slider/03.png" alt="Image">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Scrollbar -->
              <div class="row justify-content-center" data-bs-theme="dark">
                <div class="col-xxl-10">
                  <div class="position-relative mx-5 mx-xxl-0">
                    <div class="swiper-scrollbar mb-4"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Features -->
      <section class="container pt-5 mt-1 mt-sm-3 mt-lg-4">
        <div class="row row-cols-2 row-cols-md-4 g-4">

          <!-- Item -->
          <div class="col">
            <div class="d-flex flex-column flex-xxl-row align-items-center">
              <div class="d-flex text-dark-emphasis bg-body-tertiary rounded-circle p-4 mb-3 mb-xxl-0">
                <i class="ci-delivery fs-2 m-xxl-1"></i>
              </div>
              <div class="text-center text-xxl-start ps-xxl-3">
                <h3 class="h6 mb-1">Free Shipping &amp; Returns</h3>
                <p class="fs-sm mb-0">For all orders over $199.00</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="d-flex flex-column flex-xxl-row align-items-center">
              <div class="d-flex text-dark-emphasis bg-body-tertiary rounded-circle p-4 mb-3 mb-xxl-0">
                <i class="ci-credit-card fs-2 m-xxl-1"></i>
              </div>
              <div class="text-center text-xxl-start ps-xxl-3">
                <h3 class="h6 mb-1">Secure Payment</h3>
                <p class="fs-sm mb-0">We ensure secure payment</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="d-flex flex-column flex-xxl-row align-items-center">
              <div class="d-flex text-dark-emphasis bg-body-tertiary rounded-circle p-4 mb-3 mb-xxl-0">
                <i class="ci-refresh-cw fs-2 m-xxl-1"></i>
              </div>
              <div class="text-center text-xxl-start ps-xxl-3">
                <h3 class="h6 mb-1">Money Back Guarantee</h3>
                <p class="fs-sm mb-0">Returning money 30 days</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="d-flex flex-column flex-xxl-row align-items-center">
              <div class="d-flex text-dark-emphasis bg-body-tertiary rounded-circle p-4 mb-3 mb-xxl-0">
                <i class="ci-chat fs-2 m-xxl-1"></i>
              </div>
              <div class="text-center text-xxl-start ps-xxl-3">
                <h3 class="h6 mb-1">24/7 Customer Support</h3>
                <p class="fs-sm mb-0">Friendly customer support</p>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- New arrivals (List) -->
      <section class="container pt-5 mt-1 mt-sm-2 mt-md-3 mt-lg-4">
        <h2 class="h3 pb-2 pb-sm-3">New arrivals</h2>
        <div class="row">

          <!-- Banner -->
          <div class="col-lg-4" data-bs-theme="dark">
            <div class="d-flex flex-column align-items-center justify-content-end h-100 text-center overflow-hidden rounded-5 px-4 px-lg-3 pt-4 pb-5" style="background: #1d2c41 url(/assets/img/home/electronics/banner/background.jpg) center/cover no-repeat">
              <div class="ratio animate-up-down position-relative z-2 me-lg-4" style="max-width: 320px; margin-bottom: -19%; --cz-aspect-ratio: calc(690 / 640 * 100%)">
                <img src="/assets/img/home/electronics/banner/laptop.png" alt="Laptop">
              </div>
              <h3 class="display-2 mb-2">MacBook</h3>
              <p class="text-body fw-medium mb-4">Be Pro Anywhere</p>
              <a class="btn btn-sm btn-primary" href="#!">
                From $1,199
                <i class="ci-arrow-up-right fs-base ms-1 me-n1"></i>
              </a>
            </div>
          </div>

          <!-- Product list -->
          <div class="col-sm-6 col-lg-4 d-flex flex-column gap-3 pt-4 py-lg-4">

            <!-- Item -->
            <div class="position-relative animate-underline d-flex align-items-center ps-xl-3">
              <div class="ratio ratio-1x1 flex-shrink-0" style="width: 110px">
                <img src="/assets/img/shop/electronics/thumbs/01.png" alt="Smart Watch">
              </div>
              <div class="w-100 min-w-0 ps-2 ps-sm-3">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <div class="d-flex gap-1 fs-xs">
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                  </div>
                  <span class="text-body-tertiary fs-xs">45</span>
                </div>
                <h4 class="mb-2">
                  <a class="stretched-link d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics">
                    <span class="animate-target">Smart Watch Series 7, White</span>
                  </a>
                </h4>
                <div class="h5 mb-0">$449.00</div>
              </div>
            </div>

            <!-- Item -->
            <div class="position-relative animate-underline d-flex align-items-center ps-xl-3">
              <div class="ratio ratio-1x1 flex-shrink-0" style="width: 110px">
                <img src="/assets/img/shop/electronics/thumbs/03.png" width="110" alt="VR Glasses">
              </div>
              <div class="w-100 min-w-0 ps-2 ps-sm-3">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <div class="d-flex gap-1 fs-xs">
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-half text-warning"></i>
                    <i class="ci-star text-body-tertiary opacity-75"></i>
                  </div>
                  <span class="text-body-tertiary fs-xs">123</span>
                </div>
                <h4 class="mb-2">
                  <a class="stretched-link d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics">
                    <span class="animate-target">VRB01 Virtual Reality Glasses</span>
                  </a>
                </h4>
                <div class="h5 mb-0">$340.99</div>
              </div>
            </div>

            <!-- Item -->
            <div class="position-relative animate-underline d-flex align-items-center ps-xl-3">
              <div class="ratio ratio-1x1 flex-shrink-0" style="width: 110px">
                <img src="/assets/img/shop/electronics/thumbs/05.png" width="110" alt="Bluetooth Headphones">
              </div>
              <div class="w-100 min-w-0 ps-2 ps-sm-3">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <div class="d-flex gap-1 fs-xs">
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star text-body-tertiary opacity-75"></i>
                  </div>
                  <span class="text-body-tertiary fs-xs">34</span>
                </div>
                <h4 class="mb-2">
                  <a class="stretched-link d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics">
                    <span class="animate-target">Wireless Bluetooth Headphones Sony</span>
                  </a>
                </h4>
                <div class="h5 mb-0">$357.00</div>
              </div>
            </div>

            <!-- Item -->
            <div class="position-relative animate-underline d-flex align-items-center ps-xl-3">
              <div class="ratio ratio-1x1 flex-shrink-0" style="width: 110px">
                <img src="/assets/img/shop/electronics/thumbs/07.png" width="110" alt="MacBook">
              </div>
              <div class="w-100 min-w-0 ps-2 ps-sm-3">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <div class="d-flex gap-1 fs-xs">
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                  </div>
                  <span class="text-body-tertiary fs-xs">34</span>
                </div>
                <h4 class="mb-2">
                  <a class="stretched-link d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics">
                    <span class="animate-target">Laptop Apple MacBook Pro 13 M2</span>
                  </a>
                </h4>
                <div class="h5 mb-0">$1,200.00</div>
              </div>
            </div>
          </div>

          <!-- Product list -->
          <div class="col-sm-6 col-lg-4 d-flex flex-column gap-3 pt-3 py-lg-4">

            <!-- Item -->
            <div class="position-relative animate-underline d-flex align-items-center ps-xl-3">
              <div class="ratio ratio-1x1 flex-shrink-0" style="width: 110px">
                <img src="/assets/img/shop/electronics/thumbs/02.png" width="110" alt="iPad Pro">
              </div>
              <div class="w-100 min-w-0 ps-2 ps-sm-3">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <div class="d-flex gap-1 fs-xs">
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star text-body-tertiary opacity-75"></i>
                  </div>
                  <span class="text-body-tertiary fs-xs">126</span>
                </div>
                <h4 class="mb-2">
                  <a class="stretched-link d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics">
                    <span class="animate-target">Tablet Apple iPad Air M1</span>
                  </a>
                </h4>
                <div class="h5 mb-0">$540.00</div>
              </div>
            </div>

            <!-- Item -->
            <div class="position-relative animate-underline d-flex align-items-center ps-xl-3">
              <div class="ratio ratio-1x1 flex-shrink-0" style="width: 110px">
                <img src="/assets/img/shop/electronics/thumbs/04.png" width="110" alt="AirPods 2 Pro">
              </div>
              <div class="w-100 min-w-0 ps-2 ps-sm-3">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <div class="d-flex gap-1 fs-xs">
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                  </div>
                  <span class="text-body-tertiary fs-xs">340</span>
                </div>
                <h4 class="mb-2">
                  <a class="stretched-link d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics"><span class="animate-target">Headphones Apple AirPods 2 Pro</span></a>
                </h4>
                <div class="h5 mb-0">$209.99 <del class="text-body-tertiary fs-sm fw-normal">$356.00</del></div>
              </div>
            </div>

            <!-- Item -->
            <div class="position-relative animate-underline d-flex align-items-center ps-xl-3">
              <div class="ratio ratio-1x1 flex-shrink-0" style="width: 110px">
                <img src="/assets/img/shop/electronics/thumbs/06.png" width="110" alt="Power Bank">
              </div>
              <div class="w-100 min-w-0 ps-2 ps-sm-3">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <div class="d-flex gap-1 fs-xs">
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star text-body-tertiary opacity-75"></i>
                  </div>
                  <span class="text-body-tertiary fs-xs">29</span>
                </div>
                <h4 class="mb-2">
                  <a class="stretched-link d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics">
                    <span class="animate-target">Power Bank PBS 10000 mAh Black</span>
                  </a>
                </h4>
                <div class="h5 mb-0">$49.99</div>
              </div>
            </div>

            <!-- Item -->
            <div class="position-relative animate-underline d-flex align-items-center ps-xl-3">
              <div class="ratio ratio-1x1 flex-shrink-0" style="width: 110px">
                <img src="/assets/img/shop/electronics/thumbs/08.png" width="110" alt="iPhone 14">
              </div>
              <div class="w-100 min-w-0 ps-2 ps-sm-3">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <div class="d-flex gap-1 fs-xs">
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                  </div>
                  <span class="text-body-tertiary fs-xs">12</span>
                </div>
                <h4 class="mb-2">
                  <a class="stretched-link d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics">
                    <span class="animate-target">Apple iPhone 14 128GB White</span>
                  </a>
                </h4>
                <div class="h5 mb-0">$899.00 <del class="text-body-tertiary fs-sm fw-normal">$958.00</del></div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Trending products (Grid) -->
      <section class="container pt-5 mt-2 mt-sm-3 mt-lg-4">

        <!-- Heading -->
        <div class="d-flex align-items-center justify-content-between border-bottom pb-3 pb-md-4">
          <h2 class="h3 mb-0">Trending products</h2>
          <div class="nav ms-3">
            <a class="nav-link animate-underline px-0 py-2" href="shop-catalog-electronics">
              <span class="animate-target">View all</span>
              <i class="ci-chevron-right fs-base ms-1"></i>
            </a>
          </div>
        </div>

        <!-- Product grid -->
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4 pt-4">

          <!-- Item -->
          <div class="col">
            <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
              <div class="position-relative">
                <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                  <div class="d-flex flex-column gap-2">
                    <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                      <i class="ci-heart fs-base animate-target"></i>
                    </button>
                    <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                      <i class="ci-refresh-cw fs-base animate-target"></i>
                    </button>
                  </div>
                </div>
                <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                  <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                    <i class="ci-more-vertical fs-lg"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                    <li>
                      <a class="dropdown-item" href="#!">
                        <i class="ci-heart fs-sm ms-n1 me-2"></i>
                        Add to Wishlist
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#!">
                        <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                        Compare
                      </a>
                    </li>
                  </ul>
                </div>
                <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics">
                  <span class="badge bg-danger position-absolute top-0 start-0 mt-2 ms-2 mt-lg-3 ms-lg-3">-21%</span>
                  <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                    <img src="/assets/img/shop/electronics/01.png" alt="VR Glasses">
                  </div>
                </a>
              </div>
              <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <div class="d-flex gap-1 fs-xs">
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star text-body-tertiary opacity-75"></i>
                  </div>
                  <span class="text-body-tertiary fs-xs">(123)</span>
                </div>
                <h3 class="pb-1 mb-2">
                  <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics">
                    <span class="animate-target">VRB01 Virtual Reality Glasses</span>
                  </a>
                </h3>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="h5 lh-1 mb-0">$340.99 <del class="text-body-tertiary fs-sm fw-normal">$430.00</del></div>
                  <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                    <i class="ci-shopping-cart fs-base animate-target"></i>
                  </button>
                </div>
              </div>
              <div class="product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom shadow mt-n2 p-3 pt-1">
                <span class="position-absolute top-0 start-0 w-100 bg-body mt-n2 py-2"></span>
                <ul class="list-unstyled d-flex flex-column gap-2 m-0">
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Display:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">OLED 1440x1600</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Graphics:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">Adreno 540</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Sound:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">2x3.5mm jack</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Input:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">4 built-in cameras</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
              <div class="position-relative">
                <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                  <div class="d-flex flex-column gap-2">
                    <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                      <i class="ci-heart fs-base animate-target"></i>
                    </button>
                    <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                      <i class="ci-refresh-cw fs-base animate-target"></i>
                    </button>
                  </div>
                </div>
                <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                  <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                    <i class="ci-more-vertical fs-lg"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                    <li>
                      <a class="dropdown-item" href="#!">
                        <i class="ci-heart fs-sm ms-n1 me-2"></i>
                        Add to Wishlist
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#!">
                        <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                        Compare
                      </a>
                    </li>
                  </ul>
                </div>
                <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics">
                  <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                    <img src="/assets/img/shop/electronics/02.png" alt="iPhone 14">
                  </div>
                </a>
              </div>
              <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <div class="d-flex gap-1 fs-xs">
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-half text-warning"></i>
                  </div>
                  <span class="text-body-tertiary fs-xs">(142)</span>
                </div>
                <h3 class="pb-1 mb-2">
                  <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics">
                    <span class="animate-target">Apple iPhone 14 128GB White</span>
                  </a>
                </h3>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="h5 lh-1 mb-0">$899.00</div>
                  <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                    <i class="ci-shopping-cart fs-base animate-target"></i>
                  </button>
                </div>
              </div>
              <div class="product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom shadow mt-n2 p-3 pt-1">
                <span class="position-absolute top-0 start-0 w-100 bg-body mt-n2 py-2"></span>
                <ul class="list-unstyled d-flex flex-column gap-2 m-0">
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Display:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">6.1" XDR</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Capacity:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">128 GB</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Chip:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">A15 Bionic</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Camera:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">12 + 12 MP</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Weight:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">172 grams</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
              <div class="position-relative">
                <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                  <div class="d-flex flex-column gap-2">
                    <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                      <i class="ci-heart fs-base animate-target"></i>
                    </button>
                    <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                      <i class="ci-refresh-cw fs-base animate-target"></i>
                    </button>
                  </div>
                </div>
                <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                  <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                    <i class="ci-more-vertical fs-lg"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                    <li>
                      <a class="dropdown-item" href="#!">
                        <i class="ci-heart fs-sm ms-n1 me-2"></i>
                        Add to Wishlist
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#!">
                        <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                        Compare
                      </a>
                    </li>
                  </ul>
                </div>
                <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics">
                  <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                    <img src="/assets/img/shop/electronics/03.png" alt="Smart Watch">
                  </div>
                </a>
              </div>
              <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <div class="d-flex gap-1 fs-xs">
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                  </div>
                  <span class="text-body-tertiary fs-xs">(67)</span>
                </div>
                <h3 class="pb-1 mb-2">
                  <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics">
                    <span class="animate-target">Smart Watch Series 7, White</span>
                  </a>
                </h3>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="h5 lh-1 mb-0">$429.00</div>
                  <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                    <i class="ci-shopping-cart fs-base animate-target"></i>
                  </button>
                </div>
              </div>
              <div class="product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom shadow mt-n2 p-3 pt-1">
                <span class="position-absolute top-0 start-0 w-100 bg-body mt-n2 py-2"></span>
                <ul class="list-unstyled d-flex flex-column gap-2 m-0">
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Display:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">45mm OLED</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Chip:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">64-bit Dual-core</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Connectivity:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">Wi-Fi, Bluetooth</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Power:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">Lithium-ion battery</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Weight:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">37.0 grams</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
              <div class="position-relative">
                <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                  <div class="d-flex flex-column gap-2">
                    <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                      <i class="ci-heart fs-base animate-target"></i>
                    </button>
                    <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                      <i class="ci-refresh-cw fs-base animate-target"></i>
                    </button>
                  </div>
                </div>
                <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                  <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                    <i class="ci-more-vertical fs-lg"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                    <li>
                      <a class="dropdown-item" href="#!">
                        <i class="ci-heart fs-sm ms-n1 me-2"></i>
                        Add to Wishlist
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#!">
                        <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                        Compare
                      </a>
                    </li>
                  </ul>
                </div>
                <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics">
                  <span class="badge bg-info position-absolute top-0 start-0 mt-2 ms-2 mt-lg-3 ms-lg-3">New</span>
                  <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                    <img src="/assets/img/shop/electronics/04.png" alt="MacBook">
                  </div>
                </a>
              </div>
              <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <div class="d-flex gap-1 fs-xs">
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-half text-warning"></i>
                  </div>
                  <span class="text-body-tertiary fs-xs">(51)</span>
                </div>
                <h3 class="pb-1 mb-2">
                  <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics">
                    <span class="animate-target">Laptop Apple MacBook Pro 13 M2</span>
                  </a>
                </h3>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="h5 lh-1 mb-0">$1,200.00</div>
                  <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                    <i class="ci-shopping-cart fs-base animate-target"></i>
                  </button>
                </div>
              </div>
              <div class="product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom shadow mt-n2 p-3 pt-1">
                <span class="position-absolute top-0 start-0 w-100 bg-body mt-n2 py-2"></span>
                <ul class="list-unstyled d-flex flex-column gap-2 m-0">
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Chip:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">Apple M2</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Memory:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">8 GB unified</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Storage:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">256 GB SSD</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Display:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">13.3-inch Retina</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
              <div class="posittion-relative">
                <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                  <div class="d-flex flex-column gap-2">
                    <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                      <i class="ci-heart fs-base animate-target"></i>
                    </button>
                    <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                      <i class="ci-refresh-cw fs-base animate-target"></i>
                    </button>
                  </div>
                </div>
                <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                  <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                    <i class="ci-more-vertical fs-lg"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                    <li>
                      <a class="dropdown-item" href="#!">
                        <i class="ci-heart fs-sm ms-n1 me-2"></i>
                        Add to Wishlist
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#!">
                        <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                        Compare
                      </a>
                    </li>
                  </ul>
                </div>
                <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics">
                  <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                    <img src="/assets/img/shop/electronics/05.png" alt="iPad Air">
                  </div>
                </a>
              </div>
              <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <div class="d-flex gap-1 fs-xs">
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                  </div>
                  <span class="text-body-tertiary fs-xs">(12)</span>
                </div>
                <h3 class="pb-1 mb-2">
                  <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics">
                    <span class="animate-target">Tablet Apple iPad Air M1</span>
                  </a>
                </h3>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="h5 lh-1 mb-0">$540.00</div>
                  <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                    <i class="ci-shopping-cart fs-base animate-target"></i>
                  </button>
                </div>
              </div>
              <div class="product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom shadow mt-n2 p-3 pt-1">
                <span class="position-absolute top-0 start-0 w-100 bg-body mt-n2 py-2"></span>
                <ul class="list-unstyled d-flex flex-column gap-2 m-0">
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Display:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">10.9" LED</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Capacity:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">64 GB</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Chip:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">Apple M1</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Camera:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">12 MP Wide</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Weight:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">462 grams</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
              <div class="position-relative">
                <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                  <div class="d-flex flex-column gap-2">
                    <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                      <i class="ci-heart fs-base animate-target"></i>
                    </button>
                    <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                      <i class="ci-refresh-cw fs-base animate-target"></i>
                    </button>
                  </div>
                </div>
                <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                  <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                    <i class="ci-more-vertical fs-lg"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                    <li>
                      <a class="dropdown-item" href="#!">
                        <i class="ci-heart fs-sm ms-n1 me-2"></i>
                        Add to Wishlist
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#!">
                        <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                        Compare
                      </a>
                    </li>
                  </ul>
                </div>
                <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics">
                  <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                    <img src="/assets/img/shop/electronics/06.png" alt="AirPods 2">
                  </div>
                </a>
              </div>
              <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <div class="d-flex gap-1 fs-xs">
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star text-body-tertiary opacity-75"></i>
                  </div>
                  <span class="text-body-tertiary fs-xs">(78)</span>
                </div>
                <h3 class="pb-1 mb-2">
                  <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics">
                    <span class="animate-target">Headphones Apple AirPods 2 Pro</span>
                  </a>
                </h3>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="h5 lh-1 mb-0">$224.00</div>
                  <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                    <i class="ci-shopping-cart fs-base animate-target"></i>
                  </button>
                </div>
              </div>
              <div class="product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom shadow mt-n2 p-3 pt-1">
                <span class="position-absolute top-0 start-0 w-100 bg-body mt-n2 py-2"></span>
                <ul class="list-unstyled d-flex flex-column gap-2 m-0">
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Audio:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">Noise Cancellation</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Sensors:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">Touch control</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Chip:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">Apple H2</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Weight:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">50.8 grams</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
              <div class="posittion-relative">
                <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                  <div class="d-flex flex-column gap-2">
                    <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                      <i class="ci-heart fs-base animate-target"></i>
                    </button>
                    <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                      <i class="ci-refresh-cw fs-base animate-target"></i>
                    </button>
                  </div>
                </div>
                <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                  <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                    <i class="ci-more-vertical fs-lg"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                    <li>
                      <a class="dropdown-item" href="#!">
                        <i class="ci-heart fs-sm ms-n1 me-2"></i>
                        Add to Wishlist
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#!">
                        <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                        Compare
                      </a>
                    </li>
                  </ul>
                </div>
                <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics">
                  <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                    <img src="/assets/img/shop/electronics/07.png" alt="iPad Pro">
                  </div>
                </a>
              </div>
              <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <div class="d-flex gap-1 fs-xs">
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-half text-warning"></i>
                  </div>
                  <span class="text-body-tertiary fs-xs">(49)</span>
                </div>
                <h3 class="pb-1 mb-2">
                  <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics">
                    <span class="animate-target">Tablet Apple iPad Pro M1</span>
                  </a>
                </h3>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="h5 lh-1 mb-0">$739.00</div>
                  <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                    <i class="ci-shopping-cart fs-base animate-target"></i>
                  </button>
                </div>
              </div>
              <div class="product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom shadow mt-n2 p-3 pt-1">
                <span class="position-absolute top-0 start-0 w-100 bg-body mt-n2 py-2"></span>
                <ul class="list-unstyled d-flex flex-column gap-2 m-0">
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Display:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">11" LED</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Capacity:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">128 GB</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Chip:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">Apple M1</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Camera:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">12 MP Wide</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Weight:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">470 grams</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
              <div class="posittion-relative">
                <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                  <div class="d-flex flex-column gap-2">
                    <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                      <i class="ci-heart fs-base animate-target"></i>
                    </button>
                    <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                      <i class="ci-refresh-cw fs-base animate-target"></i>
                    </button>
                  </div>
                </div>
                <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                  <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                    <i class="ci-more-vertical fs-lg"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                    <li>
                      <a class="dropdown-item" href="#!">
                        <i class="ci-heart fs-sm ms-n1 me-2"></i>
                        Add to Wishlist
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#!">
                        <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                        Compare
                      </a>
                    </li>
                  </ul>
                </div>
                <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics">
                  <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                    <img src="/assets/img/shop/electronics/08.png" alt="Bluetooth Headphones">
                  </div>
                </a>
              </div>
              <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <div class="d-flex gap-1 fs-xs">
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-half text-warning"></i>
                    <i class="ci-star text-body-tertiary opacity-75"></i>
                  </div>
                  <span class="text-body-tertiary fs-xs">(136)</span>
                </div>
                <h3 class="pb-1 mb-2">
                  <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics">
                    <span class="animate-target">Wireless Bluetooth Headphones Sony</span>
                  </a>
                </h3>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="h5 lh-1 mb-0">$299.00</div>
                  <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                    <i class="ci-shopping-cart fs-base animate-target"></i>
                  </button>
                </div>
              </div>
              <div class="product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom shadow mt-n2 p-3 pt-1">
                <span class="position-absolute top-0 start-0 w-100 bg-body mt-n2 py-2"></span>
                <ul class="list-unstyled d-flex flex-column gap-2 m-0">
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Audio:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">Noise Cancellation</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Connectivity:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">Bluetooth, 3.5mm jack</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Material:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">Leather, Plastic</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Weight:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">185 grams</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Sale Banner (CTA) -->
      <section class="container pt-5 mt-sm-2 mt-md-3 mt-lg-4">
        <div class="row g-0">
          <div class="col-md-3 mb-n4 mb-md-0">
            <div class="position-relative d-flex flex-column align-items-center justify-content-center h-100 py-5">
              <div class="position-absolute top-0 start-0 w-100 h-100 d-none d-md-block">
                <span class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none-dark" style="background-color: #accbee"></span>
                <span class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none d-block-dark" style="background-color: #1b273a"></span>
              </div>
              <div class="position-absolute top-0 start-0 w-100 h-100 d-md-none">
                <span class="position-absolute top-0 start-0 w-100 h-100 rounded-top-5 d-none-dark" style="background: linear-gradient(90deg, #accbee 0%, #e7f0fd 100%)"></span>
                <span class="position-absolute top-0 start-0 w-100 h-100 rounded-top-5 d-none d-block-dark" style="background: linear-gradient(90deg, #1b273a 0%, #1f2632 100%)"></span>
              </div>
              <div class="position-relative z-1 display-1 text-dark-emphasis text-nowrap mb-0">
                20
                <span class="d-inline-block ms-n2">
                  <span class="d-block fs-1">%</span>
                  <span class="d-block fs-5">OFF</span>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-9 position-relative">
            <div class="position-absolute top-0 start-0 h-100 overflow-hidden rounded-pill z-2 d-none d-md-block" style="color: var(--cz-body-bg); margin-left: -2px">
              <svg width="4" height="436" viewBox="0 0 4 436" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 0L1.99998 436" stroke="currentColor" stroke-width="3" stroke-dasharray="8 12" stroke-linecap="round"/>
              </svg>
            </div>
            <div class="position-relative">
              <span class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none-dark rtl-flip" style="background: linear-gradient(90deg, #accbee 0%, #e7f0fd 100%)"></span>
              <span class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none d-block-dark rtl-flip" style="background: linear-gradient(90deg, #1b273a 0%, #1f2632 100%)"></span>
              <div class="row align-items-center position-relative z-2">
                <div class="col-md-6 mb-3 mb-md-0">
                  <div class="text-center text-md-start py-md-5 px-4 ps-md-5 pe-md-0 me-md-n5">
                    <h3 class="text-uppercase fw-bold ps-xxl-3 pb-2 mb-1">Seasonal weekly sale 2024</h3>
                    <p class="text-body-emphasis ps-xxl-3 mb-0">Use code <span class="d-inline-block fw-semibold bg-white text-dark rounded-pill py-1 px-2">Sale 2024</span> to get best offer</p>
                  </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center justify-content-md-end pb-5 pb-md-0">
                  <div class="me-xxl-4">
                    <img src="/assets/img/home/electronics/banner/camera.png" class="d-block rtl-flip" width="420" alt="Camera">
                    <div class="d-none d-lg-block" style="margin-bottom: -9%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-none d-lg-block" style="padding-bottom: 3%"></div>
      </section>


      <!-- Special offers (Carousel) -->
      <section class="container pt-5 mt-2 mt-sm-3 mt-lg-4">

        <!-- Heading + Countdown -->
        <div class="d-flex align-items-start align-items-md-center justify-content-between border-bottom pb-3 pb-md-4">
          <div class="d-md-flex align-items-center">
            <h2 class="h3 pe-3 me-3 mb-md-0">Special offers for you</h2>

            <!-- Replace "demoDate" inside data-countdown-date attribute with the real date, ex: "10/15/2025 12:00:00" -->
            <div class="d-flex align-items-center" data-countdown-date="demoDate">
              <div class="btn btn-primary pe-none px-2">
                <span data-days></span>
                <span>d</span>
              </div>
              <div class="animate-blinking text-body-tertiary fs-lg fw-medium mx-2">:</div>
              <div class="btn btn-primary pe-none px-2">
                <span data-hours></span>
                <span>h</span>
              </div>
              <div class="animate-blinking text-body-tertiary fs-lg fw-medium mx-2">:</div>
              <div class="btn btn-primary pe-none px-2">
                <span data-minutes></span>
                <span>m</span>
              </div>
            </div>
          </div>
          <div class="nav ms-3">
            <a class="nav-link animate-underline px-0 py-2" href="shop-catalog-electronics">
              <span class="animate-target text-nowrap">View all</span>
              <i class="ci-chevron-right fs-base ms-1"></i>
            </a>
          </div>
        </div>

        <!-- Product carousel -->
        <div class="position-relative mx-md-1">

          <!-- External slider prev/next buttons visible on screens > 500px wide (sm breakpoint) -->
          <button type="button" class="offers-prev btn btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start position-absolute top-50 start-0 z-2 translate-middle-y ms-n1 d-none d-sm-inline-flex" aria-label="Prev">
            <i class="ci-chevron-left fs-lg animate-target"></i>
          </button>
          <button type="button" class="offers-next btn btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end position-absolute top-50 end-0 z-2 translate-middle-y me-n1 d-none d-sm-inline-flex" aria-label="Next">
            <i class="ci-chevron-right fs-lg animate-target"></i>
          </button>

          <!-- Slider -->
          <div class="swiper py-4 px-sm-3" data-swiper='{
            "slidesPerView": 2,
            "spaceBetween": 24,
            "loop": true,
            "navigation": {
              "prevEl": ".offers-prev",
              "nextEl": ".offers-next"
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
                <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                  <div class="position-relative">
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                      <div class="d-flex flex-column gap-2">
                        <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                          <i class="ci-heart fs-base animate-target"></i>
                        </button>
                        <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                          <i class="ci-refresh-cw fs-base animate-target"></i>
                        </button>
                      </div>
                    </div>
                    <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                      <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                        <i class="ci-more-vertical fs-lg"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-heart fs-sm ms-n1 me-2"></i>
                            Add to Wishlist
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                            Compare
                          </a>
                        </li>
                      </ul>
                    </div>
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics">
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="/assets/img/shop/electronics/09.png" alt="Wireless Buds">
                      </div>
                    </a>
                  </div>
                  <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                    <div class="d-flex align-items-center gap-2 mb-2">
                      <div class="d-flex gap-1 fs-xs">
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-half text-warning"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">(14)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics">
                        <span class="animate-target">Xiaomi Wireless Buds Pro</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between pb-2 mb-1">
                      <div class="h5 lh-1 mb-0">$129.99 <del class="text-body-tertiary fs-sm fw-normal">$156.00</del></div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                    <div class="progress mb-2" role="progressbar" aria-label="Available in stock" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                      <div class="progress-bar rounded-pill" style="width: 25%"></div>
                    </div>
                    <div class="text-body-secondary fs-sm">Available: <span class="text-dark-emphasis fw-medium">112</span></div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="swiper-slide">
                <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                  <div class="position-relative">
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                      <div class="d-flex flex-column gap-2">
                        <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                          <i class="ci-heart fs-base animate-target"></i>
                        </button>
                        <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                          <i class="ci-refresh-cw fs-base animate-target"></i>
                        </button>
                      </div>
                    </div>
                    <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                      <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                        <i class="ci-more-vertical fs-lg"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-heart fs-sm ms-n1 me-2"></i>
                            Add to Wishlist
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                            Compare
                          </a>
                        </li>
                      </ul>
                    </div>
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics">
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="/assets/img/shop/electronics/03.png" alt="Smart Watch">
                      </div>
                    </a>
                  </div>
                  <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                    <div class="d-flex align-items-center gap-2 mb-2">
                      <div class="d-flex gap-1 fs-xs">
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">(138)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics">
                        <span class="animate-target">Smart Watch Series 7, White</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between pb-2 mb-1">
                      <div class="h5 lh-1 mb-0">$429.00 <del class="text-body-tertiary fs-sm fw-normal">$486.00</del></div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                    <div class="progress mb-2" role="progressbar" aria-label="Available in stock" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                      <div class="progress-bar rounded-pill" style="width: 50%"></div>
                    </div>
                    <div class="text-body-secondary fs-sm">Available: <span class="text-dark-emphasis fw-medium">45</span></div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="swiper-slide">
                <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                  <div class="position-relative">
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                      <div class="d-flex flex-column gap-2">
                        <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                          <i class="ci-heart fs-base animate-target"></i>
                        </button>
                        <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                          <i class="ci-refresh-cw fs-base animate-target"></i>
                        </button>
                      </div>
                    </div>
                    <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                      <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                        <i class="ci-more-vertical fs-lg"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-heart fs-sm ms-n1 me-2"></i>
                            Add to Wishlist
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                            Compare
                          </a>
                        </li>
                      </ul>
                    </div>
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics">
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="/assets/img/shop/electronics/11.png" alt="Nikon Camera">
                      </div>
                    </a>
                  </div>
                  <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                    <div class="d-flex align-items-center gap-2 mb-2">
                      <div class="d-flex gap-1 fs-xs">
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star text-body-tertiary opacity-75"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">(64)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics">
                        <span class="animate-target">VRB01 Camera Nikon Max</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between pb-2 mb-1">
                      <div class="h5 lh-1 mb-0">$652.00 <del class="text-body-tertiary fs-sm fw-normal">$785.00</del></div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                    <div class="progress mb-2" role="progressbar" aria-label="Available in stock" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                      <div class="progress-bar rounded-pill" style="width: 75%"></div>
                    </div>
                    <div class="text-body-secondary fs-sm">Available: <span class="text-dark-emphasis fw-medium">13</span></div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="swiper-slide">
                <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                  <div class="position-relative">
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                      <div class="d-flex flex-column gap-2">
                        <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                          <i class="ci-heart fs-base animate-target"></i>
                        </button>
                        <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                          <i class="ci-refresh-cw fs-base animate-target"></i>
                        </button>
                      </div>
                    </div>
                    <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                      <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                        <i class="ci-more-vertical fs-lg"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-heart fs-sm ms-n1 me-2"></i>
                            Add to Wishlist
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                            Compare
                          </a>
                        </li>
                      </ul>
                    </div>
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics">
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="/assets/img/shop/electronics/10.png" alt="iPhone 14">
                      </div>
                    </a>
                  </div>
                  <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                    <div class="d-flex align-items-center gap-2 mb-2">
                      <div class="d-flex gap-1 fs-xs">
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-half text-warning"></i>
                        <i class="ci-star text-body-tertiary opacity-75"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">(51)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics">
                        <span class="animate-target">Apple iPhone 14 128GB Blue</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between pb-2 mb-1">
                      <div class="h5 lh-1 mb-0">$652.00 <del class="text-body-tertiary fs-sm fw-normal">$785.00</del></div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                    <div class="progress mb-2" role="progressbar" aria-label="Available in stock" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                      <div class="progress-bar rounded-pill" style="width: 25%"></div>
                    </div>
                    <div class="text-body-secondary fs-sm">Available: <span class="text-dark-emphasis fw-medium">7</span></div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="swiper-slide">
                <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                  <div class="position-relative">
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                      <div class="d-flex flex-column gap-2">
                        <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                          <i class="ci-heart fs-base animate-target"></i>
                        </button>
                        <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                          <i class="ci-refresh-cw fs-base animate-target"></i>
                        </button>
                      </div>
                    </div>
                    <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                      <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                        <i class="ci-more-vertical fs-lg"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-heart fs-sm ms-n1 me-2"></i>
                            Add to Wishlist
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                            Compare
                          </a>
                        </li>
                      </ul>
                    </div>
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics">
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="/assets/img/shop/electronics/01.png" alt="VR Glasses">
                      </div>
                    </a>
                  </div>
                  <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                    <div class="d-flex align-items-center gap-2 mb-2">
                      <div class="d-flex gap-1 fs-xs">
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-half text-warning"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">(19)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics">
                        <span class="animate-target">VRB01 Virtual Reality Glasses</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between pb-2 mb-1">
                      <div class="h5 lh-1 mb-0">$340.99 <del class="text-body-tertiary fs-sm fw-normal">$430.00</del></div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                    <div class="progress mb-2" role="progressbar" aria-label="Available in stock" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                      <div class="progress-bar rounded-pill" style="width: 33%"></div>
                    </div>
                    <div class="text-body-secondary fs-sm">Available: <span class="text-dark-emphasis fw-medium">16</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- External slider prev/next buttons visible on screens < 500px wide (sm breakpoint) -->
          <div class="d-flex justify-content-center gap-2 mt-n2 mb-3 pb-1 d-sm-none">
            <button type="button" class="offers-prev btn btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start me-1" aria-label="Prev">
              <i class="ci-chevron-left fs-lg animate-target"></i>
            </button>
            <button type="button" class="offers-next btn btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end" aria-label="Next">
              <i class="ci-chevron-right fs-lg animate-target"></i>
            </button>
          </div>
        </div>
      </section>


      <!-- Brands -->
      <section class="container pt-4 pt-md-5 pb-5 mt-sm-2 mb-2 mb-sm-3 mb-md-4 mb-lg-5">
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 g-3 g-md-4 g-lg-3 g-xl-4">
          <div class="col">
            <a class="btn btn-outline-secondary w-100 rounded-4 p-3" href="shop-catalog-electronics">
              <img src="/assets/img/shop/electronics/brands/apple-light-mode.svg" class="d-none-dark" alt="Apple">
              <img src="/assets/img/shop/electronics/brands/apple-dark-mode.svg" class="d-none d-block-dark" alt="Apple">
            </a>
          </div>
          <div class="col">
            <a class="btn btn-outline-secondary w-100 rounded-4 p-3" href="shop-catalog-electronics">
              <img src="/assets/img/shop/electronics/brands/motorola-light-mode.svg" class="d-none-dark" alt="Apple">
              <img src="/assets/img/shop/electronics/brands/motorola-dark-mode.svg" class="d-none d-block-dark" alt="Apple">
            </a>
          </div>
          <div class="col">
            <a class="btn btn-outline-secondary w-100 rounded-4 p-3" href="shop-catalog-electronics">
              <img src="/assets/img/shop/electronics/brands/canon-light-mode.svg" class="d-none-dark" alt="Apple">
              <img src="/assets/img/shop/electronics/brands/canon-dark-mode.svg" class="d-none d-block-dark" alt="Apple">
            </a>
          </div>
          <div class="col">
            <a class="btn btn-outline-secondary w-100 rounded-4 p-3" href="shop-catalog-electronics">
              <img src="/assets/img/shop/electronics/brands/samsung-light-mode.svg" class="d-none-dark" alt="Apple">
              <img src="/assets/img/shop/electronics/brands/samsung-dark-mode.svg" class="d-none d-block-dark" alt="Apple">
            </a>
          </div>
          <div class="col">
            <a class="btn btn-outline-secondary w-100 rounded-4 p-3" href="shop-catalog-electronics">
              <img src="/assets/img/shop/electronics/brands/sony-light-mode.svg" class="d-none-dark" alt="Apple">
              <img src="/assets/img/shop/electronics/brands/sony-dark-mode.svg" class="d-none d-block-dark" alt="Apple">
            </a>
          </div>
          <div class="col">
            <a class="btn btn-outline-secondary w-100 h-100 rounded-4 p-3" href="shop-categories-electronics">
              All brands
              <i class="ci-plus-circle fs-base ms-2"></i>
            </a>
          </div>
        </div>
      </section>


      <!-- Subscription form + Vlog -->
      <section class="bg-body-tertiary py-5">
        <div class="container pt-sm-2 pt-md-3 pt-lg-4 pt-xl-5">
          <div class="row">
            <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
              <h2 class="h4 mb-2">Sign up to our newsletter</h2>
              <p class="text-body pb-2 pb-ms-3">Receive our latest updates about our products &amp; promotions</p>
              <form class="d-flex needs-validation pb-1 pb-sm-2 pb-md-3 pb-lg-0 mb-4 mb-lg-5" novalidate>
                <div class="position-relative w-100 me-2">
                  <input type="email" class="form-control form-control-lg" placeholder="Your email" required>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Subscribe</button>
              </form>
              <div class="d-flex gap-3">
                <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="Instagram">
                  <i class="ci-instagram fs-base"></i>
                </a>
                <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="Facebook">
                  <i class="ci-facebook fs-base"></i>
                </a>
                <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="YouTube">
                  <i class="ci-youtube fs-base"></i>
                </a>
                <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="Telegram">
                  <i class="ci-telegram fs-base"></i>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-4 offset-lg-1 offset-xl-2">
              <ul class="list-unstyled d-flex flex-column gap-4 ps-md-4 ps-lg-0 mb-3">
                <li class="nav flex-nowrap align-items-center position-relative">
                  <img src="/assets/img/home/electronics/vlog/01.jpg" class="rounded" width="140" alt="Video cover">
                  <div class="ps-3">
                    <div class="fs-xs text-body-secondary lh-sm mb-2">6:16</div>
                    <a class="nav-link fs-sm hover-effect-underline stretched-link p-0" href="#!">5 New Cool Gadgets You Must See on Cartzilla - Cheap Budget</a>
                  </div>
                </li>
                <li class="nav flex-nowrap align-items-center position-relative">
                  <img src="/assets/img/home/electronics/vlog/02.jpg" class="rounded" width="140" alt="Video cover">
                  <div class="ps-3">
                    <div class="fs-xs text-body-secondary lh-sm mb-2">10:20</div>
                    <a class="nav-link fs-sm hover-effect-underline stretched-link p-0" href="#!">5 Super Useful Gadgets on Cartzilla You Must Have in 2023</a>
                  </div>
                </li>
                <li class="nav flex-nowrap align-items-center position-relative">
                  <img src="/assets/img/home/electronics/vlog/03.jpg" class="rounded" width="140" alt="Video cover">
                  <div class="ps-3">
                    <div class="fs-xs text-body-secondary lh-sm mb-2">8:40</div>
                    <a class="nav-link fs-sm hover-effect-underline stretched-link p-0" href="#!">Top 5 New Amazing Gadgets on Cartzilla You Must See</a>
                  </div>
                </li>
              </ul>
              <div class="nav ps-md-4 ps-lg-0">
                <a class="btn nav-link animate-underline text-decoration-none px-0" href="#!">
                  <span class="animate-target">View all</span>
                  <i class="ci-chevron-right fs-base ms-1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

</x-www-layout>


