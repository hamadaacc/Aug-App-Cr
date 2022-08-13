<?php

namespace App\Http\Livewire\Account;

use App\Models\User;
use Livewire\Component;

class AccountBoard extends Component
{
    public function render()
    {
        return view('livewire.account.account-board',
            ['users'=> User::all()]);
    }
}
