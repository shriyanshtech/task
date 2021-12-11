<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- Styles -->

</head>

<body class="antialiased">

    <div class="row">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('customers.index') }}" class="btn btn-success">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('customers.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Customer Name" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" max="99" name="age" class="form-control" placeholder="Customer Age" required>
                    </div>
                    <div class="form-group">
                        <select name="gender" id="gender" class="form-control" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">
                            <input type="radio" name="wlingtoWork" value="yes" class="form-control" checked>
                            yes </label>
                        <label for="">
                            <input type="radio" name="wlingtoWork" value="no" class="form-control">
                            no </label>
                    </div>
                    <div class="form-group">
                        <select name="language[]" id="language" class="form-control" multiple required>
                            <option value="Hindi">Hindi</option>
                            <option value="English">English</option>
                            <option value="Panjabi">Panjabi</option>
                            <option value="Urdu">Urdu</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>