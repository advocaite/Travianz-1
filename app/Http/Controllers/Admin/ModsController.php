<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use DirectoryIterator;
use Illuminate\Http\Request;

class ModsController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function index()
    {
        $mods = [];
        $dir = new DirectoryIterator(base_path('mods/'));

        foreach ($dir as $fileinfo) {
            if ($fileinfo->isDir() && !$fileinfo->isDot()) {
                $mods[$fileinfo->getFilename()] = [];
                $file = base_path('mods/') . $fileinfo->getFilename() . DIRECTORY_SEPARATOR . 'manifest.json';
                if (is_file($file)) {
                    $file = json_decode(file_get_contents($file), true);
                    array_push($mods[$fileinfo->getFilename()], $file);
                }
            }
        }

        return view('admin.mods.index', compact('mods'));
    }

}
