<div class="admin-form-container">
    <!-- <h2 class="form_title">{{ $forname }}</h2>
     -->
    <form class="category-form">
        <form action="{{ route('edit_category',$view_data->tour_id) }}" method="put">
            @csrf
        <button type="button" class="blade-close">X</button>
        <div class="form-group">
            <label for="category" class="form-label required">Category Name</label>
            <input type="text"
                   value="{{ $view_data->tour_category }}"
                   class="form-input">
            </div>
            
     <div class="form-footer">
            <button type="submit" class="btn-save">Save Category</button>
        </div>
    </form>

</div>
