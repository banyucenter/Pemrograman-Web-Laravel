
## Version Controll dengan Git

Agar file project dapat digunakan dengan baik dan terkontrol kita dapat memanfaatkan version controll dengan GitHub. Berikut cara menggunakan github:

- Buatlah sebuah repository baru pada akun Github.com
- Buka terminal / command prompt pada komputer anda
- Inisiasi local git dengan
<pre> git init </pre>
- Lakukan first commit
<pre> git add . </pre>
- Lakukan berikan nama commit
<pre> git commit -m "fist commit" </pre>
- Ambil url repository yang telah dibuat sebelumnya
contoh : https://github.com/banyucenter/Pemrograman-Web-Laravel.git
- Pada terminal jalankan perintah
<pre>git remote add origin remote repository URL</pre>
<pre>git remote -v</pre>
- Lakukan push projek ke Github
<pre>git push -u origin master</pre>