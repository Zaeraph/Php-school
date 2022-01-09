<HTML>
<head>
    <title>Beoordeling</title>
    <link rel="stylesheet" href="review.css">
</head>
<body>
<form method="POST" action="Review.php">
    Beschrijving: <input type="text" name="review">
    <br>
    <span class="dropdown">
        <label for="rating">Cijfer voor product:</label>
        <select id="rating" name="rating">
            <option value="1">1 ster</option>
            <option value="2">2 ster</option>
            <option value="3">3 ster</option>
            <option value="4">4 ster</option>
            <option value="5">5 ster</option>
         </select>
    </span>
    <input type="submit" value="verstuur" name="submit" />
</form>

<?php

include_once 'DatabaseConnect.php';
$connect = new DatabaseConnect();
$db = $connect->connect();
$errors = [];

if (isset($_POST["submit"])) {

        $beschtijving = htmlspecialchars($_POST['review']);
        $beoordeling = htmlspecialchars($_POST['rating']);
        echo "".$beschtijving." ";
        echo "".$beoordeling."";

        $sql = "INSERT INTO recensie (idrecensie, titel, beschtijving, beoordeling, idklant, idproduct) VALUES (:idrecensie, :titel, :beschtijving, :beoordeling, :idklant, :idproduct)";
        $stmt = $db->prepare($sql)->execute([$beschtijving, $beoordeling, 1]);
        $stmt = $db->prepare($sql)->execute([$_GET['idproduct']]);

        $beschtijving = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt =  $db->prepare("SELECT beoordeling FROM AVG(beoordeling) AS overall_rating, COUNT(*) AS total_rev");
        $stmt = $db->prepare("SELECT beschtijvng FROM  recensie ='" . idproduct . "'");
}
?>
<HTML>
<textarea name = "beschrijving" cols=40 rows=3 disabled>

</textarea>
