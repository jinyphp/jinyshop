<x-www-layout>
	<main class="content-wrapper">
		<!-- Breadcrumb -->
		<nav class="container pt-3 my-3 my-md-4" aria-label="breadcrumb">
		<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="/">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">
            Board
				</li>
		</ol>
	</nav>

		<section class="container pb-5 mb-1 mb-sm-3 mb-lg-4 mb-xl-5">
      <div class="row">
        <!-- Posts content -->
        <div class="col-lg-8 position-relative z-2">

          @livewire('SiteBoard',[
            'code'=>"news"
          ])

            <!-- Subscription CTA -->
            @livewire('SiteSubscription')


            <!-- Related articles -->
            @livewire('SiteBoard-related')

        </div>


        <!-- Sticky sidebar that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
        <aside class="col-lg-4 col-xl-3 offset-xl-1" style="margin-top: -115px">
            <div class="offcanvas-lg offcanvas-end sticky-lg-top ps-lg-4 ps-xl-0" id="blogSidebar">
                <div class="d-none d-lg-block" style="height: 115px"></div>
                <div class="offcanvas-header py-3">
                <h5 class="offcanvas-title">Sidebar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#blogSidebar" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-block pt-2 py-lg-0">

                @livewire('SiteBoard-cate')

                @livewire('SiteBoard-trend')


                <h4 class="h6 pt-4">Follow us</h4>
                <div class="d-flex gap-2 pb-2">
                    <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs mb-n2" role="tooltip"><div class="tooltip-inner bg-transparent text-body p-0"></div></div>' title="Instagram" aria-label="Follow us on Instagram">
                    <i class="ci-instagram"></i>
                    </a>
                    <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs mb-n2" role="tooltip"><div class="tooltip-inner bg-transparent text-body p-0"></div></div>' title="X (Twitter)" aria-label="Follow us on X">
                    <i class="ci-x"></i>
                    </a>
                    <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs mb-n2" role="tooltip"><div class="tooltip-inner bg-transparent text-body p-0"></div></div>' title="Facebook" aria-label="Follow us on Facebook">
                    <i class="ci-facebook"></i>
                    </a>
                    <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs mb-n2" role="tooltip"><div class="tooltip-inner bg-transparent text-body p-0"></div></div>' title="Telegram" aria-label="Follow us on Telegram">
                    <i class="ci-telegram"></i>
                    </a>
                </div>
                </div>
            </div>
        </aside>
    </div>


		</section>
	</main>
</x-www-layout>
