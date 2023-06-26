<?php

namespace App\Http\Controllers;

use App\Repositories\TodoRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TodoController extends Controller
{
   protected $todoRepository;

   public function __construct(TodoRepository $todoRepository)
   {
        $this->todoRepository = $todoRepository;
   }

   public function getAllTodos(Request $request) {
        try {
            return $this->todoRepository->getAllTodos(); 
        } catch(Exception $err) {
            Log::error($err->getMessage());
        }
   }

   public function storeTodo(Request $request) {
        try {
            $this->todoRepository->storeTodo($request); 
            return response()->json(['message' => "This todo has been created successfully."], 201);
        } catch(Exception $err) {
            Log::error($err->getMessage());
        }
    }

   public function completedTodo($id, Request $request) {
        try {
            $this->todoRepository->completedTodo($id); 
            return response()->json(['message' => "This todo has been completedTodo successfully."], 200);
        } catch(Exception $err) {
            Log::error($err->getMessage());
        }
    }
   public function UncompletedTodo($id, Request $request) {
        try {
            $this->todoRepository->UncompletedTodo($id); 
            return response()->json(['message' => "This todo has been uncompletedTodo successfully."], 200);
        } catch(Exception $err) {
            Log::error($err->getMessage());
        }
    }

   public function deleteTodo($id, Request $request) {
        try {
            $this->todoRepository->deleteTodo($id); 
            return response()->json(['message' => "This todo has been deleted successfully."], 200);
        } catch(Exception $err) {
            Log::error($err->getMessage());
        }
    }

}
