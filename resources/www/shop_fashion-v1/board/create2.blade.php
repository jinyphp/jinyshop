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

      <section class="container pb-5 mb-1 mb-sm-3 mb-lg-4 mb-xl-5">
        @livewire('SiteBoard-create',[
          'actions' => $actions
        ])

        <script>
          document.addEventListener('livewire:init', () => {
            Livewire.on('board-created', (event) => {
                console.log("board-created");
                window.history.go(-1);
            });
          });
        </script>




      </section>

  </main>

</x-www-layout>

