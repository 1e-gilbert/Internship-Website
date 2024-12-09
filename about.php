<?php
$pageTitle = 'About';
$pageKey = 'about';
$currentPage = 'about';
$headerImage = './Image/images.jpg';
include 'Inc/header.inc.php';
include('auth.php'); // Protect this page by requiring login
?>

<section id="about">
    <h2>About</h2>
    <p>
        Embarking on an internship is an exciting step in your career journey, offering a chance to apply classroom knowledge to
        real-world situations. As an intern, you are typically in a transitional phase between academic learning and
        professional employment, which can be both thrilling and daunting.
        I'm in my first week of being an intern and there is so much to unpack. Per my supervisor's advice, I've taken the initiative to embark on various projects to understand PHP better. My first step is to apply my basic understanding of it to my existing knowledge of HTML, CSS, and JS and eventually build a <em>Content Management System (CMS)</em>. <strong>This is just the beginning!</strong>
    </p>
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
    </section>
</div>

<!-- Add auto-logout script for inactivity -->
<script>
    // Set the timeout duration (10 minutes = 600,000 milliseconds)
    const timeoutDuration = 600000;

    // After 10 minutes of inactivity, redirect to the login page
    setTimeout(function() {
        alert("You have been inactive for 10 minutes. You will be logged out.");
        window.location.href = 'http://localhost/website/login/index.php';
    }, timeoutDuration);
</script>

<?php include 'Inc/footer.inc.php'; ?>