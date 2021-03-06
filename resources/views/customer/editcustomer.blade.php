@extends('home') @section('content')
<div class="card shadow container col-8">
    <div class="card-header py-3">
        <p class="text-center text-primary m-0 font-weight-bold" style="font-size: 36px;">
            Edit Customer
        </p>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('editcustomerp') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="number" class="form-control" name="id" required value="{{$Customer->id}}" hidden />
            <div class="form-group">
                <label for="name"><strong>Customer Name :</strong><br /></label><input type="text" class="form-control"
                    placeholder="Enter Customer Name" name="name" required value="{{$Customer->name}}" />
            </div>
            <div class="form-group">
                <label for="contact"><strong>Customer Contact:</strong><br /></label><input type="number"
                    class="form-control" placeholder="Enter Customer Contact" name="contact" required
                    value="{{$Customer->contact}}" />
            </div>
            <div class="form-group">
                <label for="email"><strong>Customer Email:</strong><br /></label><input type="email"
                    class="form-control" placeholder="Enter Customer Email" name="email" required
                    value="{{$Customer->email}}" />
            </div>
            <div class="form-group">
                <label for="age"><strong>Customer Age :</strong><br /></label><input type="number" class="form-control"
                    placeholder="Enter Customer Age" name="age" required value="{{$Customer->age}}" />
            </div>
            <div class="form-group">
                <label for="gender"><strong>Customer Gender :</strong><br /></label>
                <select id="gender" class="form-control" name="gender" required="">
                    <option value="" disabled="disabled" selected="true">Select Gender</option>
                    <option value="Male" {{$Customer->gender == 'Male'  ? 'selected' : ''}}>Male</option>
                    <option value="Female" {{$Customer->gender == 'Female'  ? 'selected' : ''}}>Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="region"><strong>Customer Region :</strong><br /></label><input type="text"
                    class="form-control" placeholder="Enter Customer Region" name="region" required
                    value="{{$Customer->region}}" />
            </div>
            <div class="form-group">
                <label for="business"><strong>Customer Business :</strong><br /></label>
                <select id="business" class="form-control" name="business" required="">
                    <option value="" disabled="disabled" selected="true">Select Business</option>
                    <option value="YES" {{$Customer->business == 'YES'  ? 'selected' : ''}}>YES</option>
                    <option value="NO" {{$Customer->business == 'NO'  ? 'selected' : ''}}>NO</option>
                </select>
            </div>
            <div class="form-group">
                <label for="plan" class="h4" style="color: red;">Plan :</label>
                <select id="plan" class="form-control" name="plan" required="">
                    <option value="" disabled="disabled" selected="true">Select Plan</option>
                    @if($options ?? '') @foreach($options as $option)
                    <option value="{{$option->id}}" {{$Customer->plan_id == $option->id  ? 'selected' : ''}}>
                        {{$option->name}} </option>
                    @endforeach @endif
                </select>
            </div>
            <div class="form-group">
                <label for="expireddate" style="color: red;"><strong>Expired Date:</strong><br /></label><input
                    type="date" class="form-control" placeholder="Enter Expired Date" name="expireddate" required
                    value="{{$Customer->expireddate}}" />
            </div>
            <div class="form-group text-center">
                <button class="btn btn-primary btn-sm" type="submit" style="width: 100px;">
                    Edit
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