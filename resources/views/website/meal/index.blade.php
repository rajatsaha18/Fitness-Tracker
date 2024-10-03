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
                        <form action="{{route('new.meal')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Foods Time</label>
                                <select name="foods_time" id="options" class="form-control">
                                    <option value="">--Time--</option>
                                    <option value="breakfast">Breakfast</option>
                                    <option value="lunch">Lunch</option>
                                    <option value="dinner">Dinner</option>
                                </select>
                                <span class="text-danger">{{$errors->has('foods_time') ? $errors->first('foods_time') : ''}}</span>
                            </div>
                            <div class="form-group">
                                <label for="">Foods/Take Calories</label>
                                <select class="selectpicker" name="food_item[]" multiple data-live-search="true">
                                    <option value="220">Rice(220cal)</option>
                                    <option value="312">Nan Ruti(312cal)</option>
                                    <option value="50">Vegetable(50cal)</option>
                                    <option value="110">Mug Dal(110cal)</option>
                                    <option value="323">Fish(323cal)</option>
                                    <option value="200">Meat(200cal)</option>
                                    <option value="60">Fruits(60cal)</option>
                                    <option value="75">Egg(75cal)</option>

                                  </select>
                                <span class="text-danger">{{$errors->has('food_item') ? $errors->first('food_item') : ''}}</span>
                            </div>
                            {{-- <div class="form-group">
                                <label for="">Take Calories</label>
                                <input type="text" name="calories" class="form-control" placeholder="Take Calories">
                                <span class="text-danger">{{$errors->has('calories') ? $errors->first('calories') : ''}}</span>
                            </div> --}}
                            <div class="form-group">
                                <label for="">Date</label>
                                <input type="date" name="date" class="form-control" placeholder="Date">
                                <span class="text-danger">{{$errors->has('date') ? $errors->first('date') : ''}}</span>
                            </div>
                            <div class="form-group">
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
                                        <th>Meal Time</th>
                                        <th>Intake Calories</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($meals as $meal)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $meal->foods_time }}</td>
                                        <td>{{ $meal->food_item }}</td>
                                        <td>{{ $meal->date }}</td>

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
<script>
    $('select').selectpicker();
</script>
@endsection



