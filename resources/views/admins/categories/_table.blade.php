@foreach($children as $child)
    <tr>
        <td>{{ $child->id }}</td>
        <td>{{ str_repeat('— ', $level) }}{{ $child->name }}</td>
        <td>{{ $child->slug }}</td>
        <td>
            <a href="{{route('admin.categories.edit', $child->id)}}"><button class="btn btn-warning">Sửa</button></a>
            <form action="{{ route('admin.categories.destroy', $child->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</button>
            </form>
        </td>
    </tr>
    @if($child->children->count())
        @include('admins.categories._table', ['children' => $child->children, 'level' => $level + 1])
    @endif
@endforeach
