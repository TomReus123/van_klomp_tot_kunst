<?php /* Smarty version Smarty-3.1.18, created on 2017-05-29 10:23:01
         compiled from "views\edit_bedrijf.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6779592bf2c7adb7e7-64462622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e9878a343025f6ae000c42e15755a650a138dd3' => 
    array (
      0 => 'views\\edit_bedrijf.tpl',
      1 => 1496053379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6779592bf2c7adb7e7-64462622',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_592bf2c7b40687_81804559',
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592bf2c7b40687_81804559')) {function content_592bf2c7b40687_81804559($_smarty_tpl) {?><div class="container">
    <form action="?action=update_bedrijf" method="post">
        <table>

            <tr>
                <td><input type="text" placeholder="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['phpro_user_id'];?>
" readonly></td>
            </tr>
            <tr>
                <td><input type="text" placeholder="id" name="title" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['title'];?>
" required></td>
            </tr>
            <tr>
                <td><input type="text" placeholder="Username" name="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['text'];?>
" required></td>
            </tr>
            <tr>
                <td><input type="text" placeholder="Password" name="image" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['image'];?>
" required></td>
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
</div><?php }} ?>
