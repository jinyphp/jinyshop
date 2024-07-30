<x-www-layout>
    <!-- Page content -->
    <main class="content-wrapper">

      <!-- Breadcrumb -->
      <nav class="container pt-3 my-3 my-md-4" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home-electronics">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Catalog with sidebar filters</li>
        </ol>
      </nav>


      <!-- Page title -->
      <h1 class="h3 container mb-4">Shop catalog</h1>


      <!-- Banners that are turned into collaspse on screens < 768px wide (sm breakpoint) -->
      <section class="accordion container pb-4 pb-md-5 mb-xl-3">
        <div class="accordion-item border-0">
          <div class="accordion-header d-md-none" id="offersHeading">
            <button type="button" class="accordion-button w-auto fw-medium collapsed border border-dashed border-danger border-opacity-50 rounded py-2 px-3" data-bs-toggle="collapse" data-bs-target="#offers" aria-expanded="false" aria-controls="offers">
              <span class="d-inline-flex ci-percent fs-lg text-danger rounded-circle me-2"></span>
              <span class="me-2">See latest offers</span>
            </button>
          </div>
          <div class="accordion-collapse collapse d-md-block" id="offers" aria-labelledby="offersHeading">
            <div class="row g-3 g-lg-4 pt-3 pt-md-0">
              <div class="col-md-7">
                <div class="position-relative d-flex flex-column flex-sm-row align-items-center h-100 rounded-5 overflow-hidden px-5 px-sm-0 pe-sm-4">
                  <span class="position-absolute top-0 start-0 w-100 h-100 d-none-dark rtl-flip" style="background: linear-gradient(90deg, #accbee 0%, #e7f0fd 100%)"></span>
                  <span class="position-absolute top-0 start-0 w-100 h-100 d-none d-block-dark rtl-flip" style="background: linear-gradient(90deg, #1b273a 0%, #1f2632 100%)"></span>
                  <div class="position-relative z-1 text-center text-sm-start pt-4 pt-sm-0 ps-xl-4 mt-2 mt-sm-0 order-sm-2">
                    <h2 class="h3 mb-2">iPhone 14</h2>
                    <p class="fs-sm text-light-emphasis mb-sm-4">Apple iPhone 14 128GB Blue</p>
                    <a class="btn btn-primary" href="shop-product-general-electronics">
                      From $899
                      <i class="ci-arrow-up-right fs-base ms-1 me-n1"></i>
                    </a>
                  </div>
                  <div class="position-relative z-1 w-100 align-self-end order-sm-1" style="max-width: 416px">
                    <div class="ratio rtl-flip" style="--cz-aspect-ratio: calc(320 / 416 * 100%)">
                      <img src="/assets/img/shop/electronics/banners/iphone-1.png" alt="iPhone 14">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="position-relative d-flex flex-column align-items-center justify-content-between h-100 rounded-5 overflow-hidden pt-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 d-none-dark rtl-flip" style="background: linear-gradient(90deg, #fdcbf1 0%, #fdcbf1 1%, #ffecfa 100%)"></span>
                  <span class="position-absolute top-0 start-0 w-100 h-100 d-none d-block-dark rtl-flip" style="background: linear-gradient(90deg, #362131 0%, #322730 100%)"></span>
                  <div class="position-relative z-1 text-center pt-3 mx-4">
                    <i class="ci-apple text-body-emphasis fs-3 mb-3"></i>
                    <p class="fs-sm text-light-emphasis mb-1">Deal of the week</p>
                    <h2 class="h3 mb-4">iPad Pro M1</h2>
                  </div>
                  <a class="position-relative z-1 d-block w-100" href="shop-product-general-electronics">
                    <div class="ratio" style="--cz-aspect-ratio: calc(159 / 525 * 100%)">
                      <img src="/assets/img/shop/electronics/banners/ipad.png" width="525" alt="iPad">
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Selected filters + Sorting -->
      <section class="container mb-4">
        <div class="row">
          <div class="col-lg-9">
            <div class="d-md-flex align-items-start">
              <div class="h6 fs-sm fw-normal text-nowrap translate-middle-y mt-3 mb-0 me-4">Found <span class="fw-semibold">732</span> items</div>
              <div class="d-flex flex-wrap gap-2">
                <button type="button" class="btn btn-sm btn-secondary">
                  <i class="ci-close fs-sm ms-n1 me-1"></i>
                  Sale
                </button>
                <button type="button" class="btn btn-sm btn-secondary">
                  <i class="ci-close fs-sm ms-n1 me-1"></i>
                  Asus
                </button>
                <button type="button" class="btn btn-sm btn-secondary">
                  <i class="ci-close fs-sm ms-n1 me-1"></i>
                  1 TB
                </button>
                <button type="button" class="btn btn-sm btn-secondary">
                  <i class="ci-close fs-sm ms-n1 me-1"></i>
                  $340 - $1,250
                </button>
                <button type="button" class="btn btn-sm btn-secondary bg-transparent border-0 text-decoration-underline px-0 ms-2">
                  Clear all
                </button>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-3 mt-lg-0">
            <div class="d-flex align-items-center justify-content-lg-end text-nowrap">
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
        </div>
        <hr class="d-lg-none my-3">
      </section>

      @livewire('product-catalog')

      <!-- Subscription form + Vlog -->
      <section class="bg-body-tertiary py-5">
        <div class="container pt-sm-2 pt-md-3 pt-lg-4 pt-xl-5">
          <div class="row">
            <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
              <h2 class="h4 mb-2">Sign up to our newsletter</h2>
              <p class="text-body pb-2 pb-ms-3">Receive our latest updates about our products &amp; promotions</p>
              <form class="d-flex needs-validation pb-1 pb-sm-2 pb-md-3 pb-lg-0 mb-4 mb-lg-5" novalidate>
                <div class="position-relative w-100 me-2">
                  <input type="email" class="form-control form-control-lg" placeholder="Your email" required>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Subscribe</button>
              </form>
              <div class="d-flex gap-3">
                <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="Instagram">
                  <i class="ci-instagram fs-base"></i>
                </a>
                <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="Facebook">
                  <i class="ci-facebook fs-base"></i>
                </a>
                <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="YouTube">
                  <i class="ci-youtube fs-base"></i>
                </a>
                <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="Telegram">
                  <i class="ci-telegram fs-base"></i>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-4 offset-lg-1 offset-xl-2">
              <ul class="list-unstyled d-flex flex-column gap-4 ps-md-4 ps-lg-0 mb-3">
                <li class="nav flex-nowrap align-items-center position-relative">
                  <img src="/assets/img/home/electronics/vlog/01.jpg" class="rounded" width="140" alt="Video cover">
                  <div class="ps-3">
                    <div class="fs-xs text-body-secondary lh-sm mb-2">6:16</div>
                    <a class="nav-link fs-sm hover-effect-underline stretched-link p-0" href="#!">5 New Cool Gadgets You Must See on Cartzilla - Cheap Budget</a>
                  </div>
                </li>
                <li class="nav flex-nowrap align-items-center position-relative">
                  <img src="/assets/img/home/electronics/vlog/02.jpg" class="rounded" width="140" alt="Video cover">
                  <div class="ps-3">
                    <div class="fs-xs text-body-secondary lh-sm mb-2">10:20</div>
                    <a class="nav-link fs-sm hover-effect-underline stretched-link p-0" href="#!">5 Super Useful Gadgets on Cartzilla You Must Have in 2023</a>
                  </div>
                </li>
                <li class="nav flex-nowrap align-items-center position-relative">
                  <img src="/assets/img/home/electronics/vlog/03.jpg" class="rounded" width="140" alt="Video cover">
                  <div class="ps-3">
                    <div class="fs-xs text-body-secondary lh-sm mb-2">8:40</div>
                    <a class="nav-link fs-sm hover-effect-underline stretched-link p-0" href="#!">Top 5 New Amazing Gadgets on Cartzilla You Must See</a>
                  </div>
                </li>
              </ul>
              <div class="nav ps-md-4 ps-lg-0">
                <a class="btn nav-link animate-underline text-decoration-none px-0" href="#!">
                  <span class="animate-target">View all</span>
                  <i class="ci-chevron-right fs-base ms-1"></i>
                </a>
              </div>
            </div>
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
