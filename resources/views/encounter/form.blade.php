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

        <button type="submit"
            class="text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
            Submit
        </button>

    </form>
@endsection
