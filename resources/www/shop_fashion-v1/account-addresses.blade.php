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
                    <h1 class="h2 mb-1 mb-sm-2">Addresses</h1>

                    {{-- 커스텀화면 주소록 --}}
                    @livewire('profile-address', [
                        'viewFile' => 'www::shop_fashion-v1._custom.account_address_table',
                        'viewList' => 'www::shop_fashion-v1._custom.account_address_list',
                    ])

                </div>
            </div>
        </div>
    </div>

</x-www-layout>
