@extends('layout.app')

@section('title')
    institutions
@endsection

@section('page_name')
    institutions
@endsection
@section('page_title')
    institutions
@endsection

@section('content')

    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <a href="{{route('institutions.create')}}" class="btn btn-primary">Add New</a>
                    </h3>
                </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th> name</th>
                        <th>type</th>
                        <th>address</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>website</th>
                        <th>logo</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      @foreach($institutions as $institution)
                        <td>{{$institution->id}}</td>
                        <td>{{$institution->name}}</td>
                        <td>{{$institution->type->name}}</td>
                        <td>{{$institution->address}}</td>
                        <td>{{$institution->email}}</td>
                        <td>{{$institution->phone}}</td>
                        <td>{{$institution->website}}</td>
                        <td>
                            <a href="{{route('institutions.edit',$institution->id)}}" class="btn btn-primary">Edit</a>
                            <form style="display:inline ; text-align: center" action="{{route('institutions.destroy',$institution->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            </div>

        </div>
    </section>
@endsection
