<?php


namespace Myapp\Http\FormRequests;


use Illuminate\Foundation\Http\FormRequest;

class UpdateTodoRequest extends FormRequest
{
    public function rules()
    {
        return array(
            'subject'     => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string|max:255',
            'priority'    => 'sometimes|required|integer',
            'finished'    => 'sometimes|required|boolean',
        );
    }

}