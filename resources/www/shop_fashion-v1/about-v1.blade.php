<x-www-layout>

    <!-- Breadcrumb -->
    <nav class="container pt-3 my-3 my-md-4" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="home-electronics.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About</li>
        </ol>
    </nav>

    @if(isset($actions['blade']))
        @php
        $slot = www_slot();
        @endphp
        @foreach($actions['blade'] as $item)
        {{-- {{dump($blade)}} --}}
            {{-- @partials($item) --}}
            @includeIf("www::".$slot."._partials.".$item)
        @endforeach
    @endif

</x-www-layout>
