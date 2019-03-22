<div style='border: 5px solid black'>
    <form method="post" action="GobanV2.php">
        <input type="radio" name="game" value="game1"> Partie 1<br>
        <input type="radio" name="game" value="game2"> Partie 2<br>
        <input type="submit" value="Valider"/>
    </form>
</div>
<div style='border: 5px solid red'>
    <form method="post" action="GobanV2.php" enctype="multipart/form-data">
        <input type="file" name ="game"/><br>
        <input type="submit" value="Valider"/>
    </form>
</div>