$('#submit-role').click(function () {
    $.ajax({
        type: "POST",
        dataType: 'JSON',
        url: '/profile/' + $("#navbarDropdown").text().trim() + '/role',
        data: {
            "role": $("#inputRoles").find('option:selected').attr('value'),
            "user": $("#inputUser").find('option:selected').attr('value')
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });

})

