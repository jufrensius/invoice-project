@extends('layouts.main')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Table</h3>
                    </div>

                    <div class="card-body">
                        <div class="d-flex flex-row mb-3">
                            <a href="{{route('vendors.create')}}" class="btn btn-success">
                                <i class="fa-solid fa-plus"></i>
                                Create
                            </a>
                        </div>
                        <table id="dataTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->phone}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>
                                        <div class="d-flex flex-row">
                                            <a class="p-2" href="{{route('vendors.show', [$row->id])}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail">
                                                <i class="fa-solid fa-eye text-black"></i>
                                            </a>
                                            <a class="p-2" href="{{route('vendors.edit', [$row->id])}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <i class="fa-solid fa-pencil text-primary"></i>
                                            </a>
                                            <a id="btnDelete" class="p-2" data-bs-toggle="tooltip" data-bs-placement="top" data-id="{{$row->id}}" data-name="{{$row->name}}" title="Delete">
                                                <i class="fa-solid fa-trash-can text-danger"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.8/sweetalert2.min.js"></script>
<script type="text/javascript">
    $(document).on('click', '#btnDelete', function(e) {
        e.preventDefault();

        var id = $(this).data('id');
        var name = $(this).data('name');

        Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
            })
            .then(function(e) {
                if (e.value) {
                    $.ajax({
                        url: '/vendors/' + id,
                        type: 'post',
                        data: {
                            id: id,
                            _method: 'delete',
                            _token: "{{ csrf_token() }}",
                        },
                        // headers: {
                        //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        // },
                        success: function(data) {
                            Swal.fire({
                                title: 'Deleted!',
                                text: name + ' was successfully deleted!',
                                icon: 'success',
                                timer: 2000,
                            }).then(function() {
                                location.reload();
                            });
                        }
                    });
                }
            });
    });
</script>
@endsection