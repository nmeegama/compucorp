<?php /* Smarty version 2.6.30, created on 2017-11-10 21:41:55
         compiled from CRM/common/deferredFinancialType.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/common/deferredFinancialType.tpl', 1, false),array('block', 'ts', 'CRM/common/deferredFinancialType.tpl', 33, false),array('modifier', 'json_encode', 'CRM/common/deferredFinancialType.tpl', 38, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if (isset ( $this->_tpl_vars['deferredFinancialType'] )): ?>
<div id='warningDialog' style="display:none;"></div>
<?php echo '
<script type="text/javascript">
CRM.$(function($) {
  var more = $(\'.crm-button input.validate\').click(function(e) {
    var message = "'; ?>
 <?php if ($this->_tpl_vars['context'] == 'Event'): ?>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Note: Revenue for this event registration will not be deferred as the financial type does not have a deferred revenue account setup for it. If you want the revenue to be deferred, please select a different Financial Type with a Deferred Revenue account setup for it, or setup a Deferred Revenue account for this Financial Type.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      <?php else: ?>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Note: Revenue for these types of memberships will not be deferred as the financial type does not have a deferred revenue account setup for it. If you want the revenue to be deferred, please select a different Financial Type with a Deferred Revenue account setup for it, or setup a Deferred Revenue account for this Financial Type.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      <?php endif; ?>
    <?php echo '";
    var deferredFinancialType = '; ?>
<?php echo json_encode($this->_tpl_vars['deferredFinancialType']); ?>
<?php echo ';
    var financialType = parseInt($(\'#financial_type_id\').val());
    if ($.inArray(financialType, deferredFinancialType) == -1) {
      return confirm(message);
    }
  });
});
</script>
'; ?>

<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>