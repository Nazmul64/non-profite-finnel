@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                     <table class="table table-bordered table-sm">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                         </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> {{ Auth::user()->id }}</td>
                                <td> {{ Auth::user()->name }}</td>
                                <td> {{ Auth::user()->email }}</td>
                            </tr>
                        </tbody>
                     </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
