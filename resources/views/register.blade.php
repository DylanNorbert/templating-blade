<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>
        <form action="/welcome" method="POST">
        @csrf
            <div>
                <label for="first_name">First Name :</label>
                <br><br>
                <input type="text" name="first">
            </div>
            <br>
            <div>
                <label for="last_name">Last Name :</label>
                <br><br>
                <input type="text" name="last">
            </div>
            <br>
            <div>
                <label>Gender :</label>
                <br><br>
                <input type="radio" name="gender" value="m"> Male   <br>
                <input type="radio" name="gender" value="f"> Female <br>
                <input type="radio" name="gender" value="o"> Other  <br>
            </div>
            <br>
            <div>
                <label>Nationality</label>
                <br><br>
                <select>
                    <option value="ind">Indonesian</option>
                    <option value="jpn">Japanese</option>
                    <option value="mxc">Mexican</option>
                    <option value="vtm">Vietnamese</option>
                </select>
            </div>
            <br>
            <div>
                <label>Language Spoken</label>
                <br><br>
                <input type="checkbox" name="l_s" value="0"> Bahasa Indonesia <br>
                <input type="checkbox" name="l_s" value="1"> English <br>
                <input type="checkbox" name="l_s" value="2"> Other <br>
            </div>
            <br>
            <div>
                <label>Bio :</label>
                <br><br>
                <textarea cols="50" rows="15"></textarea>
            </div>
            <br>
            <input type="submit" value="Sign Up">
        </form>
</body>
</html>