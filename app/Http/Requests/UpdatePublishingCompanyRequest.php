<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePublishingCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'min:3|string|required|max:191|unique:publishingCompanies,name,' . $this->publishingCompany->id
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nome'
        ];
    }
}
