@extends('templates.layout') @section('content')
<form id="login_form">
    <label for="username">Username:</label>
    <input type="text" name="name" id="name">
    <button type="button" onclick="btn()" name="submit">submit</button>
</form>

<!--sample -->
<!--sample-->

<script>
    //    $("#login_form").on("submit", function(event) {
    function btn() {
        $.ajax({
            url: "insert",
            type: "get",
            data: $("#login_form").serialize(),
            success: function(data) {

                alert(data);
            },
            error: function(data) {
                alert("error");
            }
        });

    }

</script>
@stop
