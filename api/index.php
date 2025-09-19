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
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <div class="container">
        <header id="hero">
            <img src="<?php echo htmlspecialchars($personalInfo['profile_picture']); ?>" alt="Foto Profil <?php echo htmlspecialchars($personalInfo['name']); ?>" class="profile-picture">
            <h1><?php echo htmlspecialchars($personalInfo['name']); ?></h1>
            <p class="tagline"><?php echo htmlspecialchars($personalInfo['tagline']); ?></p>
        </header>

        <main>
            <section id="about">
                <h2>Tentang Saya</h2>
                <p><?php echo htmlspecialchars($personalInfo['about']); ?></p>
            </section>

            <section id="portfolio">
                <h2>Portofolio Proyek</h2>
                <div class="filter-buttons">
                    <button class="filter-btn active" data-filter="all">Semua</button>
                    <button class="filter-btn" data-filter="web">Web</button>
                    <button class="filter-btn" data-filter="mobile">Mobile</button>
                    <button class="filter-btn" data-filter="desain">Desain</button>
                    <button class="filter-btn" data-filter="education">Education</button>
                </div>

                <div class="portfolio-grid">
                    <?php foreach ($portfolioItems as $item): ?>
                    <div class="portfolio-item" data-category="<?php echo htmlspecialchars($item['category']); ?>">
                        <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>">
                        <div class="item-info">
                            <h3><?php echo htmlspecialchars($item['title']); ?></h3>
                            <p><?php echo htmlspecialchars($item['description']); ?></p>
                            <a href="<?php echo htmlspecialchars($item['link']); ?>" target="_blank">Lihat Detail</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <section id="contact">
                <h2>My Contact</h2>
                <p>I'm currently open to new opportunities and collaborations. Feel free to send me an email!.</p>
                <div class="contact-links">
                    <a href="mailto:<?php echo htmlspecialchars($personalInfo['email']); ?>" class="contact-button">Email</a>
                    <a href="<?php echo htmlspecialchars($personalInfo['github']); ?>" target="_blank" class="contact-button">GitHub</a>
                    <a href="<?php echo htmlspecialchars($personalInfo['linkedin']); ?>" target="_blank" class="contact-button">LinkedIn</a>
                </div>
            </section>
        </main>

        <footer>
            <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($siteConfig['author']); ?>. Dibuat dengan ❤️</p>
        </footer>
    </div>

    <script src="/script.js"></script>
</body>
</html>