<h1>サンプル２</h1>
<h2>ユーザ管理</h2>
<!--IDが空の場合は追加、そうでないなら編集-->
<h3>ユーザ<?php echo empty($this->data['User']['id']) ? '追加' : '編集'; ?></h3>

<?php echo $this->Form->create('User'); ?>
<!--idが存在するならhiddenでidデータを取得する-->
<?php echo empty($this->data['User']['id']) ? null : $this->Form->input('id', array('type' => 'hidden')); ?>

<div class="input">
<p>ID</p>
<!--idが存在しないなら新規、あるなら表示-->
<p><?php echo empty($this->data['User']['id']) ? '(新規)' : h($this->data['User']['id']); ?></p>
</div>

<?php echo $this->Form->input('username'); ?>

<?php echo $this->Form->input('password'); ?>

<?php echo $this->Form->end(empty($this->data['User']['id']) ? '　追加　' : '　編集　'); ?>
