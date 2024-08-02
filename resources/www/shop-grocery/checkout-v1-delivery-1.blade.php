<x-www-layout>
  <!-- Order preview offcanvas -->
  {{-- <div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="orderPreview" tabindex="-1" aria-labelledby="orderPreviewLabel" style="width: 500px">
    <div class="offcanvas-header py-3 pt-lg-4">
      <h4 class="offcanvas-title" id="orderPreviewLabel">Your order</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column gap-3 py-2">

      <!-- Item -->
      <div class="d-flex align-items-center">
        <a class="flex-shrink-0" href="shop-product-general-electronics">
          <img src="/assets/img/shop/electronics/thumbs/08.png" width="110" alt="iPhone 14">
        </a>
        <div class="w-100 min-w-0 ps-2 ps-sm-3">
          <h5 class="d-flex animate-underline mb-2">
            <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-general-electronics">Apple iPhone 14 128GB White</a>
          </h5>
          <div class="h6 mb-0">$899.00</div>
          <div class="fs-xs pt-2">Qty: 1</div>
        </div>
      </div>

      <!-- Item -->
      <div class="d-flex align-items-center">
        <a class="position-relative flex-shrink-0" href="shop-product-general-electronics">
          <span class="badge text-bg-danger position-absolute top-0 start-0">-10%</span>
          <img src="/assets/img/shop/electronics/thumbs/09.png" width="110" alt="iPad Pro">
        </a>
        <div class="w-100 min-w-0 ps-2 ps-sm-3">
          <h5 class="d-flex animate-underline mb-2">
            <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-general-electronics">Tablet Apple iPad Pro M2</a>
          </h5>
          <div class="h6 mb-0">$989.00 <del class="text-body-tertiary fs-xs fw-normal">$1,099.00</del></div>
          <div class="fs-xs pt-2">Qty: 1</div>
        </div>
      </div>

      <!-- Item -->
      <div class="d-flex align-items-center">
        <a class="flex-shrink-0" href="shop-product-general-electronics">
          <img src="/assets/img/shop/electronics/thumbs/01.png" width="110" alt="Smart Watch">
        </a>
        <div class="w-100 min-w-0 ps-2 ps-sm-3">
          <h5 class="d-flex animate-underline mb-2">
            <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-general-electronics">Smart Watch Series 7, White</a>
          </h5>
          <div class="h6 mb-0">$429.00</div>
          <div class="fs-xs pt-2">Qty: 1</div>
        </div>
      </div>
    </div>

    <div class="offcanvas-header">
      <a class="btn btn-lg btn-outline-secondary w-100" href="checkout-v1-cart">Edit cart</a>
    </div>
  </div> --}}


  <!-- Page content -->
  <main class="content-wrapper">
    <div class="container py-5">
      <div class="row pt-1 pt-sm-3 pt-lg-4 pb-2 pb-md-3 pb-lg-4 pb-xl-5">

        <!-- Delivery info (Step 1) -->
        <div class="col-lg-8 col-xl-7 mb-5 mb-lg-0">
          <div class="d-flex flex-column gap-5 pe-lg-4 pe-xl-0">
            <div class="d-flex align-items-start">
              <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle fs-sm fw-semibold lh-1 flex-shrink-0" style="width: 2rem; height: 2rem; margin-top: -.125rem">1</div>
              <div class="w-100 ps-3 ps-md-4">
                <h1 class="h5 mb-md-4">Delivery information</h1>
                <div class="ms-n5 ms-sm-0">
                  <p class="fs-sm mb-md-4">Add your Postcode to see the delivery and collection options available in your area.</p>
                  <div class="d-flex flex-column flex-md-row align-items-md-end gap-3 gap-xl-4">
                    <div class="w-100">
                      <label for="postcode" class="form-label">Postcode</label>
                      <input type="text" class="form-control form-control-lg" id="postcode" placeholder="e.g. H1 1AG">
                    </div>
                    <a class="btn btn-lg btn-primary" href="checkout-v1-delivery-2">
                      Calculate cost and availability
                      <i class="ci-chevron-right fs-lg ms-1 me-n1"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-start">
              <div class="d-flex align-items-center justify-content-center bg-body-secondary text-body-secondary rounded-circle fs-sm fw-semibold lh-1 flex-shrink-0" style="width: 2rem; height: 2rem; margin-top: -.125rem">2</div>
              <h2 class="h5 text-body-secondary ps-3 ps-md-4 mb-0">Shipping address</h2>
            </div>
            <div class="d-flex align-items-start">
              <div class="d-flex align-items-center justify-content-center bg-body-secondary text-body-secondary rounded-circle fs-sm fw-semibold lh-1 flex-shrink-0" style="width: 2rem; height: 2rem; margin-top: -.125rem">3</div>
              <h2 class="h5 text-body-secondary ps-3 ps-md-4 mb-0">Payment</h2>
            </div>
          </div>
        </div>


        <!-- Order summary (sticky sidebar) -->
        <aside class="col-lg-4 offset-xl-1" style="margin-top: -100px">
          <div class="position-sticky top-0" style="padding-top: 100px">
            <div class="bg-body-tertiary rounded-5 p-4 mb-3">
              <div class="p-sm-2 p-lg-0 p-xl-2">
                <div class="border-bottom pb-4 mb-4">
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <h5 class="mb-0">Order summary</h5>
                    <div class="nav">
                      <a class="nav-link text-decoration-underline p-0" href="checkout-v1-cart">Edit</a>
                    </div>
                  </div>
                  <a class="d-flex align-items-center gap-2 text-decoration-none" href="#orderPreview" data-bs-toggle="offcanvas">
                    <div class="ratio ratio-1x1" style="max-width: 64px">
                      <img src="/assets/img/shop/electronics/thumbs/08.png" class="d-block p-1" alt="iPhone">
                    </div>
                    <div class="ratio ratio-1x1" style="max-width: 64px">
                      <img src="/assets/img/shop/electronics/thumbs/09.png" class="d-block p-1" alt="iPad Pro">
                    </div>
                    <div class="ratio ratio-1x1" style="max-width: 64px">
                      <img src="/assets/img/shop/electronics/thumbs/01.png" class="d-block p-1" alt="Smart Watch">
                    </div>
                    <i class="ci-chevron-right text-body fs-xl p-0 ms-auto"></i>
                  </a>
                </div>
                <ul class="list-unstyled fs-sm gap-3 mb-0">
                  <li class="d-flex justify-content-between">
                    Subtotal (3 items):
                    <span class="text-dark-emphasis fw-medium">$2,427.00</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    Saving:
                    <span class="text-danger fw-medium">-$110.00</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    Tax collected:
                    <span class="text-dark-emphasis fw-medium">$73.40</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    Shipping:
                    <span class="text-dark-emphasis fw-medium">Calculated at checkout</span>
                  </li>
                </ul>
                <div class="border-top pt-4 mt-4">
                  <div class="d-flex justify-content-between mb-3">
                    <span class="fs-sm">Estimated total:</span>
                    <span class="h5 mb-0">$2,390.40</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="bg-body-tertiary rounded-5 p-4">
              <div class="d-flex align-items-center px-sm-2 px-lg-0 px-xl-2">
                <svg class="text-warning flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"><path d="M1.333 9.667H7.5V16h-5c-.64 0-1.167-.527-1.167-1.167V9.667zm13.334 0v5.167c0 .64-.527 1.167-1.167 1.167h-5V9.667h6.167zM0 5.833V7.5c0 .64.527 1.167 1.167 1.167h.167H7.5v-1-3H1.167C.527 4.667 0 5.193 0 5.833zm14.833-1.166H8.5v3 1h6.167.167C15.473 8.667 16 8.14 16 7.5V5.833c0-.64-.527-1.167-1.167-1.167z"/><path d="M8 5.363a.5.5 0 0 1-.495-.573C7.752 3.123 9.054-.03 12.219-.03c1.807.001 2.447.977 2.447 1.813 0 1.486-2.069 3.58-6.667 3.58zM12.219.971c-2.388 0-3.295 2.27-3.595 3.377 1.884-.088 3.072-.565 3.756-.971.949-.563 1.287-1.193 1.287-1.595 0-.599-.747-.811-1.447-.811z"/><path d="M8.001 5.363c-4.598 0-6.667-2.094-6.667-3.58 0-.836.641-1.812 2.448-1.812 3.165 0 4.467 3.153 4.713 4.819a.5.5 0 0 1-.495.573zM3.782.971c-.7 0-1.448.213-1.448.812 0 .851 1.489 2.403 5.042 2.566C7.076 3.241 6.169.971 3.782.971z"/></svg>
                <div class="text-dark-emphasis fs-sm ps-2 ms-1">Congratulations! You have earned <span class="fw-semibold">239 bonuses</span></div>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </main>


</x-www-layout>
