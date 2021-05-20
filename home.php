<?php
session_start();
if (!isset($_SESSION['is_login'])) {
    header('location:login.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Home</title>

    <style>
        nav ul {
            margin: 0px;
            padding: 0px;
            list-style-type: none;
            display: flex;
            justify-content: space-around;
            flex-direction: column;
            font-size: 20px;
            background-color: grey;
            border: 1px solid black;
            
        }

        @media only screen and (min-width: 768px) {
            nav ul {
                flex-direction: row;
            }
        }
        
        nav ul li {
            display: block;
            flex: 1;
            text-align: center;
            margin: .5em;
            padding: .5em 1em;
            background-color: grey;
            border: 1px solid gold;
            border-radius: 1em;
            text-decoration: none;
            color:  whitesmoke;
        }

        body {
            background-image: url("assets/kursi.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            font-size: 30px;
            color: white;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>
<body>
<nav>
          <ul>
              <li>Menu</li>
              <li>News</li>
              <li>About</li>
              <li>Contact</li>
          </ul>
      </nav>
        <a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Logout</a>

    </div>
    </nav>

    <center>
        <main role="main" class="container">

            <div class="starter-template">
                <h1>Selamat Datang <?php echo $_SESSION['nama']; ?></h1>
            </div>

        </main>
    </center>
</html>
