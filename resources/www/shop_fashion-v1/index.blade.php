<x-www-layout>
    <main class="content-wrapper">

      사이트 브렌드 : {{siteInfo('brand')}}

      <!-- Hero slider -->
      @partials("hero_slider")

      <!-- Popular products carousel -->
      @partials("popular_products_carousel")

      <!-- Featured products -->
      @partials("featured_products")

      <!-- Special collection carousel -->
      @partials("special_collection_carousel")

      <!-- Brands -->
      @partials("brands")

      <!-- Reviews carousel -->
      @partials("reviews_carousel")

      <!-- Instagram feed -->
      @partials("instagram_feed")

    </main>
</x-www-layout>

