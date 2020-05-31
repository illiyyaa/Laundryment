<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Queue;
class AntrianController extends Controller
{
     public function index(){
        $queues = Queue::all();
        return view('antrian', ['queues'=>$queues]);
    }

    public function create(Request $request){
        if ($request->input('queue')) {
        $queue = new Queue;
        $queue->content = $request->input('queue');
        $queue->save(); 
    }
    return redirect()->back();
    }

    public function update($id){
        $queue = Queue::find($id);
        $queue->toggleStatus();
        $queue->save();
        return redirect()->back();
    }

    public function delete($id){
        $queue = Queue::find($id);
        $queue->delete();
        return redirect()->back();
    }
}