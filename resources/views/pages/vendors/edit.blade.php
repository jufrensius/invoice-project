@extends('layouts.main')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Create</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('vendors.update', ['vendor' => $data->id])}}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" id="name" value="{{old('name', $data->name)}}">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="telp" name="phone" class="form-control  @error('phone') is-invalid @enderror" id="phone" value="{{old('phone', $data->phone)}}">
                                    @error('phone')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email" value="{{old('email', $data->email)}}">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="address" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <textarea name="address" id="address" cols="100" rows="5">{{old('address', $data->address)}}</textarea>
                                </div>
                            </div>
                            <div class="d-flex flex-row justify-content-end">
                                <a href="{{route('vendors.index')}}" class="btn btn-default mr-2">
                                    Cancel
                                </a>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection