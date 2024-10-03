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
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-success"><span class="text_center text-bold">Goal Status</span></div>
                    <div class="card-body">
                        <form action="{{ route('goal.confirm',$goalStatus->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea class="form-control" name="description" placeholder="Enter Description">{{ $goalStatus->description }}</textarea>
                                <span class="text-danger">{{$errors->has('description') ? $errors->first('description') : ''}}</span>
                            </div>
                            <div class="form-group">
                                <label for="">Start Date</label>
                                <input type="date" class="form-control" value="{{ \Carbon\Carbon::createFromFormat('d-m-Y', $goalStatus->start_date)->format('Y-m-d') }}" name="start_date" placeholder="Select Date">
                                <span class="text-danger">{{$errors->has('start_date') ? $errors->first('start_date') : ''}}</span>
                            </div>
                            <div class="form-group">
                                <label for="">End Date</label>
                                <input type="date" class="form-control" value="{{ \Carbon\Carbon::createFromFormat('d-m-Y', $goalStatus->end_date)->format('Y-m-d') }}" name="end_date" placeholder="Select Date">
                                <span class="text-danger">{{$errors->has('end_date') ? $errors->first('end_date') : ''}}</span>
                            </div>
                            <div class="form-group">
                                <label for="">Goal Status</label>
                                <select name="goal_status" id="" class="form-control">
                                    <option value="" disabled selected>--select status--</option>
                                    <option value="1">Complete</option>
                                    <option value="0">Incomplete</option>
                                </select>

                            </div>
                            <div class="form-group text-center">
                                <label for=""></label>
                                <input type="submit" class="btn btn-success" value="Confirm">
                            </div>
                        </form>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>
@endsection
