<?php require_once __DIR__ . "/../layouts/headbydefault.php" ?>


    <h2>Edit Your Query</h2>
    <form method="POST" action="edit.php" class="row">
        <div class="col-lg-3 col-sm-2"></div>
        <div class="col-lg-6 col-sm-8">
            <fieldset disabled>
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Name/Surname">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <input type="title" class="form-control" name="querytitle" aria-describedby="emailHelpId"
                        placeholder="title">
                </div>
            </fieldset>
            <div class="mb-3">
                <textarea class="form-control" name="message" rows="3" placeholder="Message..."></textarea>
            </div>
            <button type="submit" class="btn-general">UPDATE</button>
            <div> OR </div>
            <button class="btn-general">CANCEL</button>
        </div>
        <div class="col-lg-3 col-sm-2"></div>
    </form>
</body>

</html>