<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobRequest extends FormRequest
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
            'title'            => ['required', 'string', 'max:255'],
            'company_name'     => ['required', 'string', 'max:255'],
            'location'         => ['required', 'string', 'max:255'],
            'salary'           => ['required', 'integer', 'min:0'],
            'type'             => ['required', 'string', 'in:full-time,part-time,contract,internship,temporary'],
            'experience_level' => ['required', 'string', 'in:entry,mid,senior,lead'],
            'category'         => ['required', 'string', 'in:IT,Finance,Healthcare,Education,Marketing'],
            'description'      => ['required', 'string', 'min:10'],
            'requirements'     => ['nullable', 'string'],
        ];
    }
}
