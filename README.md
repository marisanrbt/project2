Perpustakaan IPB
Requirements
Pls install this requirements before

XAMPP
Composer
Git
Text Editor (Notepad++ or Visual Studio Code or sublime, etc)
Bagaimana cara menggunakan repository ini?
Git clone project ini, Clone repository ada 2 cara :
Cara pertama. Download langsung saja raw dari repository nya berupa .zip Untitled
Cara kedua. Dianjurkan menggunakan yang ini. Buka Git Bash pada folder kalian untuk project ini. setelah itu masukkan perintah git clone https://github.com/marisanrbt/project2.git
like this

Note : Pastikan kalian telah memiliki akun Github juga

Nyalakan XAMPP nya
Xammp

Setelah itu buka project yang telah kalian clone mneggunakan text editor kalian. yang akan saya contohkan menggunakan visual studio code. Buka terminal
terminal

Masukkan perintah composer install . Pada step ini membutuhkan koneksi internet
Jika sudah berhasil masukkan perintah php artisan migrate. Fungsi ini untuk secara otomatis membuat database di XAMPP kalian
Happy Coding!
Cara lihat hasil kodingannya gimana ya?
Buka terminal
Ketikkan perintah php artisan serve
Buka broser kalian, buka localhost:8000
Saya mau ngoding, tapi nanti setelah selesai dan saya push saya akan menimpah kerjaan teman saya dong? bagaimana cara agar tidak mengacaukannya?
Ketika kalian clone dari master usahakan bikin branch baru.
Caranya setelah kalian clone buka terminal pada repository tersebut (bisa menggunakan visual studio code), lalu masukkan perintah git checkout -b [nama branch]
Untuk mengecek kalian sudah pindah ke branch kalian atau belum ketikkan git branch
Happy Coding!
Setelah saya ngoding di branch saya, saya mau menggabungkan code saya dengan yang dibranch MASTER. Bagaimana caranya?
Check nama branch kalian dengan cara ketikkan git branch di terminal
Git add, git commit, dan git push dulu kerjaan kalian ke branch baru kalian. Caranya buka terminal lalu:
Git add .
Git commit -m '[masukkan info apa yang kalian coding]
`Git push origin [nama branch kalian]'
Setelah itu pull branch master dengan kodingan terbaru
Git pull dulu branch masternya, check kalian sedang di branch mana terlebih dahulu git branch. Jika kalian berada di branch pribadi dan bukan di master, cara pindahnya ke branch master dengan cara mengetikkan git checkout master lalu kalian dapat check lagi dengan perintah git branch. Setelah itu git pull dengan cara mengetikkan git pull origin master
Buka github di browser, lalu pilih pull request. tekan tombol new pull request.
Jangan lupa tambahkan assigness ketika pull request agar teman kalain mengetahui ada perubahan apa yang akan masuk ke branch master
Ketika saya pull request ada conflict bagaimana ya?
Buka project kalian di terminal
Pindah ke branch master dengan cara mengetikkan git checkout master
Git pull pada branch master dengan mengetikkan git pull
kembali ke branch pribadi kalian dengna cara mengetikkan perintah `git checkout [nama branch kalian]'
Check sudah di branch pribadi atau blom dengan mengetikkan git branch
samakan kodingan di branch pribadi kita dengan branch master. caranya yaitu dengan mengetikkan git rebase master
Jika ada conflict perbaiki terlebih dahulu, pada bagian tersebut kodingannya yg bener yang mana
Jika sudah benar. buka terminal lalu :
Git add .
Git commit -m '[masukkan info apa yang kalian coding]
`Git push origin [nama branch kalian] -f'
Buka pull request lagi, lalu new request dan cek apakah masih ada conflict atau tdk, harusnya si tidak ada.
