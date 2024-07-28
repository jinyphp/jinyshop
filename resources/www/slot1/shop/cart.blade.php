{{-- <x-www-layout>
    <div class="container mt-4">
        <div class="row">
            <div>
                @livewire('CartItems',[
                    'viewfile' => "www::shop-grocery.CartItem"
                ])
            </div>
            <div>
                @livewire('OrderSummary',[
                    'viewfile' => "www::shop-grocery.OrderSummary"
                ])
            </div>
        </div>
    </div>
</x-www-layout> --}}

<x-www-layout>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                @livewire('CartItems',[
                    'viewfile' => "www::shop-grocery.CartItem"
                ])
            </div>
            <div class="col-md-4">
                @livewire('OrderSummary',[
                    'viewfile' => "www::shop-grocery.OrderSummary"
                ])
            </div>
        </div>
    </div>
</x-www-layout>
