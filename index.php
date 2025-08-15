<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nicole Sandoval - Portfolio</title>
    <style>
        body {
            font-family: 'Pacifico', cursive;
            margin: 0;
            background-color: #0d0d0d;
            color: #e6e6e6;
            line-height: 1.6;
        }

        header {
            background: linear-gradient(to right, #5a189a, #240046);
            color: white;
            padding: 30px 0;
            text-align: center;
        }

        header img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 4px solid #e0aaff;
        }

        header h1 {
            margin: 15px 0 5px;
        }

        header p {
            font-size: 18px;
            color: #ddd;
        }

        main {
            max-width: 900px;
            margin: auto;
            padding: 20px;
        }

        section {
            background-color: #1a1a1a;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            border-left: 5px solid #7b2cbf;
        }

        section h2 {
            color: #c77dff;
            margin-bottom: 10px;
        }

        footer {
            background: #240046;
            text-align: center;
            padding: 15px;
            color: #ccc;
            font-size: 14px;
        }

        /* Responsive */
        @media (max-width: 600px) {
            header img {
                width: 120px;
                height: 120px;
            }
        }
    </style>
</head>
<body>

<header>
    <img src="menicole.jpg" alt="Nicole Sandoval">
    <h1>Nicole Sandoval</h1>
    <p>Colorado Homes, Cot-cot, Liloan, Cebu</p>
</header>

<main>
    <section>
        <h2>Personal Information</h2>
        <p><strong>Mobile Phone:</strong> 09208864338</p>
        <p><strong>Email:</strong> <a href="mailto:nic.sandoval4edu@gmail.com" style="color:#c77dff;">nic.sandoval4edu@gmail.com</a></p>
        <p><strong>Birthday:</strong> July 4, 2004</p>
        <p><strong>Hobbies:</strong> Playing video games, Drawing, and Singing</p>
    </section>

    <section>
        <h2>Why did I choose this course?</h2>
        <p>Because eversince I was a kid, I have always wondered how games work and made. With that, even though I am not that good in programming nor has an experience in making one, this childhood dream of mine will always motivate me to continue learning.</p>
    </section>

    <section>
        <h2>Aside from being a gamer, what keeps me motivated?</h2>
        <p><em>Luke 1:45</em>, "Blessed is she who believes that the Lord will fulfill his promises to her," - is what I always bring, this verse always gives me strength and hope, most especially whenever I feel doubtful of my skills in this field. This keeps me on track. This brings me a bright vision of my future.</p>
    </section>
</main>

<footer>
    &copy; <?php echo date("Y"); ?> Nicole Sandoval | My Landing Portfolio
</footer>

</body>
</html>
