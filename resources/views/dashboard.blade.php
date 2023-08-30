<x-app-layout>


    <div class="row mt-3">

    <div class="col-md-2">


    </div>

        <div class="col-md-10">
            <div class="card">
                <div class="card-herder">
                    <h3 style="display: inline-block;" class="m-0 font-weight-bold">Task List</h3>

                        <a href="{{ route('tasks.import') }}" class="btn btn-success ml-2">Import</a>
                </div>
                <div class="card-body">

                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($tasks as $task )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $task->full_name }}</td>
                                <td>{{ $task->email }}</td>
                                <td>{{ $task->phone_number }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">No Tasks Defined.</td>
                            </tr>

                            @endforelse

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
