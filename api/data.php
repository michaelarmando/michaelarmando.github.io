<?php

// Konfigurasi dasar website
$siteConfig = [
    'title' => 'Portofolio Saya',
    'author' => 'Michael Armando',
];

// Informasi personal
$personalInfo = [
    'name' => 'Michael Armando Putra',
    'profile_picture' => 'https://cdn.momoi.cc/uploads/2025-09-19_710e9d2dc3/2025-09-19_1e96459649.png',
    'tagline' => 'Business Information Technology Student at BINUS University',
    'about' => 'Hi, I’m Michael Armando Putra, a fifth-semester Business Information Technology student at Bina Nusantara University. I am developing my career in technology and business strategy with experience in IS analysis and design, UI/UX, and data & business analysis.

I actively engage in real-world projects and volunteer programs to sharpen my collaboration, adaptability, and problem-solving skills. Passionate about connecting technology and business, I aim to deliver impactful IT solutions and grow as a technology-driven problem solver.',
    'email' => 'michaelaemandop@gmail.com',
    'cv_url' => 'CV-Michael-Armando-Putra.pdf', // Nama file CV Anda
    'social_links' => [ 
        'github' => 'https://github.com/michaelarmando',
        'linkedin' => 'https://linkedin.com/in/michael-armando-putra',
        'instagram' => 'https://www.instagram.com/michaelarmandop'
    ]
];

// Daftar Skills
$skills = [
    'IS Analysis & Design', 'UI/UX', 'Data Analysis', 'Business Analysis', 'PHP', 'MySQL', 'HTML', 'CSS', 'Figma'
];

// Daftar proyek portofolio
$portfolioItems = [
    [
        'title' => 'Management KingsHCut',
        'category' => 'project',
        'image' => 'https://via.placeholder.com/400x250/112240/64ffda?text=KingsHCut',
        'description' => 'Aplikasi web berbasis PHP dan MySQL untuk mengelola stok, penjualan, dan laporan keuangan barbershop.',
        'link' => '#'
    ],
    [
        'title' => 'Aplikasi Sewa Alat Berat',
        'category' => 'project',
        'image' => 'https://via.placeholder.com/400x250/112240/64ffda?text=Sewa+Alat',
        'description' => 'Aplikasi untuk manajemen penyewaan alat berat yang efisien dan terintegrasi.',
        'link' => '#'
    ],
    [
        'title' => 'SMAK Penabur Harapan Indah',
        'category' => 'education',
        'image' => 'https://cdn.momoi.cc/uploads/2025-09-19_6895c42635/2025-09-19_47b7703c4d.jpg',
        'description' => 'Lulus dari jurusan IPA di SMAK Penabur Harapan Indah.',
        'link' => '#'
    ],
    [
        'title' => 'BINUS University',
        'category' => 'education',
        'image' => 'https://cdn.momoi.cc/uploads/2025-09-19_c25637be7c/2025-09-19_06fe33cf1a.jpg',
        'description' => 'Saat ini menempuh pendidikan S1 di jurusan Business Information Technology.',
        'link' => '#'
    ],
    [
        'title' => 'Sertifikat Kompetensi A',
        'category' => 'certificate',
        'image' => 'https://via.placeholder.com/400x250/112240/64ffda?text=Sertifikat',
        'description' => 'Deskripsi singkat mengenai sertifikat yang diperoleh.',
        'link' => '#' // Kosongkan jika tidak ada link
    ],
];

?>