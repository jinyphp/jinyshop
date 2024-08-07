<!-- Breadcrumb -->
<nav class="container pt-2 pt-xxl-3 my-3 my-md-4" aria-label="breadcrumb">
  <ol class="breadcrumb">
    @foreach ( explode('/',$path)  as $item)
    <li class="breadcrumb-item">
      <a href="home-fashion-v1">{{$item}}</a>
    </li>
    @endforeach

    {{-- <li class="breadcrumb-item">
      <a href="home-fashion-v1">Home</a>
    </li>
    <li class="breadcrumb-item">
      <a href="shop-catalog-fashion">Shop</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">
      Product page
    </li> --}}

  </ol>
</nav>
