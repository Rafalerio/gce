<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(45deg, #3c3c3c, #2196f3);
    }

    .loginfield{
        position: absolute;
        background-color: rgba(0, 0, 0, 0.8);
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 15px;
        border-radius: 10px;
        color: white;
        width: 15%;
    }

    fieldset{
        border: 3px solid #2196f3;
    }

    fieldset legend{
        text-align: center;
        background-color: #2196f3;
        padding: 10px;
        border-radius: 10px;
        color: white;
        border: 2px solid #2196f3;
    }

    .inputbox{
        position: relative;
    }

    .inputUser{
        background: none;
        border: none;
        border-bottom: 1px solid white;
        outline: none;
        color: white;
        font-size: 15px;
        width: 100%;
        letter-spacing: 2px;
    }

    .labelInput{
        position: absolute;
        top: 0px;
        left: 0px;
        pointer-events: none;
        transition: .5s;
    }

    .inputUser:focus ~ .labelInput,
    .inputUser:valid ~ .labelInput{
        top: -20px;
        font-size: 12px;
        color: #4B0082;
    }

    a{
        color: white;
        outline: none;
        font-size: 10px;
    }

    #submit{
        background-image: linear-gradient(to left, #3c3c3c, #2196f3);
        width: 100%;
        padding: 13px;
        border: none;
        border-radius: 10px;
        color: white;
        font-size: 18px;
        cursor: pointer;
    }

    #submit:hover{
        background-image: linear-gradient(to left, black, red);
    }

</style>
</head>
<body>
 
    <div class="loginfield">
        <form action="loginconfig.php" method="POST">
            <fieldset>
                <legend>Login</legend>
                <br>
                <div class="inputbox">  
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
        <br><br>
                <div class="inputbox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
        <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div> 

</body>
</html>