<!-- Main navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
<div class="collapse navbar-stuck-hide" id="stuckNav">
  <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
    <div class="offcanvas-header py-3">
      <h5 class="offcanvas-title" id="navbarNavLabel">Browse Cartzilla</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <!-- Country and City slects visible on screens < 768px wide (md breakpoint) -->
    <div class="offcanvas-header gap-3 d-md-none pt-0 pb-3">
      <div class="dropdown nav">
        <a class="nav-link dropdown-toggle py-1 px-0" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Country select: USA">
          <div class="ratio ratio-1x1" style="width: 20px">
            <img src="assets/img/flags/en-us.png" alt="USA">
          </div>
        </a>
        <ul class="dropdown-menu fs-sm" style="--cz-dropdown-spacer: .5rem">
          <li>
            <a class="dropdown-item" href="#!">
              <img src="assets/img/flags/en-uk.png" class="flex-shrink-0 me-2" width="20" alt="United Kingdom">
              United Kingdom
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="#!">
              <img src="assets/img/flags/fr.png" class="flex-shrink-0 me-2" width="20" alt="France">
              France
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="#!">
              <img src="assets/img/flags/de.png" class="flex-shrink-0 me-2" width="20" alt="Deutschland">
              Deutschland
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="#!">
              <img src="assets/img/flags/it.png" class="flex-shrink-0 me-2" width="20" alt="Italia">
              Italia
            </a>
          </li>
        </ul>
      </div>
      <div class="dropdown nav">
        <a class="nav-link animate-underline dropdown-toggle fw-normal py-1 px-0" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="animate-target">Washington</span>
        </a>
        <ul class="dropdown-menu fs-sm" style="--cz-dropdown-spacer: .5rem">
          <li><a class="dropdown-item" href="#!">Chicago</a></li>
          <li><a class="dropdown-item" href="#!">Los Angeles</a></li>
          <li><a class="dropdown-item" href="#!">New York</a></li>
          <li><a class="dropdown-item" href="#!">Philadelphia</a></li>
        </ul>
      </div>
    </div>
    <div class="offcanvas-body pt-1 pb-3 py-lg-0">
      <div class="container pb-lg-2 px-0 px-lg-3">

        <div class="position-relative d-lg-flex align-items-center justify-content-between">

          <!-- Categories mega menu -->
          <div class="navbar-nav">
            <div class="dropdown position-static pb-lg-2">
              <button type="button" class="nav-link animate-underline fw-semibold text-uppercase ps-0" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">
                <i class="ci-menu fs-lg me-2"></i>
                <span class="animate-target">Categories</span>
              </button>
              <div class="dropdown-menu w-100 p-4 px-xl-5" style="--cz-dropdown-spacer: .75rem">

                <!-- Nav tabs -->
                <ul class="nav nav-underline justify-content-lg-center mt-n2 mt-lg-0 mb-4" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link text-uppercase active" id="womens-tab" data-bs-toggle="tab" data-bs-target="#womens-tab-pane" role="tab" aria-controls="womens-tab-pane" aria-selected="true">
                      Women's
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link text-uppercase" id="mens-tab" data-bs-toggle="tab" data-bs-target="#mens-tab-pane" role="tab" aria-controls="mens-tab-pane" aria-selected="false">
                      Men's
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link text-uppercase" id="kids-tab" data-bs-toggle="tab" data-bs-target="#kids-tab-pane" role="tab" aria-controls="kids-tab-pane" aria-selected="false">
                      Kids'
                    </button>
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content pb-xl-4">

                  <!-- Women's tab -->
                  <div class="tab-pane fade show active" id="womens-tab-pane" role="tabpanel" aria-labelledby="womens-tab">
                    <div class="row g-4">
                      <div class="col-lg-2">
                        <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="/shop-catalog-fashion">
                          <span class="animate-target">Clothing</span>
                        </a>
                        <ul class="nav flex-column gap-2 mt-0">
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Shirts &amp; Tops</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Coats &amp; Outerwear</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Underwear</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Sweatshirts</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Dresses</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Swimwear</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">View all</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-2">
                        <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="/shop-catalog-fashion">
                          <span class="animate-target">Shoes</span>
                        </a>
                        <ul class="nav flex-column gap-2 mt-0">
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Boots</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Sandals</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Heels</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Loafers</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Slippers</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Oxfords</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">View all</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-2">
                        <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="/shop-catalog-fashion">
                          <span class="animate-target">Accessories</span>
                        </a>
                        <ul class="nav flex-column gap-2 mt-0">
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Handbags</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Eyewear</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Hats</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Watches</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Jewelry</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Belts</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">View all</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-2">
                        <div class="h6 mb-2">Specialty Sizes</div>
                        <ul class="nav flex-column gap-2 mt-0">
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Plus Size</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Petite</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Wide Shoes</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Narrow Shoes</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-4 d-none d-lg-block" data-bs-theme="light">
                        <div class="position-relative d-flex flex-column h-100 rounded-4 overflow-hidden p-4">
                          <div class="position-relative d-flex flex-column justify-content-between h-100 z-2 pt-xl-2 ps-xl-2">
                            <div class="h4 lh-base">Women's<br>Heels<br>Collection</div>
                            <div>
                              <a class="btn btn-sm btn-dark stretched-link" href="/shop-catalog-fashion" data-bs-theme="light">Shop now</a>
                            </div>
                          </div>
                          <img src="assets/img/mega-menu/fashion/01.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rtl-flip" alt="Image">
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Men's tab -->
                  <div class="tab-pane fade" id="mens-tab-pane" role="tabpanel" aria-labelledby="mens-tab">
                    <div class="row g-4">
                      <div class="col-lg-2">
                        <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="/shop-catalog-fashion">
                          <span class="animate-target">Clothing</span>
                        </a>
                        <ul class="nav flex-column gap-2 mt-0">
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">T-Shirts</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Jeans</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Coats &amp; Outerwear</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Sweatshirts</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Underwear</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Pants</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">View all</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-2">
                        <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="/shop-catalog-fashion">
                          <span class="animate-target">Shoes</span>
                        </a>
                        <ul class="nav flex-column gap-2 mt-0">
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Sneakers</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Oxfords</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Loafers</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Sandals</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Boots</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Slippers</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">View all</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-2">
                        <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="/shop-catalog-fashion">
                          <span class="animate-target">Accessories</span>
                        </a>
                        <ul class="nav flex-column gap-2 mt-0">
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Backpacks</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Sunglasses</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Bags</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Watches</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Hats</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Belts</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">View all</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-2">
                        <div class="h6 mb-2">Specialty Shops</div>
                        <ul class="nav flex-column gap-2 mt-0">
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Active Wear</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Sports Clothing</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Athletic Shoes</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-4 d-none d-lg-block" data-bs-theme="dark">
                        <div class="position-relative d-flex flex-column h-100 rounded-4 overflow-hidden p-4">
                          <div class="position-relative d-flex flex-column justify-content-between h-100 z-2 pt-xl-2 ps-xl-2">
                            <div class="h4 lh-base">Men's<br>Sunglasses<br>Offers</div>
                            <div>
                              <a class="btn btn-sm btn-dark stretched-link" href="/shop-catalog-fashion" data-bs-theme="dark">Shop now</a>
                            </div>
                          </div>
                          <img src="assets/img/mega-menu/fashion/02.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rtl-flip" alt="Image">
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Kids' tab -->
                  <div class="tab-pane fade" id="kids-tab-pane" role="tabpanel" aria-labelledby="kids-tab">
                    <div class="row g-4">
                      <div class="col-lg-2">
                        <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="/shop-catalog-fashion">
                          <span class="animate-target">Boys</span>
                        </a>
                        <ul class="nav flex-column gap-2 mt-0">
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Pants</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Sneakers</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Coats &amp; Outerwear</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Sweatshirts</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Boots</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Shorts</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">View all</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-2">
                        <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="/shop-catalog-fashion">
                          <span class="animate-target">Girls</span>
                        </a>
                        <ul class="nav flex-column gap-2 mt-0">
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Shirts &amp; Tops</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Dresses</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Sneakers</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Hoodies</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Sandals</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Coats &amp; Outerwear</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">View all</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-2">
                        <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="/shop-catalog-fashion">
                          <span class="animate-target">Accessories</span>
                        </a>
                        <ul class="nav flex-column gap-2 mt-0">
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Backpacks</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Gloves</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Shoe Laces</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Scarves</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Hats</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Belts</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">View all</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-2">
                        <div class="h6 mb-2">Shop by Age</div>
                        <ul class="nav flex-column gap-2 mt-0">
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Infant</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Toddler</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Little Kid</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Big Kid</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-4 d-none d-lg-block" data-bs-theme="light">
                        <div class="position-relative d-flex flex-column h-100 rounded-4 overflow-hidden p-4">
                          <div class="position-relative d-flex flex-column justify-content-between h-100 z-2 pt-xl-2 ps-xl-2">
                            <div class="h4 lh-base">Kids'<br>Spring<br>Collection</div>
                            <div>
                              <a class="btn btn-sm btn-dark stretched-link" href="/shop-catalog-fashion" data-bs-theme="light">Shop now</a>
                            </div>
                          </div>
                          <img src="assets/img/mega-menu/fashion/03.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rtl-flip" alt="Image">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Navbar nav -->
          <ul class="navbar-nav position-relative me-xl-n5">
            <li class="nav-item dropdown pb-lg-2 me-lg-n1 me-xl-0">
              <a class="nav-link dropdown-toggle active" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Home</a>
              <ul class="dropdown-menu" style="--cz-dropdown-spacer: .75rem">
                <li class="hover-effect-opacity px-2 mx-n2">
                  <a class="dropdown-item d-block mb-0" href="home-electronics">
                    <span class="fw-medium">Electronics Store</span>
                    <span class="d-block fs-xs text-body-secondary">Megamenu + Hero slider</span>
                    <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                      <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/demo-preview/electronics-light.jpg" alt="Electronics Store">
                      <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/demo-preview/electronics-dark.jpg" alt="Electronics Store">
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
                      <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/demo-preview/fashion-1-light.jpg" alt="Fashion Store v.1">
                      <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/demo-preview/fashion-1-dark.jpg" alt="Fashion Store v.1">
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
                      <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/demo-preview/fashion-2-light.jpg" alt="Fashion Store v.2">
                      <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/demo-preview/fashion-2-dark.jpg" alt="Fashion Store v.2">
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
                      <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/demo-preview/furniture-light.jpg" alt="Furniture Store">
                      <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/demo-preview/furniture-dark.jpg" alt="Furniture Store">
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
                      <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/demo-preview/grocery-light.jpg" alt="Grocery Store">
                      <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/demo-preview/grocery-dark.jpg" alt="Grocery Store">
                      <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                      <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown position-static pb-lg-2 me-lg-n1 me-xl-0">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Shop</a>
              <div class="dropdown-menu p-4" style="--cz-dropdown-spacer: .75rem">
                <div class="d-flex flex-column flex-lg-row gap-4">
                  <div style="min-width: 190px">
                    <div class="h6 mb-2">Electronics Store</div>
                    <ul class="nav flex-column gap-2 mt-0">
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-categories-electronics">Categories Page</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-electronics">Catalog with Side Filters</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-product-general-electronics">Product General Info</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-product-details-electronics">Product Details</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-product-reviews-electronics">Product Reviews</a>
                      </li>
                    </ul>
                    <div class="h6 pt-4 mb-2">Fashion Store</div>
                    <ul class="nav flex-column gap-2 mt-0">
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Catalog with Side Filters</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-product-fashion">Product Page</a>
                      </li>
                    </ul>
                    <div class="h6 pt-4 mb-2">Furniture Store</div>
                    <ul class="nav flex-column gap-2 mt-0">
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-furniture">Catalog with Top Filters</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-product-furniture">Product Page</a>
                      </li>
                    </ul>
                  </div>
                  <div style="min-width: 190px">
                    <div class="h6 mb-2">Grocery Store</div>
                    <ul class="nav flex-column gap-2 mt-0">
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-grocery">Catalog with Side Filters</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-product-grocery">Product Page</a>
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
            <li class="nav-item dropdown pb-lg-2 me-lg-n1 me-xl-0">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">Account</a>
              <ul class="dropdown-menu" style="--cz-dropdown-spacer: .75rem">
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
            <li class="nav-item dropdown pb-lg-2 me-lg-n1 me-xl-0">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">Pages</a>
              <ul class="dropdown-menu" style="--cz-dropdown-spacer: .75rem">
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
            <li class="nav-item pb-lg-2 me-lg-n2 me-xl-0">
              <a class="nav-link" href="docs/installation">Docs</a>
            </li>
            <li class="nav-item pb-lg-2 me-lg-n2 me-xl-0">
              <a class="nav-link" href="docs/typography">Components</a>
            </li>
          </ul>

          <!-- Search toggle visible on screens > 991px wide (lg breakpoint) -->
          <button type="button" class="btn btn-outline-secondary justify-content-start w-100 px-3 mb-lg-2 ms-3 d-none d-lg-inline-flex" style="max-width: 240px" data-bs-toggle="offcanvas" data-bs-target="#searchBox" aria-controls="searchBox">
            <i class="ci-search fs-base ms-n1 me-2"></i>
            <span class="text-body-tertiary fw-normal">Search</span>
          </button>
        </div>
      </div>
    </div>

    <!-- Account and Wishlist buttons visible on screens < 768px wide (md breakpoint) -->
    <div class="offcanvas-header border-top px-0 py-3 mt-3 d-md-none">
      <div class="nav nav-justified w-100">
        <a class="nav-link border-end" href="account-signin">
          <i class="ci-user fs-lg opacity-60 me-2"></i>
          Account
        </a>
        <a class="nav-link" href="#!">
          <i class="ci-heart fs-lg opacity-60 me-2"></i>
          Wishlist
        </a>
      </div>
    </div>
  </nav>
</div>
