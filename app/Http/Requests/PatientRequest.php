<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nik' => 'required|string|max:16',
            'name' => 'required|string|max:255',
            'telecom' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'postal_code' => 'required|string|max:10',
            'province_code' => 'required|string|max:10',
            'city_code' => 'required|string|max:10',
            'district_code' => 'required|string|max:10',
            'village_code' => 'required|string|max:10',
            'rt' => 'required|string|max:3',
            'rw' => 'required|string|max:3',
            'gender' => 'required|in:male,female',
            'birth_date' => 'required|date',
            'deceased' => 'required|boolean',
            'marital_status' => 'required|in:married,unmarried,never,divorced,widowed',
            'multiple_birth' => 'required|integer',
            'emergency_contact_name' => 'required|string|max:255',
            'emergency_contact_number' => 'required|string|max:15',
        ];
    }
}
