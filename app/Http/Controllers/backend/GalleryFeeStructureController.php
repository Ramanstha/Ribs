<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\GalleryfeestructureRequest;
use App\Models\Galleryfeestructure;
use File;
use Image;

class GalleryFeeStructureController extends Controller
{
    public function View(){
        $data=Galleryfeestructure::orderBy('id','desc')->get();
        return view('backend.gallery&feestructure.view',['data'=>$data]);
    }

    public function GalleryAndFee(){
        return view('backend.gallery&feestructure.create');
    }
    
    Public function Store(GalleryfeestructureRequest $request){
        $data = $request->except('_token','image');
        if ($request->hasFile('image')) {
        foreach($request->image as $image){
                $destinationimage = $image;
                $destinationimage_name = rand(0, 9999) . '-destination' . '.webp';
                $destinationPath = public_path('storage/galleryfeestructure/main');
                $thumbdestinationPath = public_path('storage/galleryfeestructure/thumbnail');
                if (!file_exists($destinationPath) && !file_exists($thumbdestinationPath)) {
                    mkdir($destinationPath, 0777, true);
                    mkdir($thumbdestinationPath, 0777, true);
                }
                $orginalimage = Image::make($destinationimage->getRealPath())->encode('webp', 100)->save($destinationPath . '/' . $destinationimage_name);
                $img = Image::make($destinationimage->getRealPath())->encode('webp', 100)->resize(374, 321)->save($thumbdestinationPath . '/' . $destinationimage_name);
                $data['image'] = $destinationimage_name;
                $gallery = Galleryfeestructure::insert($data);
            }    
        }
        return redirect()->route('view.galleryandfee')->with('message','Data Inserted Successfully !!!');

    }

    public function Edit($id){
        $data=Galleryfeestructure::Find($id);
        return view('backend.gallery&feestructure.edit',['data'=>$data]);
    }

    public function Update(Request $request,$id){
        $data1=Galleryfeestructure::find($id);
        $data = $request->except('_token','image');
        if ($request->file('image')){
            File::delete(public_path('storage/galleryfeestructure/'.$data1->image));
                $filename=$request->file('image');
                $file = rand(1,3333) . '-' . 'image' . '.' . $filename->getClientOriginalExtension();
                $destination = public_path('storage/galleryfeestructure/');
                $filename->move($destination, $file);
                $data1['image'] = $file;
            }
            $data1->type=$request->type;
            $data1->save();
        return redirect()->route('view.galleryandfee')->with('message','Data Updated Successfully!!!');
    }
    
    public function Delete($id){
        $data=Galleryfeestructure::find($id);
        $img_path=public_path('storage/galleryfeestructure/').$data->image;
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
