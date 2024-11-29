<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectsRequest extends FormRequest
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
            "name" => "required|string|min:2|max:30",
            "category_id" => "required|numeric|integer|exists:categories,id",
            "technologies" => "required|array|exists:technologies,id",
            "description" => "required|string|min:20",
            "author" => "required|string|min:2|max:50",
            "image" => "image|nullable|max:250"
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "Il nome è obbligatorio",
            "name.min" => "Il nome deve essere composto da almeno 2 caratteri",
            "description.required" => "La descrizione è obbligatoria",
            "description.min" => "La descrizione deve essere più lunga di 20 caratteri",
            "author.required" => "L'autore è obbligatorio",
            "author.min" => "Il nome autore deve essere composto da almeno 2 caratteri",
            "image.max" => "Il file dell'immaghine non può superare 250 kbyte di spazio"
            ];
    }
}
