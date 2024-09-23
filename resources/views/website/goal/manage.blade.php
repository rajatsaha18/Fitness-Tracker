<div class="card">
    <div class="card-header">Goal Details</div>
    <div class="card-body">
        <!-- Make the table responsive -->
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="5%">Sl.</th>
                        <th>Distance</th>
                        <th>start date</th>
                        <th>end date</th>
                        <th width="20%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($goals as $goal)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $goal->description }}</td>
                        <td>{{ $goal->start_date }}</td>
                        <td>{{ $goal->end_date }}</td>
                        <td>
                            <form action="{{ route('goal.status') }}" method="post">
                                @csrf
                                <select name="goal_status" id="" class="form-control">
                                    <option value="">status</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> <!-- End of table-responsive -->
    </div>
</div>
