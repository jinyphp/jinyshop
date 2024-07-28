<div>
  <h1>주문 요약</h1>
  <ul class="list-group">
      <li class="list-group-item">
          <strong>Subtotal:</strong> ${{ number_format($subtotal) }}<br>
          <strong>Saving:</strong> -${{ number_format($saving) }}<br>
          <strong>Tax:</strong> ${{ number_format($tax) }}<br>
          <strong>Total:</strong> ${{ number_format($total) }}<br>
      </li>
  </ul>
</div>
