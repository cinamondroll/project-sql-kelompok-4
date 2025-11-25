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
            background: #f1f5f9;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .card {
            background: white;
            width: 360px;
            padding: 32px 30px;
            border-radius: 18px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
            animation: fadeIn 0.3s ease;
        }

        .title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 22px;
            text-align: center;
            color: #1f2937;
        }

        label {
            font-weight: 600;
            display: block;
            margin-bottom: 6px;
            margin-top: 12px;
            color: #374151;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            border: 1px solid #d1d5db;
            margin-bottom: 2px;
            font-size: 15px;
            transition: all 0.2s ease;
            box-sizing: border-box;
        }

        input:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 6px rgba(99, 102, 241, 0.3);
        }

        button {
            width: 100%;
            padding: 13px;
            margin-top: 24px;
            background: #4f46e5;
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            font-weight: 600;
            transition: 0.2s;
        }

        button:hover {
            background: #4338ca;
        }

        .error {
            background: #fee2e2;
            color: #b91c1c;
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            color: #6b7280;
            font-size: 13px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(8px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

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

</body>

</html>
