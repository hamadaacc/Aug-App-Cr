@props([
'tab1' => false,
'tab2' => false,
'tab3' => false,
'tab4' => false,
'tab5' => false,
'tab6' => false,
'bg' => 'bg-green-700',
'tab' =>false,
'activeClass' => 'inline-flex items-center mx-2 pt-1 border-b-2  border-indigo-400 text-lg font-bold leading-5 text-gray-500 hover:text-gray-800 hover:border-gray-100 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition',
'inActiveClass' =>'inline-flex items-center mx-2 pt-1 border-b-2 border-transparent text-lg font-bold leading-5 text-red-900 focus:outline-none focus:border-indigo-700 transition',

])

<div x-data="{tab{{$tab}} : '{{$tab1}}' }" >
    <header class="bg-blue-200 shadow">
        <ul class="flex block" >
            <li class="ml-3 px-3 py-3">
                <a

                    class="{{$inActiveClass}}"
                   :class="{ '{{$bg}} {{$activeClass}}'  : tab{{$tab}} === '{{$tab1}}' }"
                   href="#"
                   @click.prevent="tab{{$tab}} = '{{$tab1}}'"
                >{{$tab1}}</a>
            </li>
            <li class="ml-3 py-3">
                <a

                    class="{{$inActiveClass}}"
                    :class="{ '{{$bg}} {{$activeClass}}'  : tab{{$tab}} === '{{$tab2}}' }"
                   href="#"
                   @click.prevent="tab{{$tab}} = '{{$tab2}}'"
                >{{$tab2}}</a>
            </li>
            <li class="ml-3 py-3">
                <a

                    class="{{$inActiveClass}}"
                    :class="{ '{{$bg}} {{$activeClass}}'  : tab{{$tab}} === '{{$tab3}}' }"
                    href="#"
                    @click.prevent="tab{{$tab}} = '{{$tab3}}'"
                >{{$tab3}}</a>
            </li>
            <li class="ml-3 py-3">
                <a

                    class="{{$inActiveClass}}"
                    :class="{ '{{$bg}} {{$activeClass}}'  : tab{{$tab}} === '{{$tab4}}' }"
                    href="#"
                    @click.prevent="tab{{$tab}} = '{{$tab4}}'"
                >{{$tab4}}</a>
            </li>
            <li class="ml-3 py-3">
                <a

                    class="{{$inActiveClass}}"
                    :class="{ '{{$bg}} {{$activeClass}}'  : tab{{$tab}} === '{{$tab5}}' }"
                    href="#"
                    @click.prevent="tab{{$tab}} = '{{$tab5}}'"
                >{{$tab5}}</a>
            </li>
            <li class="ml-3 py-3">
                <a

                    class="{{$inActiveClass}}"
                    :class="{ '{{$bg}} {{$activeClass}}'  : tab{{$tab}} === '{{$tab6}}' }"
                    href="#"
                    @click.prevent="tab{{$tab}} = '{{$tab6}}'"
                >{{$tab6}}</a>
            </li>
        </ul>
    </header>
        <!-- شاشة العرض -->
        <div class="py-2">
            <div class="max-w-full mx-auto sm:px-6 lg:px-2">
                <div class="bg-yellow-500/10  overflow-x-scroll shadow-xl sm:rounded-lg" >
                    {{$slot}}
                </div>
            </div>
        </div>

</div>

