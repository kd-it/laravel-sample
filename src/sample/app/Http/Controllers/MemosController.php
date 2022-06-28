<?php

namespace App\Http\Controllers;

use App\Models\memos;
use Illuminate\Http\Request;

class MemosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = memos::all(); // メモ取得(全部)
        return view('index', ['message' => "ハロー・ワールド", 'memos' => $data]); // 引数リストに加える
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\memos  $memos
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id, memos $memos)
    {
        $data = memos::find($id);
        return view('show', ['memo' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\memos  $memos
     * @return \Illuminate\Http\Response
     */
    public function edit(memos $memos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\memos  $memos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, memos $memos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\memos  $memos
     * @return \Illuminate\Http\Response
     */
    public function destroy(memos $memos)
    {
        //
    }
}
