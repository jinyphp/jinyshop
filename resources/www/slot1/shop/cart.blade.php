<x-www-layout>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8"> <!-- 8/12 = 2/3 -->
                @livewire('CartItems')
            </div>
            <div class="col-md-4"> <!-- 4/12 = 1/3 -->
                @livewire('OrderSummary')
            </div>
        </div>
    </div>
</x-www-layout>
