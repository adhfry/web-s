<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - RA. SHOFIA T.M.</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <?php include "./layouts/navbar.php"; ?>

    <main class="main-content">
        <section class="about-section w-130">
            <div class="container ">
                <div class="about-image">
                    <img src="./assets/img/shofie.jpg" alt="Shofie">
                </div>
                <div class="about-content">
                    <h3>About Me</h3>
                    <h1>Beginner <br> Web Developer</h1>
                    <p>
                        Hello there! I'm <strong>RA. Shofia Tasmin Maulida</strong>, a passionate beginner in web
                        development. I'm excited to learn new things every day and build a strong foundation in
                        programming and design. I'm dedicated to growing my skills and exploring the world of web
                        development.
                    </p>
                    <div class="tabs">
                        <button class="tab active">Main Skills</button>
                        <button class="tab">Projects</button>
                        <button class="tab">Education</button>
                    </div>
                    <div class="skills">
                        <div class="skill">
                            <span>HTML & CSS Basics</span>
                            <div class="progress-bar">
                                <div class="progress" style="width: 60%;"></div>
                            </div>
                        </div>
                        <div class="skill">
                            <span>JavaScript Fundamentals</span>
                            <div class="progress-bar">
                                <div class="progress" style="width: 40%;"></div>
                            </div>
                        </div>
                        <div class="skill">
                            <span>Responsive Web Design</span>
                            <div class="progress-bar">
                                <div class="progress" style="width: 50%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="about-me">
                        <h1>My Biodata</h1>
                        <p><em>I am a beginner in web development, passionate about learning new skills and building my
                                foundation in creating functional and visually appealing websites.</em></p>
                        <div class="personal-info">
                            <div class="info">
                                <span>🌐 Website:</span> <a
                                    href="https://shofie.triforce.digital">https://shofie.triforce.digital</a>
                            </div>
                            <div class="info">
                                <span>📍 City:</span> Pamolokan, Sumenep
                            </div>
                            <div class="info">
                                <span>🎂 Age:</span> 19
                            </div>
                            <div class="info">
                                <span>📧 Email:</span> shftsmn@gmail.com
                            </div>
                        </div>
                        <p class="description">
                            As a beginner in web development, I am focused on building a strong foundation in creating
                            visually appealing and user-friendly designs. I am dedicated to continuously learning and
                            improving, with the goal of developing practical and solution-oriented websites that meet
                            user needs and industry standards.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include "./layouts/footer.php" ?>
</body>

</html>