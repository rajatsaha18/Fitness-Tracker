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
                        <th>Status</th>
                        <th>Action</th>
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
                        @if ($goal->goal_status == 1)
                        <span class="badge bg-success badge-sm">Complete</span>
                        @else
                        <span class="badge bg-danger badge-sm">Incomplete</span>
                        @endif
                        </td>
                        <td>
                            <a href="{{ route('goal.status',$goal->id) }}" class="btn btn-info btn-sm">status</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> <!-- End of table-responsive -->
    </div>
</div>
