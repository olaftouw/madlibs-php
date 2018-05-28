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
            <form action="story2.php" method="post" id="form1">
            <label id="row1">Wat zou je graag willen kunnen?</label> <input type="text" name="question1"><br>
            <label id="row2">Met welke persoon kun je goed opschieten?</label> <input type="text" name="question2"><br>
            <label id="row3">Wat is je favoriete getal?</label> <input type="text" name="question3"><br>
            <label id="row4">Wat heb je altijd bij je als je op vakantie gaat?</label> <input type="text" name="question4"><br>
            <label id="row5">Wat is je persoonlijke eigenschap?</label> <input type="text" name="question5"><br>
            <label id="row6">Wat is je slechtste persoonlijke eigenschap?</label> <input type="text" name="question6"><br>
            <label id="row7">Wat is het ergste dat je kan overkomen?</label> <input type="text" name="question7"><br>
        </form>
        <button type="submit" form="form1" value="Submit">Versturen</button>
    </main>


</body>
</html>