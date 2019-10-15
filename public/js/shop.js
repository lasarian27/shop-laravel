$('#submit-role').click(function () {
    $.ajax({
        type: "PUT",
        dataType: 'JSON',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/role/' + $("#inputUser").find('option:selected').attr('value'),
        data: {
            "role": $("#inputRoles").find('option:selected').attr('value'),
            "user": $("#inputUser").find('option:selected').attr('value')
        }
    });
});
