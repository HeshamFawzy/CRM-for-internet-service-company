@extends('home') @section('content')
<div class="card shadow container col-8">
  <div class="card-header py-3">
    <p
      class="text-center text-primary m-0 font-weight-bold"
      style="font-size: 36px;"
    >
      Add Employee
    </p>
  </div>
  <div class="card-body">
    <form
      method="post"
      action="{{ route('addemployeep') }}"
      enctype="multipart/form-data"
    >
      {{ csrf_field() }}
      <div class="form-group">
        <label for="name"><strong>Employee Name :</strong><br /></label
        ><input
          type="text"
          class="form-control"
          placeholder="Enter Employee Name"
          name="name"
          required
        />
      </div>
      <div class="form-group">
        <label for="contact"><strong>Employee Contact:</strong><br /></label
        ><input
          type="number"
          class="form-control"
          placeholder="Enter Employee Contact"
          name="contact"
          required
        />
      </div>
      <div class="form-group">
        <label for="email"><strong>Employee Email:</strong><br /></label
        ><input
          type="email"
          class="form-control"
          placeholder="Enter Employee Email"
          name="email"
          required
        />
      </div>
      <div class="form-group">
        <label for="region"><strong>Employee Region :</strong><br /></label
        ><input
          type="text"
          class="form-control"
          placeholder="Enter Employee Region"
          name="region"
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
