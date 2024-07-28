<div>
  <h1>장바구니</h1>
  <table class="table table-borderless w-100">
      <thead>
          <tr>
              <th scope="col" class="text-center">상품</th>
              <th scope="col" class="text-center">가격</th>
              <th scope="col" class="text-center">수량</th>
              <th scope="col" class="text-center">합계</th>
              <th scope="col" class="text-center">삭제</th>
          </tr>
      </thead>

      <tbody>
          @foreach($cartItems as $item)
              <tr>
                  <td class="align-middle">
                      <div class="d-flex align-items-center">
                          <img src="{{ $item->image }}" alt="{{ $item->product }}" class="img-thumbnail" style="width: 70px; height: auto;">
                          <div class="ml-3">
                              <strong>{{ $item->product }}</strong><br>
                              <span>옵션: {{ $item->option }}</span><br>
                          </div>
                      </div>
                  </td>
                  <td class="align-middle">{{ number_format($item->price) }}</td>
                  <td class="align-middle">
                      <div class="d-flex align-items-center">
                          <button wire:click="decrementQuantity({{ $item->id }})" class="btn btn-sm btn-secondary">-</button>
                          <input type="number" class="form-control mx-2 text-center" value="{{ $item->quantity }}" min="1" style="width: 60px;" wire:change="updateQuantity({{ $item->id }}, $event.target.value)">
                          <button wire:click="incrementQuantity({{ $item->id }})" class="btn btn-sm btn-secondary">+</button>
                      </div>
                  </td>
                  <td class="align-middle">{{ number_format($item->price * $item->quantity) }}</td>
                  <td class="align-middle">
                      <button wire:click="removeFromCart({{ $item->id }})" class="btn btn-danger btn-sm">×</button>
                  </td>
              </tr>
          @endforeach
      </tbody>
  </table>
</div>
