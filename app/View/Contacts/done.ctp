<?php $this->Html->addCrumb( 'ホーム', '/'); ?>
<?php $this->Html->addCrumb( 'お問い合わせ', '/contacts'); ?>
<?php $this->Html->addCrumb( 'お問い合わせフォーム'); ?>
<?php $this->set('breadcrumb_for_layout', $this->Html->getCrumbs(' &raquo; ')) ?>
<?php $this->set('title_for_layout', '送信完了'); ?>

<p>登録が完了しました</p>

<div class="btn"><?php echo $this->Html->link('戻る', array('action' => 'index')); ?></div>
