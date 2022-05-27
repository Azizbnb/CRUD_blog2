<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules() //regles de validation des données
    {
        if (request()->routeIs('posts.store')) {
            $imageRule = 'image|required';
        } elseif (request()->routeIs('posts.update')) {
            $imageRule = 'image|sometimes'; // sometimes = obligatoire que si elle est dans la request
        }
            

        return [
            'title' => 'required',
            'content' => 'required',
            'image' => $imageRule, // doit etre une image ET doit etre 'required'(obligatoire)
            'category' => 'required'
        ];
    }

    // fonction qui sera lu en première (double verification)
    protected function prepareForValidation()
    {
        if ($this->image == null) {
            $this->request->remove('image'); //image = Null donc : l'enleve.
        }
    }




}
