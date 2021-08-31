<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Buat Akun Baru</h2>
    <h3>Sign Up Form </h3>
    <form action="/daftar" method="POST">
        @csrf
        <label for="firstname">First Name</label><br>
        <input type="text" name="firstname"><br>
        <label for="lastname">Last Name</label><br>
        <input type="text" name="lastname"><br><br>
        
        <label for="male">Male</label>
        <input type="radio" name="gender" id="male" value="male"><br>
        <label for="female">Female</label>
        <input type="radio" name="gender" id="female" value="female"><br>
        <label for="other">Other</label>
        <input type="radio" name="gender" id="other" value="other"><br><br>

        <label>Nationality:</label>
        <select name="Nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="Indonesian">Singaporean</option>
            <option value="Indonesian">Malaysian</option>
            <option value="Indonesian">Australian</option>
        </select><br>

        <label>Language Spoken:</label><br><br>
        <input type="checkbox" name="Bahasa Indonesia" value="Bahasa Indonesia">
        <label for="bahasaIndonesia"> Bahasa Indonesia</label><br>
        <input type="checkbox" name="English" value="English">
        <label for="english"> English</label><br>
        <input type="checkbox" name="Other" value="Other">
        <label for="other"> Other</label><br><br>

        <label>Bio:</label><br><br>
        <textarea name="bio" cols="30" rows="10"></textarea><br><br>


        <input type="submit" value="Daftar">
</body>
</html>