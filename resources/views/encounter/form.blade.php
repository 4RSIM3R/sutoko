@extends('layouts.app')

@section('content')
    <form class="flex flex-col space-y-4" action="{{ route('encounter.store') }}" method="post">
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
            <label for="icd_10" class="block mb-2 text-sm font-medium text-gray-900">ICD 10 (Diagnosa) </label>
            <select name="icd_10" id="icd_10"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md block w-full p-3">

            </select>
            @error('icd_10')
                <div class="mt-2">
                    <div class="text-sm text-red-600">
                        {{ $errors->first('icd_10') }}
                    </div>
                </div>
            @enderror
        </div>

        <div class="mb-5">
            <label for="icd_9" class="block mb-2 text-sm font-medium text-gray-900">ICD 9 (Tindakan) </label>
            <select name="icd_9" id="icd_9"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md block w-full p-3">

            </select>
            @error('icd_9')
                <div class="mt-2">
                    <div class="text-sm text-red-600">
                        {{ $errors->first('icd_9') }}
                    </div>
                </div>
            @enderror
        </div>

        <div class="mb-5">
            <label for="location_id" class="block mb-2 text-sm font-medium text-gray-900">Location</label>
            <select name="location_id" id="location_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md block w-full p-3">

            </select>
            @error('location_id')
                <div class="mt-2">
                    <div class="text-sm text-red-600">
                        {{ $errors->first('location_id') }}
                    </div>
                </div>
            @enderror
        </div>

        <div class="mb-5">
            <label for="practitioner_id" class="block mb-2 text-sm font-medium text-gray-900">Practitioner</label>
            <select name="practitioner_id" id="practitioner_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md block w-full p-3">

            </select>
            @error('practitioner_id')
                <div class="mt-2">
                    <div class="text-sm text-red-600">
                        {{ $errors->first('practitioner_id') }}
                    </div>
                </div>
            @enderror
        </div>

        <div class="mb-5">
            <label for="patient_id" class="block mb-2 text-sm font-medium text-gray-900">Patient</label>
            <select name="patient_id" id="patient_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md block w-full p-3">

            </select>
            @error('patient_id')
                <div class="mt-2">
                    <div class="text-sm text-red-600">
                        {{ $errors->first('patient_id') }}
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

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#icd_10').select2({
                minimumInputLength: 2,
                placeholder: 'Pilih Diagnosa (ICD 10)',
                ajax: {
                    url: '{{ route('icd10.index') }}',
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            search: params.term,
                        };
                    },
                    processResults: function(response, params) {
                        console.log(response);
                        return {
                            results: response.map(res => {
                                return {
                                    text: `${res.icd10_code} - ${res.icd10_id}`,
                                    id: res.icd10_code,
                                }
                            })
                        }
                    },
                }
            })
        })

        $(document).ready(function() {
            $('#icd_9').select2({
                minimumInputLength: 2,
                placeholder: 'Pilih Tindakan (ICD 9)',
                ajax: {
                    url: '{{ route('icd9.index') }}',
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            search: params.term,
                        };
                    },
                    processResults: function(response, params) {
                        return {
                            results: response.map(res => {
                                return {
                                    text: `${res.icd9cm_code} - ${res.icd9cm_id}`,
                                    id: res.icd9cm_code,
                                }
                            })
                        }
                    },
                }
            })
        })

        $(document).ready(function() {
            $('#location_id').select2({
                minimumInputLength: 2,
                placeholder: 'Pilih Lokasi',
                ajax: {
                    url: '{{ route('location.search') }}',
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            search: params.term,
                        };
                    },
                    processResults: function(response, params) {
                        console.log(response);
                        return {
                            results: response.map(res => {
                                return {
                                    text: `${res.name}`,
                                    id: res.satset_id,
                                }
                            })
                        }
                    },
                }
            })
        })

        $(document).ready(function() {
            $('#practitioner_id').select2({
                minimumInputLength: 2,
                placeholder: 'Pilih Practitioner',
                ajax: {
                    url: '{{ route('practioner.search') }}',
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            search: params.term,
                        };
                    },
                    processResults: function(response, params) {
                        console.log(response);
                        return {
                            results: response.map(res => {
                                console.log(res);
                                return {
                                    text: `${res.name}`,
                                    id: res.satset_id,
                                }
                            })
                        }
                    },
                }
            })
        })

        $(document).ready(function() {
            $('#patient_id').select2({
                minimumInputLength: 2,
                placeholder: 'Pilih Patient',
                ajax: {
                    url: '{{ route('patient.search') }}',
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            search: params.term,
                        };
                    },
                    processResults: function(response, params) {
                        console.log(response);
                        return {
                            results: response.map(res => {
                                console.log(res);
                                return {
                                    text: `${res.name} - ${res.nik}`,
                                    id: res.satset_id,
                                }
                            })
                        }
                    },
                }
            })
        })
    </script>
@endpush
