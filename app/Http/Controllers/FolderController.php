<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    public function index()
    {
        $folders = Folder::with('children')->whereNull('parent_id')->get();
        return response()->json($folders);
    }

    public function show($id)
    {
        $subfolders = Folder::where('parent_id', $id)->get();
        return response()->json($subfolders);
    }
}
