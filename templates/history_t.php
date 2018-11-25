<ul class="nav nav-pills">
    <li><a href="/">Search</a></li>
    <li><a href="logout.php"><strong>Log Out</strong></a></li>
</ul>
<table class="table table-striped">
    <tr>
        <td>
            <form action="clear.php" method="post">
                <fieldset>
                    <input type="hidden" name="delete" value="Delete"/>
                    <button type="submit" class="btn btn-default">Clear History</button>
                </fieldset>
            </form>
        </td>
        <td><strong>Site</strong></td>
        <td><strong>Item</strong></td>
        <td><strong>Date/Time</strong></td>
    </tr>
    <?php foreach($rows as $row): ?>
    
        <tr>
            <td>
                <form action="clear.php" method="post">
                <fieldset>
                    <input type="hidden" name="country" value="<?=$row["country"]?>"/>
                    <input type="hidden" name="name" value="<?=$row["name"]?>"/>
                    <button type="submit" class="btn btn-default">Forget Me!</button>
                </fieldset>
            </form>
            </td>
            <td><a href="<?=$row["site"]?>"><?= $row["sitename"] ?></td>
            <td><a href="<?=$row["link"]?>"><?= $row["name"] ?></a></td>
            <td><?= $row["time"] ?></td>
        </tr>
        
    <?php endforeach ?>
</table>
