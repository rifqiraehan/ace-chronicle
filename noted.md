Ass..
Saya [Nama] dari kelas 1 Teknik Komputer A dengan NRP [NRP] ingin menjelaskan tentang sebagian detail project yang saya kembangkan bersama dengan tim saya. Project yang kami kembangkan ini bernama Web Blog Post, ACE Blog, sebuah website blog yang berisi berbagai infomasi yang dimuat sebagai postingan pada sebuah halaman web.

Selanjutnya perelasian tabel,
Pada project ini memiliki 3 tabel utama yaitu: posts, categories, dan users. Untuk perelasian antar tabel, diantaranya adalah tabel users yang memiliki relasi dengan tabel posts berupa one-to-many, sehingga seorang user bisa membuat banyak postingan dalam blognya. Selanjutnya, tabel categories yang memiliki relasi dengan tabel posts berupa one-to-many, sehingga satu kategori bisa dimiliki oleh banyak postingan blog. Kemudian, tabel posts yang memiliki relasi dengan tabel categories berupa one-to-one, sehingga satu postingan blog hanya memiliki satu kategori saja. Tabel posts juga memiliki relasi dengan tabel users berupa one-to-one, sehingga satu postingan hanya bisa dimiliki, dibuat, dan diubah oleh satu user saja.

Selanjutnya, saya akan langsung menjelaskan tentang...
bagaimana cara membuat postingan baru di ACE Blog. Pertama, pastikan telah melakukan login dengan menggunakan akun yang sudah terdaftar. Setelah itu, masuk ke halaman dashboard. Masuk ke menu 'My Posts' dan tekan button 'Buat Post Baru'.  Disini terdapat form untuk membuat postingan baru. Isi judul postingan. Kemudian slug, untuk slug sendiri, adalah bagian dari URL untuk menunjukkan halaman tertentu yang letaknya di belakang nama domain, disini slug telah di-generate otomatis sesuai dengan judul post. Selanjutnya, pilih kategori post dan banner post. Terakhir, isi konten postingan. Dan submit post dengan menekan button 'Buat Post'. Disini terdapat flash message berisi [pesan] yang berarti postingan berhasil ditambahkan, dan postingan yang baru ditambahkan ini berada di urutan teratas dari daftar post.

Selanjutnya, saya akan mendemonstrasikan tampilan seluruh postingan pada main menu. Main menu sendiri pada dasarnya berupa tampilan semua postingan dengan postingan terbaru berada di atas. Untuk postingan yang paling baru memiliki ukuran banner yang berbeda dengan lainnya, disini terdapat keterangan berupa nama author yang membuat postingan ini, kategori postingan, dan kapan postingan ini dibuat. Sedangkan, dibawahnya berisi nama author sang pembuat postingan dan kategori postingan.

Selanjutnya, saya akan mendemonstrasikan bagaimana otorisasi user bekerja. Pada project ini, terdapat 2 tipe user yang dibedakan dengan kolom is_admin pada tabel users yang memiliki tipe data boolean dengan nilai default false/0 yang berarti user tersebut adalah author, sedangkan jika true/1, maka user tersebut adalah administrator. Perbedaan ini membuat tampilan dashboard administrator dan author berbeda. Pada tampilan user berupa author hanya bisa melakukan operasi CRUD pada postingan yang mereka buat. Sedangkan, user berupa administrator bisa melakukan operasi CRUD pada postingan yang dibuat, kategori postingan, dan users. Sehingga, selain administrator dapat memanipulasi sebuah postingan, administrator juga bisa memanipulasi kategori postingan dan users.

Selanjutnya, saya akan mendemonstrasikan bagaimana melihat daftar kategori dan bagaimana menghapus kategori pada dashboard admin. Daftar kategori sendiri hanya bisa dilihat oleh user dengan tipe administrator, sehingga disini saya telah melakukan login dengan user admin. Setelah masuk ke dashboard admin, pilih menu 'Kategori Post', disana akan terlihat kategori aja saja yang telah dibuat. Untuk menghapus kategori pilih button berwarna merah dengan icon bergambar tong sampah, ketika diklik akan muncul notifikasi untuk melakukan konfirmasi atas kategori yang ingin dihapus. Setelah dikonfirmasi, kategori yang tadi dihapus menghilang diikuti dengan success message.

Selanjutnya, saya akan mendemonstrasikan bagaimana melakukan edit data pada user di dashboard admin. Seperti sebelumnya, daftar user juga hanya bisa diakses oleh user bertipe administrator. Sehingga disini saya telah melakukan login dengan user admin. Setelah masuk ke dashboard admin, pilih menu 'Daftar User'. Lalu pilih user yang ingin diedit, misalnya disini saya ingin mengubah nama dan username. Kemudian, klik button 'Update User' untuk melakukan submit. Disini terdapat success message berupa [] dan data yang tadi sudah terlihat telah berubah.

Untuk 'Reset Password' sendiri akan mengembalikan password user ke default yaitu 'secret'. Fitur ini digunakan untuk user yang lupa akan passwordnya dan meminta administrator untuk mereset password mereka.

Terakhir, saya akan mendemonstrasikan bagaimana report pada daftar postingan di dashboard user bekerja. Caranya buka dashboard dan pilih menu 'My Posts'. Kemudian, tekan button export untuk melakukan generate laporan pada postingan yang dimiliki. Laporan yang digenerate berupa postingan apa saja yang telah dibuat dengan informasi berupa judul dan kategori postingan.

Sekian penjelasan saya terkait dengan penjelasan mengenai job desc yang saya kerjakan di tim kami dalam membuat project web blog post, mohon maaf apabila ada kesalahan dan terimakasih telah mendengarkan hingga akhir. Wass...

Me:
1. Opening
2. Mendemonstrasikan perelasian tabel
3. Mendemonstrasikan bagaimana membuat postingan blog baru
4. Mendemonstrasikan tampilan seluruh postingan pada main menu
5. Mendemonstrasikan bagaimana otorisasi user bekerja
6. Mendemonstrasikan bagaimana melihat daftar kategori dan bagaimana menghapus kategori pada dashboard admin
7. Mendemonstrasikan bagaimana melakukan edit data pada user pada dashboard admin
8. Mendemonstrasikan bagaimana report pada daftar postingan di dashboard user bekerja

___________________________________________________________________

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