<section class="panel">
    <div class="panel-body">
        <ul id="nav-mobile">
            <li><a class="waves-effect waves-light <?php if ($this->uri->segment(2) == 'edittest') {
    echo 'active';
} ?>" href="<?php echo site_url('site/edittestquestion?id=').$before->id; ?>">Test Questions</a></li>
        </ul>
    </div>
</section>
