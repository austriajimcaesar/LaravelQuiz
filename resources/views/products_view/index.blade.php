@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card body">
<table class="table">
<thead>
<tr>
<th> ID </th>
<th> Product Name </th>
<th> Product Description </th>
<th> Price </th>
<th> Status </th>
</tr>
</thead>
<tbody>
@foreach ($data as $product)
<tr>
<td> {{$product->id}} </td>
<td> {{$product->product_name}} </td>
<td> {{$product->product_description}} </td>
<td> {{$product->price}} </td>
<td> {{$product->status}} </td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>