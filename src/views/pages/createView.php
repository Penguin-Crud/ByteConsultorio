<?php require_once __DIR__ . "/../layouts/headbydefault.php" ?>

<div class="w-100" style="display:flex; justify-content:center; align-items:center;"> 
    <form  method="POST" action="checklist" 
    class='w-75 pt-5 pb-5 "d-flex justify-content-center align-items-center' 
    style="background-color:#6B93C6; height:77vh; ">
        <div class="d-flex justify-content-center align-items-center flex-column">

            <div class="mb-3 w-75">
                <input id="inputName" type="text" class="form-control" required name="name" placeholder="Name/Surname">
            </div>

            <div class="mb-3 w-75">
                <input id="inputEmail" type="email" class="form-control" required name="email" placeholder="name@example.com">
            </div>

            <div class="mb-3 w-75">
                <input id="inputQueryTitle" type="title" class="form-control" required name="title_query" aria-describedby="emailHelpId"
                placeholder="title">
            </div>

            <div class="mb-3 w-75">
                <textarea class="form-control" required name="problem_query" rows="3"  placeholder="Message..."></textarea>
            </div>
            <div>
                <button type='button' onclick='location=`/`' class='btn p-0'>
                    <img src='/assets/btnback.png' class='img-fluid' style='width:70%;' alt='btn-back'>
                </button> 
                <button type="submit" class="btn btn-primary mb-1">Submit</button>
            </div>
            
        </div>
    </form>
</div>


<?php require_once __DIR__ . "/../layouts/defaultFooter.php" ?>
