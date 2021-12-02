<?php require_once __DIR__ . '/../layouts/default.php';?>

<main class='container'>
    <div class="row">
        <?php
        
        foreach ($appointment as $itemConsulta) {
            echo "
            <div class='col d-flex flex-column align-items-start justify-content-center h-25 p-2 text-white m-3' 
            style='background-color:rgba(57,84,165,100); border-radius:20px; width:30vw'>
                <a href='?action=popUp&id={$itemConsulta->id}'>+info</a>
                <a href='?action=delete&id={$itemConsulta->id}'>delete</a>
                <p><b>{$itemConsulta->title}</b></p>
                <p><b>{$itemConsulta->created_at}</b></p>
                <p><b>{$itemConsulta->name}</b></p>
            </div>
            ";}
        ?>

        <div class='col d-flex flex-column align-items-center justify-content-center h-25 p-2 text-white m-3' 
        style='background-color:rgba(113,144,195,100); border-radius:20px;width:30vw'>
            <button style= "background-color:transparent;border:none" onclick="location='/create'">
                <img src="/assets/btnadd.png" alt="btn Add" class='w-50 pt-5 pb-5'>
            </button>
        </div>

    </div>
</main>

<?php require_once __DIR__ . '/../layouts/defaultFooter.php'?>