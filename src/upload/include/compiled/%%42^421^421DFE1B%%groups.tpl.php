<?php /* Smarty version 2.6.26, created on 2013-06-03 16:23:41
         compiled from admin/groups.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "navibar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "sidebar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- TPLSTART 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<?php echo $this->_tpl_vars['osadmin_action_alert']; ?>

<?php echo $this->_tpl_vars['osadmin_quick_note']; ?>

<div class="btn-toolbar">
	<a href="group_add.php"><button class="btn btn-primary"><i class="icon-plus"></i> 账号组</button></a>
</div>
<div class="block">
	<a href="#page-stats" class="block-heading" data-toggle="collapse">账号组列表</a>
	<div id="page-stats" class="block-body collapse in">
		<table class="table table-striped">
			<thead>
			<tr>
				<th>#</th>
				<th>账号组名</th>
				<th>所有者</th>
				<th>描述</th>
				<th width="80px">操作</th>
			</tr>
			</thead>
			<tbody>							  
			<?php $_from = $this->_tpl_vars['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['group'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['group']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['group']):
        $this->_foreach['group']['iteration']++;
?>
				 
				<tr>
 
				<td><?php echo $this->_tpl_vars['group']['group_id']; ?>
</td>
				<td><?php echo $this->_tpl_vars['group']['group_name']; ?>
</td>
				<td><?php echo $this->_tpl_vars['group']['owner_name']; ?>
</td>
				<td><?php echo $this->_tpl_vars['group']['group_desc']; ?>
</td>
				<td>
				<a href="group.php?group_id=<?php echo $this->_tpl_vars['group']['group_id']; ?>
" title= "成员列表" ><i class="icon-list-alt"></i></a>
				&nbsp;
				<a href="group_modify.php?group_id=<?php echo $this->_tpl_vars['group']['group_id']; ?>
" title= "修改" ><i class="icon-pencil"></i></a>
				&nbsp;
				<a data-toggle="modal" href="#myModal"  title= "删除" ><i class="icon-remove" href="groups.php?method=del&group_id=<?php echo $this->_tpl_vars['group']['group_id']; ?>
#myModal" data-toggle="modal" ></i></a>
				</td>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
		  </tbody>
		</table>  
	</div>
</div>

<!---操作的确认层，相当于javascript:confirm函数--->
<?php echo $this->_tpl_vars['osadmin_action_confirm']; ?>

	
<!-- TPLEND 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>