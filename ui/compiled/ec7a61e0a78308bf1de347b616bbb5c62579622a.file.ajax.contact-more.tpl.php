<?php /* Smarty version Smarty-3.1.13, created on 2017-08-14 15:30:37
         compiled from "ui\theme\softhash\ajax.contact-more.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133575661e10aab34c6-01728669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec7a61e0a78308bf1de347b616bbb5c62579622a' => 
    array (
      0 => 'ui\\theme\\softhash\\ajax.contact-more.tpl',
      1 => 1502735009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133575661e10aab34c6-01728669',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5661e10ab82570_28770665',
  'variables' => 
  array (
    '_L' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5661e10ab82570_28770665')) {function content_5661e10ab82570_28770665($_smarty_tpl) {?><div id="croppic"></div>

<button type="button" id="cropContainerHeaderButton" class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Upload Picture'];?>
</button>
<button type="button" id="opt_gravatar" class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Use Gravatar'];?>
</button>
<button type="button" id="no_image" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['_L']->value['No Image'];?>
</button>
<div class="mt-lg"> </div>
<form class="form-horizontal">

    <div class="form-group"><label class="col-lg-2 control-label" for="picture"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Picture'];?>
</label>

        <div class="col-lg-10"><input type="text" id="picture" readonly name="picture" class="form-control picture"  value="<?php echo $_smarty_tpl->tpl_vars['d']->value['img'];?>
" autocomplete="off">

        </div>
    </div>

    <div class="form-group"><label class="col-lg-2 control-label" for="facebook"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Facebook Profile'];?>
</label>

        <div class="col-lg-10"><input type="text" id="facebook" name="facebook" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['facebook'];?>
" autocomplete="off">

        </div>
    </div>

    <div class="form-group"><label class="col-lg-2 control-label" for="google"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Google Plus Profile'];?>
</label>

        <div class="col-lg-10"><input type="text" id="google" name="google" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['google'];?>
" autocomplete="off">

        </div>
    </div>
    <div class="form-group"><label class="col-lg-2 control-label" for="linkedin"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Linkedin Profile'];?>
</label>

        <div class="col-lg-10"><input type="text" id="linkedin" name="linkedin" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['linkedin'];?>
" class="form-control" autocomplete="off">

        </div>
    </div>
        
    <div class="form-group"><label class="col-lg-2 control-label" for="instagram"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Instagram Profile'];?>
</label>

        <div class="col-lg-10"><input type="text" id="instagram" name="instagram" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['instagram'];?>
" class="form-control" autocomplete="off">

        </div>
    </div>


    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">

            <button class="btn btn-primary" type="submit" id="more_submit"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
        </div>
    </div>
</form><?php }} ?>