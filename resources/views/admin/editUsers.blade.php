@extends('layouts.master')

@section('header', 'Edit User')
@section('content')
    <div class="card">
        <form method="post" action="{{ route('update.users-management', $user) }}" class="needs-validation" novalidate="">
            @csrf
            @method('PATCH')
            <input type="hidden" name="id" value="{{ $user->id }}">
            <div class="card-body">
                <div class="row">                               
                    <div class="form-group col-md-6 col-12">
                        <label>Full Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" required="">
                        <div class="invalid-feedback">
                        Please fill in the full name
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" value="{{ $user->username }}" required="">
                        <div class="invalid-feedback">
                        Please fill in the username
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="form-group col-md-6 col-12">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" required="">
                    <div class="invalid-feedback">
                    Please fill in the email
                    </div>
                </div>
                <div class="form-group col-md-6 col-12">
                    <label>Phone</label>
                    <input type="tel" class="form-control" name="noHp" value="{{ $user->noHp }}">
                </div>
                </div>
                <div class="row">
                <div class="form-group col-12">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control summernote-simple">{{ $user->alamat }}</textarea>
                </div>
                </div>
            </div>
            <div class="card-footer text-right">
            <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </div>
@endsection