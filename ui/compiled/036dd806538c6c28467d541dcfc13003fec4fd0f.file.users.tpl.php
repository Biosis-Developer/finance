<?php /* Smarty version Smarty-3.1.13, created on 2015-12-04 10:15:42
         compiled from "ui\theme\softhash\users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13535661ae1ee966a2-62936481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '036dd806538c6c28467d541dcfc13003fec4fd0f' => 
    array (
      0 => 'ui\\theme\\softhash\\users.tpl',
      1 => 1435558682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13535661ae1ee966a2-62936481',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
    'd' => 0,
    'ds' => 0,
    '_user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5661ae1f0bf781_54218460',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5661ae1f0bf781_54218460')) {function content_5661ae1f0bf781_54218460($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="row">
    <div class="col-md-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage_Users'];?>
</h5>

            </div>
            <div class="ibox-content">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-add" class="btn btn-primary"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_New_User'];?>
</a>
                <br>
                <br>
                <table class="table table-striped table-bordered">
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full_Name'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                    <?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['username'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['fullname'];?>
</td>
                            <td><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['user_type']);?>
</td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-warning"><i class="fa fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                                <?php if (($_smarty_tpl->tpl_vars['_user']->value['username'])!=($_smarty_tpl->tpl_vars['ds']->value['username'])){?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-delete/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-danger cdelete"><i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                                <?php }?>
                            </td>
                        </tr>
                    <?php } ?>


                </table>

            </div>
        </div>



    </div>



</div>




<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>