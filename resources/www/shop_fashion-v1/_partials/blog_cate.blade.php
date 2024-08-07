<div>
  <h4 class="h6 mb-4">Blog categories</h4>

  <div class="d-flex flex-wrap gap-3">
      @foreach($rows as $item)
      <a class="btn btn-outline-secondary px-3" href="#!">
          {{$item->categories}} - {{$item->count}}
      </a>
      @endforeach
  </div>
</div>
