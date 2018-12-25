<!DOCTYPE html>
<html>
<head>
</head>

<body bgcolor=#ffe4c4>

<div class="header">

    <h2>Answer Your QUiz</h2>
</div>

<div class="content">

    <div class="content1">

        <form class="form-sign_in" method="post" id='signin' name="sign_in" action="{{route('Answer.index')}}">
            <input type="hidden" name="username" id="username" value="{{$username}}">
            @csrf
            <tbody>

            {{$questions[0]->question_name}}<br>

            <input class="radio" type="radio" value="1" name="1">{{ $questions[0]->Answer1}}<br>
            <input class="radio" type="radio" value="2" name="1">{{ $questions[0]->Answer2}}<br>
            <input class="radio" type="radio" value="3" name="1">{{ $questions[0]->Answer3}}<br>
            <input class="radio" type="radio" value="4" name="1">{{ $questions[0]->Answer4}}<br>

            <br>
            {{$questions[1]->question_name}}<br>

            <input class="radio" type="radio" value="1" name="2">{{ $questions[1]->Answer1}}<br>
            <input class="radio" type="radio" value="2" name="2">{{ $questions[1]->Answer2}}<br>
            <input class="radio" type="radio" value="3" name="2">{{ $questions[1]->Answer3}}<br>
            <input class="radio" type="radio" value="4" name="2">{{ $questions[1]->Answer4}}<br>

            <br>

            {{$questions[2]->question_name}}<br>

            <input class="radio" type="radio" value="1" name="3">{{ $questions[2]->Answer1}}<br>
            <input class="radio" type="radio" value="2" name="3">{{ $questions[2]->Answer2}}<br>
            <input class="radio" type="radio" value="3" name="3">{{ $questions[2]->Answer3}}<br>
            <input class="radio" type="radio" value="4" name="3">{{ $questions[2]->Answer4}}<br>
            <br>

            {{$questions[3]->question_name}}<br>

            <input class="radio" type="radio" value="1" name="4">{{ $questions[3]->Answer1}}<br>
            <input class="radio" type="radio" value="2" name="4">{{ $questions[3]->Answer2}}<br>
            <input class="radio" type="radio" value="3" name="4">{{ $questions[3]->Answer3}}<br>
            <input class="radio" type="radio" value="4" name="4">{{ $questions[3]->Answer4}}<br>
            <br>

            {{$questions[4]->question_name}}<br>

            <input class="radio" type="radio" value="1" name="5">{{ $questions[4]->Answer1}}<br>
            <input class="radio" type="radio" value="2" name="5">{{ $questions[4]->Answer2}}<br>
            <input class="radio" type="radio" value="3" name="5">{{ $questions[4]->Answer3}}<br>
            <input class="radio" type="radio" value="4" name="5">{{ $questions[4]->Answer4}}<br>


            <br>
            </tbody>

            <input type="submit" class="btn btn-success btn-block" id="result_button" name="result_button"
                   value="Results">
        </form>

    </div>


</div>
<div class="footer">

</div>
</body>
</html>

