$('#submit-role').click(function () {
    $.ajax({
        type: "PUT",
        dataType: 'JSON',
        url: '/role/' + $("#inputUser").find('option:selected').attr('value'),
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

});

