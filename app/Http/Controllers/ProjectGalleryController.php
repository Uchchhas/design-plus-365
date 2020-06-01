<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\ProjectGallery;
use DB;

class ProjectGalleryController extends Controller
{

    public function createProjectGallery()
    {
    	$projects = Project::where('publicationStatus', 1)->get();
    	$projectGalleryImages = DB::table('project_gallery')
                ->join('projects', 'project_gallery.projectId', '=', 'projects.id')
                ->select('project_gallery.*')
                ->get();
    	return view('admin.project.projectGallery',compact('projects','images', 'projectGalleryImages'));
    }


    public function storeProjectGallery(Request $request)
    {
    	$this->validate($request, [
    		'title' => 'required',
            'projectGalleryImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

    	$projectGalleryImage   = $request->file('projectGalleryImage');
        $name           = $projectGalleryImage->getClientOriginalName();
        $uploadPath     = 'frontEnd/images/project-image/gallery-image/';
        $projectGalleryImage->move($uploadPath, $name);
        $imageUrl       = $uploadPath . $name;
        $this->saveProjectGalleryInfo($request, $imageUrl);
        return back()->with('success', 'Image Uploaded successfully.');
    }

    protected function saveProjectGalleryInfo($request, $imageUrl) {
        $projectGallery                    		= new ProjectGallery();
        $projectGallery->projectId        		= $request->projectId;
        $projectGallery->title      			= $request->title;
        $projectGallery->projectGalleryImage  	= $imageUrl;
        $projectGallery->save();
    }


    // public function deleteProjectGallery($id)
    // {
    // 	ProjectGallery::find($id)->delete();
    // 	return back()
    // 		->with('success','Image Delete successfully.');	
    // }

    public function deleteProjectGallery($id) {
        $project_gallery_data = ProjectGallery::find($id);
        $project_gallery_data->delete();
        return back()->with('success', 'Image Delete Successfully.');
    }
}
