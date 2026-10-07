```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gungun | Portfolio</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        :root {
            --bg: #0f172a;
            --card: #1e293b;
            --text: #f8fafc;
            --secondary: #94a3b8;
            --primary: #38bdf8;
            --primary2: #818cf8;
        }

        body.light {
            --bg: #f1f5f9;
            --card: #ffffff;
            --text: #0f172a;
            --secondary: #475569;
        }

        body {
            font-family: Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
            transition: 0.4s;
        }

        /* NAVBAR */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 8%;
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(10px);
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
            color: var(--primary);
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 25px;
        }

        nav a {
            color: white;
            text-decoration: none;
            transition: 0.3s;
        }

        nav a:hover {
            color: var(--primary);
        }

        #themeBtn {
            border: none;
            background: var(--primary);
            padding: 8px 12px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 16px;
        }

        /* HERO */
        .hero {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 100px 20px 40px;
            background:
                radial-gradient(circle at top left, #1d4ed8, transparent 35%),
                radial-gradient(circle at bottom right, #7c3aed, transparent 35%),
                var(--bg);
        }

        .hero-content {
            max-width: 800px;
        }

        .hero h1 {
            font-size: 60px;
            margin-bottom: 15px;
        }

        .hero h1 span {
            color: var(--primary);
        }

        .hero h2 {
            font-size: 28px;
            color: var(--secondary);
            margin-bottom: 20px;
        }

        .hero p {
            color: var(--secondary);
            font-size: 18px;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 13px 25px;
            margin: 5px;
            border-radius: 30px;
            background: linear-gradient(90deg, var(--primary), var(--primary2));
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(56, 189, 248, 0.3);
        }

        /* SECTIONS */
        section {
            padding: 90px 8%;
        }

        .title {
            text-align: center;
            margin-bottom: 45px;
        }

        .title h2 {
            font-size: 40px;
            color: var(--primary);
        }

        .title p {
            color: var(--secondary);
            margin-top: 10px;
        }

        /* ABOUT */
        .about {
            max-width: 850px;
            margin: auto;
            text-align: center;
            color: var(--secondary);
            font-size: 18px;
        }

        /* SKILLS */
        .skills-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 20px;
        }

        .skill {
            background: var(--card);
            padding: 30px;
            text-align: center;
            border-radius: 15px;
            transition: 0.4s;
            border: 1px solid transparent;
        }

        .skill:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
        }

        .skill h3 {
            margin-bottom: 10px;
            color: var(--primary);
        }

        .skill p {
            color: var(--secondary);
        }

        /* PROJECTS */
        .projects {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .project {
            background: var(--card);
            padding: 30px;
            border-radius: 15px;
            transition: 0.4s;
        }

        .project:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        }

        .project h3 {
            color: var(--primary);
            margin-bottom: 12px;
        }

        .project p {
            color: var(--secondary);
            margin-bottom: 20px;
        }

        /* CONTACT */
        .contact-box {
            max-width: 600px;
            margin: auto;
            background: var(--card);
            padding: 30px;
            border-radius: 15px;
        }

        .contact-box input,
        .contact-box textarea {
            width: 100%;
            padding: 14px;
            margin-bottom: 15px;
            border: none;
            border-radius: 8px;
            background: var(--bg);
            color: var(--text);
            outline: none;
        }

        .contact-box textarea {
            height: 130px;
            resize: none;
        }

        .contact-box button {
            width: 100%;
            border: none;
            cursor: pointer;
        }

        /* FOOTER */
        footer {
            text-align: center;
            padding: 25px;
            background: #020617;
            color: #94a3b8;
        }

        /* ANIMATION */
        .fade {
            opacity: 0;
            transform: translateY(30px);
            transition: 0.8s;
        }

        .fade.show {
            opacity: 1;
            transform: translateY(0);
        }

        /* MOBILE */
        @media (max-width: 700px) {

            nav {
                padding: 15px 5%;
            }

            nav ul {
                display: none;
            }

            .hero h1 {
                font-size: 40px;
            }

            .hero h2 {
                font-size: 22px;
            }

            section {
                padding: 70px 5%;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav>
        <div class="logo">Gungun.</div>

        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

        <button id="themeBtn">🌙</button>
    </nav>


    <!-- HOME -->
    <section class="hero" id="home">

        <div class="hero-content">

            <h1>Hello, I'm <span>Gungun</span></h1>

            <h2>
                I am a <span id="typing"></span>
            </h2>

            <p>
                I am a web development student who loves creating
                modern and beautiful websites.
            </p>

            <a href="#projects" class="btn">View My Work</a>
            <a href="#contact" class="btn">Contact Me</a>

        </div>

    </section>


    <!-- ABOUT -->
    <section id="about" class="fade">

        <div class="title">
            <h2>About Me</h2>
            <p>Get to know me</p>
        </div>

        <div class="about">
            <p>
                Hello! I am Gungun, a web development student.
                I am learning HTML, CSS, PHP, Laravel and WordPress.
                My goal is to create modern, responsive and
                user-friendly websites.
            </p>
        </div>

    </section>


    <!-- SKILLS -->
    <section id="skills" class="fade">

        <div class="title">
            <h2>My Skills</h2>
            <p>Technologies I am learning</p>
        </div>

        <div class="skills-container">

            <div class="skill">
                <h3>HTML</h3>
                <p>Web Structure</p>
            </div>

            <div class="skill">
                <h3>CSS</h3>
                <p>Web Design</p>
            </div>

            <div class="skill">
                <h3>PHP</h3>
                <p>Backend Development</p>
            </div>

            <div class="skill">
                <h3>Laravel</h3>
                <p>PHP Framework</p>
            </div>

            <div class="skill">
                <h3>WordPress</h3>
                <p>Website Development</p>
            </div>

        </div>

    </section>


    <!-- PROJECTS -->
    <section id="projects" class="fade">

        <div class="title">
            <h2>My Projects</h2>
            <p>Some of my recent work</p>
        </div>

        <div class="projects">

            <div class="project">
                <h3>🚀 Laravel Portfolio</h3>
                <p>
                    A portfolio website created using
                    Laravel and PHP.
                </p>

                <a href="#" class="btn">View Project</a>
            </div>


            <div class="project">
                <h3>🌐 WordPress Website</h3>
                <p>
                    A modern website created using
                    WordPress.
                </p>

                <a href="#" class="btn">View Project</a>
            </div>


            <div class="project">
                <h3>💻 PHP Website</h3>
                <p>
                    A dynamic website created using
                    HTML, CSS and PHP.
                </p>

                <a href="#" class="btn">View Project</a>
            </div>

        </div>

    </section>


    <!-- CONTACT -->
    <section id="contact" class="fade">

        <div class="title">
            <h2>Contact Me</h2>
            <p>Let's work together</p>
        </div>

        <div class="contact-box">

            <input type="text" placeholder="Your Name">

            <input type="email" placeholder="Your Email">

            <textarea placeholder="Your Message"></textarea>

            <button class="btn" onclick="sendMessage()">
                Send Message
            </button>

        </div>

    </section>


    <!-- FOOTER -->
    <footer>
        <p>© 2026 Gungun | My Portfolio</p>
    </footer>


    <script>

        // TYPING EFFECT

        const words = [
            "Web Developer",
            "PHP Developer",
            "Laravel Student",
            "WordPress Developer"
        ];

        let wordIndex = 0;
        let charIndex = 0;
        let deleting = false;

        function typeEffect() {

            const typing = document.getElementById("typing");

            const word = words[wordIndex];

            if (!deleting) {

                typing.textContent =
                    word.substring(0, charIndex + 1);

                charIndex++;

                if (charIndex === word.length) {
                    deleting = true;
                    setTimeout(typeEffect, 1200);
                    return;
                }

            } else {

                typing.textContent =
                    word.substring(0, charIndex - 1);

                charIndex--;

                if (charIndex === 0) {
                    deleting = false;
                    wordIndex++;

                    if (wordIndex === words.length) {
                        wordIndex = 0;
                    }
                }
            }

            setTimeout(typeEffect, deleting ? 60 : 100);
        }

        typeEffect();


        // DARK / LIGHT MODE

        const themeBtn = document.getElementById("themeBtn");

        themeBtn.addEventListener("click", function () {

            document.body.classList.toggle("light");

            if (document.body.classList.contains("light")) {
                themeBtn.textContent = "☀️";
            } else {
                themeBtn.textContent = "🌙";
            }

        });


        // SCROLL ANIMATION

        const sections = document.querySelectorAll(".fade");

        window.addEventListener("scroll", function () {

            sections.forEach(function (section) {

                const position =
                    section.getBoundingClientRect().top;

                if (position < window.innerHeight - 100) {
                    section.classList.add("show");
                }

            });

        });


        // CONTACT BUTTON

        function sendMessage() {
            alert("Thank you! Your message has been received.");
        }

    </script>

</body>
</html>
```