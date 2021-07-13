$(document).ready(function(){
    //envio do formulário de cadastro
    // $("#user-register").submit(function(e){
    //     e.preventDefault();
    //     $("input").removeClass("red");
    //     var dados = $(this).serialize();
	// 	$.ajax({
	// 		url: "../../controller/users/AddUserController.php",
    //         type: "POST",
	// 		data: dados,
	// 		success: function(response){
    //             switch (response) {
    //                 case "cpf":
	// 				    $("input[name=cpf]").addClass("red");
    //                     alert("CPF já cadastrado");
    //                     break;
    //                 case "login":
	// 				    $("input[name=login]").addClass("red");
    //                     alert("Login já cadastrado");
    //                     break;
    //                 default:
    //                     window.location.href="../../views/users/user_list.php";
    //                     break;
    //             }
	// 		}
	// 	});
    // });
    //envio do formulário de login
    $("#login").submit(function(e){
        e.preventDefault();
        $("input").removeClass("red");
        let dados = $(this).serialize();
        let login = $(this).find("input[name=login]").val()
        let password = $(this).find("input[name=password]").val()
		$.post("../../controller/users/LoginController.php", {
			login,
            password
		}).done (function(response){
            console.log(response)
            $("#showErrorMessage #errorMessage").html("")
            let getResponse = JSON.parse(response)
            if (getResponse.status == "error") {
                $("#showErrorMessage #errorMessage").html(`${getResponse.message}`)
                $("#showErrorMessage").modal("show")
            }
            else {
                window.location.href="../../../../index.php";
            }
        });
    });
    // $("#user-edit").submit(function(e){
    //     e.preventDefault();
    //     $("input").removeClass("red");
    //     var dados = $(this).serialize();
	// 	$.ajax({
	// 		url: "../../controller/users/UserEditController.php",
    //         type: "POST",
	// 		data: dados,
	// 		success: function(response){
    //             switch (response) {
    //                 case "senha atual incorreta":
	// 				    $("input[name=password]").addClass("red");
    //                     alert(response);
    //                     break;
    //                 case "senhas não correspondem":
	// 				    $("input[name=newpassword1]").addClass("red");
	// 				    $("input[name=newpassword2]").addClass("red");
    //                     alert(response);
    //                     break;
    //                 default:
    //                     window.location.href="user_list.php";
    //                     break;
    //             }
	// 		}
	// 	});
    // });
});