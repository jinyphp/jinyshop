<x-www-layout>
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
            <h1>할인 중 상품</h1>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-6">
            @livewire('ShopEvent')
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-6">
            <h1>리뷰</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-6">
            @livewire('ShopReview')
        </div>
    </div>
</x-www-layout>
