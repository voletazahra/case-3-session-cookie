<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <link rel="stylesheet" href="style.css"/>
    <title>Login
    </title>
</head>
<body class="text-center d-flex align-items-center">

<div class="wrapper">
    <main class="form-signin">
        <form>
            <div class="container">
            <h1 class="h3 mb-3 fw-normal"> Welcome to Case 3</h1>
            <h2 class="h3 mb-3 fw-normal"> Please sign in</h2>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Input your password" required>
        </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Sign in</button>
            </div>
            </div>
        </form>
    </main>
</html>