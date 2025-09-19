<?php
// Memuat semua data dari file data.php
require_once 'data.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($siteConfig['author']); ?> | Portofolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <div class="container">
        <header id="hero">
            <img src="<?php echo htmlspecialchars($personalInfo['profile_picture']); ?>" alt="Foto Profil <?php echo htmlspecialchars($personalInfo['name']); ?>" class="profile-picture">
            <h1><?php echo htmlspecialchars($personalInfo['name']); ?></h1>
            <p class="tagline"><?php echo htmlspecialchars($personalInfo['tagline']); ?></p>

            <div class="social-icons">
                <?php if (!empty($personalInfo['social_links']['github'])): ?>
                    <a href="<?php echo htmlspecialchars($personalInfo['social_links']['github']); ?>" target="_blank" aria-label="GitHub"><i class="bi bi-github"></i></a>
                <?php endif; ?>
                <?php if (!empty($personalInfo['social_links']['linkedin'])): ?>
                    <a href="<?php echo htmlspecialchars($personalInfo['social_links']['linkedin']); ?>" target="_blank" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                <?php endif; ?>
                <?php if (!empty($personalInfo['social_links']['instagram'])): ?>
                    <a href="<?php echo htmlspecialchars($personalInfo['social_links']['instagram']); ?>" target="_blank" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                <?php endif; ?>
            </div>
        </header>

        <main>
            <section id="about">
                <h2>About Me</h2>
                <p><?php echo htmlspecialchars($personalInfo['about']); ?></p>
            </section>
            
            <section id="skills">
                <h2>Skills</h2>
                <div class="skills-grid">
                    <?php foreach($skills as $skill): ?>
                        <div class="skill-item"><?php echo htmlspecialchars($skill); ?></div>
                    <?php endforeach; ?>
                </div>
            </section>

            <section id="portfolio">
                <h2>Portfolio</h2>
                <div class="filter-buttons">
                    <button class="filter-btn active" data-filter="all">All</button>
                    <button class="filter-btn" data-filter="project">Project</button>
                    <button class="filter-btn" data-filter="education">Education</button>
                    <button class="filter-btn" data-filter="certificate">Certificate</button>
                    <button class="filter-btn" data-filter="activity">Activity</button>
                </div>

                <div class="portfolio-grid">
                    <?php foreach ($portfolioItems as $item): ?>
                    <div class="portfolio-item" data-category="<?php echo htmlspecialchars($item['category']); ?>">
                        <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>">
                        <div class="item-info">
                            <h3><?php echo htmlspecialchars($item['title']); ?></h3>
                            <p><?php echo htmlspecialchars($item['description']); ?></p>
                            <a href="<?php echo htmlspecialchars($item['link']); ?>" target="_blank">View Details</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <section id="contact">
                <h2>My Contact</h2>
                <p>I'm currently open to new opportunities and collaborations. Feel free to send me an email!</p>
                <div class="contact-links">
                    <a href="mailto:<?php echo htmlspecialchars($personalInfo['email']); ?>" class="contact-button">Email Me</a>
                </div>
            </section>
        </main>

        <footer>
            <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($siteConfig['author']); ?>.</p>
        </footer>
    </div>

    <script src="/script.js"></script>
</body>
</html>