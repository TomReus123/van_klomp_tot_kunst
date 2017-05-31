<?php /* Smarty version Smarty-3.1.18, created on 2017-05-22 10:17:25
         compiled from "views\edit_bedrijven.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184795919830bf40f60-49029270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd036be2e880cb0684f7c71ad545b370fc2fcdf4b' => 
    array (
      0 => 'views\\edit_bedrijven.tpl',
      1 => 1495448244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184795919830bf40f60-49029270',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5919830c03a6b6_06651469',
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5919830c03a6b6_06651469')) {function content_5919830c03a6b6_06651469($_smarty_tpl) {?><div class="container">
<form action="?action=update2" method="post">
    <table>
        <tr>
            <td><input type="text" placeholder="id" name="phpro_bedrijf_id" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['id'];?>
" readonly></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Username" name="phpro_bedrijf_name" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['namebusiness'];?>
" required></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Website" name="phpro_bedrijf_website" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['website'];?>
" required></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Website" name="phpro_bedrijf_number" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['number'];?>
" required></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Website" name="phpro_bedrijf_email" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['email'];?>
" required></td>
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
</div><?php }} ?>
