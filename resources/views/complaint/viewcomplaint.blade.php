@extends('home') @section('content')
<div class="card shadow container col-12">
    <div class="card-header py-3">
        <p class="text-center text-primary m-0 font-weight-bold" style="font-size: 36px;">
            View Complaints
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
                    <th scope="col">Plan</th>
                    <th scope="col">Expired Date</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                @if($Customers ?? '') @foreach($Customers as $row)
                <tr>
                    <th>{{$row->name}}</th>
                    <td>{{$row->contact}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->region}}</td>
                    <td>{{$row->planName}}</td>
                    <td>{{$row->expireddate}}</td>
                    <td>
                        <a href="{{ url('/editcustomer' , $row->id)}}" class="btn btn-success">Edit</a>
                        <a href="{{ url('/deletecustomer' , $row->id)}}" class="btn btn-danger" name="delete">Delete</a>
                    </td>
                </tr>
                @endforeach @endif
            </tbody>
        </table>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
    </div>
</div>
@endsection