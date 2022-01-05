<?php require_once __DIR__ . "/../layouts/headbydefault.php" ?>
<?php 
    echo "
    
    <div id='generalContainer' class='w-100' style='display:flex; justify-content:center; align-items:center;'>
        <form method='POST' action='edit' 
        class='w-75 pt-5 pb-5 mt-4 d-flex justify-content-center align-items-center flex-column'
        style='background-color:#6B93C6; height:77vh; border-radius: 20px;'>

<<<<<<< HEAD
            <div id='formContainer' class='d-flex w-50 justify-content-center align-items-center flex-column'>
                <p class='fs-1 mb-2' style='color:white;'>Consult Edit</p>

                <fieldset class='w-75' disabled>
                    <section class='mb-3'>
                        <label class='mb-1' style='display:flex; justify-content:start; font-size:1.5em; color:white;'>Name:</label>
                        <input type='text' class='form-control' name='name' placeholder='Name/Surname' value='{$idConsulta['name']}'>
                    </section>
                    
                    <section class='mb-3'>
                        <label class='mb-1' style='display:flex; justify-content:start; font-size:1.5em; color:white;'>Title:</label>
                        <input type='title' class='form-control' name='querytitle' aria-describedby='emailHelpId'
                        placeholder='title' value='{$idConsulta['title_query']}'>
                    </section>
                </fieldset>

                <input type='hidden' name='id' value='{$idConsulta['id']}'>

                <section class='mb-3 w-75'>
                    <label class='mb-1' style='display:flex; justify-content:start; font-size:1.5em; color:white;'>Consult:</label>
                    <textarea class='form-control' required name='message' rows='3' maxlength='255' >{$idConsulta['problem_query']}</textarea>
                </section>
                
                <section>
                    <button type='button' onclick='location=`/`' class='btn p-0'>
                        <img src='/assets/btnback.png' class='img-fluid' style='width:70%;' alt='btn-back'>
                    </button>

                    <button type='submit' class='btn btn-primary mb-1 me-3'>UPDATE</button>
                </section>
                
            </div id='formContainer'>
        </form>
    </div id='generalContainer'>
=======
            <fieldset disabled>
                <div class='mb-3'>
                    <input type='text' class='form-control' name='name' placeholder='Name/Surname' value='{$idConsulta->name}'>
                </div>
                
                <div class='mb-3'>
                    <input type='title' class='form-control' name='querytitle' aria-describedby='emailHelpId'
                    placeholder='title' value='{$idConsulta->title}'>
                </div>
            </fieldset>

            <input type='text' name='id' value='{$idConsulta->id}'>

            <div class='mb-3'>
                <textarea class='form-control' required name='message' rows='3' >
                    {$idConsulta->message}
                </textarea>
            </div>
            
            <button type='submit' class='btn-general'>UPDATE</button>
            <div> OR </div>
            <button onclick='location=`/checklist`' class='btn-general'>CANCEL</button>
        </div>
        <div class='col-lg-3 col-sm-2'></div>
    </form>
>>>>>>> refactoring
    ";
    ?>

<?php require_once __DIR__ . "/../layouts/defaultFooter.php" ?>

