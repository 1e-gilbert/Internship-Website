<?php
$pageTitle = 'Projects';
$currentPage = 'projects';
$pageKey = 'projects';
$headerImage = './Image/coding(1).jpg';
include 'Inc/header.inc.php';
include('auth.php'); // Protect this page by requiring login
?>

<div class=project-title>
    <h1>PROJECTS </h1>
</div>

<section id="projects">
    <div class="figure-container">
        <figure>
            <img src="./Image/pImage.png" alt="Image 1" class="project-img">
            <figcaption><strong>My first PHP Project</strong></figcaption>
        </figure>

        <figure>
            <img src="./Image/image2.png" alt="Image 2" class="project-img">
            <figcaption>
                <a href="http://localhost/DIARY/index.php" style="color: rgb(248, 178, 254);"><strong>DIARY APP</strong>
            </figcaption>
        </figure>

        <figure>
            <img src="./Image/image3.png" alt="Image 3" class="project-img">
            <figcaption>
                <a href="http://localhost/Name/Part%2001/index.php" style="color: rgb(248, 178, 254);"><strong>Name Explorer</strong></a>
            </figcaption>
        </figure>
    </div>
</section>


<div class="contact-me">
    <section id="contact">
        <h2>Contact Me</h2>
        <div class="contact-info-upper-container">
            <div class="contact-info-container">
                <img src="./Image/email.png" alt="Email icon" class="icon" />
                <p><a href="mailto:danielelagboka@gmail.com" target="_blank">danielleagboka@gmail.com</a></p>

                <img src="./Image/github.png" alt="GitHub icon" class="icon" />
                <p><a href="https://github.com/1e-gilbert" target="_blank">GitHub</a></p>

                <img src="./Image/linkedin.png" alt="LinkedIn icon" class="icon" />
                <p><a href="https://www.linkedin.com/in/danielle-a-05497b229" target="_blank">LinkedIn</a></p>
            </div>
        </div>
</div>
</section>

<?php include 'Inc/footer.inc.php'; ?>