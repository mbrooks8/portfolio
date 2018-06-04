</body>

<script src="./assets/js/hestia.min.js" crossorigin="anonymous"></script>

<script>
    //Stuff for showing and hiding things
    initInput();
    function showSignUp()
    {
        var notHidden = $(".notHidden");
        var hidden = $(".hidden");
        notHidden.addClass('hidden').removeClass('notHidden');
        hidden.addClass('notHidden').removeClass('hidden');
    }
    function showSignIn()
    {
        var notHidden = $(".notHidden");
        var hidden = $(".hidden");
        notHidden.addClass('hidden').removeClass('notHidden');
        hidden.addClass('notHidden').removeClass('hidden');
    }
    //Code for signing out
    function signOut(){
        $.ajax({
            method: "POST",
            url: "./database/user/signOut.php"
        })
            .done(function( response ) {
            userType();
        });
    };
</script>
<script>
    //Code for signing up for our service\
    function signUp(){
        $.ajax({
            method: "POST",
            url: "./database/user/addUser.php",
            data: { email: $("#email").val(), password: $("#password").val(), passwordVerify: $("#passwordConfirm").val()}
        })
            .done(function( response ) {
            switch(response){
                case "0":
                    console.log( "No errors" );
                    break;
                case "11":
                    $("#response").html("Password too short");
                    if(!$("#modalShadow")[0]){$("#showResponse").click();}
                    break;
                case "12":
                    $("#response").html("Passwords did not match");
                    if(!$("#modalShadow")[0]){$("#showResponse").click();}
                    break;
                case "13":
                    $("#response").html("email already has an account");
                    if(!$("#modalShadow")[0]){$("#showResponse").click();}
                    break;
                default:
                    $("#response").html("we dont know what went wrong");
                    if(!$("#modalShadow")[0]){$("#showResponse").click();}
            }
        });
    };
</script>
<script>
    //Code for signing in
    $(function(){
        $(".text").keypress(function (e) {
            if (e.keyCode == 13) {

                if($("#confirm").hasClass("hidden"))
                {
                    if(this.id == "password")
                    {
                        signIn();
                    }
                }else
                {
                    if(this.id == "passwordConfirm")
                    {
                        signUp();
                    }
                }
            }
        });
    });
    function signIn(){
        $.ajax({
            method: "POST",
            url: "./database/user/signIn.php",
            data: { email: $("#email").val(), password: $("#password").val()}
        })
            .done(function( response ) {
            switch(response){
                case "0":
                    userType();
                    break;
                case "12":
                    $("#response").html("password did not match");
                    if(!$("#modalShadow")[0]){$("#showResponse").click();}
                    break;
                case "14":
                    $("#response").html("could not find username");
                    if(!$("#modalShadow")[0]){$("#showResponse").click();}
                    break;
                default:
                    $("#response").html("we dont know what went wrong");
                    if(!$("#modalShadow")[0]){$("#showResponse").click();}
            }
        });
    };
</script>
<script>

    showLoginStatus();
    //Code for preventing users from having to log in multiple times
    function showLoginStatus()
    {
        $.ajax({
            method: "POST",
            url: "./database/utility/userType.php"
        })
            .done(function( response ) {
            console.log(response);
            switch(response){
                case "21":
                    //case logged in
                    break;
                case "26":
                    $("#loginStatus").html('You are already logged in, <a href="#!" onclick="userType()">go to dashboard</a><br>');
                    break;
                case "25":
                    $("#loginStatus").html('You are already logged in, <a href="#!" onclick="userType()">go to dashboard</a><br>');
                    break;
                default:
                    $("#type").html("");
            }
        });
    }
    //This is how we redirect people
    function userType()
    {
        $.ajax({
            method: "POST",
            url: "./database/utility/userType.php"
        })
            .done(function( response ) {
            console.log(response);
            switch(response){
                case "21":
                    $("#type").html("You are not logged in!!");
                    break;
                case "26":
                    window.location = "./tenant";
                    break;
                case "25":
                    window.location = "./owner";
                    break;
                default:
                    $("#type").html("");
            }
        });
    }
    $( document ).ready(function() {
        initModal();
    });
</script>

</html>
