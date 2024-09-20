@extends('website.master')
@section('title')
Fitness | Meal
@endsection

@section('content')
<style>
    .sec_Meal
    {
        margin-top: -60px!important;
    }
    .text_center
    {
        text-align: center!important;
    }
</style>
<section class="sec_Meal">
    <div class="container">
        <div class="row mt-0">
            <div class="col-md-12">
                <div class="card card-body">
                    <h2 class="text-center">Meal</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-success"><span class="text_center text-bold">Add New Meal</span></div>
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Calories Burnued</label>
                                <input type="text" class="form-control" name="calories_burned" placeholder="Enter the Calories Burned">
                                <span class="text-danger">{{$errors->has('calories_burned') ? $errors->first('calories_burned') : ''}}</span>
                            </div>
                            <div class="form-group">
                                <label for="">Duration</label>
                                <input type="text" class="form-control" name="Meal_duration" placeholder="Enter the Duration Time">
                                <span class="text-danger">{{$errors->has('Meal_duration') ? $errors->first('Meal_duration') : ''}}</span>
                            </div>
                            <div class="form-group">
                                <label for="">Date</label>
                                <input type="date" class="form-control" name="date" placeholder="Select Date">
                                <span class="text-danger">{{$errors->has('date') ? $errors->first('date') : ''}}</span>
                            </div>
                            <div class="form-group">
                                <select name="Meal_type" id="" class="form-control">
                                    <option value="">--select the type--</option>
                                    <option value="Walking">Walking</option>
                                    <option value="Running">Running</option>
                                    <option value="Cycling">Cycling</option>
                                    <option value="Yoga">Yoga</option>
                                </select>
                                <span class="text-danger">{{$errors->has('Meal_type') ? $errors->first('Meal_type') : ''}}</span>
                            </div>
                            <div class="form-group text-center">
                                <label for=""></label>
                                <input type="submit" class="btn btn-success" value="Post Meal">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Meal Details</div>
                    <div class="card-body">
                        <!-- Make the table responsive -->
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th width="5%">Sl.</th>
                                        <th>Calories</th>
                                        <th>Duration</th>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th width="10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($Meals as $Meal)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $Meal->calories_burned }}</td>
                                        <td>{{ $Meal->Meal_duration }}</td>
                                        <td>{{ $Meal->date }}</td>
                                        <td>{{ $Meal->Meal_type }}</td>
                                        <td>
                                            <a href="" class="btn btn-info btn-sm mb-2"><i class="fa-regular fa-pen-to-square"></i></a>
                                            <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach --}}
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

