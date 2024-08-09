<x-www-layout>

  <div class="container py-5 mt-n2 mt-sm-0">
    <div class="row pt-md-2 pt-lg-3 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">

        <!-- Sidebar navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
        <aside class="col-lg-3">
            @partials('account_side')
        </aside>

        <!-- Personal info content -->
        <div class="col-lg-9">
            <div class="ps-lg-3 ps-xl-0">

                <!-- Page title -->
                <h1 class="h2 mb-3 mb-sm-2">Personal info</h1>




            </div>
        </div>
    </div>
</div>




<div class="container p-0">

    <div class="row">
        <div class="col-md-4 col-xl-3">
            @includeIf('jiny-profile::home.sidemenu')

        </div>

        <div class="col-md-8 col-xl-9">




        </div>
    </div>

</div>

</x-www-layout>
