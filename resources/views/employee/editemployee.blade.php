@extends('home') @section('content')
<div class="card shadow container col-8">
  <div class="card-header py-3">
    <p
      class="text-center text-primary m-0 font-weight-bold"
      style="font-size: 36px;"
    >
      Edit Employee
    </p>
  </div>
  <div class="card-body">
    <form
      method="post"
      action="{{ route('editemployeep') }}"
      enctype="multipart/form-data"
    >
      {{ csrf_field() }}
      <input
          type="number"
          class="form-control"
          name="id"
          required
          value="{{$Employee->id}}"
          hidden
        />
      <div class="form-group">
        <label for="name"><strong>Employee Name :</strong><br /></label
        ><input
          type="text"
          class="form-control"
          placeholder="Enter Employee Name"
          name="name"
          required
          value="{{$Employee->name}}"
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
          value="{{$Employee->contact}}"
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
          value="{{$Employee->email}}"
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
          value="{{$Employee->region}}"
        />
      </div>
      <div class="form-group text-center">
        <button
          class="btn btn-primary btn-sm"
          type="submit"
          style="width: 100px;"
        >
          Edit
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
