<?php /* Smarty version Smarty-3.1.13, created on 2015-12-04 18:39:50
         compiled from "ui\theme\softhash\dbstatus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:268325661fa163447b4-85451422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3ba491fd6c3fda4cd985da94be704cd97a661f9' => 
    array (
      0 => 'ui\\theme\\softhash\\dbstatus.tpl',
      1 => 1433329868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268325661fa163447b4-85451422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    'dbsize' => 0,
    '_url' => 0,
    'tables' => 0,
    'tbl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5661fa1654c0b7_55763598',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5661fa1654c0b7_55763598')) {function content_5661fa1654c0b7_55763598($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Database Size'];?>
: <?php echo $_smarty_tpl->tpl_vars['dbsize']->value;?>
  MB </h5>
        <div class="ibox-tools">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/dbbackup/" class="btn btn-primary btn-xs"><i class="fa fa-download"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Download Database Backup'];?>
</a>
        </div>
    </div>
    <div class="ibox-content">

        <table class="table table-bordered table-hover sys_table">
            <thead>
            <tr>
                <th width="50%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Table Name'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Rows'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Size'];?>
</th>

            </tr>
            </thead>
            <tbody>

            <?php  $_smarty_tpl->tpl_vars['tbl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tbl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tables']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tbl']->key => $_smarty_tpl->tpl_vars['tbl']->value){
$_smarty_tpl->tpl_vars['tbl']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['tbl']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['tbl']->value['rows'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['tbl']->value['size'];?>
 Kb</td>

                </tr>
            <?php } ?>

            </tbody>
        </table>

    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>