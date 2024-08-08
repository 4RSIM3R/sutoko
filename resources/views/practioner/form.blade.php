@extends('layouts.app')

@section('content')
    <form class="flex flex-col space-y-4" action="{{ route('practioner.store') }}" method="post">
        @csrf
        <div>
            <h1 class="text-xl font-semibold">Form Practioner</h1>
            <p class="text-sm text-gray-400 mt-1">Add new practioner</p>
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
            <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
            <select id="role" name="role"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                placeholder="Role" required>
                <option value="doctor">Doctor</option>
                <option value="nurse">Nurse</option>
                <option value="pharmacist">Pharmacist</option>
                <option value="other">Other</option>
            </select>
            @error('roles')
                <div class="mt-2">
                    <div class="text-sm text-red-600">
                        {{ $errors->first('nik') }}
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
