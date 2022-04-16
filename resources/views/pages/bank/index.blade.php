@extends('layouts.main')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable with default features</h3>
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->code}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>
                                        <div class="d-flex flex-row">
                                            <a class="p-2" href="{{route('banks.show', [$row->id])}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail">
                                                <i class="fa-solid fa-eye text-black"></i>
                                            </a>
                                            <a class="p-2" href="{{route('banks.edit', [$row->id])}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
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