@extends('layouts.main')

@section('title', $product['name'])

@section('content')
    
    <img src="{{ asset('images/products/'.$product['code'].'.jpg') }}"class="center"></br>
    <p>
    <b>Code : </b><em class="green">{{ $product['code'] }}</em></br>
    <b>Category : </b><a id="org" href= "{{ route('category-view', ['category' => $product['catCode']]) }}">{{ $category[$product['catCode']]['name'] }} </a></br>
    <b>Name : </b>{{ $product['name'] }}
    </p>
    <pre>
    {{ $product['description'] }}  
    </pre>
@endsection
