<!-- Posts grid + Sidebar -->
<section class="container pb-5 mb-2 mb-md-3 mb-lg-4 mb-xl-5">
    <div class="row">

        <!-- Posts grid -->
        <div class="col-lg-8">
            @partials('blog_post_slider', ['rows' => getPosts(4)])

            <hr>

            <div class="row gy-5"> {{-- row-cols-1 row-cols-sm-2  --}}
                @livewire('SitePost-list', [
                    'actions' => $actions,
                ])
            </div>
        </div>

        <!-- Sticky sidebar that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
        <aside class="col-lg-4 col-xl-3 offset-xl-1" style="margin-top: -115px">
            @partials('blog_sidebar')
        </aside>
    </div>
</section>
