<!DOCTYPE html>
<html>
<head>
</head>
<body bgcolor=#ffe4c4>

<h1>Welcome to Quiz</h1>


@if(Auth::check())

    <div class="float-right">

        <div class="content">
            <div class="content1">
                <form class="form-signin" method="Get" id='signin' name="signin" action="{{ route('Question.index') }}">

                    <p>Enter your Name</p>

                    <div class="form-group">
                        <input type="text" class="name" id="username" name="username" placeholder="Enter your Name" required><br>


                        <span class="help-block"></span>

                    </div>
                    @endif <br>

                    <input type="submit" class="btn btn-success btn-block" id="gobutton" name="gobutton" width="50"
                           value="Go to Quiz">

                </form>
            </div>
        </div>
    </div>

    @if(Auth::guest())

        <a href="/login" class="btn btn-info"> You need to login to start the Quiz >></a>
    @endif

</body>
</html>
