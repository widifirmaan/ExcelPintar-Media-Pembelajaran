<?php
/* Smarty version 3.1.31, created on 2022-03-22 23:28:59
  from "/home/seet7121/public_html/widifirmaan.github.io/ExcelPintar-Media-Pembelajaran/form/themes/default/messages.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6239f94bc44710_80885651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5959fcfd0b5a00d13763634b4eefe1a09541a121' => 
    array (
      0 => '/home/seet7121/public_html/widifirmaan.github.io/ExcelPintar-Media-Pembelajaran/form/themes/default/messages.tpl',
      1 => 1571530732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6239f94bc44710_80885651 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_assignInScope('class_name', '');
if ($_smarty_tpl->tpl_vars['g_success']->value) {?>
    <?php $_smarty_tpl->_assignInScope('class_name', "notify");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('class_name', "error");
}?>

<?php if ($_smarty_tpl->tpl_vars['g_message']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['g_success']->value) {?>
        <?php echo '<script'; ?>
>$(function() { $("#ft_message_inner").effect("highlight", {color: "#" + g.notify_colours[1] }, 1200); });<?php echo '</script'; ?>
>
    <?php } else { ?>
        <?php echo '<script'; ?>
>$(function() { $("#ft_message_inner").effect("highlight", {color: "#" + g.error_colours[1] }, 1200); });<?php echo '</script'; ?>
>
    <?php }?>

    <div id="ft_message">
        <div style="height: 8px;"> </div>
        <div class="<?php echo $_smarty_tpl->tpl_vars['class_name']->value;?>
" id="ft_message_inner">
            <div style="padding:8px">
                <span style="float: right; padding-left: 5px;"><a href="#" onclick="return ft.hide_message('ft_message')">X</a></span>
                <?php echo $_smarty_tpl->tpl_vars['g_message']->value;?>

            </div>
        </div>
    </div>

<?php } else { ?>

    <div id="ft_message" style="width: 100%; display:none">
        <div style="height: 8px;"> </div>
        <div class="<?php echo $_smarty_tpl->tpl_vars['class_name']->value;?>
" id="ft_message_inner"></div>
    </div>

<?php }?>

<div style="height: 10px;"> </div>
<?php }
}
