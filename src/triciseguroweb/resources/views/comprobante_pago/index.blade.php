@extends('adminlte::page')
@section('title', 'Laravel')
@section('content_header')
    <div class="container">
        <div class="row">
          

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Comprobante_pago</div>
                    <div class="card-body">
                        <a href="{{ url('/comprobante_pago/create') }}" class="btn btn-success btn-sm" title="Add New comprobante_pago">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/comprobante_pago') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>Fecha</th><th>Hora</th><th>Cantidad</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($comprobante_pago as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->fecha }}</td><td>{{ $item->hora }}</td><td>{{ $item->cantidad }}</td>
                                        <td>
                                            <a href="{{ url('/comprobante_pago/' . $item->id) }}" title="View comprobante_pago"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/comprobante_pago/' . $item->id . '/edit') }}" title="Edit comprobante_pago"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/comprobante_pago' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete comprobante_pago" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $comprobante_pago->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
