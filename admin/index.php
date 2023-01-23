<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Admin STT LETS</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="./admin/css/index.css" rel="stylesheet">
</head>

<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form method="POST" action="./admin/home.php">
            <img class="mb-4" src="../img/logo_stt_lets.png" alt="" width="120" height="150">

            <div class="form-floating">
                <input type="text" class="form-control" id="username" name="username">
                <label for="floatingInput">user name</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password">
                <label for="floatingPassword">password</label>
            </div>
            <div class="error-container" id="error">
                <p class="error-message">user name and password are not found</p>
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-3 color-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
        </form>
    </main>

    <script>
        document.getElementById("error").style.display = "none";
        const urlParams = new URLSearchParams(location.search);
        let notFound;
        for (const [key, value] of urlParams) {
            if(key==="notfound" && value==='1'){
                document.getElementById("error").style.display = "block";
            }
        }
        
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>