// $('.submit').click(function (e)
// {
//     e.preventDefault();

//     let name = $('input[name="name"]').val();
//     let subject = $('input[name="subject"]').val();
//     let email = $('input[name="email"]').val();
//     let massege = $('input[name="massege"]').val();

//     $.ajax({
//         url: '../controller/processingForm.php',
//         type: 'POST',
//         dataType: 'text',
//         data: {
//             name: name,
//             subject: subject,
//             email: email,
//             massege: massege
//         },
//         succes: function (data) {
//             console.log(data);
//         }
//     });

// });

let submit = document.querySelector('#submit');
submit.onclick = function(){
    let dateUser = document.querySelectorAll('input');
    let name = dateUser[0].value;
    let phone = dateUser[1].value;
    let email = dateUser[2].value;
    let message = document.querySelector('#message').value;

    if (name != "" && phone != "" && email != "" && message != ""){
        $.ajax({
            url: '../controller/processingForm.php',
            type: 'POST',
            cache: false,
            data: {
                'name': name,
                'phone': phone,
                'email': email,
                'message': message,
            },
            dataType: 'html',
            beforeSend: function(){
                $("#submit").prop("disabled", true);
            },
            success: function(data){
                if (!data){
                    alert('Были ошибки, сообщение не отправлено')
                } else {
                    $("#mailForm").trigger("reset");
                    alert(data);
                    $("#submit").prop("disabled", false);
                }
            }
        });
    }
}