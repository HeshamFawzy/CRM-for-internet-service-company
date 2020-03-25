@extends('home') @section('content')
<div class="card shadow container col-12">
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" method="post"
        action="{{ url('/searchcomplaint')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search"
                aria-describedby="basic-addon2" name="query" />
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
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
                        <th scope="col">Customer Email</th>
                        <th scope="col">Customer Complaint</th>
                        <th scope="col">Complaint Date</th>
                        <th scope="col">Complaint State</th>
                    </tr>
                </thead>
                <tbody>
                    @if($Complaints ?? '') @foreach($Complaints as $row)
                    <tr>
                        <td>{{$row->email}}</td>
                        <td>{{$row->text}}</td>
                        <td>{{$row->date}}</td>
                        <td>
                            {{$row->state == 0 ? 'Not Solved' : 'Solved'}}
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
</div>
    @endsection