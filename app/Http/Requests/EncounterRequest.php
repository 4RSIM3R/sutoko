<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EncounterRequest extends FormRequest
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
            // 'registration_id' => 'required|string|max:255',
            // 'arrived' => 'required|date_format:Y-m-d H:i:s',
            // 'in_progress_start' => 'required|date_format:Y-m-d H:i:s',
            // 'in_progress_end' => 'required|date_format:Y-m-d H:i:s',
            // 'finished' => 'required|date_format:Y-m-d H:i:s',
            // 'consultation_method' => 'required|in:RAJAL,IGD,RANAP,HOMECARE,TELEKONSULTASI',
            // 'patient_id' => 'required|string|max:255',
            // 'patient_name' => 'required|string|max:255',
            // 'practitioner_id' => 'required|string|max:255',
            // 'practitioner_name' => 'required|string|max:255',
            // 'location_id' => 'required|string|max:255',
            // 'location_name' => 'required|string|max:255',
            // 'clinical_status' => 'required|in:active,inactive,resolved',
            // 'category' => 'required|string|in:Diagnosis,Keluhan',
            // 'code' => 'required|string|max:255',
            // 'onset_datetime' => 'required|date_format:Y-m-d H:i:s',
            // 'recorded_datetime' => 'required|date_format:Y-m-d H:i:s',
            'icd_10' => 'required|string|exists:satusehat_icd10,icd10_code',
            'icd_9' => 'required|string|exists:satusehat_icd9cm,icd9cm_code',
            'location_id' => 'required|string|exists:locations,satset_id',
            'patient_id' => 'required|string|exists:patients,satset_id',
            'practitioner_id' => 'required|string|exists:practioners,satset_id',
        ];
    }
}
