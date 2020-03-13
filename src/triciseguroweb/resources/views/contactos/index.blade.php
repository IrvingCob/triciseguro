<<<<<<< HEAD:src/triciseguroweb/resources/views/tareas/index.blade.php
@extends('layouts.app')

@section('content')
=======
@extends('adminlte::page')
@section('title', 'Laravel')
@section('content_header')
>>>>>>> remotes/origin/IrvingCob:src/triciseguroweb/resources/views/contactos/index.blade.php
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
<<<<<<< HEAD:src/triciseguroweb/resources/views/tareas/index.blade.php
                    <div class="card-header">Tareas</div>
                    <div class="card-body">
                        <a href="{{ url('/tareas/create') }}" class="btn btn-success btn-sm" title="Add New tarea">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/tareas') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
=======
                    <div class="card-header">Contactos</div>
                    <div class="card-body">
                        <a href="{{ url('/contactos/create') }}" class="btn btn-success btn-sm" title="Add New Contacto">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/contactos') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
>>>>>>> remotes/origin/IrvingCob:src/triciseguroweb/resources/views/contactos/index.blade.php
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
<<<<<<< HEAD:src/triciseguroweb/resources/views/tareas/index.blade.php
                                        <th>#</th><th>Nombre</th><th>Descripcion</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($tareas as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nombre }}</td><td>{{ $item->descripcion }}</td>
                                        <td>
                                            <a href="{{ url('/tareas/' . $item->id) }}" title="View tarea"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/tareas/' . $item->id . '/edit') }}" title="Edit tarea"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/tareas' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete tarea" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
=======
                                        <th>#</th><th>Nombre</th><th>Numero</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($contactos as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nombre }}</td><td>{{ $item->numero }}</td>
                                        <td>
                                            <a href="{{ url('/contactos/' . $item->id) }}" title="View Contacto"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/contactos/' . $item->id . '/edit') }}" title="Edit Contacto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/contactos' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contacto" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
>>>>>>> remotes/origin/IrvingCob:src/triciseguroweb/resources/views/contactos/index.blade.php
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
<<<<<<< HEAD:src/triciseguroweb/resources/views/tareas/index.blade.php
                            <div class="pagination-wrapper"> {!! $tareas->appends(['search' => Request::get('search')])->render() !!} </div>
=======
                            <div class="pagination-wrapper"> {!! $contactos->appends(['search' => Request::get('search')])->render() !!} </div>
>>>>>>> remotes/origin/IrvingCob:src/triciseguroweb/resources/views/contactos/index.blade.php
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
