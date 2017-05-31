<div class="container">
<table>

    <tr>

        <td class="tabletitle"><h2>Organisatie</h2></td>


    </tr>
</table>
<hr>
<table>
    {foreach from=$result item=oneItem}
        <tr>

            <td class="vak5">{$oneItem.namebusiness}</td>
            <td class="vak6">{$oneItem.website}</td>
            <td class="vak5">{$oneItem.email}</td>
            <td class="vak6">{$oneItem.location}</td>
            <td class="vak5">{$oneItem.firstname}</td>
            <td class="vak6">{$oneItem.secondname}</td>

            <td class="vak3"><a href="?action=admin&cms_action=edit_bedrijven&id={$oneItem.id}">edit</a> </td>
            <td class="vak4"><a href="?action=admin&cms_action=delete2&id={$oneItem.id}">delete</a> </td>
        </tr>
    {/foreach}
</table>
    <br>
    <br>
<a id="back" href="index.php?action=admin">Keer terug</a>
    <br>
    <br>
</div>