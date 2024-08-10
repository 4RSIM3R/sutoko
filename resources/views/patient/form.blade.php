@extends('layouts.app')

@section('content')
    <form class="flex flex-col space-y-4" action="{{ route('patient.store') }}" method="post">
        @csrf
        <div>
            <h1 class="text-xl font-semibold">Form Patient</h1>
            <p class="text-sm text-gray-400 mt-1">Add new patient</p>
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
            <label for="nik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIK</label>
            <input type="text" id="nik" name="nik"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                placeholder="NIK Practioner" type="nik" required />
            @error('nik')
                <div class="mt-2">
                    <div class="text-sm text-red-600">
                        {{ $errors->first('nik') }}
                    </div>
                </div>
            @enderror
        </div>

        <div class="mb-5">
            <label for="birth_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birth Date</label>
            <input type="date" id="birth_date" name="birth_date"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                placeholder="Birth Date" type="birth_date" required />
            @error('birth_date')
                <div class="mt-2">
                    <div class="text-sm text-red-600">
                        {{ $errors->first('birth_date') }}
                    </div>
                </div>
            @enderror
        </div>

        <div class="mb-5">
            <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
            <select id="gender" name="gender"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                placeholder="Gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            @error('gender')
                <div class="mt-2">
                    <div class="text-sm text-red-600">
                        {{ $errors->first('gender') }}
                    </div>
                </div>
            @enderror
        </div>
        <div class="mb-5">
            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
            <textarea type="text" id="address" name="address"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                placeholder="Address" type="address" required></textarea>
            @error('address')
                <div class="mt-2">
                    <div class="text-sm text-red-600">
                        {{ $errors->first('address') }}
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
