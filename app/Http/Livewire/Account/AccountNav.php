<?php

namespace App\Http\Livewire\Account;

use App\Models\User;
use Livewire\Component;

class AccountNav extends Component
{
    public $text = 'Text';
    public function render()
    {
        return view('livewire.account.account-nav',
        );
    }
}
