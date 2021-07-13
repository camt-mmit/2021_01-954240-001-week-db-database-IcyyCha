@extends('layouts.main')

@section('title')
<span id="org">{{$category['name'] }}</sapn>
@endsection
@section('content')
    

    <style>
    table {
        border-collapse: collapse;
    }
    table, th, td {
        border:1px solid black;
    }
    </style>

    <table>
    <caption>Product List <b id="org">{{ $category['name'] }}</b></caption>
    <thead>
        <th>Image</th>
        <th>Code</th>
        <th>Category</th>
        <th>Name</th>
    </thead>
    <tbody>
    @foreach($products as $product)
        @if($product['catCode'] === $category['code'])
            <tr>
            <td><img style="width:64px;" src="{{ asset('images/products/'.$product['code'].'.jpg') }}"></td>
            <td><a id="pa" href= "{{ route('product-view', ['product' => $product['code']]) }}">{{ $product['code'] }} </a></td>
                <td>{{ $category['name'] }}</a></td>
                <td>{{ $product['name'] }}</td>
            </tr>
        @else
        @endif
    @endforeach
    </tbody>
    </table>

@endsection