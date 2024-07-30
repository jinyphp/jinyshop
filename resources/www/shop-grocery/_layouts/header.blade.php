<!-- Shopping cart offcanvas -->
{{-- <div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="shoppingCart" tabindex="-1" aria-labelledby="shoppingCartLabel" style="width: 500px">

  <!-- Header -->
  <div class="offcanvas-header flex-column align-items-start py-3 pt-lg-4">
    <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-lg-4">
      <h4 class="offcanvas-title" id="shoppingCartLabel">Shopping cart</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="alert alert-success text-dark-emphasis fs-sm border-0 rounded-4 mb-0" role="alert">
      Congratulations 🎉 You have added more than <span class="fw-semibold">$50</span> to your cart. <span class="fw-semibold">Delivery is free</span> for you!
    </div>
  </div>

  <!-- Items -->
  <div class="offcanvas-body d-flex flex-column gap-4 pt-2">

    <!-- Item -->
    <div class="d-flex align-items-center">
      <a class="position-relative flex-shrink-0" href="shop-product-grocery">
        <span class="badge text-bg-danger position-absolute top-0 start-0 z-2 mt-0 ms-0">-$2.79</span>
        <img src="/assets/img/shop/grocery/thumbs/01.png" width="110" alt="Thumbnail">
      </a>
      <div class="w-100 ps-3">
        <h5 class="fs-sm fw-medium lh-base mb-2">
          <a class="hover-effect-underline" href="shop-product-grocery">Fresh orange Klementina, Spain</a>
        </h5>
        <div class="h6 pb-1 mb-2">$3.12</div>
        <div class="d-flex align-items-center justify-content-between">
          <div class="count-input rounded-pill">
            <button type="button" class="btn btn-icon btn-sm" data-decrement aria-label="Decrement quantity">
              <i class="ci-minus"></i>
            </button>
            <input type="number" class="form-control form-control-sm" value="3" readonly>
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
      <a class="flex-shrink-0" href="shop-product-grocery">
        <img src="/assets/img/shop/grocery/thumbs/02.png" width="110" alt="Thumbnail">
      </a>
      <div class="w-100 ps-3">
        <h5 class="fs-sm fw-medium lh-base mb-2">
          <a class="hover-effect-underline" href="shop-product-grocery">Pesto sauce Barilla with basil, Italy</a>
        </h5>
        <div class="h6 pb-1 mb-2">$3.95</div>
        <div class="d-flex align-items-center justify-content-between">
          <div class="count-input rounded-pill">
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
      <a class="flex-shrink-0" href="shop-product-grocery">
        <img src="/assets/img/shop/grocery/thumbs/03.png" width="110" alt="Thumbnail">
      </a>
      <div class="w-100 ps-3">
        <h5 class="fs-sm fw-medium lh-base mb-2">
          <a class="hover-effect-underline" href="shop-product-grocery">Steak salmon fillet with rosmary</a>
        </h5>
        <div class="h6 pb-1 mb-2">$27.00</div>
        <div class="d-flex align-items-center justify-content-between">
          <div class="count-input rounded-pill">
            <button type="button" class="btn btn-icon btn-sm" data-decrement aria-label="Decrement quantity">
              <i class="ci-minus"></i>
            </button>
            <input type="number" class="form-control form-control-sm" value="2" readonly>
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
      <a class="flex-shrink-0" href="shop-product-grocery">
        <img src="/assets/img/shop/grocery/thumbs/04.png" width="110" alt="Thumbnail">
      </a>
      <div class="w-100 ps-3">
        <h5 class="fs-sm fw-medium lh-base mb-2">
          <a class="hover-effect-underline" href="shop-product-grocery">Sprite soda lemon lime, can</a>
        </h5>
        <div class="h6 pb-1 mb-2">$0.80</div>
        <div class="d-flex align-items-center justify-content-between">
          <div class="count-input rounded-pill">
            <button type="button" class="btn btn-icon btn-sm" data-decrement aria-label="Decrement quantity">
              <i class="ci-minus"></i>
            </button>
            <input type="number" class="form-control form-control-sm" value="2" readonly>
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
      <span class="h6 mb-0">$68.91</span>
    </div>
    <div class="d-flex w-100 gap-3">
      <a class="btn btn-lg btn-secondary w-100 rounded-pill" href="checkout-v2-cart">View cart</a>
      <a class="btn btn-lg btn-primary w-100 rounded-pill" href="checkout-v2-delivery">Checkout</a>
    </div>
  </div>
</div> --}}
@livewire('CartOffcanvas')

