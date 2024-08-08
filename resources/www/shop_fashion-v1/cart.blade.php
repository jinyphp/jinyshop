<x-www-layout>

    <!-- Breadcrumb -->
    <nav class="container pt-1 pt-md-0 my-3 my-md-4" aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="home-grocery.html">Home</a></li>
        <li class="breadcrumb-item"><a href="shop-catalog-grocery.html">Shop</a></li>
        <li class="breadcrumb-item active" aria-current="page">Cart</li>
      </ol>
    </nav>

    <!-- Items in the cart + Order summary -->
    <section class="container pb-5 mb-2 mb-md-3 mb-lg-4 mb-xl-5">
      <h1 class="h3 mb-4">Shopping cart</h1>
      <div class="row">

        <!-- Items list + Delivery / pickup tabs -->
        <div class="col-lg-8">
          <div class="pe-lg-2 pe-xl-3 me-xl-3">



            {{-- 공용 partials 에서 장바구니 호출 --}}
            @partials("../cart/table")

            <div class="nav position-relative z-2 mb-4 mb-lg-0">
              <a class="nav-link animate-underline px-0"
                href="javascript:window.history.back();">
                <i class="ci-chevron-left fs-lg me-1"></i>
                <span class="animate-target">계속 쇼핑</span>
              </a>
            </div>
          </div>
        </div>


        <!-- Order summary (sticky sidebar) -->
        <aside class="col-lg-4" style="margin-top: -115px">
            {{-- 공용 partials 에서 주문요약 호출 --}}
            @partials("../cart/summary")
        </aside>
      </div>
    </section>

</x-www-layout>

