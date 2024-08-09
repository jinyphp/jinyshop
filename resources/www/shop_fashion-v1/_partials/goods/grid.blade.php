



    {{-- 상품 목록을 출력합니다. --}}
    @livewire('shop-goods-list',[

        'cell'=>"www::shop_fashion-v1._partials.goods.cell"
    ])



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
                <img src="assets/img/shop/fashion/01.png" alt="Image">
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
                <img src="assets/img/shop/fashion/02.png" alt="Image">
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
                <img src="assets/img/shop/fashion/03.png" alt="Image">
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
                <img src="assets/img/shop/fashion/04.png" alt="Image">
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
                <img src="assets/img/shop/fashion/05.png" alt="Image">
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
                <img src="assets/img/shop/fashion/06.png" alt="Image">
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
                  <img src="assets/img/shop/fashion/banner01.png" alt="Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="ratio" style="--cz-aspect-ratio: calc(230 / 342 * 100%)">
                  <img src="assets/img/shop/fashion/banner02.png" alt="Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="ratio" style="--cz-aspect-ratio: calc(230 / 342 * 100%)">
                  <img src="assets/img/shop/fashion/banner03.png" alt="Image">
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
                <img src="assets/img/shop/fashion/07.png" alt="Image">
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
                <img src="assets/img/shop/fashion/08.png" alt="Image">
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
                <img src="assets/img/shop/fashion/09.png" alt="Image">
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
                <img src="assets/img/shop/fashion/10.png" alt="Image">
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
