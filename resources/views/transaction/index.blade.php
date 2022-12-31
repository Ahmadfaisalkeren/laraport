@extends('layouts.master')

@section('content')
    <button type="button" class="btn btn-primary m-3" data-toggle="modal" data-target="#createModal">
        Create Transaction
    </button>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Expiry Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaction as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->expiry_date }}</td>
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
    @includeIf('transaction.create')
    @includeIf('transaction.edit')
    @includeIf('transaction.delete')
@endsection

@push('scripts')
    <!-- Initialize datepicker -->
    <script>
        $('#expiry_date').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true
        });

        function deleteData(id) {
            var id = id;
            var url = '{{ route('transaction.destroy', ':id') }}';
            url = url.replace(':id', id);
            $("#deleteForm").attr('action', url);
        }

        function formSubmit() {
            $("#deleteForm").submit();
        }
    </script>
@endpush
