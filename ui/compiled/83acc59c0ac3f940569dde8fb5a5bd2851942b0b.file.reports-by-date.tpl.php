<?php /* Smarty version Smarty-3.1.13, created on 2015-12-04 16:51:18
         compiled from "ui\theme\softhash\reports-by-date.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47805661e0a60e2cd4-31179355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83acc59c0ac3f940569dde8fb5a5bd2851942b0b' => 
    array (
      0 => 'ui\\theme\\softhash\\reports-by-date.tpl',
      1 => 1438589846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47805661e0a60e2cd4-31179355',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_c' => 0,
    'cr' => 0,
    'dr' => 0,
    'mdate' => 0,
    'd' => 0,
    'ds' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5661e0a6422e12_72474090',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5661e0a6422e12_72474090')) {function content_5661e0a6422e12_72474090($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="row">


    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Reports by Date'];?>
 </h5>

            </div>
            <div class="ibox-content">

                <div id="dpx"></div>

                <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Income'];?>
: <?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['cr']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</h4>
                <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Expense'];?>
: <?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['dr']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</h4>

                <hr>
                <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['All Transactions at Date'];?>
: <?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['mdate']->value));?>
</h4>
                <hr>
                <table class="table table-striped table-bordered">

                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Category'];?>
</th>
                    <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payer'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payee'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Method'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Ref'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                    <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dr'];?>
</th>
                    <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cr'];?>
</th>
                    <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance'];?>
</th>

                    <?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
                        <tr>

                            <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</td>
                            
                            <td><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['type']);?>
</td>
                            <td><?php if ($_smarty_tpl->tpl_vars['ds']->value['category']=='Uncategorized'){?><?php echo $_smarty_tpl->tpl_vars['_L']->value['Uncategorized'];?>
 <?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['category'];?>
 <?php }?></td>
                            <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ds']->value['amount'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['payer'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['payee'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['method'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['ref'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['description'];?>
</td>
                            <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ds']->value['dr'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
                            <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ds']->value['cr'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
                            <td class="text-right"><span <?php if ($_smarty_tpl->tpl_vars['ds']->value['bal']<0){?>class="text-red"<?php }?>><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ds']->value['bal'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</span></td>

                        </tr>
                    <?php } ?>



                </table>


            </div>
        </div>
    </div>



    <!-- Widget-2 end-->
</div>


<input type="hidden" id="_lan_i18n" value="<?php echo Ib_I18n::get_code($_smarty_tpl->tpl_vars['_c']->value['language']);?>
">
<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>