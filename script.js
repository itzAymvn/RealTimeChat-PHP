$(document).ready(function () {
    // document ready
    function loadData() {
        // load data function
        $.ajax({
            url: "./MessagesActions/load-messages.php",
            method: "POST",
            data: {
                sender: name, // name is the sender name from the form input
            },
            success: function (data) {
                // success function
                $("#messages").html(data); // load data
            },
        }).done(function () {
            var btns = Array.from(
                document.getElementsByClassName("deletePost") // get all delete buttons from the page
            );
            btns.forEach((btn) => {
                // loop through the buttons
                btn.addEventListener("click", () => {
                    // add event listener to each button
                    $.ajax({
                        url: "./MessagesActions/delete-message.php", // delete message php file
                        method: "POST",
                        data: {
                            id: btn.value, // get the id of the message from the button value
                        },
                        success: function (data) {
                            loadData(); // reload data
                        },
                    });
                });
            });
        });
    }

    var name = prompt("Enter your name: "); // prompt the user to enter his name
    var loading = setInterval(loadData, 500); // load data every 500ms

    $("#submit").click(function (e) {
        // submit button click event
        e.preventDefault(); // prevent default
        var message = $("#msg").val(); // get the message from the form input
        if (name == "" || message == "") {
            // check if the name or message is empty
            alert("No empty fields allowed");
        }
        name = name.trim().toLowerCase(); // trim and lowercase the name
        $.post("./MessagesActions/insert-message.php", {
            name: name, // name is the sender name from the form input
            message: message, // message is the message from the form input
        }).done(function () {
            window.scrollTo(0, document.body.scrollHeight); // scroll to the bottom of the page
        });
        $("#submit, #msg").attr("disabled", true); // disable the submit button and the message input
        var timeleft = 5;
        var coolDown = setInterval(function () {
            // cool down timer for 5 seconds
            if (timeleft <= 0) {
                clearInterval(coolDown);
                $("#submit, #msg").attr("disabled", false);
                $("#msg").focus();
                timeleft = "";
            }
            document.getElementById("countDown").textContent = timeleft;
            timeleft -= 1;
        }, 1000);

        loadData();
        $("#msg").val(""); // clear the message input
    });
});
