<?php
    $text = (object) [
        'ENG' => (object) [
            'title' => 'Approval',
            'explainer' => 'You needd to give your approval to allow the application to interact with your',
            'action' => 'Approve',
            'approvalSuccess' => 'Permissions Granted! Now you can carry on.'
        ],
        'ES' => (object) [
            'title' => 'Autorizacion',
            'explainer' => 'Es necesario que Usted autorize la aplicacion a interactuar con sus ',
            'action' => 'Authorizar',
            'approvalSuccess' => 'Permisos Otorgados! Ahora puede seguir.'

        ],
        'ITA' => (object) [
            'title' => 'Approvazione',
            'explainer' => 'Occorre autorizzare questa applicazione ad interagire con gli ',
            'action' => 'Approvare',
            'approvalSuccess' => 'Permesso Accordato! Ora puoi continuare.'
        ]
    ];
?>

<div id = "approval-modal-background">
    <div class="modal-content">
        <h3><i class="fas fa-window-close closer"></i></h3>
        <div class="modal-body">

            <section id="beforeApproval">

                <h2 class="success">
                    <i class="fas fa-coins"></i> <?php echo $text->$lang->title; ?>
                </h2>

                <p>
                    <?php echo $text->$lang->explainer; ?> <b id="coinToBeApproved"></b>
                </p>

                <div class="feedback-box">
                    <p class="error center" id="approvalError"></p>
                </div>

                <div class="center hidden" id="approval-spinner">
                    <?php include('spinner.php'); ?>
                </div>
                <div class="divider"></div>
                <p class = "center">
                    <span class="modal-btn" id="approveBTN">
                        <i class = "fas fa-check"></i> <?php echo $text->$lang->action; ?>
                    </span>
                </p>
            </section>

            <section id="afterApproval" class="hidden">
                <h2 class="success center bigIcon" >
                    <i class="fas fa-check"></i>
                </h2>
                <div class="feedback-box">
                    <p class="success center">
                        <?php echo $text->$lang->approvalSuccess; ?>
                    </p>
                </div>
                <div class="divider"></div>
                <p class = "center">
                    <span class="closer modal-btn" id="closeApprovalBTN">
                        <i class = "fas fa-check"></i> OK
                    </span>
                </p>
            </section>

            <div class="divider"></div>
        </div>
    </div>
</div>