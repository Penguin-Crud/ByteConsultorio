<?php require_once __DIR__ . "/../layouts/headbydefault.php" ?>

<div id='generalContainer' class="w-100" style="display:flex; justify-content:center; align-items:center;"> 
    <form  method="POST" action="checklist" 
    class='w-75 pt-5 pb-5 mt-4 d-flex justify-content-center align-items-center' 
    style="background-color:#6B93C6; height:77vh; border-radius: 20px;">
        
        <main class="d-flex justify-content-center align-items-center flex-column w-50">
            <p class="fs-1 mb-2" style="color:white;">Consult Create</p>

            <section class="mb-3 w-100">
                <label class='mb-1' style='display:flex; justify-content:start; font-size:1.5em; color:white;'>Name:</label>
                <input id="inputName" type="text" class="form-control" required name="name" placeholder="Name/Surname">
            </section>

            <section class="mb-3 w-100">
                <label class='mb-1' style='display:flex; justify-content:start; font-size:1.5em; color:white;'>Email:</label>
                <input id="inputEmail" type="email" class="form-control" required name="email" placeholder="name@example.com">
            </section>

            <section class="mb-3 w-100">
                <label class='mb-1' style='display:flex; justify-content:start; font-size:1.5em; color:white;'>Title:</label>
                <input id="inputQueryTitle" type="title" class="form-control" required name="title_query" aria-describedby="emailHelpId"
                placeholder="title">
            </section>

            <section class="mb-3 w-100">
                <label class='mb-1' style='display:flex; justify-content:start; font-size:1.5em; color:white;'>Consult:</label>
                <textarea class="form-control" required name="problem_query" rows="3" maxlength="255" placeholder="Message..."></textarea>
            </section>
            <section>
                <button type='button' onclick='location=`/`' class='btn p-0'>
                    <img src='/assets/btnback.png' class='img-fluid' style='width:70%;' alt='btn-back'>
                </button> 
                <button type="submit" class="btn btn-primary mb-1 me-3">Submit</button>
            </section>
            
        </main>
    </form>
</div id='generalContainer'>


<?php require_once __DIR__ . "/../layouts/defaultFooter.php" ?>
