<?php require_once __DIR__ . '/../layouts/default.php'?>
<?php 
echo "
    <div class='container d-flex justify-content-center mt-3' style='height:80%;'>
        <div id='POPup' class=' d-flex justify-content-center ' >
            <div class=' bg-primary' style='display:flex; flex-direction:column; align-items:center; border-radius:15px;'>

                <div style='width: 90%;'>
                    <header class='d-flex justify-content-between'> 
                        <p class='text-white display-6 ml-1 mt-2'>{$dataConsulta['title_query']}</p>
                        <p class='text-white mr-1 mt-2'>{$dataConsulta['created_at']}</p>
                    </header>
                
                    <main class='rounded bg-info p-5 h-100'>
                        <p class=' mb-3 font-weight-bold ' style='font-size:1em;'><b>{$dataConsulta['name']}</b> </p>
                        <p class=' mb-5 font-weight-bold ' style='font-size:1em;' ><b>{$dataConsulta['email']}</b></p>
                        <p class=' mt-4 font-weight-bold ' style='font-size:1em;'><b>{$dataConsulta['problem_query']}</b></p>
                    </main>
            
                    <footer class='d-flex justify-content-center mt-3 mb-4 ml-4 position-relative'>
                        <button type='button' onclick='location=`/`' class='btn p-0 position-absolute start-0'>
                            <img src='/assets/btnback.png' class='img-fluid' style='width:70%;' alt='btn-back'>
                        </button>
                        <button type='button'  class='btn btn-primary btn-lg'>
                            <a href='?action=edit&id={$dataConsulta['id']}'>Actualizar</a>
                        </button>
                    </footer>
                </div>

            </div>
        </div>
    </div>
";
?>
<?php require_once __DIR__ . '/../layouts/defaultFooter.php'?>
