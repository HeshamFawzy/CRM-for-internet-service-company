@extends('home') @section('content')
<div class="card shadow container col-8">
    <div class="card-header py-3">
        <p class="text-center text-primary m-0 font-weight-bold" style="font-size: 36px;">
            View Employee
        </p>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Email</th>
                    <th scope="col">Region</th>
                </tr>
            </thead>
            <tbody>
                @if($Employees ?? '')
                @foreach($Employees as $row)
                <tr>
                    <th>{{$row->name}}</th>
                    <td>{{$row->contact}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->region}}</td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>

    </div>
</div>
@endsection