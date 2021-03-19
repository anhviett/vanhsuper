<?php
namespace App\controllers;
use App\Blade\Blade;
use App\components\CategoriesRecursive;
use App\database\Database;
use App\LinkNewsTags;
use App\LinkProductTags;

use App\News;
use App\NewsTags;
use App\ProductCategories;
use App\Products;
use App\ProductTags;

new Database;
class AdminProductController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Product::all()
     */
    public function index(){
        $products = Products::all();
        $categories = ProductCategories::all();
        $tags = ProductTags::all();
        $productTags = LinkProductTags::all();

        Blade::render('admin/product/index', compact('products', 'categories', 'tags','productTags'));
    }
    /**
     * @function create()
     * View form create
     * Type data : Array
     * Example : Product::create($data)
     */
    public function create(){
        $products = Products::all();
        $tags = ProductTags::all();
        $categories = ProductCategories::all();
        $html = getProductCategory($parent_id = 0);
        Blade::render('admin/product/create', compact('html', 'products','tags','categories'));
    }
    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     * Example : Product::create($data)
     */
    public function store(){
        $name = $_POST['name_product'];
        $desc = $_POST['description_product'];
        $price = $_POST['price_product'];
        $categories = $_POST['category_product'];


        //  upload anh
        if (isset($_FILES['images'])) {

            $image_src = uploadFile($_FILES['images'], 'product');
        }

        $product = Products::create([
            'name' => $name,
            'description' => $desc,
            'price' => $price,
            'category_id' => $categories,
            'images' => $image_src
        ]);

        if ($product) {
            $tags = $_POST["tags"];

            if (!empty($tags)) {
                foreach ($tags as $tag_id) {
                    LinkProductTags::create([
                        'product_id' => $product->id,
                        'tag_id' => $tag_id
                    ]);
                }
            }
            header('Location:/superFood/admin/product/');
        } else {
            echo "<script>alert('Thêm tin thất bại'); window.location= '/superFood/admin/product/';</script>";
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
        $name = $_POST['name_product'];
        $desc = $_POST['description_product'];
        $price = $_POST['price_product'];
        $categories = $_POST['category_product'];

        $found_product = Products::find($id['id']);

        if(is_uploaded_file($_FILES['images']['tmp_name'])){
            $image_src = uploadFile($_FILES['images'],['product']);
            $product = $found_product->update([
                'name' => $name,
                'description' => $desc,
                'price' => $price,
                'category_id' => $categories,
                'images' => $image_src

            ]);
        }else{
            $product = $found_product->update([
                'name' => $name,
                'description' => $desc,
                'price' => $price,
                'category_id' => $categories,
            ]);
        }




        if ($product) {
            //  Gắn tags
            $tags = $_POST["tags"];

            if (!empty($tags)) {
                //  Lấy tag đã tồn tại
                $productTag = LinkProductTags::where('product_id', $found_product->id)->get();
                $selected_tags = [];
                if (!$productTag->isEmpty()) {
                    foreach ($productTag as $tag) {
                        $selected_tags[$tag->tag_id] = $tag->tag_id;
                    }
                }

                foreach ($tags as $tag_id) {
                    //  Kiểm tra nếu có rồi thì bỏ qua
                    $productTag = LinkProductTags::where('product_id', $found_product->id)->where('tag_id', $tag_id)->get();
                    //  Insert thêm vào nếu chưa có
                    if ($productTag->isEmpty()){
                        LinkProductTags::create([
                            'product_id' => $found_product->id,
                            'tag_id' => $tag_id
                        ]);
                    }
                    unset($selected_tags[$tag_id]);
                }
                //  Loại bỏ tag thừa
                if (!empty($selected_tags)){
                    $arr = [];
                    foreach ($selected_tags as $v) {
                        $arr[] = $v;
                    }
                    LinkProductTags::where('product_id', $found_product->id)->whereIn('tag_id', $arr)->delete();
                }
            }else{
                // trường hợp mà không chọn tag nào thì xóa hết các liên kết
                LinkProductTags::where('product_id', $found_product->id)->delete();
            }
            header('Location:/superFood/admin/product/');
        } else {
            echo "<script>alert('Sửa tin thất bại'); window.location= '/superFood/admin/product/';</script>";
        }
    }

    public function edit($id){
        $tags = ProductTags::all();
        $product = Products::find($id['id']);
        $productTags = LinkProductTags::all();
        $html = getCategory($product->category_id);
        Blade::render('admin/product/edit', compact('product', 'html', 'tags', 'productTags'));
           }

    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     * Example : Product::delete()
     */
    public function delete($id){
        Products::destroy($id);
        header('Location:/superFood/admin/product/');
    }
}
