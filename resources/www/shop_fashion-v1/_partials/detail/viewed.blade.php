<section class="container pt-5 mt-2 mt-sm-3 mt-lg-4 mt-xl-5">
    <div class="d-flex align-items-center justify-content-between pt-1 pt-lg-0 pb-3 mb-2 mb-sm-3">
        <h2 class="mb-0 me-3">Viewed products</h2>

        <!-- Slider prev/next buttons -->
        <div class="d-flex gap-2">
            <button type="button"
                class="btn btn-icon btn-outline-secondary animate-slide-start rounded-circle me-1" id="viewedPrev"
                aria-label="Prev">
                <i class="ci-chevron-left fs-lg animate-target"></i>
            </button>
            <button type="button" class="btn btn-icon btn-outline-secondary animate-slide-end rounded-circle"
                id="viewedNext" aria-label="Next">
                <i class="ci-chevron-right fs-lg animate-target"></i>
            </button>
        </div>
    </div>

    <!-- Slider -->
    <div class="swiper"
        data-swiper='{
      "slidesPerView": 2,
      "spaceBetween": 24,
      "loop": true,
      "navigation": {
        "prevEl": "#viewedPrev",
        "nextEl": "#viewedNext"
      },
      "breakpoints": {
        "768": {
          "slidesPerView": 3
        },
        "992": {
          "slidesPerView": 4
        }
      }
    }'>
        <div class="swiper-wrapper">

            <!-- Item -->
            <div class="swiper-slide">
                <div class="animate-underline hover-effect-opacity">
                    <div class="position-relative mb-3">
                        <button type="button"
                            class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2"
                            aria-label="Add to Wishlist">
                            <i class="ci-heart animate-target"></i>
                        </button>
                        <a class="d-flex bg-body-tertiary rounded p-3" href="#!">
                            <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                                <img src="/assets/img/shop/fashion/11.png" alt="Image">
                            </div>
                        </a>
                        <div
                            class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                            <div
                                class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                                <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">S</span>
                                <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">M</span>
                                <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">L</span>
                                <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">XL</span>
                                <div class="nav">
                                    <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="#!">+1</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav mb-2">
                        <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="#!">
                            <span class="text-truncate">Warm sweatshirts without a hoodie</span>
                        </a>
                    </div>
                    <div class="h6 mb-2">$32.99</div>
                    <div class="position-relative">
                        <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+2 colors</div>
                        <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                            <input type="radio" class="btn-check" name="colors-11" id="color-11-1" checked>
                            <label for="color-11-1" class="btn btn-color fs-base" style="color: #42675f">
                                <span class="visually-hidden">Green</span>
                            </label>
                            <input type="radio" class="btn-check" name="colors-11" id="color-11-2">
                            <label for="color-11-2" class="btn btn-color fs-base" style="color: #476585">
                                <span class="visually-hidden">Blue</span>
                            </label>
                            <input type="radio" class="btn-check" name="colors-11" id="color-11-3">
                            <label for="color-11-3" class="btn btn-color fs-base" style="color: #724c74">
                                <span class="visually-hidden">Purple</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
                <div class="animate-underline hover-effect-opacity">
                    <div class="position-relative mb-3">
                        <button type="button"
                            class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2"
                            aria-label="Add to Wishlist">
                            <i class="ci-heart animate-target"></i>
                        </button>
                        <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion.html">
                            <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                                <img src="/assets/img/shop/fashion/03.png" alt="Image">
                            </div>
                        </a>
                        <div
                            class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                            <div
                                class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                                <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">6</span>
                                <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">6.5</span>
                                <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7</span>
                                <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7.5</span>
                                <div class="nav">
                                    <a class="nav-link fs-xs text-body-tertiary py-1 px-2"
                                        href="shop-product-fashion.html">+4</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav mb-2">
                        <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0"
                            href="shop-product-fashion.html">
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
            <div class="swiper-slide">
                <div class="animate-underline hover-effect-opacity">
                    <div class="position-relative mb-3">
                        <button type="button"
                            class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2"
                            aria-label="Add to Wishlist">
                            <i class="ci-heart animate-target"></i>
                        </button>
                        <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion.html">
                            <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                                <img src="/assets/img/shop/fashion/04.png" alt="Image">
                            </div>
                        </a>
                    </div>
                    <div class="nav mb-2">
                        <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0"
                            href="shop-product-fashion.html">
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
            <div class="swiper-slide">
                <div class="animate-underline hover-effect-opacity">
                    <div class="position-relative mb-3">
                        <span
                            class="badge text-bg-danger position-absolute top-0 start-0 z-2 mt-2 mt-sm-3 ms-2 ms-sm-3">-17%</span>
                        <button type="button"
                            class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2"
                            aria-label="Add to Wishlist">
                            <i class="ci-heart animate-target"></i>
                        </button>
                        <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion.html">
                            <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                                <img src="/assets/img/shop/fashion/05.png" alt="Image">
                            </div>
                        </a>
                    </div>
                    <div class="nav mb-2">
                        <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0"
                            href="shop-product-fashion.html">
                            <span class="text-truncate">Polarized sunglasses for men</span>
                        </a>
                    </div>
                    <div class="h6 mb-2">$96.00 <del class="fs-sm fw-normal text-body-tertiary">$112.00</del>
                    </div>
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
            <div class="swiper-slide">
                <div class="animate-underline hover-effect-opacity">
                    <div class="position-relative mb-3">
                        <button type="button"
                            class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2"
                            aria-label="Add to Wishlist">
                            <i class="ci-heart animate-target"></i>
                        </button>
                        <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion.html">
                            <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                                <img src="/assets/img/shop/fashion/10.png" alt="Image">
                            </div>
                        </a>
                    </div>
                    <div class="nav mb-2">
                        <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0"
                            href="shop-product-fashion.html">
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
    </div>
</section>
