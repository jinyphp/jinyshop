    <!-- Open positions (Carousel of cards) -->
    <section class="container py-5 mt-2 mb-1 my-sm-3 my-md-4 my-lg-5">
      <div class="d-flex align-items-end justify-content-between pb-3 mb-1 mb-md-3">
          <div class="me-4">
              <h2 class="text-body fs-sm fw-normal">Career</h2>
              <h3 class="h1 mb-0">Open positions</h3>
          </div>

          <!-- External slider prev/next buttons -->
          <div class="d-flex justify-content-center justify-content-md-start gap-2">
              <button type="button" id="prev-positions"
                  class="btn btn-icon btn-outline-secondary rounded-circle animate-slide-start me-1"
                  aria-label="Prev">
                  <i class="ci-chevron-left fs-xl animate-target"></i>
              </button>
              <button type="button" id="next-positions"
                  class="btn btn-icon btn-outline-secondary rounded-circle animate-slide-end" aria-label="Next">
                  <i class="ci-chevron-right fs-xl animate-target"></i>
              </button>
          </div>
      </div>

      <!-- Slider -->
      <div class="swiper"
          data-swiper='{
    "slidesPerView": 1,
    "spaceBetween": 24,
    "loop": true,
    "navigation": {
      "prevEl": "#prev-positions",
      "nextEl": "#next-positions"
    },
    "breakpoints": {
      "500": {
        "slidesPerView": 2
      },
      "800": {
        "slidesPerView": 3
      },
      "1080": {
        "slidesPerView": 4
      }
    }
  }'>
          <div class="swiper-wrapper py-2">

              <!-- Item -->
              <div class="swiper-slide h-auto">
                  <a class="card btn btn-outline-secondary w-100 h-100 align-items-start text-wrap text-start rounded-4 px-0 px-xl-2 py-4 py-xl-5"
                      href="#!">
                      <div class="card-body pb-0 pt-3 pt-xl-0">
                          <span class="badge bg-info fs-xs rounded-pill">Full time</span>
                          <h4 class="h5 py-3 my-2 my-xl-3">Supply Chain and Logistics Coordinator</h4>
                      </div>
                      <div
                          class="card-footer w-100 bg-transparent border-0 text-body fs-sm fw-normal pt-0 pb-3 pb-xl-0">
                          New York</div>
                  </a>
              </div>

              <!-- Item -->
              <div class="swiper-slide h-auto">
                  <a class="card btn btn-outline-secondary w-100 h-100 align-items-start text-wrap text-start rounded-4 px-0 px-xl-2 py-4 py-xl-5"
                      href="#!">
                      <div class="card-body pb-0 pt-3 pt-xl-0">
                          <span class="badge bg-success fs-xs rounded-pill">Part time</span>
                          <h4 class="h5 py-3 my-2 my-xl-3">Content Manager for Social Networks</h4>
                      </div>
                      <div
                          class="card-footer w-100 bg-transparent border-0 text-body fs-sm fw-normal pt-0 pb-3 pb-xl-0">
                          Remote</div>
                  </a>
              </div>

              <!-- Item -->
              <div class="swiper-slide h-auto">
                  <a class="card btn btn-outline-secondary w-100 h-100 align-items-start text-wrap text-start rounded-4 px-0 px-xl-2 py-4 py-xl-5"
                      href="#!">
                      <div class="card-body pb-0 pt-3 pt-xl-0">
                          <span class="badge bg-info fs-xs rounded-pill">Full time</span>
                          <h4 class="h5 py-3 my-2 my-xl-3">Customer Service Representative</h4>
                      </div>
                      <div
                          class="card-footer w-100 bg-transparent border-0 text-body fs-sm fw-normal pt-0 pb-3 pb-xl-0">
                          London</div>
                  </a>
              </div>

              <!-- Item -->
              <div class="swiper-slide h-auto">
                  <a class="card btn btn-outline-secondary w-100 h-100 align-items-start text-wrap text-start rounded-4 px-0 px-xl-2 py-4 py-xl-5"
                      href="#!">
                      <div class="card-body pb-0 pt-3 pt-xl-0">
                          <span class="badge bg-warning fs-xs rounded-pill">Freelance</span>
                          <h4 class="h5 py-3 my-2 my-xl-3">Data Analyst/Analytics Specialist</h4>
                      </div>
                      <div
                          class="card-footer w-100 bg-transparent border-0 text-body fs-sm fw-normal pt-0 pb-3 pb-xl-0">
                          Remote</div>
                  </a>
              </div>

              <!-- Item -->
              <div class="swiper-slide h-auto">
                  <a class="card btn btn-outline-secondary w-100 h-100 align-items-start text-wrap text-start rounded-4 px-0 px-xl-2 py-4 py-xl-5"
                      href="#!">
                      <div class="card-body pb-0 pt-3 pt-xl-0">
                          <span class="badge bg-info fs-xs rounded-pill">Full time</span>
                          <h4 class="h5 py-3 my-2 my-xl-3">E-commerce Manager/Director</h4>
                      </div>
                      <div
                          class="card-footer w-100 bg-transparent border-0 text-body fs-sm fw-normal pt-0 pb-3 pb-xl-0">
                          In house</div>
                  </a>
              </div>
          </div>
      </div>
  </section>

