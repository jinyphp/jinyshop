<x-www-layout>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 style="font-weight: 900;">주문서 작성</h1>

                <hr>

                <div class="mt-4">
                    <h2 style="font-weight: 600;">배송지 설정</h2>

                    <ul class="nav nav-tabs" id="addressTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="new-address-tab" data-bs-toggle="tab" data-bs-target="#new-address" type="button" role="tab" aria-controls="new-address" aria-selected="true">배송지 신규 입력</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="saved-addresses-tab" data-bs-toggle="tab" data-bs-target="#saved-addresses" type="button" role="tab" aria-controls="saved-addresses" aria-selected="false">배송지 목록</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="addressTabsContent">
                        <div class="tab-pane fade show active" id="new-address" role="tabpanel" aria-labelledby="new-address-tab">
                            @livewire('AddressForm')
                        </div>
                        <div class="tab-pane fade" id="saved-addresses" role="tabpanel" aria-labelledby="saved-addresses-tab">
                            @livewire('AddressList')
                        </div>
                    </div>
                </div>

                <hr>

                <div class="mt-4">
                    <h2 style="font-weight: 600;">주문 상품 정보</h2>
                    @livewire('OrderItems')
                </div>

                <hr>

                <div class="mt-4">
                    <h2 style="font-weight: 600;">할인 혜택</h2>
                    <!-- 할인혜택 라이브와이어 추가하기 -->
                </div>

                <hr>

                <div class="mt-4">
                    <h2 style="font-weight: 600;">결제수단 선택</h2>
                    @livewire('PaymentSelection')
                </div>
                <br>
            </div>
            <div class="col-lg-4">
                <div class="mt-4">
                    <h2 style="font-weight: 600;">최종 결제 금액</h2>
                    <!-- 최종 결제 금액 나타낼 라이브와이어 추가하기 -->
                </div>
            </div>
        </div>
    </div>
</x-www-layout>
