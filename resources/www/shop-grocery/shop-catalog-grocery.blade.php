<x-www-layout>
  <!-- Search collapse available on screens < 768px wide (md breakpoint) -->
  <div class="collapse d-md-none" id="searchBar">
    <div class="container pt-2 pb-3">
      <div class="position-relative">
      <i class="ci-search position-absolute top-50 translate-middle-y d-flex fs-lg ms-3"></i>
      <input type="search" class="form-control form-icon-start rounded-pill" placeholder="Search for products" data-autofocus="collapse">
      </div>
    </div>
  </div>
  <!-- Page content -->
  <main class="content-wrapper">

    <!-- Breadcrumb -->
    <nav class="container pt-lg-2 my-3 my-lg-4" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="home-grocery.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Catalog with sidebar filters</li>
      </ol>
    </nav>


    <!-- Page title -->
    <h1 class="h3 container pb-2 pb-md-3 pb-lg-4">Shop catalog</h1>


    <!-- Products grid + Sidebar with filters -->
    <section class="container pb-5 mb-2 mb-sm-3 mb-lg-4 mb-xl-5">
      <div class="row">

        <!-- Filter sidebar that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
        <aside class="col-lg-3">
          <div class="offcanvas-lg offcanvas-start pe-lg-4" id="filterSidebar">
            <div class="offcanvas-header py-3">
              <h5 class="offcanvas-title">Filter products</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#filterSidebar" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body flex-column pt-2 py-lg-0">

              <!-- Categories -->
              <div class="accordion pb-2" id="categories">

                <!-- Category -->
                <div class="accordion-item border-0 mb-3">
                  <h4 class="accordion-header" id="headingBakery">
                    <button type="button" class="accordion-button collapsed p-0" data-bs-toggle="collapse" data-bs-target="#bakery" aria-expanded="false" aria-controls="bakery">
                      <span class="d-flex align-items-center justify-content-center bg-body-secondary rounded-circle me-3" style="width: 56px; height: 56px">
                        <img src="/assets/img/shop/grocery/categories/01.png" width="40" alt="Image">
                      </span>
                      <span class="fs-sm">Bakery &amp; bread</span>
                    </button>
                  </h4>
                  <div class="accordion-collapse collapse" id="bakery" aria-labelledby="headingBakery" data-bs-parent="#categories">
                    <div class="accordion-body ps-4 pb-0">
                      <ul class="nav flex-column gap-2 border-start px-4 pb-1 ms-1 mb-0">
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Shop all</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Bread</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Pastries</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Bakery cookies</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Cupcakes</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Buns</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Rolls</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <!-- Category -->
                <div class="accordion-item border-0 mb-3">
                  <h4 class="accordion-header" id="headingVegetables">
                    <button type="button" class="accordion-button collapsed p-0" data-bs-toggle="collapse" data-bs-target="#vegetables" aria-expanded="false" aria-controls="vegetables">
                      <span class="d-flex align-items-center justify-content-center bg-body-tertiary rounded-circle me-3" style="width: 56px; height: 56px">
                        <img src="/assets/img/shop/grocery/categories/02.png" width="40" alt="Image">
                      </span>
                      <span class="fs-sm">Vegetables</span>
                    </button>
                  </h4>
                  <div class="accordion-collapse collapse" id="vegetables" aria-labelledby="headingVegetables" data-bs-parent="#categories">
                    <div class="accordion-body ps-4 pb-0">
                      <ul class="nav flex-column gap-2 border-start px-4 pb-1 ms-1 mb-0">
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Shop all</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Leafy greens</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Root vegetables</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Allium vegetables</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Peppers and tomatoes</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Cruciferous</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Seasonal squashes</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <!-- Category -->
                <div class="accordion-item border-0 mb-3">
                  <h4 class="accordion-header" id="headingFruits">
                    <button type="button" class="accordion-button collapsed p-0" data-bs-toggle="collapse" data-bs-target="#fruits" aria-expanded="false" aria-controls="fruits">
                      <span class="d-flex align-items-center justify-content-center bg-body-tertiary rounded-circle me-3" style="width: 56px; height: 56px">
                        <img src="/assets/img/shop/grocery/categories/03.png" width="40" alt="Image">
                      </span>
                      <span class="fs-sm">Fresh fruits</span>
                    </button>
                  </h4>
                  <div class="accordion-collapse collapse" id="fruits" aria-labelledby="headingFruits" data-bs-parent="#categories">
                    <div class="accordion-body ps-4 pb-0">
                      <ul class="nav flex-column gap-2 border-start px-4 pb-1 ms-1 mb-0">
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Shop all</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Citrus fruits</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Berries</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Tropical fruits</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Stone fruits</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Exotic fruits</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Melons</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <!-- Category -->
                <div class="accordion-item border-0 mb-3">
                  <h4 class="accordion-header" id="headingItalian">
                    <button type="button" class="accordion-button collapsed p-0" data-bs-toggle="collapse" data-bs-target="#italian" aria-expanded="false" aria-controls="italian">
                      <span class="d-flex align-items-center justify-content-center bg-body-tertiary rounded-circle me-3" style="width: 56px; height: 56px">
                        <img src="/assets/img/shop/grocery/categories/04.png" width="40" alt="Image">
                      </span>
                      <span class="fs-sm">Meet Italian dinner</span>
                    </button>
                  </h4>
                  <div class="accordion-collapse collapse" id="italian" aria-labelledby="headingItalian" data-bs-parent="#categories">
                    <div class="accordion-body ps-4 pb-0">
                      <ul class="nav flex-column gap-2 border-start px-4 pb-1 ms-1 mb-0">
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Shop all</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Pasta &amp; sauces</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Italian cheeses</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Italian meats</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Antipasti &amp; appetizers</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Fresh produce</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Desserts &amp; beverages</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <!-- Category -->
                <div class="accordion-item border-0 mb-3">
                  <h4 class="accordion-header" id="headingBeverages">
                    <button type="button" class="accordion-button collapsed p-0" data-bs-toggle="collapse" data-bs-target="#beverages" aria-expanded="false" aria-controls="beverages">
                      <span class="d-flex align-items-center justify-content-center bg-body-tertiary rounded-circle me-3" style="width: 56px; height: 56px">
                        <img src="/assets/img/shop/grocery/categories/05.png" width="40" alt="Image">
                      </span>
                      <span class="fs-sm">Beverages</span>
                    </button>
                  </h4>
                  <div class="accordion-collapse collapse" id="beverages" aria-labelledby="headingBeverages" data-bs-parent="#categories">
                    <div class="accordion-body ps-4 pb-0">
                      <ul class="nav flex-column gap-2 border-start px-4 pb-1 ms-1 mb-0">
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Shop all</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Soft drinks</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Juices</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Sports &amp; energy drinks</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Tea and coffee</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Water</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Alcoholic beverages</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <!-- Category -->
                <div class="accordion-item border-0 mb-3">
                  <h4 class="accordion-header" id="headingMeat">
                    <button type="button" class="accordion-button collapsed p-0" data-bs-toggle="collapse" data-bs-target="#meat" aria-expanded="false" aria-controls="meat">
                      <span class="d-flex align-items-center justify-content-center bg-body-tertiary rounded-circle me-3" style="width: 56px; height: 56px">
                        <img src="/assets/img/shop/grocery/categories/06.png" width="40" alt="Image">
                      </span>
                      <span class="fs-sm">Meat products</span>
                    </button>
                  </h4>
                  <div class="accordion-collapse collapse" id="meat" aria-labelledby="headingMeat" data-bs-parent="#categories">
                    <div class="accordion-body ps-4 pb-0">
                      <ul class="nav flex-column gap-2 border-start px-4 pb-1 ms-1 mb-0">
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Shop all</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Fresh meat</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Processed meat</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Seafood</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Poultry products</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Exotic meats</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Prepared meat</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <!-- Category -->
                <div class="accordion-item border-0 mb-3">
                  <h4 class="accordion-header" id="headingSauces">
                    <button type="button" class="accordion-button collapsed p-0" data-bs-toggle="collapse" data-bs-target="#sauces" aria-expanded="false" aria-controls="sauces">
                      <span class="d-flex align-items-center justify-content-center bg-body-tertiary rounded-circle me-3" style="width: 56px; height: 56px">
                        <img src="/assets/img/shop/grocery/categories/07.png" width="40" alt="Image">
                      </span>
                      <span class="fs-sm">Sauces and ketchup</span>
                    </button>
                  </h4>
                  <div class="accordion-collapse collapse" id="sauces" aria-labelledby="headingSauces" data-bs-parent="#categories">
                    <div class="accordion-body ps-4 pb-0">
                      <ul class="nav flex-column gap-2 border-start px-4 pb-1 ms-1 mb-0">
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Shop all</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Tomato-based sauces</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">International sauces</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Condiments</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Salad dressings</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Hot sauces</a>
                        </li>
                        <li class="nav-item pb-1 ps-3 ms-1">
                          <a class="nav-link hover-effect-underline fw-normal p-0" href="#!">Specialty sauces</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>


              <!-- Filters -->
              <div class="accordion border-top mb-4">

                <!-- Price -->
                <div class="accordion-item">
                  <h4 class="accordion-header" id="headingPrice">
                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#price" aria-expanded="false" aria-controls="price">
                      Price
                    </button>
                  </h4>
                  <div class="accordion-collapse collapse" id="price" aria-labelledby="headingPrice">
                    <div class="accordion-body">
                      <div class="range-slider ps-1" data-range-slider='{"startMin": 1, "startMax": 30, "min": 0, "max": 100, "step": 1, "tooltipPrefix": "$"}' aria-labelledby="headingPrice">
                        <div class="range-slider-ui"></div>
                        <div class="d-flex align-items-center">
                          <div class="position-relative w-50">
                            <i class="ci-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                            <input type="number" class="form-control form-icon-start" min="0" data-range-slider-min>
                          </div>
                          <i class="ci-minus text-body-emphasis mx-2"></i>
                          <div class="position-relative w-50">
                            <i class="ci-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                            <input type="number" class="form-control form-icon-start" min="0"  data-range-slider-max>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Brand -->
                <div class="accordion-item">
                  <h4 class="accordion-header" id="headingBrand">
                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#brand" aria-expanded="false" aria-controls="brand">
                      Brand
                    </button>
                  </h4>
                  <div class="accordion-collapse collapse" id="brand" aria-labelledby="headingBrand">
                    <div class="accordion-body" data-filter-list='{"searchClass": "brands-search", "listClass": "brands-list", "valueNames": ["form-check-label"]}'>
                      <div class="position-relative mb-3">
                        <i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                        <input type="search" class="brands-search form-control form-icon-start" placeholder="Search">
                      </div>
                      <div style="height: 210px" data-simplebar data-simplebar-auto-hide="false">
                        <div class="brands-list d-flex flex-column gap-2">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="coca-cola">
                            <label for="coca-cola" class="form-check-label text-body-emphasis">Coca-Cola</label>
                          </div>
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="pepsi">
                            <label for="pepsi" class="form-check-label text-body-emphasis">Pepsi</label>
                          </div>
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="nestle" checked>
                            <label for="nestle" class="form-check-label text-body-emphasis">Nestlé</label>
                          </div>
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="hersheys">
                            <label for="hersheys" class="form-check-label text-body-emphasis">Hershey's</label>
                          </div>
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="bilabong">
                            <label for="bilabong" class="form-check-label text-body-emphasis">General Mills</label>
                          </div>
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="barilla">
                            <label for="barilla" class="form-check-label text-body-emphasis">Barilla</label>
                          </div>
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="kraft">
                            <label for="kraft" class="form-check-label text-body-emphasis">Kraft Heinz</label>
                          </div>
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="unilever">
                            <label for="unilever" class="form-check-label text-body-emphasis">Unilever</label>
                          </div>
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="danone">
                            <label for="danone" class="form-check-label text-body-emphasis">Danone</label>
                          </div>
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="Campbell">
                            <label for="Campbell" class="form-check-label text-body-emphasis">Campbell</label>
                          </div>
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="basso">
                            <label for="basso" class="form-check-label text-body-emphasis">Basso</label>
                          </div>
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="kelloggs">
                            <label for="kelloggs" class="form-check-label text-body-emphasis">Kellogg's</label>
                          </div>
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="mondelez">
                            <label for="mondelez" class="form-check-label text-body-emphasis">Mondelez</label>
                          </div>
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="pepper">
                            <label for="pepper" class="form-check-label text-body-emphasis">Dr Pepper Snapple</label>
                          </div>
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="heineken">
                            <label for="heineken" class="form-check-label text-body-emphasis">Heineken</label>
                          </div>
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="mars">
                            <label for="mars" class="form-check-label text-body-emphasis">Mars</label>
                          </div>
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="pernod">
                            <label for="pernod" class="form-check-label text-body-emphasis">Pernod Ricard</label>
                          </div>
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="ferrero">
                            <label for="ferrero" class="form-check-label text-body-emphasis">Ferrero</label>
                          </div>
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="red-bull">
                            <label for="red-bull" class="form-check-label text-body-emphasis">Red Bull</label>
                          </div>
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="suntory">
                            <label for="suntory" class="form-check-label text-body-emphasis">Suntory</label>
                          </div>
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="diageo">
                            <label for="diageo" class="form-check-label text-body-emphasis">Diageo</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Special diet -->
                <div class="accordion-item">
                  <h4 class="accordion-header" id="headingDiet">
                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#diet" aria-expanded="false" aria-controls="diet">
                      Special diet needs
                    </button>
                  </h4>
                  <div class="accordion-collapse collapse" id="diet" aria-labelledby="headingDiet">
                    <div class="accordion-body">
                      <div class="d-flex flex-column gap-2">
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="gluten-free" checked>
                          <label for="gluten-free" class="form-check-label text-body-emphasis">Gluten-free</label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="plant-based">
                          <label for="plant-based" class="form-check-label text-body-emphasis">Plant based</label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="vegan">
                          <label for="vegan" class="form-check-label text-body-emphasis">Vegan</label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="keto">
                          <label for="keto" class="form-check-label text-body-emphasis">Keto diet</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Status -->
                <div class="accordion-item">
                  <h4 class="accordion-header" id="headingStatus">
                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#status" aria-expanded="false" aria-controls="status">
                      Status
                    </button>
                  </h4>
                  <div class="accordion-collapse collapse" id="status" aria-labelledby="headingStatus">
                    <div class="accordion-body">
                      <div class="d-flex flex-column gap-2">
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="instock">
                          <label for="instock" class="form-check-label text-body-emphasis">In stock</label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="sale" checked>
                          <label for="sale" class="form-check-label text-body-emphasis">% Sale</label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="delivery">
                          <label for="delivery" class="form-check-label text-body-emphasis">Free delivery</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Banner -->
              <div class="rounded-4 overflow-hidden" style="background-color: #a6cddc" data-bs-theme="light">
                <div class="pt-3 px-3 mt-3 mx-3">
                  <h4 class="mb-2 mb-xl-3">Make breakfast healthy and easy</h4>
                  <div class="nav">
                    <a class="nav-link animate-underline stretched-link px-0" href="#!">
                      <span class="animate-target">Shop now</span>
                      <i class="ci-chevron-right fs-base mt-1 ms-1"></i>
                    </a>
                  </div>
                </div>
                <div class="ratio mt-n2" style="--cz-aspect-ratio: calc(240 / 282 * 100%)">
                  <img src="/assets/img/shop/grocery/banner.jpg" alt="Banner">
                </div>
              </div>
            </div>
          </div>
        </aside>


        <!-- Product grid -->
        <div class="col-lg-9">

          <!-- Sorting -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="fs-sm text-body-emphasis text-nowrap mb-2 mb-sm-0">Found <span class="fw-semibold">256</span> items</div>
            <div class="d-flex align-items-center text-nowrap">
              <label class="form-label fw-semibold mb-0 me-2">Sort by:</label>
              <div style="width: 200px">
                <select class="form-select rounded-pill" data-select='{
                  "removeItemButton": false,
                  "classNames": {
                    "containerInner": "form-select rounded-pill"
                  }
                }'>
                  <option value="Relevance">Relevance</option>
                  <option value="Popularity">Popularity</option>
                  <option value="Price: Low to High">Price: Low to High</option>
                  <option value="Price: High to Low">Price: High to Low</option>
                  <option value="Newest Arrivals">Newest Arrivals</option>
                </select>
              </div>
            </div>
          </div>

          <!-- Selected filters -->
          <div class="d-flex flex-wrap gap-2 mb-4">
            <button type="button" class="btn btn-sm btn-secondary">
              <i class="ci-close fs-sm ms-n1 me-1"></i>
              Sale
            </button>
            <button type="button" class="btn btn-sm btn-secondary">
              <i class="ci-close fs-sm ms-n1 me-1"></i>
              Gluten-free
            </button>
            <button type="button" class="btn btn-sm btn-secondary">
              <i class="ci-close fs-sm ms-n1 me-1"></i>
              Nestlé
            </button>
            <button type="button" class="btn btn-sm btn-secondary">
              <i class="ci-close fs-sm ms-n1 me-1"></i>
              $1 - $30
            </button>
            <button type="button" class="btn btn-sm btn-secondary bg-transparent border-0 text-decoration-underline px-0 ms-2">
              Clear all
            </button>
          </div>

          <!-- Grid -->
          <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-3 row-cols-xl-4 g-4">

            <!-- Item -->
            <div class="col">
              <div class="card product-card h-100 bg-transparent border-0 shadow-none">
                <div class="position-relative z-2">
                  <button type="button" class="btn btn-icon btn-sm btn-secondary animate-pulse fs-sm bg-body border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                    <i class="ci-heart animate-target"></i>
                  </button>
                  <a class="d-block p-2 p-lg-3" href="shop-product-grocery.html">
                    <div class="ratio" style="--cz-aspect-ratio: calc(160 / 191 * 100%)">
                      <img src="/assets/img/shop/grocery/01.png" alt="Image">
                    </div>
                  </a>
                  <div class="position-absolute w-100 start-0 bottom-0">
                    <div class="d-flex justify-content-end px-2 px-lg-3 pb-2 pb-lg-3">
                      <div class="count-input count-input-collapsible collapsed justify-content-between w-100 bg-transparent border-0 rounded-2">
                        <button type="button" class="btn btn-icon btn-sm btn-primary" data-decrement aria-label="Decrement quantity">
                          <i class="ci-minus fs-sm"></i>
                        </button>
                        <input type="number" class="form-control form-control-sm bg-primary text-white w-100" value="0" min="0" readonly>
                        <button type="button" class="product-card-button btn btn-icon btn-sm btn-secondary ms-auto" data-increment aria-label="Increment quantity">
                          <span data-count-input-value></span>
                          <i class="ci-plus fs-sm"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-2">
                  <div class="h6 mb-2">$2.15</div>
                  <h3 class="fs-sm lh-base mb-0">
                    <a class="hover-effect-underline fw-normal" href="shop-product-grocery.html">Muesli Fitness Energy, gluten free</a>
                  </h3>
                </div>
                <div class="fs-xs text-body-secondary px-1 px-md-2 px-lg-3 pb-2 pb-md-3">500g</div>
              </div>
            </div>

            <!-- Item -->
            <div class="col">
              <div class="card product-card h-100 bg-transparent border-0 shadow-none">
                <div class="position-relative z-2">
                  <span class="badge text-bg-danger position-absolute top-0 start-0 z-2 mt-1 mt-sm-2 ms-1 ms-sm-2">-30%</span>
                  <button type="button" class="btn btn-icon btn-sm btn-secondary animate-pulse fs-sm bg-body border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                    <i class="ci-heart animate-target"></i>
                  </button>
                  <a class="d-block p-2 p-lg-3" href="shop-product-grocery.html">
                    <div class="ratio" style="--cz-aspect-ratio: calc(160 / 191 * 100%)">
                      <img src="/assets/img/shop/grocery/02.png" alt="Image">
                    </div>
                  </a>
                  <div class="position-absolute w-100 start-0 bottom-0">
                    <div class="d-flex justify-content-end px-2 px-lg-3 pb-2 pb-lg-3">
                      <div class="count-input count-input-collapsible collapsed justify-content-between w-100 bg-transparent border-0 rounded-2">
                        <button type="button" class="btn btn-icon btn-sm btn-primary" data-decrement aria-label="Decrement quantity">
                          <i class="ci-minus fs-sm"></i>
                        </button>
                        <input type="number" class="form-control form-control-sm bg-primary text-white w-100" value="0" min="0" readonly>
                        <button type="button" class="product-card-button btn btn-icon btn-sm btn-secondary ms-auto" data-increment aria-label="Increment quantity">
                          <span data-count-input-value></span>
                          <i class="ci-plus fs-sm"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-2">
                  <div class="h6 mb-2">$3.12 <del class="fs-sm fw-normal text-body-tertiary ms-1">$4.05</del></div>
                  <h3 class="fs-sm lh-base mb-0">
                    <a class="hover-effect-underline fw-normal" href="shop-product-grocery.html">Fresh orange Klementina, Spain</a>
                  </h3>
                </div>
                <div class="fs-xs text-body-secondary px-1 px-md-2 px-lg-3 pb-2 pb-md-3">1kg</div>
              </div>
            </div>

            <!-- Item -->
            <div class="col">
              <div class="card product-card h-100 bg-transparent border-0 shadow-none">
                <div class="position-relative z-2">
                  <button type="button" class="btn btn-icon btn-sm btn-secondary animate-pulse fs-sm bg-body border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                    <i class="ci-heart animate-target"></i>
                  </button>
                  <a class="d-block p-2 p-lg-3" href="shop-product-grocery.html">
                    <div class="ratio" style="--cz-aspect-ratio: calc(160 / 191 * 100%)">
                      <img src="/assets/img/shop/grocery/03.png" alt="Image">
                    </div>
                  </a>
                  <div class="position-absolute w-100 start-0 bottom-0">
                    <div class="d-flex justify-content-end px-2 px-lg-3 pb-2 pb-lg-3">
                      <div class="count-input count-input-collapsible collapsed justify-content-between w-100 bg-transparent border-0 rounded-2">
                        <button type="button" class="btn btn-icon btn-sm btn-primary" data-decrement aria-label="Decrement quantity">
                          <i class="ci-minus fs-sm"></i>
                        </button>
                        <input type="number" class="form-control form-control-sm bg-primary text-white w-100" value="0" min="0" readonly>
                        <button type="button" class="product-card-button btn btn-icon btn-sm btn-secondary ms-auto" data-increment aria-label="Increment quantity">
                          <span data-count-input-value></span>
                          <i class="ci-plus fs-sm"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-2">
                  <div class="h6 mb-2">$0.80</div>
                  <h3 class="fs-sm lh-base mb-0">
                    <a class="hover-effect-underline fw-normal" href="shop-product-grocery.html">Pepsi soda classic, can</a>
                  </h3>
                </div>
                <div class="fs-xs text-body-secondary px-1 px-md-2 px-lg-3 pb-2 pb-md-3">330ml</div>
              </div>
            </div>

            <!-- Item -->
            <div class="col">
              <div class="card product-card h-100 bg-transparent border-0 shadow-none">
                <div class="position-relative z-2">
                  <button type="button" class="btn btn-icon btn-sm btn-secondary animate-pulse fs-sm bg-body border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                    <i class="ci-heart animate-target"></i>
                  </button>
                  <a class="d-block p-2 p-lg-3" href="shop-product-grocery.html">
                    <div class="ratio" style="--cz-aspect-ratio: calc(160 / 191 * 100%)">
                      <img src="/assets/img/shop/grocery/04.png" alt="Image">
                    </div>
                  </a>
                  <div class="position-absolute w-100 start-0 bottom-0">
                    <div class="d-flex justify-content-end px-2 px-lg-3 pb-2 pb-lg-3">
                      <div class="count-input count-input-collapsible collapsed justify-content-between w-100 bg-transparent border-0 rounded-2">
                        <button type="button" class="btn btn-icon btn-sm btn-primary" data-decrement aria-label="Decrement quantity">
                          <i class="ci-minus fs-sm"></i>
                        </button>
                        <input type="number" class="form-control form-control-sm bg-primary text-white w-100" value="0" min="0" readonly>
                        <button type="button" class="product-card-button btn btn-icon btn-sm btn-secondary ms-auto" data-increment aria-label="Increment quantity">
                          <span data-count-input-value></span>
                          <i class="ci-plus fs-sm"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-2">
                  <div class="h6 mb-2">$2.99</div>
                  <h3 class="fs-sm lh-base mb-0">
                    <a class="hover-effect-underline fw-normal" href="shop-product-grocery.html">Mozzarella mini cheese Granaloro</a>
                  </h3>
                </div>
                <div class="fs-xs text-body-secondary px-1 px-md-2 px-lg-3 pb-2 pb-md-3">250g</div>
              </div>
            </div>

            <!-- Item -->
            <div class="col">
              <div class="card product-card h-100 bg-transparent border-0 shadow-none">
                <div class="position-relative z-2">
                  <button type="button" class="btn btn-icon btn-sm btn-secondary animate-pulse fs-sm bg-body border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                    <i class="ci-heart animate-target"></i>
                  </button>
                  <a class="d-block p-2 p-lg-3" href="shop-product-grocery.html">
                    <div class="ratio" style="--cz-aspect-ratio: calc(160 / 191 * 100%)">
                      <img src="/assets/img/shop/grocery/05.png" alt="Image">
                    </div>
                  </a>
                  <div class="position-absolute w-100 start-0 bottom-0">
                    <div class="d-flex justify-content-end px-2 px-lg-3 pb-2 pb-lg-3">
                      <div class="count-input count-input-collapsible collapsed justify-content-between w-100 bg-transparent border-0 rounded-2">
                        <button type="button" class="btn btn-icon btn-sm btn-primary" data-decrement aria-label="Decrement quantity">
                          <i class="ci-minus fs-sm"></i>
                        </button>
                        <input type="number" class="form-control form-control-sm bg-primary text-white w-100" value="0" min="0" readonly>
                        <button type="button" class="product-card-button btn btn-icon btn-sm btn-secondary ms-auto" data-increment aria-label="Increment quantity">
                          <span data-count-input-value></span>
                          <i class="ci-plus fs-sm"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-2">
                  <div class="h6 mb-2">$1.24</div>
                  <h3 class="fs-sm lh-base mb-0">
                    <a class="hover-effect-underline fw-normal" href="shop-product-grocery.html">Coconut, Indonesia</a>
                  </h3>
                </div>
                <div class="fs-xs text-body-secondary px-1 px-md-2 px-lg-3 pb-2 pb-md-3">1 coconut</div>
              </div>
            </div>

            <!-- Item -->
            <div class="col">
              <div class="card product-card h-100 bg-transparent border-0 shadow-none">
                <div class="position-relative z-2">
                  <button type="button" class="btn btn-icon btn-sm btn-secondary animate-pulse fs-sm bg-body border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                    <i class="ci-heart animate-target"></i>
                  </button>
                  <a class="d-block p-2 p-lg-3" href="shop-product-grocery.html">
                    <div class="ratio" style="--cz-aspect-ratio: calc(160 / 191 * 100%)">
                      <img src="/assets/img/shop/grocery/06.png" alt="Image">
                    </div>
                  </a>
                  <div class="position-absolute w-100 start-0 bottom-0">
                    <div class="d-flex justify-content-end px-2 px-lg-3 pb-2 pb-lg-3">
                      <div class="count-input count-input-collapsible collapsed justify-content-between w-100 bg-transparent border-0 rounded-2">
                        <button type="button" class="btn btn-icon btn-sm btn-primary" data-decrement aria-label="Decrement quantity">
                          <i class="ci-minus fs-sm"></i>
                        </button>
                        <input type="number" class="form-control form-control-sm bg-primary text-white w-100" value="0" min="0" readonly>
                        <button type="button" class="product-card-button btn btn-icon btn-sm btn-secondary ms-auto" data-increment aria-label="Increment quantity">
                          <span data-count-input-value></span>
                          <i class="ci-plus fs-sm"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-2">
                  <div class="h6 mb-2">$3.95</div>
                  <h3 class="fs-sm lh-base mb-0">
                    <a class="hover-effect-underline fw-normal" href="shop-product-grocery.html">Pesto sauce Barilla with parmesan and basil</a>
                  </h3>
                </div>
                <div class="fs-xs text-body-secondary px-1 px-md-2 px-lg-3 pb-2 pb-md-3">200g</div>
              </div>
            </div>

            <!-- Item -->
            <div class="col">
              <div class="card product-card h-100 bg-transparent border-0 shadow-none">
                <div class="position-relative z-2">
                  <button type="button" class="btn btn-icon btn-sm btn-secondary animate-pulse fs-sm bg-body border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                    <i class="ci-heart animate-target"></i>
                  </button>
                  <a class="d-block p-2 p-lg-3" href="shop-product-grocery.html">
                    <div class="ratio" style="--cz-aspect-ratio: calc(160 / 191 * 100%)">
                      <img src="/assets/img/shop/grocery/07.png" alt="Image">
                    </div>
                  </a>
                  <div class="position-absolute w-100 start-0 bottom-0">
                    <div class="d-flex justify-content-end px-2 px-lg-3 pb-2 pb-lg-3">
                      <div class="count-input count-input-collapsible collapsed justify-content-between w-100 bg-transparent border-0 rounded-2">
                        <button type="button" class="btn btn-icon btn-sm btn-primary" data-decrement aria-label="Decrement quantity">
                          <i class="ci-minus fs-sm"></i>
                        </button>
                        <input type="number" class="form-control form-control-sm bg-primary text-white w-100" value="0" min="0" readonly>
                        <button type="button" class="product-card-button btn btn-icon btn-sm btn-secondary ms-auto" data-increment aria-label="Increment quantity">
                          <span data-count-input-value></span>
                          <i class="ci-plus fs-sm"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-2">
                  <div class="h6 mb-2">$1.99</div>
                  <h3 class="fs-sm lh-base mb-0">
                    <a class="hover-effect-underline fw-normal" href="shop-product-grocery.html">Fresh mango, Spain</a>
                  </h3>
                </div>
                <div class="fs-xs text-body-secondary px-1 px-md-2 px-lg-3 pb-2 pb-md-3">1 mango</div>
              </div>
            </div>

            <!-- Item -->
            <div class="col">
              <div class="card product-card h-100 bg-transparent border-0 shadow-none">
                <div class="position-relative z-2">
                  <button type="button" class="btn btn-icon btn-sm btn-secondary animate-pulse fs-sm bg-body border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                    <i class="ci-heart animate-target"></i>
                  </button>
                  <a class="d-block p-2 p-lg-3" href="shop-product-grocery.html">
                    <div class="ratio" style="--cz-aspect-ratio: calc(160 / 191 * 100%)">
                      <img src="/assets/img/shop/grocery/08.png" alt="Image">
                    </div>
                  </a>
                  <div class="position-absolute w-100 start-0 bottom-0">
                    <div class="d-flex justify-content-end px-2 px-lg-3 pb-2 pb-lg-3">
                      <div class="count-input count-input-collapsible collapsed justify-content-between w-100 bg-transparent border-0 rounded-2">
                        <button type="button" class="btn btn-icon btn-sm btn-primary" data-decrement aria-label="Decrement quantity">
                          <i class="ci-minus fs-sm"></i>
                        </button>
                        <input type="number" class="form-control form-control-sm bg-primary text-white w-100" value="0" min="0" readonly>
                        <button type="button" class="product-card-button btn btn-icon btn-sm btn-secondary ms-auto" data-increment aria-label="Increment quantity">
                          <span data-count-input-value></span>
                          <i class="ci-plus fs-sm"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-2">
                  <div class="h6 mb-2">$2.40</div>
                  <h3 class="fs-sm lh-base mb-0">
                    <a class="hover-effect-underline fw-normal" href="shop-product-grocery.html">Fresh green asparagus, bunch</a>
                  </h3>
                </div>
                <div class="fs-xs text-body-secondary px-1 px-md-2 px-lg-3 pb-2 pb-md-3">300g</div>
              </div>
            </div>

            <!-- Item -->
            <div class="col">
              <div class="card product-card h-100 bg-transparent border-0 shadow-none">
                <div class="position-relative z-2">
                  <button type="button" class="btn btn-icon btn-sm btn-secondary animate-pulse fs-sm bg-body border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                    <i class="ci-heart animate-target"></i>
                  </button>
                  <a class="d-block p-2 p-lg-3" href="shop-product-grocery.html">
                    <div class="ratio" style="--cz-aspect-ratio: calc(160 / 191 * 100%)">
                      <img src="/assets/img/shop/grocery/09.png" alt="Image">
                    </div>
                  </a>
                  <div class="position-absolute w-100 start-0 bottom-0">
                    <div class="d-flex justify-content-end px-2 px-lg-3 pb-2 pb-lg-3">
                      <div class="count-input count-input-collapsible collapsed justify-content-between w-100 bg-transparent border-0 rounded-2">
                        <button type="button" class="btn btn-icon btn-sm btn-primary" data-decrement aria-label="Decrement quantity">
                          <i class="ci-minus fs-sm"></i>
                        </button>
                        <input type="number" class="form-control form-control-sm bg-primary text-white w-100" value="0" min="0" readonly>
                        <button type="button" class="product-card-button btn btn-icon btn-sm btn-secondary ms-auto" data-increment aria-label="Increment quantity">
                          <span data-count-input-value></span>
                          <i class="ci-plus fs-sm"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-2">
                  <div class="h6 mb-2">$18.60</div>
                  <h3 class="fs-sm lh-base mb-0">
                    <a class="hover-effect-underline fw-normal" href="shop-product-grocery.html">Pure virgin olive oil Basso</a>
                  </h3>
                </div>
                <div class="fs-xs text-body-secondary px-1 px-md-2 px-lg-3 pb-2 pb-md-3">1000ml</div>
              </div>
            </div>

            <!-- Item -->
            <div class="col">
              <div class="card product-card h-100 bg-transparent border-0 shadow-none">
                <div class="position-relative z-2">
                  <button type="button" class="btn btn-icon btn-sm btn-secondary animate-pulse fs-sm bg-body border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                    <i class="ci-heart animate-target"></i>
                  </button>
                  <a class="d-block p-2 p-lg-3" href="shop-product-grocery.html">
                    <div class="ratio" style="--cz-aspect-ratio: calc(160 / 191 * 100%)">
                      <img src="/assets/img/shop/grocery/10.png" alt="Image">
                    </div>
                  </a>
                  <div class="position-absolute w-100 start-0 bottom-0">
                    <div class="d-flex justify-content-end px-2 px-lg-3 pb-2 pb-lg-3">
                      <div class="count-input count-input-collapsible collapsed justify-content-between w-100 bg-transparent border-0 rounded-2">
                        <button type="button" class="btn btn-icon btn-sm btn-primary" data-decrement aria-label="Decrement quantity">
                          <i class="ci-minus fs-sm"></i>
                        </button>
                        <input type="number" class="form-control form-control-sm bg-primary text-white w-100" value="0" min="0" readonly>
                        <button type="button" class="product-card-button btn btn-icon btn-sm btn-secondary ms-auto" data-increment aria-label="Increment quantity">
                          <span data-count-input-value></span>
                          <i class="ci-plus fs-sm"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-2">
                  <div class="h6 mb-2">$9.15</div>
                  <h3 class="fs-sm lh-base mb-0">
                    <a class="hover-effect-underline fw-normal" href="shop-product-grocery.html">Fresh pork butt steaks with rosemary</a>
                  </h3>
                </div>
                <div class="fs-xs text-body-secondary px-1 px-md-2 px-lg-3 pb-2 pb-md-3">500g</div>
              </div>
            </div>

            <!-- Item -->
            <div class="col">
              <div class="card product-card h-100 bg-transparent border-0 shadow-none">
                <div class="position-relative z-2">
                  <button type="button" class="btn btn-icon btn-sm btn-secondary animate-pulse fs-sm bg-body border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                    <i class="ci-heart animate-target"></i>
                  </button>
                  <a class="d-block p-2 p-lg-3" href="shop-product-grocery.html">
                    <div class="ratio" style="--cz-aspect-ratio: calc(160 / 191 * 100%)">
                      <img src="/assets/img/shop/grocery/11.png" alt="Image">
                    </div>
                  </a>
                  <div class="position-absolute w-100 start-0 bottom-0">
                    <div class="d-flex justify-content-end px-2 px-lg-3 pb-2 pb-lg-3">
                      <div class="count-input count-input-collapsible collapsed justify-content-between w-100 bg-transparent border-0 rounded-2">
                        <button type="button" class="btn btn-icon btn-sm btn-primary" data-decrement aria-label="Decrement quantity">
                          <i class="ci-minus fs-sm"></i>
                        </button>
                        <input type="number" class="form-control form-control-sm bg-primary text-white w-100" value="0" min="0" readonly>
                        <button type="button" class="product-card-button btn btn-icon btn-sm btn-secondary ms-auto" data-increment aria-label="Increment quantity">
                          <span data-count-input-value></span>
                          <i class="ci-plus fs-sm"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-2">
                  <div class="h6 mb-2">$3.40</div>
                  <h3 class="fs-sm lh-base mb-0">
                    <a class="hover-effect-underline fw-normal" href="shop-product-grocery.html">Fresh red grapefruit</a>
                  </h3>
                </div>
                <div class="fs-xs text-body-secondary px-1 px-md-2 px-lg-3 pb-2 pb-md-3">1kg</div>
              </div>
            </div>

            <!-- Item -->
            <div class="col">
              <div class="card product-card h-100 bg-transparent border-0 shadow-none">
                <div class="position-relative z-2">
                  <button type="button" class="btn btn-icon btn-sm btn-secondary animate-pulse fs-sm bg-body border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                    <i class="ci-heart animate-target"></i>
                  </button>
                  <a class="d-block p-2 p-lg-3" href="shop-product-grocery.html">
                    <div class="ratio" style="--cz-aspect-ratio: calc(160 / 191 * 100%)">
                      <img src="/assets/img/shop/grocery/12.png" alt="Image">
                    </div>
                  </a>
                  <div class="position-absolute w-100 start-0 bottom-0">
                    <div class="d-flex justify-content-end px-2 px-lg-3 pb-2 pb-lg-3">
                      <div class="count-input count-input-collapsible collapsed justify-content-between w-100 bg-transparent border-0 rounded-2">
                        <button type="button" class="btn btn-icon btn-sm btn-primary" data-decrement aria-label="Decrement quantity">
                          <i class="ci-minus fs-sm"></i>
                        </button>
                        <input type="number" class="form-control form-control-sm bg-primary text-white w-100" value="0" min="0" readonly>
                        <button type="button" class="product-card-button btn btn-icon btn-sm btn-secondary ms-auto" data-increment aria-label="Increment quantity">
                          <span data-count-input-value></span>
                          <i class="ci-plus fs-sm"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-2">
                  <div class="h6 mb-2">$2.59</div>
                  <h3 class="fs-sm lh-base mb-0">
                    <a class="hover-effect-underline fw-normal" href="shop-product-grocery.html">Soft creme cheese with greens Exquisa</a>
                  </h3>
                </div>
                <div class="fs-xs text-body-secondary px-1 px-md-2 px-lg-3 pb-2 pb-md-3">150g</div>
              </div>
            </div>

            <!-- Item -->
            <div class="col">
              <div class="card product-card h-100 bg-transparent border-0 shadow-none">
                <div class="position-relative z-2">
                  <button type="button" class="btn btn-icon btn-sm btn-secondary animate-pulse fs-sm bg-body border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                    <i class="ci-heart animate-target"></i>
                  </button>
                  <a class="d-block p-2 p-lg-3" href="shop-product-grocery.html">
                    <div class="ratio" style="--cz-aspect-ratio: calc(160 / 191 * 100%)">
                      <img src="/assets/img/shop/grocery/13.png" alt="Image">
                    </div>
                  </a>
                  <div class="position-absolute w-100 start-0 bottom-0">
                    <div class="d-flex justify-content-end px-2 px-lg-3 pb-2 pb-lg-3">
                      <div class="count-input count-input-collapsible collapsed justify-content-between w-100 bg-transparent border-0 rounded-2">
                        <button type="button" class="btn btn-icon btn-sm btn-primary" data-decrement aria-label="Decrement quantity">
                          <i class="ci-minus fs-sm"></i>
                        </button>
                        <input type="number" class="form-control form-control-sm bg-primary text-white w-100" value="0" min="0" readonly>
                        <button type="button" class="product-card-button btn btn-icon btn-sm btn-secondary ms-auto" data-increment aria-label="Increment quantity">
                          <span data-count-input-value></span>
                          <i class="ci-plus fs-sm"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-2">
                  <div class="h6 mb-2">$27.00</div>
                  <h3 class="fs-sm lh-base mb-0">
                    <a class="hover-effect-underline fw-normal" href="shop-product-grocery.html">Steak salmon fillet with rosmary</a>
                  </h3>
                </div>
                <div class="fs-xs text-body-secondary px-1 px-md-2 px-lg-3 pb-2 pb-md-3">1kg</div>
              </div>
            </div>

            <!-- Item -->
            <div class="col">
              <div class="card product-card h-100 bg-transparent border-0 shadow-none">
                <div class="position-relative z-2">
                  <button type="button" class="btn btn-icon btn-sm btn-secondary animate-pulse fs-sm bg-body border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                    <i class="ci-heart animate-target"></i>
                  </button>
                  <a class="d-block p-2 p-lg-3" href="shop-product-grocery.html">
                    <div class="ratio" style="--cz-aspect-ratio: calc(160 / 191 * 100%)">
                      <img src="/assets/img/shop/grocery/14.png" alt="Image">
                    </div>
                  </a>
                  <div class="position-absolute w-100 start-0 bottom-0">
                    <div class="d-flex justify-content-end px-2 px-lg-3 pb-2 pb-lg-3">
                      <div class="count-input count-input-collapsible collapsed justify-content-between w-100 bg-transparent border-0 rounded-2">
                        <button type="button" class="btn btn-icon btn-sm btn-primary" data-decrement aria-label="Decrement quantity">
                          <i class="ci-minus fs-sm"></i>
                        </button>
                        <input type="number" class="form-control form-control-sm bg-primary text-white w-100" value="0" min="0" readonly>
                        <button type="button" class="product-card-button btn btn-icon btn-sm btn-secondary ms-auto" data-increment aria-label="Increment quantity">
                          <span data-count-input-value></span>
                          <i class="ci-plus fs-sm"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-2">
                  <div class="h6 mb-2">$1.75</div>
                  <h3 class="fs-sm lh-base mb-0">
                    <a class="hover-effect-underline fw-normal" href="shop-product-grocery.html">Fresh red seedless grapes</a>
                  </h3>
                </div>
                <div class="fs-xs text-body-secondary px-1 px-md-2 px-lg-3 pb-2 pb-md-3">1kg</div>
              </div>
            </div>

            <!-- Item -->
            <div class="col">
              <div class="card product-card h-100 bg-transparent border-0 shadow-none">
                <div class="position-relative z-2">
                  <button type="button" class="btn btn-icon btn-sm btn-secondary animate-pulse fs-sm bg-body border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                    <i class="ci-heart animate-target"></i>
                  </button>
                  <a class="d-block p-2 p-lg-3" href="shop-product-grocery.html">
                    <div class="ratio" style="--cz-aspect-ratio: calc(160 / 191 * 100%)">
                      <img src="/assets/img/shop/grocery/15.png" alt="Image">
                    </div>
                  </a>
                  <div class="position-absolute w-100 start-0 bottom-0">
                    <div class="d-flex justify-content-end px-2 px-lg-3 pb-2 pb-lg-3">
                      <div class="count-input count-input-collapsible collapsed justify-content-between w-100 bg-transparent border-0 rounded-2">
                        <button type="button" class="btn btn-icon btn-sm btn-primary" data-decrement aria-label="Decrement quantity">
                          <i class="ci-minus fs-sm"></i>
                        </button>
                        <input type="number" class="form-control form-control-sm bg-primary text-white w-100" value="0" min="0" readonly>
                        <button type="button" class="product-card-button btn btn-icon btn-sm btn-secondary ms-auto" data-increment aria-label="Increment quantity">
                          <span data-count-input-value></span>
                          <i class="ci-plus fs-sm"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-2">
                  <div class="h6 mb-2">$3.10</div>
                  <h3 class="fs-sm lh-base mb-0">
                    <a class="hover-effect-underline fw-normal" href="shop-product-grocery.html">Fresh lemons, pack</a>
                  </h3>
                </div>
                <div class="fs-xs text-body-secondary px-1 px-md-2 px-lg-3 pb-2 pb-md-3">500g</div>
              </div>
            </div>

            <!-- Item -->
            <div class="col">
              <div class="card product-card h-100 bg-transparent border-0 shadow-none">
                <div class="position-relative z-2">
                  <button type="button" class="btn btn-icon btn-sm btn-secondary animate-pulse fs-sm bg-body border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                    <i class="ci-heart animate-target"></i>
                  </button>
                  <a class="d-block p-2 p-lg-3" href="shop-product-grocery.html">
                    <div class="ratio" style="--cz-aspect-ratio: calc(160 / 191 * 100%)">
                      <img src="/assets/img/shop/grocery/16.png" alt="Image">
                    </div>
                  </a>
                  <div class="position-absolute w-100 start-0 bottom-0">
                    <div class="d-flex justify-content-end px-2 px-lg-3 pb-2 pb-lg-3">
                      <div class="count-input count-input-collapsible collapsed justify-content-between w-100 bg-transparent border-0 rounded-2">
                        <button type="button" class="btn btn-icon btn-sm btn-primary" data-decrement aria-label="Decrement quantity">
                          <i class="ci-minus fs-sm"></i>
                        </button>
                        <input type="number" class="form-control form-control-sm bg-primary text-white w-100" value="0" min="0" readonly>
                        <button type="button" class="product-card-button btn btn-icon btn-sm btn-secondary ms-auto" data-increment aria-label="Increment quantity">
                          <span data-count-input-value></span>
                          <i class="ci-plus fs-sm"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-2">
                  <div class="h6 mb-2">$2.65</div>
                  <h3 class="fs-sm lh-base mb-0">
                    <a class="hover-effect-underline fw-normal" href="shop-product-grocery.html">Reggia penne rigate No.34 pasta, pack</a>
                  </h3>
                </div>
                <div class="fs-xs text-body-secondary px-1 px-md-2 px-lg-3 pb-2 pb-md-3">500g</div>
              </div>
            </div>
          </div>

          <!-- Pagination -->
          <nav class="border-top mt-4 pt-3" aria-label="Catalog pagination">
            <ul class="pagination pagination-lg pt-2 pt-md-3">
              <li class="page-item disabled me-auto">
                <a class="page-link d-flex align-items-center h-100 fs-lg px-2" href="#!" aria-label="Previous page">
                  <i class="ci-chevron-left mx-1"></i>
                </a>
              </li>
              <li class="page-item active" aria-current="page">
                <span class="page-link">
                  1
                  <span class="visually-hidden">(current)</span>
                </span>
              </li>
              <li class="page-item">
                <a class="page-link" href="#!">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#!">3</a>
              </li>
              <li class="page-item">
                <span class="page-link pe-none">...</span>
              </li>
              <li class="page-item">
                <a class="page-link" href="#!">16</a>
              </li>
              <li class="page-item ms-auto">
                <a class="page-link d-flex align-items-center h-100 fs-lg px-2" href="#!" aria-label="Next page">
                  <i class="ci-chevron-right mx-1"></i>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </section>
  </main>


  <!-- Filter offcanvas toggle that is visible on screens < 992px wide (lg breakpoint) -->
  <button type="button" class="fixed-bottom z-sticky w-100 btn btn-lg btn-dark border-0 border-top border-light border-opacity-10 rounded-0 pb-4 d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#filterSidebar" aria-controls="filterSidebar" data-bs-theme="light">
    <i class="ci-filter fs-base me-2"></i>
    Filters
  </button>
</x-www-layout>
