<x-www-layout>
  <!-- Page content -->
  <main class="content-wrapper">

      <!-- Breadcrumb -->
      <nav class="container pt-3 my-3 my-md-4" aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item">
                  <a href="/">Home</a>
              </li>
              <li class="breadcrumb-item">
                  <a href="/board/{{$code}}">Board</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                  {{$code}}
              </li>
          </ol>
      </nav>


      <!-- Post content + Sidebar -->
      <section class="container pb-5 mb-2 mb-md-3 mb-lg-4 mb-xl-5">
          <div class="row">
              <!-- Posts content -->
              <div class="col-lg-8 position-relative z-2">

                  {{-- 계시판 글 보기 --}}
                  @livewire("SiteBoard-view",[
                    'actions' => $actions,
                    'viewFile'=>"www::shop_fashion-v1.board.detail_view2"
                  ])

                  <script>
                    document.addEventListener('livewire:init', () => {
                      Livewire.on('board-deleted', (event) => {
                          console.log("board-deleted");
                          window.history.go(-1);
                      });
                    });
                  </script>

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

                      <h4 class="h6 pt-5 mb-0">Trending posts</h4>
                      <article class="hover-effect-scale position-relative d-flex align-items-center border-bottom py-4">
                          <div class="w-100 pe-3">
                          <h3 class="h6 lh-base fs-sm mb-0">
                              <a class="hover-effect-underline stretched-link" href="#!">The role of philanthropy in building a better world</a>
                          </h3>
                          </div>
                          <div class="ratio w-100" style="max-width: 86px; --cz-aspect-ratio: calc(64 / 86 * 100%)">
                          <img src="assets/img/blog/grid/v1/th01.jpg" class="rounded-2" alt="Image">
                          </div>
                      </article>
                      <article class="hover-effect-scale position-relative d-flex align-items-center border-bottom py-4">
                          <div class="w-100 pe-3">
                          <h3 class="h6 lh-base fs-sm mb-0">
                              <a class="hover-effect-underline stretched-link" href="#!">The biggest prospects for the smart home electronics industry</a>
                          </h3>
                          </div>
                          <div class="ratio w-100" style="max-width: 86px; --cz-aspect-ratio: calc(64 / 86 * 100%)">
                          <img src="assets/img/blog/grid/v1/th02.jpg" class="rounded-2" alt="Image">
                          </div>
                      </article>
                      <article class="hover-effect-scale position-relative d-flex align-items-center py-4">
                          <div class="w-100 pe-3">
                          <h3 class="h6 lh-base fs-sm mb-0">
                              <a class="hover-effect-underline stretched-link" href="#!">Behind-the-scenes stories from the world of iPhones</a>
                          </h3>
                          </div>
                          <div class="ratio w-100" style="max-width: 86px; --cz-aspect-ratio: calc(64 / 86 * 100%)">
                          <img src="assets/img/blog/grid/v1/th03.jpg" class="rounded-2" alt="Image">
                          </div>
                      </article>
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

