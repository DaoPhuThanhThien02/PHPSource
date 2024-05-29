<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $newAction = "";
} else {
    $newAction = "displayProductByBand";
}
?>

<form method="post" action="<?php echo $newAction; ?>">
<div class="mb-3">
    <label for="" class="form-label">Select Band</label>
            <select
                class="form-select form-select-lg"
                name="selectBand"
                id=""
            >
                <option selected>--Choose a Band--</option>
                <option value="Pain Reliever" >Pain Reliever</option>
                <option value="Leesin" >Leesin</option>
                <option value="Fizz" >Fizz</option>
            </select>
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary" name="btSearch">
        Submit
    </button>
</div>
</form>


<?php
if (isset($data["Products"])){
    echo "<table>";
    echo "<tbody>";

    echo "<thead>";
    echo "<tr>";

    $fieldNames = $data["Products"] -> fetch_fields();
    foreach ($fieldNames as $field) {
        echo "<th class=\"text-center\">" . strtoupper($field -> name) . "</th>";
    }
    echo "</tr>";
    echo "</thead>";

    while ($row = mysqli_fetch_array($data["Products"])) {
        echo "<tr>";
        echo "<td class=\"text-center\">" . $row["id"] . "</td>";
        echo "<td class=\"text-center\">" . $row["pid"] . "</td>";
        echo "<td class=\"text-center\">" . $row["pname"] . "</td>";
        echo "<td class=\"text-center\">" . $row["company"] . "</td>";
        echo "<td class=\"text-center\">" . $row["year"] . "</td>";
        echo "<td class=\"text-center\">" . $row["band"] . "</td>";
        echo "<td class=\"text-center\">" . '<img src="' . $row["pimange"] . '" alt="Image">' . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}
?>
