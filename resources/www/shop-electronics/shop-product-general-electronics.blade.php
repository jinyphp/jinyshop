<x-www-layout>
  <!-- Review form modal -->
  <div class="modal fade" id="reviewForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="reviewFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <form class="modal-content needs-validation" novalidate>
        <div class="modal-header border-0">
          <h5 class="modal-title" id="reviewFormLabel">Leave a review</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body pb-3 pt-0">
          <div class="mb-3">
            <label for="review-name" class="form-label">Your name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="review-name" required>
            <div class="invalid-feedback">Please enter your name!</div>
            <small class="form-text">Will be displayed on the comment.</small>
          </div>
          <div class="mb-3">
            <label for="review-email" class="form-label">Your email <span class="text-danger">*</span></label>
            <input type="email" class="form-control" id="review-email" required>
            <div class="invalid-feedback">Please provide a valid email address!</div>
            <small class="form-text">Authentication only - we won't spam you.</small>
          </div>
          <div class="mb-3">
            <label class="form-label">Rating <span class="text-danger">*</span></label>
            <select class="form-select" data-select='{
              "placeholderValue": "Choose rating",
              "choices": [
                {
                  "value": "",
                  "label": "Choose rating",
                  "placeholder": true
                },
                {
                  "value": "1",
                  "label": "<span class=\"visually-hidden\">1 star</span>",
                  "customProperties": {
                    "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"ci-star-filled text-warning\"></i></span>",
                    "selected": "1 star"
                  }
                },
                {
                  "value": "2",
                  "label": "<span class=\"visually-hidden\">2 stars</span>",
                  "customProperties": {
                    "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i></span>",
                    "selected": "2 stars"
                  }
                },
                {
                  "value": "3",
                  "label": "<span class=\"visually-hidden\">3 stars</span>",
                  "customProperties": {
                    "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i></span>",
                    "selected": "3 stars"
                  }
                },
                {
                  "value": "4",
                  "label": "<span class=\"visually-hidden\">4 stars</span>",
                  "customProperties": {
                    "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i></span>",
                    "selected": "4 stars"
                  }
                },
                {
                  "value": "5",
                  "label": "<span class=\"visually-hidden\">5 stars</span>",
                  "customProperties": {
                    "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i></span>",
                    "selected": "5 stars"
                  }
                }
              ]
            }' data-select-template="true" required></select>
            <div class="invalid-feedback">Please choose your rating!</div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="review-text">Review <span class="text-danger">*</span></label>
            <textarea class="form-control" rows="4" id="review-text" required></textarea>
            <div class="invalid-feedback">Please write a review!</div>
            <small class="form-text">Your review must be at least 50 characters.</small>
          </div>
          <div class="mb-3">
            <label class="form-label">Pros</label>
            <input type="text" class="form-select" data-select='{"placeholderValue": "Type and hit \"Enter\""}'>
          </div>
          <div>
            <label class="form-label">Cons</label>
            <input type="text" class="form-select" data-select='{"placeholderValue": "Type and hit \"Enter\""}'>
          </div>
        </div>
        <div class="modal-footer flex-nowrap gap-3 border-0 px-4">
          <button type="reset" class="btn btn-secondary w-100 m-0" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary w-100 m-0">Submit review</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Page content -->
  <main class="content-wrapper">

    <!-- Breadcrumb -->
    <nav class="container pt-3 my-3 my-md-4" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="home-electronics">Home</a></li>
        <li class="breadcrumb-item"><a href="shop-catalog-electronics">Shop</a></li>
        <li class="breadcrumb-item active" aria-current="page">Product page</li>
      </ol>
    </nav>


    <!-- Page title -->
    <h1 class="h3 container mb-4">Apple iPhone 14 Plus 128GB Blue</h1>


    <!-- Nav links + Reviews -->
    <section class="container pb-2 pb-lg-4">
      <div class="d-flex align-items-center border-bottom">
        <ul class="nav nav-underline flex-nowrap gap-4">
          <li class="nav-item me-sm-2">
            <a class="nav-link pe-none active" href="#!">General info</a>
          </li>
          <li class="nav-item me-sm-2">
            <a class="nav-link" href="shop-product-details-electronics">Product details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="shop-product-reviews-electronics">Reviews (68)</a>
          </li>
        </ul>
        <a class="d-none d-md-flex align-items-center gap-2 text-decoration-none ms-auto mb-1" href="#reviews">
          <div class="d-flex gap-1 fs-sm">
            <i class="ci-star-filled text-warning"></i>
            <i class="ci-star-filled text-warning"></i>
            <i class="ci-star-filled text-warning"></i>
            <i class="ci-star-filled text-warning"></i>
            <i class="ci-star-half text-warning"></i>
          </div>
          <span class="text-body-tertiary fs-xs">68 reviews</span>
        </a>
      </div>
    </section>


    <!-- Gallery + Product options -->
    <section class="container pb-5 mb-1 mb-sm-2 mb-md-3 mb-lg-4 mb-xl-5">
      <div class="row">

        {{-- Product Gallery(Slider) --}}
        @livewire('product-gallery')

        <!-- Product options -->
        @livewire('product-option')
      </div>
    </section>


    <!-- Sticky product preview + Add to cart CTA -->
    <section class="sticky-product-banner sticky-top d-md-none" data-sticky-element>
      <div class="sticky-product-banner-inner pt-5">
        <div class="bg-body border-bottom border-light border-opacity-10 shadow pt-4 pb-2">
          <div class="container d-flex align-items-center">
            <div class="d-flex align-items-center min-w-0 ms-n2 me-3">
              <div class="ratio ratio-1x1 flex-shrink-0" style="width: 50px">
                <img src="/assets/img/shop/electronics/thumbs/10.png" alt="iPhone 14">
              </div>
              <div class="w-100 min-w-0 ps-2">
                <h4 class="fs-sm fw-medium text-truncate mb-1">Apple iPhone 14 Plus 128GB Blue</h4>
                <div class="h6 mb-0">$940.00</div>
              </div>
            </div>
            <div class="d-flex gap-2 ms-auto">
              <button type="button" class="btn btn-icon btn-secondary animate-pulse" aria-label="Add to Wishlist">
                <i class="ci-heart fs-base animate-target"></i>
              </button>
              <button type="button" class="btn btn-primary animate-slide-end d-none d-sm-inline-flex">
                <i class="ci-shopping-cart fs-base animate-target ms-n1 me-2"></i>
                Add to cart
              </button>
              <button type="button" class="btn btn-icon btn-primary animate-slide-end d-sm-none" aria-label="Add to Cart">
                <i class="ci-shopping-cart fs-lg animate-target"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Bundle discount (Cheaper together) -->
    <section class="container pb-5 mb-1 mb-sm-2 mb-md-3 mb-lg-4 mb-xl-5">
      <div class="bg-body-tertiary rounded-5 pt-5">
        <h2 class="h3 text-center pb-2 py-lg-3">Cheaper together</h2>
        <div class="row justify-content-center px-4 px-md-0">
          <div class="col-md-10">
            <div class="overflow-auto" data-simplebar data-simplebar-auto-hide="false">
              <div class="d-flex align-items-center justify-content-between pb-4 mb-2" style="min-width: 840px">

                <!-- Item -->
                <div class="w-100" style="max-width: 306px">
                  <div class="form-check position-relative p-0 m-0 mb-3">
                    <input type="checkbox" class="form-check-input position-absolute top-0 end-0 mt-3 me-3" id="iphone" checked disabled>
                    <label for="iphone" class="d-flex justify-content-center bg-body rounded p-3">
                      <span class="ratio d-block" style="max-width: 258px; --cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="/assets/img/shop/electronics/14.png" alt="iPhone 14">
                      </span>
                    </label>
                  </div>
                  <h3 class="mb-2">
                    <a class="d-block fs-sm fw-medium animate-underline text-truncate" href="#!">
                      <span class="animate-target">Apple iPhone 14 128GB White</span>
                    </a>
                  </h3>
                  <div class="h6 mb-0">$940.00</div>
                </div>

                <div class="ci-plus fs-4 mt-n5 mx-3 mx-lg-4"></div>

                <!-- Item -->
                <div class="w-100" style="max-width: 306px">
                  <div class="form-check position-relative p-0 m-0 mb-3">
                    <input type="checkbox" class="form-check-input position-absolute top-0 end-0 mt-3 me-3" id="airpods" checked>
                    <label for="airpods" class="d-flex justify-content-center bg-body rounded p-3">
                      <span class="ratio d-block" style="max-width: 258px; --cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="/assets/img/shop/electronics/06.png" alt="AirPods 2 Pro">
                      </span>
                    </label>
                  </div>
                  <h3 class="mb-2">
                    <a class="d-block fs-sm fw-medium animate-underline text-truncate" href="#!">
                      <span class="animate-target">Headphones Apple AirPods 2 Pro</span>
                    </a>
                  </h3>
                  <div class="d-flex align-items-center gap-2">
                    <span class="badge bg-danger">-32%</span>
                    <span class="h6 mb-0">$224.00</span>
                    <del class="text-body-tertiary fs-xs">$330.00</del>
                  </div>
                </div>

                <div class="ci-plus fs-4 mt-n5 mx-3 mx-lg-4"></div>

                <!-- Item -->
                <div class="w-100" style="max-width: 306px">
                  <div class="form-check position-relative p-0 m-0 mb-3">
                    <input type="checkbox" class="form-check-input position-absolute top-0 end-0 mt-3 me-3" id="charger">
                    <label for="charger" class="d-flex justify-content-center bg-body rounded p-3">
                      <span class="ratio d-block" style="max-width: 258px; --cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="/assets/img/shop/electronics/15.png" alt="Wireless charger">
                      </span>
                    </label>
                  </div>
                  <h3 class="mb-2">
                    <a class="d-block fs-sm fw-medium animate-underline text-truncate" href="#!">
                      <span class="animate-target">Wireless charger for iPhone</span>
                    </a>
                  </h3>
                  <div class="d-flex align-items-center gap-2">
                    <span class="badge bg-danger">-48%</span>
                    <span class="h6 mb-0">$26.00</span>
                    <del class="text-body-tertiary fs-xs">$50.00</del>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="mb-0">
        <div class="row justify-content-center p-4 px-md-0">
          <div class="col-md-10 d-md-flex align-items-center py-md-3">
            <div class="fs-sm me-3 mb-3 mb-md-0">Total for selected products</div>
            <div class="d-flex align-items-center ms-auto">
              <span class="h5 mb-0 me-4">$1,164.00</span>
              <button type="button" class="btn btn-primary ms-auto">Purchase together</button>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Trending products (Carousel) -->
    <section class="container pb-4 pb-md-5 mb-2 mb-sm-0 mb-lg-2 mb-xl-4">
      <h2 class="h3 border-bottom pb-4 mb-0">Trending products</h2>

      <!-- Product carousel -->
      <div class="position-relative mx-md-1">

        <!-- External slider prev/next buttons visible on screens > 500px wide (sm breakpoint) -->
        <button type="button" class="trending-prev btn btn-prev btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start position-absolute top-50 start-0 z-2 translate-middle-y ms-n1 d-none d-sm-inline-flex" aria-label="Prev">
          <i class="ci-chevron-left fs-lg animate-target"></i>
        </button>
        <button type="button" class="trending-next btn btn-next btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end position-absolute top-50 end-0 z-2 translate-middle-y me-n1 d-none d-sm-inline-flex" aria-label="Next">
          <i class="ci-chevron-right fs-lg animate-target"></i>
        </button>

        <!-- Slider -->
        <div class="swiper py-4 px-sm-3" data-swiper='{
          "slidesPerView": 2,
          "spaceBetween": 24,
          "loop": true,
          "navigation": {
            "prevEl": ".trending-prev",
            "nextEl": ".trending-next"
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
                  <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
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
                    <a class="d-block fs-sm fw-medium text-truncate" href="#!">
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
                  <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
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
                    <a class="d-block fs-sm fw-medium text-truncate" href="#!">
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
                  <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
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
                    <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                      <span class="animate-target">Smart Watch Series 7, White</span>
                    </a>
                  </h3>
                  <div class="d-flex align-items-center justify-content-between pb-2 mb-1">
                    <div class="h5 lh-1 mb-0">$429.00</div>
                    <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                      <i class="ci-shopping-cart fs-base animate-target"></i>
                    </button>
                  </div>
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
                  <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
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
                    <a class="d-block fs-sm fw-medium text-truncate" href="#!">
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
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
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
                  <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
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
                    <a class="d-block fs-sm fw-medium text-truncate" href="#!">
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
              </div>
            </div>
          </div>
        </div>

        <!-- External slider prev/next buttons visible on screens < 500px wide (sm breakpoint) -->
        <div class="d-flex justify-content-center gap-2 mt-n2 mb-3 pb-1 d-sm-none">
          <button type="button" class="trending-prev btn btn-prev btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start me-1" aria-label="Prev">
            <i class="ci-chevron-left fs-lg animate-target"></i>
          </button>
          <button type="button" class="trending-next btn btn-next btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end" aria-label="Next">
            <i class="ci-chevron-right fs-lg animate-target"></i>
          </button>
        </div>
      </div>
    </section>


    <!-- Product details and Reviews shared container -->
    <section class="container pb-5 mb-2 mb-md-3 mb-lg-4 mb-xl-5">
      <div class="row">
        <div class="col-md-7">

          <!-- Product details -->
          <div>
            <h2 class="h3 pb-2 pb-md-3">Product details</h2>
            <h3 class="h6">General specs</h3>
            <ul class="list-unstyled d-flex flex-column gap-3 fs-sm pb-3 m-0 mb-2 mb-sm-3">
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Model:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">iPhone 14 Plus</span>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Manufacturer:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">Apple Inc.</span>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Finish:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">Ceramic, Glass, Aluminium</span>
                <i class="ci-info fs-base text-body-tertiary position-absolute top-50 end-0 translate-middle-y" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-custom-class="popover-sm" data-bs-content="Ceramic shield front, Glass back and Aluminium design"></i>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Capacity:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">128GB</span>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Chip:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">A15 Bionic chip</span>
              </li>
            </ul>
            <h3 class="h6">Display</h3>
            <ul class="list-unstyled d-flex flex-column gap-3 fs-sm pb-1 m-0 mb-2 mb-sm-3">
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Diagonal:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">6.1"</span>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Screen type:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">Super Retina XDR</span>
                <i class="ci-info fs-base text-body-tertiary position-absolute top-50 end-0 translate-middle-y" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-custom-class="popover-sm" data-bs-content="HDR display, True Tone, Wide color (P3), Haptic Touch, 800 nits brightness"></i>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Resolution:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">2778x1284px at 458ppi</span>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Refresh rate:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">120 Hz</span>
              </li>
            </ul>
            <div class="nav">
              <a class="nav-link text-primary animate-underline px-0" href="shop-product-details-electronics">
                <span class="animate-target">See all product details</span>
                <i class="ci-chevron-right fs-base ms-1"></i>
              </a>
            </div>
          </div>

          @livewire('product-review')
        </div>


        <!-- Sticky product preview visible on screens > 991px wide (lg breakpoint) -->
        <aside class="col-md-5 col-xl-4 offset-xl-1 d-none d-md-block" style="margin-top: -100px">
          <div class="position-sticky top-0 ps-3 ps-lg-4 ps-xl-0" style="padding-top: 100px">
            <div class="border rounded p-3 p-lg-4">
              <div class="d-flex align-items-center mb-3">
                <div class="ratio ratio-1x1 flex-shrink-0" style="width: 110px">
                  <img src="/assets/img/shop/electronics/thumbs/10.png" width="110" alt="iPhone 14">
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
                    <span class="text-body-tertiary fs-xs">68</span>
                  </div>
                  <h4 class="fs-sm fw-medium mb-2">Apple iPhone 14 Plus 128GB Blue</h4>
                  <div class="h5 mb-0">$940.00</div>
                </div>
              </div>
              <div class="d-flex gap-2 gap-lg-3">
                <button type="button" class="btn btn-primary w-100 animate-slide-end">
                  <i class="ci-shopping-cart fs-base animate-target ms-n1 me-2"></i>
                  Add to cart
                </button>
                <button type="button" class="btn btn-icon btn-secondary animate-pulse" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-sm" data-bs-title="Add to Wishlist" aria-label="Add to Wishlist">
                  <i class="ci-heart fs-base animate-target"></i>
                </button>
                <button type="button" class="btn btn-icon btn-secondary animate-rotate" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-sm" data-bs-title="Compare" aria-label="Compare">
                  <i class="ci-refresh-cw fs-base animate-target"></i>
                </button>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </section>


    <!-- Viewed products (Carousel) -->
    <section class="container pb-4 pb-md-5 mb-2 mb-sm-0 mb-lg-2 mb-xl-4">
      <h2 class="h3 border-bottom pb-4 mb-0">Viewed products</h2>

      <!-- Product carousel -->
      <div class="position-relative mx-md-1">

        <!-- External slider prev/next buttons visible on screens > 500px wide (sm breakpoint) -->
        <button type="button" class="viewed-prev btn btn-prev btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start position-absolute top-50 start-0 z-2 translate-middle-y ms-n1 d-none d-sm-inline-flex" aria-label="Prev">
          <i class="ci-chevron-left fs-lg animate-target"></i>
        </button>
        <button type="button" class="viewed-next btn btn-next btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end position-absolute top-50 end-0 z-2 translate-middle-y me-n1 d-none d-sm-inline-flex" aria-label="Next">
          <i class="ci-chevron-right fs-lg animate-target"></i>
        </button>

        <!-- Slider -->
        <div class="swiper py-4 px-sm-3" data-swiper='{
          "slidesPerView": 2,
          "spaceBetween": 24,
          "loop": true,
          "navigation": {
            "prevEl": ".viewed-prev",
            "nextEl": ".viewed-next"
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
                  <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                    <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                      <img src="/assets/img/shop/electronics/13.png" alt="Dualsense Edge">
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
                    <span class="text-body-tertiary fs-xs">(187)</span>
                  </div>
                  <h3 class="pb-1 mb-2">
                    <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                      <span class="animate-target">Sony Dualsense Edge Controller</span>
                    </a>
                  </h3>
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="h5 lh-1 mb-0">$200.00</div>
                    <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                      <i class="ci-shopping-cart fs-base animate-target"></i>
                    </button>
                  </div>
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
                  <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                    <span class="badge bg-danger position-absolute top-0 start-0 mt-2 ms-2 mt-lg-3 ms-lg-3">-17%</span>
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
                      <i class="ci-star-filled text-warning"></i>
                    </div>
                    <span class="text-body-tertiary fs-xs">(14)</span>
                  </div>
                  <h3 class="pb-1 mb-2">
                    <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                      <span class="animate-target">VRB01 Camera Nikon Max</span>
                    </a>
                  </h3>
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="h5 lh-1 mb-0">$652.00 <del class="text-body-tertiary fs-sm fw-normal">$785.00</del></div>
                    <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                      <i class="ci-shopping-cart fs-base animate-target"></i>
                    </button>
                  </div>
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
                  <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
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
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-half text-warning"></i>
                    </div>
                    <span class="text-body-tertiary fs-xs">(335)</span>
                  </div>
                  <h3 class="pb-1 mb-2">
                    <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                      <span class="animate-target">Apple iPhone 14 128GB Blue</span>
                    </a>
                  </h3>
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="h5 lh-1 mb-0">$899.00</div>
                    <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                      <i class="ci-shopping-cart fs-base animate-target"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
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
                  <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
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
                    <a class="d-block fs-sm fw-medium text-truncate" href="#!">
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
                  <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
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
                    <a class="d-block fs-sm fw-medium text-truncate" href="#!">
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
              </div>
            </div>
          </div>
        </div>

        <!-- External slider prev/next buttons visible on screens < 500px wide (sm breakpoint) -->
        <div class="d-flex justify-content-center gap-2 mt-n2 mb-3 pb-1 d-sm-none">
          <button type="button" class="viewed-prev btn btn-prev btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start me-1" aria-label="Prev">
            <i class="ci-chevron-left fs-lg animate-target"></i>
          </button>
          <button type="button" class="viewed-next btn btn-next btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end" aria-label="Next">
            <i class="ci-chevron-right fs-lg animate-target"></i>
          </button>
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
