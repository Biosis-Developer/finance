<?php /* Smarty version Smarty-3.1.13, created on 2015-12-04 16:52:24
         compiled from "ui\theme\softhash\ajax.contact-summary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116725661e0e8f1fcc3-54484319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a96413bb898b1ec7cd5b79fa338ba82479327b8' => 
    array (
      0 => 'ui\\theme\\softhash\\ajax.contact-summary.tpl',
      1 => 1433668152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116725661e0e8f1fcc3-54484319',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    'd' => 0,
    'cf' => 0,
    'c' => 0,
    '_c' => 0,
    'ti' => 0,
    'te' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5661e0e939aa28_82213506',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5661e0e939aa28_82213506')) {function content_5661e0e939aa28_82213506($_smarty_tpl) {?>
<p>

    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full Name'];?>
: </strong> <?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>
 <br>
   <?php if (($_smarty_tpl->tpl_vars['d']->value['company'])!=''){?>
       <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company Name'];?>
: </strong> <?php echo $_smarty_tpl->tpl_vars['d']->value['company'];?>
 <br>
   <?php }?>
    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
: </strong> <?php if (($_smarty_tpl->tpl_vars['d']->value['email'])!=''){?> <?php echo $_smarty_tpl->tpl_vars['d']->value['email'];?>
 <?php }else{ ?> N/A <?php }?> <br>
    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
: </strong> <?php if (($_smarty_tpl->tpl_vars['d']->value['phone'])!=''){?> <?php echo $_smarty_tpl->tpl_vars['d']->value['phone'];?>
 <?php }else{ ?> N/A <?php }?> <br>
    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
: </strong> <?php if (($_smarty_tpl->tpl_vars['d']->value['address'])!=''){?> <?php echo $_smarty_tpl->tpl_vars['d']->value['address'];?>
 <?php }else{ ?> N/A <?php }?> <br>
    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
: </strong> <?php if (($_smarty_tpl->tpl_vars['d']->value['city'])!=''){?> <?php echo $_smarty_tpl->tpl_vars['d']->value['city'];?>
 <?php }else{ ?> N/A <?php }?> <br>
    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['State Region'];?>
: </strong> <?php if (($_smarty_tpl->tpl_vars['d']->value['state'])!=''){?> <?php echo $_smarty_tpl->tpl_vars['d']->value['state'];?>
 <?php }else{ ?> N/A <?php }?> <br>
    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['ZIP Postal Code'];?>
: </strong> <?php if (($_smarty_tpl->tpl_vars['d']->value['zip'])!=''){?> <?php echo $_smarty_tpl->tpl_vars['d']->value['zip'];?>
 <?php }else{ ?> N/A <?php }?> <br>
    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
: </strong> <?php if (($_smarty_tpl->tpl_vars['d']->value['country'])!=''){?> <?php echo $_smarty_tpl->tpl_vars['d']->value['country'];?>
 <?php }else{ ?> N/A <?php }?> <br>
    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tags'];?>
: </strong> <?php if (($_smarty_tpl->tpl_vars['d']->value['tags'])!=''){?> <?php echo $_smarty_tpl->tpl_vars['d']->value['tags'];?>
 <?php }else{ ?> N/A <?php }?> <br>

    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cf']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>

        <strong><?php echo $_smarty_tpl->tpl_vars['c']->value['fieldname'];?>
: </strong> <?php if (get_custom_field_value($_smarty_tpl->tpl_vars['c']->value['id'],$_smarty_tpl->tpl_vars['d']->value['id'])!=''){?> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['c']->value['id'],$_smarty_tpl->tpl_vars['d']->value['id']);?>
 <?php }else{ ?> N/A <?php }?> <br>

    <?php } ?>

</p>

<hr>


<table class="table table-hover margin bottom">
    <thead>
    <tr>

        <th colspan="3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accounting Summary'];?>
</th>

    </tr>
    </thead>
    <tbody>
    <tr>

        <td> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Income'];?>

        </td>
        <td class="text-center"><span class="label label-primary"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ti']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</span></td>
        

    </tr>
    <tr>

        <td> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Expense'];?>

        </td>
        <td class="text-center"><span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['te']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</span></td>
        

    </tr>

    </tbody>
</table><?php }} ?>