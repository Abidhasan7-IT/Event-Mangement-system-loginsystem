<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;600&display=swap" rel="stylesheet">

    <title>EMS</title>
</head>

<body>
    <div class="background-image">
        <div class="logo">EMS</div>
        <div class="navbar">
            <a href="logout.php">Logout</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
            <a href="#events">Events</a>
            <a href="#home">Home</a>
        </div>



        <div class="content">
            <h1>Welcome to our Event Management System</h1>
            <p>Find and join exciting events near you.</p>
        </div>
    </div>

    <section class="event">
        <h2>Upcoming Event: Workshop on Web Development</h2>
        <img src="image/w1.jpeg" alt="Event Image">
        <p>Join us for an exciting workshop on web development. Learn the latest technologies and best practices from
            industry experts.</p>
        <button class="event-button">Register Now</button>
    </section>
    <section class="event">
        <h2>Upcoming Event: Workshop on IUBAT Pro.Contest</h2>
        <img src="image/w2.jpg" alt="Event Image">
        <p>IUBAT CSE believes without having any hands-on experience a student cannot learn the subject-matter. <br> Keeping this in mind, from the very beginning, IUBAT CSE has established rich laboratories.</p>
        <button class="event-button">Register Now</button>
    </section>
    <section class="event">
        <h2>Upcoming Event: Workshop on Web Development</h2>
        <img src="image/w1.jpeg" alt="Event Image">
        <p>Join us for an exciting workshop on web development. Learn the latest technologies and best practices from
            industry experts.</p>
        <button class="event-button">Register Now</button>
    </section>

    <footer>
        <p>&copy; 2023 Event Management System. -Abid Hasan.</p>
    </footer>
</body>

</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>


<!-- home css style -->
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    .logo{
        color: #ffffff;
        font-family: 'Orbitron';
        padding: 14px 25px;
        font-size: 22px;
        font-weight: 700;
        position: absolute;
        letter-spacing: 0.5cm;
    }

    .navbar {
        background: transparent;
        overflow: hidden;
        margin-right: 5%;
    }

    .navbar a {
        float: right;
        display: block;
        color: white;
        text-align: center;
        padding: 15px 16px;
        margin-right: 5px;
        text-decoration: none;
        font-family: 'cursive';
        font-size: 18px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.7s;
    }

    a:hover {
        border-bottom: 1px solid #00ff55;
        color: #00ff55;
    }

    .background-image {
        background-image: url('image/bg.jpg');
        /* Replace 'background.jpg' with your image file */
        background-size: cover;
        background-position: center center;
        height: 750px;
        /* Adjust the height as needed */
    }

    .content {
        text-align: center;
        padding-top: 12%;
        color: #ffffff;
        font-family: 'Orbitron';
        font-size: 20px;
    }

    .event {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .event img {
        max-width: 50%;
        height: auto;
        margin-bottom: 20px;
        border-radius: 8px;
    }

    .event-button {
        background-color: #4caf50;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        transition: all 0.6s;
    }

    .event-button:hover {
        background-color: #0400ffe6;
    }


    footer {
        margin-top: 15%;
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 6px 0;
    }


    @media screen and (max-width: 600px) {
        .navbar a {
            float: none;
            display: block;
            width: 100%;
            text-align: center;
        }

        .event {
            padding: 10px;
        }
    }
</style>