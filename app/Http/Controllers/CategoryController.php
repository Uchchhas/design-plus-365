<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;

class CategoryController extends Controller {

    

    public function createCategory() {
        return view('admin.category.createCategory');
    }

    public function storeCategory(Request $request) {
        $this->validate($request, [
            'categoryName' => 'required',
            'categoryImage' => 'required',
        ]);
        //return $request->all();
//        $category = new Category();
//        $category->categoryName = $request->categoryName;
//        $category->categoryDescription = $request->categoryDescription;
//        $category->publicationStatus = $request->publicationStatus;
//        $category->save();
//        return 'Category info save successfully';
//        Category::create( $request->all() );
//         return 'Category Info Save Successfully';

        $categoryImage   = $request->file('categoryImage');
        $name           = $categoryImage->getClientOriginalName();
        $uploadPath     = 'frontEnd/images/category-image/';
        $categoryImage->move($uploadPath, $name);
        $imageUrl       = $uploadPath . $name;
        $this->saveCategoryInfo($request, $imageUrl);
        return redirect('/category/add')->with('message', 'Category Name Save Successfully.');
    }

    protected function saveCategoryInfo($request, $imageUrl) {
     
        DB::table('categories')->insert([
            'categoryName' => $request->categoryName,
             'categoryImage' => $imageUrl,
            'categoryDescription' => $request->categoryDescription,
            'publicationStatus' => $request->publicationStatus,
        ]);
        //return redirect()->back();
        // return redirect('/category/add')->with('message', 'Category Name Save Successfully.');
    }

    public function manageCategory() {
        $categories = Category::all();
        return view('admin.category.manageCategory', ['categories' => $categories]);
    }

    public function editCategory($id) {
        $categoryById = Category::where('id', $id)->first();
        return view('admin.category.editCategory', ['categoryById' => $categoryById]);
    }

    public function updateCategory(Request $request) {
        $imageUrl = $this->imageExistStatus($request);
        $this->validate($request, [
            'categoryName' => 'required',
        ]);

        $category = Category::find($request->categoryId);
        $category->categoryName = $request->categoryName;
        $category->categoryImage = $imageUrl;
        $category->categoryDescription = $request->categoryDescription;
        $category->publicationStatus = $request->publicationStatus;
        $category->save();
        return redirect('/category/manage')->with('message', 'Category Info Update Successfully.');
    }

     private function imageExistStatus($request) {
        $categoryById    = Category::where('id', $request->categoryId)->first();
        $categoryImage   = $request->file('categoryImage');
        if ($categoryImage) {
            unlink($categoryById->categoryImage);
            $name       = $categoryImage->getClientOriginalName();
            $uploadPath = 'frontEnd/images/category-image/';
            $categoryImage->move($uploadPath, $name);
            $imageUrl   = $uploadPath . $name;
        } else {
            $imageUrl   = $categoryById->categoryImage;
        }
        return $imageUrl;
    }


    public function deleteCategory($id) {
        $category = Category::find($id);
        $category->delete();
        return redirect('/category/manage')->with('message', 'Category Info Delete Successfully');
    }


}
