<!-- Shopping cart offcanvas -->
<div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="shoppingCart" tabindex="-1" aria-labelledby="shoppingCartLabel" style="width: 500px">

  <!-- Header -->
  <div class="offcanvas-header flex-column align-items-start py-3 pt-lg-4">
    <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-lg-4">
      <h4 class="offcanvas-title" id="shoppingCartLabel">Shopping cart</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <p class="fs-sm">Buy <span class="text-dark-emphasis fw-semibold">$183</span> more to get <span class="text-dark-emphasis fw-semibold">Free Shipping</span></p>
    <div class="progress w-100" role="progressbar" aria-label="Free shipping progress" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
      <div class="progress-bar bg-warning rounded-pill" style="width: 75%"></div>
    </div>
  </div>

  <!-- Items -->
  <div class="offcanvas-body d-flex flex-column gap-4 pt-2">

    <!-- Item -->
    <div class="d-flex align-items-center">
      <a class="flex-shrink-0" href="shop-product-general-electronics">
        <img src="/assets/img/shop/electronics/thumbs/08.png" width="110" alt="iPhone 14">
      </a>
      <div class="w-100 min-w-0 ps-2 ps-sm-3">
        <h5 class="d-flex animate-underline mb-2">
          <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-general-electronics">Apple iPhone 14 128GB White</a>
        </h5>
        <div class="h6 pb-1 mb-2">$899.00</div>
        <div class="d-flex align-items-center justify-content-between">
          <div class="count-input rounded-2">
            <button type="button" class="btn btn-icon btn-sm" data-decrement aria-label="Decrement quantity">
              <i class="ci-minus"></i>
            </button>
            <input type="number" class="form-control form-control-sm" value="1" readonly>
            <button type="button" class="btn btn-icon btn-sm" data-increment aria-label="Increment quantity">
              <i class="ci-plus"></i>
            </button>
          </div>
          <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
        </div>
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
        <div class="h6 pb-1 mb-2">$989.00 <del class="text-body-tertiary fs-xs fw-normal">$1,099.00</del></div>
        <div class="d-flex align-items-center justify-content-between">
          <div class="count-input rounded-2">
            <button type="button" class="btn btn-icon btn-sm" data-decrement aria-label="Decrement quantity">
              <i class="ci-minus"></i>
            </button>
            <input type="number" class="form-control form-control-sm" value="1" readonly>
            <button type="button" class="btn btn-icon btn-sm" data-increment aria-label="Increment quantity">
              <i class="ci-plus"></i>
            </button>
          </div>
          <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
        </div>
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
        <div class="h6 pb-1 mb-2">$429.00</div>
        <div class="d-flex align-items-center justify-content-between">
          <div class="count-input rounded-2">
            <button type="button" class="btn btn-icon btn-sm" data-decrement aria-label="Decrement quantity">
              <i class="ci-minus"></i>
            </button>
            <input type="number" class="form-control form-control-sm" value="1" readonly>
            <button type="button" class="btn btn-icon btn-sm" data-increment aria-label="Increment quantity">
              <i class="ci-plus"></i>
            </button>
          </div>
          <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div class="offcanvas-header flex-column align-items-start">
    <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-md-4">
      <span class="text-light-emphasis">Subtotal:</span>
      <span class="h6 mb-0">$2,317.00</span>
    </div>
    <div class="d-flex w-100 gap-3">
      <a class="btn btn-lg btn-secondary w-100" href="checkout-v1-cart">View cart</a>
      <a class="btn btn-lg btn-primary w-100" href="checkout-v1-delivery-1">Checkout</a>
    </div>
  </div>
</div>

