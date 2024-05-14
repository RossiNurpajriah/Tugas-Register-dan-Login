<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        form {
            text-align: center;
            margin-top: 20px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <h1>User Management</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Date of Birth</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->age }}</td>
                <td>{{ $user->date_of_birth }}</td>
                <td>{{ $user->address }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>

</html>