<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function create()
    {
        return view('files.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf,docx|max:2048',
        ]);

        $path = $request->file('file')->store('uploads', 'public');

        return back()->with('success', 'Archivo subido exitosamente.')->with('file', $path);
    }

    public function index()
    {
        $files = Storage::disk('public')->files('uploads');
        return view('files.index', compact('files'));
    }

    public function download($file)
    {
        $filePath = storage_path('app/public/uploads/' . $file);
        return response()->download($filePath);    }

    public function destroy($file)
    {
        Storage::disk('public')->delete('uploads/' . $file);
        return back()->with('success', 'Archivo eliminado exitosamente.');
    }
}