<?php


namespace Myapp\Http\Controllers\Todo;


use Myapp\Http\Controllers\Controller;
use Myapp\Http\FormRequests\PostTodoRequest;
use Myapp\Http\FormRequests\UpdateTodoRequest;
use Myapp\Model\Todo;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class TodoController
 * @package Myapp\Http\Controllers\Todo
 */
class TodoController extends Controller
{
    /**
     * @param PostTodoRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function post(PostTodoRequest $request)
    {
        $request->validated();

        $todo = Todo::create(
            array(
                'subject'     => $request->get('subject'),
                'description' => $request->get('description'),
                'priority'    => $request->get('priority'),
                'finished'    => $request->get('finished'),
            )
        );

        return response()->json(array($todo), Response::HTTP_CREATED);
    }

    /**
     * @param Todo $todo
     * @param UpdateTodoRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function patch(Todo $todo, UpdateTodoRequest $request)
    {
        $request->validated();
        $todo->update($request->all());

        return response()->json(array($todo), Response::HTTP_OK);
    }

    /**
     * @param Todo $todo
     * @return \Illuminate\Http\JsonResponse
     */
    public function get(Todo $todo)
    {
        return \response()->json(array($todo), Response::HTTP_OK);
    }

    public function cget()
    {
        return \response()->json(array(Todo::all()), Response::HTTP_OK);
    }
}