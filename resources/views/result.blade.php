<!DOCTYPE html>
<html>

<body>

<div class="header">
    <h1>Score</h1>
</div>


<div class="content">
    <div class="content1">
        <form class="form-sign_in" method="post" action="{{'Question.store'}}">
            @csrf
            <tbody>

            <br></br>Name: <?php echo "$name"; ?> <br>
            Score: <?php echo "$result"; ?>
            <br>

            <br>

            Best Performer:
            <tbody>
            <?php echo "$bestscore";?><br>
            </tbody>

        </form>
    </div>
</div>

</body>
</html>

