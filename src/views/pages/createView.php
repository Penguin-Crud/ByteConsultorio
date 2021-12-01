<?php require_once __DIR__ . "/../layouts/headbydefault.php" ?>

<form  method="POST" action="checklist" 
class='w-75 pt-5 pb-5 "d-flex justify-content-center align-items-center' 
style="background-color:#6B93C6;height:77vh;">
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
            <textarea class="form-control" name="problem_query" rows="3" required placeholder="Message..."></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        
    </div>
</form>

<?php require_once __DIR__ . "/../layout/defaultFooter.php" ?>
