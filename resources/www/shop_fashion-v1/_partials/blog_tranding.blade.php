<h4 class="h6 pt-5 mb-0">Trending posts</h4>
@foreach($rows as $item)
<article class="hover-effect-scale position-relative d-flex align-items-center border-bottom py-4">
    <div class="w-100 pe-3">
        <h3 class="h6 lh-base fs-sm mb-0">
            <a class="hover-effect-underline stretched-link" href="#!">
				{{$item->title}}
			</a>
        </h3>
    </div>
    <div class="ratio w-100" style="max-width: 86px; --cz-aspect-ratio: calc(64 / 86 * 100%)">
        <img src="{{$item->image}}" class="rounded-2" alt="Image">
    </div>
</article>
@endforeach
{{--
<article class="hover-effect-scale position-relative d-flex align-items-center border-bottom py-4">
    <div class="w-100 pe-3">
        <h3 class="h6 lh-base fs-sm mb-0">
            <a class="hover-effect-underline stretched-link" href="#!">The biggest prospects for the smart home
                electronics industry</a>
        </h3>
    </div>
    <div class="ratio w-100" style="max-width: 86px; --cz-aspect-ratio: calc(64 / 86 * 100%)">
        <img src="assets/img/blog/grid/v1/th02.jpg" class="rounded-2" alt="Image">
    </div>
</article>
<article class="hover-effect-scale position-relative d-flex align-items-center py-4">
    <div class="w-100 pe-3">
        <h3 class="h6 lh-base fs-sm mb-0">
            <a class="hover-effect-underline stretched-link" href="#!">Behind-the-scenes stories from the world of
                iPhones</a>
        </h3>
    </div>
    <div class="ratio w-100" style="max-width: 86px; --cz-aspect-ratio: calc(64 / 86 * 100%)">
        <img src="assets/img/blog/grid/v1/th03.jpg" class="rounded-2" alt="Image">
    </div>
</article> --}}
