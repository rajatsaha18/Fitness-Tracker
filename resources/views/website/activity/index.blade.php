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
                <div class="card">
                    <div class="card-header">Activity Details</div>
                    <div class="card-body">
                        <!-- Make the table responsive -->
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th width="5%">Sl.</th>
                                        <th>Calories</th>
                                        <th>Distance</th>
                                        <th>Steps</th>
                                        <th>Date</th>
                                        <th width="10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($activities as $activity)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $activity->calories_burned }}</td>
                                        <td>{{ $activity->distance }}</td>
                                        <td>{{ $activity->steps }}</td>
                                        <td>{{ $activity->date }}</td>
                                        <td>
                                            <a href="" class="btn btn-info btn-sm mb-2"><i class="fa-regular fa-pen-to-square"></i></a>
                                            <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- End of table-responsive -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
