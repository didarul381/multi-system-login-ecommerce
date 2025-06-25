<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            padding: 50px;
        }
        .dashboard-card {
            max-width: 500px;
            margin: auto;
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        form button {
            padding: 10px 20px;
            background: #dc3545;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        form button:hover {
            background: #bb2d3b;
        }
    </style>
</head>
<body>
    <div class="dashboard-card">
        <h3>Dashboard - Ecommerce</h3>
        <h2>Welcome, {{ auth()->user()->name ?? 'User' }}!</h2>

        <p>You are now logged in.</p>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</body>
</html>
