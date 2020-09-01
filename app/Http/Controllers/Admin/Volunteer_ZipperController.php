<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Volunteer_Zipper;
use Illuminate\Http\Request;
use Image;
use File;

class Volunteer_ZipperController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function index(Request $request)
    {
        $model = str_slug('volunteer_zipper','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $volunteer_zipper = Volunteer_Zipper::where('zipper_name', 'LIKE', "%$keyword%")
                ->orWhere('phone_number', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $volunteer_zipper = Volunteer_Zipper::paginate($perPage);
            }

            return view('admin.volunteer-zipper.index', compact('volunteer_zipper'));
        }
        return response(view('403'), 403);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $model = str_slug('volunteer_zipper','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('admin.volunteer-zipper.create');
        }
        return response(view('403'), 403);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $model = str_slug('volunteer_zipper','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            $this->validate($request, [
			'zipper_name' => 'required',
			'phone_number' => 'required'
		]);

            $volunteer_zipper = new volunteer_zipper($request->all());

            if ($request->hasFile('image')) {

                $file = $request->file('image');
                
                //make sure yo have image folder inside your public
                $volunteer_zipper_path = 'uploads/volunteer_zippers/';
                $fileName = $file->getClientOriginalName();
                $profileImage = date("Ymd").$fileName.".".$file->getClientOriginalExtension();

                Image::make($file)->save(public_path($volunteer_zipper_path) . DIRECTORY_SEPARATOR. $profileImage);

                $volunteer_zipper->image = $volunteer_zipper_path.$profileImage;
            }
            
            $volunteer_zipper->save();

            return redirect('admin/volunteer-zipper')->with('flash_message', 'Zipper Added!');
        }
        return response(view('403'), 403);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $model = str_slug('volunteer_zipper','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $volunteer_zipper = Volunteer_Zipper::findOrFail($id);
            return view('admin.volunteer-zipper.show', compact('volunteer_zipper'));
        }
        return response(view('403'), 403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $model = str_slug('volunteer_zipper','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $volunteer_zipper = Volunteer_Zipper::findOrFail($id);
            return view('admin.volunteer-zipper.edit', compact('volunteer_zipper'));
        }
        return response(view('403'), 403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $model = str_slug('volunteer_zipper','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $this->validate($request, [
			'zipper_name' => 'required',
			'phone_number' => 'required'
		]);
            $requestData = $request->all();
            

        if ($request->hasFile('image')) {
            
            $volunteer_zipper = volunteer_zipper::where('id', $id)->first();
            $image_path = public_path($volunteer_zipper->image); 
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $file = $request->file('image');
            $fileNameExt = $request->file('image')->getClientOriginalName();
            $fileNameForm = str_replace(' ', '_', $fileNameExt);
            $fileName = pathinfo($fileNameForm, PATHINFO_FILENAME);
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            $pathToStore = public_path('uploads/volunteer_zippers/');
            Image::make($file)->save($pathToStore . DIRECTORY_SEPARATOR. $fileNameToStore);

             $requestData['image'] = 'uploads/volunteer_zippers/'.$fileNameToStore;               
        }


            $volunteer_zipper = Volunteer_Zipper::findOrFail($id);
             $volunteer_zipper->update($requestData);

             return redirect('admin/volunteer-zipper')->with('flash_message', 'Zipper Updated!');
        }
        return response(view('403'), 403);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $model = str_slug('volunteer_zipper','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            Volunteer_Zipper::destroy($id);

            return redirect('admin/volunteer-zipper')->with('flash_message', 'Zipper Deleted!');
        }
        return response(view('403'), 403);

    }
}