<!-- Delivey options offcanvas -->
<div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="deliveryOptions" tabindex="-1" aria-labelledby="deliveryOptionsLabel" style="width: 500px">

  <!-- Header with nav tabs -->
  <div class="offcanvas-header flex-column align-items-start py-3 pt-lg-4">
    <div class="d-flex align-items-center justify-content-between w-100 pb-xl-1 mb-4">
      <h4 class="offcanvas-title" id="deliveryOptionsLabel">Delivery options</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <ul class="nav nav-pills nav-justified w-100" role="tablist">
      <li class="nav-item" role="presentation">
        <button type="button" class="nav-link active" id="delivery-tab" data-bs-toggle="tab" data-bs-target="#delivery-tab-pane" role="tab" aria-controls="delivery-tab-pane" aria-selected="true">
          <i class="ci-shopping-bag fs-base ms-n1 me-2"></i>
          Delivery
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button type="button" class="nav-link" id="pickup-tab" data-bs-toggle="tab" data-bs-target="#pickup-tab-pane" role="tab" aria-controls="pickup-tab-pane" aria-selected="false">
          <i class="ci-box fs-base ms-n1 me-2"></i>
          Pickup
        </button>
      </li>
    </ul>
  </div>

  <div class="offcanvas-body tab-content py-2 py-sm-3">

    <!-- Delivery tab -->
    <div class="tab-pane fade show active" id="delivery-tab-pane" role="tabpanel" aria-labelledby="delivery-tab">

      <!-- Address options collapse -->
      <div class="collapse delivery-address show" id="deliveryAddressOptions">
        <div class="mt-n3">
          <div class="form-check border-bottom py-4 m-0">
            <input type="radio" class="form-check-input" id="address-1" name="delivery-address" checked>
            <label for="address-1" class="form-check-label text-dark-emphasis fw-semibold">567 Cherry Lane Apt B12 Sacramento, 95829</label>
          </div>
          <div class="form-check border-bottom py-4 m-0">
            <input type="radio" class="form-check-input" id="address-2" name="delivery-address">
            <div class="d-flex w-100">
              <label for="address-2" class="form-check-label text-dark-emphasis me-3">1901 Thornridge Cir. Shiloh, Hawaii, 81063</label>
              <button type="button" class="btn-close fs-sm ms-auto" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove"></button>
            </div>
          </div>
          <div class="form-check border-bottom py-4 m-0">
            <input type="radio" class="form-check-input" id="address-3" name="delivery-address">
            <div class="d-flex w-100">
              <label for="address-3" class="form-check-label text-dark-emphasis me-3">3517 W. Gray St. Utica, Pennsylvania, 57867</label>
              <button type="button" class="btn-close fs-sm ms-auto" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove"></button>
            </div>
          </div>
        </div>
      </div>

      <!-- Add new address collapse -->
      <div class="collapse delivery-address" id="deliveryAddressAdd">
        <div class="nav mb-4">
          <a class="nav-link animate-underline p-0" href=".delivery-address" data-bs-toggle="collapse" aria-expanded="true" aria-controls="deliveryAddressOptions deliveryAddressAdd">
            <i class="ci-chevron-left fs-lg ms-n1 me-1"></i>
            <span class="animate-target">Back to my addresses</span>
          </a>
        </div>
        <div class="d-flex align-items-center justify-content-between mb-3 mb-lg-4">
          <h5 class="h6 mb-0 me-3">Add an address to start ordering</h5>
          <a class="btn btn-sm btn-outline-primary rounded-pill" href="#!">
            <i class="ci-map-pin fs-base ms-n1 me-1"></i>
            Find on map
          </a>
        </div>
        <div class="mb-3 mb-lg-4">
          <label class="form-label">State *</label>
          <select class="form-select form-select-lg rounded-pill" data-select='{
            "classNames": {
              "containerInner": "form-select form-select-lg rounded-pill"
            }
          }' aria-label="Large pill select">
            <option value="">Select state</option>
            <option value="Arizona">Arizona</option>
            <option value="California">California</option>
            <option value="Montana">Montana</option>
            <option value="Nevada">Nevada</option>
            <option value="New Mexico">New Mexico</option>
            <option value="Texas">Texas</option>
          </select>
        </div>
        <div class="mb-3 mb-lg-4">
          <label for="my-postcode" class="form-label">Postcode *</label>
          <input type="text" class="form-control form-control-lg rounded-pill" id="my-postcode">
        </div>
        <div class="mb-3 mb-lg-4">
          <label class="form-label">City *</label>
          <select class="form-select form-select-lg rounded-pill" data-select='{
            "classNames": {
              "containerInner": "form-select form-select-lg rounded-pill"
            }
          }' aria-label="Large pill select">
            <option value="">Select city</option>
            <option value="Austin">Austin</option>
            <option value="Helena">Helena</option>
            <option value="Sacramento">Sacramento</option>
            <option value="Santa Fe">Santa Fe</option>
            <option value="Las Vegas">Las Vegas</option>
            <option value="Phoenix">Phoenix</option>
          </select>
        </div>
        <label for="my-address" class="form-label">Street address *</label>
        <input type="text" class="form-control form-control-lg rounded-pill" id="my-address">
      </div>

      <!-- Add address collapse toggle -->
      <div class="nav">
        <a class="nav-link hiding-collapse-toggle animate-underline collapsed px-0 mt-4" href=".delivery-address" data-bs-toggle="collapse" aria-expanded="false" aria-controls="deliveryAddressOptions deliveryAddressAdd">
          <span class="animate-target">Add delivery address</span>
          <i class="ci-plus fs-base ms-1"></i>
        </a>
      </div>
    </div>

    <!-- Pickup tab -->
    <div class="tab-pane fade" id="pickup-tab-pane" role="tabpanel" aria-labelledby="pickup-tab">

      <!-- Pickup store options collapse -->
      <div class="collapse pickup-options show" id="pickupStoreOptions">
        <div class="mt-n3">
          <div class="form-check border-bottom py-4 m-0">
            <input type="radio" class="form-check-input" id="store-1" name="pickup-store" checked>
            <div>
              <div class="d-flex w-100 pb-2 mb-1">
                <label for="store-1" class="form-check-label text-dark-emphasis fw-semibold me-3">Sacramento Supercenter</label>
                <button type="button" class="btn-close fs-sm ms-auto" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove"></button>
              </div>
              <div class="fs-xs mb-2">8270 Delta Shores Cir S, Sacramento, CA 95832</div>
              <div class="fs-xs">Open: <span class="text-dark-emphasis fw-medium">07:00 - 22:00</span></div>
            </div>
          </div>
          <div class="form-check border-bottom py-4 m-0">
            <input type="radio" class="form-check-input" id="store-2" name="pickup-store">
            <div>
              <div class="d-flex w-100 pb-2 mb-1">
                <label for="store-2" class="form-check-label text-dark-emphasis fw-semibold me-3">West Sacramento Supercenter</label>
                <button type="button" class="btn-close fs-sm ms-auto" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove"></button>
              </div>
              <div class="fs-xs mb-2">755 Riverpoint Ct, West Sacramento, CA 95605</div>
              <div class="fs-xs">Open: <span class="text-dark-emphasis fw-medium">07:00 - 21:00</span></div>
            </div>
          </div>
          <div class="form-check border-bottom py-4 m-0">
            <input type="radio" class="form-check-input" id="store-3" name="pickup-store">
            <div>
              <div class="d-flex w-100 pb-2 mb-1">
                <label for="store-3" class="form-check-label text-dark-emphasis fw-semibold me-3">Rancho Cordova Supercenter</label>
                <button type="button" class="btn-close fs-sm ms-auto" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove"></button>
              </div>
              <div class="fs-xs mb-2">10655 Folsom Blvd, Rancho Cordova, CA 95670</div>
              <div class="fs-xs">Open: <span class="text-dark-emphasis fw-medium">08:00 - 23:00</span></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Add new pickup store collapse -->
      <div class="collapse pickup-options" id="pickupStoreAdd">
        <div class="nav mb-4">
          <a class="nav-link animate-underline p-0" href=".pickup-options" data-bs-toggle="collapse" aria-expanded="true" aria-controls="pickupStoreOptions pickupStoreAdd">
            <i class="ci-chevron-left fs-lg ms-n1 me-1"></i>
            <span class="animate-target">Back to my stores</span>
          </a>
        </div>
        <div class="d-flex align-items-center justify-content-between mb-3 mb-lg-4">
          <h5 class="h6 mb-0 me-3">Select a suitable store</h5>
          <a class="btn btn-sm btn-outline-primary rounded-pill" href="#!">
            <i class="ci-map-pin fs-base ms-n1 me-1"></i>
            Find on map
          </a>
        </div>
        <div class="mb-3 mb-lg-4">
          <label class="form-label">State *</label>
          <select class="form-select form-select-lg rounded-pill" data-select='{
            "classNames": {
              "containerInner": "form-select form-select-lg rounded-pill"
            }
          }' aria-label="Large pill select">
            <option value="">Select state</option>
            <option value="Arizona">Arizona</option>
            <option value="California" selected>California</option>
            <option value="Montana">Montana</option>
            <option value="Nevada">Nevada</option>
            <option value="New Mexico">New Mexico</option>
            <option value="Texas">Texas</option>
          </select>
        </div>
        <div class="mb-4">
          <label class="form-label">City *</label>
          <select class="form-select form-select-lg rounded-pill" data-select='{
            "classNames": {
              "containerInner": "form-select form-select-lg rounded-pill"
            }
          }' aria-label="Large pill select">
            <option value="">Select city</option>
            <option value="Austin">Austin</option>
            <option value="Helena">Helena</option>
            <option value="Sacramento" selected>Sacramento</option>
            <option value="Santa Fe">Santa Fe</option>
            <option value="Las Vegas">Las Vegas</option>
            <option value="Phoenix">Phoenix</option>
          </select>
        </div>
        <div class="fs-xs fw-medium text-uppercase text-body-secondary">Found stores:</div>
        <div class="form-check border-bottom py-4 m-0">
          <input type="radio" class="form-check-input" id="store-4" name="found-store">
          <div>
            <label for="store-4" class="form-check-label text-dark-emphasis fw-semibold pb-2 mb-1">Sacramento Supercenter</label>
            <div class="fs-xs mb-2">8270 Delta Shores Cir S, Sacramento, CA 95832</div>
            <div class="fs-xs">Open: <span class="text-dark-emphasis fw-medium">07:00 - 22:00</span></div>
          </div>
        </div>
        <div class="form-check border-bottom py-4 m-0">
          <input type="radio" class="form-check-input" id="store-5" name="found-store">
          <div>
            <label for="store-5" class="form-check-label text-dark-emphasis fw-semibold pb-2 mb-1">West Sacramento Supercenter</label>
            <div class="fs-xs mb-2">755 Riverpoint Ct, West Sacramento, CA 95605</div>
            <div class="fs-xs">Open: <span class="text-dark-emphasis fw-medium">07:00 - 21:00</span></div>
          </div>
        </div>
        <div class="form-check border-bottom py-4 m-0">
          <input type="radio" class="form-check-input" id="store-6" name="found-store">
          <div>
            <label for="store-6" class="form-check-label text-dark-emphasis fw-semibold pb-2 mb-1">Rancho Cordova Supercenter</label>
            <div class="fs-xs mb-2">10655 Folsom Blvd, Rancho Cordova, CA 95670</div>
            <div class="fs-xs">Open: <span class="text-dark-emphasis fw-medium">08:00 - 23:00</span></div>
          </div>
        </div>
      </div>

      <!-- Add address collapse toggle -->
      <div class="nav">
        <a class="nav-link hiding-collapse-toggle animate-underline collapsed px-0 mt-4" href=".pickup-options" data-bs-toggle="collapse" aria-expanded="false" aria-controls="pickupStoreOptions pickupStoreAdd">
          <span class="animate-target">Add store address</span>
          <i class="ci-plus fs-base ms-1"></i>
        </a>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div class="offcanvas-header">
    <button type="button" class="btn btn-lg btn-primary w-100 rounded-pill">Confirm address</button>
  </div>
