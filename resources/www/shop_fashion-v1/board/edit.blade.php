<x-www-layout>
  <!-- Page content -->
  <main class="content-wrapper">

      <!-- Breadcrumb -->
      <nav class="container pt-3 my-3 my-md-4" aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item">
                  <a href="/">Home</a>
              </li>
              <li class="breadcrumb-item">
                  <a href="/board/{{$code}}">Board</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                  {{$code}}
              </li>
          </ol>
      </nav>

      <!-- Post content + Sidebar -->
      <section class="container pb-5 mb-2 mb-md-3 mb-lg-4 mb-xl-5">

        <x-ajax-form-edit action="/board/{{$code}}/{{$row->id}}/edit">
          @includeIf($actions['view']['form'])
        </x-ajax-form-edit>
      </section>
  </main>

</x-www-layout>

