@extends('backend.layouts.app')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection
@section('content')

<x-card title="Candidate">

    @slot('breadcrumbs')
    <ol class="breadcrumb float-left mt-2">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Candidate</li>
    </ol>
    @endslot
    @if (auth()->user()->role == 'Senior HRD')
    <div class="row">
        <div class="col-md-12 text-right">
            <a href="{{ route('manage.candidate.create') }}" class="btn btn-primary">Add</a>
        </div>
    </div>
    @endif
    <div style="height: 20px;"></div>
    <table id="datatable" class="table table-bordered ">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Applied</th>
            <th>Experience</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($candidates as $candidate)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $candidate->name }}</td>
                    <td>{{ $candidate->applied }}</td>
                    <td>{{ $candidate->experience }}</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{ route('manage.candidate.show', $candidate->id) }}">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                        @if (auth()->user()->role == 'Senior HRD')
                        <a class="btn btn-sm btn-warning" href="{{ route('manage.candidate.edit', $candidate->id) }}">
                            <i class="fa fa-pencil-alt" aria-hidden="true"></i>
                        </a>
                        <a class="btn btn-sm btn-danger removeBtn" href="javascript:void(0)"
                            data-url="{{ route('manage.candidate.destroy', $candidate->id) }}"
                            >
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-card>

<form action="" id="removeBtnForm" method="post">
    @csrf
    @method('delete')
</form>

@endsection

@section('css-top')
    <link href="{{ asset('dashboard/assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    {{-- dashboard/assets/libs/datatables/dataTables.bootstrap4.css --}}
@endsection

@section('js')
    <!-- third party js -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('dashboard/assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>

    <script>
        $('.removeBtn').on('click', function(){
            let form = $('#removeBtnForm');
            let action = $(this).data('url');
            form.attr('action', action);
            form.submit();
        });
        $("#datatable").DataTable();
    </script>
@endsection
