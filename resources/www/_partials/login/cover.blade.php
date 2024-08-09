<!-- Cover image visible on screens > 992px wide (lg breakpoint) -->
<div class="d-none d-lg-block w-100 py-4 ms-auto" style="max-width: 1034px">
    <div class="d-flex flex-column justify-content-end h-100 rounded-5 overflow-hidden">

        {{-- white 모드 배경 그라디언트--}}
        <span class="position-absolute top-0 start-0 w-100 h-100 d-none-dark"
            style="background: linear-gradient(-90deg, #accbee 0%, #e7f0fd 100%)">
        </span>

        {{-- dark 모드 배경 그라디언트--}}
        <span class="position-absolute top-0 start-0 w-100 h-100 d-none d-block-dark"
            style="background: linear-gradient(-90deg, #1b273a 0%, #1f2632 100%)">
        </span>

        {{-- 이미지 출력 --}}
        <div class="ratio position-relative z-2"
            style="--cz-aspect-ratio: calc(1030 / 1032 * 100%)">
            <img src="/assets/img/account-cover.png" alt="Girl">
        </div>

    </div>
</div>
