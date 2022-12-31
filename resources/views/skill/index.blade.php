@extends('layouts.master')

@section('content')
    <button type="button" class="btn btn-primary m-3" data-toggle="modal" data-target="#createModal">
        Create Skill Content
    </button>

    <table class="table table-bordered table-striped mt-3 shadow p-3 mb-5 bg-white rounded">
        <thead>
            <tr>
                <th>No</th>
                <th>Skill</th>
                <th>Skill Description</th>
                <th>Icon</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($skill as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->skill }}</td>
                    <td>{{ $item->skill_description }}</td>
                    <td><img src="{{ asset($item->icon) }}" style="width:64px"></td>
                    <td>
                        <button type="button" class="btn btn-info" data-toggle="modal"
                            data-target="#editModal-{{ $item->id }}">Edit</button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"
                            onclick="deleteData({{ $item->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @includeIf('skill.create')
    @includeIf('skill.edit')
    @includeIf('skill.delete')
@endsection

@push('scripts')
    <script>
        function deleteData(id) {
            var id = id;
            var url = '{{ route('skill.destroy', ':id') }}';
            url = url.replace(':id', id);
            $("#deleteForm").attr('action', url);
        }

        function formSubmit() {
            $("#deleteForm").submit();
        }

    </script>
@endpush
