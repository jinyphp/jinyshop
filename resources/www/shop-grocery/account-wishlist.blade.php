<x-www-layout>
  <!-- Bonuses info modal -->
  <div class="modal fade" id="bonusesModal" tabindex="-1" aria-labelledby="bonusesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="bonusesModalLabel">My bonuses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row align-items-center">
            <div class="col-sm-6 mb-4 mb-sm-0">
              <div class="position-relative bg-warning text-center rounded-4 overflow-hidden">
                <div class="position-relative z-1 py-3 px-4">
                  <svg class="text-white opacity-75 mb-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16" fill="currentColor"><path d="M1.333 9.667H7.5V16h-5c-.64 0-1.167-.527-1.167-1.167V9.667zm13.334 0v5.167c0 .64-.527 1.167-1.167 1.167h-5V9.667h6.167zM0 5.833V7.5c0 .64.527 1.167 1.167 1.167h.167H7.5v-1-3H1.167C.527 4.667 0 5.193 0 5.833zm14.833-1.166H8.5v3 1h6.167.167C15.473 8.667 16 8.14 16 7.5V5.833c0-.64-.527-1.167-1.167-1.167z"/><path d="M8 5.363a.5.5 0 0 1-.495-.573C7.752 3.123 9.054-.03 12.219-.03c1.807.001 2.447.977 2.447 1.813 0 1.486-2.069 3.58-6.667 3.58zM12.219.971c-2.388 0-3.295 2.27-3.595 3.377 1.884-.088 3.072-.565 3.756-.971.949-.563 1.287-1.193 1.287-1.595 0-.599-.747-.811-1.447-.811z"/><path d="M8.001 5.363c-4.598 0-6.667-2.094-6.667-3.58 0-.836.641-1.812 2.448-1.812 3.165 0 4.467 3.153 4.713 4.819a.5.5 0 0 1-.495.573zM3.782.971c-.7 0-1.448.213-1.448.812 0 .851 1.489 2.403 5.042 2.566C7.076 3.241 6.169.971 3.782.971z"/></svg>
                  <div class="h2 text-white pb-1 mb-2">100</div>
                  <p class="fs-sm fw-medium text-white opacity-75 mb-0">1 bonus = 1$</p>
                </div>
                <div class="position-absolute bg-white bg-opacity-10 rounded-circle" style="top: -15px; right: -128px; width: 165px; height: 165px"></div>
                <div class="position-absolute bg-white bg-opacity-10 rounded-circle" style="top: -15px; left: -128px; width: 165px; height: 165px"></div>
              </div>
            </div>
            <div class="col-sm-6">
              <ul class="list-unstyled fs-sm m-0">
                <li class="d-flex align-items-center justify-content-between">
                  Available:
                  <span class="text-dark-emphasis fw-semibold ms-2">100</span>
                </li>
                <li class="d-flex align-items-center justify-content-between">
                  Waiting activation:
                  <span class="text-dark-emphasis fw-semibold ms-2">0</span>
                </li>
                <li class="d-flex align-items-center justify-content-between">
                  Total:
                  <span class="text-dark-emphasis fw-semibold ms-2">100</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Create new wishlist modal -->
  <div class="modal fade" id="wishlistModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="wishlistModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="wishlistModalLabel">Create new wishlist</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="modal-body needs-validation" novalidate>
          <div class="mb-3">
            <label for="wl-name" class="form-label">Wishlist name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="wl-name" required>
            <div class="invalid-feedback">Please enter the wishlist name!</div>
          </div>
          <div class="mb-3">
            <label for="wl-description" class="form-label">Description</label>
            <textarea class="form-control" id="wl-description" rows="4"></textarea>
          </div>
          <div class="mb-4">
            <label class="form-label">Privacy</label>
            <select class="form-select" data-select='{"removeItemButton": false}' aria-label="Privacy settings">
              <option value="private">Private</option>
              <option value="public">Public</option>
              <option value="shared">Shared</option>
            </select>
          </div>
          <div class="d-flex gap-3">
            <button type="reset" class="btn btn-secondary w-100" data-bs-dismiss="modal" data-bs-target="#wishlistModal">Cancel</button>
            <button type="submit" class="btn btn-primary w-100">Create wishlist</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Page content -->
  <main class="content-wrapper">
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
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-orders">
                  <i class="ci-shopping-bag fs-base opacity-75 me-2"></i>
                  Orders
                  <span class="badge bg-primary rounded-pill ms-auto">1</span>
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center pe-none active" href="account-wishlist">
                  <i class="ci-heart fs-base opacity-75 me-2"></i>
                  Wishlist
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-payment">
                  <i class="ci-credit-card fs-base opacity-75 me-2"></i>
                  Payment methods
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-reviews">
                  <i class="ci-star fs-base opacity-75 me-2"></i>
                  My reviews
                </a>
              </nav>
              <h6 class="pt-4 ps-2 ms-1">Manage account</h6>
              <nav class="list-group list-group-borderless">
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-info">
                  <i class="ci-user fs-base opacity-75 me-2"></i>
                  Personal info
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-addresses">
                  <i class="ci-map-pin fs-base opacity-75 me-2"></i>
                  Addresses
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-notifications">
                  <i class="ci-bell fs-base opacity-75 mt-1 me-2"></i>
                  Notifications
                </a>
              </nav>
              <h6 class="pt-4 ps-2 ms-1">Customer service</h6>
              <nav class="list-group list-group-borderless">
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="help-topics-v1">
                  <i class="ci-help-circle fs-base opacity-75 me-2"></i>
                  Help center
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="terms-and-conditions">
                  <i class="ci-info fs-base opacity-75 me-2"></i>
                  Terms and conditions
                </a>
              </nav>
              <nav class="list-group list-group-borderless pt-3">
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-signin">
                  <i class="ci-log-out fs-base opacity-75 me-2"></i>
                  Log out
                </a>
              </nav>
            </div>
          </div>
        </aside>


        <!-- Wishlist content -->
        <div class="col-lg-9">
          <div class="ps-lg-3 ps-xl-0">

            <!-- Page title + Add list button-->
            <div class="d-flex align-items-center justify-content-between pb-3 mb-1 mb-sm-2 mb-md-3">
              <h1 class="h2 me-3 mb-0">Wishlist</h1>
              <div class="nav">
                <a class="nav-link animate-underline px-0 py-1 py-ms-2" href="#wishlistModal" data-bs-toggle="modal">
                  <i class="ci-plus fs-base me-1"></i>
                  <span class="animate-target">Add wishlist</span>
                </a>
              </div>
            </div>

            <!-- Wishlist selector -->
            <div class="border-bottom pb-4 mb-3">
              <div class="row align-items-center justify-content-between">
                <div class="col-sm-7 col-md-8 col-xxl-9 d-flex align-items-center mb-3 mb-sm-0">
                  <h5 class="me-2 mb-0">Interesting offers</h5>
                  <div class="dropdown ms-auto ms-sm-0">
                    <button type="button" class="btn btn-icon btn-ghost btn-secondary border-0" id="wishlist-selector" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false" aria-label="Select wishlist">
                      <i class="ci-more-vertical fs-xl"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                      <div class="d-flex flex-column gap-1 mb-2">
                        <div class="form-check">
                          <input type="radio" class="form-check-input" id="wishlist-1" name="wishlist" checked>
                          <label for="wishlist-1" class="form-check-label text-body">Interesting offers</label>
                        </div>
                        <div class="form-check">
                          <input type="radio" class="form-check-input" id="wishlist-2" name="wishlist">
                          <label for="wishlist-2" class="form-check-label text-body">Top picks collection</label>
                        </div>
                        <div class="form-check">
                          <input type="radio" class="form-check-input" id="wishlist-3" name="wishlist">
                          <label for="wishlist-3" class="form-check-label text-body">Family stuff</label>
                        </div>
                        <div class="form-check">
                          <input type="radio" class="form-check-input" id="wishlist-4" name="wishlist">
                          <label for="wishlist-4" class="form-check-label text-body">My must-haves</label>
                        </div>
                        <div class="form-check">
                          <input type="radio" class="form-check-input" id="wishlist-5" name="wishlist">
                          <label for="wishlist-5" class="form-check-label text-body">For my husband</label>
                        </div>
                      </div>
                      <button type="button" class="btn btn-sm btn-dark w-100" onclick="document.getElementById('wishlist-selector').click()">Select wishlist</button>
                    </div>
                  </div>
                </div>
                <div class="col-sm-5 col-md-4 col-xxl-3">
                  <select class="form-select" data-select='{"removeItemButton": false}' aria-label="Wishlist sorting">
                    <option value="date">By date added</option>
                    <option value="price-ascend">By price ascending</option>
                    <option value="price-descend">By price descending</option>
                    <option value="rating">By rating</option>
                  </select>
                </div>
              </div>
            </div>

            <!-- Master checkbox + Action buttons -->
            <div class="nav align-items-center mb-4">
              <div class="form-checkl nav-link animate-underline fs-lg ps-0 pe-2 py-2 mt-n1 me-4" data-master-checkbox='{"container": "#wishlistSelection", "label": "Select all", "labelChecked": "Unselect all", "showOnCheck": "#action-buttons"}'>
                <input type="checkbox" class="form-check-input" id="wishlist-master" checked>
                <label for="wishlist-master" class="form-check-label animate-target mt-1 ms-2">Unselect all</label>
              </div>
              <div class="d-flex flex-wrap" id="action-buttons">
                <a class="nav-link animate-underline px-0 pe-sm-2 py-2 me-4" href="#!">
                  <i class="ci-shopping-cart fs-base me-2"></i>
                  <span class="animate-target d-none d-md-inline">Add to cart</span>
                </a>
                <a class="nav-link animate-underline px-0 pe-sm-2 py-2 me-4" href="#!">
                  <i class="ci-repeat fs-base me-2"></i>
                  <span class="animate-target d-none d-md-inline">Relocate</span>
                </a>
                <a class="nav-link animate-underline px-0 py-2" href="#!">
                  <i class="ci-trash fs-base me-1"></i>
                  <span class="animate-target d-none d-md-inline">Remove selected</span>
                </a>
              </div>
            </div>


            {{-- <!-- Wishlist items (Grid) -->
            <div class="row row-cols-2 row-cols-md-3 g-4" id="wishlistSelection">

              <!-- Item -->
              <div class="col">
                <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                  <div class="position-relative">
                    <div class="position-absolute top-0 end-0 z-1 pt-1 pe-1 mt-2 me-2">
                      <div class="form-check fs-lg">
                        <input type="checkbox" class="form-check-input select-card-check" checked>
                      </div>
                    </div>
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics">
                      <span class="badge bg-danger position-absolute top-0 start-0 mt-2 ms-2 mt-lg-3 ms-lg-3">-21%</span>
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="/assets/img/shop/electronics/01.png" alt="VR Glasses">
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
                      <span class="text-body-tertiary fs-xs">(123)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics">
                        <span class="animate-target">VRB01 Virtual Reality Glasses</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0">$340.99 <del class="text-body-tertiary fs-sm fw-normal">$430.00</del></div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="col">
                <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                  <div class="position-relative">
                    <div class="position-absolute top-0 end-0 z-1 pt-1 pe-1 mt-2 me-2">
                      <div class="form-check fs-lg">
                        <input type="checkbox" class="form-check-input select-card-check" checked>
                      </div>
                    </div>
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics">
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="/assets/img/shop/electronics/02.png" alt="iPhone 14">
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
                      <span class="text-body-tertiary fs-xs">(142)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics">
                        <span class="animate-target">Apple iPhone 14 128GB White</span>
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
              <div class="col">
                <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                  <div class="position-relative">
                    <div class="position-absolute top-0 end-0 z-1 pt-1 pe-1 mt-2 me-2">
                      <div class="form-check fs-lg">
                        <input type="checkbox" class="form-check-input select-card-check">
                      </div>
                    </div>
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics">
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="/assets/img/shop/electronics/03.png" alt="Smart Watch">
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
                      <span class="text-body-tertiary fs-xs">(67)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics">
                        <span class="animate-target">Smart Watch Series 7, White</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0">$429.00</div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="col">
                <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                  <div class="posittion-relative">
                    <div class="position-absolute top-0 end-0 z-1 pt-1 pe-1 mt-2 me-2">
                      <div class="form-check fs-lg">
                        <input type="checkbox" class="form-check-input select-card-check">
                      </div>
                    </div>
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics">
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="/assets/img/shop/electronics/05.png" alt="iPad Air">
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
                      <span class="text-body-tertiary fs-xs">(12)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics">
                        <span class="animate-target">Tablet Apple iPad Air M1</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0">$540.00</div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="col">
                <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                  <div class="position-relative">
                    <div class="position-absolute top-0 end-0 z-1 pt-1 pe-1 mt-2 me-2">
                      <div class="form-check fs-lg">
                        <input type="checkbox" class="form-check-input select-card-check">
                      </div>
                    </div>
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics">
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
                      <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics">
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
            </div> --}}

            <!-- Wishlist items (Grid) -->
            <div>
              @livewire('ShopWish')
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Sidebar navigation offcanvas toggle that is visible on screens < 992px wide (lg breakpoint) -->
  <button type="button" class="fixed-bottom z-sticky w-100 btn btn-lg btn-dark border-0 border-top border-light border-opacity-10 rounded-0 pb-4 d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#accountSidebar" aria-controls="accountSidebar" data-bs-theme="light">
    <i class="ci-sidebar fs-base me-2"></i>
    Account menu
  </button>
</x-www-layout>
