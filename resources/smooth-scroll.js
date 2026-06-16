// 1. Intersection Observer - Diperbaiki agar deteksi lebih luas & aman
const observerOptions = {
    threshold: 0.05, // Cukup 5% bagian section masuk layar, langsung picu animasi
    rootMargin: '0px 0px -5% 0px' // Menggunakan persen agar adaptif di layar HP maupun Laptop
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            
            // OPSIONAL: Jika ingin animasi terpicu berulang-ulang setiap masuk layar, 
            // hapus baris 'unobserve' di bawah ini.
            observer.unobserve(entry.target); 
        }
    });
}, observerOptions);

// Observe semua section
document.querySelectorAll('section').forEach(section => {
    observer.observe(section);
});

// 2. Click handler untuk smooth scroll (Ditambahkan paksa trigger kelas visible)
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        const target = document.querySelector(targetId);
        
        if (target) {
            // Trik Utama: Paksa tambahkan kelas 'visible' sebelum bergeser
            // agar animasinya tidak nunggu proses scroll selesai
            target.classList.add('visible');

            // Tambahan: jika di dalam section tersebut ada sub-elemen (.card atau .reveal)
            target.querySelectorAll('.reveal, .card').forEach(el => el.classList.add('visible'));

            // Mengatur kelas aktif pada navbar
            document.querySelectorAll('a[href^="#"]').forEach(link => link.classList.remove('active'));
            this.classList.add('active');
            
            // Smooth scroll ke target
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// 3. Highlight active link saat scroll (Optimasi menggunakan pageYOffset/scrollY alternatif)
window.addEventListener('scroll', () => {
    let current = '';
    const scrollPos = window.scrollY || window.pageYOffset;
    
    document.querySelectorAll('section').forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        
        // Jarak toleransi 120px dari atas agar perpindahan menu terasa natural
        if (scrollPos >= (sectionTop - 120)) {
            current = section.getAttribute('id');
        }
    });
    
    document.querySelectorAll('a[href^="#"]').forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === '#' + current) {
            link.classList.add('active');
        }
    });
});

// 4. Trigger langsung untuk elemen yang sudah ada di area layar saat load awal
window.addEventListener('load', () => {
    document.querySelectorAll('section').forEach(section => {
        const rect = section.getBoundingClientRect();
        if (rect.top < window.innerHeight) {
            section.classList.add('visible');
        }
    });
});