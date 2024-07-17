<x-www-layout>
    <div class="row justify-content-center">
        <div class="col-6">
            <h1>카테고리</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6">
            @livewire('ShopCategory')
        </div>
    </div>
    <div>@livewire('ShopBanner')</div>
    <div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6">
            @livewire('ShopMain-Selider')
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-6">
            @livewire('LiveOnSale')
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-6">
            <h1>매니저 정보</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-6">
            @livewire('ShopManager')
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-6">
            <h1>판매자 정보</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-6">
            @livewire('ShopSeller')
        </div>
    </div>

    <!-- Contact 버튼 추가 -->
    <div class="row justify-content-center mt-4">
        <div class="col-6 text-center">
            <button id="contact-button" class="btn btn-primary">Contact</button>
        </div>
    </div>

    @livewireScripts
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('contact-button').addEventListener('click', function() {
            window.location.href = '/contact'; // Contact 페이지로 이동
        });
    </script>

    {{-- <div class="row justify-content-center">
        <div class="col-6">
            <h1>Contact</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-6">
            @livewire('LiveContact')
        </div>
    </div> --}}

</x-www-layout>
