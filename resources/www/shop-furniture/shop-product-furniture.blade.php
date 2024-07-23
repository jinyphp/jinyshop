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
            <input type="text" class="form-control rounded-pill" id="review-name" required>
            <div class="invalid-feedback">Please enter your name!</div>
            <small class="form-text">Will be displayed on the comment.</small>
          </div>
          <div class="mb-3">
            <label for="review-email" class="form-label">Your email <span class="text-danger">*</span></label>
            <input type="email" class="form-control rounded-pill" id="review-email" required>
            <div class="invalid-feedback">Please provide a valid email address!</div>
            <small class="form-text">Authentication only - we won't spam you.</small>
          </div>
          <div class="mb-3">
            <label class="form-label">Rating <span class="text-danger">*</span></label>
            <select class="form-select rounded-pill" data-select='{
              "classNames": {
                "containerInner": "form-select rounded-pill"
              },
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
            <textarea class="form-control rounded-6" rows="4" id="review-text" required></textarea>
            <div class="invalid-feedback">Please write a review!</div>
            <small class="form-text">Your review must be at least 50 characters.</small>
          </div>
          <div>
            <div class="form-check form-check-inline">
              <input type="radio" class="form-check-input" id="yes" name="recommend" checked>
              <label for="yes" class="form-check-label">Yes, I recommend</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" class="form-check-input" id="no" name="recommend">
              <label for="no" class="form-check-label">No, I don't recommend</label>
            </div>
          </div>
        </div>
        <div class="modal-footer flex-nowrap gap-3 border-0 px-4">
          <button type="reset" class="btn btn-secondary w-100 rounded-pill m-0" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-dark w-100 rounded-pill m-0">Submit review</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Page content -->
  <main class="content-wrapper">
    <div class="container">

      <!-- Breadcrumb -->
      <nav class="position-relative pt-3 mt-3 mt-md-4 mb-4" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home-furniture">Home</a></li>
          <li class="breadcrumb-item"><a href="shop-catalog-furniture">Shop</a></li>
          <li class="breadcrumb-item active" aria-current="page">Product page</li>
        </ol>
      </nav>


      <!-- Product gallery and details -->
      <section class="row pb-4 pb-md-5 mb-2 mb-md-0 mb-xl-3">

        <!-- Gallery -->
        <div class="col-md-7 col-xl-8 pb-4 pb-md-0 mb-2 mb-sm-3 mb-md-0">
          <div class="row row-cols-2 g-3 g-sm-4 g-md-3 g-lg-4">
            <div class="col">
              <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded-4 overflow-hidden" href="/assets/img/shop/furniture/product/01.png" data-glightbox data-gallery="product-gallery">
                <i class="ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                <div class="ratio ratio-1x1 hover-effect-target">
                  <img src="/assets/img/shop/furniture/product/01.png" alt="Image">
                </div>
              </a>
            </div>
            <div class="col">
              <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded-4 overflow-hidden" href="/assets/img/shop/furniture/product/02.jpg" data-glightbox data-gallery="product-gallery">
                <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                <i class="ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                <div class="ratio ratio-1x1 hover-effect-target">
                  <img src="/assets/img/shop/furniture/product/02.jpg" alt="Image">
                </div>
              </a>
            </div>
            <div class="col-12">
              <div class="collapse d-md-block" id="morePictures">
                <div class="row row-cols-2 g-3 g-sm-4 g-md-3 g-lg-4 pb-3 pb-sm-4 pb-md-0">
                  <div class="col">
                    <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded-4 overflow-hidden" href="/assets/img/shop/furniture/product/03.jpg" data-glightbox data-gallery="product-gallery">
                      <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                      <i class="ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                      <div class="ratio ratio-1x1 hover-effect-target">
                        <img src="/assets/img/shop/furniture/product/03.jpg" alt="Image">
                      </div>
                    </a>
                  </div>
                  <div class="col">
                    <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded-4 overflow-hidden" href="/assets/img/shop/furniture/product/04.jpg" data-glightbox data-gallery="product-gallery">
                      <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                      <i class="ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                      <div class="ratio ratio-1x1 hover-effect-target">
                        <img src="/assets/img/shop/furniture/product/04.jpg" alt="Image">
                      </div>
                    </a>
                  </div>
                  <div class="col">
                    <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded-4 overflow-hidden" href="/assets/img/shop/furniture/product/05.jpg" data-glightbox data-gallery="product-gallery">
                      <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                      <i class="ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                      <div class="ratio ratio-1x1 hover-effect-target">
                        <img src="/assets/img/shop/furniture/product/05.jpg" alt="Image">
                      </div>
                    </a>
                  </div>
                  <div class="col">
                    <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded-4 overflow-hidden" href="/assets/img/shop/furniture/product/06.jpg" data-glightbox data-gallery="product-gallery">
                      <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                      <i class="ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                      <div class="ratio ratio-1x1 hover-effect-target">
                        <img src="/assets/img/shop/furniture/product/06.jpg" alt="Image">
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-lg btn-outline-secondary w-100 collapsed d-md-none" data-bs-toggle="collapse" data-bs-target="#morePictures" data-label-collapsed="Show more pictures" data-label-expanded="Show less pictures" aria-expanded="false" aria-controls="morePictures" aria-label="Show / hide pictures">
                <i class="collapse-toggle-icon ci-chevron-down fs-lg ms-2 me-n2"></i>
              </button>
            </div>
          </div>
        </div>


        <!-- Product details and options -->
        <div class="col-md-5 col-xl-4">
          <div class="d-none d-md-block" style="margin-top: -90px"></div>
          <div class="sticky-md-top ps-md-2 ps-xl-4">
            <div class="d-none d-md-block" style="padding-top: 90px"></div>
            <div class="fs-xs text-body-secondary mb-3">V00273124</div>
            <h1 class="fs-xl fw-medium">Chair with wooden legs 60x100 cm</h1>
            <div class="h4 fw-bold mb-4">$357.00 <del class="fs-sm fw-normal text-body-tertiary">$416.00</del></div>
            <ul class="list-unstyled fs-sm text-body-emphasis mb-4">
              <li>
                <span class="me-1">Pay 4 interest-free payments of <span class="fw-semibold">$89.00</span> with</span>
                <a class="d-inline-block" href="#!" aria-label="Afterpay">
                  <svg xmlns="http://www.w3.org/2000/svg" width="80" viewBox="0 0 360 129.6"><path d="M297.4 127.4H62.7C28 127.4 0 99.4 0 64.8h0C0 30.2 28 2.1 62.7 2.1h234.7c34.6 0 62.6 28 62.6 62.6h0c0 34.7-28 62.7-62.6 62.7z" fill="#b2fce4"/><path d="M306.8 49.8l-7.9-4.5-8-4.6c-5.3-3-11.9.8-11.9 6.9v1c0 .6.3 1.1.8 1.4l3.7 2.1c1 .6 2.3-.2 2.3-1.3v-2.4c0-1.2 1.3-2 2.3-1.4l7.3 4.2 7.3 4.2c1.1.6 1.1 2.1 0 2.7l-7.3 4.2-7.3 4.2c-1 .6-2.3-.2-2.3-1.4v-1.2c0-6.1-6.6-9.9-11.9-6.9l-8 4.6-7.9 4.5c-5.3 3-5.3 10.7 0 13.8l7.9 4.5 8 4.6c5.3 3 11.9-.8 11.9-6.9v-1c0-.6-.3-1.1-.8-1.4l-3.7-2.1c-1-.6-2.3.2-2.3 1.3v2.4c0 1.2-1.3 2-2.3 1.4l-7.3-4.2-7.3-4.2c-1.1-.6-1.1-2.1 0-2.7l7.3-4.2 7.3-4.2c1-.6 2.3.2 2.3 1.4v1.2c0 6.1 6.6 9.9 11.9 6.9l8-4.6 7.9-4.5c5.4-3.1 5.4-10.7 0-13.8zm-51.6 1.5l-18.5 38.1H229l6.9-14.2-10.8-23.9h7.9l7 16 7.6-16h7.6zM70.8 64.9c0-4.5-3.3-7.7-7.4-7.7S56 60.4 56 64.9c0 4.4 3.3 7.7 7.4 7.7s7.4-3.2 7.4-7.7m.1 13.5v-3.5c-2 2.4-5 3.9-8.5 3.9-7.4 0-13-5.9-13-14 0-8 5.8-14 13.2-14 3.5 0 6.4 1.5 8.4 3.9v-3.4h6.7v27h-6.8zm38.9-6c-2.3 0-3-.9-3-3.1v-12h4.3v-5.9h-4.3v-6.6H100v6.6h-8.8v-2.7c0-2.3.9-3.1 3.2-3.1H96v-5.2h-3.3c-5.6 0-8.3 1.8-8.3 7.5v3.6h-3.8v5.9h3.8v21.1h6.8V57.2h8.8v13.3c0 5.5 2.1 7.9 7.6 7.9h3.5v-6h-1.3zm24.5-10c-.5-3.5-3.4-5.6-6.7-5.6-3.4 0-6.1 2.1-6.8 5.6h13.5zm-13.6 4.2c.5 4 3.4 6.3 7 6.3 2.9 0 5.1-1.4 6.4-3.5h7c-1.6 5.7-6.8 9.4-13.5 9.4-8.2 0-13.9-5.7-13.9-13.9s6.1-14.1 14.1-14.1c8.1 0 13.9 5.9 13.9 14.1 0 .6-.1 1.2-.2 1.7h-20.8zm64.2-1.7c0-4.4-3.3-7.7-7.4-7.7s-7.4 3.2-7.4 7.7c0 4.4 3.3 7.7 7.4 7.7s7.4-3.4 7.4-7.7m-21.4 24.5V51.3h6.7v3.5c2-2.5 5-4 8.5-4 7.3 0 13 6 13 14s-5.8 14-13.2 14c-3.4 0-6.2-1.4-8.2-3.6v14.2h-6.8zm52.2-24.5c0-4.5-3.3-7.7-7.4-7.7s-7.4 3.2-7.4 7.7c0 4.4 3.3 7.7 7.4 7.7s7.4-3.2 7.4-7.7m.1 13.5v-3.5c-2 2.4-5 3.9-8.5 3.9-7.4 0-13-5.9-13-14 0-8 5.8-14 13.2-14 3.5 0 6.4 1.5 8.4 3.9v-3.4h6.7v27h-6.8zM151.5 54s1.7-3.1 5.8-3.1c1.8 0 2.9.6 2.9.6v6.9s-2.5-1.5-4.8-1.2-3.8 2.4-3.7 5.2v16h-6.9v-27h6.7V54z"/></svg>
                </a>
              </li>
              <li>
                <span class="me-1">We provide a <span class="fw-semibold">3-year warranty</span></span>
                <svg class="text-body-emphasis" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"><path fill-rule="evenodd" d="M22.287 10.967l-1.7-2c-.215-.254-.346-.568-.373-.9L20 5.46c-.029-.379-.193-.734-.462-1.002s-.625-.43-1.004-.458l-2.607-.213c-.332-.027-.646-.158-.9-.373l-2-1.7c-.288-.247-.654-.383-1.033-.383s-.746.136-1.033.383l-2 1.7c-.254.215-.568.346-.9.373L5.467 4c-.38.028-.737.191-1.006.461s-.433.626-.46 1.006l-.213 2.607c-.027.332-.158.646-.373.9l-1.7 2c-.247.288-.383.654-.383 1.033s.136.746.383 1.033l1.7 2c.215.254.346.568.373.9L4 18.547c.031.377.196.731.465.998s.624.428 1.002.456l2.607.213c.332.027.646.158.9.373l2 1.7c.288.247.654.383 1.033.383s.746-.136 1.033-.383l2-1.7c.254-.215.568-.346.9-.373L18.534 20c.38-.028.737-.191 1.006-.46s.433-.626.46-1.006l.213-2.607c.027-.332.158-.646.373-.9l1.7-2c.245-.287.38-.652.38-1.03s-.135-.743-.38-1.03zm-11.08 4.153l-2.96-2.96 1.127-1.127 1.833 1.827 3.42-3.42 1.127 1.127-4.547 4.553z"/></svg>
              </li>
            </ul>

            <!-- Color options -->
            <div class="mb-4">
              <label class="form-label fw-semibold pb-1 mb-2">Color: <span class="text-body fw-normal" id="colorOption">Viridian</span></label>
              <div class="d-flex flex-wrap gap-2" data-binded-label="#colorOption">
                <input type="radio" class="btn-check" name="colors" id="viridian" checked>
                <label for="viridian" class="btn btn-image p-0" data-label="Viridian">
                  <img src="/assets/img/shop/furniture/product/colors/color01.png" width="56" alt="Viridian color">
                  <span class="visually-hidden">Viridian</span>
                </label>
                <input type="radio" class="btn-check" name="colors" id="green">
                <label for="green" class="btn btn-image p-0" data-label="Green">
                  <img src="/assets/img/shop/furniture/product/colors/color02.png" width="56" alt="Green color">
                  <span class="visually-hidden">Green</span>
                </label>
                <input type="radio" class="btn-check" name="colors" id="blue">
                <label for="blue" class="btn btn-image p-0" data-label="Blue">
                  <img src="/assets/img/shop/furniture/product/colors/color03.png" width="56" alt="Blue color">
                  <span class="visually-hidden">Blue</span>
                </label>
              </div>
            </div>

            <!-- Material select -->
            <div class="mb-4">
              <label class="form-label fw-semibold pb-1 mb-2">Material of the cover:</label>
              <select class="form-select form-select-lg rounded-pill" data-select='{
                "classNames": {
                  "containerInner": "form-select form-select-lg rounded-pill"
                }
              }' aria-label="Material select">
                <option value="">Choose a material</option>
                <option value="natural">Natural fabric</option>
                <option value="synthetic">Synthetic fabric</option>
                <option value="leather">Leather</option>
                <option value="cotton">Cotton</option>
              </select>
            </div>

            <!-- Add to cart + Wishlist buttons -->
            <div class="d-flex gap-3 pb-4 mb-2 mb-lg-3">
              <button type="button" class="btn btn-lg btn-dark w-100 rounded-pill">Add to cart</button>
              <button type="button" class="btn btn-icon btn-lg btn-secondary rounded-circle animate-pulse" aria-label="Add to Wishlist">
                <i class="ci-heart fs-lg animate-target"></i>
              </button>
            </div>

            <!-- Shipping info -->
            <div class="mb-4">
              <h6 class="d-flex align-items-center fs-sm mb-2">
                <i class="ci-delivery fs-lg me-2"></i>
                Free shipping
              </h6>
              <div class="fs-sm">
                <span class="me-1">Get it between May 24 - May 27 to</span>
                <div class="dropdown d-inline-block">
                  <a class="dropdown-toggle animate-underline fs-sm fw-semibold text-body-emphasis text-decoration-none" href="#!" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="animate-target">Preston - 06365</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end text-body p-3">
                    Blackpool Road, 15<br>06365, Preston, UK
                    <div class="h6 fs-sm pt-1 mb-0">Susan Gardner</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Contact -->
            <div class="d-flex align-items-center justify-content-between bg-body-tertiary rounded p-3">
              <div class="me-3">
                <h6 class="fs-sm mb-1">Have a question?</h6>
                <p class="fs-sm mb-0">Contact us if you have questions</p>
              </div>
              <a class="btn btn-sm btn-outline-dark rounded-pill" href="contact-v2">Contact us</a>
            </div>
          </div>
        </div>
      </section>


      <!-- Sticky product preview + Add to cart CTA -->
      <section class="sticky-product-banner sticky-top" data-sticky-element>
        <div class="sticky-product-banner-inner pt-5">
          <div class="navbar flex-nowrap align-items-center bg-body pt-4 pb-2">
            <div class="d-flex align-items-center min-w-0 ms-lg-2 me-3">
              <div class="ratio ratio-1x1 flex-shrink-0" style="width: 50px">
                <img src="/assets/img/shop/furniture/product/thumb.png" alt="Image">
              </div>
              <h4 class="h6 fw-medium d-none d-lg-block ps-3 mb-0">Chair with wooden legs 60x100 cm</h4>
              <div class="w-100 min-w-0 d-lg-none ps-2">
                <h4 class="fs-sm fw-medium text-truncate mb-1">Chair with wooden legs 60x100 cm</h4>
                <div class="h6 mb-0">$357.00 <del class="fs-xs fw-normal text-body-tertiary">$416.00</del></div>
              </div>
            </div>
            <div class="h4 d-none d-lg-block mb-0 ms-auto me-4">$357.00 <del class="fs-sm fw-normal text-body-tertiary">$416.00</del></div>
            <div class="d-flex gap-2">
              <button type="button" class="btn btn-icon btn-secondary rounded-circle animate-pulse" aria-label="Add to Wishlist">
                <i class="ci-heart fs-base animate-target"></i>
              </button>
              <button type="button" class="btn btn-dark rounded-pill ms-auto d-none d-md-inline-flex px-4">Add to cart</button>
              <button type="button" class="btn btn-icon btn-dark rounded-circle animate-slide-end ms-auto d-md-none" aria-label="Add to Cart">
                <i class="ci-shopping-cart fs-base animate-target"></i>
              </button>
            </div>
          </div>
        </div>
      </section>


      <!-- Product description -->
      <section class="row pb-5 mb-2 mb-sm-3 mb-lg-4 mb-xl-5">
        <div class="col-md-7 col-xl-8 mb-xxl-3">
          <p>The chair will bring a stylish retro atmosphere to your room, inspired by the Scandinavian design. The classic look fits anywhere in your home and provides a sturdy and durable place to sit for years to come.</p>
          <ul class="list-unstyled pb-md-2 pb-lg-3">
            <li class="mt-1"><span class="h6 mb-0">Backrest height:</span> 46 cm</li>
            <li class="mt-1"><span class="h6 mb-0">Width:</span> 64 cm</li>
            <li class="mt-1"><span class="h6 mb-0">Depth:</span> 78 cm</li>
            <li class="mt-1"><span class="h6 mb-0">Height under furniture:</span> 22 cm</li>
            <li class="mt-1"><span class="h6 mb-0">Seat width:</span> 56 cm</li>
            <li class="mt-1"><span class="h6 mb-0">Armrest height:</span> 63 cm</li>
          </ul>

          <div class="accordion accordion-alt-icon" id="productAccordion">
            <div class="accordion-item">
              <h3 class="accordion-header" id="headingProductInfo">
                <button type="button" class="accordion-button animate-underline fs-xl collapsed" data-bs-toggle="collapse" data-bs-target="#productInfo" aria-expanded="false" aria-controls="productInfo">
                  <span class="animate-target me-2">Product info</span>
                </button>
              </h3>
              <div class="accordion-collapse collapse" id="productInfo" aria-labelledby="headingProductInfo" data-bs-parent="#productAccordion">
                <div class="accordion-body fs-base">Introducing our Scandinavian-inspired chair, meticulously designed to infuse your living space with a touch of retro elegance. Crafted with the finest materials and attention to detail, this chair embodies the timeless charm of Scandinavian design, making it a versatile addition to any home decor. With its classic silhouette and understated sophistication, it seamlessly integrates into various interior styles, bringing both style and functionality to your room.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h3 class="accordion-header" id="headingProductFeatures">
                <button type="button" class="accordion-button animate-underline fs-xl collapsed" data-bs-toggle="collapse" data-bs-target="#productFeatures" aria-expanded="false" aria-controls="productFeatures">
                  <span class="animate-target me-2">Features</span>
                </button>
              </h3>
              <div class="accordion-collapse collapse" id="productFeatures" aria-labelledby="headingProductFeatures" data-bs-parent="#productAccordion">
                <div class="accordion-body fs-base">
                  <ul class="m-0">
                    <li><span class="text-body-emphasis fw-semibold">Timeless design:</span> Inspired by Scandinavian aesthetics, this chair boasts a sleek and retro-inspired silhouette that adds a touch of elegance to any space.</li>
                    <li><span class="text-body-emphasis fw-semibold">Durable construction:</span> Crafted with high-quality materials, the chair is built to last, providing sturdy and reliable seating for years to come.</li>
                    <li><span class="text-body-emphasis fw-semibold">Versatile placement:</span> Whether as a focal point in your living room, a cozy reading corner in your study, or an inviting seat around the dining table, this chair effortlessly adapts to different settings.</li>
                    <li><span class="text-body-emphasis fw-semibold">Comfortable seating:</span> The chair features a well-padded seat and backrest, ensuring optimal comfort for extended periods of relaxation or conversation.</li>
                    <li><span class="text-body-emphasis fw-semibold">Easy maintenance:</span> Designed for convenience, the chair's upholstery is easy to clean, allowing for hassle-free maintenance and care.</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h3 class="accordion-header" id="headingProductWarranty">
                <button type="button" class="accordion-button animate-underline fs-xl collapsed" data-bs-toggle="collapse" data-bs-target="#productWarranty" aria-expanded="false" aria-controls="productWarranty">
                  <span class="animate-target me-2">Warranty information</span>
                </button>
              </h3>
              <div class="accordion-collapse collapse" id="productWarranty" aria-labelledby="headingProductWarranty" data-bs-parent="#productAccordion">
                <div class="accordion-body fs-base">We stand behind the quality of our products. Our chair comes with a 10-year warranty, guaranteeing against defects in materials and workmanship under normal use. In the unlikely event that you encounter any issues with your chair, contact our customer service team, and we will be happy to assist you with a replacement or repair.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h3 class="accordion-header" id="headingProductDelivery">
                <button type="button" class="accordion-button animate-underline fs-xl collapsed" data-bs-toggle="collapse" data-bs-target="#productDelivery" aria-expanded="false" aria-controls="productDelivery">
                  <span class="animate-target me-2">Delivery and shipping</span>
                </button>
              </h3>
              <div class="accordion-collapse collapse" id="productDelivery" aria-labelledby="headingProductDelivery" data-bs-parent="#productAccordion">
                <div class="accordion-body fs-base">We understand the importance of timely delivery and strive to provide a seamless shipping experience for our customers. Upon placing your order, our team will process it promptly, and you will receive a notification once your chair is ready for shipment. We offer various shipping options to accommodate your preferences, with estimated delivery times provided at checkout. Rest assured, your chair will be carefully packaged to ensure it arrives safely at your doorstep, ready to enhance your home with its timeless charm.</div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Popular products carousel -->
      <section class="pb-5 mb-1 mb-sm-3 mb-lg-4 mb-xl-5">
        <h2 class="h3 pb-2 pb-sm-3">Popular products</h2>
        <div class="position-relative pb-xxl-3">

          <!-- External slider prev/next buttons visible on screens > 500px wide (sm breakpoint) -->
          <button type="button" class="popular-prev btn btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start position-absolute top-50 start-0 z-2 translate-middle mt-n5 d-none d-sm-inline-flex" aria-label="Prev">
            <i class="ci-chevron-left fs-lg animate-target"></i>
          </button>
          <button type="button" class="popular-next btn btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end position-absolute top-50 start-100 z-2 translate-middle mt-n5 d-none d-sm-inline-flex" aria-label="Next">
            <i class="ci-chevron-right fs-lg animate-target"></i>
          </button>

          <!-- Slider -->
          <div class="swiper" data-swiper='{
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


      <!-- Blog articles -->
      <section class="pb-5 mb-2 mb-sm-3 mb-lg-4 mb-xl-5">
        <h2 class="h3 pb-2 pb-sm-3">From the blog</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mb-xxl-3">

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
                <span class="text-body-secondary">September 5, 2024</span>
              </div>
            </div>
          </article>

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
                <span class="text-body-secondary">August 23, 2024</span>
              </div>
            </div>
          </article>

          <!-- Article -->
          <article class="col">
            <a class="ratio d-flex hover-effect-scale rounded-4 overflow-hidden" href="#!" style="--cz-aspect-ratio: calc(260 / 306 * 100%)">
              <img src="/assets/img/blog/grid/v2/13.jpg" class="hover-effect-target" alt="Image">
            </a>
            <div class="pt-4">
              <div class="nav pb-2 mb-1">
                <a class="nav-link text-body fs-xs text-uppercase p-0" href="#!">Home decoration</a>
              </div>
              <h3 class="h6 mb-3">
                <a class="hover-effect-underline" href="#!">Elevate your space with trendy home decoration ideas</a>
              </h3>
              <div class="nav align-items-center gap-2 fs-xs">
                <a class="nav-link text-body-secondary fs-xs fw-normal p-0" href="#!">Olivia Anderson</a>
                <hr class="vr my-1 mx-1">
                <span class="text-body-secondary">August 9, 2024</span>
              </div>
            </div>
          </article>
        </div>
      </section>


      <!-- Reviews -->
      <section class="pb-5 mb-2 mb-sm-3 mb-lg-4 mb-xl-5">

        <!-- Heading + Add review button -->
        <div class="d-sm-flex align-items-center justify-content-between border-bottom pb-2 pb-sm-3">
          <div class="mb-3 me-sm-3">
            <h2 class="h3 pb-2 mb-1">Customer reviews</h2>
            <div class="d-flex align-items-center fs-sm">
              <div class="d-flex gap-1 me-2">
                <i class="ci-star-filled text-body-emphasis"></i>
                <i class="ci-star-filled text-body-emphasis"></i>
                <i class="ci-star-filled text-body-emphasis"></i>
                <i class="ci-star-filled text-body-emphasis"></i>
                <i class="ci-star text-body-tertiary opacity-75"></i>
              </div>
              Based on 6 reviews
            </div>
          </div>
          <button type="button" class="btn btn-lg btn-outline-dark rounded-pill mb-3" data-bs-toggle="modal" data-bs-target="#reviewForm">Leave a review</button>
        </div>

        <!-- Review -->
        <div class="border-bottom py-4">
          <div class="row py-sm-2">
            <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
              <div class="d-flex h6 mb-2">
                Rafael Marquez
                <i class="ci-check-circle text-success mt-1 ms-2" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Verified customer"></i>
              </div>
              <div class="fs-sm mb-2 mb-md-3">June 25, 2024</div>
              <div class="d-flex gap-1 fs-sm">
                <i class="ci-star-filled text-body-emphasis"></i>
                <i class="ci-star-filled text-body-emphasis"></i>
                <i class="ci-star-filled text-body-emphasis"></i>
                <i class="ci-star-filled text-body-emphasis"></i>
                <i class="ci-star-filled text-body-emphasis"></i>
              </div>
            </div>
            <div class="col-md-8 col-lg-9">
              <p class="mb-md-4">Absolutely love this chair! It's exactly what I was looking for to complete my Scandinavian-themed living room. The wooden legs add a touch of warmth and the design is timeless. Comfortable and sturdy, couldn't be happier with my purchase!</p>
              <div class="d-sm-flex justify-content-between">
                <div class="d-flex align-items-center fs-sm fw-medium text-dark-emphasis pb-2 pb-sm-0 mb-1 mb-sm-0">
                  <i class="ci-check fs-base me-1" style="margin-top: .125rem"></i>
                  Yes, I recommend this product
                </div>
                <div class="d-flex align-items-center gap-2">
                  <div class="fs-sm fw-medium text-dark-emphasis me-1">Helpful?</div>
                  <button type="button" class="btn btn-sm btn-secondary">
                    <i class="ci-thumbs-up fs-sm ms-n1 me-1"></i>
                    0
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Review -->
        <div class="border-bottom py-4">
          <div class="row py-sm-2">
            <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
              <div class="d-flex h6 mb-2">
                Bessie Cooper
                <i class="ci-check-circle text-success mt-1 ms-2" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Verified customer"></i>
              </div>
              <div class="fs-sm mb-2 mb-md-3">April 8, 2024</div>
              <div class="d-flex gap-1 fs-sm">
                <i class="ci-star-filled text-body-emphasis"></i>
                <i class="ci-star-filled text-body-emphasis"></i>
                <i class="ci-star text-body-tertiary opacity-75"></i>
                <i class="ci-star text-body-tertiary opacity-75"></i>
                <i class="ci-star text-body-tertiary opacity-75"></i>
              </div>
            </div>
            <div class="col-md-8 col-lg-9">
              <p class="mb-md-4">While the design of the chair is nice and it does add a touch of retro vibe to my space, I found the quality to be lacking. After just a few weeks of use, one of the legs started to wobble, and the seat isn't as comfortable as I had hoped. Disappointed with the durability. Additionally, the assembly process was a bit frustrating as some of the screws didn't align properly with the holes, requiring extra effort to secure them in place. Overall, while it looks good, I expected better quality for the price.</p>
              <div class="d-sm-flex justify-content-between">
                <div class="d-flex align-items-center fs-sm fw-medium text-dark-emphasis pb-2 pb-sm-0 mb-1 mb-sm-0">
                  <i class="ci-close fs-base me-1" style="margin-top: .125rem"></i>
                  No, I don't recommend this product
                </div>
                <div class="d-flex align-items-center gap-2">
                  <div class="fs-sm fw-medium text-dark-emphasis me-1">Helpful?</div>
                  <button type="button" class="btn btn-sm btn-secondary">
                    <i class="ci-thumbs-up fs-sm ms-n1 me-1"></i>
                    3
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Review -->
        <div class="border-bottom py-4">
          <div class="row py-sm-2">
            <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
              <div class="d-flex h6 mb-2">Savannah Nguyen</div>
              <div class="fs-sm mb-2 mb-md-3">March 30, 2024</div>
              <div class="d-flex gap-1 fs-sm">
                <i class="ci-star-filled text-body-emphasis"></i>
                <i class="ci-star-filled text-body-emphasis"></i>
                <i class="ci-star-filled text-body-emphasis"></i>
                <i class="ci-star-filled text-body-emphasis"></i>
                <i class="ci-star text-body-tertiary opacity-75"></i>
              </div>
            </div>
            <div class="col-md-8 col-lg-9">
              <p class="mb-md-4">Great addition to our dining room! The chair looks fantastic and is quite comfortable for short sits. Assembly was a breeze, and the quality seems decent for the price. Overall, satisfied with the purchase.</p>
              <div class="d-sm-flex justify-content-between">
                <div class="d-flex align-items-center fs-sm fw-medium text-dark-emphasis pb-2 pb-sm-0 mb-1 mb-sm-0">
                  <i class="ci-check fs-base me-1" style="margin-top: .125rem"></i>
                  Yes, I recommend this product
                </div>
                <div class="d-flex align-items-center gap-2">
                  <div class="fs-sm fw-medium text-dark-emphasis me-1">Helpful?</div>
                  <button type="button" class="btn btn-sm btn-secondary">
                    <i class="ci-thumbs-up fs-sm ms-n1 me-1"></i>
                    7
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- More reviews collaspe -->
        <div class="collapse" id="moreReviews">

          <!-- Review -->
          <div class="border-bottom py-4">
            <div class="row py-sm-2">
              <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
                <div class="d-flex h6 mb-2">Daniel Adams</div>
                <div class="fs-sm mb-2 mb-md-3">March 16, 2024</div>
                <div class="d-flex gap-1 fs-sm">
                  <i class="ci-star-filled text-body-emphasis"></i>
                  <i class="ci-star-filled text-body-emphasis"></i>
                  <i class="ci-star-filled text-body-emphasis"></i>
                  <i class="ci-star-filled text-body-emphasis"></i>
                  <i class="ci-star-filled text-body-emphasis"></i>
                </div>
              </div>
              <div class="col-md-8 col-lg-9">
                <p class="mb-md-4">Couldn't be happier with this chair! It's not only stylish but also incredibly comfortable. The size is perfect for our space, and the wooden legs feel sturdy. Definitely recommend it to anyone looking for a chic and functional seating option.</p>
                <div class="d-sm-flex justify-content-between">
                  <div class="d-flex align-items-center fs-sm fw-medium text-dark-emphasis pb-2 pb-sm-0 mb-1 mb-sm-0">
                    <i class="ci-check fs-base me-1" style="margin-top: .125rem"></i>
                    Yes, I recommend this product
                  </div>
                  <div class="d-flex align-items-center gap-2">
                    <div class="fs-sm fw-medium text-dark-emphasis me-1">Helpful?</div>
                    <button type="button" class="btn btn-sm btn-secondary">
                      <i class="ci-thumbs-up fs-sm ms-n1 me-1"></i>
                      14
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Review -->
          <div class="border-bottom py-4">
            <div class="row py-sm-2">
              <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
                <div class="d-flex h6 mb-2">
                  Jenny Wilson
                  <i class="ci-check-circle text-success mt-1 ms-2" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Verified customer"></i>
                </div>
                <div class="fs-sm mb-2 mb-md-3">February 19, 2024</div>
                <div class="d-flex gap-1 fs-sm">
                  <i class="ci-star-filled text-body-emphasis"></i>
                  <i class="ci-star-filled text-body-emphasis"></i>
                  <i class="ci-star-filled text-body-emphasis"></i>
                  <i class="ci-star-filled text-body-emphasis"></i>
                  <i class="ci-star-filled text-body-emphasis"></i>
                </div>
              </div>
              <div class="col-md-8 col-lg-9">
                <p class="mb-md-4">This chair exceeded my expectations! It's well-made, comfortable, and looks even better in person. The Scandinavian design adds a sophisticated touch to my home office. I've received so many compliments already. Five stars all the way!</p>
                <div class="d-sm-flex justify-content-between">
                  <div class="d-flex align-items-center fs-sm fw-medium text-dark-emphasis pb-2 pb-sm-0 mb-1 mb-sm-0">
                    <i class="ci-check fs-base me-1" style="margin-top: .125rem"></i>
                    Yes, I recommend this product
                  </div>
                  <div class="d-flex align-items-center gap-2">
                    <div class="fs-sm fw-medium text-dark-emphasis me-1">Helpful?</div>
                    <button type="button" class="btn btn-sm btn-secondary">
                      <i class="ci-thumbs-up fs-sm ms-n1 me-1"></i>
                      2
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Review -->
          <div class="border-bottom py-4">
            <div class="row py-sm-2">
              <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
                <div class="d-flex h6 mb-2">Kristin Watson</div>
                <div class="fs-sm mb-2 mb-md-3">February 7, 2024</div>
                <div class="d-flex gap-1 fs-sm">
                  <i class="ci-star-filled text-body-emphasis"></i>
                  <i class="ci-star-filled text-body-emphasis"></i>
                  <i class="ci-star-filled text-body-emphasis"></i>
                  <i class="ci-star text-body-tertiary opacity-75"></i>
                  <i class="ci-star text-body-tertiary opacity-75"></i>
                </div>
              </div>
              <div class="col-md-8 col-lg-9">
                <p class="mb-md-4">The chair is nice, but it's not the most comfortable for extended periods of sitting. The wooden legs give it a nice aesthetic, but they seem a bit fragile. It's a decent chair for occasional use, but I wouldn't recommend it for daily use or long sitting sessions.</p>
                <div class="d-sm-flex justify-content-between">
                  <div class="d-flex align-items-center fs-sm fw-medium text-dark-emphasis pb-2 pb-sm-0 mb-1 mb-sm-0">
                    <i class="ci-close fs-base me-1" style="margin-top: .125rem"></i>
                    No, I don't recommend this product
                  </div>
                  <div class="d-flex align-items-center gap-2">
                    <div class="fs-sm fw-medium text-dark-emphasis me-1">Helpful?</div>
                    <button type="button" class="btn btn-sm btn-secondary">
                      <i class="ci-thumbs-up fs-sm ms-n1 me-1"></i>
                      9
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Toggle reviews collapse button -->
        <div class="nav pt-3 mt-md-2 mb-xxl-2">
          <a class="nav-link animate-underline collapsed px-0" href="#moreReviews" data-bs-toggle="collapse" aria-expanded="false" aria-controls="moreReviews" aria-label="Show / hide reviews">
            <span class="animate-target" data-label-collapsed="Show more reviews" data-label-expanded="Show less reviews"></span>
            <i class="collapse-toggle-icon ci-chevron-down fs-base mt-1 ms-1"></i>
          </a>
        </div>
      </section>


      <!-- Viewed products carousel -->
      <section class="pb-5 mb-2 mb-sm-3 mb-md-4 mb-lg-5">
        <h2 class="h3 pb-2 pb-sm-3">Viewed products</h2>
        <div class="position-relative pb-xxl-3">

          <!-- External slider prev/next buttons visible on screens > 500px wide (sm breakpoint) -->
          <button type="button" class="viewed-prev btn btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start position-absolute top-50 start-0 z-2 translate-middle mt-n5 d-none d-sm-inline-flex" aria-label="Prev">
            <i class="ci-chevron-left fs-lg animate-target"></i>
          </button>
          <button type="button" class="viewed-next btn btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end position-absolute top-50 start-100 z-2 translate-middle mt-n5 d-none d-sm-inline-flex" aria-label="Next">
            <i class="ci-chevron-right fs-lg animate-target"></i>
          </button>

          <!-- Slider -->
          <div class="swiper" data-swiper='{
            "slidesPerView": 2,
            "spaceBetween": 24,
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
                <div class="animate-underline">
                  <a class="hover-effect-opacity ratio ratio-1x1 d-block mb-3" href="shop-product-furniture">
                    <img src="/assets/img/shop/furniture/16.png" class="hover-effect-target opacity-100" alt="Product">
                    <img src="/assets/img/shop/furniture/16-hover.jpg" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
                  </a>
                  <div class="d-flex gap-2 mb-3">
                    <input type="radio" class="btn-check" name="colors-16" id="color-16-1" checked>
                    <label for="color-16-1" class="btn btn-color fs-base" style="color: #b2b8c0">
                      <span class="visually-hidden">Light gray</span>
                    </label>
                    <input type="radio" class="btn-check" name="colors-16" id="color-16-2">
                    <label for="color-16-2" class="btn btn-color fs-base" style="color: #6a6662">
                      <span class="visually-hidden">Dark gray</span>
                    </label>
                  </div>
                  <h3 class="mb-2">
                    <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture">
                      <span class="animate-target">Soft armchair with wooden legs</span>
                    </a>
                  </h3>
                  <div class="h6">$215.00</div>
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
                    <img src="/assets/img/shop/furniture/10.png" class="hover-effect-target opacity-100" alt="Product">
                    <img src="/assets/img/shop/furniture/10-hover.jpg" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
                  </a>
                  <div class="d-flex gap-2 mb-3">
                    <input type="radio" class="btn-check" name="colors-10" id="color-10-1" checked>
                    <label for="color-10-1" class="btn btn-color fs-base" style="color: #677382">
                      <span class="visually-hidden">Navy blue</span>
                    </label>
                    <input type="radio" class="btn-check" name="colors-10" id="color-10-2">
                    <label for="color-10-2" class="btn btn-color fs-base" style="color: #919384">
                      <span class="visually-hidden">Gray</span>
                    </label>
                    <input type="radio" class="btn-check" name="colors-10" id="color-10-3">
                    <label for="color-10-3" class="btn btn-color fs-base" style="color: #b2b8c0">
                      <span class="visually-hidden">Light gray</span>
                    </label>
                  </div>
                  <h3 class="mb-2">
                    <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture">
                      <span class="animate-target">Navy blue low sofa for relaxation</span>
                    </a>
                  </h3>
                  <div class="h6">$1,250.00</div>
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
                    <img src="/assets/img/shop/furniture/11.png" class="hover-effect-target opacity-100" alt="Product">
                    <img src="/assets/img/shop/furniture/11-hover.jpg" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
                  </a>
                  <div class="d-flex gap-2 mb-3">
                    <input type="radio" class="btn-check" name="colors-11" id="color-11-1" checked>
                    <label for="color-11-1" class="btn btn-color fs-base" style="color: #677382">
                      <span class="visually-hidden">Green</span>
                    </label>
                    <input type="radio" class="btn-check" name="colors-11" id="color-11-2">
                    <label for="color-11-2" class="btn btn-color fs-base" style="color: #548294">
                      <span class="visually-hidden">Blue</span>
                    </label>
                  </div>
                  <h3 class="mb-2">
                    <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture">
                      <span class="animate-target">Armchair with wooden legs 70x120 cm</span>
                    </a>
                  </h3>
                  <div class="h6">$269.99</div>
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
                    <img src="/assets/img/shop/furniture/03.png" class="hover-effect-target opacity-100" alt="Product">
                    <img src="/assets/img/shop/furniture/03-hover.jpg" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
                  </a>
                  <div class="d-flex gap-2 mb-3">
                    <input type="radio" class="btn-check" name="colors-3" id="color-3-1" checked>
                    <label for="color-3-1" class="btn btn-color fs-base" style="color: #a36540">
                      <span class="visually-hidden">Brown</span>
                    </label>
                    <input type="radio" class="btn-check" name="colors-3" id="color-3-2">
                    <label for="color-3-2" class="btn btn-color fs-base" style="color: #f8d7b5">
                      <span class="visually-hidden">Beige</span>
                    </label>
                    <input type="radio" class="btn-check" name="colors-3" id="color-3-3">
                    <label for="color-3-3" class="btn btn-color fs-base" style="color: #e0e5eb">
                      <span class="visually-hidden">White</span>
                    </label>
                  </div>
                  <h3 class="mb-2">
                    <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture">
                      <span class="animate-target">Home fragrance with the aroma of spices</span>
                    </a>
                  </h3>
                  <div class="h6">$24.00</div>
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
          <button type="button" class="viewed-prev btn btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start me-1" aria-label="Prev">
            <i class="ci-chevron-left fs-lg animate-target"></i>
          </button>
          <button type="button" class="viewed-next btn btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end" aria-label="Next">
            <i class="ci-chevron-right fs-lg animate-target"></i>
          </button>
        </div>
      </section>
    </div>
  </main>

</x-www-layout>
