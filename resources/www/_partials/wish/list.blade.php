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

  @livewire('ShopWish')


  <!-- Wishlist items (Grid) -->
  <div class="row row-cols-2 row-cols-md-3 g-4" id="wishlistSelection">

    <!-- Item -->
    {{-- @partials("../wish/cell") --}}


    {{-- <!-- Item -->
    <div class="col">
      <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
        <div class="position-relative">
          <div class="position-absolute top-0 end-0 z-1 pt-1 pe-1 mt-2 me-2">
            <div class="form-check fs-lg">
              <input type="checkbox" class="form-check-input select-card-check" checked>
            </div>
          </div>
          <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics.html">
            <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
              <img src="assets/img/shop/electronics/02.png" alt="iPhone 14">
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
            <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics.html">
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
          <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics.html">
            <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
              <img src="assets/img/shop/electronics/03.png" alt="Smart Watch">
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
            <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics.html">
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
          <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics.html">
            <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
              <img src="assets/img/shop/electronics/05.png" alt="iPad Air">
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
            <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics.html">
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
          <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics.html">
            <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
              <img src="assets/img/shop/electronics/06.png" alt="AirPods 2">
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
            <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics.html">
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
    </div> --}}

  </div>
