<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;
use App\Subscribe;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribers = Subscribe::all();
        $subscribers = Subscribe::paginate(10);
//        dd($subscribe);
        return view('admin/subscriber/subscribers', compact('subscribers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'email|string|unique:subscribes',
        ]);
        \App\Subscribe::create($validated);

        $subs = new Subscribe();
        $subs->email = $request->email;
        return back()->with('message', 'You have successfully subscribers!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //define view
        $subscriber = Subscribe::find($id);
        return view('admin/subscriber/subscriber-edit-update', compact('subscriber'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subscriber = Subscribe::find($id);
        $subscriber->email = $request->input('email');
        $subscriber->save();
        return redirect('admin/subscriber/subscribers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subscribe::destroy($id);
        return redirect('admin/subscriber/subscribers');
    }
}
