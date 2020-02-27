@extends('admin.settings.app')
@section('settings')
    <div class="content">
        <h5 class="mb-4">Categories</h5>
        <a href="{{ url("admin/settings/category") }}" class="btn btn-info float-right">Create New</a>
        Filter: <select onchange="filterCategories(this.value)">
            <option value="">All</option>
            @foreach(['material', 'equipment', 'skill'] as $item)
                <option value="{{ $item }}"
                        @if($item==request('type')) selected @endif>{{ ucfirst(($item)) }}</option>
            @endforeach
        </select>

        <table class="table table-striped mt-4">
            <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Type</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $cat)
                <tr>
                    <td><i>{{ @++$i }}</i></td>
                    <td>{{ $cat->name }}</td>
                    <td class="text-muted">{{ $cat->type }}</td>
                    <td>
                        <a href="{{ url("admin/settings/category/$cat->id") }}" class="btn btn-outline-info">Edit
                            &raquo;</a>
                        <a href="{{ url("admin/settings/categories?delete=$cat->id") }}"
                           onclick="return confirm('Delete this category?')" class="btn btn-outline-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $categories->links() }}
    </div>
@endsection
@section('js')
    <script>
        function filterCategories(type) {
            window.location.href = domain + '/admin/settings/categories?type=' + type;
        }
    </script>
@endsection
