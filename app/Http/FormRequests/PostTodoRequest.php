<?php


namespace Myapp\Http\FormRequests;


use Illuminate\Foundation\Http\FormRequest;

class PostTodoRequest extends FormRequest
{
    public function rules()
    {
        return array(
            'subject' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'priority' => 'required|integer',
            'finished' => 'required|boolean'
        );
    }
}