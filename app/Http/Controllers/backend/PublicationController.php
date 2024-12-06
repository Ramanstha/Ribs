<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PublicationRequest;
use App\Models\Publication;
use File;

class PublicationController extends Controller
{
    public function View(){
        $file = Publication::orderby('id','desc')->get();
        return view('backend.publication.view',['file'=>$file]);
    }

    public function Publication(){
        return view('backend.publication.create');
    }

    Public function Store(PublicationRequest $request){
        $data = $request->except('_token','file','image');
       
        if ($request->file('file')){
        $filename = $request->file('file');
        $file = time() . $request->title . 'file' . '.' . $filename->getClientOriginalExtension();
        $destination = public_path('storage/publication/file/');
        $filename->move($destination, $file);
        $data['file']=$file;
        }

        if ($request->file('image')){
        $filename1 = $request->file('image');
        $file1 = time() . $request->title . 'image' . '.' . $filename1->getClientOriginalExtension();
        $destination = public_path('storage/publication/image/');
        $filename1->move($destination, $file1);
        $data['image']=$file1;
        }
        // $data['created_at']=\Carbon\Carbon::now()->format('M-d-Y');
        $publication = Publication::insert($data);
        return redirect()->route('view.publication')->with('message','Data Inserted Successfully !!!');

    }

    public function Edit($id){
        $publication=Publication::find($id);
        return view('backend.publication.edit',['publication'=>$publication]);
    }

    public function Update(Request $request,$id){
        $publication=Publication::find($id);
        $data = $request->except('_token','file','image');
        
        if ($request->file('file')){
            File::delete(public_path('storage/publication/file/'.$publication->file));
            $filename = $request->file('file');
            $file = time() . $request->title . 'file' . '.' . $filename->getClientOriginalExtension();
            $destination=public_path('storage/publication/file/');
            $filename->move($destination,$file);
            $data['file']=$file;
        }

        if ($request->file('image')){
            File::delete(public_path('storage/publication/image/'.$publication->image));
            $filename1 = $request->file('image');
            $file1 = time() . $request->title . 'image' . '.' . $filename1->getClientOriginalExtension();
            $destination=public_path('storage/publication/image/');
            $filename1->move($destination,$file1);
            $data['image']=$file1;
        }
        
        $publication->update($data);
        return redirect()->route('view.publication')->with('message','Data Updated Successfully!!!');
    }

    public function publicationstatus(Request $request){
        $publication = Publication::find($request->publication_id);
        $publication->status=$request->publicationstatus;
        $publication->save();
        return response()->json(['status change']);
    }

    public function Delete($id){
        $data=Publication::find($id);
        $pdf_path=public_path('storage/publication/file/').$data->file;
        if(file_exists($pdf_path) && $data->file!=null){
            unlink($pdf_path);
            $data->delete();
        }
        else{
            $data->delete();
        }

        $img_path=public_path('storage/publication/image/').$data->image;
        if(file_exists($img_path) && $data->image!=null){
            unlink($img_path);
            $data->delete();
        }
        else{
            $data->delete();
        }
        return redirect()->back()->with('message',"Data Deleted Successfully!!!");
    }
}
