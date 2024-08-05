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
        <div class="col-lg-8 col-xl-7 position-relative z-2 mb-5 mb-lg-0">
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


            <!-- Shipping address overview + Edit button -->
            <div class="accordion-item d-flex align-items-start border-0">
              <div class="d-flex align-items-center justify-content-center bg-body-secondary text-dark-emphasis rounded-circle flex-shrink-0" style="width: 2rem; height: 2rem; margin-top: -.125rem">
                <i class="ci-check fs-base"></i>
              </div>
              <div class="w-100 ps-3 ps-md-4">
                <div class="d-flex align-items-center">
                  <h2 class="accordion-header h5 mb-0 me-3" id="shippingAddressHeading">
                    <span class="d-none d-lg-inline">Shipping address</span>
                    <button type="button" class="accordion-button collapsed fs-5 d-lg-none py-1" data-bs-toggle="collapse" data-bs-target="#shippingAddress" aria-expanded="false" aria-controls="shippingAddress">
                      <span class="me-2">Shipping address</span>
                    </button>
                  </h2>
                  <div class="nav ms-auto">
                    <a class="nav-link text-decoration-underline p-0" href="checkout-v1-shipping">Edit</a>
                  </div>
                </div>
                <div class="accordion-collapse collapse d-lg-block" id="shippingAddress" aria-labelledby="shippingAddressHeading" data-bs-parent="#checkout">
                  <ul class="accordion-body list-unstyled fs-sm p-0 pt-3 pt-md-4 mb-0">
                    <li>Jane Cooper</li>
                    <li>jane.cooper@email.com</li>
                    <li>(215) 555-1234</li>
                    <li>Pennsylvania 15006</li>
                    <li>567 Cherry Lane Apt B12 Harrisburg</li>
                  </ul>
                </div>
              </div>
            </div>


            <!-- Payment method -->
            <div class="d-flex align-items-start">
              <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle fs-sm fw-semibold lh-1 flex-shrink-0" style="width: 2rem; height: 2rem; margin-top: -.125rem">3</div>
              <div class="w-100 ps-3 ps-md-4">
                <h2 class="h5 mb-0">Payment</h2>
                <!-- Livewire Payment Method Component -->
                @livewire('PaymentSelection')
                {{-- <div class="mb-4" id="paymentMethod" role="list">

                  <!-- Cash on delivery -->
                  <div class="mt-4">
                    <div class="form-check mb-0" role="listitem" data-bs-toggle="collapse" data-bs-target="#cash" aria-expanded="false" aria-controls="cash">
                      <label class="form-check-label w-100 text-dark-emphasis fw-semibold">
                        <input type="radio" class="form-check-input fs-base me-2 me-sm-3" name="payment-method">
                        Cash on delivery
                      </label>
                    </div>
                    <div class="collapse" id="cash" data-bs-parent="#paymentMethod">
                      <div class="d-sm-flex align-items-center pt-3 pt-sm-4 pb-2 ps-3 ms-2 ms-sm-3">
                        <span class="fs-sm me-3">I would require a change from:</span>
                        <div class="input-group mt-2 mt-sm-0" style="max-width: 150px">
                          <span class="input-group-text">
                            <i class="ci-dollar-sign"></i>
                          </span>
                          <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Credit card -->
                  <div class="mt-4">
                    <div class="form-check mb-0" role="listitem" data-bs-toggle="collapse" data-bs-target="#card" aria-expanded="true" aria-controls="card">
                      <label class="form-check-label d-flex align-items-center text-dark-emphasis fw-semibold">
                        <input type="radio" class="form-check-input fs-base me-2 me-sm-3" name="payment-method" checked>
                        Credit or debit card
                        <span class="d-none d-sm-flex gap-2 ms-3">
                          <img src="/assets/img/payment-methods/amex.svg" class="d-block bg-info rounded-1" width="36" alt="Amex">
                          <img src="/assets/img/payment-methods/visa-light-mode.svg" class="d-none-dark" width="36" alt="Visa">
                          <img src="/assets/img/payment-methods/visa-dark-mode.svg" class="d-none d-block-dark" width="36" alt="Visa">
                          <img src="/assets/img/payment-methods/mastercard.svg" width="36" alt="Mastercard">
                          <img src="/assets/img/payment-methods/maestro.svg" width="36" alt="Maestro">
                        </span>
                      </label>
                    </div>
                    <div class="collapse show" id="card" data-bs-parent="#paymentMethod">
                      <form class="needs-validation pt-4 pb-2 ps-3 ms-2 ms-sm-3" novalidate>
                        <div class="position-relative mb-3 mb-sm-4" data-input-format='{"creditCard": true}'>
                          <input type="text" class="form-control form-control-lg form-icon-end" placeholder="Card number" required>
                          <span class="position-absolute d-flex top-50 end-0 translate-middle-y fs-5 text-body-tertiary me-3" data-card-icon></span>
                        </div>
                        <div class="row row-cols-1 row-cols-sm-2 g-3 g-sm-4">
                          <div class="col">
                            <input type="text" class="form-control form-control-lg" data-input-format='{"date": true, "datePattern": ["m", "y"]}' placeholder="MM/YY">
                          </div>
                          <div class="col">
                            <input type="text" class="form-control form-control-lg" maxlength="4" data-input-format='{"numeral": true, "numeralPositiveOnly": true, "numeralThousandsGroupStyle": "none"}' placeholder="CVC">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>

                  <!-- PayPal -->
                  <div class="mt-4">
                    <div class="form-check mb-0" role="listitem" data-bs-toggle="collapse" data-bs-target="#paypal" aria-expanded="false" aria-controls="paypal">
                      <label class="form-check-label d-flex align-items-center text-dark-emphasis fw-semibold">
                        <input type="radio" class="form-check-input fs-base me-2 me-sm-3" name="payment-method">
                        PayPal
                        <img src="/assets/img/payment-methods/paypal-icon.svg" class="ms-3" width="16" alt="PayPal">
                      </label>
                    </div>
                    <div class="collapse" id="paypal" data-bs-parent="#paymentMethod"></div>
                  </div>

                  <!-- Google Pay -->
                  <div class="mt-4">
                    <div class="form-check mb-0" role="listitem" data-bs-toggle="collapse" data-bs-target="#googlepay" aria-expanded="false" aria-controls="googlepay">
                      <label class="form-check-label d-flex align-items-center text-dark-emphasis fw-semibold">
                        <input type="radio" class="form-check-input fs-base me-2 me-sm-3" name="payment-method">
                        Google Pay
                        <img src="/assets/img/payment-methods/google-icon.svg" class="ms-3" width="20" alt="Google Pay">
                      </label>
                    </div>
                    <div class="collapse" id="googlepay" data-bs-parent="#paymentMethod"></div>
                  </div>
                </div> --}}

                <!-- Add promo code button -->
                <div class="nav pb-3 mb-2 mb-sm-3">
                  <a class="nav-link animate-underline p-0" href="#!">
                    <i class="ci-plus-circle fs-xl ms-a me-2"></i>
                    <span class="animate-target">Add a promo code or a gift card</span>
                  </a>
                </div>

                <!-- Additional comments -->
                <textarea class="form-control form-control-lg mb-4" rows="3" placeholder="Additional comments"></textarea>

                <div class="form-check mb-lg-4">
                  <input type="checkbox" class="form-check-input" id="accept-terms">
                  <label for="accept-terms" class="form-check-label nav align-items-center">
                    I accept the
                    <a class="nav-link text-decoration-underline fw-normal ms-1 p-0" href="terms-and-conditions">Terms and Conditions</a>
                  </label>
                </div>

                <!-- Pay button visible on screens > 991px wide (lg breakpoint) -->
                <a class="btn btn-lg btn-primary w-100 d-none d-lg-flex" href="checkout-v1-thankyou">Pay $2,406.90</a>
              </div>
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
    <a class="btn btn-lg btn-primary w-100" href="checkout-v1-thankyou">Pay $2,406.90</a>
  </div>
</x-www-layout>
