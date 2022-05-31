<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Http\Requests\StoreFileRequest;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::all();

        return view('files.index', [
            'files' => $files
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreFileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFileRequest $request)
    {
        $fileName = time() . '.'. $request->file->extension();

        $type = $request->file->getClientMimeType();
        $size = $request->file->getSize();
        $ip = $request->ip();

        $request->file->move(public_path('file'), $fileName);

        File::create([
            'name' => $fileName,
            'type' => $type,
            'size' => $size,
            //'ip' => $ip ToDo: kažkodėl neveikia, reikia patikrinkti kodėl
        ]);

        return redirect()->route('files.index')->withSuccess(__('File added successfully.'));
    }

}
