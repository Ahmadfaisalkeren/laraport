@extends('layouts.master')

@section('content')
    <button type="button" class="btn btn-primary m-3" data-toggle="modal" data-target="#createModal">
        Create Certificate Content
    </button>

    <table class="table table-bordered table-striped mt-3 shadow p-3 mb-5 bg-white rounded">
        <thead>
            <tr>
                <th>No</th>
                <th>Year</th>
                <th>Image</th>
                <th>Description</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($certificate as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->year }}</td>
                    <td><img src="{{ asset($item->image) }}" style="width:100px"></td>
                    <td>{!! $item->description !!}</td>
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
    @includeIf('certificate.create')
    @includeIf('certificate.edit')
    @includeIf('certificate.delete')
@endsection

@push('scripts')
    <script>
        function deleteData(id) {
            var id = id;
            var url = '{{ route('certificate.destroy', ':id') }}';
            url = url.replace(':id', id);
            $("#deleteForm").attr('action', url);
        }

        function formSubmit() {
            $("#deleteForm").submit();
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endpush
