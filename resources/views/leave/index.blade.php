<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            {{ __('Apply Leave') }}
        </h2>
    </x-slot>





<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-8 py-3">
                    Type of Leave
                </th>
                <th scope="col" class="px-8 py-3">
                    Entitle
                </th>
                <th scope="col" class="px-8 py-3">
                    Taken
                </th>
                <th scope="col" class="px-8 py-3">
                    Balance
                </th>
                <th scope="col" class="px-8 py-3">
                    To Do
                </th>
                <th scope="col" class="px-8 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-8 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Annual Leave
                </th>
                <td class="px-8 py-4">
                    admin keyin
                </td>
                <td class="px-8 py-4">
                    apply
                </td>
                <td class="px-8 py-4">
                    calculate
                </td>

                <td class="px-8 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-8 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Emergency Leave
                </th>
                <td class="px-8 py-4">
                    White
                </td>
                <td class="px-8 py-4">
                    Laptop PC
                </td>
                <td class="px-6 py-4">
                    $1999
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Medical Leave
                </th>
                <td class="px-6 py-4">
                    Black
                </td>
                <td class="px-6 py-4">
                    Accessories
                </td>
                <td class="px-6 py-4">
                    $99
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>


    </div>
</x-app-layout>

