<p align="center" >
  <b>POINT UTAMA</b>
</p>

---
> #### PHP WEB
> -  Web adalah kumpulan informasi yang dapat diakses melalui internet, bukan internet itu sendiri.
> -  Web server merupakan aplikasi yang menyimpan dan menyampaikan isi informasi web.
> -  Web hosting disediakan oleh penyedia data center untuk menyimpan website.
> -  Domain digunakan sebagai alias alamat IP untuk mempermudah mengakses website.
> -  Web browser mengubah bahasa mesin dari web server menjadi tampilan visual yang bisa dipahami oleh pengguna.
> -  Arsitektur aplikasi web menggunakan konsep client-server, di mana klien mengirim permintaan ke server dan server membalasnya.
> -  Konsep client-server memungkinkan akses web dari berbagai belahan dunia dengan menggunakan internet.
> -  PHP awalnya dirancang untuk aplikasi web, namun juga bisa digunakan untuk aplikasi berbasis terminal atau desktop.
---
> #### CARA KERJA PHP WEB
> -  Cara kerja PHP web melibatkan tiga pihak utama: web browser, web server, dan kode program PHP.
---
> #### PHP DEVELOPMENT SERVER
> -  PHP Development Server digunakan untuk mempermudah proses development aplikasi web PHP, bukan untuk dijalankan di web hosting.
> -  Untuk menjalankan PHP Development Server, cukup gunakan perintah ```php -S localhost:port```.
>
> Berikut ketika berhasil menginput kodenya :
>
> <img width="569" alt="Cuplikan layar 2024-03-25 083438" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/b4894180-61c0-4a7c-9aff-ab463d72b9ed">
---
> #### HOT RELOAD
> -  Fitur hot reload pada PHP memungkinkan perubahan kode program PHP tanpa perlu melakukan restart server.
---
> #### MENJALANKAN PHP WEB HELLO WORLD
> -  Membuat halaman web sederhana dengan PHP mirip dengan membuatnya menggunakan PHP dasar, namun outputnya dirender di browser.
> -  Pembuatan halaman "Hello World" menggunakan PHP sangat sederhana, cukup akses localhost dengan file PHP yang telah dibuat.
>
> Tampilan php web hello world :
>
> <img width="257" alt="Cuplikan layar 2024-03-25 083518" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/d1496f72-0700-4e26-af0e-6d6255bf039f">
>
> Tampilan http request dan response :
>
> <img width="403" alt="Cuplikan layar 2024-03-25 083551" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/bb9ff179-635a-45af-a9f6-850ab9750ec6">
---
> #### PHP INFO
> - PHP info adalah fitur untuk mengecek versi PHP dan ekstensi yang aktif, dapat diakses melalui browser dengan membuat file ```phpinfo.php``` dan memanggil fungsi ```phpinfo()```.
>
> Berikut kode php info :
>
> <img width="179" alt="Cuplikan layar 2024-03-25 083606" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/4527bde5-f6f7-4267-be1b-c06e63e43627">
>
> Berikut tampilan php info :
>
> <img width="601" alt="Cuplikan layar 2024-03-25 083647" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/aa14d57f-4672-44ac-9088-646704050629">
---
> #### INTEGRASI DENGAN HTML
> - Integrasi PHP dengan HTML memungkinkan pembuatan web dinamis, di mana kode PHP dapat dimasukkan di dalam kode HTML dengan menggunakan tag ```<?php ?>```.
> - Penggunaan PHP dalam HTML dapat disingkat dengan langsung memasukkan variabel atau data ke dalam HTML menggunakan sintaks ```<?= ?>```, menghindari penggunaan ```echo``` atau ```print```.
> - PHP dapat mengintegrasikan tag HTML, CSS, dan JavaScript dengan baik.
>
> Berikut kode integrasi dengan html :
>
> <img width="392" alt="Cuplikan layar 2024-03-25 083707" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/3b35a26e-7850-46c5-9b7f-744a8706259c">
---
> #### $_SERVER
> - Di PHP, terdapat global variable bernama $_SERVER
> - Variabel global server dalam PHP berisi informasi tentang request masuk, seperti header HTTP.
> - Global variable server mengikuti spesifikasi RFC 3875 dan berisi banyak informasi, seperti query-string dan alamat remote.
>
> Berikut kode menampilkan isi $_SERVER :
>
> <img width="458" alt="Cuplikan layar 2024-03-25 083731" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/92ff5830-c778-4d1d-bc6a-5ccf0454dc6f">
>
> Berikut tampilan isi $_SERVER :
>
> <img width="597" alt="Cuplikan layar 2024-03-25 083805" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/253ca155-bfb4-4ad1-9cab-daf7b81e9ab0">
---
> #### QUERY PARAMETER
> - Penggunaan query parameter dalam URL memungkinkan pengiriman informasi tambahan dari client ke server secara dinamis.
---
> #### $_get
> - Global variable $_GET dalam PHP berisi data dari query parameter yang dikirimkan oleh client.
>
> Berikut kode $_get :
>
> <img width="305" alt="Cuplikan layar 2024-03-25 083822" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/edb72617-ed3b-4fbd-9b93-388f08f0e1b1">
---
> #### MULTIPLE QUERY PARAMETER
> -  Query parameter dapat berjumlah lebih dari satu, dan dapat dipisahkan dengan tanda "&" dalam URL.
>
> Berikut kode multiple $_get :
>
> <img width="528" alt="Cuplikan layar 2024-03-25 083844" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/a7aebd6e-e38d-47b8-b217-39341439d12b">
>
> Berikut tampilan multiple $_get :
>
> <img width="369" alt="Cuplikan layar 2024-03-25 084156" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/fcc19127-bc5f-47af-bd90-b7a1a8ab12fc">
---
> #### QUERY PARAMETER ARRAY
> - Query parameter dapat dibuat dalam bentuk array dengan menambahkan tanda kurung kotak ```[]``` di belakang nama parameter.
>
> Berikut kode query parameter array :
>
> <img width="353" alt="Cuplikan layar 2024-03-25 084313" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/ef33b49e-92a0-4d56-83e3-fa7fb17ba159">
---
> #### CROSS SITE SCRIPTING
> - Cross-site scripting (XSS) adalah celah keamanan yang bisa dimanfaatkan oleh penyerang dengan mengirimkan skrip melalui query parameter.
> - Cross-site scripting (XSS) adalah masalah keamanan serius yang terjadi ketika kode JavaScript berbahaya disisipkan ke dalam halaman web, yang dapat menyebabkan pencurian sesi pengguna yang login.
>
> #### CARA MENCEGAH CROSS SITE SCRIPTING
> - Untuk mencegah Cross-site scripting, gunakan fungsi htmlspecialchars() untuk merubah tag HTML menjadi karakter-karakter yang aman.
>
> Berikut kode untuk mencegah xss :
>
> <img width="421" alt="Cuplikan layar 2024-03-25 084332" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/ced811bb-bc7f-4eeb-9da8-f4faefda5438">
---
> #### FORM POST
> - Ketika menggunakan formulir HTML, hindari metode GET default dan gunakan metode POST untuk mengirim data ke server untuk menghindari menyimpan data sensitif di URL.
>
> #### $_POST
> - $_POST adalah global variable yang berisikan data array yang dikirim dari client ke server dalam bentuk form post.
>
> Berikut kode form post :
>
> <img width="421" alt="Cuplikan layar 2024-03-25 084417" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/4a19d90b-15e3-4cb2-ac23-046bf79e3f0e">
>
> Berikut kode menerima form post :
>
> <img width="427" alt="Cuplikan layar 2024-03-25 090719" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/8187c5ec-6127-4165-b8b4-fc5fc6fbd6d9">
>
> #### HEADER
> - Header dalam HTTP request dan response menyimpan informasi tambahan di luar URL, yang bisa dikirimkan oleh klien atau dibuat oleh server. Semua header dikonversi menjadi huruf besar dan spasi diganti menjadi underscore.
>
> Berikut kode menangkap header :
>
> <img width="352" alt="Cuplikan layar 2024-03-25 084453" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/de7b901e-d3aa-4a60-8060-3be3ef0d6d01">
>
> #### MENAMBAH HEADER RESPONSE
> - Tambahan informasi dalam HTTP response dapat ditambahkan melalui header, seperti versi aplikasi atau informasi waktu server.
> - Header dalam PHP harus ditambahkan sebelum rendering konten HTML untuk mematuhi spesifikasi HTTP.
> - HTTP header tidak sensitif terhadap huruf besar-kecil, namun disarankan untuk konsisten dalam penggunaan.
>
> Beriktu kode menambah header response :
>
> <img width="283" alt="Cuplikan layar 2024-03-25 084515" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/fcad6812-b54e-4449-a5eb-8cf9c4af454d">
---
> ### REDIRECT
> 
> #### HTTP REDIRECT
> - Redirect dari satu halaman ke halaman lain bisa dilakukan dengan mengirimkan header ```Location``` dalam respons HTTP.
>
> Berikut kode redirect :
>
> <img width="326" alt="Cuplikan layar 2024-03-25 084531" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/ab7b8a31-1081-4f83-b28e-05988cbfee51">
---
> #### RESPONSE CODE
> =  HTTP response code menunjukkan status respons server, dan dapat diubah menggunakan fungsi http_response_code di PHP.
>
> Berikut kode response code :
>
> <img width="398" alt="Cuplikan layar 2024-03-25 084547" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/1101dbf9-60f2-4bda-a78b-fa0508694b39">
---
> #### SESSION
> - Session digunakan untuk menyimpan informasi klien di server, memungkinkan server menjadi stateful dalam interaksi dengan klien.
> - Ketika menggunakan session dalam PHP untuk proses login, informasi login dapat disimpan di sisi server dan dikirimkan kembali ke browser untuk disimpan.
>
> #### MEMASTIKAN FITUR SESSION DI PHP
> = Pastikan PHP yang diinstal mendukung fitur session; periksa dokumentasi PHP untuk memastikan session supportnya.
>
> #### $_SESSION
> = Gunakan global variable $_SESSION untuk menyimpan data session di PHP.
> - Gunakan ```session_start()``` untuk memulai session sebelum mengakses atau mengubah data session.
>
> Berikut kode menjalankan session (1) :
>
> <img width="509" alt="Cuplikan layar 2024-03-25 084653" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/a8375c81-451f-496b-9f9b-76eda960fbaf">
>
> Berikut kode menjalankan session (2) :
>
> <img width="351" alt="Cuplikan layar 2024-03-25 084801" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/c1b19926-d643-4c97-b85b-90e6274aba12">
>
> Berikut kode mengambil session :
>
> <img width="433" alt="Cuplikan layar 2024-03-25 084845" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/2738d534-2bc1-40c0-a214-d7f9ac661fb7">
>
> Berikut kode menghapus session :
>
> <img width="343" alt="Cuplikan layar 2024-03-25 084858" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/34ce1bf4-3aa6-4dfd-b3de-fbf6783f37f4">
---
> #### MASALAH DENGAN PHP SESSION
> - Penting untuk memahami masalah yang terkait dengan penggunaan session dalam PHP, seperti masalah dengan penyimpanan file session di server yang berbeda dan kinerja yang lambat saat menyimpan data besar dalam session.
---
> #### COOKIE
> - Cookie adalah data yang dikirimkan oleh server dan disimpan di browser untuk mengirim informasi ke server tanpa keterlibatan tampilan halaman.
> - Disarankan untuk mengatur atribut ```HttpOnly``` pada cookie menjadi ```true``` agar tidak dapat diakses oleh JavaScript, mengurangi risiko serangan cross-site scripting (XSS).
> - Hatilah dalam penggunaan cookie, hindari menyimpan terlalu banyak data di dalamnya karena semua data akan dikirim dalam setiap permintaan HTTP, yang dapat memperlambat kinerja.
>
> Berikut kode membuat cookie :
>
> <img width="337" alt="Cuplikan layar 2024-03-25 084926" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/f256e01e-fb0d-43f8-86b8-08f77810826d">
>
> Berikut kode menampilkan cookie :
>
> <img width="381" alt="Cuplikan layar 2024-03-25 084938" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/90c1438e-1fc1-4659-a637-8e8aabee0381">
>
> #### SESSION DAN COOKIE
> - Session ID dalam PHP disimpan di dalam Cookie dan digunakan sebagai identifier untuk file session di server.
> - PHP session ID disimpan di Cookie dan digunakan untuk mengakses file session di server, menjadikannya erat terkait dengan Cookies.
---
> ### UPLOAD FILE
> - PHP memungkinkan upload file dari client ke server dengan mudah menggunakan global variable ```$_FILES```.
> - File yang diupload secara otomatis disimpan di folder temporary di server dan dihapus setelah request selesai untuk menghindari penumpukan.
>
> #### $_FILES
>
> Berikut kode untuk menggunakan variable $_files :
>
> <img width="557" alt="Cuplikan layar 2024-03-25 085016" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/4abd0533-26bb-46dd-a288-911ceb6806f2"> 
>
> Berikut kode form upload :
>
> <img width="533" alt="Cuplikan layar 2024-03-25 085033" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/63c8bbab-5613-49a8-988d-1f10ddb12338">
>
> Berikut kode menerima file upload :
>
> <img width="397" alt="Cuplikan layar 2024-03-25 085043" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/4ed5ef5d-2092-4534-a4a0-372f43554960">
>
> #### MEMINDAHKAN FILE UPLOAD
> -  PHP menyediakan fungsi ```move_uploaded_file()``` untuk memindahkan file yang di-upload ke lokasi tujuan setelah di-upload.
> -  Dalam PHP, kita bisa memindahkan file dari satu lokasi ke lokasi lain menggunakan fungsi ```move_uploaded_file()```.
>
> Berikut kode memindahkan file upload :
>
> <img width="521" alt="Cuplikan layar 2024-03-25 085057" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/b9fa79ce-d643-449d-88d4-91225f653c59">
--- 
> #### DOWNLOAD FILE
> - Saat membuat web, kadang kadang kita butuh mengembalikan content berupa file yang butuh didownload oleh client
> - Sebenarnya, kita bisa langsung megakses file tersebut melalui URL, namun kita kita mau, kita juga bisa menggunakan PHP untuk membuat content dalam bentuk file dan memaksa client untuk mendownloadnya.
> - Header HTTP ```content-disposition``` dapat digunakan untuk memaksa browser untuk mengunduh file daripada menampilkannya.
> - Untuk memaksa unduhan file, gunakan header ```content-disposition: attachment``` dan tentukan nama file dengan benar.
>
> Berikut kode download file di php :
>
> <img width="462" alt="Cuplikan layar 2024-03-25 085126" src="https://github.com/weyndraig14/belajar-php-web/assets/162102805/b676bb2c-d93e-4cb1-aebc-0ff0bafff70c"> 

---

<p align="center" >
  <b>KESIMPULAN</b>
</p>

---

> - Video ini fokus pada pengembangan fitur PHP pada website.



























