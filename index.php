<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Badwords 1#</title>
</head>
<body>
    <section class="ms_w-100">
        <form action="badwords.php" method="GET" class="ms_w-80">
        <h1>Form try :</h1>
        <p style="margin-top: 20px;">
            <textarea name="para" placeholder="Scrivi qualcosa qui.." cols="60" rows="10"></textarea>
        </p>
        <p style="margin-top: 20px;">
            <label for="name">
                Parola da <strong>bannare</strong> : <input type="text" name="badword" />
            </label>
        </p>
        <p style="margin-top: 20px;">
            <button type="submit">Invia</button>
        </p>
    </form> 
    </section>    
</body>
</html>

<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.ms_w-100{
    width: 100%;
    padding-top: 20px;
}
.ms_w-80{
    padding-top: 20px;
    width: 80%;
    margin: 0 auto;
    text-align: center;
}
</style>