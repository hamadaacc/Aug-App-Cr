<ul id="" class="" x-data>
    @foreach($children as $child)
        <li class="{{$child->accountNameEn}} treess">
            {{--
            <input type="radio" id="accountid" value="{{$child->id}}" name="{{$child->id}}" x-model="accountid" class="mr-3 hover:bg-blue-300">
--}}
            <button
                type="button"
                data-mdb-ripple="true"
                data-mdb-ripple-color="light"
                class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
            >{{$child->accountNameEn}}</button><div @click="$wire.open_account_properties_modal({{$child->id}})" class="ml-1 inline-block"><i class="fa-solid fa-sliders"></i></div>

            @if($child->children)

                @include('livewire.account.child-account', ['children' => $child->children] )
            @endif
        </li>
    @endforeach
</ul>
