<?php /* Smarty version Smarty-3.1.13, created on 2016-02-29 09:54:46
         compiled from "ui\theme\softhash\categories-edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:416256d43f96b739e5-21345734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5226e56d752b8a8cc6b96555dda5a920c496524' => 
    array (
      0 => 'ui\\theme\\softhash\\categories-edit.tpl',
      1 => 1433281570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '416256d43f96b739e5-21345734',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56d43f96dc17e2_00958076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d43f96dc17e2_00958076')) {function content_56d43f96dc17e2_00958076($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="row">
    <div class="widget-1 col-md-6 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit Categories'];?>
</h3>
            </div>
            <div class="panel-body">
                <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/categories-edit-post">
                    <div class="form-group">
                        <label for="name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>

                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
">
                    </div>



<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                </form>
            </div>
        </div>
    </div> <!-- Widget-1 end-->
    <div class="widget-1 col-md-6 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</h3>
            </div>
            <div class="panel-body">
                <p><?php echo $_smarty_tpl->tpl_vars['_L']->value['Deleting Categories will'];?>
 </p>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/categories-delete/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" class="btn btn-danger"><i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>

            </div>
        </div>
    </div>
    <!-- Widget-2 end-->
</div> <!-- Row end-->


<!-- Row end-->


<!-- Row end-->

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>