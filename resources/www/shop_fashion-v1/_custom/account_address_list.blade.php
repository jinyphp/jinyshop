@foreach ($rows as $i => $item)
    <div class="border-bottom py-4">
        <div class="nav flex-nowrap align-items-center justify-content-between pb-1 mb-3">
            <div class="d-flex align-items-center gap-3 me-4">
                <h2 class="h6 mb-0">Shipping address {{$i+1}}</h2>
                @if ($item->selected)
                    <x-badge-primary class="cursor-pointer" wire:click="selected({{ $item->id }})">
                        default
                    </x-badge-primary>
                @else
                    <x-badge-secondary class="cursor-pointer" wire:click="selected({{ $item->id }})">
                        default
                    </x-badge-secondary>
                @endif
            </div>

            <x-click class="nav-link hiding-collapse-toggle text-decoration-underline p-0 collapsed"
                wire:click="edit({{$item->id}})">
                Edit
            </x-click>
        </div>
        <div class="collapse primary-address show" id="primaryAddressPreview">
            <ul class="list-unstyled fs-sm m-0">
                <li>{{$item->address1}}</li>
                <li>{{$item->address2}}</li>
                <li>{{$item->country}}</li>
            </ul>
        </div>
	</div>
@endforeach
