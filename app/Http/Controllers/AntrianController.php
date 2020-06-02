<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Queue;
use App\Dry;
use App\Iron;
class AntrianController extends Controller
{

    public function index()
    {
        $queues = Queue::all();
        // $driest = Dry::all();
        // $irons = Iron::all();
        $data = [
            'queues' => $queues,
            // 'driest' => $driest,
            // 'irons' => $irons  
        ];
        return view('/antrian/antrian', $data);
        // return view('queues.index', $data);
    }

    public function create()
    {
        return view('/antrian/tambahantrian');
    }


    

    public function store(Request $request)
    {
        Queue::create($request->all());
        // Dry::create($request->all());
        // Iron::create($request->all());

        return redirect('antrian/antrian');
    }

    public function edit(queue $queue)
    {
        return view('/antrian/edit', compact('queue'));
    }

    public function update(Request $request, queue $queue)
    {
        $queue->update($request->all());
        // $dry->update($request->all());
        // $iron->update($request->all());

        return redirect('/antrian/antrian');
    }

    public function delete(queue $queue)
    {
        $queue->delete();
        // $dry->delete();
        // $iron->delete();

        return redirect('/antrian/antrian');
    }

    //  public function index(){
    //     $queues = Queue::all();
    //     return view('antrian', ['queues'=>$queues]);
    // }

    // public function create(Request $request){
    //     if ($request->input('queue')) {
    //     $queue = new Queue;
    //     $queue->content = $request->input('queue');
    //     $queue->save(); 
    // }
    // return redirect()->back();
    // }

    // public function update($id){
    //     $queue = Queue::find($id);
    //     $queue->toggleStatus();
    //     $queue->save();
    //     return redirect()->back();
    // }

    // public function delete($id){
    //     $queue = Queue::find($id);
    //     $queue->delete();
    //     return redirect()->back();
    // }
}