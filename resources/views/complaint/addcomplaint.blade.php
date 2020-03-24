@extends('home') @section('content')
<div class="card shadow container col-8">
    <div class="card-header py-3">
        <p class="text-center text-primary m-0 font-weight-bold" style="font-size: 36px;">
            Add Complaint
        </p>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('addcomplaintp') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="email" class="h4" style="color: red;">Email :</label>
                <select id="email" class="form-control" name="email" required="">
                    <option value="" disabled="disabled" selected="true">Select Email</option>
                    @if($options ?? '') @foreach($options as $option)
                    <option value="{{$option->id}}">
                        {{$option->email}} </option>
                    @endforeach @endif
                </select>
            </div>
            <div class="form-group">
                <label for="text"><strong>Customer Complaint :</strong><br /></label><textarea type="text"
                    class="form-control" placeholder="Enter Customer Complaint" name="text" required></textarea>
            </div>
            <div class="form-group">
                <label for="date" style="color: red;"><strong>Date:</strong><br /></label><input type="date"
                    class="form-control" placeholder="Enter Date" name="date" required />
            </div>
            <div class="form-group text-center">
                <button class="btn btn-primary btn-sm" type="submit" style="width: 100px;">
                    Create
                </button>
            </div>
        </form>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
    </div>
</div>
@endsection