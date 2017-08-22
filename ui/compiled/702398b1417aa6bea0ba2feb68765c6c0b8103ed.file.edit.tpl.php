<?php /* Smarty version Smarty-3.1.13, created on 2015-12-04 17:29:34
         compiled from "C:\wamp\www\faturaos\sysfrm\plugins\notes\views\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:288195661e99e678ee2-88083839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '702398b1417aa6bea0ba2feb68765c6c0b8103ed' => 
    array (
      0 => 'C:\\wamp\\www\\faturaos\\sysfrm\\plugins\\notes\\views\\edit.tpl',
      1 => 1449257307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '288195661e99e678ee2-88083839',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_url' => 0,
    'note' => 0,
    '_L' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5661e99e6de7f7_33464296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5661e99e6de7f7_33464296')) {function content_5661e99e6de7f7_33464296($_smarty_tpl) {?><div class="row">

    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-body">

                <form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
notes/init/edit_post/" method="post">

                    <div class="form-group"><label class="col-lg-2 control-label">Titulo </label>

                        <div class="col-lg-10"><input type="text" name="title" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['note']->value['title'];?>
">

                        </div>
                    </div>


                    <div class="form-group"><label class="col-lg-2 control-label">Conteúdo </label>

                        <div class="col-lg-10">

                            <textarea class="form-control" name="contents" rows="15"><?php echo $_smarty_tpl->tpl_vars['note']->value['contents'];?>
</textarea>

                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">

                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['note']->value['id'];?>
">

                            <button class="btn btn-primary" type="submit" id="submit"><i
                                        class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>


</div><?php }} ?>