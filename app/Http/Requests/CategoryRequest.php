<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class CategoryRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return auth()->check();
    }

    /**
     * Prepare for validation.
     */
    protected function prepareForValidation() {
        $this->merge([
            'slug' => Str::slug($this->name),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => ['required', 'unique:categories,name,' . $this->id, 'unique:categories,slug,' . $this->id],
        ];
    }

    public function messages() {
        return [
            'name.unique' => trans('validation.custom.name.category'),
        ];
    }
}
