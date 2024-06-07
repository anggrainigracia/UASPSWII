@extends('admin.app', [
    'title' => 'Admin',
])
@section('content')
<div class="card my-5">
                <h1 class="card-header">List user</h1>

                <div class="card-body">


                    <div class="d-flex justify-content-between mb-3">

                    </div>

                    <div class="table-responsive">
                        <table class="table">
                        <thead>
                                <tr>
                                    <th>name</th>
                                <th> email </th>
                                </tr>
                        </thead>
                            <tbody>
                            @foreach ($users as $index => $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection
