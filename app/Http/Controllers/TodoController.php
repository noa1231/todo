<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\TodotRequest;

class TodoController extends Controller
{
    public function index()
    {
        $items = Todo::all();
        return view('index', ['items' => $items]);
    }   
    public function create(TodotRequest $request)
    {
        $form = $request->all();
        Todo::create($form);
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $author = Todo::find($request->id);
        $author->delete();
        return redirect('/');
    }
    public function update(Request $request)
    {
        $inputs = $request->all();
        Todo::where('id', $request->id)->update(['content'=> $request->content]);
        return redirect('/');
    }
}