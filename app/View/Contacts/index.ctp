<?php $this->Html->addCrumb( 'ホーム', '/'); ?>
<?php $this->Html->addCrumb( 'お問い合わせ', '/contacts'); ?>
<?php $this->Html->addCrumb( 'お問い合わせフォーム'); ?>
<?php $this->set('breadcrumb_for_layout', $this->Html->getCrumbs(' &raquo; ')) ?>
<?php $this->set('title_for_layout', 'お問い合わせフォーム'); ?>
<?php echo $this->Form->create('Contact'); ?>
<table class="siteInformation table table-bordered">
    <thead>
        <tr>
            <th class="siteInformationField">お問い合わせ項目</th>
            <th class="siteInformationDesctiption">入力欄</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th><?php echo $this->Form->label('Contact.name', '名前'); ?></th>
            <td><?php echo $this->Form->input('name', array('label' => false)); ?></td>
        </tr>
        <tr>
            <th><?php echo $this->Form->label('Contact.email', 'メール'); ?></th>
            <td><?php echo $this->Form->input('email', array('label' => false)); ?></td>
        </tr>
        <tr>
            <th><?php echo $this->Form->label('Contact.mtr_sex_id', '性別'); ?></th>
            <td><?php echo $this->Form->input('mtr_sex_id', array('type' => 'radio', 'options' => $sexList, 'label' => false, 'legend' => false)); ?></td>
        </tr>
        <tr>
            <th><?php echo $this->Form->label('Contact.mtr_age_id', '年齢'); ?></th>
            <td><?php echo $this->Form->input('mtr_age_id', array('type' => 'select', 'options' => $ageList, 'label' => false)); ?></td>
        </tr>
        <tr>
            <th><?php echo $this->Form->label('Contact.title', '件名'); ?></th>
            <td><?php echo $this->Form->input('title', array('label' => false)); ?></td>
        </tr>
        <tr>
            <th><?php echo $this->Form->label('Contact.content', '内容'); ?></th>
            <td><?php echo $this->Form->input('content', array('type' => 'textarea', 'label' => false)); ?></td>
        </tr>


<!--HBTMの関係では、data[MtrFavolite][MtrFavolite][]形式でデータを受け取る-->
  <tr>
            <th><?php echo $this->Form->label('MtrFavolite.MtrFavolite', '趣味'); ?></th>
            <td><?php echo $this->Form->input('MtrFavolite.MtrFavolite', array('multiple' => 'checkbox', 'options' => $favoliteList, 'label' => false)); ?></td>
        </tr>


<!--data[Contact][confirmed]に格納されるhidden値-->
   <tr>
            <th></th>
            <td>
                <?php echo $this->Form->input('confirmed', array('type' => 'hidden', 'value' => false)); ?>
                <?php echo $this->Form->submit('　確認　'); ?>
            </td>
        </tr>
    </tbody>
</table>
<?php echo $this->Form->end(); ?>
