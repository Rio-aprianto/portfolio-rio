<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rio Aprianto — Jasa Pembuatan Web & Aplikasi Mobile</title>
    <meta name="description" content="Rio Aprianto — Jasa pembuatan website, aplikasi mobile (React Native), web app (React JS, Next JS, Laravel), serta sistem skripsi." />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('index.css') }}">
    <style>
        :root{
            --ink:#0b0f17; --surface:#0f1522; --line:rgba(255,255,255,.08);
            --brand:#7c5cff; --brand-2:#22d3ee; --accent:#f472b6;
        }
        *{font-family:'Plus Jakarta Sans',sans-serif}
        body{background:var(--ink); color:#e5e7eb}
        .blob{position:absolute; filter:blur(80px); opacity:.5; border-radius:9999px; pointer-events:none}
        .card{background:linear-gradient(180deg,rgba(255,255,255,.04),rgba(255,255,255,.01)); border:1px solid var(--line); border-radius:20px}
        .btn{display:inline-flex; align-items:center; gap:.5rem; padding:.75rem 1.25rem; border-radius:9999px; font-weight:600; transition:.2s}
        .btn-primary{background:linear-gradient(135deg,var(--brand),var(--brand-2)); color:#0b0f17}
        .btn-primary:hover{transform:translateY(-2px); box-shadow:0 12px 32px rgba(124,92,255,.4)}
        .btn-ghost{border:1px solid var(--line); color:#e5e7eb}
        .btn-ghost:hover{background:rgba(255,255,255,.05)}
        .chip{display:inline-flex; align-items:center; gap:.4rem; padding:.35rem .75rem; border-radius:9999px; background:rgba(124,92,255,.12); border:1px solid rgba(124,92,255,.3); font-size:.8rem; color:#c4b5fd}
        .gradient-text{background:linear-gradient(135deg,#a78bfa,#22d3ee,#f472b6); -webkit-background-clip:text; background-clip:text; color:transparent}
        .reveal{opacity:0; transform:translateY(20px); transition:.8s}
        .reveal.in{opacity:1; transform:none}
        /* Mobile frame */
        .phone{position:relative; width:260px; margin:0 auto; padding:14px; background:#111827; border-radius:42px; box-shadow:0 30px 60px rgba(0,0,0,.5), inset 0 0 0 2px rgba(255,255,255,.08)}
        .phone::before{content:""; position:absolute; top:18px; left:50%; transform:translateX(-50%); width:90px; height:22px; background:#000; border-radius:14px; z-index:2}
        .phone img{width:100%; border-radius:30px; display:block; aspect-ratio:9/19; object-fit:cover}
        /* Browser frame */
        .browser{border-radius:14px; overflow:hidden; border:1px solid var(--line); background:#0b1220}
        .browser-bar{display:flex; align-items:center; gap:6px; padding:10px 14px; background:#0b1220; border-bottom:1px solid var(--line)}
        .browser-bar span{width:10px; height:10px; border-radius:50%}
        .browser img{width:100%; display:block}
        @keyframes float{0%,100%{transform:translateY(0)}50%{transform:translateY(-12px)}}
        .float{animation:float 6s ease-in-out infinite}
    </style>
</head>
<body class="overflow-x-hidden">

@php
    $wa = "6285800299849";
    $waLink = "https://wa.me/{$wa}?text=Halo%20Rio%2C%20saya%20tertarik%20dengan%20jasa%20Anda";
@endphp

<!-- NAV -->
<nav class="fixed top-0 inset-x-0 z-50 backdrop-blur-xl bg-[#0b0f17]/70 border-b border-white/5">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/logo.png') }}" 
                 alt="Logo" 
                 class="d-inline-block align-text-top"
                 style="height: 50px; width: auto;">
        </a>
        <div class="hidden md:flex items-center gap-8 text-sm text-gray-300">
            <a href="#services" class="hover:text-white scroll-link">Layanan</a>
            <a href="#stack" class="hover:text-white scroll-link">Tech Stack</a>
            <a href="#portfolio" class="hover:text-white scroll-link">Portofolio</a>
            <a href="#skripsi" class="hover:text-white scroll-link">Skripsi</a>
            <a href="#kontak" class="hover:text-white scroll-link">Kontak</a>
        </div>
        <a href="{{ $waLink }}" class="btn btn-primary text-sm">Hubungi Saya</a>
    </div>
</nav>

<!-- HERO -->
<section class="relative pt-32 pb-24 overflow-hidden">
    <div class="blob bg-[#7c5cff] w-[500px] h-[500px] -top-40 -left-40"></div>
    <div class="blob bg-[#22d3ee] w-[400px] h-[400px] top-20 -right-20"></div>
    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center relative">
        <div class="reveal">
            <span class="chip">✨ Available for new projects</span>
            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight mt-5">
                Punya Ide <span class="gradient-text">Website</span> atau <span class="gradient-text">Aplikasi Mobile?</span> Yuk, Kita Wujudkan Bersama!
            </h1>
            <p class="text-gray-400 mt-6 text-lg leading-relaxed">
                Bantu bangun website usaha, web app kustom, hingga sistem skripsi dari nol. Pengerjaan terstruktur, tampilan modern, dan siap didampingi sampai sistem berjalan lancar.
            </p>
            <div class="flex flex-wrap gap-3 mt-8">
                <a href="#portfolio" class="btn btn-primary">Lihat Portofolio →</a>
                <a href="{{ $waLink }}" class="btn btn-ghost">Konsultasi Gratis</a>
            </div>
        </div>
        <div class="reveal flex justify-center gap-6">
            <div class="phone float"><img src="{{ asset('images/mobile-2.png') }}" alt="Aplikasi FamHeal"></div>
            <div class="phone float mt-12" style="animation-delay:-3s"><img src="{{ asset('images/mobile-1.png') }}" alt="Aplikasi Posyandu"></div>
        </div>
    </div>
</section>

<!-- SERVICES -->
<section id="services" class="py-24 relative">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto reveal">
            <span class="chip">Layanan</span>
            <h2 class="text-4xl md:text-5xl font-bold mt-4">Apa yang bisa <span class="gradient-text">saya bantu?</span></h2>
            <p class="text-gray-400 mt-4">Solusi lengkap dari ide hingga produksi.</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-14">
            @foreach([
                ['🌐','Website Company Profile','Landing page modern dan responsif untuk bisnis Anda.'],
                ['📱','Aplikasi Mobile','Aplikasi Android & iOS dengan React Native, performa native.'],
                ['💻','Web App / Dashboard','Sistem informasi, admin panel, dan dashboard interaktif.'],
                ['🛒','E-Commerce','Toko online lengkap dengan payment gateway & ongkir.'],
                ['🔌','REST API & Integrasi','Backend Laravel, integrasi API pihak ketiga, scalable.'],
                ['🎓','Sistem Skripsi','Web/aplikasi untuk tugas akhir, lengkap dengan laporan.'],
            ] as $s)
            <div class="card p-7 reveal hover:border-[#7c5cff]/40 transition">
                <div class="text-4xl mb-4">{{ $s[0] }}</div>
                <h3 class="text-xl font-semibold mb-2">{{ $s[1] }}</h3>
                <p class="text-gray-400 text-sm">{{ $s[2] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- STACK -->
<section id="stack" class="py-24 bg-[#0f1522]/50 border-y border-white/5">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto reveal">
            <span class="chip">Tech Stack</span>
            <h2 class="text-4xl md:text-5xl font-bold mt-4">Teknologi yang <span class="gradient-text">saya kuasai</span></h2>
        </div>
    </div>

    <style>
        .track-marquee {
            display: flex;
            width: max-content;
            gap: 1.25rem; /* Menyamai gap-5 milik tailwind */
            animation: geserMarquee 80s linear infinite;
        }

        .track-marquee:hover {
            animation-play-state: paused;
        }

        @keyframes geserMarquee {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }
    </style>

    {{-- Marquee container --}}
    <div class="mt-14 overflow-hidden w-full relative flex gap-5">
        @php
        $techs = [
            [
                'name' => 'React Native',
                'color' => '#61DAFB',
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="-11.5 -10.232 23 20.463" width="44" height="44"><circle r="2.05" fill="#61dafb"/><g fill="none" stroke="#61dafb"><ellipse rx="11" ry="4.2"/><ellipse rx="11" ry="4.2" transform="rotate(60)"/><ellipse rx="11" ry="4.2" transform="rotate(120)"/></g></svg>',
            ],
            [
                'name' => 'React JS',
                'color' => '#61DAFB',
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="-11.5 -10.232 23 20.463" width="44" height="44"><circle r="2.05" fill="#61dafb"/><g fill="none" stroke="#61dafb"><ellipse rx="11" ry="4.2"/><ellipse rx="11" ry="4.2" transform="rotate(60)"/><ellipse rx="11" ry="4.2" transform="rotate(120)"/></g></svg>',
            ],
            [
                'name' => 'Next.js',
                'color' => '#ffffff',
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 180 180" width="44" height="44"><mask id="mask0_408_134" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="180" height="180"><circle cx="90" cy="90" r="90" fill="black"/></mask><g mask="url(#mask0_408_134)"><circle cx="90" cy="90" r="90" fill="black"/><path d="M149.508 157.52L69.142 54H54V125.97H66.0136V73.498L138.188 166.023C142.148 163.447 145.932 160.597 149.508 157.52Z" fill="url(#paint0_linear_408_134)"/><path d="M115 54H127V126H115V54Z" fill="url(#paint1_linear_408_134)"/></g><defs><linearGradient id="paint0_linear_408_134" x1="109" y1="116.5" x2="144.5" y2="160.5" gradientUnits="userSpaceOnUse"><stop stop-color="white"/><stop offset="1" stop-color="white" stop-opacity="0"/></linearGradient><linearGradient id="paint1_linear_408_134" x1="121" y1="54" x2="121" y2="126" gradientUnits="userSpaceOnUse"><stop stop-color="white"/><stop offset="1" stop-color="white" stop-opacity="0"/></linearGradient></defs></svg>',
            ],
            [
                'name' => 'JavaScript',
                'color' => '#F7DF1E',
                'svg' => '<svg viewBox="0 0 1052 1052"><path fill="#f0db4f" d="M0 0h1052v1052H0z"/><path d="M965.9 801.1c-7.7-48-39-88.3-131.7-125.9-32.2-14.8-68.1-25.399-78.8-49.8-3.8-14.2-4.3-22.2-1.9-30.8 6.9-27.9 40.2-36.6 66.6-28.6 17 5.7 33.1 18.801 42.8 39.7 45.4-29.399 45.3-29.2 77-49.399-11.6-18-17.8-26.301-25.4-34-27.3-30.5-64.5-46.2-124-45-10.3 1.3-20.699 2.699-31 4-29.699 7.5-58 23.1-74.6 44-49.8 56.5-35.6 155.399 25 196.1 59.7 44.8 147.4 55 158.6 96.9 10.9 51.3-37.699 67.899-86 62-35.6-7.4-55.399-25.5-76.8-58.4-39.399 22.8-39.399 22.8-79.899 46.1 9.6 21 19.699 30.5 35.8 48.7 76.2 77.3 266.899 73.5 301.1-43.5 1.399-4.001 10.6-30.801 3.199-72.101zm-394-317.6h-98.4c0 85-.399 169.4-.399 254.4 0 54.1 2.8 103.7-6 118.9-14.4 29.899-51.7 26.2-68.7 20.399-17.3-8.5-26.1-20.6-36.3-37.699-2.8-4.9-4.9-8.7-5.601-9-26.699 16.3-53.3 32.699-80 49 13.301 27.3 32.9 51 58 66.399 37.5 22.5 87.9 29.4 140.601 17.3 34.3-10 63.899-30.699 79.399-62.199 22.4-41.3 17.6-91.3 17.4-146.6.5-90.2 0-180.4 0-270.9z" fill="#323330"/></svg>',
            ],
            [
                'name' => 'Laravel',
                'color' => '#FF2D20',
                'svg' => '<svg preserveAspectRatio="xMidYMid" viewBox="0 0 256 264"><path d="m255.9 59.6.1 1.1v56.6c0 1.4-.8 2.8-2 3.5l-47.6 27.4v54.2c0 1.4-.7 2.8-2 3.5l-99.1 57-.7.4-.3.1c-.7.2-1.4.2-2.1 0l-.4-.1-.6-.3L2 206c-1.3-.8-2.1-2.2-2.1-3.6V32.7l.1-1.1.2-.4.3-.6.2-.4.4-.5.4-.3c.2 0 .3-.2.5-.3L51.6.6c1.3-.8 2.9-.8 4.1 0L105.3 29c.2 0 .3.2.4.3l.5.3c0 .2.2.4.3.5l.3.4.3.6.1.4.2 1v106l41.2-23.7V60.7c0-.4 0-.7.2-1l.1-.4.3-.7.3-.3.3-.5.5-.3.4-.4 49.6-28.5c1.2-.7 2.8-.7 4 0L254 57l.5.4.4.3.4.5.2.3c.2.2.2.5.3.7l.2.3Zm-8.2 55.3v-47l-17.3 10-24 13.7v47l41.3-23.7Zm-49.5 85v-47l-23.6 13.5-67.2 38.4v47.5l90.8-52.3ZM8.2 39.9V200l90.9 52.3v-47.5l-47.5-26.9-.4-.4c-.2 0-.3-.1-.4-.3l-.4-.4-.3-.4-.2-.5-.2-.5v-.6l-.2-.5V63.6L25.6 49.8l-17.3-10Zm45.5-31L12.4 32.8l41.3 23.7 41.2-23.7L53.7 8.9ZM75 157.3l24-13.8V39.8l-17.3 10-24 13.8v103.6l17.3-10ZM202.3 36.9 161 60.7l41.3 23.8 41.3-23.8-41.3-23.8Zm-4.1 54.7-24-13.8-17.3-10v47l24 13.9 17.3 10v-47Zm-95 106 60.6-34.5 30.2-17.3-41.2-23.8-47.5 27.4L62 174.3l41.2 23.3Z" fill="#FF2D20"/></svg>',
            ],
            [
                'name' => 'PHP',
                'color' => '#fff',
                'svg' => '<svg viewBox="0 -1 100 50"><path fill="#fff" d="M7.579 10.123h14.204c4.169.035 7.19 1.237 9.063 3.604 1.873 2.367 2.491 5.6 1.855 9.699-.247 1.873-.795 3.71-1.643 5.512a16.385 16.385 0 01-3.392 4.876c-1.767 1.837-3.657 3.003-5.671 3.498a26.11 26.11 0 01-6.254.742h-6.36l-2.014 10.07H0l7.579-38.001m6.201 6.042l-3.18 15.9c.212.035.424.053.636.053h.742c3.392.035 6.219-.3 8.48-1.007 2.261-.742 3.781-3.321 4.558-7.738.636-3.71 0-5.848-1.908-6.413-1.873-.565-4.222-.83-7.049-.795-.424.035-.83.053-1.219.053h-1.113l.053-.053M41.093 0h7.314L46.34 10.123h6.572c3.604.071 6.289.813 8.056 2.226 1.802 1.413 2.332 4.099 1.59 8.056l-3.551 17.649h-7.42L54.979 21.2c.353-1.767.247-3.021-.318-3.763s-1.784-1.113-3.657-1.113l-5.883-.053-4.346 21.783h-7.314L41.093 0M70.412 10.123h14.204c4.169.035 7.19 1.237 9.063 3.604 1.873 2.367 2.491 5.6 1.855 9.699-.247 1.873-.795 3.71-1.643 5.512a16.385 16.385 0 01-3.392 4.876c-1.767 1.837-3.657 3.003-5.671 3.498a26.11 26.11 0 01-6.254.742h-6.36L70.2 48.124h-7.367l7.579-38.001m6.201 6.042l-3.18 15.9c.212.035.424.053.636.053h.742c3.392.035 6.219-.3 8.48-1.007 2.261-.742 3.781-3.321 4.558-7.738.636-3.71 0-5.848-1.908-6.413-1.873-.565-4.222-.83-7.049-.795-.424.035-.83.053-1.219.053H76.56l.053-.053"/></svg>',
            ],
            [
                'name' => 'Tailwind CSS',
                'color' => '#38bdf8',
                'svg' => '<svg fill="none" viewBox="0 0 54 33"><g clip-path="url(#tailwindcss__a)"><path fill="#38bdf8" fill-rule="evenodd" d="M27 0c-7.2 0-11.7 3.6-13.5 10.8 2.7-3.6 5.85-4.95 9.45-4.05 2.054.513 3.522 2.004 5.147 3.653C30.744 13.09 33.808 16.2 40.5 16.2c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C36.756 3.11 33.692 0 27 0zM13.5 16.2C6.3 16.2 1.8 19.8 0 27c2.7-3.6 5.85-4.95 9.45-4.05 2.054.514 3.522 2.004 5.147 3.653C17.244 29.29 20.308 32.4 27 32.4c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C23.256 19.31 20.192 16.2 13.5 16.2z" clip-rule="evenodd"/></g><defs><clipPath id="tailwindcss__a"><path fill="#fff" d="M0 0h54v32.4H0z"/></clipPath></defs></svg>',
            ],
            [
                'name' => 'Bootstrap',
                'color' => '#7E13F8',
                'svg' => '<svg viewBox="0 0 256 204" preserveAspectRatio="xMidYMid"><path fill="#7E13F8" d="M53.172 0C38.565 0 27.756 12.785 28.24 26.65c.465 13.32-.139 30.573-4.482 44.642C19.402 85.402 12.034 94.34 0 95.488v12.956c12.034 1.148 19.402 10.086 23.758 24.197 4.343 14.069 4.947 31.32 4.482 44.641-.484 13.863 10.325 26.65 24.934 26.65h149.673c14.608 0 25.414-12.785 24.93-26.65-.464-13.32.139-30.572 4.482-44.641 4.359-14.11 11.707-23.05 23.741-24.197V95.488c-12.034-1.148-19.382-10.086-23.74-24.196-4.344-14.067-4.947-31.321-4.483-44.642C228.261 12.787 217.455 0 202.847 0H53.17h.002ZM173.56 125.533c0 19.092-14.24 30.67-37.872 30.67h-40.23a4.339 4.339 0 0 1-4.338-4.339V52.068a4.339 4.339 0 0 1 4.339-4.34h39.999c19.705 0 32.637 10.675 32.637 27.063 0 11.503-8.7 21.801-19.783 23.604v.601c15.089 1.655 25.248 12.104 25.248 26.537Zm-42.26-64.05h-22.937v32.4h19.32c14.934 0 23.17-6.014 23.17-16.764 0-10.073-7.082-15.636-19.552-15.636Zm-22.937 45.256v35.705h23.782c15.548 0 23.786-6.239 23.786-17.965 0-11.728-8.467-17.742-24.786-17.742h-22.782v.002Z"/></svg>',
            ],
            [
                'name' => 'GitHub',
                'color' => '#ffffff',
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="44" height="44"><path fill="white" d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>',
            ],
        ];
        @endphp
        {{-- Menggunakan class custom 'track-marquee' --}}
        <div class="track-marquee">
            @foreach($techs as $t)
            <div class="card flex flex-col items-center justify-center gap-4 px-10 py-8 w-64 border border-white/5 rounded-2xl text-center flex-shrink-0 transition-colors duration-200">
                <div class="w-20 h-20 rounded-2xl grid place-items-center" style="background: {{ $t['color'] }}20;">
                    {!! $t['svg'] !!}
                </div>
                <span class="text-base font-semibold text-white">{{ $t['name'] }}</span>
            </div>
            @endforeach
            
            {{-- Duplikasi langsung di dalam track yang sama agar tersambung --}}
            @foreach($techs as $t)
            <div class="card flex flex-col items-center justify-center gap-4 px-10 py-8 w-64 border border-white/5 rounded-2xl text-center flex-shrink-0 transition-colors duration-200" aria-hidden="true">
                <div class="w-20 h-20 rounded-2xl grid place-items-center" style="background: {{ $t['color'] }}20;">
                    {!! $t['svg'] !!}
                </div>
                <span class="text-base font-semibold text-white">{{ $t['name'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- PORTFOLIO -->
<section id="portfolio" class="py-24">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto reveal">
            <span class="chip">Portofolio</span>
            <h2 class="text-4xl md:text-5xl font-bold mt-4">Hasil <span class="gradient-text">karya saya</span></h2>
            <p class="text-gray-400 mt-4">Beberapa project yang telah saya kerjakan.</p>
        </div>

        <!-- Mobile projects -->
        <h3 class="text-2xl font-semibold mt-16 mb-8 reveal">📱 Aplikasi Mobile</h3>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="card p-8 reveal flex flex-col md:flex-row items-center gap-6">
                <div class="phone shrink-0" style="width:200px"><img src="{{ asset('images/mobile-1.png') }}" alt="App Posyandu"></div>
                <div>
                    <span class="chip">React Native</span>
                    <h4 class="text-xl font-bold mt-3">Aplikasi Posyandu Digital</h4>
                    <p class="text-gray-400 text-sm mt-2">Aplikasi pemantauan tumbuh kembang anak, jadwal posyandu, edukasi stunting, dan komunitas kader.</p>
                </div>
            </div>
            <div class="card p-8 reveal flex flex-col md:flex-row items-center gap-6">
                <div class="phone shrink-0" style="width:200px"><img src="{{ asset('images/mobile-2.png') }}" alt="App FamHeal"></div>
                <div>
                    <span class="chip">React Native</span>
                    <h4 class="text-xl font-bold mt-3">FamHeal — Kesehatan Keluarga</h4>
                    <p class="text-gray-400 text-sm mt-2">Aplikasi kesehatan keluarga dengan tampilan ringan, fitur monitoring & edukasi terpadu.</p>
                </div>
            </div>
        </div>

        <!-- Web projects -->
        <h3 class="text-2xl font-semibold mt-20 mb-8 reveal">💻 Web & Web App</h3>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach([
                ['React JS','Dashboard Analytics','Dashboard analitik interaktif dengan chart & data realtime.','web-react.jpg'],
                ['Next JS','E-Commerce Modern','Toko online dengan SSR, SEO friendly & performa tinggi.','web-next.jpg'],
                ['Laravel','Sistem Admin Panel','Sistem admin panel untuk aplikasi Famheal dengan fitur manajemen pengguna dan laporan.','web-laravel.jpg'],
            ] as $p)
            <div class="card overflow-hidden reveal hover:border-[#22d3ee]/40 transition">
                <div class="browser">
                    <div class="browser-bar">
                        <span style="background:#ff5f57"></span><span style="background:#febc2e"></span><span style="background:#28c840"></span>
                    </div>
                    <img src="{{ asset('images/'.$p[3]) }}" alt="{{ $p[1] }}" loading="lazy">
                </div>
                <div class="p-6">
                    <span class="chip">{{ $p[0] }}</span>
                    <h4 class="text-lg font-bold mt-3">{{ $p[1] }}</h4>
                    <p class="text-gray-400 text-sm mt-2">{{ $p[2] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- SKRIPSI -->
<section id="skripsi" class="py-24 relative overflow-hidden">
    <div class="blob bg-[#f472b6] w-[400px] h-[400px] -top-20 left-1/2"></div>
    <div class="max-w-5xl mx-auto px-6 relative">
        <div class="card p-10 md:p-14 reveal text-center">
            <span class="chip">🎓 Khusus Mahasiswa</span>
            <h2 class="text-4xl md:text-5xl font-bold mt-5">Open Jasa <span class="gradient-text">Pembuatan Sistem Skripsi</span></h2>
            <p class="text-gray-400 mt-5 max-w-2xl mx-auto">
                Bingung dengan tugas akhir? Saya bantu pembuatan sistem informasi, aplikasi mobile, atau web app untuk skripsi Anda — lengkap dengan dokumentasi, source code, dan bimbingan revisi.
            </p>
            <div class="grid sm:grid-cols-3 gap-4 mt-10 text-left">
                @foreach([['✅','Source Code Lengkap'],['✅','Bimbingan & Revisi'],['✅','Sesuaikan Kebutuhan']] as $f)
                <div class="flex items-center gap-3 p-4 rounded-xl bg-white/5">
                    <span>{{ $f[0] }}</span><span class="text-sm">{{ $f[1] }}</span>
                </div>
                @endforeach
            </div>
            <a href="{{ $waLink }}" class="btn btn-primary mt-10">Konsultasi Skripsi via WhatsApp</a>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section id="kontak" class="py-24 border-t border-white/5">
    <div class="max-w-4xl mx-auto px-6 text-center reveal">
        <span class="chip">Kontak</span>
        <h2 class="text-4xl md:text-5xl font-bold mt-4">Mulai project Anda <span class="gradient-text">hari ini</span></h2>
        <p class="text-gray-400 mt-4">Hubungi saya untuk konsultasi gratis dan estimasi harga.</p>
        <div class="flex flex-wrap justify-center gap-4 mt-8">
            <a href="{{ $waLink }}" class="btn btn-primary">💬 WhatsApp</a>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=rioaprianto009@email.com" target="_blank" class="btn btn-ghost">
                ✉️ Email
            </a>
        </div>
    </div>
</section>

<footer class="border-t border-white/5 py-8 text-center text-gray-500 text-sm">
    © {{ date('Y') }} Rio Aprianto. All rights reserved.
</footer>

<script>
    const io = new IntersectionObserver((es)=>es.forEach(e=>e.isIntersecting && e.target.classList.add('in')), {threshold:.1});
    document.querySelectorAll('.reveal').forEach(el=>io.observe(el));
</script>
<script src="{{ asset('smooth-scroll.js') }}"></script>
</body>
</html>
