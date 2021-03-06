@extends('backendtemplate')s
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Items List</h1>
		<a href="{{ route('items.create') }}" class="btn btn-primary">Add New</a>
	</div>
		<div class="row">
			<table class="table table-border">
				<thead class="thead">
					<tr>
						<th>No</th>
						<th>Code No</th>
						<th>Name</th>
						<th>Price</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@php $i=1; @endphp
					@foreach($items as $item)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$item->codeno}}</td>
						<td>{{$item->name}}</td>
						<td>{{$item->price}}</td>
						<td><form action="{{route('items.destroy',$item->id)}}" method="post" onsubmit="return confirm('Are you Sure want to Delete!')" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
						<a href="{{ route('items.edit',$item->id) }}" class="btn btn-primary">Edit</a>
					<a href="{{route('items.show',$item->id)}}" class="btn btn-primary">Detail</a></td>
					</tr>
					@endforeach

					
				</tbody>
			</table>
		</div>
@endsection