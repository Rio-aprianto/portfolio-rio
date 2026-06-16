# Portfolio Landing Page — Laravel 11

Landing page portofolio jasa pembuatan **website** & **aplikasi mobile** (React Native, React JS, Next JS, Laravel) + **open jasa pembuatan sistem skripsi**.

## Persyaratan
- PHP >= 8.2
- Composer
- (Opsional) ekstensi PHP: `mbstring`, `openssl`, `pdo`, `tokenizer`, `xml`, `ctype`, `json`

## Cara Menjalankan
```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```
Buka http://localhost:8000

## Ubah Konten
- Edit `resources/views/welcome.blade.php` — semua konten (hero, layanan, portofolio, harga, kontak) ada di file ini.
- Ubah kontak WhatsApp & email di `.env` (`CONTACT_WHATSAPP`, `CONTACT_EMAIL`).
- Routing di `routes/web.php`.

## Stack UI
Tailwind CSS via CDN + sedikit animasi CSS. Tidak butuh Node.js / npm build.
