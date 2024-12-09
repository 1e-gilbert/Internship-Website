<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project<?php if (!empty($pageTitle)): ?> &bull; <?php echo $pageTitle; ?><?php endif; ?></title>
    <link rel="stylesheet" href="style.css">

    <?php
    // Check the current page and include the appropriate stylesheet
    if ($currentPage === 'projects') {
        echo '<link rel="stylesheet" href="style2.css">';
    } else if ($currentPage === 'report') {
        echo '<link rel="stylesheet" href="style3.css">';
    }
    ?>
</head>

<body>
    <?php if (empty($headerImage)) {
        $headerImage =
            './Image/images.jpg';
    }
    ?>
    <h1 class=" heading">Being An Intern</h1>
    <header class="banner" style="background-image: url('<?php echo $headerImage; ?>');">
        <section>
            <?php
            if (!isset($pageKey)) $pageKey = '';
            ?>
            <?php if ($pageKey === 'about'): ?>
                <a class="active" href="about.php">About</a>
            <?php else: ?>
                <a href="about.php">About</a>
            <?php endif; ?>

            <a class="<?php if (!empty($pageKey) && $pageKey === 'projects') echo 'active'; ?>" href="projects.php">Projects</a>
            <a
                <?php if (!empty($pageKey) && $pageKey === 'report'): ?>
                class="active"
                <?php endif; ?>
                href="report.php">Report</a>
        </section>
    </header>

    <main>