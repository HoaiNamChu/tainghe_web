@foreach($children as $child)
    <option value="{{ $child->id }}" {{ $category->parent_id == $child->id ? 'selected' : '' }}>
        {{ str_repeat('— ', $level) }}{{ $child->name }}
    </option>
    @if($child->children->count())
        @include('admins.categories._select_options', ['children' => $child->children, 'level' => $level + 1])
    @endif
@endforeach
