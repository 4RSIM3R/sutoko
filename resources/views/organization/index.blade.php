@extends('layouts.app')

@section('content')
    <div>
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-xl font-semibold">Organization</h1>
                <p class="text-sm text-gray-400 mt-1">Organization (Organisasi)</p>
            </div>

            <a href="{{ route('organization.create') }}"
                class="flex items-center py-2.5 px-5 text-sm font-medium focus:outline-none bg-white rounded-md border border-gray-200 hover:bg-gray-100 focus:z-10">
                <box-icon class="h-4 w-4 mr-2" name='plus'></box-icon>
                Add Organization
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


    </div>
@endsection
