<?php require_once __DIR__ . "/../layouts/headbydefault.php" ?>


<form method="POST" action="checklist">
    <div class="mb-3">

    <input id="inputName" type="text" class="form-control" name="name" placeholder="Name/Surname">
    </div>
    <div class="mb-3">

        <input id="inputEmail" type="email" class="form-control" name="email" placeholder="name@example.com">
    </div>
    <div class="mb-3">

        <input id="inputQueryTitle" type="title" class="form-control" name="title_query" aria-describedby="emailHelpId"
            placeholder="title">
    </div>
    <div class="mb-3">

        <textarea class="form-control" name="problem_query" rows="3" placeholder="Message..."></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>

</html>