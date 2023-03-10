<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin STT LETS</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="../../css/sidebar.css" rel="stylesheet">
    <link href="../information/information.css" rel="stylesheet">

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="bootstrap" viewBox="0 0 118 94">
            <title>Bootstrap</title>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
        </symbol>
    </svg>

    <aside class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 200px; height: 100vh;">
        <a href="/admin/view/home" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <span class="title fs-5">STT LETS</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="../home" class="nav-link link-dark">
                    Home
                </a>
            </li>
            <li>
                <a href="../information" class="nav-link active" style="background-color: #388FA3;">
                    Information
                </a>
            </li>
            <li>
                <a href="../staff" class="nav-link link-dark">
                    Staff
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../../../img/user0.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>web admin</strong>
            </a>
            <ul class="dropdown-menu text-small shadow">
                <!-- <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li>
          <hr class="dropdown-divider">
        </li> -->
                <li><a class="dropdown-item" href="../../admin">Sign out</a></li>
            </ul>
        </div>
    </aside>

    <main>
        <h1 class="nav-title">Information</h1>
        <p class="nav-subtitle">#informasi</p>
        <hr width="100%">
            <?php
            include '../../db.php';

            $id = $_GET["id"];
            $sql = "SELECT * FROM information WHERE id=$id";
            $result = $connection->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<img src='../../../img/news/" . $row['file_name'] ."' alt=''style='margin-bottom:2rem;'/>";
                echo "<form action='./update_image.php?id=".$row['id']."' method='POST' enctype='multipart/form-data'>";
                echo "Select image to upload (recomended size: 900x600px)";
                echo "<span>".$row['file_name']."</span>";
                echo "<input class='button-choose' type='file' name='fileToUpload' id='fileToUpload'>";
                echo "<input class='button-upload' type='submit' value='Upload Image' name='submit'>";
                echo "</form>";
                
                echo "<div class='add'>";
                echo "<form action='./update_information.php?id=".$row['id']."' method='POST' name='form'>";
                
                echo "<label for='author'>Author</label>";
                echo "<input type='text' name='author' id='author' value='" . $row['author'] . "'required>";

                echo "<label for='title'>Title</label>";
                echo "<input type='text' name='title' id='title' value='" . $row['title'] . "' required>";

                echo "<label for='content'>Content</label>";
                echo "<textarea name='content' id='content' rows='7' required>" . $row['content'] . "</textarea>";

                echo "<label for='created'>Created</label>";
                echo "<input class='date' type='text' id='created' name='created' value='" . $row['created'] . "' required>";

                echo "<button type='submit'>save</button>";

                echo "</form>";
                echo "</div>";
            }
            $connection->close();

            ?>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="../js/sidebar.js"></script>
</body>

</html>