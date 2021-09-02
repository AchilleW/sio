<?php 
    if (validation_errors()) { ?>
    <div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <?= validation_errors() ?>
    </div>
<?php } 

// ---------------------------------- SUCCESS ----------------------------------

if($this->session->flashdata('msg-success'))
{ 
?>
    <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <?= $this->session->flashdata('msg-success') ?>
    </div>
<?php } 

// ---------------------------------- DANGER -----------------------------------

if($this->session->flashdata('msg-danger')){ ?>
    <div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <?= $this->session->flashdata('msg-danger') ?>
    </div>
<?php } ?>
 