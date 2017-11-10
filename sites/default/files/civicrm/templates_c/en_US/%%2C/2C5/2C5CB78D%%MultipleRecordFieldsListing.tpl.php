<?php /* Smarty version 2.6.30, created on 2017-11-10 14:38:23
         compiled from CRM/Profile/Page/MultipleRecordFieldsListing.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Profile/Page/MultipleRecordFieldsListing.tpl', 1, false),array('block', 'ts', 'CRM/Profile/Page/MultipleRecordFieldsListing.tpl', 27, false),array('function', 'crmURL', 'CRM/Profile/Page/MultipleRecordFieldsListing.tpl', 56, false),array('function', 'cycle', 'CRM/Profile/Page/MultipleRecordFieldsListing.tpl', 92, false),array('function', 'crmAttributes', 'CRM/Profile/Page/MultipleRecordFieldsListing.tpl', 94, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['showListing']): ?>
  <?php if ($this->_tpl_vars['dontShowTitle'] != 1): ?><h1><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $this->_tpl_vars['customGroupTitle']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h1><?php endif; ?>
  <?php if ($this->_tpl_vars['pageViewType'] == 'customDataView'): ?>
     <?php $this->assign('dialogId', 'custom-record-dialog'); ?>
  <?php else: ?>
     <?php $this->assign('dialogId', 'profile-dialog'); ?>
  <?php endif; ?>
  <?php if (( $this->_tpl_vars['records'] && $this->_tpl_vars['headers'] ) || ( $this->_tpl_vars['pageViewType'] == 'customDataView' )): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jsortable.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div id="custom-<?php echo $this->_tpl_vars['customGroupId']; ?>
-table-wrapper" <?php if ($this->_tpl_vars['pageViewType'] == 'customDataView'): ?>class="crm-entity" data-entity="contact" data-id="<?php echo $this->_tpl_vars['contactId']; ?>
"<?php endif; ?>>
      <div>
        <?php echo '<table id="records-'; ?><?php echo $this->_tpl_vars['customGroupId']; ?><?php echo '" class='; ?><?php if ($this->_tpl_vars['pageViewType'] == 'customDataView'): ?><?php echo '"crm-multifield-selector crm-ajax-table"'; ?><?php else: ?><?php echo '\'display\''; ?><?php endif; ?><?php echo '><thead>'; ?><?php if ($this->_tpl_vars['pageViewType'] == 'customDataView'): ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['headers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['recId'] => $this->_tpl_vars['head']):
?><?php echo '<th data-data='; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo '\''; ?><?php echo $this->_tpl_vars['headerAttr'][$this->_tpl_vars['recId']]['columnName']; ?><?php echo '\''; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ''; ?><?php if (! empty ( $this->_tpl_vars['headerAttr'][$this->_tpl_vars['recId']]['dataType'] )): ?><?php echo 'cell-data-type="'; ?><?php echo $this->_tpl_vars['headerAttr'][$this->_tpl_vars['recId']]['dataType']; ?><?php echo '"'; ?><?php endif; ?><?php echo ''; ?><?php if (! empty ( $this->_tpl_vars['headerAttr'][$this->_tpl_vars['recId']]['dataEmptyOption'] )): ?><?php echo 'cell-data-empty-option="'; ?><?php echo $this->_tpl_vars['headerAttr'][$this->_tpl_vars['recId']]['dataEmptyOption']; ?><?php echo '"'; ?><?php endif; ?><?php echo '>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo ''; ?><?php echo $this->_tpl_vars['head']; ?><?php echo ''; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '<th data-data="action" data-orderable="false">&nbsp;</th></thead>'; ?><?php echo '
              <script type="text/javascript">
                (function($) {
                  var ZeroRecordText = '; ?><?php echo '\''; ?><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['customGroupTitle'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'No records of type \\\'%1\\\' found.'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\''; ?><?php echo ';
                  var $table = $(\'#records-\' + '; ?><?php echo '\''; ?><?php echo $this->_tpl_vars['customGroupId']; ?><?php echo '\''; ?><?php echo ');
                  $(\'table.crm-multifield-selector\').data({
                    "ajax": {
                      "url": '; ?><?php echo '\''; ?><?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/ajax/multirecordfieldlist",'h' => 0,'q' => "snippet=4&cid=".($this->_tpl_vars['contactId'])."&cgid=".($this->_tpl_vars['customGroupId'])), $this);?><?php echo '\''; ?><?php echo ',
                    },
                    "language": {
                      "emptyTable": ZeroRecordText,
                    },
                    //Add class attributes to cells
                    "rowCallback": function(row, data) {
                      $(\'thead th\', $table).each(function(index) {
                        var fName = $(this).attr(\'data-data\');
                        var cell = $(\'td:eq(\' + index + \')\', row);
                        if (typeof data[fName] == \'object\') {
                          if (typeof data[fName].data != \'undefined\') {
                            $(cell).html(data[fName].data);
                          }
                          if (typeof data[fName].cellClass != \'undefined\') {
                            $(cell).attr(\'class\', data[fName].cellClass);
                          }
                        }
                      });
                    },
                  })
                })(CRM.$);
              </script>
              '; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['headers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['recId'] => $this->_tpl_vars['head']):
?><?php echo '<th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo ''; ?><?php echo $this->_tpl_vars['head']; ?><?php echo ''; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th>'; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['dateFields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fieldId'] => $this->_tpl_vars['v']):
?><?php echo '<th class=\'hiddenElement\'></th>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '<th>&nbsp;</th></thead>'; ?><?php $_from = $this->_tpl_vars['records']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['recId'] => $this->_tpl_vars['rows']):
?><?php echo '<tr class="'; ?><?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?><?php echo '">'; ?><?php $_from = $this->_tpl_vars['headers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['hrecId'] => $this->_tpl_vars['head']):
?><?php echo '<td '; ?><?php echo smarty_function_crmAttributes(array('a' => $this->_tpl_vars['attributes'][$this->_tpl_vars['hrecId']][$this->_tpl_vars['recId']]), $this);?><?php echo '>'; ?><?php echo $this->_tpl_vars['rows'][$this->_tpl_vars['hrecId']]; ?><?php echo '</td>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '<td>'; ?><?php echo $this->_tpl_vars['rows']['action']; ?><?php echo '</td>'; ?><?php $_from = $this->_tpl_vars['dateFieldsVals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fid'] => $this->_tpl_vars['rec']):
?><?php echo '<td class=\'crm-field-'; ?><?php echo $this->_tpl_vars['fid']; ?><?php echo '_date hiddenElement\'>'; ?><?php echo $this->_tpl_vars['rec'][$this->_tpl_vars['recId']]; ?><?php echo '</td>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</tr>'; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php endif; ?><?php echo '</table>'; ?>

      </div>
    </div>
    <div id='<?php echo $this->_tpl_vars['dialogId']; ?>
' class="hiddenElement"></div>
  <?php elseif (! $this->_tpl_vars['records']): ?>
    <div class="messages status no-popup">
      <div class="icon inform-icon"></div>
      &nbsp;
      <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['customGroupTitle'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No records of type '%1' found.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
    <div id='<?php echo $this->_tpl_vars['dialogId']; ?>
' class="hiddenElement"></div>
  <?php endif; ?>

  <?php if (! $this->_tpl_vars['reachedMax']): ?>
    <div class="action-link">
      <?php if ($this->_tpl_vars['pageViewType'] == 'customDataView'): ?>
        <br/><a accesskey="N" title="<?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['customGroupTitle'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add %1 Record<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/cd/edit','q' => "reset=1&type=".($this->_tpl_vars['ctype'])."&groupID=".($this->_tpl_vars['customGroupId'])."&entityID=".($this->_tpl_vars['contactId'])."&cgcount=".($this->_tpl_vars['newCgCount'])."&multiRecordDisplay=single&mode=add"), $this);?>
"
         class="button action-item"><span><i class="crm-i fa-plus-circle"></i> <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['customGroupTitle'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add %1 Record<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
      <?php else: ?>
        <a accesskey="N" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/profile/edit','q' => "reset=1&id=".($this->_tpl_vars['contactId'])."&multiRecord=add&gid=".($this->_tpl_vars['gid'])."&context=multiProfileDialog&onPopupClose=".($this->_tpl_vars['onPopupClose'])), $this);?>
"
         class="button action-item"><span><i class="crm-i fa-plus-circle"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add New Record<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
      <?php endif; ?>
    </div>
    <br />
  <?php endif; ?>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>