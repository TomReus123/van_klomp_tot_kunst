<?php /* Smarty version Smarty-3.1.18, created on 2017-05-22 10:12:49
         compiled from "views\bedrijven.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27712588f13b64bdc84-28046483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d79e8a090ae6c6fb3157d9aef496c702df2962d' => 
    array (
      0 => 'views\\bedrijven.tpl',
      1 => 1495447965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27712588f13b64bdc84-28046483',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_588f13b657c1f2_05137303',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588f13b657c1f2_05137303')) {function content_588f13b657c1f2_05137303($_smarty_tpl) {?><div class="container">
<table>

    <tr>

        <td class="tabletitle"><h2>Organisatie</h2></td>


    </tr>
</table>
<hr>
<table>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
        <tr>

            <td class="vak5"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['namebusiness'];?>
</td>
            <td class="vak6"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['website'];?>
</td>
            <td class="vak5"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['email'];?>
</td>
            <td class="vak6"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['location'];?>
</td>
            <td class="vak5"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['firstname'];?>
</td>
            <td class="vak6"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['secondname'];?>
</td>

            <td class="vak3"><a href="?action=admin&cms_action=edit_bedrijven&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">edit</a> </td>
            <td class="vak4"><a href="?action=admin&cms_action=delete2&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">delete</a> </td>
        </tr>
    <?php } ?>
</table>
    <br>
    <br>
<a id="back" href="index.php?action=admin">Keer terug</a>
    <br>
    <br>
</div><?php }} ?>
