<x-www-layout>

  <div class="container py-5 mt-n2 mt-sm-0">
    <div class="row pt-md-2 pt-lg-3 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">


      <!-- Sidebar navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
      <aside class="col-lg-3">
        @partials('account_side')
    </aside>


      <!-- Wishlist content -->
      <div class="col-lg-9">
        <div class="ps-lg-3 ps-xl-0">

          @partials("../wish/list")
        </div>
      </div>
    </div>
  </div>

</x-www-layout>
