<x-www-layout>

    <div class="container py-5 mt-n2 mt-sm-0">
        <div class="row pt-md-2 pt-lg-3 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">

            <aside class="col-lg-3">
                @partials('account_side')
            </aside>

            <!-- Addresses content -->
            <div class="col-lg-9">
                <div class="ps-lg-3 ps-xl-0">

                    <!-- Page title -->
                    <h2 class="h2 mb-1 mb-sm-2">Password</h2>
                    <div>
                        <p class="text-muted font-14">
                            패스워드를 변경할 수 있습니다.
                        </p>

                        @livewire('profile-password',[

                        ])
                    </div>

                    <h2 class="h2 mb-1 mb-sm-2">계정 정보</h2>
                    <div>
                        <p class="text-muted font-14">
                            개인정보와 주소를 수정하세요.
                        </p>
                        @livewire('profile-email',[

                        ])
                    </div>



                </div>
            </div>
        </div>
    </div>



</x-www-layout>
