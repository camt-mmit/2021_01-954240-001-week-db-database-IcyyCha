@extends('layouts.main')

@section('title', 'Category')

@section('content')
   
    

    <table>
    <caption>Category List</caption>
    <thead>
        <th>Code</th>
        <th>Category</th>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            <td><a id="org" href= "{{ route('category-view', ['category' => $category['code']]) }}">{{ $category['code'] }} </a></td>
            <td id="org">{{ $category['name'] }}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
@endsection

