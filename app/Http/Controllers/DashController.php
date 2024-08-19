<?php

namespace App\Http\Controllers;
use App\Models\SettingModal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use App\Models\product;
use App\Models\Category;
use App\Models\OptionalItems;

class DashController extends Controller
{
    public function dashboard(){
        $logo = SettingModal::where('key','logo')->select('value')->first();
        return view('dashboard.dashboard' , compact('logo'));
    }
    public function allOrders(){
        return view('dashboard.allOrders');
    }
    public function deliveryOrders(){
        return view('dashboard.deliveryOrders');
    }
    public function pickupOrders(){
        return view('dashboard.pickupOrders');
    }
    public function restaurantOrders(){
        return view('dashboard.inRestaurant');
    }
    public function settings(){
        $settings = SettingModal::all()->pluck('value', 'key')->toArray();
        return view('dashboard.settings', compact('settings'));
        
    }
    
    public function doSettings(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255', // Update title separately
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Update logo separately
        ]);
    
        // Handle title update
        if ($request->filled('title')) {
            $title = $request->input('title');
            SettingModal::updateOrCreate(['key' => 'title'], ['value' => $title]);
        }
    
        // Handle logo update
        if ($request->hasFile('logo')) {
            // Get the old logo path from the database
            $oldLogoPath = SettingModal::where('key', 'logo')->value('value');
    
            // Delete old logo if it exists
            if ($oldLogoPath && file_exists(public_path($oldLogoPath))) {
                unlink(public_path($oldLogoPath));
            }
    
            // Upload new logo
            $image = $request->file('logo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $newLogoPath = 'uploads/' . $imageName;
    
            // Update the logo path in the database
            SettingModal::updateOrCreate(['key' => 'logo'], ['value' => $newLogoPath]);
            // session()->put('logo', $newLogoPath);
        }
        
        return redirect('/settings')->with('success', 'Settings updated successfully.');
    }
    
    public function docreateProduct(Request $request){
        // return $request;
        $validated = $request->validate([
            '_token' => 'required|string',
        'product' => 'required|string',
        'slug' => 'required|string',
        'category' => 'required|string',
        'status' => 'required',
        'old' => 'integer|required',
        // 'new' => 'integer',
        'description' => 'required|string',
        'optional' => 'array',
        'optional.*' => 'string',
        'tumb_image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        'size' => 'required|array',
        'size.*' => 'string',
        'price' => 'required|array',
        'price.*' => 'string',
        'specification' => 'required|array',
        'specification.*' => 'string',
        ]);
        
        if ($request->hasFile('tumb_image')) {
            $image = $request->file('tumb_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads-2'), $imageName);
            $newLogoPath = 'uploads-2/' . $imageName;
            // return $newLogoPath ;
        }

        $product = new product();
        $product->name = $request->input('product');
        $product->slug = $request->input('slug');
        $product->category = $request->input('category');
        $product->status = $request->input('status');
        $product->offer_price = $request->input('old');
        $product->new_price = $request->input('new');
        $product->description = $request->input('description');
        $product->popular = $request->input('popular');
        // $product->oid = 
        $product->img = $newLogoPath;
        $product->size = implode(',', $request->input('size'));
        $product->price = implode(',', $request->input('price'));
        $product->specification = implode(',', $request->input('specification'));        
        $product->save();
        return redirect('/product');




    }
    public function addCategory(Request $request){
        // return $request;
         
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('category'), $imageName);
            $newLogoPath = 'category/' . $imageName;
            // return $newLogoPath ;
        }
        $category = Category::create([
            'name' => $request->name,
            'status' => $request->status,
            'img' => $newLogoPath
        ]);
        return redirect()->back();

    }

    public function addOptionalItems(Request $request){
        // return $request;
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('category'), $imageName);
            $image = 'uploads-2/' . $imageName;
            // return $newLogoPath ;
        }
        $optionalItems = OptionalItems::create([
            'name' => $request->name,
            'price'=> $request->price,
            'img'=> $image,
            'status'=> $request->status
        ]);
        return response()->json(['message'=> 'added successfully'], 200);
        

    }
    public function createProduct(){
        return view('dashboard.createProduct');
    }
    public function product(){
        $data = product::all();
        return view('dashboard.product' , compact('data') );
    }
    public function categories(){
        $categories = Category::all();
        return view('dashboard.categories' , compact('categories'));
    }
    public function optionalItems(){
        $opItems = OptionalItems::all();
        return view('dashboard.optionalItems' , compact('opItems'));
    }
    public function promotions(){
        return view('dashboard.promotions');
    }
    public function deliveryArea(){
        return view('dashboard.deliveryArea');
    }
    public function customerList(){
        return view('dashboard.customerList');
    }
    public function productReviews(){
        return view('dashboard.productReviews');
    }
    public function messages(){
        return view('dashboard.messages');
    }


    // backend controller
    
    public function updateStatus(Request $request)
    {
        try {
            // Find the product by ID
            $product = product::where('pid',$request->product_id)->first();
            
            if ($product) {
                // Update the status
                $product->status = $request->status;
                $product->save();
                return response()->json(['success' => true, 'message' => 'Status updated successfully!']);
            } else {
                return response()->json(['success' => false, 'message' => 'Product not found!']);
            }
        } catch (\Exception $e) {
            // Log the exception and return an error response
            \Log::error('Error updating product status: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'An error occurred while updating the status.']);
        }
    }
    
    public function editProduct($pid){
        $productData = product::where('pid', $pid)->first();
        return view('dashboard.edit-product');
    }
    public function deleteProduct($pid){
        product::destroy($pid);
        return redirect()->back();
    }

    public function edit($id) {
        $item = OptionalItems::findOrFail($id);
        return view('dashboard.editItem', compact('item'));
    }
    
    public function destroy($id) {
        $item = OptionalItems::findOrFail($id);
        $item->delete();
        return redirect()->route('optionalItems')->with('success', 'Item deleted successfully');
    }
    public function updateStatusO(Request $request){
        $item = OptionalItems::where('oid',$request->id)->first();
        if ($item) {
            $item->status = $request->status;
            $item->save();
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }
    public function deleteCategory($cid){
        Category::where('cid', $cid)->delete();
        return redirect()->back();
    }
    public function editCategory(Request $request, $cid)
{
    $category = Category::find($cid);
    $category->name = $request->input('name');
    $category->status = $request->input('status');

    if ($request->hasFile('img')) {
        $category->img = $request->file('img')->store('category');
    }

    $category->save();

    return redirect()->back()->with('success', 'Category updated successfully');
}

}
