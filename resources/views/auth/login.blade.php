<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Staff</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f3f4f6;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            background: white;
            width: 380px;
            padding: 40px 35px;
            border-radius: 14px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .title {
            font-size: 26px;
            font-weight: bold;
            margin-bottom: 25px;
            text-align: center;
            color: #333;
        }

        label {
            font-weight: 600;
            display: block;
            margin-bottom: 6px;
            color: #444;
        }

        input {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            margin-bottom: 18px;
            font-size: 15px;
        }

        input:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 4px rgba(99, 102, 241, 0.4);
        }

        button {
            width: 100%;
            padding: 12px;
            background: #4f46e5;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            font-weight: 600;
        }

        button:hover {
            background: #4338ca;
        }

        .error {
            background: #fee2e2;
            color: #b91c1c;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 18px;
            font-size: 14px;
        }

        .footer {
            margin-top: 15px;
            text-align: center;
            color: #666;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card">

            <div class="title">Login Staff</div>

            @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $err)
                • {{ $err }}<br>
                @endforeach
            </div>
            @endif

            <form method="POST" action="/login">
                @csrf

                <label>Email</label>
                <input type="text" name="email" placeholder="Masukkan email" required>

                <label>Password</label>
                <input type="password" name="password" placeholder="Masukkan password" required>

                <button type="submit">Masuk</button>
            </form>

            <div class="footer">
                © {{ date('Y') }} Staff Sakila Portal
            </div>
        </div>
    </div>

</body>

</html>