@extends('layouts.app')

@section('content')
    <div>
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-xl font-semibold">Encounter</h1>
                <p class="text-sm text-gray-400 mt-1">Encounter (Kunjungan)</p>
            </div>

            <a href="{{ route('encounter.create') }}"
                class="flex items-center py-2.5 px-5 text-sm font-medium focus:outline-none bg-white rounded-md border border-gray-200 hover:bg-gray-100 focus:z-10">
                <box-icon class="h-4 w-4 mr-2" name='plus'></box-icon>
                Add Encounter
            </a>
        </div>

        @if ($errors->any())
            <div class="my-5">
                @foreach ($errors->all() as $error)
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            </div>
        @endif

        <div class="relative overflow-x-auto mt-8">
            <table class="w-full text-sm text-left rtl:text-right">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Patient
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Practioner
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Location
                        </th>
                        <th scope="col" class="px-6 py-3">
                            SATSET LOG
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($encounters['data'] as $encounter)
                        <tr class="bg-white border-b">
                            <td class="px-6 py-3 font-medium whitespace-nowrap">
                                {{ $encounter->patient->name }}
                            </td>
                            <td class="px-6 py-3">
                                {{ $encounter->practioner->name }}
                            </td>
                            <td class="px-6 py-3">
                                {{ $encounter->location->name }}
                            </td>
                            <td class="px-6 py-3">
                                <ul class="text-sm">
                                    <li> encounter : {{ $encounter->encounter_id }}</li>
                                    <li> condition : {{ $encounter->condition_id }}</li>
                                </ul>
                            </td>

                            <td class="px-6 py-3 flex space-x-2">
                                <a href="{{ route('encounter.edit', $encounter->id) }}"
                                    class="flex justify-center py-2.5 px-5 text-sm font-medium focus:outline-none bg-white rounded-md border border-gray-200 hover:bg-gray-100 focus:z-10 items-center">
                                    <box-icon class="h-4 w-4 mr-2" name='eye'></box-icon>
                                    Detail
                                </a>
                            </td>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
@endsection
