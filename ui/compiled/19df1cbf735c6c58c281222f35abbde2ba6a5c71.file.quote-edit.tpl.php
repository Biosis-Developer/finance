<?php /* Smarty version Smarty-3.1.13, created on 2015-12-04 16:31:13
         compiled from "ui\theme\softhash\quote-edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130185661dbf12ea4b5-37709821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19df1cbf735c6c58c281222f35abbde2ba6a5c71' => 
    array (
      0 => 'ui\\theme\\softhash\\quote-edit.tpl',
      1 => 1437431810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130185661dbf12ea4b5-37709821',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    'd' => 0,
    'c' => 0,
    'cs' => 0,
    'i' => 0,
    'extra_fields' => 0,
    't' => 0,
    'ts' => 0,
    '_c' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5661dbf18689f1_85085886',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5661dbf18689f1_85085886')) {function content_5661dbf18689f1_85085886($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\wamp\\www\\faturaos\\sysfrm\\lib\\smarty\\libs\\plugins\\modifier.replace.php';
?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>
                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['quote_alias'];?>

                </h5>

            </div>
            <div class="ibox-content" id="ibox_form">
                <form id="invform" method="post">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="alert alert-danger" id="emsg">
                                <span id="emsgbody"></span>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="subject"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</label>
                                    <input type="text" class="form-control" name="subject" id="subject" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['subject'];?>
">
                                </div>
                                <hr>
                            </div>
                        </div>

                        <div class="row">


                            <div class="col-md-6">
                                <div class="form-horizontal">





                                    <div class="form-group">
                                        <label for="cid" class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</label>

                                        <div class="col-sm-8">
                                            <select id="cid" name="cid" class="form-control">
                                                <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Contact'];?>
...</option>
                                                <?php  $_smarty_tpl->tpl_vars['cs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['c']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cs']->key => $_smarty_tpl->tpl_vars['cs']->value){
$_smarty_tpl->tpl_vars['cs']->_loop = true;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['cs']->value['id'];?>
"
                                                            <?php if ($_smarty_tpl->tpl_vars['i']->value['account']==$_smarty_tpl->tpl_vars['cs']->value['account']){?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['cs']->value['account'];?>
 <?php if ($_smarty_tpl->tpl_vars['cs']->value['email']!=''){?>- <?php echo $_smarty_tpl->tpl_vars['cs']->value['email'];?>
<?php }?></option>
                                                <?php } ?>

                                            </select>
                                            <span class="help-block"><a href="#"
                                                                        id="contact_add">| <?php echo $_smarty_tpl->tpl_vars['_L']->value['Or Add New Customer'];?>
</a> </span>
                                        </div>
                                    </div>

                                    <?php echo $_smarty_tpl->tpl_vars['extra_fields']->value;?>


                                    <div class="form-group">
                                        <label for="inputPassword3"
                                               class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>

                                        <div class="col-sm-8">
                                            <textarea id="address" readonly class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="invoicenum"
                                               class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quote Prefix'];?>
</label>

                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="invoicenum" name="invoicenum" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['invoicenum'];?>
">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="cn"
                                               class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quote'];?>
 #</label>

                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="cn" name="cn" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['cn'];?>
">
                                            <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['quote_number_help'];?>
</span>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputEmail3"
                                               class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date Created'];?>
</label>

                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="idate" name="idate" datepicker
                                                   data-date-format="yyyy-mm-dd" data-auto-close="true"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['d']->value['datecreated'];?>
">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="edate"
                                               class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expiry Date'];?>
</label>

                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="edate" name="edate" datepicker
                                                   data-date-format="yyyy-mm-dd" data-auto-close="true"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['d']->value['validuntil'];?>
">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="stage"
                                               class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Stage'];?>
</label>

                                        <div class="col-sm-8">
                                            <select class="form-control" name="stage" id="stage">
                                                <option value="Draft" <?php if ($_smarty_tpl->tpl_vars['d']->value['stage']=='Draft'){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Draft'];?>
</option>
                                                <option value="Delivered" <?php if ($_smarty_tpl->tpl_vars['d']->value['stage']=='Delivered'){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delivered'];?>
</option>
                                                <option value="Accepted" <?php if ($_smarty_tpl->tpl_vars['d']->value['stage']=='Accepted'){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accepted'];?>
</option>
                                                <option value="Lost" <?php if ($_smarty_tpl->tpl_vars['d']->value['stage']=='Lost'){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Lost'];?>
</option>
                                                <option value="Dead" <?php if ($_smarty_tpl->tpl_vars['d']->value['stage']=='Dead'){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dead'];?>
</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tid" class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales TAX'];?>
</label>

                                        <div class="col-sm-8">
                                            <select id="tid" name="tid" class="form-control">
                                                <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                                <?php  $_smarty_tpl->tpl_vars['ts'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ts']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ts']->key => $_smarty_tpl->tpl_vars['ts']->value){
$_smarty_tpl->tpl_vars['ts']->_loop = true;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['ts']->value['id'];?>
"
                                                            <?php if ($_smarty_tpl->tpl_vars['ts']->value['name']==$_smarty_tpl->tpl_vars['i']->value['taxname']){?>selected="selected" <?php }?> ><?php echo $_smarty_tpl->tpl_vars['ts']->value['name'];?>

                                                        (<?php ob_start();?><?php echo number_format($_smarty_tpl->tpl_vars['ts']->value['rate'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>

                                                        %)
                                                    </option>
                                                <?php } ?>

                                            </select>
                                            <input type="hidden" id="stax" name="stax" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['taxrate'];?>
">
                                            <input type="hidden" id="discount_amount" name="discount_amount" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['discount_value'];?>
">
                                            <input type="hidden" id="discount_type" name="discount_type" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['discount_type'];?>
">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="add_discount"
                                               class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
</label>

                                        <div class="col-sm-8">

                                            <a href="#" id="add_discount" class="btn btn-info btn-xs"
                                               style="margin-top: 5px;"><i
                                                        class="fa fa-minus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Set Discount'];?>
</a>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <div class="form-group">
                                    <label for="proposal_text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Proposal Text'];?>
</label>
                                    <textarea class="form-control" id="proposal_text" name="proposal_text" rows="6"><?php echo $_smarty_tpl->tpl_vars['d']->value['proposal'];?>
</textarea>
                                    <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['quote_help_top'];?>
</span>
                                </div>
                                <hr>
                            </div>
                        </div>



                        <div class="table-responsive m-t">
                            <table class="table invoice-table" id="invoice_items">
                                <thead>
                                <tr>
                                    <th width="10%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Code'];?>
</th>
                                    <th width="55%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Name'];?>
</th>
                                    <th width="10%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];?>
</th>
                                    <th width="10%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</th>
                                    <th width="15%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['itemcode'];?>
</td>
                                        <td><input type="text" class="form-control item_name" name="desc[]"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
"></td>
                                        <td><input type="text" class="form-control qty"
                                                   value="<?php if (($_smarty_tpl->tpl_vars['_c']->value['dec_point'])==','){?><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['qty'],'.',',');?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
<?php }?>"
                                                   name="qty[]"></td>
                                        <td><input type="text" class="form-control item_price" name="amount[]"
                                                   value="<?php if (($_smarty_tpl->tpl_vars['_c']->value['dec_point'])==','){?><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['amount'],'.',',');?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['item']->value['amount'];?>
<?php }?>">
                                        </td>
                                        <td class="ltotal"><input type="text" class="form-control lvtotal" readonly=""
                                                                  value="<?php if (($_smarty_tpl->tpl_vars['_c']->value['dec_point'])==','){?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_modifier_replace($_tmp2,'.',',');?>
<?php }else{ ?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
<?php $_tmp3=ob_get_clean();?><?php echo $_tmp3;?>
<?php }?>">
                                        </td>
                                    </tr>
                                <?php } ?>

                                </tbody>
                            </table>

                        </div>
                        <!-- /table-responsive -->
                        <button type="button" class="btn btn-primary" id="blank-add"><i
                                    class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add blank Line'];?>
</button>
                        <button type="button" class="btn btn-primary" id="item-add"><i
                                    class="fa fa-search"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Product OR Service'];?>
</button>
                        <button type="button" class="btn btn-danger" id="item-remove"><i
                                    class="fa fa-minus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</button>
                        <table class="table invoice-total">
                            <tbody>
                            <tr>
                                <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sub Total'];?>
 :</strong></td>
                                <td id="sub_total" class="amount" data-a-sign="" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
"
                                    data-a-sep="" data-d-group="2">0.00
                                </td>
                            </tr>
                            <tr>
                                <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
 <span id="is_pt"></span> :</strong></td>
                                <td id="discount_amount_total" class="amount" data-a-sign=""
                                    data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
" data-a-sep="" data-d-group="2">0.00
                                </td>
                            </tr>
                            <tr>
                                <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TAX'];?>
 :</strong></td>
                                <td id="taxtotal" class="amount" data-a-sign="" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
"
                                    data-a-sep="" data-d-group="2">0.00
                                </td>
                            </tr>
                            <tr>
                                <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TOTAL'];?>
 :</strong></td>
                                <td id="total" class="amount" data-a-sign="" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
"
                                    data-a-sep="" data-d-group="2">0.00
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <hr>

                        <div class="form-group">
                            <label for="customer_notes"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer Notes'];?>
</label>
                            <textarea class="form-control" id="customer_notes" name="customer_notes" rows="6"><?php echo $_smarty_tpl->tpl_vars['d']->value['customernotes'];?>
</textarea>
                            <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['quote_help_footer'];?>
</span>
                        </div>

                        <div class="text-right">
                            <input type="hidden" id="qid" name="qid" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
                            <input type="hidden" id="_dec_point" name="_dec_point" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
">
                            <button class="btn btn-info" id="save_n_close"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save n Close'];?>
</button>
                            <button class="btn btn-primary" id="submit"><i class="fa fa-save"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>

                            </button>
                        </div>


                    </div>
                </form>


            </div>
        </div>
    </div>

</div>



<input type="hidden" id="_lan_set_discount" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Set Discount'];?>
">
<input type="hidden" id="_lan_discount" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
">
<input type="hidden" id="_lan_discount_type" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount Type'];?>
">
<input type="hidden" id="_lan_percentage" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Percentage'];?>
">
<input type="hidden" id="_lan_fixed_amount" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Fixed Amount'];?>
">
<input type="hidden" id="_lan_btn_save" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
">

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>