
<div>
    <x-subheader tab="account" tab1="Accounts Board"  tab2="Chart-of-accounts"  bg="bg-blue-200">
        <div x-show="tabaccount === 'Accounts Board'"> <livewire:account.account-board /></div>
        <div x-show="tabaccount === 'Chart-of-accounts'"><livewire:account.chart-of-account /></div>
    </x-subheader>
</div>
