<div class="card">
    <div class="card-header">Goal Details</div>
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
                    {{-- @foreach ($activities as $Goal)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $Goal->calories_burned }}</td>
                        <td>{{ $Goal->distance }}</td>
                        <td>{{ $Goal->steps }}</td>
                        <td>{{ $Goal->date }}</td>
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
