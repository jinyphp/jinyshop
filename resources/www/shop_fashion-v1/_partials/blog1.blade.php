<!-- Page title -->
<h1 class="h3 container mb-4">Our blog</h1>

<!-- Featured posts -->
<section class="container pb-5">
    <div class="row gy-5 pb-5">

        <!-- Article -->
        <article class="col-md-6 col-lg-7">
            @if (isset($rows[0]))
                <a class="ratio d-flex hover-effect-scale rounded-4 overflow-hidden" href="blog-single-v1.html"
                    style="--cz-aspect-ratio: calc(484 / 746 * 100%)">

                    <img src="{{$rows[0]->image}}" class="hover-effect-target" alt="Image">
                </a>
                <div class="pt-4">
                    <div class="nav align-items-center gap-2 pb-2 mt-n1 mb-1">
                        <a class="nav-link text-body fs-xs text-uppercase p-0" href="#!">Gadget reviews</a>
                        <hr class="vr my-1 mx-1">
                        <span class="text-body-tertiary fs-xs">October 13, 2024</span>
                    </div>
                    <h3 class="h5 mb-0">
                        <a class="hover-effect-underline" href="blog-single-v1">
                            {{ $rows[0]->title }}
                        </a>
                    </h3>
                </div>
            @endif
        </article>

        <!-- Side list -->
        <div class="col-md-6 col-lg-5 d-flex flex-column align-content-between gap-4">
            {{-- 첫번째 항목은 이미 사용을 한 경우라서, 첫데이터를 skip 합니다. --}}
            @foreach ($rows->skip(1) as $item)
                <!-- Article -->
                <article class="hover-effect-scale position-relative d-flex align-items-center ps-xl-4 mb-xl-1">
                    <div class="w-100 pe-3 pe-sm-4 pe-lg-3 pe-xl-4">
                        <div class="text-body-tertiary fs-xs pb-2 mb-1">October 10, 2024</div>
                        <h3 class="h6 mb-2">
                            <a class="hover-effect-underline stretched-link" href="blog-single-v1.html">
                                {{ $item->title }}
                            </a>
                        </h3>
                    </div>
                    <div class="ratio w-100 rounded overflow-hidden"
                        style="max-width: 196px; --cz-aspect-ratio: calc(140 / 196 * 100%)">
                        <img src="{{ $item->image }}"
                          class="hover-effect-target" alt="Image">
                    </div>
                </article>
            @endforeach

            <!-- Article -->
            {{-- <article class="hover-effect-scale position-relative d-flex align-items-center ps-xl-4 mb-xl-1">
                <div class="w-100 pe-3 pe-sm-4 pe-lg-3 pe-xl-4">
                    <div class="text-body-tertiary fs-xs pb-2 mb-1">September 29, 2024</div>
                    <h3 class="h6 mb-2">
                        <a class="hover-effect-underline stretched-link" href="blog-single-v1.html">Embracing
                            connections: How modern technology bridges gaps and builds communities</a>
                    </h3>
                </div>
                <div class="ratio w-100 rounded overflow-hidden"
                    style="max-width: 196px; --cz-aspect-ratio: calc(140 / 196 * 100%)">
                    <img src="assets/img/blog/grid/v1/03.jpg" class="hover-effect-target" alt="Image">
                </div>
            </article> --}}

            <!-- Article -->
            {{-- <article class="hover-effect-scale position-relative d-flex align-items-center ps-xl-4 mb-xl-1">
                <div class="w-100 pe-3 pe-sm-4 pe-lg-3 pe-xl-4">
                    <div class="text-body-tertiary fs-xs pb-2 mb-1">September 17, 2024</div>
                    <h3 class="h6 mb-2">
                        <a class="hover-effect-underline stretched-link" href="blog-single-v1.html">Transform your
                            home into a smart hub with the latest IoT</a>
                    </h3>
                </div>
                <div class="ratio w-100 rounded overflow-hidden"
                    style="max-width: 196px; --cz-aspect-ratio: calc(140 / 196 * 100%)">
                    <img src="assets/img/blog/grid/v1/04.jpg" class="hover-effect-target" alt="Image">
                </div>
            </article> --}}
        </div>
    </div>

</section>
