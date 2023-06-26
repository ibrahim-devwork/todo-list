<?php

namespace App\Repositories;

use App\Models\Todo;

class TodoRepository {
    protected $model;

    public function __construct(Todo $model)
    {
        $this->model = $model;
    }

    public function getAllTodos() {
        return $this->model->get();
    }

    public function storeTodo($data) {
        $todo               = new $this->model;
        $todo->todo         = $data['todo'];
        $todo->is_completed = 0;
        $todo->save();
        return true;

    }

    public function completedTodo($id) {
        $todo               = $this->model->find($id);
        $todo->is_completed = 1;
        $todo->update();
        return true;

    }

    public function UncompletedTodo($id) {
        $todo               = $this->model->find($id);
        $todo->is_completed = 0;
        $todo->update();
        return true;

    }

    public function deleteTodo($id) {
        $todo = $this->model->find($id);
        $todo->delete();
        return true;
    }

}

?>