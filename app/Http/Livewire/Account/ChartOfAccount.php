<?php

namespace App\Http\Livewire\Account;

use App\Models\Account;
use App\Models\User;
use Livewire\Component;

class ChartOfAccount extends Component
{
public $parents;
public function mount(){
$this->show_chart();
}
public function show_chart (){
    $this->parents= Account::where('parentNameEn','=','root')->get();
   // dd($this->parents);
}
    public function render()
    {
        return view('livewire.account.chart-of-account');
    }
}
