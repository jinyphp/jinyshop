<x-www-layout>

    <div class="container py-5 mt-n2 mt-sm-0">
      <div class="row pt-md-2 pt-lg-3 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">


        <!-- Sidebar navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
        <aside class="col-lg-3">
          <div class="offcanvas-lg offcanvas-start pe-lg-0 pe-xl-4" id="accountSidebar">

            <!-- Header -->
            <div class="offcanvas-header d-lg-block py-3 p-lg-0">
              <div class="d-flex align-items-center">
                <div class="h5 d-flex justify-content-center align-items-center flex-shrink-0 text-primary bg-primary-subtle lh-1 rounded-circle mb-0" style="width: 3rem; height: 3rem">S</div>
                <div class="min-w-0 ps-3">
                  <h5 class="h6 mb-1">Susan Gardner</h5>
                  <div class="nav flex-nowrap text-nowrap min-w-0">
                    <a class="nav-link animate-underline text-body p-0" href="#bonusesModal" data-bs-toggle="modal">
                      <svg class="text-warning flex-shrink-0 me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"><path d="M1.333 9.667H7.5V16h-5c-.64 0-1.167-.527-1.167-1.167V9.667zm13.334 0v5.167c0 .64-.527 1.167-1.167 1.167h-5V9.667h6.167zM0 5.833V7.5c0 .64.527 1.167 1.167 1.167h.167H7.5v-1-3H1.167C.527 4.667 0 5.193 0 5.833zm14.833-1.166H8.5v3 1h6.167.167C15.473 8.667 16 8.14 16 7.5V5.833c0-.64-.527-1.167-1.167-1.167z"/><path d="M8 5.363a.5.5 0 0 1-.495-.573C7.752 3.123 9.054-.03 12.219-.03c1.807.001 2.447.977 2.447 1.813 0 1.486-2.069 3.58-6.667 3.58zM12.219.971c-2.388 0-3.295 2.27-3.595 3.377 1.884-.088 3.072-.565 3.756-.971.949-.563 1.287-1.193 1.287-1.595 0-.599-.747-.811-1.447-.811z"/><path d="M8.001 5.363c-4.598 0-6.667-2.094-6.667-3.58 0-.836.641-1.812 2.448-1.812 3.165 0 4.467 3.153 4.713 4.819a.5.5 0 0 1-.495.573zM3.782.971c-.7 0-1.448.213-1.448.812 0 .851 1.489 2.403 5.042 2.566C7.076 3.241 6.169.971 3.782.971z"/></svg>
                      <span class="animate-target me-1">100 bonuses</span>
                      <span class="text-body fw-normal text-truncate">available</span>
                    </a>
                  </div>
                </div>
              </div>
              <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas" data-bs-target="#accountSidebar" aria-label="Close"></button>
            </div>

            <!-- Body (Navigation) -->
            <div class="offcanvas-body d-block pt-2 pt-lg-4 pb-lg-0">
              <nav class="list-group list-group-borderless">
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-orders.html">
                  <i class="ci-shopping-bag fs-base opacity-75 me-2"></i>
                  Orders
                  <span class="badge bg-primary rounded-pill ms-auto">1</span>
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-wishlist.html">
                  <i class="ci-heart fs-base opacity-75 me-2"></i>
                  Wishlist
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center pe-none active" href="account-payment.html">
                  <i class="ci-credit-card fs-base opacity-75 me-2"></i>
                  Payment methods
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-reviews.html">
                  <i class="ci-star fs-base opacity-75 me-2"></i>
                  My reviews
                </a>
              </nav>
              <h6 class="pt-4 ps-2 ms-1">Manage account</h6>
              <nav class="list-group list-group-borderless">
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-info.html">
                  <i class="ci-user fs-base opacity-75 me-2"></i>
                  Personal info
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-addresses.html">
                  <i class="ci-map-pin fs-base opacity-75 me-2"></i>
                  Addresses
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-notifications.html">
                  <i class="ci-bell fs-base opacity-75 mt-1 me-2"></i>
                  Notifications
                </a>
              </nav>
              <h6 class="pt-4 ps-2 ms-1">Customer service</h6>
              <nav class="list-group list-group-borderless">
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="help-topics-v1.html">
                  <i class="ci-help-circle fs-base opacity-75 me-2"></i>
                  Help center
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="terms-and-conditions.html">
                  <i class="ci-info fs-base opacity-75 me-2"></i>
                  Terms and conditions
                </a>
              </nav>
              <nav class="list-group list-group-borderless pt-3">
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-signin.html">
                  <i class="ci-log-out fs-base opacity-75 me-2"></i>
                  Log out
                </a>
              </nav>
            </div>
          </div>
        </aside>


        <!-- Payment methods content -->
        <div class="col-lg-9">
          <div class="ps-lg-3 ps-xl-0">

            <!-- Page title -->
            <h1 class="h2 pb-2 pb-md-3">Payment methods</h1>

            <!-- Payment methods (Grid) -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 g-md-4 g-lg-3 g-xl-4">
              <div class="col">
                <div class="card h-100">
                  <div class="card-body pb-3">
                    <div class="d-flex align-items-start justify-content-between mb-4">
                      <img src="assets/img/payment-methods/mastercard.svg" class="m-n3" width="100" alt="Mastercard">
                      <span class="badge text-bg-info rounded-pill">Primary</span>
                    </div>
                    <div class="h6 mb-1">**** **** **** 8341</div>
                    <div class="text-danger fs-xs">Expired 05/24</div>
                  </div>
                  <div class="card-footer d-flex gap-3 bg-transparent border-0 pt-0 pb-4">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Remove</button>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <div class="card-body pb-3">
                    <div class="d-flex align-items-start justify-content-between mb-4">
                      <img src="assets/img/payment-methods/visa-light-mode.svg" class="d-none-dark m-n3" width="100" alt="Visa">
                      <img src="assets/img/payment-methods/visa-dark-mode.svg" class="d-none d-block-dark m-n3" width="100" alt="Visa">
                      <div class="nav animate-underline">
                        <a class="nav-link animate-target fs-xs p-0" href="#!">Set as primary</a>
                      </div>
                    </div>
                    <div class="h6 mb-1">**** **** **** 1276</div>
                    <div class="text-body fs-xs">Expiration 01/27</div>
                  </div>
                  <div class="card-footer d-flex gap-3 bg-transparent border-0 pt-0 pb-4">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Remove</button>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card border-0 h-100">
                  <span class="position-absolute top-0 start-0 w-100 h-100 border border-dashed border-secondary border-opacity-25 rounded d-none-dark"></span>
                  <span class="position-absolute top-0 start-0 w-100 h-100 border border-dashed border-light border-opacity-25 rounded d-none d-block-dark"></span>
                  <div class="card-body position-relative z-2 nav align-items-center justify-content-center py-5">
                    <a class="nav-link animate-underline stretched-link min-w-0 fs-base px-0" href="#addPaymentModal" data-bs-toggle="modal">
                      <i class="ci-plus fs-lg ms-n2 me-2"></i>
                      <span class="animate-target text-truncate">Add payment method</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</x-www-layout>
