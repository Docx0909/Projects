$(document).ready(function() {


    // function getUrlVars() {
    //     var vars = [],
    //         hash;
    //     var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    //     for (var i = 0; i < hashes.length; i++) {
    //         hash = hashes[i].split('=');
    //         vars.push(hash[0]);
    //         vars[hash[0]] = hash[1];
    //     }
    //     return vars;
    // }

    // Logout function
    $("#logoutbtn").on('click', function() {
        var Boolean = confirm("Are you sure? ");


        if (Boolean == true) {
            $.post('http://192.168.1.59/tsuper/www/php/logout.php',
                function(response) {
                    if (response == 'success') {
                        alert("successfully logout!");
                        localStorage.loginstatus = "false";
                        var username = localStorage.removeItem("");
                        localStorage.removeItem("myValue", username);
                        window.location = 'login.html', true;
                    }
                })

        } else {
            alert("Canceled!");
        }
    });


});