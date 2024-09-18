@extends('website.master')
@section('title')
Fitness | Activity
@endsection

@section('content')
<style>
    .sec_Activity
    {
        margin-top: -60px!important;
    }
    .text_center
    {
        text-align: center!important;
    }
</style>
<section class="sec_Activity">
    <div class="container">
        <div class="row mt-0">
            <div class="col-md-12">
                <div class="card card-body">
                    <h2 class="text-center">Activity</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-success"><span class="text_center text-bold">Add New Activity</span></div>
                    <div class="card-body">
                        <form action="{{ route('activity.new') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Calories Burnued</label>
                                <input type="text" class="form-control" name="calories_burned" placeholder="Enter the Calories Burned">
                                <span class="text-danger">{{$errors->has('calories_burned') ? $errors->first('calories_burned') : ''}}</span>
                            </div>
                            <div class="form-group">
                                <label for="">Distance</label>
                                <input type="text" class="form-control" name="distance" placeholder="Ex: 2km">
                                <span class="text-danger">{{$errors->has('distance') ? $errors->first('distance') : ''}}</span>
                            </div>
                            <div class="form-group">
                                <label for="">Steps</label>
                                <input type="text" class="form-control" name="steps" placeholder="Ex: 6000steps">
                                <span class="text-danger">{{$errors->has('steps') ? $errors->first('steps') : ''}}</span>
                            </div>
                            <div class="form-group">
                                <label for="">Date</label>
                                <input type="date" class="form-control" name="date" placeholder="Select Date">
                                <span class="text-danger">{{$errors->has('date') ? $errors->first('date') : ''}}</span>
                            </div>
                            <div class="form-group text-center">
                                <label for=""></label>
                                <input type="submit" class="btn btn-success" value="Post Activity">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                @include('website.activity.manage')
            </div>

        </div>
    </div>
</section>
@endsection
