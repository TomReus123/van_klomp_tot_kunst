<div class="container">
    <form action="?action=update_bedrijf" method="post">
        <table>

            <tr>
                <td><input type="text" placeholder="id" name="id" value="{$result.0.phpro_user_id}" readonly></td>
            </tr>
            <tr>
                <td><input type="text" placeholder="id" name="title" value="{$result.0.title}" required></td>
            </tr>
            <tr>
                <td><input type="text" placeholder="Username" name="text" value="{$result.0.text}" required></td>
            </tr>
            <tr>
                <td><input type="text" placeholder="Password" name="image" value="{$result.0.image}" required></td>
            </tr>
            <tr>
                <td><input type="submit" id="submit" name="submit_update" value="Submit"></td>
            </tr>
        </table>
        <br>
        <a href="index.php?action=bedrijfpagina">Keer terug</a>
        <br>
        <br>


    </form>
</div>