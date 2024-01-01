@extends('layouts.app')

@section('content')

<div class="container mt-3">
  <h2>Contact form</h2>
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif
    <!-- Session data -->
      @if(session('msg'))
        <div class="alert alert-success">
          {{ session('msg')}}
        </div>
        @endif

      <form action="contact" method="post" style="width: 50%;">
        @csrf
        <!-- for generating token -->
        <div class="mb-3 mt-3">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter full name" name="name" value="{{ old('name') ? old('name') : $single['name'] }}">
          @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror

        </div>
        <div class="mb-3 mt-3">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ old('email') ? old('email') : $single['email'] }}">
          @error('email')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3 mt-3">
          <label for="subject">Subject:</label>
          <input type="text" class="form-control" id="subject" placeholder="Enter subject" name="subject" value="{{ old('subject') ? old('subject') : $single['subject'] }}">
          @error('subject')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="message">Message:</label>
          <textarea name="message" id="" cols="30" rows="10" class="form-control" id="pwd">{{ old('message') ? old('message') : $single['message'] }}</textarea>
          @error('message')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <!-- <div class="form-check mb-3">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember"> Remember me
          </label>
        </div> -->

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
</div>
@endsection