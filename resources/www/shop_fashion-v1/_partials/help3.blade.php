<!-- Popular articles (Carousel) -->
<section class="container py-5 mt-1 mt-sm-2 mt-md-3 mt-lg-4 mt-xl-5">
  <h2 class="text-center pb-2 pb-sm-3 pb-lg-4">Popular articles</h2>

  <!-- Nav pills -->
  <div class="row g-0 overflow-x-auto pb-3 mb-2 mb-md-3 mb-lg-4">
    <div class="col-auto mx-auto">
      <ul class="nav nav-pills flex-nowrap text-nowrap">
        <li class="nav-item">
          <a class="nav-link rounded active" aria-current="page" href="#!">Delivery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link rounded" href="#!">Returns &amp; refunds</a>
        </li>
        <li class="nav-item">
          <a class="nav-link rounded" href="#!">Payment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link rounded" href="#!">Order issues</a>
        </li>
        <li class="nav-item">
          <a class="nav-link rounded" href="#!">Products &amp; stock</a>
        </li>
        <li class="nav-item">
          <a class="nav-link rounded" href="#!">Account</a>
        </li>
      </ul>
    </div>
  </div>

  <!-- Carousel -->
  <div class="position-relative pb-xl-2 mx-2 mx-sm-0">
    <div class="swiper" data-swiper='{
      "slidesPerView": 1,
      "spaceBetween": 24,
      "loop": true,
      "autoHeight": true,
      "navigation": {
        "prevEl": ".btn-prev",
        "nextEl": ".btn-next"
      },
      "breakpoints": {
        "500": {
          "slidesPerView": 2
        },
        "992": {
          "slidesPerView": 3
        }
      }
    }'>
      <div class="swiper-wrapper">

        <!-- Article -->
        <article class="swiper-slide">
          <a class="ratio d-flex hover-effect-scale rounded overflow-hidden" href="help-single-article-v1.html" style="--cz-aspect-ratio: calc(306 / 416 * 100%)">
            <img src="assets/img/help/article01.jpg" class="hover-effect-target" alt="Image">
          </a>
          <div class="pt-4">
            <div class="text-body-tertiary fs-xs pb-2 mt-n1 mb-1">October 2, 2024</div>
            <h3 class="h5 mb-0">
              <a class="hover-effect-underline" href="help-single-article-v1.html">When should I place an order to ensure Express Delivery?</a>
            </h3>
          </div>
        </article>

        <!-- Article -->
        <article class="swiper-slide">
          <a class="ratio d-flex hover-effect-scale rounded overflow-hidden" href="help-single-article-v1.html" style="--cz-aspect-ratio: calc(306 / 416 * 100%)">
            <img src="assets/img/help/article02.jpg" class="hover-effect-target" alt="Image">
          </a>
          <div class="pt-4">
            <div class="text-body-tertiary fs-xs pb-2 mt-n1 mb-1">July 17, 2024</div>
            <h3 class="h5 mb-0">
              <a class="hover-effect-underline" href="help-single-article-v1.html">Why does my statement have a recurring delivery charge?</a>
            </h3>
          </div>
        </article>

        <!-- Article -->
        <article class="swiper-slide">
          <a class="ratio d-flex hover-effect-scale rounded overflow-hidden" href="help-single-article-v1.html" style="--cz-aspect-ratio: calc(306 / 416 * 100%)">
            <img src="assets/img/help/article03.jpg" class="hover-effect-target" alt="Image">
          </a>
          <div class="pt-4">
            <div class="text-body-tertiary fs-xs pb-2 mt-n1 mb-1">June 13, 2024</div>
            <h3 class="h5 mb-0">
              <a class="hover-effect-underline" href="help-single-article-v1.html">How can I find information about your international delivery?</a>
            </h3>
          </div>
        </article>

        <!-- Article -->
        <article class="swiper-slide">
          <a class="ratio d-flex hover-effect-scale rounded overflow-hidden" href="help-single-article-v1.html" style="--cz-aspect-ratio: calc(306 / 416 * 100%)">
            <img src="assets/img/help/article04.jpg" class="hover-effect-target" alt="Image">
          </a>
          <div class="pt-4">
            <div class="text-body-tertiary fs-xs pb-2 mt-n1 mb-1">May 30, 2024</div>
            <h3 class="h5 mb-0">
              <a class="hover-effect-underline" href="help-single-article-v1.html">Will my parcel be charged additional customs charges?</a>
            </h3>
          </div>
        </article>
      </div>
    </div>

    <!-- Prev button -->
    <div class="position-absolute top-50 start-0 z-2 translate-middle hover-effect-target mt-n5">
      <button type="button" class="btn btn-prev btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start" aria-label="Prev">
        <i class="ci-chevron-left fs-lg animate-target"></i>
      </button>
    </div>

    <!-- Next button -->
    <div class="position-absolute top-50 start-100 z-2 translate-middle hover-effect-target mt-n5">
      <button type="button" class="btn btn-next btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end" aria-label="Next">
        <i class="ci-chevron-right fs-lg animate-target"></i>
      </button>
    </div>
  </div>
</section>
