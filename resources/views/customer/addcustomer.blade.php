@extends('home') @section('content')
<div class="card shadow container col-8">
  <div class="card-header py-3">
    <p
      class="text-center text-primary m-0 font-weight-bold"
      style="font-size: 36px;"
    >
      Add Customer
    </p>
  </div>
  <div class="card-body">
    <form
      method="post"
      action="{{ route('addcustomer') }}"
      enctype="multipart/form-data"
    >
      {{ csrf_field() }}
      <div class="form-group">
        <label for="name"><strong>Customer Name :</strong><br /></label
        ><input
          type="text"
          class="form-control"
          placeholder="Enter Customer Name"
          name="name"
          required
        />
      </div>
      <div class="form-group">
        <label for="contact"><strong>Customer Contact:</strong><br /></label
        ><input
          type="number"
          class="form-control"
          placeholder="Enter Customer Contact"
          name="contact"
          required
        />
      </div>
      <div class="form-group">
        <label for="email"><strong>Customer Email:</strong><br /></label
        ><input
          type="email"
          class="form-control"
          placeholder="Enter Customer Email"
          name="email"
          required
        />
      </div>
      <div class="form-group">
        <label for="age"><strong>Customer Age :</strong><br /></label
        ><input
          type="number"
          class="form-control"
          placeholder="Enter Customer Age"
          name="age"
          required
        />
      </div>
      <div class="form-group">
        <label for="gender"><strong>Customer Gender :</strong><br /></label>
        <select
          id="bloodgroup"
          class="form-control"
          name="bloodgroup"
          required=""
        >
          <option value="" disabled="disabled" selected="true"
            >Select Gender</option
          >
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
      <div class="form-group">
        <label for="region"><strong>Customer Region :</strong><br /></label
        ><input
          type="text"
          class="form-control"
          placeholder="Enter Customer Region"
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
    @endif @if(session()->has('message'))
    <div class="alert alert-success">
      {{ session()->get('message') }}
    </div>
    @endif
  </div>
</div>
@endsection
