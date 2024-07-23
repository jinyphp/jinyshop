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
            <div class="invalid-feedback">Please provide valid email address!</div>
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


    <!-- Nav links -->
    <section class="container position-relative z-2 pb-4 pb-md-5 mb-2 mb-md-0">
      <div class="border-bottom">
        <ul class="nav nav-underline flex-nowrap gap-4">
          <li class="nav-item me-sm-2">
            <a class="nav-link" href="shop-product-general-electronics">General info</a>
          </li>
          <li class="nav-item me-sm-2">
            <a class="nav-link" href="shop-product-details-electronics">Product details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link pe-none active" href="#!">Reviews (68)</a>
          </li>
        </ul>
      </div>
    </section>


    <!-- Product details + Sticky sidebar -->
    <section class="container pb-5 mb-2 mb-md-3 mb-lg-4 mb-xl-5">
      <div class="row">

        <!-- Sticky product preview -->
        <aside class="col-md-5 col-xl-4 offset-xl-1 order-md-2 mb-5 mb-md-0" id="scrollPastPoint" style="margin-top: -100px">
          <div class="position-sticky top-0 ps-md-3 ps-lg-4 ps-xl-0" style="padding-top: 100px">
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


        <!-- Sticky product preview + Add to cart CTA -->
        <section class="sticky-product-banner sticky-top d-md-none start-0 ms-n4" data-sticky-element>
          <div class="sticky-product-banner-inner start-0 pt-5">
            <div class="vw-100 bg-body border-bottom border-light border-opacity-10 shadow pt-4 pb-2">
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


        <!-- Product reviews -->
        <div class="col-md-7 order-md-1">
          <div class="d-flex align-items-center mb-4">
            <h2 class="h3 mb-0">Reviews</h2>
            <button type="button" class="btn btn-secondary ms-auto" data-bs-toggle="modal" data-bs-target="#reviewForm">
              <i class="ci-edit-3 fs-base ms-n1 me-2"></i>
              Leave a review
            </button>
          </div>

          <!-- Reviews stats -->
          <div class="row g-4 pb-3">
            <div class="col-sm-4">

              <!-- Overall rating card -->
              <div class="d-flex flex-column align-items-center justify-content-center h-100 bg-body-tertiary rounded p-4">
                <div class="h1 pb-2 mb-1">4.1</div>
                <div class="hstack justify-content-center gap-1 fs-sm mb-2">
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star text-body-tertiary opacity-60"></i>
                </div>
                <div class="fs-sm">68 reviews</div>
              </div>
            </div>
            <div class="col-sm-8">

              <!-- Rating breakdown by quantity -->
              <div class="vstack gap-3">

                <!-- 5 stars -->
                <div class="hstack gap-2">
                  <div class="hstack fs-sm gap-1">
                    5<i class="ci-star-filled text-warning"></i>
                  </div>
                  <div class="progress w-100" role="progressbar" aria-label="Five stars" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                    <div class="progress-bar bg-warning rounded-pill" style="width: 54%"></div>
                  </div>
                  <div class="fs-sm text-nowrap text-end" style="width: 40px;">37</div>
                </div>

                <!-- 4 stars -->
                <div class="hstack gap-2">
                  <div class="hstack fs-sm gap-1">
                    4<i class="ci-star-filled text-warning"></i>
                  </div>
                  <div class="progress w-100" role="progressbar" aria-label="Four stars" aria-valuenow="23.5" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                    <div class="progress-bar bg-warning rounded-pill" style="width: 23.5%"></div>
                  </div>
                  <div class="fs-sm text-nowrap text-end" style="width: 40px;">16</div>
                </div>

                <!-- 3 stars -->
                <div class="hstack gap-2">
                  <div class="hstack fs-sm gap-1">
                    3<i class="ci-star-filled text-warning"></i>
                  </div>
                  <div class="progress w-100" role="progressbar" aria-label="Three stars" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                    <div class="progress-bar bg-warning rounded-pill" style="width: 13%"></div>
                  </div>
                  <div class="fs-sm text-nowrap text-end" style="width: 40px;">9</div>
                </div>

                <!-- 2 stars -->
                <div class="hstack gap-2">
                  <div class="hstack fs-sm gap-1">
                    2<i class="ci-star-filled text-warning"></i>
                  </div>
                  <div class="progress w-100" role="progressbar" aria-label="Two stars" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                    <div class="progress-bar bg-warning rounded-pill" style="width: 6%"></div>
                  </div>
                  <div class="fs-sm text-nowrap text-end" style="width: 40px;">4</div>
                </div>

                <!-- 1 star -->
                <div class="hstack gap-2">
                  <div class="hstack fs-sm gap-1">
                    1<i class="ci-star-filled text-warning"></i>
                  </div>
                  <div class="progress w-100" role="progressbar" aria-label="One star" aria-valuenow="3.5" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                    <div class="progress-bar bg-warning rounded-pill" style="width: 3.5%"></div>
                  </div>
                  <div class="fs-sm text-nowrap text-end" style="width: 40px;">3</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Review -->
          <div class="border-bottom py-3 mb-3">
            <div class="d-flex align-items-center mb-3">
              <div class="text-nowrap me-3">
                <span class="h6 mb-0">Rafael Marquez</span>
                <i class="ci-check-circle text-success align-middle ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-sm" data-bs-title="Verified customer"></i>
              </div>
              <span class="text-body-secondary fs-sm ms-auto">June 28, 2024</span>
            </div>
            <div class="d-flex gap-1 fs-sm pb-2 mb-1">
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star-filled text-warning"></i>
            </div>
            <ul class="list-inline gap-2 pb-2 mb-1">
              <li class="fs-sm me-4"><span class="text-dark-emphasis fw-medium">Color:</span> Blue</li>
              <li class="fs-sm"><span class="text-dark-emphasis fw-medium">Model:</span> 128GB</li>
            </ul>
            <p class="fs-sm">The phone has a new A15 Bionic chip, which makes it lightning-fast and responsive. The camera system has also been upgraded, and it now includes a 12-megapixel ultra-wide lens and a 12-megapixel wide lens.</p>
            <ul class="list-unstyled fs-sm pb-2 mb-1">
              <li><span class="text-dark-emphasis fw-medium">Pros:</span> Powerful A15 Bionic chip, improved camera</li>
              <li><span class="text-dark-emphasis fw-medium">Cons:</span> High price tag</li>
            </ul>
            <div class="nav align-items-center">
              <button type="button" class="nav-link animate-underline px-0">
                <i class="ci-corner-down-right fs-base ms-1 me-1"></i>
                <span class="animate-target">Reply</span>
              </button>
              <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-auto me-n1">
                <i class="ci-thumbs-up fs-base animate-target me-1"></i>
                0
              </button>
              <hr class="vr my-2 mx-3">
              <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                <i class="ci-thumbs-down fs-base animate-target me-1"></i>
                0
              </button>
            </div>
          </div>

          <!-- Review -->
          <div class="border-bottom py-3 mb-3">
            <div class="d-flex align-items-center mb-3">
              <div class="text-nowrap me-3">
                <span class="h6 mb-0">Daniel Adams</span>
              </div>
              <span class="text-body-secondary fs-sm ms-auto">May 15, 2024</span>
            </div>
            <div class="d-flex gap-1 fs-sm pb-2 mb-1">
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star text-body-tertiary opacity-75"></i>
            </div>
            <ul class="list-inline gap-2 pb-2 mb-1">
              <li class="fs-sm me-4"><span class="text-dark-emphasis fw-medium">Color:</span> Midnight</li>
              <li class="fs-sm"><span class="text-dark-emphasis fw-medium">Model:</span> 256GB</li>
            </ul>
            <p class="fs-sm">Overall, the iPhone 14 Plus was a solid upgrade for me. However, potential buyers should weigh the high price against the incremental nature of the upgrades and consider their specific needs before making a purchase.</p>
            <ul class="list-unstyled fs-sm pb-2 mb-1">
              <li><span class="text-dark-emphasis fw-medium">Pros:</span> Elegant design, great storage capacity</li>
              <li><span class="text-dark-emphasis fw-medium">Cons:</span> Battery life, overpriced</li>
            </ul>
            <div class="nav align-items-center">
              <button type="button" class="nav-link animate-underline px-0">
                <i class="ci-corner-down-right fs-base ms-1 me-1"></i>
                <span class="animate-target">Reply</span>
              </button>
              <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-auto me-n1">
                <i class="ci-thumbs-up text-success fs-base animate-target me-1"></i>
                18
              </button>
              <hr class="vr my-2 mx-3">
              <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                <i class="ci-thumbs-down text-danger fs-base animate-target me-1"></i>
                2
              </button>
            </div>
          </div>

          <!-- Review -->
          <div class="border-bottom py-3 mb-3">
            <div class="d-flex align-items-center mb-3">
              <div class="text-nowrap me-3">
                <span class="h6 mb-0">Andrew Richards</span>
                <i class="ci-check-circle text-success align-middle ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-sm" data-bs-title="Verified customer"></i>
              </div>
              <span class="text-body-secondary fs-sm ms-auto">May 7, 2024</span>
            </div>
            <div class="d-flex gap-1 fs-sm pb-2 mb-1">
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star-filled text-warning"></i>
            </div>
            <ul class="list-inline gap-2 pb-2 mb-1">
              <li class="fs-sm me-4"><span class="text-dark-emphasis fw-medium">Color:</span> Purple</li>
              <li class="fs-sm"><span class="text-dark-emphasis fw-medium">Model:</span> 128GB</li>
            </ul>
            <p class="fs-sm">The iPhone 14 is nothing short of exceptional, combining cutting-edge technology with a design that continues to set the standard for premium smartphones. That's why it deserves a perfect 5-star rating.</p>
            <ul class="list-unstyled fs-sm pb-2 mb-1">
              <li><span class="text-dark-emphasis fw-medium">Pros:</span> Unparalleled performance, great camera, stunning design</li>
              <li><span class="text-dark-emphasis fw-medium">Cons:</span> No in my opinion</li>
            </ul>
            <div class="nav align-items-center">
              <button type="button" class="nav-link animate-underline px-0">
                <i class="ci-corner-down-right fs-base ms-1 me-1"></i>
                <span class="animate-target">Reply</span>
              </button>
              <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-auto me-n1">
                <i class="ci-thumbs-up text-success fs-base animate-target me-1"></i>
                29
              </button>
              <hr class="vr my-2 mx-3">
              <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                <i class="ci-thumbs-down text-danger fs-base animate-target me-1"></i>
                5
              </button>
            </div>

            <!-- Reply -->
            <div class="ps-3 pb-2">
              <div class="d-flex align-items-center pt-3 pb-2 mb-1">
                <span class="badge bg-primary me-2">Reply</span>
                <span class="h6 mb-0 me-4">Cartzilla Company</span>
                <span class="text-body-secondary fs-sm">May 8, 2024</span>
              </div>
              <p class="fs-sm mb-0">Thank you for your feedback! We are glad that you were satisfied with your purchase :)</p>
            </div>
          </div>

          <!-- Review -->
          <div class="border-bottom py-3 mb-3">
            <div class="d-flex align-items-center mb-3">
              <div class="text-nowrap me-3">
                <span class="h6 mb-0">Jenny Wilson</span>
                <i class="ci-check-circle text-success align-middle ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-sm" data-bs-title="Verified customer"></i>
              </div>
              <span class="text-body-secondary fs-sm ms-auto">April 26, 2024</span>
            </div>
            <div class="d-flex gap-1 fs-sm pb-2 mb-1">
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star text-body-tertiary opacity-75"></i>
            </div>
            <ul class="list-inline gap-2 pb-2 mb-1">
              <li class="fs-sm me-4"><span class="text-dark-emphasis fw-medium">Color:</span> Blue</li>
              <li class="fs-sm"><span class="text-dark-emphasis fw-medium">Model:</span> 64GB</li>
            </ul>
            <p class="fs-sm">iPhone 14 is a reliable upgrade with notable improvements in performance and camera quality. However, the higher price and the lack of groundbreaking design changes might make potential buyers pause. If you're due for an upgrade and prioritize performance and camera enhancements, the iPhone 14 is a solid choice, but budget-conscious consumers may want to weigh their options.</p>
            <div class="d-flex gap-2 pt-1 pb-3">
              <img src="/assets/img/shop/electronics/product/reviews/01.png" class="d-block rounded-2 me-1" width="86" alt="Image">
              <img src="/assets/img/shop/electronics/product/reviews/02.png" class="d-block rounded-2 me-1" width="86" alt="Image">
              <img src="/assets/img/shop/electronics/product/reviews/03.png" class="d-block rounded-2 me-1" width="86" alt="Image">
            </div>
            <div class="nav align-items-center">
              <button type="button" class="nav-link animate-underline px-0">
                <i class="ci-corner-down-right fs-base ms-1 me-1"></i>
                <span class="animate-target">Reply</span>
              </button>
              <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-auto me-n1">
                <i class="ci-thumbs-up text-success fs-base animate-target me-1"></i>
                13
              </button>
              <hr class="vr my-2 mx-3">
              <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                <i class="ci-thumbs-down text-danger fs-base animate-target me-1"></i>
                1
              </button>
            </div>
          </div>

          <!-- Review -->
          <div class="border-bottom py-3 mb-3">
            <div class="d-flex align-items-center mb-3">
              <div class="text-nowrap me-3">
                <span class="h6 mb-0">Kristin Watson</span>
              </div>
              <span class="text-body-secondary fs-sm ms-auto">April 19, 2024</span>
            </div>
            <div class="d-flex gap-1 fs-sm pb-2 mb-1">
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star text-body-tertiary opacity-75"></i>
            </div>
            <ul class="list-inline gap-2 pb-2 mb-1">
              <li class="fs-sm me-4"><span class="text-dark-emphasis fw-medium">Color:</span> Starlight</li>
              <li class="fs-sm"><span class="text-dark-emphasis fw-medium">Model:</span> 128GB</li>
            </ul>
            <p class="fs-sm">iPhone 14 impresses with its camera prowess, delivering high-quality images. However, the decision to eliminate the 3.5mm headphone jack may impact users who rely on wired audio accessories, requiring them to adapt to wireless alternatives or use an adapter.</p>
            <ul class="list-unstyled fs-sm pb-2 mb-1">
              <li><span class="text-dark-emphasis fw-medium">Pros:</span> 12-megapixel ultra-wide lens and a 12-megapixel wide lens</li>
              <li><span class="text-dark-emphasis fw-medium">Cons:</span> Does not have a headphone jack</li>
            </ul>
            <div class="nav align-items-center">
              <button type="button" class="nav-link animate-underline px-0">
                <i class="ci-corner-down-right fs-base ms-1 me-1"></i>
                <span class="animate-target">Reply</span>
              </button>
              <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-auto me-n1">
                <i class="ci-thumbs-up text-success fs-base animate-target me-1"></i>
                32
              </button>
              <hr class="vr my-2 mx-3">
              <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                <i class="ci-thumbs-down text-danger fs-base animate-target me-1"></i>
                7
              </button>
            </div>
          </div>

          <!-- Pagination -->
          <nav class="mt-3 pt-2 pt-md-3" aria-label="Reviews pagination">
            <ul class="pagination">
              <li class="page-item active" aria-current="page">
                <span class="page-link">
                  1
                  <span class="visually-hidden">(current)</span>
                </span>
              </li>
              <li class="page-item">
                <a class="page-link" href="#!">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#!">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#!">4</a>
              </li>
              <li class="page-item">
                <span class="page-link pe-none">...</span>
              </li>
              <li class="page-item">
                <a class="page-link" href="#!">16</a>
              </li>
            </ul>
          </nav>
        </div>
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
