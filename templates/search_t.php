<ul class="nav nav-pills">
    <li><a href="/"><strong>Search</strong></a></li>
    <li><a href="history.php"><strong>History</strong></a></li>
</ul>
<table class="table table-striped">
    <tr>
        <td><strong>Site</strong></td>
        <td colespan="2"><strong>Link</strong></td>
    </tr>
    <tr>
	    <td><a href="http://amazon.fr">Amazon.fr</a></td>
	    <td><a href="http://amazon.fr/s/field-keywords=<?=$elem?>">Item</a></td>
        <td>
            <iframe name="frame" style="display:none"></iframe>
            <form action="history.php" method="post" target="frame">
                <fieldset>
                    <input type="hidden" name="country" value="fr"/>
                    <input type="hidden" name="link" value="<?=$elem?>"/>
                    <button type="submit" class="btn btn-default">Remember me!</button>
                </fieldset>
            </form>
        </td>
    </tr>    
    <tr>
	    <td><a href="http://amazon.it">Amazon.it</a></td>
	    <td><a href="http://amazon.it/s/field-keywords=<?=$elem?>">Item</a></td>
        <td>
            <iframe name="frame" style="display:none"></iframe>
            <form action="history.php" method="post" target="frame">
                <fieldset>
                    <input type="hidden" name="country" value="it"/>
                    <input type="hidden" name="link" value="<?=$elem?>"/>
                    <button type="submit" class="btn btn-default">Remember me!</button>
                </fieldset>
            </form>
        </td>
    </tr>
    <tr>
	    <td><a href="http://amazon.ca">Amazon.ca</a></td>
	    <td><a href="http://amazon.ca/s/field-keywords=<?=$elem?>">Item</a></td>
        <td>
            <iframe name="frame" style="display:none"></iframe>
            <form action="history.php" method="post" target="frame">
                <fieldset>
                    <input type="hidden" name="country" value="ca"/>
                    <input type="hidden" name="link" value="<?=$elem?>"/>
                    <button type="submit" class="btn btn-default">Remember me!</button>
                </fieldset>
            </form>
        </td>
    </tr>
    <tr>
	    <td><a href="http://amazon.de">Amazon.de</a></td>
	    <td><a href="http://amazon.de/s/field-keywords=<?=$elem?>">Item</a></td>
        <td>
            <iframe name="frame" style="display:none"></iframe>
            <form action="history.php" method="post" target="frame">
                <fieldset>
                    <input type="hidden" name="country" value="de"/>
                    <input type="hidden" name="link" value="<?=$elem?>"/>
                    <button type="submit" class="btn btn-default">Remember me!</button>
                </fieldset>
            </form>
        </td>
    </tr>
    <tr>
	    <td><a href="http://amazon.co.uk">Amazon.co.uk</a></td>
	    <td><a href="http://amazon.co.uk/s/field-keywords=<?=$elem?>">Item</a></td>
        <td>
            <iframe name="frame" style="display:none"></iframe>
            <form action="history.php" method="post" target="frame">
                <fieldset>
                    <input type="hidden" name="country" value="uk"/>
                    <input type="hidden" name="link" value="<?=$elem?>"/>
                    <button type="submit" class="btn btn-default">Remember me!</button>
                </fieldset>
            </form>
        </td>
    </tr>
    <tr>
	    <td><a href="http://amazon.cn">Amazon.cn</a></td>
	    <td><a href="http://amazon.cn/s/field-keywords=<?=$elem?>">Item</a></td>
        <td>
            <iframe name="frame" style="display:none"></iframe>
            <form action="history.php" method="post" target="frame">
                <fieldset>
                    <input type="hidden" name="country" value="cn"/>
                    <input type="hidden" name="link" value="<?=$elem?>"/>
                    <button type="submit" class="btn btn-default">Remember me!</button>
                </fieldset>
            </form>
        </td>
    </tr>
    <tr>
	    <td><a href="http://amazon.co.jp">Amazon.co.jp</a></td>
	    <td><a href="http://amazon.co.jp/s/field-keywords=<?=$elem?>">Item</a></td>
        <td>
            <iframe name="frame" style="display:none"></iframe>
            <form action="history.php" method="post" target="frame">
                <fieldset>
                    <input type="hidden" name="country" value="jp"/>
                    <input type="hidden" name="link" value="<?=$elem?>"/>
                    <button type="submit" class="btn btn-default">Remember me!</button>
                </fieldset>
            </form>
        </td>
    </tr>
    <tr>
	    <td><a href="http://amazon.com">Amazon.com</a></td>
	    <td><a href="http://amazon.com/s/field-keywords=<?=$elem?>">Item</a></td>
        <td>
            <iframe name="frame" style="display:none"></iframe>
            <form action="history.php" method="post" target="frame">
                <fieldset>
                    <input type="hidden" name="country" value="us"/>
                    <input type="hidden" name="link" value="<?=$elem?>"/>
                    <button type="submit" class="btn btn-default">Remember me!</button>
                </fieldset>
            </form>
        </td>
    </tr>
</table>
