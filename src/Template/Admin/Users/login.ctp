<!--<form action="../../index3.html" method="post">
    <div class="input-group mb-3">
        <input type="email" class="form-control" placeholder="Email">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Password">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                    Remember Me
                </label>
            </div>
        </div>
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        
    </div>
</form>-->
<?php echo $this->Form->create(); ?>
<div class="input-group mb-3">
    <?= $this->Form->control('username', ['templates' => ['inputContainer' => '{{content}}'], 'class' => 'form-control', 'placeholder' => 'Username', 'label' => false]) ?>
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-user"></span>
        </div>
    </div>
</div>
<div class="input-group mb-3">
    <?= $this->Form->control('password', ['templates' => ['inputContainer' => '{{content}}'], 'class' => 'form-control', 'placeholder' => 'Password', 'label' => false]) ?>
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-lock"></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-8">
        <div class="checkbox icheck">
            <?php echo $this->Form->control('remember_me', ['type' => 'checkbox', 'templates' => ['inputContainer' => '{{content}}']]); ?>              
        </div>
    </div>          
    <div class="col-4">
        <?php echo $this->Form->button('Sign In', ['class' => 'btn btn-primary btn-block btn-flat']); ?>
    </div>
</div>      
<?php $this->Form->end(); ?>