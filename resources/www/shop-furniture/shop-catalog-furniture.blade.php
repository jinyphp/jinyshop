<x-www-layout>

  <!-- Shop filters offcanvas -->
  <div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="shopFilters" tabindex="-1" aria-labelledby="shopFiltersLabel">

    <!-- Header -->
    <div class="offcanvas-header py-3">
      <h5 class="offcanvas-title" id="shopFiltersLabel">Filter and sort</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <!-- Body -->
    <div class="offcanvas-body pt-0">

      <!-- Sort by -->
      <select class="form-select form-select-lg form-select-flush text-body-emphasis fw-medium py-3 px-0" id="fil" data-select='{
        "classNames": {
          "containerInner": "form-select form-select-lg form-select-flush text-body-emphasis fw-medium py-3 px-0"
        }
      }' aria-label="Sorting">
        <option value="">Sort by</option>
        <option value="popular" selected>Most popular</option>
        <option value="match">Best match</option>
        <option value="new">New arrivals</option>
        <option value="price-asc">Price ascending</option>
        <option value="price-desc">Price descending</option>
      </select>

      <div class="accordion" id="filters">

        <!-- Category filter -->
        <div class="accordion-item">
          <h6 class="accordion-header" id="headingCategory">
            <button type="button" class="accordion-button fw-medium collapsed" data-bs-toggle="collapse" data-bs-target="#categoryFilter" aria-expanded="false" aria-controls="categoryFilter">
              <span class="d-flex align-items-end">
                Category
                <span class="text-body fs-sm fw-normal ms-1" id="categoryCount-2"></span>
              </span>
            </button>
          </h6>
          <div class="accordion-collapse collapse" id="categoryFilter" aria-labelledby="headingCategory" data-bs-parent="#filters">
            <div class="accordion-body d-flex flex-column gap-2 px-1">
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="living-room-2" checked onclick="updateFilterCount('categoryCount-2')" data-count-id="categoryCount-2">
                <label for="living-room-2" class="form-check-label d-flex align-items-end">
                  Living room
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">657</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="bedroom-2" checked onclick="updateFilterCount('categoryCount-2')" data-count-id="categoryCount-2">
                <label for="bedroom-2" class="form-check-label d-flex align-items-end">
                  Bedroom
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">528</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="kitchen-2" onclick="updateFilterCount('categoryCount-2')" data-count-id="categoryCount-2">
                <label for="kitchen-2" class="form-check-label d-flex align-items-end">
                  Kitchen
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">342</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="office-2" onclick="updateFilterCount('categoryCount-2')" data-count-id="categoryCount-2">
                <label for="office-2" class="form-check-label d-flex align-items-end">
                  Office
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">283</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="lighting-2" checked onclick="updateFilterCount('categoryCount-2')" data-count-id="categoryCount-2">
                <label for="lighting-2" class="form-check-label d-flex align-items-end">
                  Lighting
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">395</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="decoration-2" onclick="updateFilterCount('categoryCount-2')" data-count-id="categoryCount-2">
                <label for="decoration-2" class="form-check-labe d-flex align-items-endl">
                  Decoration
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">204</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="accessories-2" checked onclick="updateFilterCount('categoryCount-2')" data-count-id="categoryCount-2">
                <label for="accessories-2" class="form-check-label d-flex align-items-end">
                  Accessories
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">190</span>
                </label>
              </div>
            </div>
          </div>
        </div>

        <!-- Type filter -->
        <div class="accordion-item">
          <h6 class="accordion-header" id="headingType">
            <button type="button" class="accordion-button fw-medium collapsed" data-bs-toggle="collapse" data-bs-target="#typeFilter" aria-expanded="false" aria-controls="typeFilter">
              <span class="d-flex align-items-end">
                Type
                <span class="text-body fs-sm fw-normal ms-1" id="typeCount-2"></span>
              </span>
            </button>
          </h6>
          <div class="accordion-collapse collapse" id="typeFilter" aria-labelledby="headingType" data-bs-parent="#filters">
            <div class="accordion-body d-flex flex-column gap-2 px-1">
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="armchair-2" onclick="updateFilterCount('typeCount-2')" data-count-id="typeCount-2">
                <label for="armchair-2" class="form-check-label d-flex align-items-end">
                  Armchair
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">324</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="sofa-2" onclick="updateFilterCount('typeCount-2')" data-count-id="typeCount-2">
                <label for="sofa-2" class="form-check-label d-flex align-items-end">
                  Sofa
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">275</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="ottoman-2" onclick="updateFilterCount('typeCount-2')" data-count-id="typeCount-2">
                <label for="ottoman-2" class="form-check-label d-flex align-items-end">
                  Ottoman
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">117</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="bench-2" onclick="updateFilterCount('typeCount-2')" data-count-id="typeCount-2">
                <label for="bench-2" class="form-check-label d-flex align-items-end">
                  Bench
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">86</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="bed-2" onclick="updateFilterCount('typeCount-2')" data-count-id="typeCount-2">
                <label for="bed-2" class="form-check-label d-flex align-items-end">
                  Bed frame
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">263</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="lamp-2" onclick="updateFilterCount('typeCount-2')" data-count-id="typeCount-2">
                <label for="lamp-2" class="form-check-label d-flex align-items-end">
                  Lamp
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">415</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="stool-2" onclick="updateFilterCount('typeCount-2')" data-count-id="typeCount-2">
                <label for="stool-2" class="form-check-labe d-flex align-items-end">
                  Stool
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">104</span>
                </label>
              </div>
            </div>
          </div>
        </div>

        <!-- Color filter -->
        <div class="accordion-item">
          <h6 class="accordion-header" id="headingColor">
            <button type="button" class="accordion-button fw-medium collapsed" data-bs-toggle="collapse" data-bs-target="#colorFilter" aria-expanded="false" aria-controls="colorFilter">
              <span class="d-flex align-items-end">
                Color
                <span class="text-body fs-sm fw-normal ms-1" id="colorCount-2"></span>
              </span>
            </button>
          </h6>
          <div class="accordion-collapse collapse" id="colorFilter" aria-labelledby="headingColor" data-bs-parent="#filters">
            <div class="accordion-body d-flex flex-column gap-2 px-1">
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="emerald-2" onclick="updateFilterCount('colorCount-2')" data-count-id="colorCount-2">
                <label for="emerald-2" class="form-check-label d-flex align-items-end">
                  <span class="align-self-center rounded-circle border border-2 p-1 me-2" style="--cz-border-color: #32808e; background-color: #32808e"></span>
                  Emerald
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">97</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="dark-gray-2" onclick="updateFilterCount('colorCount-2')" data-count-id="colorCount-2">
                <label for="dark-gray-2" class="form-check-label d-flex align-items-end">
                  <span class="align-self-center rounded-circle border border-2 p-1 me-2" style="--cz-border-color: #6a6f7b; background-color: #6a6f7b"></span>
                  Dark gray
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">346</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="light-gray-2" onclick="updateFilterCount('colorCount-2')" data-count-id="colorCount-2">
                <label for="light-gray-2" class="form-check-label d-flex align-items-end">
                  <span class="align-self-center rounded-circle border border-2 p-1 me-2" style="--cz-border-color: #bdc5da; background-color: #bdc5da"></span>
                  Light gray
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">291</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="brown-2" onclick="updateFilterCount('colorCount-2')" data-count-id="colorCount-2">
                <label for="brown-2" class="form-check-label d-flex align-items-end">
                  <span class="align-self-center rounded-circle border border-2 p-1 me-2" style="--cz-border-color: #af8d6a; background-color: #af8d6a"></span>
                  Brown
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">105</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="blue-2" onclick="updateFilterCount('colorCount-2')" data-count-id="colorCount-2">
                <label for="blue-2" class="form-check-label d-flex align-items-end">
                  <span class="align-self-center rounded-circle border border-2 p-1 me-2" style="--cz-border-color: #216aae; background-color: #216aae"></span>
                  Blue
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">84</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="green-2" onclick="updateFilterCount('colorCount-2')" data-count-id="colorCount-2">
                <label for="green-2" class="form-check-label d-flex align-items-end">
                  <span class="align-self-center rounded-circle border border-2 p-1 me-2" style="--cz-border-color: #187c1c; background-color: #187c1c"></span>
                  Green
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">69</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="beige-2" onclick="updateFilterCount('colorCount-2')" data-count-id="colorCount-2">
                <label for="beige-2" class="form-check-label d-flex align-items-end">
                  <span class="align-self-center rounded-circle border border-2 p-1 me-2" style="--cz-border-color: #bdaB9e; background-color: #bdaB9e"></span>
                  Beige
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">173</span>
                </label>
              </div>
            </div>
          </div>
        </div>

        <!-- Price filter -->
        <div class="accordion-item">
          <h6 class="accordion-header" id="headingPrice">
            <button type="button" class="accordion-button fw-medium collapsed" data-bs-toggle="collapse" data-bs-target="#priceFilter" aria-expanded="false" aria-controls="priceFilter">
              <span class="d-flex align-items-end">
                Price
                <span class="text-body fs-sm fw-normal ms-1" id="priceCount"></span>
              </span>
            </button>
          </h6>
          <div class="accordion-collapse collapse" id="priceFilter" aria-labelledby="headingPrice" data-bs-parent="#filters">
            <div class="accordion-body d-flex flex-column gap-2 px-1">
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="price-1" onclick="updateFilterCount('priceCount')" data-count-id="priceCount">
                <label for="price-1" class="form-check-label d-flex align-items-end">
                  $0.00 - 99.99
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">241</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="price-2" onclick="updateFilterCount('priceCount')" data-count-id="priceCount">
                <label for="price-2" class="form-check-label d-flex align-items-end">
                  $100.00 - 199.99
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">398</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="price-3" onclick="updateFilterCount('priceCount')" data-count-id="priceCount">
                <label for="price-3" class="form-check-label d-flex align-items-end">
                  $200.00 - 299.99
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">253</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="price-4" onclick="updateFilterCount('priceCount')" data-count-id="priceCount">
                <label for="price-4" class="form-check-label d-flex align-items-end">
                  $300.00 - 399.99
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">197</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="price-5" onclick="updateFilterCount('priceCount')" data-count-id="priceCount">
                <label for="price-5" class="form-check-label d-flex align-items-end">
                  $400.00 - 499.99
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">152</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="price-6" onclick="updateFilterCount('priceCount')" data-count-id="priceCount">
                <label for="price-6" class="form-check-label d-flex align-items-end">
                  $500.00+
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">138</span>
                </label>
              </div>
            </div>
          </div>
        </div>

        <!-- Size filter -->
        <div class="accordion-item">
          <h6 class="accordion-header" id="headingSize">
            <button type="button" class="accordion-button fw-medium collapsed" data-bs-toggle="collapse" data-bs-target="#sizeFilter" aria-expanded="false" aria-controls="sizeFilter">
              <span class="d-flex align-items-end">
                Size
                <span class="text-body fs-sm fw-normal ms-1" id="sizeCount"></span>
              </span>
            </button>
          </h6>
          <div class="accordion-collapse collapse" id="sizeFilter" aria-labelledby="headingSize" data-bs-parent="#filters">
            <div class="accordion-body d-flex flex-column gap-2 px-1">
              <div class="fs-sm fw-semibold text-body-emphasis pb-2">Width</div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="width-1" onclick="updateFilterCount('sizeCount')" data-count-id="sizeCount">
                <label for="width-1" class="form-check-label d-flex align-items-end">
                  0 - 19 "
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">27</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="width-2" onclick="updateFilterCount('sizeCount')" data-count-id="sizeCount">
                <label for="width-2" class="form-check-label d-flex align-items-end">
                  20 - 24 "
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">89</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="width-3" onclick="updateFilterCount('sizeCount')" data-count-id="sizeCount">
                <label for="width-3" class="form-check-label d-flex align-items-end">
                  25 - 29 "
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">145</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="width-4" onclick="updateFilterCount('sizeCount')" data-count-id="sizeCount">
                <label for="width-4" class="form-check-label d-flex align-items-end">
                  30 - 34 "
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">106</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="width-5" onclick="updateFilterCount('sizeCount')" data-count-id="sizeCount">
                <label for="width-5" class="form-check-label d-flex align-items-end">
                  35+ "
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">73</span>
                </label>
              </div>
              <div class="fs-sm fw-semibold text-body-emphasis py-2">Height</div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="height-1" onclick="updateFilterCount('sizeCount')" data-count-id="sizeCount">
                <label for="height-1" class="form-check-label d-flex align-items-end">
                  0 - 24 "
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">85</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="height-2" onclick="updateFilterCount('sizeCount')" data-count-id="sizeCount">
                <label for="height-2" class="form-check-label d-flex align-items-end">
                  25 - 29 "
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">67</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="height-3" onclick="updateFilterCount('sizeCount')" data-count-id="sizeCount">
                <label for="height-3" class="form-check-label d-flex align-items-end">
                  30 - 34 "
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">210</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="height-4" onclick="updateFilterCount('sizeCount')" data-count-id="sizeCount">
                <label for="height-4" class="form-check-label d-flex align-items-end">
                  35 - 39 "
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">132</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="height-5" onclick="updateFilterCount('sizeCount')" data-count-id="sizeCount">
                <label for="height-5" class="form-check-label d-flex align-items-end">
                  40+ "
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">19</span>
                </label>
              </div>
            </div>
          </div>
        </div>

        <!-- Material filter -->
        <div class="accordion-item">
          <h6 class="accordion-header" id="headingMaterial">
            <button type="button" class="accordion-button fw-medium collapsed" data-bs-toggle="collapse" data-bs-target="#materialFilter" aria-expanded="false" aria-controls="materialFilter">
              <span class="d-flex align-items-end">
                Material
                <span class="text-body fs-sm fw-normal ms-1" id="materialCount"></span>
              </span>
            </button>
          </h6>
          <div class="accordion-collapse collapse" id="materialFilter" aria-labelledby="headingMaterial" data-bs-parent="#filters">
            <div class="accordion-body d-flex flex-column gap-2 px-1">
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="fabric" onclick="updateFilterCount('materialCount')" data-count-id="materialCount">
                <label for="fabric" class="form-check-label d-flex align-items-end">
                  Fabric
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">482</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="wood" onclick="updateFilterCount('materialCount')" data-count-id="materialCount">
                <label for="wood" class="form-check-label d-flex align-items-end">
                  Wood
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">537</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="leather" onclick="updateFilterCount('materialCount')" data-count-id="materialCount">
                <label for="leather" class="form-check-label d-flex align-items-end">
                  Leather
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">256</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="metal" onclick="updateFilterCount('materialCount')" data-count-id="materialCount">
                <label for="metal" class="form-check-label d-flex align-items-end">
                  Metal
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">175</span>
                </label>
              </div>
              <div class="form-check m-0">
                <input type="checkbox" class="form-check-input fs-base" id="plastic" onclick="updateFilterCount('materialCount')" data-count-id="materialCount">
                <label for="plastic" class="form-check-label d-flex align-items-end">
                  Plastic
                  <span class="fs-xs text-body-secondary ps-2 ms-auto">279</span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Page content -->
  <main class="content-wrapper">
    <div class="container pb-5 mb-2 mb-sm-3 mb-lg-4 mb-xl-5">

      <!-- Breadcrumb -->
      <nav class="position-relative pt-3 my-3 my-md-4" aria-label="breadcrumb" style="z-index: 1021">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home-furniture">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Catalog with filters on top</li>
        </ol>
      </nav>


      <!-- Page title -->
      <h1 class="h3 position-relative pb-sm-2 pb-md-3" style="z-index: 1021">Shop catalog</h1>


      <!-- Filters -->
      <div class="sticky-top bg-body mb-3 mb-sm-4" style="margin-top: -4.5rem">
        <div class="row align-items-center pt-5">
          <div class="col-5 col-sm-8 col-md-9 d-flex gap-2 pb-3 mt-4">
            <div class="d-none d-sm-block w-100 me-1">
              <select class="form-select rounded-pill" data-select='{
                "classNames": {
                  "containerInner": "form-select filter-select rounded-pill"
                }
              }' aria-label="Sorting">
                <option value="">Sort by</option>
                <option value="popular" selected>Most popular</option>
                <option value="match">Best match</option>
                <option value="new">New arrivals</option>
                <option value="price-asc">Price ascending</option>
                <option value="price-desc">Price descending</option>
              </select>
            </div>
            <div class="dropdown w-100 d-none d-md-block me-1">
              <button type="button" class="btn btn-outline-secondary dropdown-toggle filter-select justify-content-between w-100 text-body fw-normal rounded-pill px-3" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">Category <span class="ms-1 me-auto" id="categoryCount"></span></button>
              <div class="dropdown-menu w-100 p-3">
                <div class="d-flex flex-column gap-2">
                  <div class="form-check m-0">
                    <input type="checkbox" class="form-check-input fs-base" id="living-room" checked onclick="updateFilterCount('categoryCount')" data-count-id="categoryCount">
                    <label for="living-room" class="form-check-label d-flex align-items-end">
                      Living room
                      <span class="fs-xs text-body-secondary ps-2 ms-auto">657</span>
                    </label>
                  </div>
                  <div class="form-check m-0">
                    <input type="checkbox" class="form-check-input fs-base" id="bedroom" checked onclick="updateFilterCount('categoryCount')" data-count-id="categoryCount">
                    <label for="bedroom" class="form-check-label d-flex align-items-end">
                      Bedroom
                      <span class="fs-xs text-body-secondary ps-2 ms-auto">528</span>
                    </label>
                  </div>
                  <div class="form-check m-0">
                    <input type="checkbox" class="form-check-input fs-base" id="kitchen" onclick="updateFilterCount('categoryCount')" data-count-id="categoryCount">
                    <label for="kitchen" class="form-check-label d-flex align-items-end">
                      Kitchen
                      <span class="fs-xs text-body-secondary ps-2 ms-auto">342</span>
                    </label>
                  </div>
                  <div class="form-check m-0">
                    <input type="checkbox" class="form-check-input fs-base" id="office" onclick="updateFilterCount('categoryCount')" data-count-id="categoryCount">
                    <label for="office" class="form-check-label d-flex align-items-end">
                      Office
                      <span class="fs-xs text-body-secondary ps-2 ms-auto">283</span>
                    </label>
                  </div>
                  <div class="form-check m-0">
                    <input type="checkbox" class="form-check-input fs-base" id="lighting" checked onclick="updateFilterCount('categoryCount')" data-count-id="categoryCount">
                    <label for="lighting" class="form-check-label d-flex align-items-end">
                      Lighting
                      <span class="fs-xs text-body-secondary ps-2 ms-auto">395</span>
                    </label>
                  </div>
                  <div class="form-check m-0">
                    <input type="checkbox" class="form-check-input fs-base" id="decoration" onclick="updateFilterCount('categoryCount')" data-count-id="categoryCount">
                    <label for="decoration" class="form-check-labe d-flex align-items-endl">
                      Decoration
                      <span class="fs-xs text-body-secondary ps-2 ms-auto">204</span>
                    </label>
                  </div>
                  <div class="form-check m-0">
                    <input type="checkbox" class="form-check-input fs-base" id="accessories" checked onclick="updateFilterCount('categoryCount')" data-count-id="categoryCount">
                    <label for="accessories" class="form-check-label d-flex align-items-end">
                      Accessories
                      <span class="fs-xs text-body-secondary ps-2 ms-auto">190</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="dropdown w-100 d-none d-lg-block me-1">
              <button type="button" class="btn btn-outline-secondary dropdown-toggle filter-select justify-content-between w-100 text-body fw-normal rounded-pill px-3" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">Type <span class="ms-1 me-auto" id="typeCount"></span></button>
              <div class="dropdown-menu w-100 p-3">
                <div class="d-flex flex-column gap-2">
                  <div class="form-check m-0">
                    <input type="checkbox" class="form-check-input fs-base" id="armchair" onclick="updateFilterCount('typeCount')" data-count-id="typeCount">
                    <label for="armchair" class="form-check-label d-flex align-items-end">
                      Armchair
                      <span class="fs-xs text-body-secondary ps-2 ms-auto">324</span>
                    </label>
                  </div>
                  <div class="form-check m-0">
                    <input type="checkbox" class="form-check-input fs-base" id="sofa" onclick="updateFilterCount('typeCount')" data-count-id="typeCount">
                    <label for="sofa" class="form-check-label d-flex align-items-end">
                      Sofa
                      <span class="fs-xs text-body-secondary ps-2 ms-auto">275</span>
                    </label>
                  </div>
                  <div class="form-check m-0">
                    <input type="checkbox" class="form-check-input fs-base" id="ottoman" onclick="updateFilterCount('typeCount')" data-count-id="typeCount">
                    <label for="ottoman" class="form-check-label d-flex align-items-end">
                      Ottoman
                      <span class="fs-xs text-body-secondary ps-2 ms-auto">117</span>
                    </label>
                  </div>
                  <div class="form-check m-0">
                    <input type="checkbox" class="form-check-input fs-base" id="bench" onclick="updateFilterCount('typeCount')" data-count-id="typeCount">
                    <label for="bench" class="form-check-label d-flex align-items-end">
                      Bench
                      <span class="fs-xs text-body-secondary ps-2 ms-auto">86</span>
                    </label>
                  </div>
                  <div class="form-check m-0">
                    <input type="checkbox" class="form-check-input fs-base" id="bed" onclick="updateFilterCount('typeCount')" data-count-id="typeCount">
                    <label for="bed" class="form-check-label d-flex align-items-end">
                      Bed frame
                      <span class="fs-xs text-body-secondary ps-2 ms-auto">263</span>
                    </label>
                  </div>
                  <div class="form-check m-0">
                    <input type="checkbox" class="form-check-input fs-base" id="lamp" onclick="updateFilterCount('typeCount')" data-count-id="typeCount">
                    <label for="lamp" class="form-check-label d-flex align-items-end">
                      Lamp
                      <span class="fs-xs text-body-secondary ps-2 ms-auto">415</span>
                    </label>
                  </div>
                  <div class="form-check m-0">
                    <input type="checkbox" class="form-check-input fs-base" id="stool" onclick="updateFilterCount('typeCount')" data-count-id="typeCount">
                    <label for="stool" class="form-check-labe d-flex align-items-end">
                      Stool
                      <span class="fs-xs text-body-secondary ps-2 ms-auto">104</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="dropdown w-100 d-none d-xl-block me-1">
              <button type="button" class="btn btn-outline-secondary dropdown-toggle filter-select justify-content-between w-100 text-body fw-normal rounded-pill px-3" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">Color <span class="ms-1 me-auto" id="colorCount"></span></button>
              <div class="dropdown-menu w-100 p-3">
                <div class="d-flex flex-column gap-2">
                  <div class="form-check m-0">
                    <input type="checkbox" class="form-check-input fs-base" id="emerald" onclick="updateFilterCount('colorCount')" data-count-id="colorCount">
                    <label for="emerald" class="form-check-label d-flex align-items-end">
                      <span class="align-self-center rounded-circle border border-2 p-1 me-2" style="--cz-border-color: #32808e; background-color: #32808e"></span>
                      Emerald
                      <span class="fs-xs text-body-secondary ps-2 ms-auto">97</span>
                    </label>
                  </div>
                  <div class="form-check m-0">
                    <input type="checkbox" class="form-check-input fs-base" id="dark-gray" onclick="updateFilterCount('colorCount')" data-count-id="colorCount">
                    <label for="dark-gray" class="form-check-label d-flex align-items-end">
                      <span class="align-self-center rounded-circle border border-2 p-1 me-2" style="--cz-border-color: #6a6f7b; background-color: #6a6f7b"></span>
                      Dark gray
                      <span class="fs-xs text-body-secondary ps-2 ms-auto">346</span>
                    </label>
                  </div>
                  <div class="form-check m-0">
                    <input type="checkbox" class="form-check-input fs-base" id="light-gray" onclick="updateFilterCount('colorCount')" data-count-id="colorCount">
                    <label for="light-gray" class="form-check-label d-flex align-items-end">
                      <span class="align-self-center rounded-circle border border-2 p-1 me-2" style="--cz-border-color: #bdc5da; background-color: #bdc5da"></span>
                      Light gray
                      <span class="fs-xs text-body-secondary ps-2 ms-auto">291</span>
                    </label>
                  </div>
                  <div class="form-check m-0">
                    <input type="checkbox" class="form-check-input fs-base" id="brown" onclick="updateFilterCount('colorCount')" data-count-id="colorCount">
                    <label for="brown" class="form-check-label d-flex align-items-end">
                      <span class="align-self-center rounded-circle border border-2 p-1 me-2" style="--cz-border-color: #af8d6a; background-color: #af8d6a"></span>
                      Brown
                      <span class="fs-xs text-body-secondary ps-2 ms-auto">105</span>
                    </label>
                  </div>
                  <div class="form-check m-0">
                    <input type="checkbox" class="form-check-input fs-base" id="blue" onclick="updateFilterCount('colorCount')" data-count-id="colorCount">
                    <label for="blue" class="form-check-label d-flex align-items-end">
                      <span class="align-self-center rounded-circle border border-2 p-1 me-2" style="--cz-border-color: #216aae; background-color: #216aae"></span>
                      Blue
                      <span class="fs-xs text-body-secondary ps-2 ms-auto">84</span>
                    </label>
                  </div>
                  <div class="form-check m-0">
                    <input type="checkbox" class="form-check-input fs-base" id="green" onclick="updateFilterCount('colorCount')" data-count-id="colorCount">
                    <label for="green" class="form-check-label d-flex align-items-end">
                      <span class="align-self-center rounded-circle border border-2 p-1 me-2" style="--cz-border-color: #187c1c; background-color: #187c1c"></span>
                      Green
                      <span class="fs-xs text-body-secondary ps-2 ms-auto">69</span>
                    </label>
                  </div>
                  <div class="form-check m-0">
                    <input type="checkbox" class="form-check-input fs-base" id="beige" onclick="updateFilterCount('colorCount')" data-count-id="colorCount">
                    <label for="beige" class="form-check-label d-flex align-items-end">
                      <span class="align-self-center rounded-circle border border-2 p-1 me-2" style="--cz-border-color: #bdaB9e; background-color: #bdaB9e"></span>
                      Beige
                      <span class="fs-xs text-body-secondary ps-2 ms-auto">173</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <!-- All filters offcanvas toggle -->
            <nav class="nav">
              <a class="nav-link animate-underline px-2" href="#shopFilters" data-bs-toggle="offcanvas" aria-controls="shopFilters">
                <i class="ci-filter me-1"></i>
                <span class="animate-target text-nowrap">All filters</span>
              </a>
            </nav>
          </div>

          <!-- Product / room view switcher -->
          <div class="col-7 col-sm-4 col-md-3">
            <ul class="nav nav-underline flex-nowrap justify-content-end" id="viewShwitcher">
              <li class="nav-item" role="presentation">
                <button type="button" class="nav-link active" id="showProduct" role="tab" aria-selected="true">
                  Product
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button type="button" class="nav-link" id="showRoom" role="tab" aria-selected="false">
                  Room
                </button>
              </li>
            </ul>
          </div>
        </div>
      </div>


      <!-- Selected filters -->
      <div class="d-flex flex-wrap align-items-center gap-2 text-nowrap mt-n3 mb-3 mb-lg-4">
        <button type="button" class="btn btn-sm btn-secondary rounded-pill me-1">
          <i class="ci-close fs-sm me-1 ms-n1"></i>
          Living room
        </button>
        <button type="button" class="btn btn-sm btn-secondary rounded-pill me-1">
          <i class="ci-close fs-sm me-1 ms-n1"></i>
          Bedroom
        </button>
        <button type="button" class="btn btn-sm btn-secondary rounded-pill me-1">
          <i class="ci-close fs-sm me-1 ms-n1"></i>
          Lighting
        </button>
        <button type="button" class="btn btn-sm btn-secondary rounded-pill me-1">
          <i class="ci-close fs-sm me-1 ms-n1"></i>
          Accessories
        </button>
        <div class="nav ps-1">
          <a class="nav-link fs-xs text-decoration-underline px-0" href="#!">Clear all</a>
        </div>
      </div>


      <!-- Product grid -->
      <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 gy-5" id="productGrid">

        <!-- Item -->
        <div class="col">
          <div class="animate-underline mb-sm-2">
            <a class="hover-effect-opacity ratio ratio-1x1 d-block mb-3" href="shop-product-furniture">
              <img src="/assets/img/shop/furniture/01.png" class="hover-effect-target opacity-100" alt="Product">
              <img src="/assets/img/shop/furniture/01-hover.jpg" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
            </a>
            <div class="d-flex gap-2 mb-3">
              <input type="radio" class="btn-check" name="colors-1" id="color-1-1" checked>
              <label for="color-1-1" class="btn btn-color fs-base" style="color: #32808e">
                <span class="visually-hidden">Emerald</span>
              </label>
              <input type="radio" class="btn-check" name="colors-1" id="color-1-2">
              <label for="color-1-2" class="btn btn-color fs-base" style="color: #767e93">
                <span class="visually-hidden">Bluish gray</span>
              </label>
              <input type="radio" class="btn-check" name="colors-1" id="color-1-3">
              <label for="color-1-3" class="btn btn-color fs-base" style="color: #cd8d01">
                <span class="visually-hidden">Mustard</span>
              </label>
            </div>
            <h3 class="mb-2">
              <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture">
                <span class="animate-target">Soft chair with cushion and wooden legs</span>
              </a>
            </h3>
            <div class="h6">$245.00</div>
            <div class="d-flex gap-2">
              <button type="button" class="btn btn-dark w-100 rounded-pill px-3">Add to cart</button>
              <button type="button" class="btn btn-icon btn-secondary rounded-circle animate-pulse" aria-label="Add to wishlist">
                <i class="ci-heart fs-base animate-target"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="col">
          <div class="animate-underline mb-sm-2">
            <a class="hover-effect-opacity ratio ratio-1x1 d-block mb-3" href="shop-product-furniture">
              <img src="/assets/img/shop/furniture/02.png" class="hover-effect-target opacity-100" alt="Product">
              <img src="/assets/img/shop/furniture/02-hover.jpg" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
            </a>
            <div class="d-flex gap-2 mb-3">
              <input type="radio" class="btn-check" name="colors-2" id="color-2-1" checked>
              <label for="color-2-1" class="btn btn-color fs-base" style="color: #6a6f7b">
                <span class="visually-hidden">Gray</span>
              </label>
              <input type="radio" class="btn-check" name="colors-2" id="color-2-2">
              <label for="color-2-2" class="btn btn-color fs-base" style="color: #373b42">
                <span class="visually-hidden">Dark gray</span>
              </label>
              <input type="radio" class="btn-check" name="colors-2" id="color-2-3">
              <label for="color-2-3" class="btn btn-color fs-base" style="color: #216aae">
                <span class="visually-hidden">Blue</span>
              </label>
              <input type="radio" class="btn-check" name="colors-2" id="color-2-4">
              <label for="color-2-4" class="btn btn-color fs-base" style="color: #187c1c">
                <span class="visually-hidden">Green</span>
              </label>
            </div>
            <h3 class="mb-2">
              <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture">
                <span class="animate-target">Decorative flowerpot with a plant</span>
              </a>
            </h3>
            <div class="h6">$107.50</div>
            <div class="d-flex gap-2">
              <button type="button" class="btn btn-dark w-100 rounded-pill px-3">Add to cart</button>
              <button type="button" class="btn btn-icon btn-secondary rounded-circle animate-pulse" aria-label="Add to wishlist">
                <i class="ci-heart fs-base animate-target"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="col">
          <div class="animate-underline mb-sm-2">
            <a class="hover-effect-opacity ratio ratio-1x1 d-block mb-3" href="shop-product-furniture">
              <img src="/assets/img/shop/furniture/03.png" class="hover-effect-target opacity-100" alt="Product">
              <img src="/assets/img/shop/furniture/03-hover.jpg" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
            </a>
            <div class="d-flex gap-2 mb-3">
              <input type="radio" class="btn-check" name="colors-3" id="color-3-1" checked>
              <label for="color-3-1" class="btn btn-color fs-base" style="color: #a36540">
                <span class="visually-hidden">Brown</span>
              </label>
              <input type="radio" class="btn-check" name="colors-3" id="color-3-2">
              <label for="color-3-2" class="btn btn-color fs-base" style="color: #f8d7b5">
                <span class="visually-hidden">Beige</span>
              </label>
              <input type="radio" class="btn-check" name="colors-3" id="color-3-3">
              <label for="color-3-3" class="btn btn-color fs-base" style="color: #e0e5eb">
                <span class="visually-hidden">White</span>
              </label>
            </div>
            <h3 class="mb-2">
              <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture">
                <span class="animate-target">Home fragrance with the aroma of spices</span>
              </a>
            </h3>
            <div class="h6">$24.00</div>
            <div class="d-flex gap-2">
              <button type="button" class="btn btn-dark w-100 rounded-pill px-3">Add to cart</button>
              <button type="button" class="btn btn-icon btn-secondary rounded-circle animate-pulse" aria-label="Add to wishlist">
                <i class="ci-heart fs-base animate-target"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="col">
          <div class="animate-underline mb-sm-2">
            <a class="hover-effect-opacity ratio ratio-1x1 d-block mb-3" href="shop-product-furniture">
              <img src="/assets/img/shop/furniture/04.png" class="hover-effect-target opacity-100" alt="Product">
              <img src="/assets/img/shop/furniture/04-hover.jpg" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
            </a>
            <div class="d-flex gap-2 mb-3">
              <input type="radio" class="btn-check" name="colors-4" id="color-4-1" checked>
              <label for="color-4-1" class="btn btn-color fs-base" style="color: #384043">
                <span class="visually-hidden">Dark gray</span>
              </label>
              <input type="radio" class="btn-check" name="colors-4" id="color-4-2">
              <label for="color-4-2" class="btn btn-color fs-base" style="color: #bdc5da">
                <span class="visually-hidden">Light gray</span>
              </label>
              <input type="radio" class="btn-check" name="colors-4" id="color-4-3">
              <label for="color-4-3" class="btn btn-color fs-base" style="color: #526f99">
                <span class="visually-hidden">Bluish gray</span>
              </label>
            </div>
            <h3 class="mb-2">
              <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture">
                <span class="animate-target">Bed frame light gray 140x200 cm</span>
              </a>
            </h3>
            <div class="h6">$760.00</div>
            <div class="d-flex gap-2">
              <button type="button" class="btn btn-dark w-100 rounded-pill px-3">Add to cart</button>
              <button type="button" class="btn btn-icon btn-secondary rounded-circle animate-pulse" aria-label="Add to wishlist">
                <i class="ci-heart fs-base animate-target"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="col">
          <div class="animate-underline mb-sm-2">
            <a class="hover-effect-opacity ratio ratio-1x1 d-block mb-3" href="shop-product-furniture">
              <img src="/assets/img/shop/furniture/05.png" class="hover-effect-target opacity-100" alt="Product">
              <img src="/assets/img/shop/furniture/05-hover.jpg" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
            </a>
            <div class="d-flex gap-2 mb-3">
              <input type="radio" class="btn-check" name="colors-5" id="color-5-1" checked>
              <label for="color-5-1" class="btn btn-color fs-base" style="color: #3a94b5">
                <span class="visually-hidden">Blue</span>
              </label>
              <input type="radio" class="btn-check" name="colors-5" id="color-5-2">
              <label for="color-5-2" class="btn btn-color fs-base" style="color: #777d7E">
                <span class="visually-hidden">Gray</span>
              </label>
            </div>
            <h3 class="mb-2">
              <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture">
                <span class="animate-target">Blue armchair with iron legs</span>
              </a>
            </h3>
            <div class="h6">$220.00</div>
            <div class="d-flex gap-2">
              <button type="button" class="btn btn-dark w-100 rounded-pill px-3">Add to cart</button>
              <button type="button" class="btn btn-icon btn-secondary rounded-circle animate-pulse" aria-label="Add to wishlist">
                <i class="ci-heart fs-base animate-target"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Item (sale) -->
        <div class="col">
          <div class="animate-underline mb-sm-2">
            <a class="hover-effect-opacity ratio ratio-1x1 d-block mb-3" href="shop-product-furniture">
              <div class="position-absolute top-0 start-0 z-2 mt-2 mt-sm-3 ms-2 ms-sm-3">
                <span class="badge text-bg-danger">-13%</span>
              </div>
              <img src="/assets/img/shop/furniture/06.png" class="hover-effect-target opacity-100" alt="Product">
              <img src="/assets/img/shop/furniture/06-hover.jpg" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
            </a>
            <div class="d-flex gap-2 mb-3">
              <input type="radio" class="btn-check" name="colors-6" id="color-6-1" checked>
              <label for="color-6-1" class="btn btn-color fs-base" style="color: #bdaB9e">
                <span class="visually-hidden">Beige</span>
              </label>
              <input type="radio" class="btn-check" name="colors-6" id="color-6-2">
              <label for="color-6-2" class="btn btn-color fs-base" style="color: #d65c46">
                <span class="visually-hidden">Terracotta</span>
              </label>
              <input type="radio" class="btn-check" name="colors-6" id="color-6-3">
              <label for="color-6-3" class="btn btn-color fs-base" style="color: #e0e5eb">
                <span class="visually-hidden">White</span>
              </label>
            </div>
            <h3 class="mb-2">
              <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture">
                <span class="animate-target">Loft-style lamp 120x80 cm</span>
              </a>
            </h3>
            <div class="h6">$140.00 <del class="fs-sm fw-normal text-body-tertiary">$160.00</del></div>
            <div class="d-flex gap-2">
              <button type="button" class="btn btn-dark w-100 rounded-pill px-3">Add to cart</button>
              <button type="button" class="btn btn-icon btn-secondary rounded-circle animate-pulse" aria-label="Add to wishlist">
                <i class="ci-heart fs-base animate-target"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="col">
          <div class="animate-underline mb-sm-2">
            <a class="hover-effect-opacity ratio ratio-1x1 d-block mb-3" href="shop-product-furniture">
              <img src="/assets/img/shop/furniture/07.png" class="hover-effect-target opacity-100" alt="Product">
              <img src="/assets/img/shop/furniture/07-hover.jpg" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
            </a>
            <div class="d-flex gap-2 mb-3">
              <input type="radio" class="btn-check" name="colors-7" id="color-7-1" checked>
              <label for="color-7-1" class="btn btn-color fs-base" style="color: #71706c">
                <span class="visually-hidden">Dark gray</span>
              </label>
              <input type="radio" class="btn-check" name="colors-7" id="color-7-2">
              <label for="color-7-2" class="btn btn-color fs-base" style="color: #c1c3b8">
                <span class="visually-hidden">Light gray</span>
              </label>
            </div>
            <h3 class="mb-2">
              <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture">
                <span class="animate-target">Chair with a cushion for the legs</span>
              </a>
            </h3>
            <div class="h6">$435.00</div>
            <div class="d-flex gap-2">
              <button type="button" class="btn btn-dark w-100 rounded-pill px-3">Add to cart</button>
              <button type="button" class="btn btn-icon btn-secondary rounded-circle animate-pulse" aria-label="Add to wishlist">
                <i class="ci-heart fs-base animate-target"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="col">
          <div class="animate-underline mb-sm-2">
            <a class="hover-effect-opacity ratio ratio-1x1 d-block mb-3" href="shop-product-furniture">
              <img src="/assets/img/shop/furniture/08.png" class="hover-effect-target opacity-100" alt="Product">
              <img src="/assets/img/shop/furniture/08-hover.jpg" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
            </a>
            <div class="d-flex gap-2 mb-3">
              <input type="radio" class="btn-check" name="colors-8" id="color-8-1" checked>
              <label for="color-8-1" class="btn btn-color fs-base" style="color: #305853">
                <span class="visually-hidden">Green</span>
              </label>
              <input type="radio" class="btn-check" name="colors-8" id="color-8-2">
              <label for="color-8-2" class="btn btn-color fs-base" style="color: #34598f">
                <span class="visually-hidden">Blue</span>
              </label>
            </div>
            <h3 class="mb-2">
              <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture">
                <span class="animate-target">Armchair with wooden legs 60x100 cm</span>
              </a>
            </h3>
            <div class="h6">$320.50</div>
            <div class="d-flex gap-2">
              <button type="button" class="btn btn-dark w-100 rounded-pill px-3">Add to cart</button>
              <button type="button" class="btn btn-icon btn-secondary rounded-circle animate-pulse" aria-label="Add to wishlist">
                <i class="ci-heart fs-base animate-target"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Item (new) -->
        <div class="col">
          <div class="animate-underline mb-sm-2">
            <a class="hover-effect-opacity ratio ratio-1x1 d-block mb-3" href="shop-product-furniture">
              <div class="position-absolute top-0 start-0 z-2 mt-2 mt-sm-3 ms-2 ms-sm-3">
                <span class="badge text-bg-info">New</span>
              </div>
              <img src="/assets/img/shop/furniture/09.png" class="hover-effect-target opacity-100" alt="Product">
              <img src="/assets/img/shop/furniture/09-hover.jpg" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
            </a>
            <div class="d-flex gap-2 mb-3">
              <input type="radio" class="btn-check" name="colors-9" id="color-9-1" checked>
              <label for="color-9-1" class="btn btn-color fs-base" style="color: #d8a87c">
                <span class="visually-hidden">Brown</span>
              </label>
              <input type="radio" class="btn-check" name="colors-9" id="color-9-2">
              <label for="color-9-2" class="btn btn-color fs-base" style="color: #373b42">
                <span class="visually-hidden">Dark gray</span>
              </label>
            </div>
            <h3 class="mb-2">
              <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture">
                <span class="animate-target">Leather office chair with one leg</span>
              </a>
            </h3>
            <div class="h6">$345.50</div>
            <div class="d-flex gap-2">
              <button type="button" class="btn btn-dark w-100 rounded-pill px-3">Add to cart</button>
              <button type="button" class="btn btn-icon btn-secondary rounded-circle animate-pulse" aria-label="Add to wishlist">
                <i class="ci-heart fs-base animate-target"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="col">
          <div class="animate-underline mb-sm-2">
            <a class="hover-effect-opacity ratio ratio-1x1 d-block mb-3" href="shop-product-furniture">
              <img src="/assets/img/shop/furniture/10.png" class="hover-effect-target opacity-100" alt="Product">
              <img src="/assets/img/shop/furniture/10-hover.jpg" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
            </a>
            <div class="d-flex gap-2 mb-3">
              <input type="radio" class="btn-check" name="colors-10" id="color-10-1" checked>
              <label for="color-10-1" class="btn btn-color fs-base" style="color: #677382">
                <span class="visually-hidden">Navy blue</span>
              </label>
              <input type="radio" class="btn-check" name="colors-10" id="color-10-2">
              <label for="color-10-2" class="btn btn-color fs-base" style="color: #919384">
                <span class="visually-hidden">Gray</span>
              </label>
              <input type="radio" class="btn-check" name="colors-10" id="color-10-3">
              <label for="color-10-3" class="btn btn-color fs-base" style="color: #b2b8c0">
                <span class="visually-hidden">Light gray</span>
              </label>
            </div>
            <h3 class="mb-2">
              <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture">
                <span class="animate-target">Navy blue low sofa for relaxation</span>
              </a>
            </h3>
            <div class="h6">$1,250.00</div>
            <div class="d-flex gap-2">
              <button type="button" class="btn btn-dark w-100 rounded-pill px-3">Add to cart</button>
              <button type="button" class="btn btn-icon btn-secondary rounded-circle animate-pulse" aria-label="Add to wishlist">
                <i class="ci-heart fs-base animate-target"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="col">
          <div class="animate-underline mb-sm-2">
            <a class="hover-effect-opacity ratio ratio-1x1 d-block mb-3" href="shop-product-furniture">
              <img src="/assets/img/shop/furniture/11.png" class="hover-effect-target opacity-100" alt="Product">
              <img src="/assets/img/shop/furniture/11-hover.jpg" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
            </a>
            <div class="d-flex gap-2 mb-3">
              <input type="radio" class="btn-check" name="colors-11" id="color-11-1" checked>
              <label for="color-11-1" class="btn btn-color fs-base" style="color: #677382">
                <span class="visually-hidden">Green</span>
              </label>
              <input type="radio" class="btn-check" name="colors-11" id="color-11-2">
              <label for="color-11-2" class="btn btn-color fs-base" style="color: #548294">
                <span class="visually-hidden">Blue</span>
              </label>
            </div>
            <h3 class="mb-2">
              <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture">
                <span class="animate-target">Armchair with wooden legs 70x120 cm</span>
              </a>
            </h3>
            <div class="h6">$269.99</div>
            <div class="d-flex gap-2">
              <button type="button" class="btn btn-dark w-100 rounded-pill px-3">Add to cart</button>
              <button type="button" class="btn btn-icon btn-secondary rounded-circle animate-pulse" aria-label="Add to wishlist">
                <i class="ci-heart fs-base animate-target"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Item (out of stock) -->
        <div class="col">
          <div class="animate-underline mb-sm-2">
            <a class="hover-effect-opacity ratio ratio-1x1 d-block mb-3 opacity-50 pe-none" href="shop-product-furniture">
              <img src="/assets/img/shop/furniture/12.png" class="hover-effect-target opacity-100" alt="Product">
              <img src="/assets/img/shop/furniture/12-hover.jpg" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
            </a>
            <div class="d-flex gap-2 mb-3">
              <input type="radio" class="btn-check" name="colors-12" id="color-12-1" checked>
              <label for="color-12-1" class="btn btn-color fs-base" style="color: #af8d6a">
                <span class="visually-hidden">Wooden</span>
              </label>
            </div>
            <h3 class="mb-2">
              <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture">
                <span class="animate-target">Wooden shelf for decor elements</span>
              </a>
            </h3>
            <div class="h6">$278.00</div>
            <div class="d-flex gap-2">
              <button type="button" class="btn btn-secondary min-w-0 w-100 rounded-pill px-3">
                <span class="text-truncate">Notify of availability</span>
              </button>
              <button type="button" class="btn btn-icon btn-secondary rounded-circle animate-pulse" aria-label="Add to wishlist">
                <i class="ci-heart fs-base animate-target"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="col">
          <div class="animate-underline mb-sm-2">
            <a class="hover-effect-opacity ratio ratio-1x1 d-block mb-3" href="shop-product-furniture">
              <img src="/assets/img/shop/furniture/13.png" class="hover-effect-target opacity-100" alt="Product">
              <img src="/assets/img/shop/furniture/13-hover.jpg" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
            </a>
            <div class="d-flex gap-2 mb-3">
              <input type="radio" class="btn-check" name="colors-13" id="color-13-1" checked>
              <label for="color-13-1" class="btn btn-color fs-base" style="color: #5b92b0">
                <span class="visually-hidden">Blue</span>
              </label>
              <input type="radio" class="btn-check" name="colors-13" id="color-13-2">
              <label for="color-13-2" class="btn btn-color fs-base" style="color: #e0e5eb">
                <span class="visually-hidden">White</span>
              </label>
              <input type="radio" class="btn-check" name="colors-13" id="color-13-3">
              <label for="color-13-3" class="btn btn-color fs-base" style="color: #373b42">
                <span class="visually-hidden">Black</span>
              </label>
            </div>
            <h3 class="mb-2">
              <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture">
                <span class="animate-target">Aluminium foldable desk lamp</span>
              </a>
            </h3>
            <div class="h6">$89.99</div>
            <div class="d-flex gap-2">
              <button type="button" class="btn btn-dark w-100 rounded-pill px-3">Add to cart</button>
              <button type="button" class="btn btn-icon btn-secondary rounded-circle animate-pulse" aria-label="Add to wishlist">
                <i class="ci-heart fs-base animate-target"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="col">
          <div class="animate-underline mb-sm-2">
            <a class="hover-effect-opacity ratio ratio-1x1 d-block mb-3" href="shop-product-furniture">
              <img src="/assets/img/shop/furniture/14.png" class="hover-effect-target opacity-100" alt="Product">
              <img src="/assets/img/shop/furniture/14-hover.jpg" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
            </a>
            <div class="d-flex gap-2 mb-3">
              <input type="radio" class="btn-check" name="colors-14" id="color-14-1" checked>
              <label for="color-14-1" class="btn btn-color fs-base" style="color: #6a6662">
                <span class="visually-hidden">Dark gray</span>
              </label>
              <input type="radio" class="btn-check" name="colors-14" id="color-14-2">
              <label for="color-14-2" class="btn btn-color fs-base" style="color: #b2b8c0">
                <span class="visually-hidden">Light gray</span>
              </label>
            </div>
            <h3 class="mb-2">
              <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture">
                <span class="animate-target">Modern lounge couch on wooden frame</span>
              </a>
            </h3>
            <div class="h6">$638.00</div>
            <div class="d-flex gap-2">
              <button type="button" class="btn btn-dark w-100 rounded-pill px-3">Add to cart</button>
              <button type="button" class="btn btn-icon btn-secondary rounded-circle animate-pulse" aria-label="Add to wishlist">
                <i class="ci-heart fs-base animate-target"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="col">
          <div class="animate-underline mb-sm-2">
            <a class="hover-effect-opacity ratio ratio-1x1 d-block mb-3" href="shop-product-furniture">
              <img src="/assets/img/shop/furniture/15.png" class="hover-effect-target opacity-100" alt="Product">
              <img src="/assets/img/shop/furniture/15-hover.jpg" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
            </a>
            <div class="d-flex gap-2 mb-3">
              <input type="radio" class="btn-check" name="colors-15" id="color-15-1" checked>
              <label for="color-15-1" class="btn btn-color fs-base" style="color: #e0e5eb">
                <span class="visually-hidden">White</span>
              </label>
            </div>
            <h3 class="mb-2">
              <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture">
                <span class="animate-target">Adjustable hardwire wall sconce</span>
              </a>
            </h3>
            <div class="h6">$74.00</div>
            <div class="d-flex gap-2">
              <button type="button" class="btn btn-dark w-100 rounded-pill px-3">Add to cart</button>
              <button type="button" class="btn btn-icon btn-secondary rounded-circle animate-pulse" aria-label="Add to wishlist">
                <i class="ci-heart fs-base animate-target"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="col">
          <div class="animate-underline mb-sm-2">
            <a class="hover-effect-opacity ratio ratio-1x1 d-block mb-3" href="shop-product-furniture">
              <img src="/assets/img/shop/furniture/16.png" class="hover-effect-target opacity-100" alt="Product">
              <img src="/assets/img/shop/furniture/16-hover.jpg" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
            </a>
            <div class="d-flex gap-2 mb-3">
              <input type="radio" class="btn-check" name="colors-16" id="color-16-1" checked>
              <label for="color-16-1" class="btn btn-color fs-base" style="color: #b2b8c0">
                <span class="visually-hidden">Light gray</span>
              </label>
              <input type="radio" class="btn-check" name="colors-16" id="color-16-2">
              <label for="color-16-2" class="btn btn-color fs-base" style="color: #6a6662">
                <span class="visually-hidden">Dark gray</span>
              </label>
            </div>
            <h3 class="mb-2">
              <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture">
                <span class="animate-target">Soft armchair with wooden legs</span>
              </a>
            </h3>
            <div class="h6">$215.00</div>
            <div class="d-flex gap-2">
              <button type="button" class="btn btn-dark w-100 rounded-pill px-3">Add to cart</button>
              <button type="button" class="btn btn-icon btn-secondary rounded-circle animate-pulse" aria-label="Add to wishlist">
                <i class="ci-heart fs-base animate-target"></i>
              </button>
            </div>
          </div>
        </div>
      </div>


      <!-- Pagination -->
      <div class="text-center pt-5 mt-md-2 mt-lg-3 mt-xl-4 mb-xxl-3 mx-auto" style="max-width: 306px">
        <p class="fs-sm">Showing 16 from 64</p>
        <div class="progress mb-3" role="progressbar" aria-label="Items shown" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
          <div class="progress-bar bg-dark rounded-pill d-none-dark" style="width: 25%"></div>
          <div class="progress-bar bg-light rounded-pill d-none d-block-dark" style="width: 25%"></div>
        </div>
        <div class="nav justify-content-center">
          <a class="nav-link animate-underline fs-base pt-2 pb-0 px-0" href="#!">
            <span class="animate-target my-1 me-2">Show more</span>
            <i class="ci-chevron-down fs-lg"></i>
          </a>
        </div>
      </div>
    </div>
  </main>

  <!-- Page specific scripts -->
  <script>

    // Dynamically update count number of selected items inside filter dropdown
    window.onload = () => {
      updateFilterCount('categoryCount')
      updateFilterCount('categoryCount-2')
    }

    const updateFilterCount = (countId) => {
      const checkedCheckboxes = document.querySelectorAll(`[data-count-id="${countId}"]:checked`)
      const countElement = document.getElementById(countId)
      if (checkedCheckboxes.length > 0) {
          countElement.textContent = '(' + checkedCheckboxes.length + ')'
      } else {
          countElement.textContent = ''
      }
    }


    // Switch between product and room view
    const viewSwitcher = document.getElementById('viewShwitcher')
    const productThumbs = Array.from(
      document
        .getElementById('productGrid')
        .querySelectorAll('.hover-effect-opacity')
    )

    viewSwitcher.addEventListener('click', (e) => {
      const target = e.target
      if (target.classList.contains('nav-link')) {
        viewSwitcher
          .querySelectorAll('.nav-link.active')
          .forEach((navLink) => navLink.classList.remove('active'))
        target.classList.add('active')
        const id = target.getAttribute('id')
        productThumbs.forEach((thumb) => {
          const images = thumb.querySelectorAll('img')
          if (id === 'showRoom') {
            images[0].classList.remove('opacity-100')
            images[0].classList.add('opacity-0')
            images[1].classList.remove('opacity-0')
            images[1].classList.add('opacity-100')
          } else if (id === 'showProduct') {
            images[0].classList.remove('opacity-0')
            images[0].classList.add('opacity-100')
            images[1].classList.remove('opacity-100')
            images[1].classList.add('opacity-0')
          }
        })
      }
    })
  </script>

</x-www-layout>
