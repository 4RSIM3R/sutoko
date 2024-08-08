@extends('layouts.app')

@section('content')
    <div>
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-xl font-semibold">Practioner</h1>
                <p class="text-sm text-gray-400 mt-1">Practioner (Tenaga Kesehatan)</p>
            </div>

            <a href="{{ route('practioner.create') }}"
                class="flex items-center py-2.5 px-5 text-sm font-medium focus:outline-none bg-white rounded-md border border-gray-200 hover:bg-gray-100 focus:z-10">
                <box-icon class="h-4 w-4 mr-2" name='plus'></box-icon>
                Add Practioner
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
                            NIK
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Role
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Birthdate
                        </th>
                        <th scope="col" class="px-6 py-3">
                            SATSET
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($practioners['data'] as $practioner)
                        <tr class="bg-white border-b">
                            <td class="px-6 py-3 font-medium whitespace-nowrap">
                                {{ $practioner->nik }}
                            </td>
                            <td class="px-6 py-3">
                                {{ $practioner->role }}
                            </td>
                            <td class="px-6 py-3">
                                {{ $practioner->name }}
                            </td>
                            <td class="px-6 py-3">
                                {{ $practioner->birthdate }}
                            </td>
                            <td class="px-6 py-3">
                                {{ $practioner->satset_id }}
                            </td>

                            <td class="px-6 py-3 flex space-x-2">
                                <a href="{{ route('practioner.edit', $practioner->id) }}"
                                    class="flex justify-center py-2.5 px-5 text-sm font-medium focus:outline-none bg-white rounded-md border border-gray-200 hover:bg-gray-100 focus:z-10 items-center">
                                    <box-icon class="h-4 w-4 mr-2" name='edit'></box-icon>
                                    Edit
                                </a>
                                <a href="{{ route('practioner.edit', $practioner->id) }}"
                                    class="flex justify-center py-2.5 px-5 text-sm font-medium focus:outline-none bg-white rounded-md border border-gray-200 hover:bg-gray-100 focus:z-10 items-center">
                                    <box-icon class="h-4 w-4 mr-2" name='edit'></box-icon>
                                    Edit
                                </a>
                            </td>
                    @endforeach

                </tbody>
            </table>

            <div class="flex justify-center mt-8">
                <!-- Previous Button -->
                @if ($practioner->prev_page)
                    <a href="{{ route('practioner.index', ['page' => $practioner->prev_page]) }}"
                        class="flex items-center justify-center px-3 h-8 me-3 text-sm font-medium bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700">
                        <box-icon class="h-4 w-4 mr-2" name='left-arrow-alt'></box-icon>
                        Prev
                    </a>
                @endif
                @if ($practioner->next_page)
                    <a href="{{ route('practioner.index', ['page' => $practioner->next_page]) }}"
                        class="flex items-center justify-center px-3 h-8 text-sm font-medium bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700">
                        Next
                        <box-icon class="h-4 w-4 ml-2" name='right-arrow-alt'></box-icon>
                    </a>
                @endif
            </div>

        </div>


    </div>
@endsection
