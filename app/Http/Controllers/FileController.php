<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\File_Upload;

use App\Models\filings;

class FileController extends Controller
{
    public function open_file_form(){
        return view('File_Upload.upload_file');
    }
    public function store_file(Request $req)
    {
        $req->validate([
            'file' => 'required|mimes:pdf,doc,docx,xlsx,csv,jpg,png|max:4048',
        ]);
    
        $filename = time() . '.' . $req->file('file')->extension();
    
        // $req->file('file')->move('uploads', $filename);
        $req->file('file')->storeAs('uploads', $filename);


        $filewritter = new filings;
        $filewritter -> file = $filename;
        $filewritter->save();

        

    
        return redirect()->route('upload_file')->with('success', 'File uploaded successfully');
    }
    public function show_file_data(){
        $data = filings::all();
        return view('File_Upload.display_file_data', compact('data'));
        }
    public function file_view($id)
    {
            $data = filings::find($id);
            return view ('File_Upload.View_file', compact('data'));
    }
            
            public function file_download($file){
                $filePath = storage_path('app/uploads/' . $file);

                if (file_exists($filePath)) {
                    return response()->download($filePath);
                } else {
                    // Handle file not found
                    abort(404, 'File not found');
                }
                }
                    
}
