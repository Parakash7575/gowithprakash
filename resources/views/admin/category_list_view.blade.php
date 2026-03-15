@extends('layouts.admin')

@section('title','Category_listing')

@section('content')
 
<div class="side_text"> Category Listing</div>
<button class="x-blade-popup add_btn" data-href="{{ route('add_category') }}">
    Add Category
</button>

<table class="table table-striped table-hover">
    <thead class="co">
    <tr>
        <th> Sr no</th>
        <th> Tour Category Name</th>
        <th>Category Added Date</th>
        <th> Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach($data as $category_list)
        <tr>
        <td>{{$loop->iteration }}</td>
        <td>{{ $category_list->tour_category }}</td>
        <td>{{ $category_list->added_date }}</td>
      <td>
    
    <button class="x-blade-popup btn btn-sm btn-outline-secondary"
        data-href="{{ route('view_category', [$category_list->tour_id, 'view']) }}"
        title="View">
        <i class="lni lni-eye"></i>
    </button>

    
    <button class="x-blade-popup btn btn-sm btn-outline-secondary"
        data-href="{{ route('view_category', [$category_list->tour_id, 'edit']) }}"
        title="Edit">
        <i class="lni lni-pencil"></i>
    </button>
     
    <form action="{{ route('delete_category', $category_list->tour_id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')

    <button type="submit"
            onclick="return confirm('Are you sure to Delete?')"
            class="btn  btn-sm btn-outline-secondary">
     <i class="lni lni-trash-can"></i>
    </button>
</form>
</td>

        </tr>
        @endforeach
        
    </tbody>

</table>
 <br>
    <br>
    {{ $data->links() }}

@endsection
