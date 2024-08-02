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
            @livewire('CheckoutOrderSummary')
          </div>
        </aside>
      </div>
    </div>
  </main>

</x-www-layout>
