<div class="col-md-12">
      <h2 class="text-center">新規登録</h2>

      <?= $this->Form->create('User', [
                  'novalidate' => true,
                  'class' => 'well form-horizontal',
                  ]); ?>

      <?= $this->Form->input('email', [
                  'label' => 'メールアドレス',
                  'type'  => 'email',
                  'class' => 'form-control'
                  ]); ?>

      <?= $this->Form->input('password', [
                  'label' => 'パスワード',
                  'type'  => 'password',
                  'class' => 'form-control'
                  ]); ?>

      <?= $this->Form->input('password_confirm', [
                  'label' => 'パスワード(確認)',
                  'type'  => 'password',
                  'class' => 'form-control'
                  ]); ?>

      <?= $this->Form->end([
                  'label' => '登録する',
                  'class' => 'btn btn-primary btn-lg center-block',
                  'style' => 'margin-top: 20px;'
                  ]); ?>
</div>