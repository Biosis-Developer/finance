<?php /* Smarty version Smarty-3.1.13, created on 2015-12-04 17:29:08
         compiled from "C:\wamp\www\faturaos\sysfrm\plugins\notes\views\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37125661dacb8b4102-72808813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1090bab11a0335b0459d0f4a0f31ac79b77e2ea' => 
    array (
      0 => 'C:\\wamp\\www\\faturaos\\sysfrm\\plugins\\notes\\views\\add.tpl',
      1 => 1449257320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37125661dacb8b4102-72808813',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5661dacb929417_69662792',
  'variables' => 
  array (
    '_url' => 0,
    '_L' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5661dacb929417_69662792')) {function content_5661dacb929417_69662792($_smarty_tpl) {?><div class="row">

    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-body">

                <form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
notes/init/add_post/" method="post">

                    <div class="form-group"><label class="col-lg-2 control-label">Título </label>

                        <div class="col-lg-10"><input type="text" name="title" class="form-control">

                        </div>
                    </div>


                    <div class="form-group"><label class="col-lg-2 control-label">Conteúdo </label>

                        <div class="col-lg-10">

                            <textarea class="form-control" name="contents" rows="15"></textarea>

                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
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