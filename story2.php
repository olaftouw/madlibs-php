<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>madlibs</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div>
        <img src="./madlibs.png" alt="madlibs">
    </div>
    <header>
        <ul><li><a href="index.php">Er heerst paniek...<a href=""></a></li><li><a href="index2.php">Onkunde</a></li></ul>
    </header>
    <main>
        <h2>Er heerst paniek...</h2>
        <p>Er zijn veel mensen die niet kunnen <?php echo $_POST['question1']; ?> . Neem nou <?php echo $_POST['question2']; ?>. Zelfs met de hulp van een <?php echo $_POST['question4']; ?> of zelfs tien kan <?php echo $_POST['question2']; ?> niet <?php echo $_POST['question1']; ?>. Dat heet niet te maken met een gebrek aan <?php echo $_POST['question5']; ?>, maar met een te veel aan <?php echo $_POST['question6']; ?>. Te veel <?php echo $_POST['question6']; ?> leidt tot <?php echo $_POST['question7']; ?> en dat is niet goed als je wilt <?php echo $_POST['question1']; ?>. Helaas voor <?php echo $_POST['question2']; ?></p>
    </main>

    <footer>De website is gemaakt door <?php echo $_POST['question2']; ?>.</footer>


</body>
</html>