<!-- Navigation bar (Page header) -->
    <header class="navbar navbar-expand-lg navbar-dark bg-dark d-block z-fixed p-0" data-sticky-navbar='{"offset": 500}'>
      <div class="container d-block py-1 py-lg-3" data-bs-theme="dark">
        <div class="navbar-stuck-hide pt-1"></div>
        <div class="row flex-nowrap align-items-center g-0">
          <div class="col col-lg-3 d-flex align-items-center">

            <!-- Mobile offcanvas menu toggler (Hamburger) -->
            <button type="button" class="navbar-toggler me-4 me-lg-0" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar brand (Logo) -->
            <a href="home-electronics" class="navbar-brand me-0">
              <span class="d-none d-sm-flex flex-shrink-0 text-primary me-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"><path d="M36 18.01c0 8.097-5.355 14.949-12.705 17.2a18.12 18.12 0 0 1-5.315.79C9.622 36 2.608 30.313.573 22.611.257 21.407.059 20.162 0 18.879v-1.758c.02-.395.059-.79.099-1.185.099-.908.277-1.817.514-2.686C2.687 5.628 9.682 0 18 0c5.572 0 10.551 2.528 13.871 6.517 1.502 1.797 2.648 3.91 3.359 6.201.494 1.659.771 3.436.771 5.292z" fill="currentColor"/><g fill="#fff"><path d="M17.466 21.624c-.514 0-.988-.316-1.146-.829-.198-.632.138-1.303.771-1.501l7.666-2.469-1.205-8.254-13.317 4.621a1.19 1.19 0 0 1-1.521-.75 1.19 1.19 0 0 1 .751-1.521l13.89-4.818c.553-.197 1.166-.138 1.64.158a1.82 1.82 0 0 1 .85 1.284l1.344 9.183c.138.987-.494 1.994-1.482 2.33l-7.864 2.528-.375.04zm7.31.138c-.178-.632-.85-1.007-1.482-.81l-5.177 1.58c-2.331.79-3.28.02-3.418-.099l-6.56-8.412a4.25 4.25 0 0 0-4.406-1.758l-3.122.987c-.237.889-.415 1.777-.514 2.686l4.228-1.363a1.84 1.84 0 0 1 1.857.81l6.659 8.551c.751.948 2.015 1.323 3.359 1.323.909 0 1.857-.178 2.687-.474l5.078-1.54c.632-.178 1.008-.829.81-1.481z"/><use href="#czlogo"/><use href="#czlogo" x="8.516" y="-2.172"/></g><defs><path id="czlogo" d="M18.689 28.654a1.94 1.94 0 0 1-1.936 1.935 1.94 1.94 0 0 1-1.936-1.935 1.94 1.94 0 0 1 1.936-1.935 1.94 1.94 0 0 1 1.936 1.935z"/></defs></svg>
              </span>
              {{$slot}}
            </a>
          </div>
          <div class="col col-lg-9 d-flex align-items-center justify-content-end">

            <!-- Search visible on screens > 991px wide (lg breakpoint) -->
            <div class="position-relative flex-fill d-none d-lg-block pe-4 pe-xl-5">
              <i class="ci-search position-absolute top-50 translate-middle-y d-flex fs-lg text-white ms-3"></i>
              <input type="search" class="form-control form-control-lg form-icon-start border-white rounded-pill" placeholder="Search the products">
            </div>

            <!-- Sale link visible on screens > 1200px wide (xl breakpoint) -->
            <a class="d-none d-xl-flex align-items-center text-decoration-none animate-shake navbar-stuck-hide me-3 me-xl-4 me-xxl-5" href="shop-catalog-electronics">
              <div class="btn btn-icon btn-lg fs-lg text-primary bg-body-secondary bg-opacity-75 pe-none rounded-circle">
                <i class="ci-percent animate-target"></i>
              </div>
              <div class="ps-2 text-nowrap">
                <div class="fs-xs text-body">Only this month</div>
                <div class="fw-medium text-white">Super Sale 20%</div>
              </div>
            </a>

            <!-- Button group -->
            <div class="d-flex align-items-center">

              <!-- Navbar stuck nav toggler -->
              <button type="button" class="navbar-toggler d-none navbar-stuck-show me-3" data-bs-toggle="collapse" data-bs-target="#stuckNav" aria-controls="stuckNav" aria-expanded="false" aria-label="Toggle navigation in navbar stuck state">
                <span class="navbar-toggler-icon"></span>
              </button>

              <!-- Theme switcher (light/dark/auto) -->
              <div class="dropdown">
                <button type="button" class="theme-switcher btn btn-icon btn-lg btn-outline-secondary fs-lg border-0 rounded-circle animate-scale" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Toggle theme (light)">
                  <span class="theme-icon-active d-flex animate-target">
                    <i class="ci-sun"></i>
                  </span>
                </button>
                <ul class="dropdown-menu" style="--cz-dropdown-min-width: 9rem">
                  <li>
                    <button type="button" class="dropdown-item active" data-bs-theme-value="light" aria-pressed="true">
                      <span class="theme-icon d-flex fs-base me-2">
                        <i class="ci-sun"></i>
                      </span>
                      <span class="theme-label">Light</span>
                      <i class="item-active-indicator ci-check ms-auto"></i>
                    </button>
                  </li>
                  <li>
                    <button type="button" class="dropdown-item" data-bs-theme-value="dark" aria-pressed="false">
                      <span class="theme-icon d-flex fs-base me-2">
                        <i class="ci-moon"></i>
                      </span>
                      <span class="theme-label">Dark</span>
                      <i class="item-active-indicator ci-check ms-auto"></i>
                    </button>
                  </li>
                  <li>
                    <button type="button" class="dropdown-item" data-bs-theme-value="auto" aria-pressed="false">
                      <span class="theme-icon d-flex fs-base me-2">
                        <i class="ci-auto"></i>
                      </span>
                      <span class="theme-label">Auto</span>
                      <i class="item-active-indicator ci-check ms-auto"></i>
                    </button>
                  </li>
                </ul>
              </div>

              <!-- Search toggle button visible on screens < 992px wide (lg breakpoint) -->
              <button type="button" class="btn btn-icon btn-lg fs-xl btn-outline-secondary border-0 rounded-circle animate-shake d-lg-none" data-bs-toggle="collapse" data-bs-target="#searchBar" aria-expanded="false" aria-controls="searchBar" aria-label="Toggle search bar">
                <i class="ci-search animate-target"></i>
              </button>

              <!-- Account button visible on screens > 768px wide (md breakpoint) -->
              <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-shake d-none d-md-inline-flex" href="account-signin">
                <i class="ci-user animate-target"></i>
                <span class="visually-hidden">Account</span>
              </a>

              <!-- Wishlist button visible on screens > 768px wide (md breakpoint) -->
              <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-pulse d-none d-md-inline-flex" href="account-wishlist">
                <i class="ci-heart animate-target"></i>
                <span class="visually-hidden">Wishlist</span>
              </a>

              <!-- Cart button -->
              <button type="button" class="btn btn-icon btn-lg btn-secondary position-relative rounded-circle ms-2" data-bs-toggle="offcanvas" data-bs-target="#shoppingCart" aria-controls="shoppingCart" aria-label="Shopping cart">
                <span class="position-absolute top-0 start-100 mt-n1 ms-n3 badge text-bg-success border border-3 border-dark rounded-pill" style="--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em">3</span>
                <span class="position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 rounded-circle animate-slide-end fs-lg">
                  <i class="ci-shopping-cart animate-target ms-n1"></i>
                </span>
              </button>
            </div>
          </div>
        </div>
        <div class="navbar-stuck-hide pb-1"></div>
      </div>

      <!-- Search visible on screens < 992px wide (lg breakpoint). It is hidden inside collapse by default -->
      <div class="collapse position-absolute top-100 z-2 w-100 bg-dark d-lg-none" id="searchBar">
        <div class="container position-relative my-3" data-bs-theme="dark">
          <i class="ci-search position-absolute top-50 translate-middle-y d-flex fs-lg text-white ms-3"></i>
          <input type="search" class="form-control form-icon-start border-white rounded-pill" placeholder="Search the products" data-autofocus="collapse">
        </div>
      </div>

      <!-- Main navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
      <div class="collapse navbar-stuck-hide" id="stuckNav">
        <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
          <div class="offcanvas-header py-3">
            <h5 class="offcanvas-title" id="navbarNavLabel">Browse Cartzilla</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body py-3 py-lg-0">
            <div class="container px-0 px-lg-3">
              <div class="row">

                <!-- Categories mega menu -->
                <div class="col-lg-3">
                  <div class="navbar-nav">
                    <div class="dropdown w-100">

                      <!-- Buttton visible on screens > 991px wide (lg breakpoint) -->
                      <div class="cursor-pointer d-none d-lg-block" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-theme="dark">
                        <a class="position-absolute top-0 start-0 w-100 h-100" href="shop-categories-electronics">
                          <span class="visually-hidden">Categories</span>
                        </a>
                        <button type="button" class="btn btn-lg btn-secondary dropdown-toggle w-100 rounded-bottom-0 justify-content-start pe-none">
                          <i class="ci-grid fs-lg"></i>
                          <span class="ms-2 me-auto">Categories</span>
                        </button>
                      </div>

                      <!-- Buttton visible on screens < 992px wide (lg breakpoint) -->
                      <button type="button" class="btn btn-lg btn-secondary dropdown-toggle w-100 justify-content-start d-lg-none mb-2" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <i class="ci-grid fs-lg"></i>
                        <span class="ms-2 me-auto">Categories</span>
                      </button>

                      <!-- Mega menu -->
                      <ul class="dropdown-menu w-100 rounded-top-0 rounded-bottom-4 py-1 p-lg-1" style="--cz-dropdown-spacer: 0; --cz-dropdown-item-padding-y: .625rem; --cz-dropdown-item-spacer: 0">
                        <li class="d-lg-none pt-2">
                          <a class="dropdown-item fw-medium" href="shop-categories-electronics">
                            <i class="ci-grid fs-xl opacity-60 pe-1 me-2"></i>
                            All Categories
                            <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                          </a>
                        </li>
                        <li class="dropend position-static">
                          <div class="position-relative rounded pt-2 pb-1 px-lg-2" data-bs-toggle="dropdown" data-bs-trigger="hover">
                            <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics">
                              <i class="ci-computer fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Computers &amp; Accessories</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                            <div class="dropdown-item fw-medium text-wrap stretched-link d-lg-none">
                              <i class="ci-computer fs-xl opacity-60 pe-1 me-2"></i>
                              Computers &amp; Accessories
                              <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                            </div>
                          </div>
                          <div class="dropdown-menu rounded-4 p-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                            <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Computers</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Laptops &amp; Tablets</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Desktop Computers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">External Components</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Interal Components</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Networking Products (NAS)</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Single Board Computers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Desktop Barebones</a>
                                  </li>
                                </ul>
                              </div>
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Accessories</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Monitors</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Bags, Cases &amp; Sleeves</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Batteries</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Charges &amp; Adapters</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Cooling Pads</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Mounts</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Replacement Screens</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Security Locks</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Stands</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="d-none d-lg-block">
                                <div class="d-none d-xl-block" style="width: 284px"></div>
                                <div class="d-xl-none" style="width: 240px"></div>
                                <div class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                  <div class="text-center px-2">
                                    <span class="badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill mb-2">Save up to $400</span>
                                    <div class="fs-sm text-light-emphasis mb-2">Starts from <del>$1,599.00</del> $1,399.00</div>
                                    <div class="h2 mb-4">Surface Laptop Studio</div>
                                  </div>
                                  <img src="/assets/img/mega-menu/electronics/01.png" width="252" alt="Surface Laptop Studio">
                                  <div class="text-center mt-4">
                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics">Shop now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropend position-static">
                          <div class="position-relative rounded pb-1 px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                            <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics">
                              <i class="ci-smartphone-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Smartphones &amp; Tablets</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                            <div class="dropdown-item fw-medium stretched-link d-lg-none">
                              <i class="ci-smartphone-2 fs-xl opacity-60 pe-1 me-2"></i>
                              Smartphones &amp; Tablets
                              <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                            </div>
                          </div>
                          <div class="dropdown-menu rounded-4 p-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                            <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Smartphones</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Apple iPhone</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Google Pixel</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Android Smartphones</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Phablets</a>
                                  </li>
                                </ul>
                                <div class="d-flex w-100 pt-4">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Tablets</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Apple iPad</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Android Tablets</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Tablets with Keyboard</a>
                                  </li>
                                </ul>
                              </div>
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Accessories</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Accessory Kits</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Batteries &amp; Battery Packs</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Bags &amp; Cases</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Cables</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Car Accessories</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Charges &amp; Power Adapters</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">FM Transmitters</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Lens Attachments</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Mounts &amp; Standsv</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Repair Kits</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Replacement Parts</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Styluses</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="d-none d-lg-block">
                                <div class="d-none d-xl-block" style="width: 284px"></div>
                                <div class="d-xl-none" style="width: 240px"></div>
                                <div class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                  <div class="text-center px-2">
                                    <i class="ci-apple fs-1 text-dark-emphasis mb-2"></i>
                                    <div class="fs-sm text-light-emphasis mb-2">Deal of the week</div>
                                    <div class="h2 mb-4">iPad Pro M1</div>
                                  </div>
                                  <img src="/assets/img/mega-menu/electronics/02.png" width="252" alt="iPad Pro">
                                  <div class="text-center mt-4">
                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics">Shop now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropend position-static">
                          <div class="position-relative rounded pb-1 px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                            <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics">
                              <i class="ci-monitor-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">TV, Video &amp; Audio</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                            <div class="dropdown-item fw-medium stretched-link d-lg-none">
                              <i class="ci-monitor-2 fs-xl opacity-60 pe-1 me-2"></i>
                              TV, Video &amp; Audio
                              <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                            </div>
                          </div>
                          <div class="dropdown-menu rounded-4 p-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                            <div class="d-flex flex-column flex-lg-row h-100 gap-lg-4">
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">TV, Video &amp; Audio</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">TV Stes</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Home Theater Systems</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">DVD Players &amp; Recorders</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Blue-ray Players &amp; Recorders</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">HD DVD Players &amp; Recorders</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">DVD-VCR Combos</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">DTV Converters</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">AV Receivers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">AV Amplifiers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Projectors</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Projection Screens</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Satelite Television</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">TV-DTD Combos</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Sound Systems</a>
                                  </li>
                                </ul>
                              </div>
                              <div style="min-width: 194px">
                                <ul class="nav flex-column gap-2 mt-2 mt-lg-0">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Home Cinema Systems</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Streaming Media Players</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">VCRs</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Video Glasses</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Lens Attachments</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Subwoofers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Sound Boosters</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="d-none d-lg-block">
                                <div class="d-none d-xl-block" style="width: 284px"></div>
                                <div class="d-xl-none" style="width: 240px"></div>
                                <div class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                  <div class="text-center px-2">
                                    <div class="fs-sm text-light-emphasis mb-2">Best deal! Save up to <span class="fw-semibold">$500</span></div>
                                    <div class="h2 mb-4">LG OLED 4K Smart TV</div>
                                  </div>
                                  <img src="/assets/img/mega-menu/electronics/03.png" width="252" alt="Smart TV">
                                  <div class="text-center mt-4">
                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics">Shop now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropend position-static">
                          <div class="position-relative rounded pb-1 px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                            <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics">
                              <i class="ci-speaker-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Speakers &amp; Home Music</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                            <div class="dropdown-item fw-medium stretched-link d-lg-none">
                              <i class="ci-speaker-2 fs-xl opacity-60 pe-1 me-2"></i>
                              Speakers &amp; Home Music
                              <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                            </div>
                          </div>
                          <div class="dropdown-menu rounded-4 p-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                            <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Speakers</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Smart Speakers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Bluetooth Speakers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Bookshelf Speakers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Ceiling &amp; In-Wall Speakers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Center-Channel Speakers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Floorstanding Speakers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Outdoor Speakers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Satellite Speakers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Sound Bars</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Surround Sound Systems</a>
                                  </li>
                                </ul>
                              </div>
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Home Audio</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Home Theater</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Wireless &amp; Streaming Audio</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Stereo System Components</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Compact Radios &amp; Stereos</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Home Audio Accessories</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Subwoofers</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="d-none d-lg-block">
                                <div class="d-none d-xl-block" style="width: 284px"></div>
                                <div class="d-xl-none" style="width: 240px"></div>
                                <div class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                  <div class="text-center px-2">
                                    <i class="ci-google fs-2 text-dark-emphasis mb-3"></i>
                                    <div class="fs-sm text-light-emphasis mb-2">Deal of the week</div>
                                    <div class="h2 mb-4">Nest Audio</div>
                                  </div>
                                  <img src="/assets/img/mega-menu/electronics/04.png" width="252" alt="Nest Audio">
                                  <div class="text-center mt-4">
                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics">Shop now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropend position-static">
                          <div class="position-relative rounded pb-1 px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                            <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics">
                              <i class="ci-camera-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Cameras, Photo &amp; Video</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                            <div class="dropdown-item fw-medium stretched-link d-lg-none">
                              <i class="ci-camera-2 fs-xl opacity-60 pe-1 me-2"></i>
                              Cameras, Photo &amp; Video
                              <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                            </div>
                          </div>
                          <div class="dropdown-menu rounded-4 p-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                            <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Cameras &amp; Lenses</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Point &amp; Shoot Cameras</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">DSLR Cameras</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Mirrorless Cameras</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Body Mounted Cameras</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Camcorders</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Camcorder Lenses</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Camera Lenses</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Macro &amp; Ringlight Flashes</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Shoe Mount Flashes</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Tripods &amp; Monopods</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Video Studio</a>
                                  </li>
                                </ul>
                              </div>
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Accessories</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Bags &amp; Cases</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Binoculars &amp; Scopes</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Batteries &amp; Chargers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Cables &amp; Cords</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Camcorder Accessories</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Cleaning Equipment</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Protector Foils</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Filters &amp; Accessories</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Remote Controls</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Rain Covers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Viewfinders</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="d-none d-lg-block">
                                <div class="d-none d-xl-block" style="width: 284px"></div>
                                <div class="d-xl-none" style="width: 240px"></div>
                                <div class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                  <div class="text-center px-2">
                                    <span class="badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill mb-2">Save up to $300</span>
                                    <div class="fs-sm text-light-emphasis mb-2">Starts from <del>$1,100.00</del> 899.00</div>
                                    <div class="h2 mb-4">Canon Digital Cameras</div>
                                  </div>
                                  <img src="/assets/img/mega-menu/electronics/05.png" width="252" alt="Canon Camera">
                                  <div class="text-center mt-4">
                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics">Shop now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropend position-static">
                          <div class="position-relative rounded pb-1 px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                            <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics">
                              <i class="ci-printer-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Printers &amp; Ink</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                            <div class="dropdown-item fw-medium stretched-link d-lg-none">
                              <i class="ci-printer-2 fs-xl opacity-60 pe-1 me-2"></i>
                              Printers &amp; Ink
                              <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                            </div>
                          </div>
                          <div class="dropdown-menu rounded-4 p-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                            <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">By type</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">All-in-One</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Copying</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Faxing</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Photo Printing</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Printing Only</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Scanning</a>
                                  </li>
                                </ul>
                                <div class="d-flex w-100 pt-4">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Scanners</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Business Card Scanners</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Document Scanners</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Flatbed &amp; Photo Scanners</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Slide &amp; Negative Scanners</a>
                                  </li>
                                </ul>
                              </div>
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Printers</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Dot Matrix Printers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Inkjet Printers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Label Printers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Laser Printers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Photo Printers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Wide Format Printers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Plotter Printers</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="d-none d-lg-block">
                                <div class="d-none d-xl-block" style="width: 284px"></div>
                                <div class="d-xl-none" style="width: 240px"></div>
                                <div class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                  <div class="text-center px-2">
                                    <div class="fs-sm text-light-emphasis mb-2">Best deal! Save up to <span class="fw-semibold">$200</span></div>
                                    <div class="h2 mb-4">Epson Color Printers</div>
                                  </div>
                                  <img src="/assets/img/mega-menu/electronics/06.png" width="252" alt="Epson Printer">
                                  <div class="text-center mt-4">
                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics">Shop now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropend position-static">
                          <div class="position-relative rounded pb-1 px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                            <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics">
                              <i class="ci-battery-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Charging Stations</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                            <div class="dropdown-item fw-medium stretched-link d-lg-none">
                              <i class="ci-battery-2 fs-xl opacity-60 pe-1 me-2"></i>
                              Charging Stations
                              <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                            </div>
                          </div>
                          <div class="dropdown-menu rounded-4 p-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                            <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Charging Stations</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Portable Power Stations</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Inverter Power Stations</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Outdoor Generators</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Gasoline Generators</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Cell Phone Chargers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Power Strips</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Wall Charges</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="d-none d-lg-block">
                                <div class="d-none d-xl-block" style="width: 284px"></div>
                                <div class="d-xl-none" style="width: 240px"></div>
                                <div class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                  <div class="text-center px-2">
                                    <span class="badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill mb-2">Huge sale!</span>
                                    <div class="fs-sm text-light-emphasis mb-2">Save up to <span class="fw-semibold">$350</span></div>
                                    <div class="h2 mb-4">Portable Power Stations</div>
                                  </div>
                                  <img src="/assets/img/mega-menu/electronics/07.png" width="252" alt="Epson Printer">
                                  <div class="text-center mt-4">
                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics">Shop now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropend position-static">
                          <div class="position-relative rounded pb-1 px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                            <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics">
                              <i class="ci-headphones-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Headphones</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                            <div class="dropdown-item fw-medium stretched-link d-lg-none">
                              <i class="ci-headphones-2 fs-xl opacity-60 pe-1 me-2"></i>
                              Headphones
                              <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                            </div>
                          </div>
                          <div class="dropdown-menu rounded-4 p-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                            <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Headphones</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Earbud Headphones</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Over-Ear Headphones</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">On-Ear Headphones</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Bluetooth Headphones</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Sports &amp; Fitness</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Noise-Cancelling</a>
                                  </li>
                                </ul>
                                <div class="d-flex w-100 pt-4">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Accessories</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Cases &amp; Sleeves</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Cables &amp; Cords</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Ear Pads</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Repair Kits</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Cleaning Equipment</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="d-none d-lg-block">
                                <div class="d-none d-xl-block" style="width: 284px"></div>
                                <div class="d-xl-none" style="width: 240px"></div>
                                <div class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                  <div class="text-center px-2">
                                    <span class="badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill mb-2">Save up to $200</span>
                                    <div class="fs-sm text-light-emphasis mb-2">Starts from $119.99</div>
                                    <div class="h2 mb-4">Wireless Headphones</div>
                                  </div>
                                  <img src="/assets/img/mega-menu/electronics/08.png" width="252" alt="Wireless Headphones">
                                  <div class="text-center mt-4">
                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics">Shop now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropend position-static">
                          <div class="position-relative rounded pb-1 px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                            <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics">
                              <i class="ci-watch-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Wearable Electronics</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                            <div class="dropdown-item fw-medium stretched-link d-lg-none">
                              <i class="ci-watch-2 fs-xl opacity-60 pe-1 me-2"></i>
                              Wearable Electronics
                              <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                            </div>
                          </div>
                          <div class="dropdown-menu rounded-4 p-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                            <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Wearable Gadgets</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Smartwatches</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Fitness Trackers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Smart Glasses</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Rings</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Virtual Reality</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Clips, Arm &amp; Wristbands</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Accessories</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="d-none d-lg-block">
                                <div class="d-none d-xl-block" style="width: 284px"></div>
                                <div class="d-xl-none" style="width: 240px"></div>
                                <div class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                  <div class="text-center px-2">
                                    <i class="ci-google fs-2 text-dark-emphasis mb-3"></i>
                                    <div class="fs-sm text-light-emphasis mb-2">Deal of the week</div>
                                    <div class="h2 mb-4">Pixel Watch</div>
                                  </div>
                                  <img src="/assets/img/mega-menu/electronics/09.png" width="252" alt="Pixel Watch">
                                  <div class="text-center mt-4">
                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics">Shop now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropend position-static">
                          <div class="position-relative rounded pb-1 px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                            <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics">
                              <i class="ci-powerbank fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Powerbanks</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                            <div class="dropdown-item fw-medium stretched-link d-lg-none">
                              <i class="ci-powerbank fs-xl opacity-60 pe-1 me-2"></i>
                              Powerbanks
                              <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                            </div>
                          </div>
                          <div class="dropdown-menu rounded-4 p-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                            <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Powerbanks</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Fast Charging</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Built In Cable</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Built In Wall Plug</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">LED Indicator Lights</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Pocket Size</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Wireless Charging</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Short Circuit Protection</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Scratch Resistant</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Flashlight</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Lightweight</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="d-none d-lg-block">
                                <div class="d-none d-xl-block" style="width: 284px"></div>
                                <div class="d-xl-none" style="width: 240px"></div>
                                <div class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                  <div class="text-center px-2">
                                    <div class="fs-sm text-light-emphasis mb-2">Save up to <span class="fw-semibold">$50</span> on our</div>
                                    <div class="h2 mb-4">Powerbanks Deals</div>
                                  </div>
                                  <img src="/assets/img/mega-menu/electronics/10.png" width="252" alt="Powerbank">
                                  <div class="text-center mt-4">
                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics">Shop now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropend position-static">
                          <div class="position-relative rounded pb-1 px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                            <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics">
                              <i class="ci-hard-drive-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">HDD/SSD Data Storage</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                            <div class="dropdown-item fw-medium stretched-link d-lg-none">
                              <i class="ci-hard-drive-2 fs-xl opacity-60 pe-1 me-2"></i>
                              HDD/SSD Data Storage
                              <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                            </div>
                          </div>
                          <div class="dropdown-menu rounded-4 p-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                            <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Data Storage</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">External Hard Drives</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">External SSD</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">External Zip Drives</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Floppy &amp; Tape Drives</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Internal Hard Drives</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Internal SSD</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Network Attached Storage</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">USB Flash Drives</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="d-none d-lg-block">
                                <div class="d-none d-xl-block" style="width: 284px"></div>
                                <div class="d-xl-none" style="width: 240px"></div>
                                <div class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                  <div class="text-center px-2">
                                    <span class="badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill mb-2">Save up to $100</span>
                                    <div class="fs-sm text-light-emphasis mb-2">Starts from $89.99</div>
                                    <div class="h2 mb-4">Samsung SSD Deals</div>
                                  </div>
                                  <img src="/assets/img/mega-menu/electronics/11.png" width="252" alt="SSD">
                                  <div class="text-center mt-4">
                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics">Shop now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropend position-static">
                          <div class="position-relative rounded pb-2 px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                            <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics">
                              <i class="ci-game fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Video Games</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                            <div class="dropdown-item fw-medium stretched-link d-lg-none">
                              <i class="ci-game fs-xl opacity-60 pe-1 me-2"></i>
                              Video Games
                              <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                            </div>
                          </div>
                          <div class="dropdown-menu rounded-4 p-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                            <div class="d-flex flex-column flex-lg-row h-100 gap-lg-4">
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Games &amp; Hardware</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Video Games</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">PlayStation 5</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">PlayStation 4</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Xbox Series X</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Xbox Series S</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Nintendo Switch</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Gaming PC</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Gaming Laptops</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Wii U</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Wii</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Nintendo 3DS</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Nintendo 2DS</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Nintendo DS</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Wii</a>
                                  </li>
                                </ul>
                              </div>
                              <div style="min-width: 194px">
                                <ul class="nav flex-column gap-2 mt-2 mt-lg-0">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Mac</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">PlayStation Vita</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Sony PSP</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Retro Gaming</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Microconsoles</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Controllers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Accessories</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Digital Games Screens</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Game Pass</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">PlayStation Plus</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="d-none d-lg-block">
                                <div class="d-none d-xl-block" style="width: 284px"></div>
                                <div class="d-xl-none" style="width: 240px"></div>
                                <div class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                  <div class="text-center px-2">
                                    <span class="badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill mb-2">Save $100</span>
                                    <div class="fs-sm text-light-emphasis mb-2">Starts from <del>$599.00</del> $499.00</div>
                                    <div class="h2 mb-4">Xbox Series X</div>
                                  </div>
                                  <img src="/assets/img/mega-menu/electronics/12.png" width="252" alt="Xbox">
                                  <div class="text-center mt-4">
                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics">Shop now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <!-- Navbar nav -->
                <div class="col-lg-9 d-lg-flex pt-3 pt-lg-0 ps-lg-0">
                  <ul class="navbar-nav position-relative">
                    <li class="nav-item dropdown me-lg-n1 me-xl-0">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Home</a>
                      <ul class="dropdown-menu">
                        <li class="hover-effect-opacity px-2 mx-n2">
                          <a class="dropdown-item d-block mb-0" href="home-electronics">
                            <span class="fw-medium">Electronics Store</span>
                            <span class="d-block fs-xs text-body-secondary">Megamenu + Hero slider</span>
                            <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                              <img class="position-relative z-2 d-none-dark" src="/assets/img/mega-menu/demo-preview/electronics-light.jpg" alt="Electronics Store">
                              <img class="position-relative z-2 d-none d-block-dark" src="/assets/img/mega-menu/demo-preview/electronics-dark.jpg" alt="Electronics Store">
                              <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                              <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                            </div>
                          </a>
                        </li>
                        <li class="hover-effect-opacity px-2 mx-n2">
                          <a class="dropdown-item d-block mb-0" href="home-fashion-v1">
                            <span class="fw-medium">Fashion Store v.1</span>
                            <span class="d-block fs-xs text-body-secondary">Hero promo slider</span>
                            <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                              <img class="position-relative z-2 d-none-dark" src="/assets/img/mega-menu/demo-preview/fashion-1-light.jpg" alt="Fashion Store v.1">
                              <img class="position-relative z-2 d-none d-block-dark" src="/assets/img/mega-menu/demo-preview/fashion-1-dark.jpg" alt="Fashion Store v.1">
                              <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                              <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                            </div>
                          </a>
                        </li>
                        <li class="hover-effect-opacity px-2 mx-n2">
                          <a class="dropdown-item d-block mb-0" href="home-fashion-v2">
                            <span class="fw-medium">Fashion Store v.2</span>
                            <span class="d-block fs-xs text-body-secondary">Hero banner with hotspots</span>
                            <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                              <img class="position-relative z-2 d-none-dark" src="/assets/img/mega-menu/demo-preview/fashion-2-light.jpg" alt="Fashion Store v.2">
                              <img class="position-relative z-2 d-none d-block-dark" src="/assets/img/mega-menu/demo-preview/fashion-2-dark.jpg" alt="Fashion Store v.2">
                              <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                              <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                            </div>
                          </a>
                        </li>
                        <li class="hover-effect-opacity px-2 mx-n2">
                          <a class="dropdown-item d-block mb-0" href="home-furniture">
                            <span class="fw-medium">Furniture Store</span>
                            <span class="d-block fs-xs text-body-secondary">Fancy product carousel</span>
                            <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                              <img class="position-relative z-2 d-none-dark" src="/assets/img/mega-menu/demo-preview/furniture-light.jpg" alt="Furniture Store">
                              <img class="position-relative z-2 d-none d-block-dark" src="/assets/img/mega-menu/demo-preview/furniture-dark.jpg" alt="Furniture Store">
                              <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                              <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                            </div>
                          </a>
                        </li>
                        <li class="hover-effect-opacity px-2 mx-n2">
                          <a class="dropdown-item d-block mb-0" href="home-grocery">
                            <span class="fw-medium">Grocery Store</span>
                            <span class="d-block fs-xs text-body-secondary">Hero slider + Category cards</span>
                            <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                              <img class="position-relative z-2 d-none-dark" src="/assets/img/mega-menu/demo-preview/grocery-light.jpg" alt="Grocery Store">
                              <img class="position-relative z-2 d-none d-block-dark" src="/assets/img/mega-menu/demo-preview/grocery-dark.jpg" alt="Grocery Store">
                              <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                              <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown position-static me-lg-n1 me-xl-0">
                      <a class="nav-link dropdown-toggle active" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Shop</a>
                      <div class="dropdown-menu rounded-4 p-4">
                        <div class="d-flex flex-column flex-lg-row gap-4">
                          <div style="min-width: 190px">
                            <div class="h6 mb-2">Electronics Store</div>
                            <ul class="nav flex-column gap-2 mt-0">
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-categories-electronics">Categories Page</a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Catalog with Side Filters</a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-general-electronics">Product General Info</a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-details-electronics">Product Details</a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-reviews-electronics">Product Reviews</a>
                              </li>
                            </ul>
                            <div class="h6 pt-4 mb-2">Fashion Store</div>
                            <ul class="nav flex-column gap-2 mt-0">
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Catalog with Side Filters</a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-fashion">Product Page</a>
                              </li>
                            </ul>
                            <div class="h6 pt-4 mb-2">Furniture Store</div>
                            <ul class="nav flex-column gap-2 mt-0">
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-furniture">Catalog with Top Filters</a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-furniture">Product Page</a>
                              </li>
                            </ul>
                          </div>
                          <div style="min-width: 190px">
                            <div class="h6 mb-2">Grocery Store</div>
                            <ul class="nav flex-column gap-2 mt-0">
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Catalog with Side Filters</a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-grocery">Product Page</a>
                              </li>
                            </ul>
                            <div class="h6 pt-4 mb-2">Checkout v.1</div>
                            <ul class="nav flex-column gap-2 mt-0">
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-cart">Shopping Cart</a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-delivery-1">Delivery Info (Step 1)</a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-delivery-2">Delivery Info (Step 2)</a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-shipping">Shipping Address</a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-payment">Payment</a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-thankyou">Thank You Page</a>
                              </li>
                            </ul>
                          </div>
                          <div style="min-width: 190px">
                            <div class="h6 mb-2">Checkout v.2</div>
                            <ul class="nav flex-column gap-2 mt-0">
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-cart">Shopping Cart</a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-delivery">Delivery Info</a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-pickup">Pickup from Store</a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-thankyou">Thank You Page</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="nav-item dropdown me-lg-n1 me-xl-0">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">Account</a>
                      <ul class="dropdown-menu">
                        <li class="dropend">
                          <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Auth Pages</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="account-signin">Sign In</a></li>
                            <li><a class="dropdown-item" href="account-signup">Sign Up</a></li>
                            <li><a class="dropdown-item" href="account-password-recovery">Password Recovery</a></li>
                          </ul>
                        </li>
                        <li><a class="dropdown-item" href="account-orders">Orders History</a></li>
                        <li><a class="dropdown-item" href="account-wishlist">Wishlist</a></li>
                        <li><a class="dropdown-item" href="account-payment">Payment Methods</a></li>
                        <li><a class="dropdown-item" href="account-reviews">My Reviews</a></li>
                        <li><a class="dropdown-item" href="account-info">Personal Info</a></li>
                        <li><a class="dropdown-item" href="account-addresses">Addresses</a></li>
                        <li><a class="dropdown-item" href="account-notifications">Notifications</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown me-lg-n1 me-xl-0">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">Pages</a>
                      <ul class="dropdown-menu">
                        <li class="dropend">
                          <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">About</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="about-v1">About v.1</a></li>
                            <li><a class="dropdown-item" href="about-v2">About v.2</a></li>
                          </ul>
                        </li>
                        <li class="dropend">
                          <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Blog</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="blog-grid-v1">Grid View v.1</a></li>
                            <li><a class="dropdown-item" href="blog-grid-v2">Grid View v.2</a></li>
                            <li><a class="dropdown-item" href="blog-list">List View</a></li>
                            <li><a class="dropdown-item" href="blog-single-v1">Single Post v.1</a></li>
                            <li><a class="dropdown-item" href="blog-single-v2">Single Post v.2</a></li>
                          </ul>
                        </li>
                        <li class="dropend">
                          <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Contact</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="contact-v1">Contact v.1</a></li>
                            <li><a class="dropdown-item" href="contact-v2">Contact v.2</a></li>
                            <li><a class="dropdown-item" href="contact-v3">Contact v.3</a></li>
                          </ul>
                        </li>
                        <li class="dropend">
                          <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Help Center</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="help-topics-v1">Help Topics v.1</a></li>
                            <li><a class="dropdown-item" href="help-topics-v2">Help Topics v.2</a></li>
                            <li><a class="dropdown-item" href="help-single-article-v1">Help Single Article v.1</a></li>
                            <li><a class="dropdown-item" href="help-single-article-v2">Help Single Article v.2</a></li>
                          </ul>
                        </li>
                        <li class="dropend">
                          <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">404 Error</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="404-electronics">404 Electronics</a></li>
                            <li><a class="dropdown-item" href="404-fashion">404 Fashion</a></li>
                            <li><a class="dropdown-item" href="404-furniture">404 Furniture</a></li>
                            <li><a class="dropdown-item" href="404-grocery">404 Grocery</a></li>
                          </ul>
                        </li>
                        <li><a class="dropdown-item" href="terms-and-conditions">Terms &amp; Conditions</a></li>
                      </ul>
                    </li>
                    <li class="nav-item me-lg-n2 me-xl-0">
                      <a class="nav-link" href="docs/installation">Docs</a>
                    </li>
                    <li class="nav-item me-lg-n2 me-xl-0">
                      <a class="nav-link" href="docs/typography">Components</a>
                    </li>
                  </ul>
                  <hr class="d-lg-none my-3">
                  <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown me-lg-n2 me-xl-n1">
                      <a class="nav-link dropdown-toggle fs-sm px-3" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Eng</a>
                      <ul class="dropdown-menu fs-sm" style="--cz-dropdown-min-width: 7.5rem; --cz-dropdown-spacer: .25rem">
                        <li><a class="dropdown-item" href="#!">Français</a></li>
                        <li><a class="dropdown-item" href="#!">Deutsch</a></li>
                        <li><a class="dropdown-item" href="#!">Italiano</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown me-lg-n1">
                      <a class="nav-link dropdown-toggle fs-sm px-3" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">USD ($)</a>
                      <ul class="dropdown-menu dropdown-menu-end fs-sm" style="--cz-dropdown-min-width: 7rem; --cz-dropdown-spacer: .25rem">
                        <li><a class="dropdown-item" href="#!">€ EUR</a></li>
                        <li><a class="dropdown-item" href="#!">£ UKP</a></li>
                        <li><a class="dropdown-item" href="#!">¥ JPY</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="offcanvas-header border-top px-0 py-3 mt-3 d-md-none">
            <div class="nav nav-justified w-100">
              <a class="nav-link border-end" href="account-signin">
                <i class="ci-user fs-lg opacity-60 me-2"></i>
                Account
              </a>
              <a class="nav-link" href="account-wishlist">
                <i class="ci-heart fs-lg opacity-60 me-2"></i>
                Wishlist
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
