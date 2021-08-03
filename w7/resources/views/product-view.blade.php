@extends('layouts.main')

@section('title', $title)

@section('content')
<div class="product-details">
  <table class="content-result">
    <tbody>
      <tr>
        <td class="lbl">Code ::</td>
        <td class="type">{{ $product->code }}</td>
      </tr>
      <tr>
        <td class="lbl">Name ::</td>
        <td class="value">{{ $product->name }}</td>
      </tr>
      <tr>
        <td class="lbl">Price ::</td>
        <td class="value">{{ number_format($product->price, 2) }}</td>
      </tr>
    </tbody>
  </table>
  <pre>{{ $product->description }}</pre>
</div>
@endsection