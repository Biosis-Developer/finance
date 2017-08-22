<?php /* Smarty version Smarty-3.1.13, created on 2017-08-12 12:22:07
         compiled from "C:\xampp\htdocs\finance\sysfrm\plugins\notes\views\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10543598f1d1fcdd945-06889026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36bd4c3d8325d6493e8f8669bb325aaa14c4c24c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\finance\\sysfrm\\plugins\\notes\\views\\list.tpl',
      1 => 1449253766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10543598f1d1fcdd945-06889026',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_url' => 0,
    'notes' => 0,
    'note' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_598f1d1fde54d2_59156680',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598f1d1fde54d2_59156680')) {function content_598f1d1fde54d2_59156680($_smarty_tpl) {?><div class="row">

        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
notes/init/add/" class="btn btn-primary mb-md"><i class="fa fa-plus"></i> Add Nova Nota </a>
                    <br>
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th width="70%">Titulo</th>
                            <th>Conteúdo</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php  $_smarty_tpl->tpl_vars['note'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['note']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['note']->key => $_smarty_tpl->tpl_vars['note']->value){
$_smarty_tpl->tpl_vars['note']->_loop = true;
?>

                            <tr>

                                <td><?php echo $_smarty_tpl->tpl_vars['note']->value['id'];?>
</td>

                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
notes/init/edit/<?php echo $_smarty_tpl->tpl_vars['note']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['note']->value['title'];?>
</a> </td>

                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
notes/init/edit/<?php echo $_smarty_tpl->tpl_vars['note']->value['id'];?>
/" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
notes/init/delete/<?php echo $_smarty_tpl->tpl_vars['note']->value['id'];?>
/" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Deletar </a>
                                </td>
                            </tr>

                            <?php }
if (!$_smarty_tpl->tpl_vars['note']->_loop) {
?>

                            <tr>

                                <td colspan="3">Nenhuma Nota Encontrada</td>

                            </tr>

                        <?php } ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>


</div><?php }} ?>