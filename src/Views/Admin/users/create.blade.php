@extends('layouts.master')
@section('title')
    Thêm mới người dùng
@endsection
@if (!empty($_SESSION['errors']))
    <div class="alert alert-warning">
        <ul>
            @foreach ($_SESSION['errors'] as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

        @php
            unset($_SESSION['errors']);
        @endphp
    </div>
@endif
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h1 class="m-0">Thêm mới người dùng</h1>
                        </div>
                    </div>
                </div>
                <div class="white_card_body">
                    <form action="{{ url('admin/users/store') }}" enctype="multipart/form-data" method="POST">
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name"
                                name="name">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email"
                                name="email">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="avatar" class="form-label">Avatar:</label>
                            <input type="file" class="form-control" id="avatar" placeholder="Enter avatar"
                                name="avatar">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="text" class="form-control" id="password" placeholder="Enter password"
                                name="password">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="password" class="form-label">Confirm Password:</label>
                            <input type="text" class="form-control" id="confirm_password"
                                placeholder="Enter confirm_password" name="confirm_password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
