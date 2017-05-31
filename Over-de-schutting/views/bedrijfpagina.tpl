 <div class='container2'>
     <div class='container'>
{foreach from=$result item=oneItem}
    <div id="right">
    <img id="bimg" src="{$oneItem.image}" alt="lol">
    </div>
    <div id="left">
    <h1 id="btitle">{$oneItem.title}</h1>
    <p id="btext">{$oneItem.text}</p>
        <br>
        <td class="vak3"><a href="?action=edit_bedrijf&id={$oneItem.phpro_user_id}">edit</a> </td>
    </div>
    </div>



{/foreach}
</div>
