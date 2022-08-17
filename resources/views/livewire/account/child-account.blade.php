<ul id="" class="" x-data>
    @foreach($children as $child)
        <li >
            {{--
            <input type="radio" id="accountid" value="{{$child->id}}" name="{{$child->id}}" x-model="accountid" class="mr-3 hover:bg-blue-300">
--}}
            <button type="button"  class="btn btn-danger"  style="width: 20rem ; margin-top: .4rem">{{$child->accountNameEn}}</button>
            <i class="fa-solid fa-sliders ml-1 inline-block fontSmall" @click="$wire.open_account_properties_modal({{$child->id}})"></i>

            @if($child->children)

                @include('livewire.account.child-account', ['children' => $child->children] )
            @endif
        </li>
    @endforeach
</ul>
