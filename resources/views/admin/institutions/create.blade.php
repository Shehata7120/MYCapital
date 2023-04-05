@extends('layout.app')

@section('title')
create institutions
@endsection

@section('page_name')
institutions
@endsection
@section('page_title')
create institutions
@endsection

@section('content')

    <section class="content">
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"> institutions </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('institutions.store')}}" method="post">
                            @csrf
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="card-body">
                                <div  class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control"  name="email" id="exampleInputEmail1" placeholder="Enter email">
                                </div>

                                <div  class="form-group">
                                    <label for="exampleInputEmail1">Type</label>
                                    <select class="form-control" name="type_id" id="type">
                                        <option >Type </option>
                                     @foreach($types as $type)
                                        <option  value="{{$type->id}}">{{$type->name}}</option>
                                         @endforeach
                                    </select>
                                </div>

{{--                                 address --}}

                                <div  class="form-group">

                                    <label for="exampleInputEmail1">Address</label>
                                    <input type="text" class="form-control" name="address" id="exampleInputEmail1" placeholder="Enter Address">

                                </div>

                                <div  class="form-group">
                                    <label for="exampleInputEmail1">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Enter Phone">
                                </div>
                                <div  class="form-group">
                                    <label for="exampleInputEmail1">Map</label>
                                    <input type="text" class="form-control" name="map" id="exampleInputEmail1" placeholder="Enter Map">
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                    <!-- general form elements -->

                    <!-- Input addon -->
                </div>
            </div>
            </div>

    </section>
@endsection
