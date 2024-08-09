<!-- Item -->
<div class="col-6 col-md-4 mb-2 mb-sm-3 mb-md-0">
    <div class="animate-underline hover-effect-opacity">
        <div class="position-relative mb-3">

            {{-- 할인 --}}
            <span class="badge text-bg-danger position-absolute top-0 start-0 z-2 mt-2 mt-sm-3 ms-2 ms-sm-3">Sale</span>

            {{-- wish 버튼 --}}
            <button type="button"
                wire:click="addWish('{{$item->id}}')"
                class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2"
                aria-label="Add to Wishlist">
                <i class="ci-heart animate-target"></i>
            </button>

            {{-- 상품 이미지 --}}
            <a class="d-flex bg-body-tertiary rounded p-3"
                href="/detail/{{$item->id}}">
                <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                    <img src="{{ $item->image }}" alt="Image">
                </div>
            </a>

            {{-- option --}}
            <div
                class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
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

        {{-- 상품정보 --}}
        <div class="nav mb-2">
            <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0"
            href="/detail/{{$item->id}}">
                <span class="text-truncate">
                    {{ $item->name }}
                </span>
            </a>
        </div>
        {{-- 가격 --}}
        <div class="h6 mb-2">

            {{ $item->sale_price }}
            <del class="fs-sm fw-normal text-body-tertiary">
                {{ $item->regular_price }}
            </del>
        </div>

        {{-- 컬러 옵션 --}}
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