</div>

<!-- Site menu offcanvas -->
<nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
  <div class="offcanvas-header py-3">
    <h5 class="offcanvas-title" id="navbarNavLabel">Browse Cartzilla</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body pt-0 pb-3">

    <!-- Navbar nav -->
    <div class="accordion" id="navigation">

      <!-- Categories collapse visible on screens < 992px wide (lg breakpoint) -->
      <div class="accordion-item border-0 d-lg-none">
        <div class="accordion-header" id="headingCategories">
          <button type="button" class="accordion-button animate-underline fw-medium collapsed py-2" data-bs-toggle="collapse" data-bs-target="#categoriesMenu" aria-expanded="false" aria-controls="categoriesMenu">
            <i class="ci-grid fs-lg me-2"></i>
            <span class="d-block animate-target py-1">Categories</span>
          </button>
        </div>
        <div class="accordion-collapse collapse" id="categoriesMenu" aria-labelledby="headingCategories" data-bs-parent="#navigation">
          <div class="accordion-body pb-3">
            <div class="dropdown-menu show position-static d-flex flex-column gap-4 shadow-none p-4">
              <div>
                <div class="h6">Bakery &amp; bread</div>
                <ul class="nav flex-column gap-2 mt-n2">
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Shop all</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Bread</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Pastries</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Bakery cookies</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Cupcakes</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Buns &amp; rolls</a>
                  </li>
                </ul>
                <div class="h6 pt-4">Meat products</div>
                <ul class="nav flex-column gap-2 mt-n2">
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Shop all</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Fresh meat</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Processed meat</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Seafood</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Poultry products</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Prepared meat</a>
                  </li>
                </ul>
              </div>
              <div>
                <div class="h6">Vegetables</div>
                <ul class="nav flex-column gap-2 mt-n2">
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Shop all</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Leafy greens</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Root vegetables</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Allium vegetables</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Peppers and tomatoes</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Cruciferous</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Seasonal squashes</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Beans, peas &amp; lentils</a>
                  </li>
                </ul>
                <div class="h6 pt-4">Sauces and ketchup</div>
                <ul class="nav flex-column gap-2 mt-n2">
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Shop all</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Tomato-based sauces</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Salad dressing</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Hot sauces</a>
                  </li>
                </ul>
              </div>
              <div>
                <div class="h6">Fresh fruits</div>
                <ul class="nav flex-column gap-2 mt-n2">
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Shop all</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Citrus fruits</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Berries</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Tropical fruits</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Stone fruits</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Exotic fruits</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Melons</a>
                  </li>
                </ul>
                <div class="h6 pt-4">Italian dinner</div>
                <ul class="nav flex-column gap-2 mt-n2">
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Shop all</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Pasta &amp; sauces</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Italian cheese</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Italian meats</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Desserts &amp; beverages</a>
                  </li>
                </ul>
              </div>
              <div>
                <div class="h6">Beverages</div>
                <ul class="nav flex-column gap-2 mt-n2">
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Shop all</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Soft drinks</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Juices</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Sports &amp; energy drinks</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Tea and coffee</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Alcoholic beverages</a>
                  </li>
                </ul>
                <div class="h6 pt-4">Dairy &amp; eggs</div>
                <ul class="nav flex-column gap-2 mt-n2">
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Shop all</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Chees</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Milk &amp; yogurt</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Sour cream</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Eggs</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Butter &amp; margarine</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Rest of the menu -->
      <div class="accordion-item border-0">
        <div class="accordion-header" id="headingHome">
          <button type="button" class="accordion-button animate-underline fw-medium collapsed py-2" data-bs-toggle="collapse" data-bs-target="#home" aria-expanded="false" aria-controls="home">
            <span class="d-block animate-target py-1">Home</span>
          </button>
        </div>
        <div class="accordion-collapse collapse" id="home" aria-labelledby="headingHome" data-bs-parent="#navigation">
          <div class="accordion-body pb-3">
            <ul class="dropdown-menu show position-static shadow-none">
              <li class="hover-effect-opacity px-2 mx-n2">
                <a class="dropdown-item d-block mb-0" href="home-electronics">
                  <span class="fw-medium">Electronics Store</span>
                  <span class="d-block fs-xs text-body-secondary">Megamenu + Hero slider</span>
                </a>
              </li>
              <li class="hover-effect-opacity px-2 mx-n2">
                <a class="dropdown-item d-block mb-0" href="home-fashion-v1">
                  <span class="fw-medium">Fashion Store v.1</span>
                  <span class="d-block fs-xs text-body-secondary">Hero promo slider</span>
                </a>
              </li>
              <li class="hover-effect-opacity px-2 mx-n2">
                <a class="dropdown-item d-block mb-0" href="home-fashion-v2">
                  <span class="fw-medium">Fashion Store v.2</span>
                  <span class="d-block fs-xs text-body-secondary">Hero banner with hotspots</span>
                </a>
              </li>
              <li class="hover-effect-opacity px-2 mx-n2">
                <a class="dropdown-item d-block mb-0" href="home-furniture">
                  <span class="fw-medium">Furniture Store</span>
                  <span class="d-block fs-xs text-body-secondary">Fancy product carousel</span>
                </a>
              </li>
              <li class="hover-effect-opacity px-2 mx-n2">
                <a class="dropdown-item d-block mb-0" href="home-grocery">
                  <span class="fw-medium">Grocery Store</span>
                  <span class="d-block fs-xs text-body-secondary">Hero slider + Category cards</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="accordion-item border-0">
        <div class="accordion-header" id="headingShop">
          <button type="button" class="accordion-button animate-underline fw-medium collapsed py-2" data-bs-toggle="collapse" data-bs-target="#shop" aria-expanded="false" aria-controls="shop">
            <span class="d-block animate-target py-1">Shop</span>
          </button>
        </div>
        <div class="accordion-collapse collapse" id="shop" aria-labelledby="headingShop" data-bs-parent="#navigation">
          <div class="accordion-body pb-3">
            <div class="dropdown-menu show position-static shadow-none p-4">
              <div class="d-flex flex-column gap-4">
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
          </div>
        </div>
      </div>
      <div class="accordion-item border-0">
        <div class="accordion-header" id="headingAccount">
          <button type="button" class="accordion-button animate-underline fw-medium collapsed py-2" data-bs-toggle="collapse" data-bs-target="#account" aria-expanded="false" aria-controls="account">
            <span class="d-block animate-target py-1">Account</span>
          </button>
        </div>
        <div class="accordion-collapse collapse" id="account" aria-labelledby="headingAccount" data-bs-parent="#navigation">
          <div class="accordion-body pb-3">
            <ul class="dropdown-menu show position-static shadow-none">
              <li class="dropdown">
                <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">Auth Pages</a>
                <ul class="dropdown-menu position-static transform-none shadow-none">
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
          </div>
        </div>
      </div>
      <div class="accordion-item border-0">
        <div class="accordion-header" id="headingPages">
          <button type="button" class="accordion-button animate-underline fw-medium collapsed py-2" data-bs-toggle="collapse" data-bs-target="#pages" aria-expanded="false" aria-controls="pages">
            <span class="d-block animate-target py-1">Pages</span>
          </button>
        </div>
        <div class="accordion-collapse collapse" id="pages" aria-labelledby="headingPages" data-bs-parent="#navigation">
          <div class="accordion-body pb-3">
            <ul class="dropdown-menu show position-static shadow-none">
              <li class="dropdown">
                <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">About</a>
                <ul class="dropdown-menu position-static transform-none shadow-none">
                  <li><a class="dropdown-item" href="about-v1">About v.1</a></li>
                  <li><a class="dropdown-item" href="about-v2">About v.2</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                <ul class="dropdown-menu position-static transform-none shadow-none">
                  <li><a class="dropdown-item" href="blog-grid-v1">Grid View v.1</a></li>
                  <li><a class="dropdown-item" href="blog-grid-v2">Grid View v.2</a></li>
                  <li><a class="dropdown-item" href="blog-list">List View</a></li>
                  <li><a class="dropdown-item" href="blog-single-v1">Single Post v.1</a></li>
                  <li><a class="dropdown-item" href="blog-single-v2">Single Post v.2</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">Contact</a>
                <ul class="dropdown-menu position-static transform-none shadow-none">
                  <li><a class="dropdown-item" href="contact-v1">Contact v.1</a></li>
                  <li><a class="dropdown-item" href="contact-v2">Contact v.2</a></li>
                  <li><a class="dropdown-item" href="contact-v3">Contact v.3</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">Help Center</a>
                <ul class="dropdown-menu position-static transform-none shadow-none">
                  <li><a class="dropdown-item" href="help-topics-v1">Help Topics v.1</a></li>
                  <li><a class="dropdown-item" href="help-topics-v2">Help Topics v.2</a></li>
                  <li><a class="dropdown-item" href="help-single-article-v1">Help Single Article v.1</a></li>
                  <li><a class="dropdown-item" href="help-single-article-v2">Help Single Article v.2</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">404 Error</a>
                <ul class="dropdown-menu position-static transform-none shadow-none">
                  <li><a class="dropdown-item" href="404-electronics">404 Electronics</a></li>
                  <li><a class="dropdown-item" href="404-fashion">404 Fashion</a></li>
                  <li><a class="dropdown-item" href="404-furniture">404 Furniture</a></li>
                  <li><a class="dropdown-item" href="404-grocery">404 Grocery</a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="terms-and-conditions">Terms &amp; Conditions</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="h6 fw-medium py-1 mb-0">
      <a class="d-block animate-underline py-1" href="docs/installation">
        <span class="d-inline-block animate-target py-1">Docs</span>
      </a>
    </div>
    <div class="h6 fw-medium py-1 mb-0">
      <a class="d-block animate-underline py-1" href="docs/typography">
        <span class="d-inline-block animate-target py-1">Components</span>
      </a>
    </div>
  </div>

  <!-- Account button visible on screens < 768px wide (md breakpoint) -->
  <div class="offcanvas-header flex-column align-items-start d-md-none">
    <a class="btn btn-lg btn-outline-secondary w-100 rounded-pill" href="account-signin">
      <i class="ci-user fs-lg ms-n1 me-2"></i>
      Account
    </a>
  </div>
