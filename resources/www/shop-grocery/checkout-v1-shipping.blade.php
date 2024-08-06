<x-www-layout>
  <!-- Order preview offcanvas -->
  <div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="orderPreview" tabindex="-1" aria-labelledby="orderPreviewLabel" style="width: 500px">
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
  </div>

  <!-- Page content -->
  <main class="content-wrapper">
    <div class="container py-5">
      <div class="row pt-1 pt-sm-3 pt-lg-4 pb-2 pb-md-3 pb-lg-4 pb-xl-5">
        <div class="col-lg-8 col-xl-7 mb-5 mb-lg-0">
          <div class="accordion d-flex flex-column gap-5 pe-lg-4 pe-xl-0" id="checkout">

            <!-- Delivery info overview + Edit button -->
            <div class="accordion-item d-flex align-items-start border-0">
              <div class="d-flex align-items-center justify-content-center bg-body-secondary text-dark-emphasis rounded-circle flex-shrink-0" style="width: 2rem; height: 2rem; margin-top: -.125rem">
                <i class="ci-check fs-base"></i>
              </div>
              <div class="w-100 ps-3 ps-md-4">
                <div class="d-flex align-items-center">
                  <h2 class="accordion-header h5 mb-0 me-3" id="deliveryInfoHeading">
                    <span class="d-none d-lg-inline">Delivery information</span>
                    <button type="button" class="accordion-button collapsed fs-5 d-lg-none py-1" data-bs-toggle="collapse" data-bs-target="#deliveryInfo" aria-expanded="false" aria-controls="deliveryInfo">
                      <span class="me-2">Delivery information</span>
                    </button>
                  </h2>
                  <div class="nav ms-auto">
                    <a class="nav-link text-decoration-underline p-0" href="checkout-v1-delivery-2">Edit</a>
                  </div>
                </div>
                <div class="accordion-collapse collapse d-lg-block" id="deliveryInfo" aria-labelledby="deliveryInfoHeading" data-bs-parent="#checkout">
                  <div class="accordion-body p-0 pt-3 pt-md-4">
                    <h3 class="fs-sm mb-2">Postcode</h3>
                    <p class="fs-sm">15006</p>
                    <h3 class="fs-sm mb-2">Estimated delivery date</h3>
                    <div class="d-flex align-items-center fs-sm">
                      Monday, 13
                      <span class="opacity-40 mx-2">|</span>
                      12:00 - 16:00
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- Shipping address form -->
            <div class="d-flex align-items-start">
              <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle fs-sm fw-semibold lh-1 flex-shrink-0" style="width: 2rem; height: 2rem; margin-top: -.125rem">2</div>
              <div class="w-100 ps-3 ps-md-4">
                <h1 class="h5 mb-md-4">Shipping address</h1>
                <form class="needs-validation" novalidate>
                  <div class="row row-cols-1 row-cols-sm-2 g-3 g-sm-4 mb-4">
                    <div class="col">
                      <label for="shipping-fn" class="form-label">First name <span class="text-danger">*</span></label>
                      <input type="text" class="form-control form-control-lg" id="shipping-fn" required>
                    </div>
                    <div class="col">
                      <label for="shipping-ln" class="form-label">Last name <span class="text-danger">*</span></label>
                      <input type="text" class="form-control form-control-lg" id="shipping-ln" required>
                    </div>
                    <div class="col">
                      <label for="shipping-email" class="form-label">Email address <span class="text-danger">*</span></label>
                      <input type="email" class="form-control form-control-lg" id="shipping-email" required>
                    </div>
                    <div class="col">
                      <label for="shipping-mobile" class="form-label">Mobile number</label>
                      <input type="text" class="form-control form-control-lg" id="shipping-mobile">
                    </div>
                    <div class="col">
                      <label class="form-label">City <span class="text-danger">*</span></label>
                      <select class="form-select" data-select='{
                        "searchEnabled": true,
                        "classNames": {
                          "containerInner": "form-select form-select-lg"
                        }
                      }' required>
                        <option value="">Select your city</option>
                        <option value="New York City">New York City</option>
                        <option value="Los Angeles">Los Angeles</option>
                        <option value="Chicago">Chicago</option>
                        <option value="Houston">Houston</option>
                        <option value="Phoenix">Phoenix</option>
                        <option value="Philadelphia">Philadelphia</option>
                        <option value="San Antonio">San Antonio</option>
                        <option value="San Diego">San Diego</option>
                        <option value="Dallas">Dallas</option>
                        <option value="San Jose">San Jose</option>
                        <option value="Austin">Austin</option>
                        <option value="Seattle">Seattle</option>
                      </select>
                    </div>
                    <div class="col">
                      <label for="shipping-postcode" class="form-label">Postcode <span class="text-danger">*</span></label>
                      <input type="text" class="form-control form-control-lg" id="shipping-postcode" required>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="shipping-address" class="form-label">House / apartment number and street address <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-lg" id="shipping-address" required>
                  </div>
                  <div class="nav mb-4">
                    <a class="nav-link px-0" href="#!">
                      Add address line
                      <i class="ci-plus fs-base ms-1"></i>
                    </a>
                  </div>
                  <h3 class="h6">
                    Billing address
                    <i class="ci-info text-body-secondary align-middle ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-custom-class="popover-sm" data-bs-content="Uncheck the checkbox below if your Billing address should be different from your Shipping address."></i>
                  </h3>
                  <div class="form-check mb-lg-4">
                    <input type="checkbox" class="form-check-input" id="same-address" checked>
                    <label for="same-address" class="form-check-label">Same as delivery address</label>
                  </div>
                  <a class="btn btn-lg btn-primary w-100 d-none d-lg-flex" href="checkout-v1-payment">
                    Continue
                    <i class="ci-chevron-right fs-lg ms-1 me-n1"></i>
                  </a>
                </form>
              </div>
            </div>

            <!-- Payment -->
            <div class="d-flex align-items-start">
              <div class="d-flex align-items-center justify-content-center bg-body-secondary text-body-secondary rounded-circle fs-sm fw-semibold lh-1 flex-shrink-0" style="width: 2rem; height: 2rem; margin-top: -.125rem">3</div>
              <h2 class="h5 text-body-secondary ps-3 ps-md-4 mb-0">Payment</h2>
            </div>
          </div>
        </div>

        <!-- Order summary (sticky sidebar) -->
        <aside class="col-lg-4 offset-xl-1" style="margin-top: -100px">
          <div class="position-sticky top-0" style="padding-top: 100px">
            @livewire('CheckoutOrderSummary')
          </div>
        </aside>
      </div>
    </div>
  </main>

  <!-- Fixed positioned pay button that is visible on screens < 992px wide (lg breakpoint) -->
  <div class="fixed-bottom z-sticky w-100 py-2 px-3 bg-body border-top shadow d-lg-none">
    <a class="btn btn-lg btn-primary w-100" href="checkout-v1-payment">
      Continue
      <i class="ci-chevron-right fs-lg ms-1 me-n1"></i>
    </a>
  </div>
</x-www-layout>
