<?php $this->Html->addCrumb( 'ホーム', '/'); ?>
<?php $this->Html->addCrumb( 'お問い合わせ', '/contacts'); ?>
<?php $this->Html->addCrumb( 'お問い合わせフォーム'); ?>
<?php $this->set('breadcrumb_for_layout', $this->Html->getCrumbs(' &raquo; ')) ?>
<?php $this->set('title_for_layout', 'お問い合わせ内容の確認'); ?>


<p>よろしければ「送信」ボタンを押してください</p>

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
            <th>名前</th>
            <td><?php echo h($this->data['Contact']['name']); ?><?php echo $this->Form->input('name', array('type' => 'hidden')); ?></td>
        </tr>
        <tr>
            <th>メール</th>
            <td><?php echo h($this->data['Contact']['email']); ?><?php echo $this->Form->input('email', array('type' => 'hidden')); ?></td>
        </tr>


<tr>
<th>性別</th>
<!--$sexList[id]で取得-->
 <td><?php echo $sexList[$this->data['Contact']['mtr_sex_id']]; ?><?php echo $this->Form->input('mtr_sex_id', array('type' => 'hidden')); ?></td>
        </tr>


 <tr>
            <th>年齢</th>
            <td><?php echo $ageList[$this->data['Contact']['mtr_age_id']]; ?><?php echo $this->Form->input('mtr_age_id', array('type' => 'hidden')); ?></td>
        </tr>
        <tr>
            <th>件名</th>
            <td><?php echo h($this->data['Contact']['title']); ?><?php echo $this->Form->input('title', array('type' => 'hidden')); ?></td>
        </tr>
        <tr>
            <th>内容</th>
            <td><?php echo h($this->data['Contact']['content']); ?><?php echo $this->Form->input('content', array('type' => 'hidden')); ?></td>
        </tr>
      

 <tr>
            <th>趣味</th>
            <td>
                <?php echo $this->Form->input('Favolite.Favolite', array('type' => 'hidden')); ?>
                <?php
                if(!empty($this->data['MtrFavolite']['MtrFavolite'])) {
                    foreach($this->data['MtrFavolite']['MtrFavolite'] as $favolite) {
                         //チェックされた値を全て表示する
                        echo $favoliteList[$favolite].'<br />';
                    }
                }?>
            </td>
        </tr>
        <tr>
            <th></th>
            <td>
                <?php echo $this->Form->input('confirmed', array('type' => 'hidden', 'value' => true)); ?>
                <?php echo $this->Form->submit('　送信　'); ?>
            </td>
        </tr>
    </tbody>
</table>
<?php echo $this->Form->end(); ?>
