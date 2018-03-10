@extends('master')

@section('title') Product @endsection

@section('content')
	<h2 class="text-center">Product</h2>

	<table class="table table-stripe">
		<tr>
			<th>Name</th>
			<th>Price</th>
			<th>Stock</th>
			<th colspan="3" class="text-center">Action</th>
		</tr>
		
		@foreach( $products as $product )
			<tr>
				<td>
					{{ $product->product_name }}
				</td>

				<td>
					{{ $product->price }}
				</td>

				<td>
					{{ $product->stock }}
				</td>
  
				<td><a href="#" class="btn btn-sm btn-primary">View</a></td>
				<td><a href="#" class="btn btn-sm btn-info">Edit</td>
				<td><a href="#" class="btn btn-sm btn-danger">Delete</a></td>
			</tr>
		@endforeach
		
	</table>

@endsection