<div>
    <!-- Post title -->
    <div class="d-flex justify-content-between">
        <h1 class="h3 mb-4">
            {{$row->title}}
        </h1>
        <div>
          <button class="btn btn-info" wire:click="edit()">Edit</button>
        </div>
    </div>

    <!-- Post meta -->
    <div class="nav align-items-center gap-2 border-bottom pb-4 mt-n1 mb-4">
        <a class="nav-link text-body fs-xs text-uppercase p-0" href="#!">
            {{$row->name}} {{$row->email}}
        </a>
        <hr class="vr my-1 mx-1">
        <span class="text-body-tertiary fs-xs">{{$row->created_at}}</span>
    </div>

    <p>
        {{$row->content}}
    </p>

    <!-- Tags + Sharing -->
    <div class="d-sm-flex align-items-center justify-content-between py-4 py-md-5 mt-n2 mt-md-n3 mb-2 mb-sm-3 mb-md-0">
        <div class="d-flex flex-wrap gap-2 mb-4 mb-sm-0 me-sm-4">
            @foreach(explode(',',$row->tags) as $item)
                <a class="btn btn-outline-secondary px-3 mt-1 me-1"
                    href="#!">{{$item}}</a>
            @endforeach
        </div>
        <div class="d-flex align-items-center gap-2">
        <div class="text-body-emphasis fs-sm fw-medium">Share:</div>
            <a class="btn btn-icon fs-base btn-outline-secondary border-0"
                href="#!"
                data-bs-toggle="tooltip"
                data-bs-template='<div class="tooltip fs-xs mb-n2" role="tooltip"><div class="tooltip-inner bg-transparent text-body p-0"></div></div>' title="X (Twitter)" aria-label="Follow us on X">
                <i class="ci-x"></i>
            </a>
            <a class="btn btn-icon fs-base btn-outline-secondary border-0"
                href="#!"
                data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs mb-n2" role="tooltip"><div class="tooltip-inner bg-transparent text-body p-0"></div></div>' title="Facebook" aria-label="Follow us on Facebook">
                <i class="ci-facebook"></i>
            </a>
            <a class="btn btn-icon fs-base btn-outline-secondary border-0"
                href="#!"
                data-bs-toggle="tooltip"
                data-bs-template='<div class="tooltip fs-xs mb-n2" role="tooltip"><div class="tooltip-inner bg-transparent text-body p-0"></div></div>' title="Telegram" aria-label="Follow us on Telegram">
                <i class="ci-telegram"></i>
            </a>
        </div>
    </div>

</div>
