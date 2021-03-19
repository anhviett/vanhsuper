<?php
namespace App\controllers;
use App\Blade\Blade;
use App\components\CategoriesRecursive;
use App\database\Database;
use App\LinkNewsTags;
use App\LinkProductTags;
use App\News;
use App\NewsCategories;
use App\ProductCategories;
use App\Products;
use App\ProductTags;

new Database;
class AdminProductCategoriesController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Product::all()
     */
    public function index(){
        $categories = ProductCategories::all();
        Blade::render('admin/product_categories/index', compact('categories'));


    }
    /**
     * @function create()
     * View form create
     * Type data : Array
     * Example : Product::create($data)
     */
    public function create(){
        $html = getProductCategory($parent_id = 0);
        Blade::render('admin/product_categories/create', compact('html'));
         }
    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     * Example : Product::create($data)
     */
    public function store(){
        $name = $_POST['productNameAdd'];
        $product = $_POST['productCategoryAdd'];
        $category = ProductCategories::create([
            'name' => $name,
            'parent_id' => $product
        ]);
        if($category){
            header('Location:/superFood/admin/productCategories/');
        }
        else{
            echo "<script>alert('Thêm danh mục thất bại'); window.location= '/superFood/admin/productCategories/';</script>";
        }
    }
    /**
     * @function show()
     * Get detail a data in database
     * Type id : number
     * Get id from URl
     * Example : Product::find($id)
     */
    public function show($id){
    }
    /**
     * @function update()
     * Update data with id to database
     * Type id :number
     * Get id from URL
     * Type data : Array
     * Example : Product::find($id)->update($data)
     */
    public function update($id){
        $name = $_POST['productCategoryNameUpdate'];
        $product = productCategories::find($id['id'])->update([
            'name' => $name
        ]);
        if($product){
            header('Location:/superFood/admin/productCategories/');
        }
        else{
            echo "<script>alert('Sửa danh mục thất bại'); window.location= '/superFood/admin/productCategories/';</script>";
        }
    }

    public function edit($id){
        $category = productCategories::find($id['id']);
        Blade::render('admin/product_categories/edit', compact('category'));
    }

    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     * Example : Product::delete()
     */
    public function delete($id){
        ProductCategories::destroy($id);
        header('Location:/superFood/admin/productCategories/');
    }
}