</nav>

 <!-- Navigation bar (Page header) -->
 <header class="navbar navbar-expand navbar-sticky sticky-top d-block bg-body z-fixed py-1 py-lg-0 py-xl-1 px-0" data-sticky-element>
  <div class="container justify-content-start py-2 py-lg-3">

    <!-- Offcanvas menu toggler (Hamburger) -->
    <button type="button" class="navbar-toggler d-block flex-shrink-0 me-3 me-sm-4" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar brand (Logo) -->
    <a class="navbar-brand fs-2 p-0 pe-lg-2 pe-xxl-0 me-0 me-sm-3 me-md-4 me-xxl-5" href="index">Cartzilla</a>

    <!-- Categories dropdown visible on screens > 991px wide (lg breakpoint) -->
    <div class="dropdown d-none d-lg-block w-100 me-4" style="max-width: 200px">
      <button type="button" class="btn btn-lg btn-secondary w-100 border-0 rounded-pill" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="ci-grid fs-lg me-2 ms-n1"></i>
        Categories
        <i class="ci-chevron-down fs-lg me-2 ms-auto me-n1"></i>
      </button>
      <div class="dropdown-menu rounded-4 p-4" style="--cz-dropdown-spacer: .75rem; margin-left: -75px">
        <div class="d-flex gap-4">
          <div style="min-width: 170px">
            <div class="h6">Bakery &amp; bread</div>
            <ul class="nav flex-column gap-2 mt-n2">
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Shop all</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Bread</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Pastries</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Bakery cookies</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Cupcakes</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Buns &amp; rolls</a>
              </li>
            </ul>
            <div class="h6 pt-4">Meat products</div>
            <ul class="nav flex-column gap-2 mt-n2">
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Shop all</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Fresh meat</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Processed meat</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Seafood</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Poultry products</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Prepared meat</a>
              </li>
            </ul>
          </div>
          <div style="min-width: 170px">
            <div class="h6">Vegetables</div>
            <ul class="nav flex-column gap-2 mt-n2">
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Shop all</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Leafy greens</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Root vegetables</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Allium vegetables</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Peppers and tomatoes</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Cruciferous</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Seasonal squashes</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Beans, peas &amp; lentils</a>
              </li>
            </ul>
            <div class="h6 pt-4">Sauces and ketchup</div>
            <ul class="nav flex-column gap-2 mt-n2">
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Shop all</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Tomato-based sauces</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Salad dressing</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Hot sauces</a>
              </li>
            </ul>
          </div>
          <div style="min-width: 170px">
            <div class="h6">Fresh fruits</div>
            <ul class="nav flex-column gap-2 mt-n2">
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Shop all</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Citrus fruits</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Berries</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Tropical fruits</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Stone fruits</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Exotic fruits</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Melons</a>
              </li>
            </ul>
            <div class="h6 pt-4">Italian dinner</div>
            <ul class="nav flex-column gap-2 mt-n2">
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Shop all</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Pasta &amp; sauces</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Italian cheese</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Italian meats</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Desserts &amp; beverages</a>
              </li>
            </ul>
          </div>
          <div style="min-width: 170px">
            <div class="h6">Beverages</div>
            <ul class="nav flex-column gap-2 mt-n2">
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Shop all</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Soft drinks</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Juices</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Sports &amp; energy drinks</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Tea and coffee</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Alcoholic beverages</a>
              </li>
            </ul>
            <div class="h6 pt-4">Dairy &amp; eggs</div>
            <ul class="nav flex-column gap-2 mt-n2">
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Shop all</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Chees</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Milk &amp; yogurt</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Sour cream</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Eggs</a>
              </li>
              <li class="d-flex w-100 pt-1">
                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Butter &amp; margarine</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Search bar visible on screens > 768px wide (md breakpoint) -->
    <div class="position-relative w-100 d-none d-md-block me-3 me-xl-4">
      <input type="search" class="form-control form-control-lg rounded-pill" placeholder="Search for products" aria-label="Search">
      <button type="button" class="btn btn-icon btn-ghost fs-lg btn-secondary text-bo border-0 position-absolute top-0 end-0 rounded-circle mt-1 me-1" aria-label="Search button">
        <i class="ci-search"></i>
      </button>
    </div>

    <!-- Delivery options toggle visible on screens > 1200px wide (xl breakpoint) -->
    <div class="nav me-4 me-xxl-5 d-none d-xl-block">
      <a class="nav-link flex-column align-items-start animate-underline p-0" href="#deliveryOptions" data-bs-toggle="offcanvas" aria-controls="deliveryOptions">
        <div class="h6 fs-sm mb-0">Delivery</div>
        <div class="d-flex align-items-center fs-sm fw-normal text-body">
          <span class="animate-target text-nowrap">Set your address</span>
          <i class="ci-chevron-down fs-base ms-1"></i>
        </div>
      </a>
    </div>

    <!-- Button group -->
    <div class="d-flex align-items-center gap-md-1 gap-lg-2 ms-auto">

      <!-- Theme switcher (light/dark/auto) -->
      <div class="dropdown">
        <button type="button" class="theme-switcher btn btn-icon btn-outline-secondary fs-lg border-0 rounded-circle animate-scale" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Toggle theme (light)">
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

      <!-- Search toggle button visible on screens < 768px wide (md breakpoint) -->
      <button type="button" class="btn btn-icon fs-xl btn-outline-secondary border-0 rounded-circle animate-shake d-md-none" data-bs-toggle="collapse" data-bs-target="#searchBar" aria-controls="searchBar" aria-label="Toggle search bar">
        <i class="ci-search animate-target"></i>
      </button>

      <!-- Delivery options button visible on screens < 1200px wide (xl breakpoint) -->
      <button type="button" class="btn btn-icon fs-lg btn-outline-secondary border-0 rounded-circle animate-scale d-xl-none" data-bs-toggle="offcanvas" data-bs-target="#deliveryOptions" aria-controls="deliveryOptions" aria-label="Toggle delivery options offcanvas">
        <i class="ci-map-pin animate-target"></i>
      </button>

      <!-- Account button visible on screens > 768px wide (md breakpoint) -->
      <a class="btn btn-icon fs-lg btn-outline-secondary border-0 rounded-circle animate-shake d-none d-md-inline-flex" href="account-signin">
        <i class="ci-user animate-target"></i>
        <span class="visually-hidden">Account</span>
      </a>

      <!-- Cart button -->
      <button type="button" class="btn btn-icon fs-xl btn-outline-secondary position-relative border-0 rounded-circle animate-scale" data-bs-toggle="offcanvas" data-bs-target="#shoppingCart" aria-controls="shoppingCart" aria-label="Shopping cart">
        <span class="position-absolute top-0 start-100 badge fs-xs text-bg-primary rounded-pill ms-n3 z-2" style="--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em">8</span>
        <i class="ci-shopping-cart animate-target"></i>
      </button>
    </div>
  </div>

  {{-- <!-- Search collapse available on screens < 768px wide (md breakpoint) -->
  <div class="collapse d-md-none" id="searchBar">
    <div class="container pt-2 pb-3">
      <div class="position-relative">
        <i class="ci-search position-absolute top-50 translate-middle-y d-flex fs-lg ms-3"></i>
        <input type="search" class="form-control form-icon-start rounded-pill" placeholder="Search for products" data-autofocus="collapse">
      </div>
    </div>
  </div>
</header> --}}


