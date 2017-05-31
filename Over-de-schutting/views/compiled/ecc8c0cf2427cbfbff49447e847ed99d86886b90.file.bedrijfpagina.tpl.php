<?php /* Smarty version Smarty-3.1.18, created on 2017-05-30 20:58:22
         compiled from "views\bedrijfpagina.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14391592be9a797f831-89320161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecc8c0cf2427cbfbff49447e847ed99d86886b90' => 
    array (
      0 => 'views\\bedrijfpagina.tpl',
      1 => 1496177892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14391592be9a797f831-89320161',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_592be9a7bd6059_47961310',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592be9a7bd6059_47961310')) {function content_592be9a7bd6059_47961310($_smarty_tpl) {?> <div class='container2'>
     <div class='container'>
<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
    <div id="right">
    <img id="bimg" src="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" alt="lol">
    </div>
    <div id="left">
    <h1 id="btitle"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
    <p id="btext"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['text'];?>
</p>
        <br>
        <td class="vak3"><a href="?action=edit_bedrijf&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['phpro_user_id'];?>
">edit</a> </td>
    </div>
    </div>



<?php } ?>
</div>
<?php }} ?>
