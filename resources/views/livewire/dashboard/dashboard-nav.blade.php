{{--

    <header class="bg-blue-200 shadow " >
        <div class="max-w-full mx-auto py-2 px-4 sm:px-6 lg:px-8">
            <div @click.prevent="dashboard = 'first'"><x-header-link > {{__('first-dashboard')}}</x-header-link></div>
            <div @click.prevent="dashboard = 'second'"> <x-header-link >{{__('second-dashboard')}}</x-header-link> </div>
        </div>
    </header>

        <div class="py-2">
            <div class="max-w-full mx-auto sm:px-6 lg:px-8">
                <div class="bg-yellow-500/10  overflow-x-scroll shadow-xl sm:rounded-lg" x-show="dashboard === 'first">

                </div>
            </div>
        </div>

--}}
<div>
<x-subheader tab="dashboard"  tab2="second"  tab3="third" bg="bg-blue-200">

    <div x-show="tabdashboard === 'second'"><livewire:dashboard.first /></div>
    <div x-show="tabdashboard === 'third'"><livewire:dashboard.second /></div>


</x-subheader>
</div>
