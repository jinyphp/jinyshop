<!-- Items in the cart + Order summary -->
<section class="container pb-5 mb-2 mb-md-3 mb-lg-4 mb-xl-5">
  <h1 class="h3 mb-4">Shopping cart</h1>
  <div class="row">

    <!-- Items list -->
    <div class="col-lg-8">
      <div class="pe-lg-2 pe-xl-3 me-xl-3">
        <p class="fs-sm">Buy <span class="text-dark-emphasis fw-semibold">$183</span> more to get <span class="text-dark-emphasis fw-semibold">Free Shipping</span></p>
        <div class="progress w-100 overflow-visible mb-4" role="progressbar" aria-label="Free shipping progress" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
          <div class="progress-bar bg-warning rounded-pill position-relative overflow-visible" style="width: 75%; height: 4px">
            <div class="position-absolute top-50 end-0 d-flex align-items-center justify-content-center translate-middle-y bg-body border border-warning rounded-circle me-n1" style="width: 1.5rem; height: 1.5rem">
              <i class="ci-star-filled text-warning"></i>
            </div>
          </div>
        </div>

        <!-- Livewire Cart Items -->
        @livewire('CartItems')


        <div class="nav position-relative z-2 mb-4 mb-lg-0">
          <a class="nav-link animate-underline px-0" href="shop-catalog-electronics">
            <i class="ci-chevron-left fs-lg me-1"></i>
            <span class="animate-target">Continue shopping</span>
          </a>
        </div>
      </div>
    </div>

    <!-- Order summary (sticky sidebar) -->
    <aside class="col-lg-4" style="margin-top: -100px">
      <div class="position-sticky top-0" style="padding-top: 100px">
        @livewire('OrderSummary')
      </div>
    </aside>
  </div>
</section>
