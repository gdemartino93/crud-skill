<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSkillRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        // mi prendo l'id dell'oggetto per consentire dopo l'ignore sull' univoque
        $skillId = $this->route('skill')->id;
        return [
            'name' => ['required', 'min:3','max:32'],

            // Il campo description è univoco quindi se vado a modificare solo il nome dell'oggetto non mi consente la modifica in quanto description è gia presente all'interno.
            'description' => [
                'required',
                Rule::unique('skills','description') -> ignore($skillId)
            ]
        ];
    }
}
