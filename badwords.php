<?php 
$my_paragraph = $_GET["para"];
$my_badword = $_GET["badword"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords BEEP!</title>
</head>
<body>
    <section class="ms_w-100">
        <pre class="ms_w-80">
            Ecco qui il tuo paragrafo censurato! : 
            <p class="ms_text-wrap">
               <?php
                    if($my_badword != null && $my_paragraph != null) {
                        echo str_replace($my_badword, '***', $my_paragraph);
                    } else {
                        echo "Form incompleto!";
                    }
                ?> 
            </p>
        </pre>
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
}
.ms_w-80{
    width: 80%;
    margin: 0 auto;
    text-align: center;
}
.ms_text-wrap{
    text-wrap: pretty;
}
</style>