<?php require_once __DIR__ . "/../layouts/headbydefault.php" ?>


<form method="POST" action="checklist">
    <div class="mb-3">

    <input id="inputName" type="text" class="form-control" required name="name" placeholder="Name/Surname">
    </div>
    <div class="mb-3">

        <input id="inputEmail" type="email" class="form-control" required name="email" placeholder="name@example.com">
    </div>
    <div class="mb-3">

        <input id="inputQueryTitle" type="title" class="form-control" required name="title_query" aria-describedby="emailHelpId"
            placeholder="title">
    </div>
    <div class="mb-3">

        <textarea class="form-control" name="problem_query" rows="3" required placeholder="Message..."></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>

</html>