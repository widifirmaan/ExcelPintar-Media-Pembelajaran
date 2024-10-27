<?php
/* Smarty version 3.1.31, created on 2022-03-22 23:29:38
  from "/home/seet7121/public_html/widifirmaan.github.io/ExcelPintar-Media-Pembelajaran/form/modules/form_builder/templates/admin/add_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6239f9724b13a4_44947153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be783faa52312936e0f034bf15bae2e91d67b9de' => 
    array (
      0 => '/home/seet7121/public_html/widifirmaan.github.io/ExcelPintar-Media-Pembelajaran/form/modules/form_builder/templates/admin/add_form.tpl',
      1 => 1571530740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6239f9724b13a4_44947153 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/seet7121/public_html/widifirmaan.github.io/ExcelPintar-Media-Pembelajaran/form/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_clients_dropdown')) require_once '/home/seet7121/public_html/widifirmaan.github.io/ExcelPintar-Media-Pembelajaran/form/global/smarty_plugins/function.clients_dropdown.php';
echo smarty_function_ft_include(array('file'=>'header.tpl'),$_smarty_tpl);?>


<table cellpadding="0" cellspacing="0">
    <tr>
        <td width="45"><a href="../"><img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/icon_forms.gif" border="0" width="34" height="34"/></a>
        </td>
        <td class="title">
            <a href="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/admin/forms/"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_forms'];?>
</a> <span class="joiner">&raquo;</span>
            <a href="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/admin/forms/add/"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_add_form'];?>
</a> <span class="joiner">&raquo;</span>
            <?php echo $_smarty_tpl->tpl_vars['L']->value['module_name'];?>

        </td>
    </tr>
</table>

<?php echo smarty_function_ft_include(array('file'=>"messages.tpl"),$_smarty_tpl);?>


<div class="margin_bottom_large">
    <?php echo $_smarty_tpl->tpl_vars['L']->value['text_add_form_intro'];?>

</div>

<form action="add_form.php" id="create_form_builder_form" method="post">

    <table cellspacing="1" cellpadding="0" class="list_table">
        <tr>
            <td width="15" align="center" class="red">*</td>
            <td class="pad_left_small" width="180"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_form_name'];?>
</td>
            <td>
                <input type="text" name="form_name" id="form_name" style="width: 99%"/>
            </td>
        </tr>
        <tr>
            <td width="15" align="center" class="red">*</td>
            <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_num_fields'];?>
</td>
            <td>
                <input type="text" name="num_fields" style="width: 50px" value="5"/>
                <div class="hint">
                    <?php echo $_smarty_tpl->tpl_vars['L']->value['text_add_form_num_fields_hint'];?>

                </div>
            </td>
        </tr>
        <tr>
            <td class="red" valign="top" align="center">*</td>
            <td class="pad_left_small" valign="top"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_access'];?>
</td>
            <td>

                <table cellspacing="1" cellpadding="0">
                    <tr>
                        <td>
                            <input type="radio" name="access_type" id="at1" value="admin" checked/>
                            <label for="at1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_admin_only'];?>
</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="access_type" id="at2" value="public"/>
                            <label for="at2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_public'];?>
 <span
                                        class="light_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_all_clients_have_access'];?>
</span></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="access_type" id="at3" value="private"/>
                            <label for="at3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_private'];?>
 <span
                                        class="light_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_only_specific_clients_have_access'];?>
</span></label>
                        </td>
                    </tr>
                </table>

                <div id="custom_clients" style="display:none" class="margin_top">
                    <table cellpadding="0" cellspacing="0" class="subpanel">
                        <tr>
                            <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_available_clients'];?>
</td>
                            <td></td>
                            <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_selected_clients'];?>
</td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo smarty_function_clients_dropdown(array('name_id'=>"available_client_ids[]",'multiple'=>"true",'multiple_action'=>"hide",'size'=>"4",'style'=>"width: 205px"),$_smarty_tpl);?>

                            </td>
                            <td align="center" valign="middle" width="100">
                                <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_add_uc_rightarrow'];?>
"
                                       onclick="ft.move_options(this.form['available_client_ids[]'], this.form['selected_client_ids[]']);"/><br/>
                                <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_remove_uc_leftarrow'];?>
"
                                       onclick="ft.move_options(this.form['selected_client_ids[]'], this.form['available_client_ids[]']);"/>
                            </td>
                            <td>
                                <?php echo smarty_function_clients_dropdown(array('name_id'=>"selected_client_ids[]",'multiple'=>"true",'multiple_action'=>"show",'size'=>"4",'style'=>"width: 205px"),$_smarty_tpl);?>

                            </td>
                        </tr>
                    </table>
                </div>

                <div class="hint">
                    <?php echo $_smarty_tpl->tpl_vars['L']->value['text_add_form_access_hint'];?>

                </div>

            </td>
        </tr>
    </table>

    <p>
        <input type="submit" name="add_form" class="add_form" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_add_form'];?>
"/>
    </p>
</form>

<?php echo smarty_function_ft_include(array('file'=>'footer.tpl'),$_smarty_tpl);?>

<?php }
}
