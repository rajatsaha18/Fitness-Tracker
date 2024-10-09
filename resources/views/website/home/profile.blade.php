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
                    <h4 class="card-title mb-5 text-center text-bold" style="font-size: 20px!important; color:black"><i class="fa-solid fa-address-card"></i> Profile</h4>
                    @php
                        $profile = DB::table('users')->where('user_type','user')->first();
                    @endphp
                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="">Image</label>
                          <input type="file" name="image" class="form-control">
                          @if (!empty($profile))
                          <img src="{{ asset($profile->image) }}" alt="profile-image" style="height: 80px;width:80px">
                          @endif

                        </div>

                        <div class="form-group">
                          <label for="">Name</label>
                          @if (!empty($profile))
                          <input type="text" value="{{ $profile->name }}" name="name" class="form-control">
                          @else
                          <input type="text" name="name" class="form-control">
                          @endif
                        </div>

                        <div class="form-group">
                          <label for="">Email</label>
                          @if (!empty($profile))
                          <input type="email" value="{{ $profile->email }}" name="email" class="form-control">
                          @else
                          <input type="email" name="email" class="form-control">
                          @endif
                        </div>

                        <div class="form-group">
                          <label for="">Mobile</label>
                          @if (!empty($profile))
                          <input type="mobile" value="{{ $profile->mobile }}" name="mobile" class="form-control">
                          @else
                          <input type="mobile" name="mobile" class="form-control">
                          @endif
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
