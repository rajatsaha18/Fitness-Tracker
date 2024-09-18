@extends('website.master')
@section('title')
Fitness | Goal
@endsection

@section('content')
<style>
    .sec_Goal
    {
        margin-top: -60px!important;
    }
    .text_center
    {
        text-align: center!important;
    }
</style>
<section class="sec_Goal">
    <div class="container">
        <div class="row mt-0">
            <div class="col-md-12">
                <div class="card card-body">
                    <h2 class="text-center">Goal</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-success"><span class="text_center text-bold">Add New Goal</span></div>
                    <div class="card-body">
                        <form action="{{ route('goal.new') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea class="form-control" name="description" placeholder="Enter Description"></textarea>
                                <span class="text-danger">{{$errors->has('description') ? $errors->first('description') : ''}}</span>
                            </div>
                            <div class="form-group">
                                <label for="">Start Date</label>
                                <input type="date" class="form-control" name="start_date" placeholder="Select Date">
                                <span class="text-danger">{{$errors->has('start_date') ? $errors->first('start_date') : ''}}</span>
                            </div>
                            <div class="form-group">
                                <label for="">End Date</label>
                                <input type="date" class="form-control" name="end_date" placeholder="Select Date">
                                <span class="text-danger">{{$errors->has('end_date') ? $errors->first('end_date') : ''}}</span>
                            </div>
                            <div class="form-group text-center">
                                <label for=""></label>
                                <input type="submit" class="btn btn-success" value="Post Goal">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                @include('website.goal.manage')
            </div>

        </div>
    </div>
</section>
@endsection
