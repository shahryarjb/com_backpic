<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_miniuniversity
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.formvalidation');
?>
<form action="<?php echo JRoute::_('index.php?option=com_backpic&layout=edit&id=' . (int) $this->item->id); ?>"
    method="post" name="adminForm" id="adminForm" class="form-validate">
	



	<?php echo JHtml::_('bootstrap.startTabSet', 'myTab', array('active' => 'general')); ?>
    	<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'general', JText::_('تنظیمات مربوط به مطلب', true)); ?>

    <div class="form-horizontal">
				<div class="row-fluid">
					<div class="span12">
					<p>
					در این بخش از افزونه می توانید برای یک مطالب خودتان تنظیمات مورد نظر را اعلام کنید
					</p>
					<hr>
							<div class="control-group">
							<?php echo $this->form->getInput('id'); ?>
								<div class="control-label"> <?php echo $this->form->getLabel('name'); ?></div>
								<div class="controls"><?php echo $this->form->getInput('name'); ?></div>
							</div>
							<!--  -->
							<div class="control-group">
								<div class="control-label"> <?php echo $this->form->getLabel('pic'); ?></div>
								<div class="controls"><?php echo $this->form->getInput('pic'); ?></div>
							</div>
							<!--  -->
							<div class="control-group">
								<div class="control-label"> <?php echo $this->form->getLabel('article_id'); ?></div>
								<div class="controls"><?php echo $this->form->getInput('article_id'); ?></div>
							</div>
							<!--  -->
							<hr>
							<p>
توجه داشته باشید عدد وارد شده باید به همراه  فرمت اندازه دهی در فیلد مورد نظر قرار بگیرید  یا به صورت درصدی													</p>
							<hr>
							<div class="control-group">
								<div class="control-label"> <?php echo $this->form->getLabel('width'); ?></div>
								<div class="controls"><?php echo $this->form->getInput('width'); ?></div>
							</div>
							<!--  -->
							<div class="control-group">
								<div class="control-label"> <?php echo $this->form->getLabel('height'); ?></div>
								<div class="controls"><?php echo $this->form->getInput('height'); ?></div>
							</div>
							<!--  -->
							<div class="control-group">
							<hr>
							<p>
توجه داشته باشید اگز از کامپوننت های دیگری مثل ایزی بلاگ استفاده می کنید حتما باید از سایت سازنده  پلاگین مورد نظر را دریافت و نصب فعال کنید تا این قسمت برای شما کارایی داشته باشد					
							</p>
							<hr>
								<div class="control-label"> <?php echo $this->form->getLabel('type'); ?></div>
								<div class="controls"><?php echo $this->form->getInput('type'); ?></div>
							</div>
							<!--  -->
							<div class="control-group">
								<div class="control-label"> <?php echo $this->form->getLabel('custom'); ?></div>
								<div class="controls"><?php echo $this->form->getInput('custom'); ?></div>
							</div>
							<!--  -->
							<div class="control-group">
								<div class="control-label"> <?php echo $this->form->getLabel('template_name'); ?></div>
								<div class="controls"><?php echo $this->form->getInput('template_name'); ?></div>
							</div>
					</div>
				</div>
	</div>

    	<?php echo JHtml::_('bootstrap.endTab'); ?>
    	<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'advanced', JText::_('تنظیمات مربوط به منو', true)); ?>

    		<p>تنظیمات منو در نسخه بعدی افزونه backpic اضافه می گردد برای دریافت نسخه جدید و اخبار مربوط به این افزونه و افزونه های دیگر به وب سایت ( <a title="ترانگل" href="https://trangell.com/" rel="alternate">ترانگل</a> ) مراجعه کنید</p>

    	<?php echo JHtml::_('bootstrap.endTab'); ?>
	<?php echo JHtml::_('bootstrap.endTabSet'); ?>



	<input type="hidden" name="task" value="listpic.edit" />
	<?php echo JHtml::_('form.token'); ?>
</form>
