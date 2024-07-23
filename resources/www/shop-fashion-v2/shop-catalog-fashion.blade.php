<x-www-layout>
<!-- Page content -->
<main class="content-wrapper">

  <!-- Breadcrumb -->
  <nav class="container pt-2 pt-xxl-3 my-3 my-md-4" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="home-fashion-v1">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Catalog with sidebar filters</li>
    </ol>
  </nav>


  <!-- Page title -->
  <h1 class="h3 container pb-3 pb-lg-4">Shop catalog</h1>


  <!-- Products grid + Sidebar with filters -->
  <section class="container">
    <div class="row">

      <!-- Filter sidebar that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
      <aside class="col-lg-3">
        <div class="offcanvas-lg offcanvas-start pe-lg-4" id="filterSidebar">
          <div class="offcanvas-header py-3">
            <h5 class="offcanvas-title">Filter products</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#filterSidebar" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body flex-column pt-2 py-lg-0">

            <!-- Selected filters + Sorting -->
            <div class="pb-4 mb-2 mb-xl-3">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <h4 class="h6 mb-0">Filter</h4>
                <button type="button" class="btn btn-sm btn-secondary bg-transparent border-0 text-decoration-underline p-0 ms-2">
                  Clear all
                </button>
              </div>
              <div class="d-flex flex-wrap gap-2">
                <button type="button" class="btn btn-sm btn-secondary">
                  <i class="ci-close fs-sm ms-n1 me-1"></i>
                  Sale
                </button>
                <button type="button" class="btn btn-sm btn-secondary">
                  <i class="ci-close fs-sm ms-n1 me-1"></i>
                  Adidas
                </button>
                <button type="button" class="btn btn-sm btn-secondary">
                  <i class="ci-close fs-sm ms-n1 me-1"></i>
                  Bilabong
                </button>
                <button type="button" class="btn btn-sm btn-secondary">
                  <i class="ci-close fs-sm ms-n1 me-1"></i>
                  Size: XXS
                </button>
                <button type="button" class="btn btn-sm btn-secondary">
                  <i class="ci-close fs-sm ms-n1 me-1"></i>
                  $40 - $150
                </button>
              </div>
            </div>

            <div class="accordion">

              <!-- Categories -->
              <div class="accordion-item border-0 pb-1 pb-xl-2">
                <h4 class="accordion-header" id="headingCategories">
                  <button type="button" class="accordion-button p-0 pb-3" data-bs-toggle="collapse" data-bs-target="#categories" aria-expanded="true" aria-controls="categories">
                    Categories
                  </button>
                </h4>
                <div class="accordion-collapse collapse show" id="categories" aria-labelledby="headingCategories">
                  <div class="accordion-body p-0 pb-4 mb-1 mb-xl-2">
                    <div style="height: 220px" data-simplebar data-simplebar-auto-hide="false">
                      <ul class="nav flex-column gap-2 pe-3">
                        <li class="nav-item mb-1">
                          <a class="nav-link d-block fw-normal p-0" href="#!">
                            Blazers &amp; Suits<span class="fs-xs text-body-secondary ms-1">(235)</span>
                          </a>
                        </li>
                        <li class="nav-item mb-1">
                          <a class="nav-link d-block fw-normal p-0" href="#!">
                            Blouses<span class="fs-xs text-body-secondary ms-1">(235)</span>
                          </a>
                        </li>
                        <li class="nav-item mb-1">
                          <a class="nav-link d-block fw-normal p-0" href="#!">
                            Cardigans &amp; Jumpers<span class="fs-xs text-body-secondary ms-1">(107)</span>
                          </a>
                        </li>
                        <li class="nav-item mb-1">
                          <a class="nav-link d-block fw-normal p-0" href="#!">
                            Dresses<span class="fs-xs text-body-secondary ms-1">(93)</span>
                          </a>
                        </li>
                        <li class="nav-item mb-1">
                          <a class="nav-link d-block fw-normal p-0" href="#!">
                            Hoodie &amp; Sweatshirts<span class="fs-xs text-body-secondary ms-1">(122)</span>
                          </a>
                        </li>
                        <li class="nav-item mb-1">
                          <a class="nav-link d-block fw-normal p-0" href="#!">
                            Jackets &amp; Coats<span class="fs-xs text-body-secondary ms-1">(116)</span>
                          </a>
                        </li>
                        <li class="nav-item mb-1">
                          <a class="nav-link d-block fw-normal p-0" href="#!">
                            Jeans<span class="fs-xs text-body-secondary ms-1">(215)</span>
                          </a>
                        </li>
                        <li class="nav-item mb-1">
                          <a class="nav-link d-block fw-normal p-0" href="#!">
                            Lingerie<span class="fs-xs text-body-secondary ms-1">(150)</span>
                          </a>
                        </li>
                        <li class="nav-item mb-1">
                          <a class="nav-link d-block fw-normal p-0" href="#!">
                            Maternity Wear<span class="fs-xs text-body-secondary ms-1">(8)</span>
                          </a>
                        </li>
                        <li class="nav-item mb-1">
                          <a class="nav-link d-block fw-normal p-0" href="#!">
                            Nightwear<span class="fs-xs text-body-secondary ms-1">(26)</span>
                          </a>
                        </li>
                        <li class="nav-item mb-1">
                          <a class="nav-link d-block fw-normal p-0" href="#!">
                            Shirts &amp; Tops<span class="fs-xs text-body-secondary ms-1">(164)</span>
                          </a>
                        </li>
                        <li class="nav-item mb-1">
                          <a class="nav-link d-block fw-normal p-0" href="#!">
                            Shorts<span class="fs-xs text-body-secondary ms-1">(147)</span>
                          </a>
                        </li>
                        <li class="nav-item mb-1">
                          <a class="nav-link d-block fw-normal p-0" href="#!">
                            Socks &amp; Tights<span class="fs-xs text-body-secondary ms-1">(139)</span>
                          </a>
                        </li>
                        <li class="nav-item mb-1">
                          <a class="nav-link d-block fw-normal p-0" href="#!">
                            Sportswear<span class="fs-xs text-body-secondary ms-1">(65)</span>
                          </a>
                        </li>
                        <li class="nav-item mb-1">
                          <a class="nav-link d-block fw-normal p-0" href="#!">
                            Swimwear<span class="fs-xs text-body-secondary ms-1">(18)</span>
                          </a>
                        </li>
                        <li class="nav-item mb-1">
                          <a class="nav-link d-block fw-normal p-0" href="#!">
                            T-shirts &amp; Vests<span class="fs-xs text-body-secondary ms-1">(209)</span>
                          </a>
                        </li>
                        <li class="nav-item mb-1">
                          <a class="nav-link d-block fw-normal p-0" href="#!">
                            Trousers<span class="fs-xs text-body-secondary ms-1">(105)</span>
                          </a>
                        </li>
                        <li class="nav-item mb-1">
                          <a class="nav-link d-block fw-normal p-0" href="#!">
                            Underwear<span class="fs-xs text-body-secondary ms-1">(87)</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Price -->
              <div class="accordion-item border-0 pb-1 pb-xl-2">
                <h4 class="accordion-header" id="headingPrice">
                  <button type="button" class="accordion-button p-0 pb-3" data-bs-toggle="collapse" data-bs-target="#price" aria-expanded="true" aria-controls="price">
                    Price
                  </button>
                </h4>
                <div class="accordion-collapse collapse show" id="price" aria-labelledby="headingPrice">
                  <div class="accordion-body p-0 pb-4 mb-1 mb-xl-2">
                    <div class="range-slider" data-range-slider='{"startMin": 40, "startMax": 150, "min": 0, "max": 200, "step": 1, "tooltipPrefix": "$"}' aria-labelledby="headingPrice">
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

              <!-- Brands -->
              <div class="accordion-item border-0 pb-1 pb-xl-2">
                <h4 class="accordion-header" id="headingBrands">
                  <button type="button" class="accordion-button p-0 pb-3" data-bs-toggle="collapse" data-bs-target="#brands" aria-expanded="true" aria-controls="brands">
                    Brands
                  </button>
                </h4>
                <div class="accordion-collapse collapse show" id="brands" aria-labelledby="headingBrands">
                  <div class="accordion-body p-0 pb-4 mb-1 mb-xl-2" data-filter-list='{"searchClass": "brands-search", "listClass": "brands-list", "valueNames": ["form-check-label"]}'>
                    <div class="position-relative mb-3">
                      <i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                      <input type="search" class="brands-search form-control form-icon-start" placeholder="Search">
                    </div>
                    <div style="height: 210px" data-simplebar data-simplebar-auto-hide="false">
                      <div class="brands-list d-flex flex-column gap-2">
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="adidas" checked>
                          <label for="adidas" class="form-check-label text-body-emphasis">
                            Adidas<span class="fs-xs text-body-secondary ms-1">(425)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="taylor">
                          <label for="taylor" class="form-check-label text-body-emphasis">
                            Ann Taylor<span class="fs-xs text-body-secondary ms-1">(15)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="armani">
                          <label for="armani" class="form-check-label text-body-emphasis">
                            Armani<span class="fs-xs text-body-secondary ms-1">(18)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="banana">
                          <label for="banana" class="form-check-label text-body-emphasis">
                            Banana Republic<span class="fs-xs text-body-secondary ms-1">(103)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="bilabong" checked>
                          <label for="bilabong" class="form-check-label text-body-emphasis">
                            Bilabong<span class="fs-xs text-body-secondary ms-1">(27)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="birkenstock">
                          <label for="birkenstock" class="form-check-label text-body-emphasis">
                            Birkenstock<span class="fs-xs text-body-secondary ms-1">(10)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="klein">
                          <label for="klein" class="form-check-label text-body-emphasis">
                            Calvin Klein<span class="fs-xs text-body-secondary ms-1">(365)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="columbia">
                          <label for="columbia" class="form-check-label text-body-emphasis">
                            Columbia<span class="fs-xs text-body-secondary ms-1">(508)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="converse">
                          <label for="converse" class="form-check-label text-body-emphasis">
                            Converse<span class="fs-xs text-body-secondary ms-1">(176)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="dockers">
                          <label for="dockers" class="form-check-label text-body-emphasis">
                            Dockers<span class="fs-xs text-body-secondary ms-1">(54)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="fruit">
                          <label for="fruit" class="form-check-label text-body-emphasis">
                            Fruit of the Loom<span class="fs-xs text-body-secondary ms-1">(739)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="hanes">
                          <label for="hanes" class="form-check-label text-body-emphasis">
                            Hanes<span class="fs-xs text-body-secondary ms-1">(92)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="choo">
                          <label for="choo" class="form-check-label text-body-emphasis">
                            Jimmy Choo<span class="fs-xs text-body-secondary ms-1">(17)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="levis">
                          <label for="levis" class="form-check-label text-body-emphasis">
                            Levi's<span class="fs-xs text-body-secondary ms-1">(361)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="wearhouse">
                          <label for="wearhouse" class="form-check-label text-body-emphasis">
                            Men's Wearhouse<span class="fs-xs text-body-secondary ms-1">(75)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="newbalance">
                          <label for="newbalance" class="form-check-label text-body-emphasis">
                            New Balance<span class="fs-xs text-body-secondary ms-1">(218)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="nike">
                          <label for="nike" class="form-check-label text-body-emphasis">
                            Nike<span class="fs-xs text-body-secondary ms-1">(810)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="navy">
                          <label for="navy" class="form-check-label text-body-emphasis">
                            Old Navy<span class="fs-xs text-body-secondary ms-1">(147)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="puma">
                          <label for="puma" class="form-check-label text-body-emphasis">
                            Puma<span class="fs-xs text-body-secondary ms-1">(370)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="skechers">
                          <label for="skechers" class="form-check-label text-body-emphasis">
                            Skechers<span class="fs-xs text-body-secondary ms-1">(209)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="hilfiger">
                          <label for="hilfiger" class="form-check-label text-body-emphasis">
                            Tommy Hilfiger<span class="fs-xs text-body-secondary ms-1">(487)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="armour">
                          <label for="armour" class="form-check-label text-body-emphasis">
                            Under Armour<span class="fs-xs text-body-secondary ms-1">(90)</span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Size -->
              <div class="accordion-item border-0 pb-1 pb-xl-2">
                <h4 class="accordion-header" id="headingSize">
                  <button type="button" class="accordion-button p-0 pb-3" data-bs-toggle="collapse" data-bs-target="#size" aria-expanded="true" aria-controls="size">
                    Size
                  </button>
                </h4>
                <div class="accordion-collapse collapse show" id="size" aria-labelledby="headingSize">
                  <div class="accordion-body p-0 pb-4 mb-1 mb-xl-2">
                    <div class="d-flex flex-wrap gap-2">
                      <input type="checkbox" class="btn-check" id="size-xxs" checked>
                      <label for="size-xxs" class="btn btn-sm btn-outline-secondary">XXS</label>
                      <input type="checkbox" class="btn-check" id="size-xs">
                      <label for="size-xs" class="btn btn-sm btn-outline-secondary">XS</label>
                      <input type="checkbox" class="btn-check" id="size-s">
                      <label for="size-s" class="btn btn-sm btn-outline-secondary">S</label>
                      <input type="checkbox" class="btn-check" id="size-m">
                      <label for="size-m" class="btn btn-sm btn-outline-secondary">M</label>
                      <input type="checkbox" class="btn-check" id="size-l">
                      <label for="size-l" class="btn btn-sm btn-outline-secondary">L</label>
                      <input type="checkbox" class="btn-check" id="size-xl">
                      <label for="size-xl" class="btn btn-sm btn-outline-secondary"><span class="mx-n1">XL</span></label>
                      <input type="checkbox" class="btn-check" id="size-2xl">
                      <label for="size-2xl" class="btn btn-sm btn-outline-secondary">2XL</label>
                      <input type="checkbox" class="btn-check" id="size-40">
                      <label for="size-40" class="btn btn-sm btn-outline-secondary">40</label>
                      <input type="checkbox" class="btn-check" id="size-42">
                      <label for="size-42" class="btn btn-sm btn-outline-secondary">42</label>
                      <input type="checkbox" class="btn-check" id="size-44">
                      <label for="size-44" class="btn btn-sm btn-outline-secondary">44</label>
                      <input type="checkbox" class="btn-check" id="size-45">
                      <label for="size-45" class="btn btn-sm btn-outline-secondary">45</label>
                      <input type="checkbox" class="btn-check" id="size-46">
                      <label for="size-46" class="btn btn-sm btn-outline-secondary">46</label>
                      <input type="checkbox" class="btn-check" id="size-48">
                      <label for="size-48" class="btn btn-sm btn-outline-secondary">48</label>
                      <input type="checkbox" class="btn-check" id="size-50">
                      <label for="size-50" class="btn btn-sm btn-outline-secondary">50</label>
                      <input type="checkbox" class="btn-check" id="size-52">
                      <label for="size-52" class="btn btn-sm btn-outline-secondary">52</label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Color -->
              <div class="accordion-item border-0 pb-1 pb-xl-2">
                <h4 class="accordion-header" id="headingColor">
                  <button type="button" class="accordion-button p-0 pb-3" data-bs-toggle="collapse" data-bs-target="#color" aria-expanded="true" aria-controls="color">
                    Color
                  </button>
                </h4>
                <div class="accordion-collapse collapse show" id="color" aria-labelledby="headingColor">
                  <div class="accordion-body p-0 pb-4 mb-1 mb-xl-2">
                    <div class="d-flex flex-column gap-2">
                      <div class="d-flex align-items-center mb-1">
                        <input type="checkbox" class="btn-check" id="green">
                        <label for="green" class="btn btn-color fs-xl" style="color: #8bc4ab"></label>
                        <label for="green" class="fs-sm ms-2">Green</label>
                      </div>
                      <div class="d-flex align-items-center mb-1">
                        <input type="checkbox" class="btn-check" id="red">
                        <label for="red" class="btn btn-color fs-xl" style="color: #ee7976"></label>
                        <label for="red" class="fs-sm ms-2">Coral red</label>
                      </div>
                      <div class="d-flex align-items-center mb-1">
                        <input type="checkbox" class="btn-check" id="pink">
                        <label for="pink" class="btn btn-color fs-xl" style="color: #df8fbf"></label>
                        <label for="pink" class="fs-sm ms-2">Pink</label>
                      </div>
                      <div class="d-flex align-items-center mb-1">
                        <input type="checkbox" class="btn-check" id="blue">
                        <label for="blue" class="btn btn-color fs-xl" style="color: #9acbf1"></label>
                        <label for="blue" class="fs-sm ms-2">Sky blue</label>
                      </div>
                      <div class="d-flex align-items-center mb-1">
                        <input type="checkbox" class="btn-check" id="black">
                        <label for="black" class="btn btn-color fs-xl" style="color: #364254"></label>
                        <label for="black" class="fs-sm ms-2">Black</label>
                      </div>
                      <div class="d-flex align-items-center mb-1">
                        <input type="checkbox" class="btn-check" id="white">
                        <label for="white" class="btn btn-color fs-xl" style="color: #e0e5eb"></label>
                        <label for="white" class="fs-sm ms-2">White</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Status -->
              <div class="accordion-item border-0">
                <h4 class="accordion-header" id="headingStatus">
                  <button type="button" class="accordion-button p-0 pb-3" data-bs-toggle="collapse" data-bs-target="#status" aria-expanded="true" aria-controls="status">
                    Status
                  </button>
                </h4>
                <div class="accordion-collapse collapse show" id="status" aria-labelledby="headingStatus">
                  <div class="accordion-body p-0 pb-2 pb-lg-0">
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
          </div>
        </div>
      </aside>


      <!-- Product grid -->
      <div class="col-lg-9">

        <!-- Sorting -->
        <div class="d-sm-flex align-items-center justify-content-between mt-n2 mb-3 mb-sm-4">
          <div class="fs-sm text-body-emphasis text-nowrap">Found <span class="fw-semibold">32</span> items</div>
          <div class="d-flex align-items-center text-nowrap">
            <label class="form-label fw-semibold mb-0 me-2">Sort by:</label>
            <div style="width: 190px">
              <select class="form-select border-0 rounded-0 px-1" data-select='{
                "removeItemButton": false,
                "classNames": {
                  "containerInner": "form-select border-0 rounded-0 px-1"
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

        <div class="row gy-4 gy-md-5 pb-4 pb-md-5">

          <!-- Item -->
          <div class="col-6 col-md-4 mb-2 mb-sm-3 mb-md-0">
            <div class="animate-underline hover-effect-opacity">
              <div class="position-relative mb-3">
                <span class="badge text-bg-danger position-absolute top-0 start-0 z-2 mt-2 mt-sm-3 ms-2 ms-sm-3">Sale</span>
                <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                  <i class="ci-heart animate-target"></i>
                </button>
                <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion">
                  <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                    <img src="/assets/img/shop/fashion/01.png" alt="Image">
                  </div>
                </a>
                <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                  <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">XS</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">S</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">M</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">L</span>
                    <div class="nav">
                      <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="shop-product-fashion">+3</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="nav mb-2">
                <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion">
                  <span class="text-truncate">Denim midi skirt with pockets</span>
                </a>
              </div>
              <div class="h6 mb-2">$126.50 <del class="fs-sm fw-normal text-body-tertiary">$156.00</del></div>
              <div class="position-relative">
                <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+1 color</div>
                <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                  <input type="radio" class="btn-check" name="colors-1" id="color-1-1" checked>
                  <label for="color-1-1" class="btn btn-color fs-base" style="color: #284971">
                    <span class="visually-hidden">Dark denim</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-1" id="color-1-2">
                  <label for="color-1-2" class="btn btn-color fs-base" style="color: #8b9bc4">
                    <span class="visually-hidden">Light denim</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col-6 col-md-4 mb-2 mb-sm-3 mb-md-0">
            <div class="animate-underline hover-effect-opacity">
              <div class="position-relative mb-3">
                <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                  <i class="ci-heart animate-target"></i>
                </button>
                <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion">
                  <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                    <img src="/assets/img/shop/fashion/02.png" alt="Image">
                  </div>
                </a>
                <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                  <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">S</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">M</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">L</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">XL</span>
                    <div class="nav">
                      <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="shop-product-fashion">+1</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="nav mb-2">
                <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion">
                  <span class="text-truncate">Cotton lace blouse with necklace</span>
                </a>
              </div>
              <div class="h6 mb-2">$54.00</div>
              <div class="position-relative">
                <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+2 colors</div>
                <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                  <input type="radio" class="btn-check" name="colors-2" id="color-2-1" checked>
                  <label for="color-2-1" class="btn btn-color fs-base" style="color: #dcb1b1">
                    <span class="visually-hidden">Pink</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-2" id="color-2-2">
                  <label for="color-2-2" class="btn btn-color fs-base" style="color: #ced6f0">
                    <span class="visually-hidden">Blue</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-2" id="color-2-3">
                  <label for="color-2-3" class="btn btn-color fs-base" style="color: #e1e0cf">
                    <span class="visually-hidden">Mustard</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col-6 col-md-4 mb-2 mb-sm-3 mb-md-0">
            <div class="animate-underline hover-effect-opacity">
              <div class="position-relative mb-3">
                <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                  <i class="ci-heart animate-target"></i>
                </button>
                <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion">
                  <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                    <img src="/assets/img/shop/fashion/03.png" alt="Image">
                  </div>
                </a>
                <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                  <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">6</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">6.5</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7.5</span>
                    <div class="nav">
                      <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="shop-product-fashion">+4</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="nav mb-2">
                <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion">
                  <span class="text-truncate">Sneakers with a massive sole</span>
                </a>
              </div>
              <div class="h6 mb-2">$86.50</div>
              <div class="position-relative">
                <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+1 color</div>
                <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                  <input type="radio" class="btn-check" name="colors-3" id="color-3-1" checked>
                  <label for="color-3-1" class="btn btn-color fs-base" style="color: #e0e5eb">
                    <span class="visually-hidden">White</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-3" id="color-3-2">
                  <label for="color-3-2" class="btn btn-color fs-base" style="color: #364254">
                    <span class="visually-hidden">Black</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col-6 col-md-4 mb-2 mb-sm-3 mb-md-0">
            <div class="animate-underline hover-effect-opacity">
              <div class="position-relative mb-3">
                <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                  <i class="ci-heart animate-target"></i>
                </button>
                <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion">
                  <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                    <img src="/assets/img/shop/fashion/04.png" alt="Image">
                  </div>
                </a>
              </div>
              <div class="nav mb-2">
                <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion">
                  <span class="text-truncate">Knitted bag with a wooden handle</span>
                </a>
              </div>
              <div class="h6 mb-2">$105.00</div>
              <div class="position-relative">
                <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+1 color</div>
                <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                  <input type="radio" class="btn-check" name="colors-4" id="color-4-1" checked>
                  <label for="color-4-1" class="btn btn-color fs-base" style="color: #e7ddb4">
                    <span class="visually-hidden">Beige</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-4" id="color-4-2">
                  <label for="color-4-2" class="btn btn-color fs-base" style="color: #8b9bc4">
                    <span class="visually-hidden">Blue</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col-6 col-md-4 mb-2 mb-sm-3 mb-md-0">
            <div class="animate-underline hover-effect-opacity">
              <div class="position-relative mb-3">
                <span class="badge text-bg-danger position-absolute top-0 start-0 z-2 mt-2 mt-sm-3 ms-2 ms-sm-3">-17%</span>
                <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                  <i class="ci-heart animate-target"></i>
                </button>
                <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion">
                  <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                    <img src="/assets/img/shop/fashion/05.png" alt="Image">
                  </div>
                </a>
              </div>
              <div class="nav mb-2">
                <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion">
                  <span class="text-truncate">Polarized sunglasses for men</span>
                </a>
              </div>
              <div class="h6 mb-2">$96.00 <del class="fs-sm fw-normal text-body-tertiary">$112.00</del></div>
              <div class="position-relative">
                <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+2 colors</div>
                <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                  <input type="radio" class="btn-check" name="colors-5" id="color-5-1" checked>
                  <label for="color-5-1" class="btn btn-color fs-base" style="color: #8cc4ac">
                    <span class="visually-hidden">Green</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-5" id="color-5-2">
                  <label for="color-5-2" class="btn btn-color fs-base" style="color: #8cb7c4">
                    <span class="visually-hidden">Blue</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-5" id="color-5-3">
                  <label for="color-5-3" class="btn btn-color fs-base" style="color: #ccb782">
                    <span class="visually-hidden">Brown</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col-6 col-md-4 mb-2 mb-sm-3 mb-md-0">
            <div class="animate-underline hover-effect-opacity">
              <div class="position-relative mb-3">
                <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                  <i class="ci-heart animate-target"></i>
                </button>
                <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion">
                  <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                    <img src="/assets/img/shop/fashion/06.png" alt="Image">
                  </div>
                </a>
                <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                  <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">M</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">L</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">XL</span>
                  </div>
                </div>
              </div>
              <div class="nav mb-2">
                <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion">
                  <span class="text-truncate">Classic cotton men's shirt</span>
                </a>
              </div>
              <div class="h6 mb-2">$27.00</div>
              <div class="position-relative">
                <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+3 colors</div>
                <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                  <input type="radio" class="btn-check" name="colors-6" id="color-6-1" checked>
                  <label for="color-6-1" class="btn btn-color fs-base" style="color: #c1cde7">
                    <span class="visually-hidden">Blue</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-6" id="color-6-2">
                  <label for="color-6-2" class="btn btn-color fs-base" style="color: #526f99">
                    <span class="visually-hidden">Dark blue</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-6" id="color-6-3">
                  <label for="color-6-3" class="btn btn-color fs-base" style="color: #e0e5eb">
                    <span class="visually-hidden">White</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-6" id="color-6-4">
                  <label for="color-6-4" class="btn btn-color fs-base" style="color: #364254">
                    <span class="visually-hidden">Black</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <!-- Banner -->
          <div class="col-12 col-md-8 mb-2 mb-sm-3 mb-md-0">
            <div class="position-relative bg-body-tertiary text-center rounded-4 p-4 p-sm-5 py-md-4 py-xl-5">
              <p class="fs-xs text-body-secondary mb-1">Sweatshirts</p>
              <h2 class="h4 mb-4">Colors for your mood</h2>
              <div class="swiper user-select-none mb-4" data-swiper='{
                "allowTouchMove": false,
                "loop": true,
                "effect": "fade",
                "autoplay": {
                  "delay": 1500,
                  "disableOnInteraction": false
                }
              }' style="max-width: 342px">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="ratio" style="--cz-aspect-ratio: calc(230 / 342 * 100%)">
                      <img src="/assets/img/shop/fashion/banner01.png" alt="Image">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="ratio" style="--cz-aspect-ratio: calc(230 / 342 * 100%)">
                      <img src="/assets/img/shop/fashion/banner02.png" alt="Image">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="ratio" style="--cz-aspect-ratio: calc(230 / 342 * 100%)">
                      <img src="/assets/img/shop/fashion/banner03.png" alt="Image">
                    </div>
                  </div>
                </div>
              </div>
              <a class="btn btn-sm btn-dark stretched-link" href="shop-product-fashion">Shop now</a>
            </div>
          </div>

          <!-- Item -->
          <div class="col-6 col-md-4 mb-2 mb-sm-3 mb-md-0">
            <div class="animate-underline hover-effect-opacity">
              <div class="position-relative mb-3">
                <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                  <i class="ci-heart animate-target"></i>
                </button>
                <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion">
                  <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                    <img src="/assets/img/shop/fashion/07.png" alt="Image">
                  </div>
                </a>
                <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                  <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">6</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">6.5</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7.5</span>
                    <div class="nav">
                      <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="shop-product-fashion">+4</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="nav mb-2">
                <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion">
                  <span class="text-truncate">Black massive women's boots</span>
                </a>
              </div>
              <div class="h6 mb-2">$160.00</div>
              <div class="position-relative">
                <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+1 color</div>
                <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                  <input type="radio" class="btn-check" name="colors-7" id="color-7-1" checked>
                  <label for="color-7-1" class="btn btn-color fs-base" style="color: #364254">
                    <span class="visually-hidden">Black</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-7" id="color-7-2">
                  <label for="color-7-2" class="btn btn-color fs-base" style="color: #e0e5eb">
                    <span class="visually-hidden">White</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col-6 col-md-4 mb-2 mb-sm-3 mb-md-0">
            <div class="animate-underline hover-effect-opacity">
              <div class="position-relative mb-3">
                <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                  <i class="ci-heart animate-target"></i>
                </button>
                <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion">
                  <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                    <img src="/assets/img/shop/fashion/08.png" alt="Image">
                  </div>
                </a>
                <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                  <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">6.5</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7.5</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">8</span>
                    <div class="nav">
                      <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="shop-product-fashion">+3</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="nav mb-2">
                <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion">
                  <span class="text-truncate">Leather sneakers with golden laces</span>
                </a>
              </div>
              <div class="h6 mb-2">$74.00</div>
              <div class="position-relative">
                <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+2 colors</div>
                <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                  <input type="radio" class="btn-check" name="colors-8" id="color-8-1" checked>
                  <label for="color-8-1" class="btn btn-color fs-base" style="color: #b1aa9b">
                    <span class="visually-hidden">Cream</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-8" id="color-8-2">
                  <label for="color-8-2" class="btn btn-color fs-base" style="color: #496c33">
                    <span class="visually-hidden">Dark green</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-8" id="color-8-3">
                  <label for="color-8-3" class="btn btn-color fs-base" style="color: #364254">
                    <span class="visually-hidden">Black</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col-6 col-md-4 mb-2 mb-sm-3 mb-md-0">
            <div class="animate-underline hover-effect-opacity">
              <div class="position-relative mb-3">
                <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                  <i class="ci-heart animate-target"></i>
                </button>
                <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion">
                  <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                    <img src="/assets/img/shop/fashion/09.png" alt="Image">
                  </div>
                </a>
                <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                  <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">XS</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">S</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">M</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">L</span>
                    <div class="nav">
                      <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="shop-product-fashion">+3</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="nav mb-2">
                <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion">
                  <span class="text-truncate">White cotton blouse with necklace</span>
                </a>
              </div>
              <div class="h6 mb-2">$38.50</div>
              <div class="position-relative">
                <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+1 color</div>
                <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                  <input type="radio" class="btn-check" name="colors-9" id="color-9-1" checked>
                  <label for="color-9-1" class="btn btn-color fs-base" style="color: #e0e5eb">
                    <span class="visually-hidden">White</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-9" id="color-9-2">
                  <label for="color-9-2" class="btn btn-color fs-base" style="color: #364254">
                    <span class="visually-hidden">Black</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col-6 col-md-4 mb-2 mb-sm-3 mb-md-0">
            <div class="animate-underline hover-effect-opacity">
              <div class="position-relative mb-3">
                <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                  <i class="ci-heart animate-target"></i>
                </button>
                <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion">
                  <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                    <img src="/assets/img/shop/fashion/10.png" alt="Image">
                  </div>
                </a>
              </div>
              <div class="nav mb-2">
                <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion">
                  <span class="text-truncate">Leather handbag for women</span>
                </a>
              </div>
              <div class="h6 mb-2">$140.00</div>
              <div class="position-relative">
                <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+2 colors</div>
                <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                  <input type="radio" class="btn-check" name="colors-10" id="color-10-1" checked>
                  <label for="color-10-1" class="btn btn-color fs-base" style="color: #869286">
                    <span class="visually-hidden">Olive</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-10" id="color-10-2">
                  <label for="color-10-2" class="btn btn-color fs-base" style="color: #364254">
                    <span class="visually-hidden">Black</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-10" id="color-10-3">
                  <label for="color-10-3" class="btn btn-color fs-base" style="color: #526f99">
                    <span class="visually-hidden">Blue</span>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Show more button -->
        <button type="button" class="btn btn-lg btn-outline-secondary w-100">
          Show more
          <i class="ci-chevron-down fs-xl ms-2 me-n1"></i>
        </button>
      </div>
    </div>
  </section>


  <!-- Instagram feed -->
  <section class="container pt-5 mt-2 mt-sm-3 mt-lg-4 mt-xl-5">
    <div class="text-center pb-2 pb-md-3">
      <h2 class="pb-2 mb-1">
        <span class="animate-underline">
          <a class="animate-target text-dark-emphasis text-decoration-none" href="#!">#cartzilla</a>
        </span>
      </h2>
      <p>Find more inspiration on our Instagram</p>
    </div>
    <div class="overflow-x-auto pb-3 mb-n3" data-simplebar>
      <div class="d-flex gap-2 gap-md-3 gap-lg-4" style="min-width: 700px">
        <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden" href="#!">
          <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
          <i class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
          <div class="hover-effect-target ratio ratio-1x1">
            <img src="/assets/img/instagram/01.jpg" alt="Instagram image">
          </div>
        </a>
        <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden" href="#!">
          <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
          <i class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
          <div class="hover-effect-target ratio ratio-1x1">
            <img src="/assets/img/instagram/02.jpg" alt="Instagram image">
          </div>
        </a>
        <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden" href="#!">
          <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
          <i class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
          <div class="hover-effect-target ratio ratio-1x1">
            <img src="/assets/img/instagram/03.jpg" alt="Instagram image">
          </div>
        </a>
        <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden" href="#!">
          <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
          <i class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
          <div class="hover-effect-target ratio ratio-1x1">
            <img src="/assets/img/instagram/04.jpg" alt="Instagram image">
          </div>
        </a>
        <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden" href="#!">
          <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
          <i class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
          <div class="hover-effect-target ratio ratio-1x1">
            <img src="/assets/img/instagram/05.jpg" alt="Instagram image">
          </div>
        </a>
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
