<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUETCONNECT</title>
    <style>
        .navbar{
            background-color: rgb(58, 143, 218);
            border-radius: 20px;
            overflow: auto;
        }
        .navbar ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .navbar li {
            float: left;
            margin: 13px 20px;
        } 
        .navbar li a {
            padding: 3px 3px;
            text-decoration: none;
            color: white;
            padding-top: 3px;
        }
        .navbar li a:hover {
            color: blue;
        }
        .search {
            float: left;
            color: white;
            padding: 12px 75px;
            padding-top: 2px;
            margin-top: 2px;
        }
        .navbar input[type="text"] {
            border: 2px solid black;
            border-radius: 14px;
            padding: 3px 14px;
        }
        .navbar input[type="submit"] {
            background-color: white;
            border: 2px solid black;
            border-radius: 14px;
            padding: 3px 14px;
            color: black;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="academic_support.php">Academic Support</a></li>
                <li><a href="research_collab.php">Research</a></li> 
                <li><a href="About.php">About us</a></li> 
                <li><a href="Review.php">Reviews</a></li>
                <li class="search">
                    <form action="search.php" method="get">
                        <input type="text" name="search" id="search" placeholder="Search this website">
                        <input type="submit" value="Search">
                    </form>
                </li>
            </ul>
        </nav>
    </header>
</body>
</html>
