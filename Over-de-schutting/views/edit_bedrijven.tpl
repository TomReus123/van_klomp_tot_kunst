<div class="container">
<form action="?action=update2" method="post">
    <table>
        <tr>
            <td><input type="text" placeholder="id" name="phpro_bedrijf_id" value="{$result.0.id}" readonly></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Username" name="phpro_bedrijf_name" value="{$result.0.namebusiness}" required></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Website" name="phpro_bedrijf_website" value="{$result.0.website}" required></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Website" name="phpro_bedrijf_number" value="{$result.0.number}" required></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Website" name="phpro_bedrijf_email" value="{$result.0.email}" required></td>
        </tr>

        <tr>
            <td><input type="submit" id="submit" name="submit_update" value="Submit"></td>
        </tr>
    </table>
    <br>
    <a id="back" href="index.php?action=admin">Keer terug</a>
    <br>
    <br>

</form>
</div>