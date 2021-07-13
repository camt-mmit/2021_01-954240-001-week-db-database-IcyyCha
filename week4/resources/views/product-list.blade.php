@extends('layouts.main')

@section('title', 'Products')

@section('content')


<main>
<table>
    <caption>Product List</caption>
    <thead>
    <tr>
        <th>Image</th>
        <th>Code</th>
        <th>Category</th>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
@foreach($products as $product)
 <tr>
 <td><img style="width:64px;" src="{{ asset('images/products/'.$product['code'].'.jpg') }}"></td>
 <td><a id="pa" href= "{{ route('product-view', ['product' => $product['code']]) }}">{{ $product['code'] }} </a></td>
 <td><a id="org" href= "{{ route('category-view', ['category' => $product['catCode']]) }}">{{ $categories[$product['catCode']]['name'] }} </a></td>
 <td>{{ $product['name'] }}</td>
 </tr>
@endforeach
    </tbody>
    </table>
    </main>
@endsection

