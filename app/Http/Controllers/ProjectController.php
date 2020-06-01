<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Project;
use DB;

class ProjectController extends Controller {

    public function createProject() {
        $categories = Category::where('publicationStatus', 1)->get();
        return view('admin.project.createProject', ['categories' => $categories]);
    }

    public function storeProject(Request $request) {
        $this->validate($request, [
            'projectName'       => 'required',
            'projectImage'      => 'required',
        ]);

        $projectImage   = $request->file('projectImage');
        $name           = $projectImage->getClientOriginalName();
        $uploadPath     = 'frontEnd/images/project-image/';
        $projectImage->move($uploadPath, $name);
        $imageUrl       = $uploadPath . $name;

        $feedbackImage   = $request->file('feedbackImage');
        $name1           = $feedbackImage->getClientOriginalName();
        $uploadPath1     = 'frontEnd/images/project-image/feedback-image/';
        $feedbackImage->move($uploadPath1, $name1);
        $feedbackImageUrl= $uploadPath1 . $name1;
        $this->saveProjectInfo($request, $imageUrl, $feedbackImageUrl);
        return redirect('/project/add')->with('message', 'Project Info Save Sauccessfully.');
    }

    protected function saveProjectInfo($request, $imageUrl, $feedbackImageUrl) {
        $project                    = new Project();
        $project->categoryId        = $request->categoryId;
        $project->projectName       = $request->projectName;
        $project->projectDescription= $request->projectDescription;
        $project->projectImage      = $imageUrl;
        $project->feedbackImage     = $feedbackImageUrl;
        $project->publicationStatus = $request->publicationStatus;
        $project->save();
    }

    public function manageProject() {
        $projects = DB::table('projects')
                ->join('categories', 'projects.categoryId', '=', 'categories.id')
//                    ->select('projects.id', 'projects.projectName', 'projects.projectPrice', 'projects.projectQuantity', 'projects.publicationStatus', 'categories.categoryName')
                ->select('projects.*', 'categories.categoryName')
                ->get();
        return view('admin.project.manageProject', ['projects' => $projects]);
    }

    public function viewProject($id) {
        $projectById = DB::table('projects')
                ->join('categories', 'projects.categoryId', '=', 'categories.id')
//                    ->select('projects.id', 'projects.projectName', 'projects.projectPrice', 'projects.projectQuantity', 'projects.publicationStatus', 'categories.categoryName')
                ->select('projects.*', 'categories.categoryName')
                ->where('projects.id', $id)
                ->first();
        return view('admin.project.viewProject', ['project' => $projectById]);
    }

    public function editProject($id) {
//       ['projectById' => $projectById, 'categories' => $categories];

        $categories = Category::where('publicationStatus', 1)->get();
        $projectById = Project::where('id', $id)->first();
//        return view('admin.project.editProject', ['projectById' => $projectById, 'categories' => $categories]);
        return view('admin.project.editProject')
                        ->with('projectById', $projectById)
                        ->with('categories', $categories);
    }

    public function updateProject(Request $request) {
        $imageUrl = $this->imageExistStatus($request);
        $feedbackImageUrl = $this->feedbackImageExistStatus($request);
        $this->validate($request, [
            'projectName'       => 'required',
        ]);

        
        $project                    = Project::find($request->project_id);
        $project->categoryId        = $request->categoryId;
        $project->projectName       = $request->projectName;
        $project->projectDescription= $request->projectDescription;
        $project->projectImage      = $imageUrl;
        $project->feedbackImage     = $feedbackImageUrl;
        $project->publicationStatus = $request->publicationStatus;
        $project->save();
        return redirect('/project/manage')->with('message', 'Project Info Update Successfully.');
    }

    private function imageExistStatus($request) {
        $projectById    = Project::where('id', $request->project_id)->first();
        $projectImage   = $request->file('projectImage');
        if ($projectImage) {
            unlink($projectById->projectImage);
            $name       = $projectImage->getClientOriginalName();
            $uploadPath = 'frontEnd/images/project-image/';
            $projectImage->move($uploadPath, $name);
            $imageUrl   = $uploadPath . $name;
        } else {
            $imageUrl   = $projectById->projectImage;
        }
        return $imageUrl;
    }
        
    private function feedbackImageExistStatus($request) {
        $projectById    = Project::where('id', $request->project_id)->first();
        $feedbackImage   = $request->file('feedbackImage');
        if ($feedbackImage) {
            unlink($projectById->feedbackImage);
            $name1       = $feedbackImage->getClientOriginalName();
            $uploadPath1 = 'frontEnd/images/project-image/feedback-image/';
            $feedbackImage->move($uploadPath1, $name1);
            $feedbackImageUrl   = $uploadPath1 . $name1;
        } else {
            $feedbackImageUrl   = $projectById->feedbackImage;
        }
        return $feedbackImageUrl;
    }

    public function deleteProject($id) {
        $project_data = Project::find($id);
        $project_data->delete();
        return redirect('/project/manage')->with('message', 'Project Info Delete Successfully.');
    }

}
