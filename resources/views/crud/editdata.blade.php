<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* إعدادات الصفحة */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            justify-content: center; /* لتوسيط المحتوى أفقيًا */
            align-items: center; /* لتوسيط المحتوى عموديًا */
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        /* صندوق الفورم مع خلفية شفافة */
        .form-container {
            background-color: rgba(255, 255, 255, 0.8); /* خلفية بيضاء مع شفافية */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* ظل خفيف */
            width: 100%;
            max-width: 600px; /* عرض أقصى */
        }

        /* تنسيق الرسالة */
        .welcome-message {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            text-align: center; /* توسيط النص */
            opacity: 0;
            animation: fadeInDown 2s forwards; /* تطبيق الحركة */
        }

        /* مسافات بين الحقول */
        .form-control {
            margin-bottom: 15px;
        }

        /* حركة النص */
        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

<div class="form-container">
    <div class="welcome-message">
        Welcome To Page EDIT User
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('users.update', $user->id) }}" method="POST" class="needs-validation" novalidate>
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="validationTooltip01" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="validationTooltip01" name="name" value="{{ old('name', $user->name) }}">
        </div>
        
        <div class="mb-3">
            <label for="validationTooltip02" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="validationTooltip02" name="email" value="{{ old('email', $user->email) }}" >
        </div>

        <div class="mb-3">
            <label for="validationTooltip03" class="form-label">Your Address</label>
            <input type="text" class="form-control" id="validationTooltip03" name="address" value="{{ old('address', $user->address) }}">
        </div>

        <div class="mb-3">
            <label for="validationTooltipUsername" class="form-label">Password</label>
            <input type="password" class="form-control" id="validationTooltipUsername" name="password" value="{{ old('password') }}">
        </div>

        <div class="d-flex justify-content-between">
            <button class="btn btn-primary" type="submit">UPDATE DATA</button>
            <button class="btn btn-secondary" type="reset">Reset</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
