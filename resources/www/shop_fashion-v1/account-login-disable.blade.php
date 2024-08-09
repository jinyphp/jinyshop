<x-www-app>
    <!-- Page content -->
    <main class="content-wrapper w-100 px-3 ps-lg-5 pe-lg-4 mx-auto" style="max-width: 1920px">
        <div class="d-lg-flex">

            <!-- Login form + Footer -->
            <div class="d-flex flex-column min-vh-100 w-100 py-4 mx-auto me-lg-5" style="max-width: 416px">

                <!-- Logo -->
                @partials('../login/header')

                <h1 class="h2 mt-auto">로그인 중단</h1>
                <div class="nav fs-sm mb-4">
                    로그인 접속 절차가 잠시 중단된 상태 입니다.
                </div>



                <!-- Footer -->
                @partials('../login/footer')
            </div>

            {{-- Cover image visible on screens > 992px wide (lg breakpoint) --}}
            @partials('../login/cover')

        </div>
    </main>
</x-www-app>
