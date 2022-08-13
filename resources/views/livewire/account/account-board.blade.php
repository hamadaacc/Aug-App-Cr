<div>
<input>
    <input>
    <input>
    <input>
    <input>
    <input>
    <input>
    <input>
    <input>
    <input>
    <input>
    <input>

    <h1>hay iam chart of accounts a</h1>
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text"><input type="text">
    <button
        type="button"
        data-mdb-ripple="true"
        data-mdb-ripple-color="light"
        class="inline-block px-6 py-2.5 bg-blue-200 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-300 hover:shadow-lg focus:bg-blue-400 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-300 active:shadow-lg transition duration-150 ease-in-out"
    >Click me</button>

    <div class="">
        <input type="text" wire:model="text">

        @foreach($users as $user)
            <div>
                <h1>{{$user->name}}</h1>
                <img src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" class="rounded-full h-20 w-20 object-cover">
            </div>
        @endforeach

    </div>


</div>
