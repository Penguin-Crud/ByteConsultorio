<?php require_once __DIR__ . "/../layouts/headbydefault.php" ?>
<?php 
    echo "
    <h2>Edit Your Query</h2>
    <div class='w-100' style='display:flex; justify-content:center; align-items:center;'>
        <form method='POST' action='edit' 
        class='w-75 pt-5 pb-5 d-flex justify-content-center align-items-center flex-column'
        style='background-color:#6B93C6; height:77vh; '>

            <div class='d-flex justify-content-center align-items-center flex-column'>
            
                <fieldset disabled>
                    <div class='mb-3'>
                        <input type='text' class='form-control' name='name' placeholder='Name/Surname' value='{$idConsulta['name']}'>
                    </div>
                    
                    <div class='mb-3'>
                        <input type='title' class='form-control' name='querytitle' aria-describedby='emailHelpId'
                        placeholder='title' value='{$idConsulta['title_query']}'>
                    </div>
                </fieldset>

                <input type='hidden' name='id' value='{$idConsulta['id']}'>

                <div class='mb-3'>
                    <textarea class='form-control' required name='message' rows='3' >
                        {$idConsulta['problem_query']}
                    </textarea>
                </div>
                
                <div>
                    <button type='button' onclick='location=`/`' class='btn p-0'>
                        <img src='/assets/btnback.png' class='img-fluid' style='width:70%;' alt='btn-back'>
                    </button>

                    <button type='submit' class='btn btn-primary mb-1'>UPDATE</button>
                </div>
                
            </div>
        </form>
    </div>
    ";
    ?>
</body>

</html>

