<?php require_once __DIR__ . '/../layouts/default.php'; ?>

<main class='container'>
    <div class="row">
        <?php

        foreach ($appointment as $itemConsulta) {
            echo "
            <div class='col d-flex flex-column align-items-start justify-content-center h-25 p-2 text-white m-3' 
            style='background-color:rgba(57,84,165,100); border-radius:20px; width:30vw'>
               <div class ='w-100 p-3 '>
                    <div>
                        <div style = 'display:flex; justify-content:space-between'>
                           <p><b>{$itemConsulta->title}</b></p>
                           <a style='color:red; text-decoration:none; font-weight:900' 
                              href='?action=delete&id={$itemConsulta->id}'>X</a>
                        </div>
                        <p><b>{$itemConsulta->created_at}</b></p>
                        <div style='display:flex; justify-content:space-between;'>
                            <p><b>{$itemConsulta->name}</b></p>
                            <a class ='ps-3'style='color:white; text-decoration:none; font-weight:900; font-style:italic; float:left' href='?action=popUp&id={$itemConsulta->id}'>+info</a>
                        </div>
                    </div>
                  
               </div>
            </div>
            ";
        }

        ?>

        <div class='col d-flex flex-column align-items-center justify-content-center h-25 p-2 text-white m-3' style='background-color:rgba(113,144,195,100); border-radius:20px;width:30vw'>
            <button style="background-color:transparent;border:none" onclick="location='/create'">
                <img src="/assets/btnadd.png" alt="btn Add" class='w-50 pt-5 pb-5'>
            </button>
        </div>

    </div>
</main>

<?php require_once __DIR__ . '/../layouts/defaultFooter.php' ?>