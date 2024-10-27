<?php
/* Smarty version 3.1.31, created on 2022-03-22 23:28:59
  from "/home/seet7121/public_html/widifirmaan.github.io/ExcelPintar-Media-Pembelajaran/form/themes/default/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6239f94bc47d85_30741008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ddc20b4c729a22579d738117463b3a11a1a4e07' => 
    array (
      0 => '/home/seet7121/public_html/widifirmaan.github.io/ExcelPintar-Media-Pembelajaran/form/themes/default/footer.tpl',
      1 => 1571530732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6239f94bc47d85_30741008 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_show_page_load_time')) require_once '/home/seet7121/public_html/widifirmaan.github.io/ExcelPintar-Media-Pembelajaran/form/global/smarty_plugins/function.show_page_load_time.php';
?>

      </div>
    </td>
  </tr>
  </table>

</div>


<?php if ($_smarty_tpl->tpl_vars['footer_text']->value != '' || $_smarty_tpl->tpl_vars['g_enable_benchmarking']->value) {?>
  <div class="footer">
    <?php echo $_smarty_tpl->tpl_vars['footer_text']->value;?>

    <?php echo smarty_function_show_page_load_time(array(),$_smarty_tpl);?>

  </div>
<?php }?>

</body>
</html>
<?php }
}
