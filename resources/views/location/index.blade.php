@extends('layouts.app')

@section('content')
    <div>
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-xl font-semibold">Location</h1>
                <p class="text-sm text-gray-400 mt-1">Location (Ruangan)</p>
            </div>

            <a href="{{ route('location.create') }}"
                class="flex items-center py-2.5 px-5 text-sm font-medium focus:outline-none bg-white rounded-md border border-gray-200 hover:bg-gray-100 focus:z-10">
                <box-icon class="h-4 w-4 mr-2" name='plus'></box-icon>
                Add Location
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
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Type
                        </th>
                        <th scope="col" class="px-6 py-3">
                            SATSET ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($locations['data'] as $location)
                        <tr class="bg-white border-b">
                            <td class="px-6 py-3 font-medium whitespace-nowrap">
                                {{ $location->name }}
                            </td>
                            <td class="px-6 py-3">
                                {{ $location->type }}
                            </td>
                            <td class="px-6 py-3">
                                {{ $location->satset_id }}
                            </td>
                            <td class="px-6 py-3 flex space-x-2">
                                <a href="{{ route('location.edit', $location->id) }}"
                                    class="flex justify-center py-2.5 px-5 text-sm font-medium focus:outline-none bg-white rounded-md border border-gray-200 hover:bg-gray-100 focus:z-10 items-center">
                                    <box-icon class="h-4 w-4 mr-2" name='eye'></box-icon>
                                    Detail
                                </a>
                            </td>
                    @endforeach

                </tbody>
            </table>

            <div class="flex justify-center mt-8">
                <!-- Previous Button -->
                @if ($locations['prev_page'] != null)
                    <a href="{{ route('location.index', ['page' => $location['prev_page']]) }}"
                        class="flex items-center justify-center px-3 h-8 me-3 text-sm font-medium bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700">
                        <box-icon class="h-4 w-4 mr-2" name='left-arrow-alt'></box-icon>
                        Prev
                    </a>
                @endif
                @if ($locations['next_page'] != null)
                    <a href="{{ route('location.index', ['page' => $location['next_page']]) }}"
                        class="flex items-center justify-center px-3 h-8 text-sm font-medium bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700">
                        Next
                        <box-icon class="h-4 w-4 ml-2" name='right-arrow-alt'></box-icon>
                    </a>
                @endif
            </div>

    </div>
@endsection
