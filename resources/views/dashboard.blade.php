<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-orange-300 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    HELLO!<b> {{ Auth::user()->name }}.</b>
                    You are {{ Auth::user()->role}}
                </div>
            </div>

            @if (Auth::user()->role =='admin')



            <div class="mt-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        ONLY ADMIN CAN SEE THIS!
                    </div>
                </div>
                @endif
        </div>


    <div inline-datepicker data-date="02/25/2022"></div>

    </div>
</x-app-layout>
