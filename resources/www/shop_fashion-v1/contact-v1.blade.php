<x-www-layout>
    @if (isset($actions['blade']))
        @php
            $slot = www_slot();
        @endphp
        @foreach ($actions['blade'] as $item)
            {{-- {{dump($blade)}} --}}
            {{-- @partials($item) --}}
            @includeIf('www::' . $slot . '._partials.' . $item)
        @endforeach
    @endif

</x-www-layout>
