<div>
    <x-loading-indicator/>

    @if(!$popupForm)
        {{-- 목록 표시 --}}
        @includeIf($viewList)

        <!-- Add address button -->
        <div class="nav pt-4">
          <x-click class="nav-link animate-underline fs-base px-0"
            wire:click="create">
            <i class="ci-plus fs-lg ms-n1 me-2"></i>
            <span class="animate-target">Add address</span>
          </x-click>
        </div>


    @else
        {{-- inline 추가폼 --}}
        @includeIf($viewForm)

        <x-flex-between class="mt-3">
            <div>
                @if($edit_id)
                <button class="btn btn-danger me-2" wire:click="delete">삭제</button>
                @endif
            </div>
            <div>
                <button class="btn btn-light" wire:click="close">취소</button>
                @if($edit_id)
                <button class="btn btn-info me-2" wire:click="update">수정</button>
                @else
                <button class="btn btn-primary me-2" wire:click="store">등록</button>
                @endif
            </div>
        </x-flex-between>
    @endif
</div>

