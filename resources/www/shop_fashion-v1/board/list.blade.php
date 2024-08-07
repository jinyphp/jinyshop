{{-- bootstrap Cartzilla --}}
<!-- Table with hoverable rows -->
<div class="table-responsive">
  <table class="table table-hover">
    <thead>
      <tr>
        <th width="50" scope="col">
          <input type='checkbox'
              class="form-check-input"
              wire:model.live="selectedall">
        </th>
        <th scope="col">타이틀2</th>

        <th width="150" scope="col">작성일자</th>
      </tr>
    </thead>
    <tbody>
      @if(!empty($rows))
          @foreach ($rows as $item)
              <tr>
                  <th width="50" scope="row">
                      <input type='checkbox' name='ids' value="{{$item->id}}"
                      class="form-check-input" wire:model.live="selected">
                  </th>
                  <td>
                      <a href="/board/{{$actions['code']}}/{{$item->id}}">
                          {{$item->title}}
                      </a>
                  </td>
                  <td width="150" class="text-nowrap">{{$item->created_at}}</td>
              </tr>
          @endforeach
      @endif

    </tbody>
  </table>
</div>
