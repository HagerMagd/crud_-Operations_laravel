<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* إعدادات الصفحة */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            flex-direction: column; /* لتكون العناصر عمودية */
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        /* تنسيق الرسالة */
        .welcome-message {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin: 20px 0; /* مسافة صغيرة من الأعلى والأسفل */
            opacity: 0;
            animation: fadeInDown 2s forwards; /* تطبيق الحركة */
            text-align: center; /* توسيط النص */
        }

        /* الحركة */
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
    <script>
        window.onload = function() {
            const welcomeMessage = document.querySelector('.welcome-message');
            welcomeMessage.style.animation = "fadeInDown 2s forwards";
        };
    </script>
</head>
<body>

<div class="container">
    <div class="welcome-message">
        Welcome To Page Add User
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
    <form class="row g-3 needs-validation" novalidate action="{{route('crud.store')}}" method="post">
    @csrf
        <div class="col-md-4 position-relative">
            <label for="validationTooltip01" class="form-label">Your Name</label>
            <input type="text" class="form-control" value="{{old('name')}}" id="validationTooltip01" required name="name">
        </div>
        
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">Your Email</label>
            <input type="email" class="form-control" value="{{old('email')}}"id="validationTooltip02" required name="email">
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">Your Address</label>
            <input type="text" class="form-control" value="{{old('address')}}"id="validationTooltip02" required name="address">
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltipUsername" class="form-label">Password</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="validationTooltipUsernamePrepend"></span>
                <input type="password" name="password"value="{{old('password')}}" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
            </div>
        </div>
        
        <div class="col-12 d-flex">
    <button class="btn btn-primary me-2" type="submit">Submit form</button>
    <button class="btn btn-primary" type="reset">Reset</button>
</div>

    </form>
</div>

</body>
</html>
