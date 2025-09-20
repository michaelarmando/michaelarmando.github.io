<?php

// Konfigurasi dasar website
$siteConfig = [
    'title' => 'Portofolio Michael Armando',
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
    'IS Analysis & Design', 'UI/UX', 'Business Analysis', 'MySQL', 'java', 'Canva', 'Figma', 'Phyton', 'Ms.Word', 'Ms.Excel', 'Ms.PowerPoint'
];

// Daftar proyek portofolio
$portfolioItems = [
    [
        'title' => 'Management KingsHCut',
        'category' => 'project',
        'image' => 'https://via.placeholder.com/400x250/112240/64ffda?text=KingsHCut',
        'description' => 'Aplikasi web berbasis java dan MySQL untuk mengelola stok, penjualan, dan laporan keuangan barbershop.',
        'link' => '#'
    ],
    [
        'title' => 'Aplikasi Sewa Alat Berat',
        'category' => 'project',
        'image' => 'https://cdn.momoi.cc/uploads/2025-09-19_1f6c11e925/2025-09-19_6b553724da.png',
        'description' => 'Membuat aplikasi sederhana untuk manajemen penyewaan alat berat yang efisien dan terintegrasi.',
        'link' => 'https://www.figma.com/design/t3CNdPImrR6VpNo4JAhu6w/-2--ToolHub-Group-4-BD80?node-id=0-1&t=OnlmSoi4SiZW9Slu-1'
    ],
    [
        'title' => 'SMAK Penabur Harapan Indah',
        'category' => 'education',
        'image' => 'https://cdn.momoi.cc/uploads/2025-09-19_6895c42635/2025-09-19_47b7703c4d.jpg',
        'description' => 'Lulus dari jurusan IPS di SMAK Penabur Harapan Indah.',
        'link' => ''
    ],
    [
        'title' => 'BINUS University',
        'category' => 'education',
        'image' => 'https://cdn.momoi.cc/uploads/2025-09-19_c25637be7c/2025-09-19_06fe33cf1a.jpg',
        'description' => 'Saat ini menempuh pendidikan S1 di jurusan Business Information Technology.',
        'link' => ''
    ],
    [
        'title' => 'Tutor Terbaik',
        'category' => 'certificate',
        'image' => 'https://cdn.momoi.cc/uploads/2025-09-19_d9070e03b1/2025-09-19_c9a72e5808.jpeg',
        'description' => 'Diberikan sebagai penghargaan atas prestasi sebagai Tutor Terbaik selama tahun ajaran 2021/2022 di SMAK PENABUR Harapan Indah.',
        'link' => '' 
    ],
    [
        'title' => 'Character Growth',
        'category' => 'certificate',
        'image' => 'https://cdn.momoi.cc/uploads/2025-09-19_0ba68b1520/2025-09-19_9112458661.jpeg',
        'description' => 'Penghargaan atas partisipasi dalam materi Spiritual, Kepercayaan, dan Etika pada tahun ajaran 2022/2023.',
        'link' => '' 
    ],
    [
        'title' => 'ENGLISH FOR CREATIVE WRITING',
        'category' => 'certificate',
        'image' => 'https://cdn.momoi.cc/uploads/2025-09-20_3b50f5dd26/2025-09-20_aa5aa0d2e3.jpg',
        'description' => 'Menyelesaikan program ENGLISH FOR CREATIVE WRITING Beelingua',
        'link' => '' 
    ],
    [
        'title' => 'ENGLISH FOR PROFESSIONAL OFFICE',
        'category' => 'certificate',
        'image' => 'https://cdn.momoi.cc/uploads/2025-09-20_97ec2a73a8/2025-09-20_903297b117.jpg',
        'description' => 'Menyelesaikan program ENGLISH FOR PROFESSIONAL OFFICE Beelingua.',
        'link' => '' 
    ],
    [
        'title' => 'ADVANCED ENGLISH (CEFR C2.1)',
        'category' => 'certificate',
        'image' => 'https://cdn.momoi.cc/uploads/2025-09-20_df4398171f/2025-09-20_f68c9096ce.jpg',
        'description' => 'Menyelesaikan program ADVANCED ENGLISH (CEFR C2.1) Beelingua',
        'link' => '' 
    ],
    [
        'title' => 'MARKET RESEARCH & BUSINESS COMMUNICATION (CEFR C2.2)',
        'category' => 'certificate',
        'image' => 'https://cdn.momoi.cc/uploads/2025-09-20_c03b943239/2025-09-20_e5d3d61fb9.jpg',
        'description' => 'Menyelesaikan program MARKET RESEARCH & BUSINESS COMMUNICATION (CEFR C2.2) Beelingua.',
        'link' => '' 
    ],
    [
        'title' => 'ENGLISH INDEPENDENT USER (CEFR B)',
        'category' => 'certificate',
        'image' => 'https://cdn.momoi.cc/uploads/2025-09-20_b226309dd9/2025-09-20_7d979c0c50.jpg',
        'description' => 'ENGLISH INDEPENDENT USER (CEFR B) Beelingua.',
        'link' => '' 
    ],
    [
        'title' => 'Student Volunteer Character Building Project',
        'category' => 'activity',
        'image' => 'https://cdn.momoi.cc/uploads/2025-09-19_82fe966d0a/2025-09-19_18fb82cf27.jpeg',
        'description' => 'As a volunteer educator at SDN Malaka Jaya 11, I supported Sustainable Development Goal No. 4 (Quality Education) by teaching anti-corruption awareness to elementary school students.',
        'link' => '' 
    ],
    [
        'title' => 'Membangun Kesadaran Lingkungan: Upaya Pelestarian Alam untuk Generasi Mendatang',
        'category' => 'activity',
        'image' => 'https://cdn.momoi.cc/uploads/2025-09-19_4bb2a83f09/2025-09-19_7daaefed06.png',
        'description' => 'This Character Building project was a valuable experience that enhanced my key skills: social awareness through community engagement, effective team collaboration in designing and executing a proposal, and adaptability when facing limited time and resources.',
        'link' => '' 
    ],
    [
        'title' => 'Inovasi dan Infrastruktur Kota Bekasi Dalam Sarana dan Prasarana Transportasi',
        'category' => 'activity',
        'image' => 'https://cdn.momoi.cc/uploads/2025-09-19_30ba597081/2025-09-19_b0c90c576e.jpg',
        'description' => 'This Character Building project was a meaningful experience that enhanced my key skills: social awareness through direct interaction with local communities, collaboration in preparing proposals, reports, and field practices with my team, and adaptability in managing tasks from observation to final presentation.',
        'link' => '' 
    ],
];

?>