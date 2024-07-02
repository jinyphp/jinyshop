<x-www-layout>
    쇼핑몰 홈화면

    <div>
        내 이름은 {{$name}} 입니다.
    </div>


    <div class="row">
        <div class="col-6">
            @livewire('ShopMain-Selider')
        </div>
        <div class="col-6">
            @livewire('ShopMain-Selider')
        </div>
    </div>



</x-www-layout>
