<div class="container">
<table>

    <tr>
        <td class="tabletitle"><h2>Username</h2></td>

    </tr>
</table>
<hr>
<table>
    {foreach from=$result item=oneItem}
        <tr>
            <td class="vak">{$oneItem.phpro_user_id}</td>
            <td class="vak2">{$oneItem.phpro_username}</td>
            <td class="vak3"><a href="?action=admin&cms_action=edit&id={$oneItem.phpro_user_id}">edit</a> </td>
            <td class="vak4"> <a href="?action=admin&cms_action=delete&id={$oneItem.phpro_user_id}">delete</a> </td>
        </tr>
    {/foreach}
</table>
    <br>
    <br>
<a id="back" href="index.php?action=admin">Keer terug</a>
    <br>
    <br>
</div>