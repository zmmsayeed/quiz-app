@extends('layouts.master')
@section('title', 'Add Questions')
@section('content')


<form method="POST" action="/questions">
{{ csrf_field() }}   
<div style="background:white;padding:30px;border:1px solid black;">    
    <h1 style="color:black;">Add Question</h1>
    <br>
    <p>
        <label style="margin-right:40px;">Quiz topic:</label>
        <select name="topic" required>
            <option value="1">General Aptitude</option>
            <option value="2">Verbal and Reasoning</option>
            <option value="3">Current Affairs and GK</option>
            <option value="4">Programming</option>
        </select>
    </p>

    <p>
        <label style="margin-right:15px;">Question Text: </label>
        <input type="text" name="question_text" required>
    </p>
    <p>
        <label style="margin-right:50px;">Choice 1:</label>
        <input type="text" name="choice1">
        <input type="radio" value="1" name="choice1_is_correct"> Correct </input>        
        <input type="radio" value="0" name="choice1_is_correct"> Incorrect </input>
    </p>

    <p>
        <label style="margin-right:50px;">Choice 2:</label>
        <input type="text" name="choice2">
        <input type="radio" value="1" name="choice2_is_correct"> Correct </input>        
        <input type="radio" value="0" name="choice2_is_correct"> Incorrect </input>
    </p>
    <p>
        <label style="margin-right:50px;">Choice 3:</label>
        <input type="text" name="choice3">
        <input type="radio" value="1" name="choice3_is_correct"> Correct </input>        
        <input type="radio" value="0" name="choice3_is_correct"> Incorrect </input>
    </p>
    <p>
        <label style="margin-right:50px;">Choice 4:</label>
        <input type="text" name="choice4">
        <input type="radio" value="1" name="choice4_is_correct"> Correct </input>        
        <input type="radio" value="0" name="choice4_is_correct"> Incorrect </input>
    </p>
    <!-- <p>
        <label>Correct Choices Number: </label>
        <input type="number" name="correct_choice">
    </p> -->
    <br>
    <p>
        <input type="submit" name="send" value="Submit" class="btn btn-default">
    </p>
</div>
</form>

@endsection