<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #b8dbfc;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .card {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 2rem;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }

        .card h4 {
            color: #1f618d;
            font-weight: 600;
        }

        .form-control {
            border-radius: 8px;
            background-color: #f9f9f9;
            border: 1px solid #ced4da;
            color: #495057;
        }

        .form-control:focus {
            background-color: #fff;
            color: #495057;
            border-color: #1f618d;
            box-shadow: 0 0 0 0.2rem rgba(31,97,141,0.25);
        }

        .btn-primary {
            background-color: #1f618d;
            border: none;
            border-radius: 8px;
            font-weight: 500;
        }

        .btn-primary:hover {
            background-color: #2874a6;
        }

        a {
            color: #1f618d;
            text-decoration: none;
        }

        a:hover {
            color: #2874a6;
            text-decoration: underline;
        }

        .input-group-text {
            background-color: #f9f9f9;
            border: 1px solid #ced4da;
            border-radius: 0 8px 8px 0;
            cursor: pointer;
        }

        @media (max-width: 576px) {
            .card {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="card">
        <h4 class="text-center mb-4">User Login</h4>
        <form method="POST" action="#">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" required>
            </div>
            <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <div class="input-group">
        <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" required>
        <span class="input-group-text" id="togglePassword">
            <i class="bi bi-eye"></i>
        </span>
    </div>
</div>
            <div class="mb-3 text-end">
                <a href="/forgot-password">Forgot Password?</a>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
            <div class="text-center mt-3">
                Don't have an account? <a href="/register">Register</a>
            </div>
        </form>
    </div>

    <script>
       $(document).ready(function() {
    $("#togglePassword").click(function() {
        const passwordInput = $("#password");
        const type = passwordInput.attr("type") === "password" ? "text" : "password";
        passwordInput.attr("type", type);

        // Toggle icon using Bootstrap Icons
        $(this).html(type === "password" ? '<i class="bi bi-eye"></i>' : '<i class="bi bi-eye-slash"></i>');
    });
});
    </script>
</body>
</html>