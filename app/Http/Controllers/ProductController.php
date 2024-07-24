<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
 
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('query');
        $products = Product::when($query, function ($queryBuilder) use ($query) {
            return $queryBuilder->where('title', 'like', "%{$query}%")
                                ->orWhere('description', 'like', "%{$query}%");
        })
        ->orderBy('created_at', 'DESC')
        ->get();
    
        return view('products.index', compact('products'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $userId = Auth::id(); // Mendapatkan ID user yang login
    $request->request->add(['user_id' => $userId]); // Menambahkan user_id ke request
    Product::create($request->all());

    return redirect()->route('products')->with('success', 'Product added successfully');
}

  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
  
        return view('products.show', compact('product'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
  
        return view('products.edit', compact('product'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
  
        $product->update($request->all());
  
        return redirect()->route('products')->with('success', 'product updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
  
        $product->delete();
  
        return redirect()->route('products')->with('success', 'product deleted successfully');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('title', 'like', "%{$query}%")
                           ->orWhere('description', 'like', "%{$query}%")
                           ->get();

        return view('products.index', compact('products'));
    }
    
}