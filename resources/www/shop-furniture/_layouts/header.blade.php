<!-- Shopping cart offcanvas (Empty state) -->
<div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="shoppingCart" tabindex="-1" aria-labelledby="shoppingCartLabel" style="width: 500px">
  <div class="offcanvas-header py-3 pt-lg-4">
    <h4 class="offcanvas-title" id="shoppingCartLabel">Shopping cart</h4>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body text-center">
    <svg class="d-block mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" width="60" viewBox="0 0 29.5 30"><path class="text-body-tertiary" d="M17.8 4c.4 0 .8-.3.8-.8v-2c0-.4-.3-.8-.8-.8-.4 0-.8.3-.8.8v2c0 .4.3.8.8.8zm3.2.6c.4.2.8 0 1-.4l.4-.9c.2-.4 0-.8-.4-1s-.8 0-1 .4l-.4.9c-.2.4 0 .9.4 1zm-7.5-.4c.2.4.6.6 1 .4s.6-.6.4-1l-.4-.9c-.2-.4-.6-.6-1-.4s-.6.6-.4 1l.4.9z" fill="currentColor"/><path class="text-body-emphasis" d="M10.7 24.5c-1.5 0-2.8 1.2-2.8 2.8S9.2 30 10.7 30s2.8-1.2 2.8-2.8-1.2-2.7-2.8-2.7zm0 4c-.7 0-1.2-.6-1.2-1.2s.6-1.2 1.2-1.2 1.2.6 1.2 1.2-.5 1.2-1.2 1.2zm11.1-4c-1.5 0-2.8 1.2-2.8 2.8a2.73 2.73 0 0 0 2.8 2.8 2.73 2.73 0 0 0 2.8-2.8c0-1.6-1.3-2.8-2.8-2.8zm0 4c-.7 0-1.2-.6-1.2-1.2s.6-1.2 1.2-1.2 1.2.6 1.2 1.2-.6 1.2-1.2 1.2zM8.7 18h16c.3 0 .6-.2.7-.5l4-10c.2-.5-.2-1-.7-1H9.3c-.4 0-.8.3-.8.8s.4.7.8.7h18.3l-3.4 8.5H9.3L5.5 1C5.4.7 5.1.5 4.8.5h-4c-.5 0-.8.3-.8.7s.3.8.8.8h3.4l3.7 14.6a3.24 3.24 0 0 0-2.3 3.1C5.5 21.5 7 23 8.7 23h16c.4 0 .8-.3.8-.8s-.3-.8-.8-.8h-16a1.79 1.79 0 0 1-1.8-1.8c0-1 .9-1.6 1.8-1.6z" fill="currentColor"/></svg>
    <h6 class="mb-2">Your shopping cart is currently empty!</h6>
    <p class="fs-sm mb-4">Explore our wide range of products and add items to your cart to proceed with your purchase.</p>
    <a class="btn btn-dark rounded-pill" href="shop-catalog-furniture">Continue shopping</a>
  </div>
</div>


<!-- Topbar -->
<div class="container position-relative d-flex justify-content-between z-1 py-3">
  <div class="nav animate-underline">
    <span class="text-secondary-emphasis fs-xs me-1">Contact us <span class="d-none d-sm-inline">24/7</span></span>
    <a class="nav-link animate-target fs-xs fw-semibold p-0" href="tel:+15053753082">+1&nbsp;50&nbsp;537&nbsp;53&nbsp;082</a>
  </div>
  <a class="text-secondary-emphasis fs-xs text-decoration-none d-none d-md-inline" href="#!">🔥 The Biggest Sale Ever 50% Off</a>
  <ul class="nav gap-4">
    <li class="animate-underline">
      <a class="nav-link animate-target fs-xs p-0" href="#!">Wishlist</a>
    </li>
    <li class="animate-underline">
      <a class="nav-link animate-target fs-xs p-0" href="#!">Account</a>
    </li>
  </ul>
</div>


<!-- Navigation bar (Page header) -->
<header class="navbar-sticky sticky-top container z-fixed px-2" data-sticky-element>
  <div class="navbar navbar-expand-lg flex-nowrap bg-body rounded-pill shadow ps-0 mx-1">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark rounded-pill z-0 d-none d-block-dark"></div>

    <!-- Mobile offcanvas menu toggler (Hamburger) -->
    <button type="button" class="navbar-toggler ms-3" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar brand (Logo) -->
    <a class="navbar-brand position-relative z-1 ms-4 ms-sm-5 ms-lg-4 me-2 me-sm-0 me-lg-3" href="index">Cartzilla</a>

    <!-- Main navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
    <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
      <div class="offcanvas-header py-3">
        <h5 class="offcanvas-title" id="navbarNavLabel">Browse Cartzilla</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body pt-3 pb-4 py-lg-0 mx-lg-auto">
        <ul class="navbar-nav position-relative">
          <li class="nav-item dropdown me-lg-n1 me-xl-0">
            <a class="nav-link dropdown-toggle fs-sm active" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Home</a>
            <ul class="dropdown-menu" style="--cz-dropdown-spacer: 1rem">
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
            <a class="nav-link dropdown-toggle fs-sm" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Shop</a>
            <div class="dropdown-menu p-4" style="--cz-dropdown-spacer: 1rem">
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
            <a class="nav-link dropdown-toggle fs-sm" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">Account</a>
            <ul class="dropdown-menu" style="--cz-dropdown-spacer: 1rem">
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
            <a class="nav-link dropdown-toggle fs-sm" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">Pages</a>
            <ul class="dropdown-menu" style="--cz-dropdown-spacer: 1rem">
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
            <a class="nav-link fs-sm" href="docs/installation">Docs</a>
          </li>
          <li class="nav-item me-lg-n2 me-xl-0">
            <a class="nav-link fs-sm" href="docs/typography">Components</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Button group -->
    <div class="d-flex gap-sm-1 position-relative z-1">

      <!-- Theme switcher (light/dark/auto) -->
      <div class="dropdown">
        <button type="button" class="theme-switcher btn btn-icon btn-outline-secondary fs-lg border-0 rounded-circle animate-scale" data-bs-toggle="dropdown" data-bs-display="dynamic" aria-expanded="false" aria-label="Toggle theme (light)">
          <span class="theme-icon-active d-flex animate-target">
            <i class="ci-sun"></i>
          </span>
        </button>
        <ul class="dropdown-menu start-50 translate-middle-x" style="--cz-dropdown-min-width: 9rem; --cz-dropdown-spacer: 1rem">
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

      <!-- Cart button -->
      <button type="button" class="btn btn-icon fs-lg btn-outline-secondary border-0 rounded-circle animate-scale me-2" data-bs-toggle="offcanvas" data-bs-target="#shoppingCart" aria-controls="shoppingCart" aria-label="Shopping cart">
        <i class="ci-shopping-cart animate-target"></i>
      </button>

      <!-- Search -->
      <div class="dropdown">
        <button type="button" class="btn btn-icon fs-lg btn-secondary rounded-circle animate-scale" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-label="Toggle search bar">
          <i class="ci-search animate-target"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end p-3" style="--cz-dropdown-min-width: 20rem; --cz-dropdown-spacer: 1rem">
          <form class="position-relative">
            <input type="search" class="form-control rounded-pill" placeholder="Search..." data-autofocus="dropdown">
            <button type="submit" class="btn btn-icon btn-sm fs-lg btn-secondary rounded-circle position-absolute top-0 end-0 mt-1 me-1" aria-label="Search">
              <i class="ci-arrow-right"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</header>
