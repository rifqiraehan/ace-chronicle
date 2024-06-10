Saya [Nama] dari kelas 1 Teknik Komputer A dengan NRP [NRP] ingin menjelaskan tentang sebagian detail project yang saya kembangkan bersama dengan tim saya. Project yang kami kembangkan ini bernama Web Blog Post, ACE Blog, sebuah website blog yang berisi berbagai infomasi yang dimuat sebagai postingan pada sebuah halaman web.

Selanjutnya, saya akan langsung menjelaskan tentang...
bagaimana cara membuat postingan baru di ACE Blog. Pertama, pastikan telah melakukan login dengan menggunakan akun yang sudah terdaftar. Setelah itu, masuk ke halaman dashboard. Masuk ke menu 'My Posts' dan tekan button 'Buat Post Baru'.  Disini terdapat form untuk membuat postingan baru. Isi judul postingan. Kemudian slug, untuk slug sendiri, adalah bagian dari URL untuk menunjukkan halaman tertentu yang letaknya di belakang nama domain, disini slug telah di-generate otomatis sesuai dengan judul post. Selanjutnya, pilih kategori post dan banner post. Terakhir, isi konten postingan. Dan submit post dengan menekan button 'Buat Post'. Disini terdapat flash message berisi [pesan] yang berarti postingan berhasil ditambahkan, dan postingan yang baru ditambahkan ini berada di urutan teratas dari daftar post.

Pada project ini memiliki 3 tabel utama yaitu: posts, categories, dan users. Untuk perelasian antar tabel, diantaranya adalah tabel users yang memiliki relasi dengan tabel posts berupa one-to-many, sehingga seorang user bisa membuat banyak postingan dalam blognya. Selanjutnya, tabel categories yang memiliki relasi dengan tabel posts berupa one-to-many, sehingga satu kategori bisa dimiliki oleh banyak postingan blog. Kemudian, tabel posts yang memiliki relasi dengan tabel categories berupa one-to-one, sehingga satu postingan blog hanya memiliki satu kategori saja. Tabel posts juga memiliki relasi dengan tabel users berupa one-to-one, sehingga satu postingan hanya bisa dimiliki, dibuat, dan diubah oleh satu user saja.

Me:
1. Opening
2. Mendemonstrasikan bagaimana membuat postingan blog baru
3. Mendemonstrasikan perelasian tabel
4. Mendemonstrasikan tampilan seluruh postingan pada main menu
5. Mendemonstrasikan bagaimana otorisasi user bekerja
6. Mendemonstrasikan bagaimana melihat daftar kategori dan bagaimana menghapus kategori pada dashboard admin
7. Mendemonstrasikan bagaimana melakukan edit data pada user pada dashboard admin
8. Mendemonstrasikan bagaimana report pada daftar postingan di dashboard user bekerja

Lala:
1. Opening
2. Mendemonstrasikan bagaimana melakukan login dan logout
3. Mendemonstrasikan bagaimana melihat daftar postingan blog dan bagaimana menghapus postingan blog pada dashboard user
4. Mendemonstrasikan bagaimana melakukan edit data pada kategori postingan di dashboard admin
5. Mendemonstrasikan bagaimana menambahkan user baru di dashboard admin
6. Mendemonstrasikan bagaimana melakukan update profile pada informasi akun
8. Mendemonstrasikan bagaimana report pada daftar kategori di dashboard admin bekerja
7. Mendemonstrasikan bagaimana jika user lupa password saat melakukan login [Optional]

Alvan:
1. Opening
2. Mendemonstrasikan bagaimana melakukan edit data pada postingan blog
3. Mendemonstrasikan bagaimana melakukan registrasi akun baru
4. Mendemonstrasikan bagaimana menambahkan kategori baru di dashboard admin
5. Mendemonstrasikan bagaimana melihat daftar kategori postingan dan bagaimana menghapus kategori postingan blog pada dashboard admin
6. Mendemonstrasikan bagaimana searching postingan bekerja
7. Mendemonstrasikan bagaimana report pada daftar user di dashboard admin bekerja
8. Mendemonstrasikan Pagination page pada halaman semua postingan bekerja [Optional]