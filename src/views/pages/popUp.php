<?php require_once __DIR__ . '/../layouts/default.php' ?>
<?php
echo "
    <div class='container d-flex justify-content-center mt-3' style='height:80%;'>
        <main id='POPup' class=' d-flex justify-content-center align-items-center' >
            <article style='display:flex; flex-direction:column; height:58vh; align-items:center; border-radius:15px;background-color:#3954A5; min-width: 170%'>

                <section style='width: 90%;'>
                    <header class='d-flex justify-content-between'> 
                        <p class='text-white display-6 ml-1 mt-2'>{$dataConsulta->title}</p>
                        <p class='text-white mr-1 mt-2'>{$dataConsulta->created_at}</p>
                    </header>
                
<<<<<<< HEAD
                    <fieldset disabled class='rounded px-5 pt-5 pb-4 w-100' style='background-color:#ABC6E6;'>
                        <p class=' mb-3 font-weight-bold ' style='font-size:1em;'><b>{$dataConsulta['name']}</b> </p>
                        <p class=' mb-5 font-weight-bold ' style='font-size:1em;'><b>{$dataConsulta['email']}</b></p>
                        <textarea class='form-control' required name='message' rows='3' maxlength='255' >{$dataConsulta['problem_query']}</textarea>
                    </fieldset>
=======
                    <main class='rounded bg-info p-5 h-100'>
                        <p class=' mb-3 font-weight-bold ' style='font-size:1em;'><b>{$dataConsulta->name}</b> </p>
                        <p class=' mb-5 font-weight-bold ' style='font-size:1em;' ><b>{$dataConsulta->email}</b></p>
                        <p class=' mt-4 font-weight-bold ' style='font-size:1em;'><b>{$dataConsulta->message}</b></p>
                    </main>
>>>>>>> refactoring
            
                    <footer class='d-flex justify-content-center mt-4 ml-4 position-relative'>
                        <button type='button' onclick='location=`/`' class='btn p-0 position-absolute start-0'>
                            <img src='/assets/btnback.png' class='img-fluid' style='width:70%;' alt='btn-back'>
                        </button>
<<<<<<< HEAD
                        <button type='button' class='btn btn-primary btn-lg'>
                            <a style='color:white; text-decoration:none' href='?action=edit&id={$dataConsulta['id']}'>Update</a>
=======
                        <button type='button'  class='btn btn-primary btn-lg'>
                            <a href='?action=edit&id={$dataConsulta->id}'>Actualizar</a>
>>>>>>> refactoring
                        </button>
                    </footer>
                </section>

            </article >
        </main>
    </div>
";
?>

<?php require_once __DIR__ . '/../layouts/defaultFooter.php' ?>
