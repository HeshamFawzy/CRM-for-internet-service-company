@extends('home')

@section('content')
<div class="card shadow container col-8">
    <div class="card-header py-3">
        <p class="text-center text-primary m-0 font-weight-bold" style="font-size: 36px;">Create Plan</p>
    </div>
    <div class="card-body">
        <form>
            <div class="form-group"><label for="address"><strong>Plan Name :</strong><br /></label><input type="text" class="form-control" placeholder="Enter Plan Name" name="PlanName" /></div>
            <div class="form-group"><label for="address"><strong>Speed:</strong><br /></label><input type="text" class="form-control" placeholder="Enter Speed" name="Speed" /></div>
            <div class="form-group"><label for="address"><strong>Cost:</strong><br /></label><input type="text" class="form-control" placeholder="Enter Cost" name="Cost" /></div>
            <div class="form-group"><label for="address"><strong>Duration :</strong><br /></label><input type="text" class="form-control" placeholder="Enter Duration" name="Duration" /></div>
            <div class="form-group text-center"><button class="btn btn-primary btn-sm" type="submit" style="width: 100px;">Create</button></div>
        </form>
    </div>
</div>
@endsection