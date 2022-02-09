$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

get_count_data();
get_user_data();

// count data
function get_count_data() {

    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: 'data_count',
        success: function(data) {

            let html;

            for (let i = 0; i < data.length; i++) {
                html += '<h1 class="h1">' + data[i].ID + '</h1>'
            }


            $('#data_counting').html(html.substr(9)) // substr() is to remove undefined
        },
    });

    return false;
}

// retreived data
function get_user_data() {

    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: 'user_posts',
        success: function(data) {

            let html;

            for (let i = 0; i < data.length; i++) {
                html += '<tr class="card-hover">'
                html += '<td scope="row"><div class="p-2"><img src="images/users/d3.jpg" alt="user" width="50" class="rounded-circle"></div></td>'
                html += '<td>' + data[i].heading + '</td>'
                html += '<td>' + data[i].caption + '</td>'
                html += '<td><a href="javascript:void(0)" type="button" class="btn btn-sm rounded-lg bg-indigo-600 text-white card-hover EditPost" data-user_id="' + data[i].id + '"data-heading="' + data[i].heading + '"data-caption="' + data[i].caption + '">Edit</a></td>'
                html += '<td><a href="javascript:void(0)" type="button" class="btn btn-sm rounded-lg bg-pink-600 text-white card-hover ReadPost" data-user_id="' + data[i].id + '"data-heading="' + data[i].heading + '"data-caption="' + data[i].caption + '">Read</a></td>'
                html += '<td><a href="javascript:void(0)" type="button" class="btn btn-sm rounded-lg bg-red-600 text-white card-hover DeletePost" data-user_id="' + data[i].id + '">Delete</a></td>'
                html += '</tr>'
            }

            $('#get_user_data').html(html.substr(9))
        }
    });

    return false;
}

//?
get_id_data()

function get_id_data() {

    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: 'posts',
        success: function(data) {

            let html;

            for (let i = 0; i < data.length; i++) {

                html += '<p class="gg">' + data[i].id + '</p>'
            }

            $('#user_id_post').html(html.substr(9))
        }
    });

    return false;
}

// insert data
$('#create_account').submit('click', function() {

    let heading = $('#heading').val();
    let caption = $('#caption').val();
    let user_id = $('#user_id').val();

    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: { heading: heading, caption: caption, user_id: user_id },
        url: 'insert_data',
        success: function(data) {
            get_user_data();
            get_count_data();
            $("#addAccountModal").modal('hide');
            $('#successModal').modal('show');

            clear_inputs();
        },
        error: function(data) {
            $('#errorModal').modal('show');
        }
    });

    return false;
});

// read data
$('#get_user_data').on('click', '.ReadPost', function() {

    let user_id = $(this).data('user_id');
    let name = $(this).data('name');
    let heading = $(this).data('heading');
    let caption = $(this).data('caption');

    $('#namer').val(name);
    $('#headingr').val(heading);
    $('#captionr').val(caption);
    $('#user_idr').val(user_id);

    $('#readAccountModal').modal('show');
});

// update data
$('#get_user_data').on('dblclick', '.EditPost', function() {

    let user_id = $(this).data('user_id');
    let heading = $(this).data('heading');
    let caption = $(this).data('caption');

    $('#user_idu').val(user_id);
    $('#headingu').val(heading);
    $('#captionu').val(caption);

    if (confirm("Do you want to update this?")) {

        $('#updateAccountModal').modal('show');
    }

    return false;
});

$('#update_data').submit('click', function() {

    let user_id = $('#user_idu').val()
    let heading = $('#headingu').val();
    let caption = $('#captionu').val();

    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: { user_id: user_id, heading: heading, caption: caption },
        url: 'update_data',
        success: function(data) {

            $('#successModal').modal('show');
            get_user_data();
            get_count_data();
            clear_inputs();
            $("#updateAccountModal").modal('hide');
        },
        error: function(data) {
            $('#errorModal').modal('show');
        }
    });

    return false;
});

// delete data
$('#get_user_data').on('dblclick', '.DeletePost', function() {

    let user_id = $(this).data('user_id');

    if (confirm("Do you want to delete this?")) {

        $.ajax({
            type: 'POST',
            dataType: 'json',
            data: { user_id: user_id },
            url: 'delete_data',
            success: function(data) {

                $('#successModal').modal('show');
                get_user_data();
                get_count_data();
            },
            error: function(data) {

                $('#errorModal').modal('show');
            }
        });
    }
});



// clearing inputs
function clear_inputs() {

    $('#heading').val('');
    $('#caption').val('');
}