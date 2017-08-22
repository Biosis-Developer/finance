<?php /* Smarty version Smarty-3.1.13, created on 2015-12-04 16:51:37
         compiled from "ui\theme\softhash\manage-transaction.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29335661e0b9dcd411-70176596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07a42090bdadb844c23efa590f4b4b3960d1cbcf' => 
    array (
      0 => 'ui\\theme\\softhash\\manage-transaction.tpl',
      1 => 1435572552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29335661e0b9dcd411-70176596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    't' => 0,
    'd' => 0,
    'ds' => 0,
    '_c' => 0,
    'cats' => 0,
    'cat' => 0,
    'tags' => 0,
    'tag' => 0,
    'dtags' => 0,
    'p' => 0,
    'ps' => 0,
    'pms' => 0,
    'pm' => 0,
    '_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5661e0ba240470_64073569',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5661e0ba240470_64073569')) {function content_5661e0ba240470_64073569($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="row">
    <div class="col-md-4">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit Transaction'];?>
 - [#<?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['t']->value['type']);?>
-<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
]</h5>

            </div>
            <div class="ibox-content" id="ibox_form">
                <div class="alert alert-danger" id="emsg">
                    <span id="emsgbody"></span>
                </div>
                <form class="form-horizontal" method="post" id="tform" role="form">
                    <div class="form-group">
                        <label for="account" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</label>
                        <div class="col-sm-9">
                            <select id="account" name="account" class="form-control" disabled>
                                <?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
" <?php if ($_smarty_tpl->tpl_vars['ds']->value['account']==$_smarty_tpl->tpl_vars['t']->value['account']){?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</option>
                                <?php } ?>


                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['t']->value['date'];?>
" name="date" id="date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="description" name="description" value="<?php echo $_smarty_tpl->tpl_vars['t']->value['description'];?>
">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="amount" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control amount" id="amount"  data-a-sign="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 " data-d-group="2" value="<?php echo $_smarty_tpl->tpl_vars['t']->value['amount'];?>
"  name="amount" disabled>
                        </div>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['t']->value['type']!='Transfer'){?>
                        <div class="form-group">
                            <label for="cats" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Category'];?>
</label>
                            <div class="col-sm-9">
                                <select id="cats" name="cats" class="form-control">
                                    <option value="Uncategorized"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Uncategorized'];?>
</option>
                                    <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['cat']->value['name']==$_smarty_tpl->tpl_vars['t']->value['category']){?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</option>
                                    <?php } ?>


                                </select>
                            </div>
                        </div>
                        <?php }else{ ?>
                        <input type="hidden" name="cats" id="cats" value="">
                    <?php }?>



                    <div class="form-group">
                        <label for="tags" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tags'];?>
</label>
                        <div class="col-sm-9">
                            <select name="tags[]" id="tags"  class="form-control" multiple="multiple">
                                <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['tag']->value['text'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['tag']->value['text'],$_smarty_tpl->tpl_vars['dtags']->value)){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tag']->value['text'];?>
</option>
                                <?php } ?>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            &nbsp;
                        </div>
                        <div class="col-sm-9">
                            <h4><a href="#" id="a_toggle"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Advanced'];?>
</a> </h4>
                        </div>
                    </div>
                    <div id="a_hide">
<?php if ($_smarty_tpl->tpl_vars['t']->value['type']=='Income'){?>
    <div class="form-group">
        <label for="payer" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payer'];?>
</label>
        <div class="col-sm-9">
            <select id="payer" name="payer" class="s2 form-control">
                <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose Contact'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ps']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['p']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->key => $_smarty_tpl->tpl_vars['ps']->value){
$_smarty_tpl->tpl_vars['ps']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['ps']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['t']->value['payerid'])==($_smarty_tpl->tpl_vars['ps']->value['id'])){?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['ps']->value['account'];?>
</option>
                <?php } ?>


            </select>
            <input type="hidden" name="payee" id="payee" value="0">
        </div>
    </div>
    <?php }else{ ?>
    <div class="form-group">
        <label for="payee" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payee'];?>
</label>
        <div class="col-sm-9">
            <select id="payee" name="payee" class="s2 form-control">
                <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose Contact'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ps']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['p']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->key => $_smarty_tpl->tpl_vars['ps']->value){
$_smarty_tpl->tpl_vars['ps']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['ps']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['t']->value['payeeid'])==($_smarty_tpl->tpl_vars['ps']->value['id'])){?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['ps']->value['account'];?>
</option>
                <?php } ?>


            </select>
            <input type="hidden" name="payer" id="payer" value="0">
        </div>
    </div>
<?php }?>
                        <div class="form-group">
                            <label for="pmethod" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Method'];?>
</label>
                            <div class="col-sm-9">
                                <select id="pmethod" name="pmethod" class="form-control">

                                    <?php  $_smarty_tpl->tpl_vars['pm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pm']->key => $_smarty_tpl->tpl_vars['pm']->value){
$_smarty_tpl->tpl_vars['pm']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['pm']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['pm']->value['name']==$_smarty_tpl->tpl_vars['t']->value['method']){?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['pm']->value['name'];?>
</option>
                                    <?php } ?>


                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ref" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Ref'];?>
#</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="ref" name="ref" value="<?php echo $_smarty_tpl->tpl_vars['t']->value['ref'];?>
">
                                <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ref_example'];?>
</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <input type="hidden" name="trid" id="trid" value="<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
">
                            <input type="hidden" id="trtype" name="trtype" value="<?php echo $_smarty_tpl->tpl_vars['t']->value['type'];?>
">
                            <button type="submit" id="submit" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</h5>

            </div>
            <div class="ibox-content">

                <p><?php echo $_smarty_tpl->tpl_vars['_L']->value['tr_delete_warning'];?>
</p>
                <form role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/delete-post/">





                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
">

                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</button>
                </form>

            </div>
        </div>
    </div>

</div>

<input type="hidden" id="_lan_no_results_found" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No results found'];?>
">
<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>