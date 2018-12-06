<?php


namespace Myapp\Model;


use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = array(
        'subject',
        'description',
        'priority',
        'finished'
    );
}