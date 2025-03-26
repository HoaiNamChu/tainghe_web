@foreach($children as $child)
    <option value="{{ $child->id }}">
        {{ str_repeat('— ', $level) }}{{ $child->name }}
    </option>
    @if($child->children->count())
        @include('admins.categories._select', ['children' => $child->children, 'level' => $level + 1])
    @endif
@endforeach
