<div class="admin-form-container">

    <h2 class="form_title">
        {{ ucfirst($mode) }} Category
    </h2>

    <form action="{{ route('edit_category', $view_data->tour_id) }}"
          method="POST"
          class="category-form">

        @csrf
        @method('PUT')

        <button type="button" class="blade-close">X</button>

        <div class="form-group">
            <label class="form-label required">Category Name</label>

            <input type="text"
                   name="category"
                   value="{{ $view_data->tour_category }}"
                   class="form-input"
                   @if($mode == 'view') readonly @endif>
        </div>

        @if ($mode == 'edit')
        <div class="form-footer">
            <button type="submit" class="btn-save">
                Update Category
            </button>
        </div>
        @endif

    </form>

</div>