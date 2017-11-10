<?php /* Smarty version 2.6.30, created on 2017-11-10 14:50:20
         compiled from CRM/Contact/Form/CustomData.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/CustomData.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['cdType'] || $this->_tpl_vars['postedInfo']): ?>
   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Form/CustomData.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
   <?php if ($this->_tpl_vars['multiRecordDisplay'] == 'single'): ?>
     <div class="crm-submit-buttons"><?php echo $this->_tpl_vars['form']['buttons']['html']; ?>
</div>
   <?php endif; ?>
<?php else: ?>
    <div id="customData"></div>
    <div class="crm-submit-buttons"><?php echo $this->_tpl_vars['form']['buttons']['html']; ?>
</div>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/customData.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <?php if ($this->_tpl_vars['customValueCount']): ?>
    <?php echo '
    <script type="text/javascript">
      CRM.$(function() {
        '; ?>

        var customValueCount = "<?php echo $this->_tpl_vars['customValueCount']; ?>
",
          groupID = "<?php echo $this->_tpl_vars['groupID']; ?>
",
          contact_type = "<?php echo $this->_tpl_vars['contact_type']; ?>
",
          contact_subtype = "<?php echo $this->_tpl_vars['contact_subtype']; ?>
",
          i = 1;
        <?php echo '
        // FIXME: This is pretty terrible. Loading each item at a time via ajax.
        // Building the complete form in php with no ajax would be way more efficient.
        function loadNextRecord() {
          if (i < customValueCount) {
            CRM.buildCustomData(contact_type, contact_subtype, null, i++, groupID, true).one(\'crmLoad\', loadNextRecord);
          }
        }
        CRM.buildCustomData(contact_type, contact_subtype).one(\'crmLoad\', loadNextRecord);
      });
    </script>
    '; ?>

  <?php endif; ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Form/attachmentjs.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>