<div x-data="{ open:false, accountid: '' , parent_id: ''}">
    <i class="fa-solid fa-bath"></i>
    <button
        wire:click="show_chart"
        type="button"
        data-mdb-ripple="true"
        data-mdb-ripple-color="light"
        class="inline-block px-6 py-2.5 bg-blue-200 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-300 hover:shadow-lg focus:bg-blue-400 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-300 active:shadow-lg transition duration-150 ease-in-out"
    >show chart</button>


    <div class="w-2/5 bg-white overflow-scroll" x-data >
        <ul id="tree3" wire:ignore class="">
            @if($parents)
            @foreach($parents as $parent)
                <li ><button type="button"  class="btn btn-danger"  style="width: 20rem ; margin-top: .4rem">{{$parent->accountNameEn}}</button>


                        <i class="fa-solid fa-sliders ml-1 inline-block fontSmall" @click="$wire.open_account_properties_modal({{$parent->id}})"></i>

                    @if($parent->children)
                        @include('livewire.account.child-account', ['children' => $parent->children])
                    @endif
                </li>
            @endforeach
                @endif
        </ul>
    </div>


</div>
