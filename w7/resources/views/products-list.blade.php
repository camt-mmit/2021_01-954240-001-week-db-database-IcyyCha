@extends('layouts.main')

@section('title', $title)

@section('content')
  <table class="product-list">
    <thead>
      <tr>
        <th>Code</th><th>Name</th>
      </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <th>
                <a href="{{ route('product-view', [
                    'product' => $product->code,
                ]) }}">
                    {{ $product->code }}
                </a>
            </th>
            <td>{{ $product->name }}</td>
        </tr>
    @endforeach
    </tbody>
  </table>
@endsection