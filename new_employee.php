<html>
    <head>
        <title>new_employee</title>
    </head>
    <style>
    .box
    {font-size: 20px;
     background: burlywood;
     width: 400px;
     height:300px;
     margin-left: 300pt;
     padding-bottom: 100px;
     align-content: center;
    }
    .table1
    {
        
        position: relative;
        left: 40px;
        top: -150px;
        bottom: 30px;
    }
    .create
    {
        position: relative;
        top:-140px;
        left:50px;
    }
    </style>
    <body>
        <br>
        <h1 align="center">CREATE ACCOUNT</h1>
        <br>
    <div class="box">
            <form method="post" action="insert.php">
                <table class="table1" cellspacing="10">
                    <tr><td>NAME</td><td><input type="text" name="firstname"></td></tr>
                    <br>
                    <tr><td>AGE</td><td><input type="number" name="age"></td></tr>
                    <br>
                    <tr><td>DOB</td><td><input type="date" name="dob"></td></tr>
                    <br>
                    <tr><td>GENDER</td><td>MALE<input type="radio" name="gender">FEMALE<input type="radio" name="gender"></td></tr>
                    <br>
                    <tr><td>ADDRESS</td><td><input type="text" name="add"></td></tr>
                    <br>
                    <tr><td>PHONE</td><td><input type="tel" name="no"></td></tr>
                    <br>
                    <tr><td>EMAIL</td><td><input type="text" name="email"></td></tr>
                    <br>
                    <tr><td>CONTACT NO</td><td><input type="tel" name="contact"></td></tr>
                    <br>
                    <tr><td>PASSWORD</td><td><input type="password" name="pass"></td></tr>
                    <br>
            </table>
            <input class="create" type="submit" name="insert" value="CREATE">
           </form>
    </div>
    </body>
        </html> 