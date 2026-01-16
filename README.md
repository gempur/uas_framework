# frame_basic
Project Pemrograman Berbasis Framework

## Sistem Perpustakaan - Laravel CRUD Application

Aplikasi manajemen perpustakaan yang dibangun menggunakan Laravel 12, Blade Templates, dan Tailwind CSS.

### Fitur Utama

- **Manajemen Pengarang**: CRUD lengkap untuk data pengarang buku
- **Manajemen Rak**: CRUD lengkap untuk data rak penyimpanan
- **Manajemen Buku**: CRUD lengkap untuk data buku dengan relasi ke pengarang
- **Manajemen Isi Rak**: CRUD lengkap untuk penempatan buku di rak

### Model Database

1. **Pengarang** (Authors)
   - ID
   - Nama

2. **Rak** (Shelves)
   - ID
   - Nama Rak

3. **Buku** (Books)
   - ID
   - Kode Buku (unique)
   - Judul Buku
   - Pengarang ID (foreign key)
   - Tahun Terbit

4. **Isi Rak** (Shelf Contents)
   - ID
   - Rak ID (foreign key)
   - Buku ID (foreign key)

### Instalasi

1. Clone repository:
```bash
git clone https://github.com/gempur/frame_basic.git
cd frame_basic
```

2. Install dependencies:
```bash
composer install
npm install
```

3. Setup environment:
```bash
cp .env.example .env
php artisan key:generate
```

4. Setup database:
```bash
touch database/database.sqlite
php artisan migrate
```

5. Build assets:
```bash
npm run build
```

6. Jalankan development server:
```bash
php artisan serve
```

Aplikasi akan berjalan di `http://localhost:8000`

### Teknologi yang Digunakan

- **Framework**: Laravel 12
- **Frontend**: Blade Templates
- **CSS Framework**: Tailwind CSS
- **Database**: SQLite (development)
- **PHP**: 8.3+
- **Node.js**: 20+

### Struktur Folder

```
frame_basic/
├── app/
│   ├── Http/Controllers/    # Controllers untuk CRUD
│   └── Models/               # Eloquent models
├── database/
│   └── migrations/           # Database migrations
├── resources/
│   ├── css/                  # Tailwind CSS
│   └── views/                # Blade templates
│       ├── layouts/          # Layout utama
│       ├── pengarangs/       # Views Pengarang
│       ├── raks/             # Views Rak
│       ├── bukus/            # Views Buku
│       └── isi_raks/         # Views Isi Rak
└── routes/
    └── web.php               # Route definitions
```

### Screenshots

#### Home Page
![Home](https://github.com/user-attachments/assets/e2b38142-ab68-4bed-97b5-400996078126)

#### Daftar Pengarang
![Pengarang](https://github.com/user-attachments/assets/65dee575-c248-4fcd-96a2-3ed5b8a1fc3b)

#### Daftar Buku
![Buku](https://github.com/user-attachments/assets/51a797c9-a855-4a65-ac35-d6852d09cee5)

#### Daftar Isi Rak
![Isi Rak](https://github.com/user-attachments/assets/c367a206-0ae5-4ba2-8761-2082ad8aa2ef)

### License

Open-sourced software.
