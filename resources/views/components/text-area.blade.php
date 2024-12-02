<textarea name="{{ $name }}" class="form-control editor {{ $class ?? '' }}" {{ $attributes }}>
    {{ old($name, $value ?? '') }}
</textarea>
