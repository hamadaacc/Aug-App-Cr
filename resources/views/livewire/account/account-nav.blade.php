
<div>
    <x-subheader tab="account" tab1="first"  tab2="second"  bg="bg-blue-200">
        <div x-show="tabaccount === 'first'"> <livewire:account.account-board /></div>
        <div x-show="tabaccount === 'second'"><livewire:account.chart-of-account /></div>



    </x-subheader>
</div>
