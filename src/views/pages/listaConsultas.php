<?php 

// use App\Models\AppointmentModel;

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
                <p><b>{$itemConsulta->title}</b></p>
                <p><b>15:30</b></p>
                <p><b>{$itemConsulta->name}</b></p>
            </div>
            ";
        }
        ?>
        <div class='col d-flex flex-column align-items-center justify-content-center h-25 p-2 text-white m-3' style='background-color:rgba(113,144,195,100)
                ; border-radius:20px;
                width:30vw'>
                <!-- 
                <p></p>
                <p></p>
                -->
                <img src="/css/icons/btn-add.png" alt="btn Add" class='w-50 pt-5 pb-5' styles=''>
                <!--
                <p class="pb-1"></p>
                -->
        </div>
    </div>
</main>

<div class='container d-flex justify-content-center mt-3' style='height:80%; display:none!important;'>
    <div id='POPup' class=" d-flex justify-content-center " >
        <div class=" bg-primary" style='display:flex; flex-direction:column; align-items: center; border-radius:15px;'>
            <div style='width: 90%;'>
                <header class="d-flex justify-content-between"> 
                    <p class='text-white display-6 ml-1 mt-2'>Tema de Consulta</p>
                    <p class='text-white mr-1 mt-2'>00:00</p>
                </header>
            
                <main class='rounded bg-info p-5 h-100'>
                    <p class=" mb-3 font-weight-bold " style='font-size:1em;'><b> Name LastName</b> </p>
                    <p class=" mb-5 font-weight-bold " style='font-size:1em;' > <b>example@email.com </b></p>
                    <p class=' mt-4 font-weight-bold ' style='font-size:1em;'><b> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</b></p>
                </main>
        
                <footer class='d-flex justify-content-center mt-3 mb-4 ml-4 position-relative'>
                    <button type="button" class="btn p-0 position-absolute start-0">
                        <img src="css/icons/btn-back.png" class="img-fluid" style='width:70%;' alt="btn-back">
                    </button>
                    <button type="button" class="btn btn-primary btn-lg">Actualizar</button>
                </footer>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../layouts/defaultFooter.php'?>








<!--                        IF ( )     {}                 else{}     -->
                <!--     pregunta ? (SI es cierto) : (NO sea cierto)                          -->

<!--   if(pregunta) {
            (SI es cierto)
       } else { (NO es cierto)}
}   -->







