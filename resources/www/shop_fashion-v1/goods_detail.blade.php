<x-www-layout>

    <!-- Breadcrumb -->
    <nav class="container pt-2 pt-xxl-3 my-3 my-md-4" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="home-fashion-v1.html">Home</a></li>
            <li class="breadcrumb-item"><a href="shop-catalog-fashion.html">Shop</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product page</li>
        </ol>
    </nav>


    <!-- Product gallery and details -->
    @partials("detail.gallery")

    <!-- Sticky product preview + Add to cart CTA -->
    @partials("detail.preview")

    <!-- Product details tabs -->
    @partials("detail.details")

    <!-- Complete look (carousel) -->
    @partials("detail.look")


    <!-- Viewed products (carousel) -->
    @partials("detail.viewed")



    <!-- Instagram feed -->
    @partials('instagram_feed')


</x-www-layout>
