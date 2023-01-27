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
    <link href="./program.css" rel="stylesheet">

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
        <a href="/admin/view/home/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <span class="title fs-5">STT LETS</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="/new/admin/view/home/" class="nav-link link-dark">
                    Home
                </a>
            </li>
            <li>
                <a href="/new/admin/view/information/" class="nav-link link-dark">
                    Information
                </a>
            </li>
            <li>
                <a href="/new/admin/view/staff/" class="nav-link link-dark">
                    Staff
                </a>
            </li>
            <li>
                <a href="/new/admin/view/head/" class="nav-link link-dark">
                    Head
                </a>
            </li>
            <li>
                <a href="/new/admin/view/program/" class="nav-link active" style="background-color: #388FA3;">
                    Program
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
                <li><a class="dropdown-item" href="/new/admin/">Sign out</a></li>
            </ul>
        </div>
    </aside>

    <main>
        <h1 class="nav-title">Program</h1>
        <p class="nav-subtitle">#program</p>
        <hr class="hr" width="100%">
        <?php
        include '../../db.php';

        $id = $_GET["id"];
        $sql = "SELECT * FROM program WHERE id=$id";
        $result = $connection->query($sql);

        while ($row = $result->fetch_assoc()) {
            echo "<img src='/new/img/program/" . $row['program_picture'] . "' alt=''style='margin-bottom:2rem;'/>";
            echo "<form action='/new/admin/view/program/update_image.php?id=" . $row['id'] . "' method='POST' enctype='multipart/form-data'>";
            echo "Select image to upload (recomended size: 304x223px)";
            echo "<span>" . $row['program_picture'] . "</span>";
            echo "<input class='button-choose' type='file' name='fileToUpload' id='fileToUpload'>";
            echo "<input class='button-upload' type='submit' value='Upload Image' name='submit'>";
            echo "</form>";

            echo "<hr>";

            echo "<img src='/new/document/" . $row['program_document'] . "' alt=''style='margin-bottom:2rem;'/>";
            echo "<form action='/new/admin/view/program/update_document.php?id=" . $row['id'] . "' method='POST' enctype='multipart/form-data'>";
            echo "Select document to upload";
            echo "<span>" . $row['program_document'] . "</span>";
            echo "<input class='button-choose' type='file' name='fileToUpload' id='fileToUpload'>";
            echo "<input class='button-upload' type='submit' value='Upload Document' name='submit'>";
            echo "</form>";
            echo "</div>";

            echo "<hr>";

            echo "<div class='add'>";
            echo "<form action='/new/admin/view/program/update_program.php?id=" . $row['id'] . "' method='POST' name='form'>";

            echo "<label for='program_level'>Program Level</label>";
            echo "<select id='program_level' name='program_level'>";
            echo $row['program_level'] == "S1" ? "<option selected value='S1'>SARJANA</option>" : "<option value='S1'>SARJANA</option>";
            echo $row['program_level'] == "S2" ? "<option selected value='S2'>MAGISTER</option>" : "<option value='S2'>MAGISTER</option>";
            echo $row['program_level'] == "S3" ? "<option selected value='S3'>DOKTORAL</option>" : "<option value='S3'>DOKTORAL</option>";
            echo "</select>";

            echo "<label for='program_name'>Program Name</label>";
            echo "<input type='text' name='program_name' id='program_name' value='" . $row['program_name'] . "' required>";

            echo "<label for='program_description'>Program Description</label>";
            echo "<textarea name='program_description' id='program_description' rows='7' required>" . $row['program_description'] . "</textarea>";

            echo "<label for='program_vision'>Program Vision</label>";
            echo "<textarea name='program_vision' id='program_vision' rows='3' required>" . $row['program_vision'] . "</textarea>";

            echo "<label for='program_mission'>Program Mission</label>";
            echo "<textarea name='program_mission' id='program_mission' rows='7' required>" . $row['program_mission'] . "</textarea>";

            echo "<button type='submit'>save</button>";

            echo "</form>";
        }

        $connection->close();
        ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="../js/sidebar.js"></script>
</body>

</html>