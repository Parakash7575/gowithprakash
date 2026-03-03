

@extends('layouts.admin')

@section('content')
<div class="admin-form-container">

    <h2 class="form_title">{{ $formname }}</h2>
     
    

    <form action="{{ route('save_category') }}" method="POST" class="category-form">
        @csrf

        <button type="button" class="blade-close">X</button>

        <div class="form-group">
            <label for="category" class="form-label required">Category Name</label>
            
            <input type="text"  id="category"   name="category" class="form-input" placeholder="Enter category " required>
        
        </div>

        <div class="form-footer">
            <button type="submit" class="btn-save">Save Category</button>
        </div>
    </form>

</div>

@endsection
