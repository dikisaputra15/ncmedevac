<strong>Category:</strong>
@foreach (array_keys(\App\Models\Police::CATEGORY_ALIASES) as $category)
    <label style="display:block;font-size:13px;font-weight:600;">
        <input type="checkbox" name="policeCategory" value="{{ $category }}">
        {{ $category }} (<span data-police-category-count="{{ $category }}">0</span>)
    </label>
@endforeach
