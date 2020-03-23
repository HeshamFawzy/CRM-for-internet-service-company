@extends('home') @section('content')
<div class="card shadow container col-8">
  <div class="card-header py-3">
    <p
      class="text-center text-primary m-0 font-weight-bold"
      style="font-size: 36px;"
    >
      Create Plan
    </p>
  </div>
  <div class="card-body">
    <form
      method="post"
      action="{{ route('createplanp') }}"
      enctype="multipart/form-data"
    >
      {{ csrf_field() }}
      <div class="form-group">
        <label for="name"><strong>Plan Name :</strong><br /></label
        ><input
          type="text"
          class="form-control"
          placeholder="Enter Plan Name"
          name="name"
          required
        />
      </div>
      <div class="form-group">
        <label for="speed"><strong>Speed:</strong><br /></label
        ><input
          type="number"
          class="form-control"
          placeholder="Enter Speed"
          name="speed"
          required
        />
      </div>
      <div class="form-group">
        <label for="cost"><strong>Cost:</strong><br /></label
        ><input
          type="number"
          class="form-control"
          placeholder="Enter Cost"
          name="cost"
          required
        />
      </div>
      <div class="form-group">
        <label for="duration"><strong>Duration :</strong><br /></label
        ><input
          type="number"
          class="form-control"
          placeholder="Enter Duration"
          name="duration"
          required
        />
      </div>
      <div class="form-group text-center">
        <button
          class="btn btn-primary btn-sm"
          type="submit"
          style="width: 100px;"
        >
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
    @endif
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
  </div>
</div>
@endsection
