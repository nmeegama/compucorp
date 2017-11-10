<?php /* Smarty version 2.6.30, created on 2017-11-10 21:40:11
         compiled from CRM/Price/Form/Set.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Price/Form/Set.tpl', 1, false),array('block', 'ts', 'CRM/Price/Form/Set.tpl', 28, false),array('function', 'crmURL', 'CRM/Price/Form/Set.tpl', 30, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="help">
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Use this form to edit the title and group-level help for a set of Price fields.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
<?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/setting/component','q' => "reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('enableComponents', ob_get_contents());ob_end_clean(); ?>
<div class="crm-form-block">
    <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>

    <table class="form-layout">
        <tr class="crm-price-set-form-block-title">
           <td class="label"><?php echo $this->_tpl_vars['form']['title']['label']; ?>
</td>
           <td>
     <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_price_set','field' => 'title','id' => $this->_tpl_vars['sid'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?><?php echo $this->_tpl_vars['form']['title']['html']; ?>

           </td>
        </tr>
        <tr>
           <td>&nbsp;</td>
           <td class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The name of this Price Set<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
           </td>
        <tr class="crm-price-set-form-block-extends">
           <td class="label"><?php echo $this->_tpl_vars['form']['extends']['label']; ?>
</td>
           <td>
           <?php if ($this->_tpl_vars['extends'] == false): ?>
              <div class="status message"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['enableComponents'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No Components have been enabled for your site that can be configured with the price sets. Click <a href='%1'>here</a> if you want to enable CiviEvent/CiviContribute for your site.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
          <?php else: ?>
              <?php echo $this->_tpl_vars['form']['extends']['html']; ?>

          <?php endif; ?>
          </td>
        </tr>
        <tr id="min_amount" class="crm-price-set-form-block-min_amount">
           <td class="label"><?php echo $this->_tpl_vars['form']['min_amount']['label']; ?>
</td>
           <td><?php echo $this->_tpl_vars['form']['min_amount']['html']; ?>
</td>
        </tr>
        <tr id="financial_type_id_row" class="crm-price-set-form-block-contribution_type_id crm-price-set-form-block-financial_type_id">
          <td class="label"><?php echo $this->_tpl_vars['form']['financial_type_id']['label']; ?>
</td>
           <td><?php echo $this->_tpl_vars['form']['financial_type_id']['html']; ?>
</td>
           <td>&nbsp;</td>
        </tr>
        <tr class="crm-price-set-form-block-help_pre">
     <td class="label"><?php echo $this->_tpl_vars['form']['help_pre']['label']; ?>
</td>
           <td><?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_price_set','field' => 'help_pre','id' => $this->_tpl_vars['sid'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?><?php echo $this->_tpl_vars['form']['help_pre']['html']; ?>

           </td>
           <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Explanatory text displayed at the beginning of this group of fields.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          </td>
        </tr>
        <tr class="crm-price-set-form-block-help_post">
           <td class="label"><?php echo $this->_tpl_vars['form']['help_post']['label']; ?>
</td>
           <td><?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_price_set','field' => 'help_post','id' => $this->_tpl_vars['sid'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?><?php echo $this->_tpl_vars['form']['help_post']['html']; ?>

           </td>
        </tr>
        <tr>
           <td>&nbsp;</td>
           <td class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Explanatory text displayed below this group of fields.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
           </td>
        </tr>
        <tr class="crm-price-set-form-block-is_active">
           <td class="label"><?php echo $this->_tpl_vars['form']['is_active']['label']; ?>
</td>
           <td><?php echo $this->_tpl_vars['form']['is_active']['html']; ?>
</td>
        </tr>
     </table>
     <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>

</div>
<?php if ($this->_tpl_vars['action'] == 2 || $this->_tpl_vars['action'] == 4): ?>     <p></p>
    <div class="action-link">
    <a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/price/field','q' => "action=browse&reset=1&sid=".($this->_tpl_vars['sid'])), $this);?>
" class="button"><span><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Fields for this Set<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
    </div>
<?php endif; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>