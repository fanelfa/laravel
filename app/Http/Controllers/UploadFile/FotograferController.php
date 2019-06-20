<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UploadFileModel\Fotografer;
use Illuminate\Support\Str;
use Crypt;

class FotograferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $fotografer = Fotografer::all();
        
        if ($request->has('cari')) {
            $fotografer = Fotografer::where('name', 'LIKE', '%' . $request->cari . '%')->get();
        }

        $data = [
            'fotografer' => $fotografer,
        ];

        return view('fotografer.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fotografer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['id'] = (string)Str::uuid();
        Fotografer::create($data);

        return redirect()->route('fotografer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = 1;
        $fotografer = Fotografer::find($id);
        
        $data = [
            'fotografer' => $fotografer,
        ];

        return view('fotografer.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $fotografer = Fotografer::find($id);

        $data = [
            'fotografer' => $fotografer,
        ];

        return view('fotografer.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fotografer = Fotografer::find($id);

        $data = $request->except('_token');
        $fotografer->update($data);

        return redirect()->route('fotografer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fotografer = Fotografer::find($id);

        $fotografer->delete();

        return redirect()->route('fotografer.index');
    }
}
