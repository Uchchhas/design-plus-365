<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Project;
use DB;

class WelcomeController extends Controller
{
    public function index(){
         $category_data = DB::table('categories')->where('publicationStatus', '1')->get();
         $project_data=DB::table('projects')->where('publicationStatus', 1)->get();
        return view('frontEnd.home.homeContent', compact('category_data', 'project_data'));
    }

    public function about(){
        return view('frontEnd.pages.about');
    }
    
    public function quote(){
        return view('frontEnd.pages.quote');
    }
    public function searchCategoryId(Request $request){
        $categoryId=$request->categoryId;
        $project_data=DB::table('projects')->where('categoryId',$categoryId)
                      ->where('publicationStatus', 1)->get();

 $output = '';
            foreach($project_data as $key=> $project_data){
   
   if($key == 0){
    $active = 'active';
   }else{
$active = '';
   }
              
        $output .= '<div class="carousel-item '.$active.'">
                            <h4 class="text-black font-roboto font-weight-normal text-center">' . $project_data->projectName . '</h4>
                            <img src="' . $project_data->projectImage . '?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                 class="d-block w-100" alt="">
                            <div class="carousel-caption d-none d-md-block p-0">
                                <img src="' . $project_data->feedbackImage . '" class="img-fluid" alt="">
                            </div>
                    </div>'; 


            }
           $data = array(
                'output' => $output
                
            );
            echo json_encode($data);

        // echo '<pre>';
        // print_r($project_data);exit;
    }

    // public function category(){
    //     $category_data = DB::table('categories')->where('publicationStatus', '1')->get();
    //     return view('frontEnd.pages.category', compact('category_data'));
    // }

        // public function projectView($id){
        //     $category_data = DB::table('categories')->where('publicationStatus', '1')->get();
        //     // $project_data = DB::table('projects')->where('publicationStatus', '1')->orderBy('id', 'desc')->paginate(6);
        //     // $project_data = DB::table('projects')->where('publicationStatus', '1')->orderBy('id', 'desc')->get();
        //     $project_data=Project::where('categoryId', $id)->where('publicationStatus', 1)->get();
        //     // echo '<pre>';
        //     //print_r($category_data);exit;
        //     return view('frontEnd.pages.project-view', compact('category_data', 'project_data'));
        // }
          

        public function projectDetails($id){
        $projectById = DB::table('projects')
                ->join('categories', 'projects.categoryId', '=', 'categories.id')
//                    ->select('projects.id', 'projects.projectName', 'projects.projectPrice', 'projects.projectQuantity', 'projects.publicationStatus', 'categories.categoryName')
                ->select('projects.*', 'categories.categoryName')
                ->where('projects.id', $id)
                ->first();

                $projectGalleryById = DB::table('project_gallery')
                ->join('projects', 'project_gallery.projectId', '=', 'projects.id')
                ->select('project_gallery.*', 'projects.*')
                ->where('project_gallery.projectId', $id)
                ->get();
        return view('frontEnd.pages.project-details', ['project' => $projectById, 'projectGalleryImages' => $projectGalleryById]);
        }

 
}