<!-- Categories -->
<section class="border-top">
  <div class="container py-lg-1">
    <div class="overflow-auto" data-simplebar>
      <div class="nav flex-nowrap justify-content-between gap-4 py-2">
        <a class="nav-link align-items-center animate-underline gap-2 p-0" href="shop-catalog-grocery">
          <span class="d-flex align-items-center justify-content-center bg-body-tertiary rounded-circle" style="width: 40px; height: 40px">
            <i class="ci-percent text-primary fs-xl"></i>
          </span>
          <span class="d-block animate-target fw-semibold text-nowrap ms-1">Weekly sale</span>
        </a>
        <a class="nav-link align-items-center animate-underline gap-2 p-0" href="shop-catalog-grocery">
          <span class="d-flex align-items-center justify-content-center bg-body-tertiary rounded-circle" style="width: 40px; height: 40px">
            <img src="/assets/img/mega-menu/grocery/th01.png" width="30" alt="Image">
          </span>
          <span class="d-block animate-target fw-semibold text-nowrap ms-1">Vegetables</span>
        </a>
        <a class="nav-link align-items-center animate-underline gap-2 p-0" href="shop-catalog-grocery">
          <span class="d-flex align-items-center justify-content-center bg-body-tertiary rounded-circle" style="width: 40px; height: 40px">
            <img src="/assets/img/mega-menu/grocery/th02.png" width="30" alt="Image">
          </span>
          <span class="d-block animate-target fw-semibold text-nowrap ms-1">Easter is coming</span>
        </a>
        <a class="nav-link align-items-center animate-underline gap-2 m-0" href="shop-catalog-grocery">
          <span class="d-flex align-items-center justify-content-center bg-body-tertiary rounded-circle" style="width: 40px; height: 40px">
            <img src="/assets/img/mega-menu/grocery/th03.png" width="30" alt="Image">
          </span>
          <span class="d-block animate-target fw-semibold text-nowrap ms-1">Poultry meat</span>
        </a>
        <a class="nav-link align-items-center animate-underline gap-2 p-0" href="shop-catalog-grocery">
          <span class="d-flex align-items-center justify-content-center bg-body-tertiary rounded-circle" style="width: 40px; height: 40px">
            <img src="/assets/img/mega-menu/grocery/th04.png" width="30" alt="Image">
          </span>
          <span class="d-block animate-target fw-semibold text-nowrap ms-1">Fresh fruits</span>
        </a>
        <a class="nav-link align-items-center animate-underline gap-2 p-0" href="shop-catalog-grocery">
          <span class="d-flex align-items-center justify-content-center bg-body-tertiary rounded-circle" style="width: 40px; height: 40px">
            <img src="/assets/img/mega-menu/grocery/th05.png" width="30" alt="Image">
          </span>
          <span class="d-block animate-target fw-semibold text-nowrap ms-1">St. Patrick's day</span>
        </a>
        <a class="nav-link align-items-center animate-underline gap-2 p-0" href="shop-catalog-grocery">
          <span class="d-flex align-items-center justify-content-center bg-body-tertiary rounded-circle" style="width: 40px; height: 40px">
            <img src="/assets/img/mega-menu/grocery/th06.png" width="30" alt="Image">
          </span>
          <span class="d-block animate-target fw-semibold text-nowrap ms-1">Exotic fruits</span>
        </a>
      </div>
    </div>
  </div>
</section>
