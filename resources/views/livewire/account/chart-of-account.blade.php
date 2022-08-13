<div x-data="{ open:false, accountid: '' , parent_id: ''}">
    <i class="fa-solid fa-bath"></i>
    <button
        wire:click="show_chart"
        type="button"
        data-mdb-ripple="true"
        data-mdb-ripple-color="light"
        class="inline-block px-6 py-2.5 bg-blue-200 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-300 hover:shadow-lg focus:bg-blue-400 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-300 active:shadow-lg transition duration-150 ease-in-out"
    >show chart</button>


    <div class="" x-data >
        <ul id="tree2" wire:ignore class="">
            @if($parents)
            @foreach($parents as $parent)
                <li class=""
                    style="margin-top: .7rem "><button type="button" class="lg:w-1/6 bg-red-300 h-8 border-2  rounded-md " >{{$parent->accountNameEn}}</button>
                  <div @click="$wire.open_account_properties_modal({{$parent->id}})" class="ml-1 inline-block">
                        <i class="fa-solid fa-sliders"></i></div>

                    @if($parent->children)
                        @include('livewire.account.child-account', ['children' => $parent->children])
                    @endif
                </li>
            @endforeach
                @endif
        </ul>
    </div>


</div>
