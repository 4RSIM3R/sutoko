@extends('layouts.app')

@section('content')
    <form class="flex flex-col space-y-4" action="{{ route('location.store') }}" method="post">
        @csrf
        <div>
            <h1 class="text-xl font-semibold">Form Location</h1>
            <p class="text-sm text-gray-400 mt-1">Add new location (automatically use root organization id) </p>
        </div>

        @if ($errors->any())
            <div class="mb-5">
                @foreach ($errors->all() as $error)
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            </div>
        @endif

        <div class="mb-5">
            <label for="identifier" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Identifier</label>
            <input type="text" id="identifier" name="identifier"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                placeholder="Identifier Location" required />
            @error('identifier')
                <div class="mt-2">
                    <div class="text-sm text-red-600">
                        {{ $errors->first('identifier') }}
                    </div>
                </div>
            @enderror
        </div>

        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Identifier</label>
            <input type="text" id="name" name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                placeholder="Location Name" required />
            @error('name')
                <div class="mt-2">
                    <div class="text-sm text-red-600">
                        {{ $errors->first('name') }}
                    </div>
                </div>
            @enderror
        </div>

        <button type="submit"
            class="text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
            Submit
        </button>

    </form>
@endsection
