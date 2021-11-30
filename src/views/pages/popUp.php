<?php require_once __DIR__ . '/../layouts/default.php'?>

<div class='container d-flex justify-content-center mt-3' style='height:80%;'>
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
