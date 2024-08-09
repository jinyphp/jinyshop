<!-- Video reviews -->
<section class="container pb-5 mb-1 mb-sm-2 mb-md-3 mb-lg-4 mb-xl-5">

  <!-- Heading -->
  <div class="d-flex align-items-center justify-content-between pb-2 pb-sm-3 mb-3">
      <h2 class="h3 mb-0">Video reviews</h2>
      <div class="nav ms-3">
          <a class="nav-link animate-underline px-0 py-2" href="#!">
              <span class="animate-target">View all</span>
              <i class="ci-chevron-right fs-base ms-1"></i>
          </a>
      </div>
  </div>

  <!-- Video cards that turn into slider on screens < 992px wide (lg breakpoint) -->
  <div class="swiper"
      data-swiper='{
"slidesPerView": 1,
"spaceBetween": 24,
"pagination": {
  "el": ".swiper-pagination",
  "clickable": true
},
"breakpoints": {
  "500": {
    "slidesPerView": 2
  },
  "768": {
    "slidesPerView": 3
  },
  "992": {
    "slidesPerView": 4
  }
}
}'>
      <div class="swiper-wrapper">

          <!-- Article -->
          <article class="swiper-slide hover-effect-scale">
              <div class="ratio rounded overflow-hidden" style="--cz-aspect-ratio: calc(200 / 306 * 100%)">
                  <div
                      class="btn btn-icon btn-light position-absolute top-50 start-50 translate-middle z-2 rounded-circle pe-none">
                      <i class="ci-play fs-base"></i>
                  </div>
                  <img src="assets/img/blog/grid/v1/video01.jpg" class="hover-effect-target" alt="Image">
              </div>
              <div class="pt-3 mt-1">
                  <div class="text-body-tertiary fs-xs mb-2">06:12</div>
                  <h3 class="h6 mb-0">
                      <a class="hover-effect-underline stretched-link" href="#!">A comprehensive review of
                          the latest kitchen blenders on the market</a>
                  </h3>
              </div>
          </article>

          <!-- Article -->
          <article class="swiper-slide hover-effect-scale">
              <div class="ratio rounded overflow-hidden" style="--cz-aspect-ratio: calc(200 / 306 * 100%)">
                  <div
                      class="btn btn-icon btn-light position-absolute top-50 start-50 translate-middle z-2 rounded-circle pe-none">
                      <i class="ci-play fs-base"></i>
                  </div>
                  <img src="assets/img/blog/grid/v1/video04.jpg" class="hover-effect-target" alt="Image">
              </div>
              <div class="pt-3 mt-1">
                  <div class="text-body-tertiary fs-xs mb-2">10:08</div>
                  <h3 class="h6 mb-0">
                      <a class="hover-effect-underline stretched-link" href="#!">Behind-the-scenes stories
                          from the world of iPhones</a>
                  </h3>
              </div>
          </article>

          <!-- Article -->
          <article class="swiper-slide hover-effect-scale">
              <div class="ratio rounded overflow-hidden" style="--cz-aspect-ratio: calc(200 / 306 * 100%)">
                  <div
                      class="btn btn-icon btn-light position-absolute top-50 start-50 translate-middle z-2 rounded-circle pe-none">
                      <i class="ci-play fs-base"></i>
                  </div>
                  <img src="assets/img/blog/grid/v1/video02.jpg" class="hover-effect-target" alt="Image">
              </div>
              <div class="pt-3 mt-1">
                  <div class="text-body-tertiary fs-xs mb-2">04:56</div>
                  <h3 class="h6 mb-0">
                      <a class="hover-effect-underline stretched-link" href="#!">Exploring the latest best
                          smartwatch features for busy professionals</a>
                  </h3>
              </div>
          </article>

          <!-- Article -->
          <article class="swiper-slide hover-effect-scale">
              <div class="ratio rounded overflow-hidden" style="--cz-aspect-ratio: calc(200 / 306 * 100%)">
                  <div
                      class="btn btn-icon btn-light position-absolute top-50 start-50 translate-middle z-2 rounded-circle pe-none">
                      <i class="ci-play fs-base"></i>
                  </div>
                  <img src="assets/img/blog/grid/v1/video03.jpg" class="hover-effect-target" alt="Image">
              </div>
              <div class="pt-3 mt-1">
                  <div class="text-body-tertiary fs-xs mb-2">03:27</div>
                  <h3 class="h6 mb-0">
                      <a class="hover-effect-underline stretched-link" href="#!">Taking to the skies with
                          the latest compact drone technology</a>
                  </h3>
              </div>
          </article>
      </div>

      <!-- Pagination (Bullets) -->
      <div class="swiper-pagination position-static mt-4"></div>
  </div>
</section>
