<strong>Facility Level:</strong>
@foreach (['Territorial Hospital', 'Provincial Hospital', 'Local / Communal Hospital', 'Clinic / Health Centre'] as $level)
    <label style="display:block;font-size:13px;font-weight:600;">
        <input type="checkbox" name="hospitalLevel" value="{{ $level }}">
        {{ $level }} (<span data-hospital-level-count="{{ $level }}">0</span>)
    </label>
@endforeach
