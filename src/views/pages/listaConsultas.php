<?php 

// use App\Models\AppointmentModel;

use App\Controllers\AppointmentController;

require_once __DIR__ . '/../layouts/default.php';?>
<!-- 
    style='display:none!important;'   
-->
<main class='container'>
    <div class="row">
        <?php
        // $appointment = (new AppointmentModel())->All();
        
        foreach ($appointment as $itemConsulta) {
            echo "
            <div class='col d-flex flex-column align-items-start justify-content-center h-25 p-2 text-white m-3' style='background-color:rgba(57,84,165,100)
                ; border-radius:20px;
                width:30vw'>
                <a href='?action=popUp&id={$itemConsulta->id}'>+info</a>
                <a href='?action=delete&id={$itemConsulta->id}'>delete</a>
                <p><b>{$itemConsulta->title}</b></p>
                <p><b>15:30</b></p>
                <p><b>{$itemConsulta->name}</b></p>
            </div>
            ";
        }
        ?>
        <div class='col d-flex flex-column align-items-center justify-content-center h-25 p-2 text-white m-3' style='background-color:rgba(113,144,195,100)
                ; border-radius:20px;width:30vw'>
                <button class="" onclick="location='/create'">
                    <img src="/css/icons/btn-add.png" alt="btn Add" class='w-50 pt-5 pb-5' styles=''>
                </button>
        </div>

    </div>
</main>

<?php require_once __DIR__ . '/../layouts/defaultFooter.php'?>








<!--                        IF ( )     {}                 else{}     -->
                <!--     pregunta ? (SI es cierto) : (NO sea cierto)                          -->

<!--   if(pregunta) {
            (SI es cierto)
       } else { (NO es cierto)}
}   -->







