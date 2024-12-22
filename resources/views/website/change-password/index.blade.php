@extends('website.master')

@section('title')
Profile
@endsection

@section('content')

<section class="py-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">

                <div class="card card-body">
                    <h4 class="card-title mb-5 text-center text-bold" style="font-size: 20px!important; color:black"><i class="fa-solid fa-address-card"></i> Change Password</h4>

                    <form action="{{ route('update.password') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="">current password</label>
                          <input type="password" name="current_password" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="">new password</label>
                          <input type="password" name="new_password" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="">confirm password</label>
                          <input type="password" name="new_password_confirm" class="form-control">
                        </div>

                        <div class="form-group text-center">
                          <label for=""></label>
                          <input type="submit" class="btn btn-success" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
