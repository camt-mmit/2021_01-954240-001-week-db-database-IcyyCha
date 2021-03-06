<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Product;

class ProductController extends Controller
{
    private $title = 'Product';

    function list() {
        return view('product-list', [
            'title' => "{$this->title} : List",
            'products' => Product::orderBy('code')->get(),
        ]);
    }

    function show($productCode) {
        $product = Product
            ::where('code', $productCode)
            ->firstOrFail();
    
        return view('product-view', [
            'title' => "{$this->title} : View",
            'product' => $product,
        ]);
    }
    function createForm() {
        return view('product-create-form', [
        'title' => "{$this->title} : Create",
        ]);
        }
        
        function create(Request $request) {
        $product = Product::create($request->getParsedBody());
        
        return redirect()->route('product-list');
        }
        function show($productCode) {
            // We use method find() from SearchableController.
            $product = $this->find($productCode);
            
            return view('product-view', [
            'title' => "{$this->title} : View",
            'product' => $product,
            ]);
        }
        function updateForm($productCode) {
            $product = $this->find($productCode);
            
            return view('product-update-form', [
            'title' => "{$this->title} : Update",
            'product' => $product,
            ]);
            }
            function update(Request $request, $productCode) {
                $product = $this->find($productCode);
                $product->fill($request->getParsedBody());
                $product->save();
                
                return redirect()->route('product-view', [
                'product' => $product->code,
                ]);
                }
            }
            function delete($productCode) {
                $product = $this->find($productCode);
                $product->delete();
                
                return redirect()->route('product-list');
                }
                function prepareSearch($search) {
                    $search = parent::prepareSearch($search);
                    $search = array_merge([
                    'minPrice' => null,
                    'maxPrice' => null,
                    ], $search);
                    
                    return $search;
                    }
                    function filterByPrice($query, $minPrice, $maxPrice) {
                        if($minPrice !== null) {
                        $query->where('price', '>=', $minPrice);
                        }
                        
                        if($maxPrice !== null) {
                        $query->where('price', '<=', $maxPrice);
                        }
                        
                        return $query;
                        }
                        function search($search) {
                            $query = parent::search($search);
                            $query = $this->filterByPrice($query,
                            $search['minPrice'], $search['maxPrice']);
                            
                            return $query;
                            }
}

class ProductController extends SearchableController
{
    function getQuery() {
        return Product::orderBy('code');
        }
        
        function list(Request $request) {
        $search = $this->prepareSearch($request->getQueryParams());
        $query = $this->search($search);
        return view('product-list', [
        'title' => "{$this->title} : List",
        'search' => $search,
        'products' => $query->paginate(5),
        ]);
        }
}
