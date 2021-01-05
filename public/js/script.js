$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on('click', '.post_like' , function () {
        let post_id = $(this).parents('.post_item').attr('data-id');
        let user_id = $(this).parents('.post_list').attr('user-id');
        $.ajax({
            type: "POST",
            url: "like",
            data: {post_id: post_id, user_id: user_id},
            success: (response) => {
                if(response){
                    $(this).find('i').css('color', 'black');
                    $(this).addClass('post_dislike');
                    $(this).removeClass('post_like');
                }
            }
        });
    });

    $(document).on('click', '.post_dislike' , function () {
        let post_id = $(this).parents('.post_item').attr('data-id');
        let user_id = $(this).parents('.post_list').attr('user-id');
        $.ajax({
            type: "POST",
            url: "dislike",
            data: {post_id: post_id, user_id: user_id},
            success: (response) => {
                if(response){
                    $(this).find('i').css('color', 'lightgrey');
                    $(this).addClass('post_like');
                    $(this).removeClass('post_dislike');
                }
            }
        });
    });
});