<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Task</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Task Name</label>
                        <select class="form-control" name="" id="taskname">
                            <option hidden>Choose Task Name</option>
                            @foreach ($tasks as $task)
                                <option value="{{ $task->id }}">{{ $task->name }}</option>
                            @endforeach
                        </select>
                        {{-- <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span> --}}
                        <div class="button" style="text-align:center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
                @if (session()->has('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <div class="col-sm-6">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Task Name</th>
                            <th scope="col">Users</th>
                            <th scope="col">Company</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <th>{{ $task->id }}</th>
                                <td>{{ $task->name }}</td>
                                <td>
                                    @foreach ($task->users as $user)
                                        <ul>
                                            <li>{{ $user->name }}</li>
                                        </ul>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($task->company as $company)
                                        <ul>
                                            <li>{{ $company->name }}</li>
                                        </ul>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ url('/user/edit', $task->id) }}" class="btn btn-info btn-sm">EDIT</a>
                                </td>
                                <td>
                                    <a href="{{ url('/user/delete', $task->id) }}"
                                        class="btn btn-danger btn-sm">DELETE</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
