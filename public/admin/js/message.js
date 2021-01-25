//


let old = '';


$(".checkbox").change(function () {
    let id = $(this).val();
    let data = $(this)

    if (!this.checked) {

        $.ajax({
            url: '/cpanel/lang/status',
            method: 'get',
            data: {id: id, X: 'X'},
            dataType: 'json',
            success: function (response) {
                if (response) {
                    if (response == 'err') {
                        old = id;
                        $(data).prop('checked', true);
                        $(".note" + id).remove();
                        let creat = document.createElement('p')
                        creat.setAttribute('class', 'note' + id);

                        document.getElementById('checkboxXV' + id).appendChild(creat).innerHTML = 'THIS LANG DEFAULT'
                        $(".note" + id).css({
                            "color": "green",
                            'float': 'right'
                        });
                        return
                        // setTimeout(function(){   }, 10);
                    }
                    $(".note" + id).remove();
                    let creat = document.createElement('p')
                    creat.setAttribute('class', 'note' + id);

                    document.getElementById('checkboxXV' + id).appendChild(creat).innerHTML = 'THIS LANG INACTIVE'
                    $(".note" + id).css({
                        "color": "red",
                        'float': 'right'
                    });
                }
            },
            error: function (error) {
                console.log('error')
            }
        });
    } else if (this.checked) {

        $.ajax({
            url: '/cpanel/lang/status',
            method: 'get',
            data: {id: id, X: 'Y'},
            dataType: 'json',
            success: function (response) {
                if (response) {

                    $(".note" + id).remove();

                    let creat = document.createElement('p')
                    creat.setAttribute('class', 'note' + id);


                    document.getElementById('checkboxXV' + id).appendChild(creat).innerHTML = 'THIS LANG ACTIVE'

                    $(".note" + id).css({
                        "color": "blue",
                        'float': 'right'
                    });


                }
            },
            error: function (error) {
                console.log('error')
            }
        });
    }


});


$("#showarchive").click(function () {
    $("#archive").show()
    $("#showarchive").hide()
    $("#alllang").hide()
})

$("#showtable").click(function () {
    $("#archive").hide()
    $("#showarchive").show()
    $("#alllang").show()
})


$(".def").change(function () {

    let id = $(this).val();
    console.log(old)
    if (this.checked) {

        $.ajax({
            url: '/cpanel/lang/defchecked',
            method: 'get',
            data: {id: id},
            dataType: 'json',
            success: function (response) {
                if (response) {
                    if (old != '') {

                        $(".note" + old).remove();

                        let creat = document.createElement('p')
                        creat.setAttribute('class', 'note' + old);


                        document.getElementById('checkboxXV' + old).appendChild(creat).innerHTML = 'THIS LANG ACTIVE'

                        $(".note" + old).css({
                            "color": "blue",
                            'float': 'right'
                        });
                    }
                    $("#check" + id).prop('checked', true);

                    $(".note" + id).remove();

                    let creat = document.createElement('p')
                    creat.setAttribute('class', 'note' + id);


                    document.getElementById('checkboxXV' + id).appendChild(creat).innerHTML = 'THIS LANG ACTIVE'

                    $(".note" + id).css({
                        "color": "blue",
                        'float': 'right'
                    });
                }
            },
            error: function (error) {
                console.log('error')
            }
        });
    }

});










    $('.Tinput').click(function () {
        let inp= $(this)

    $(this).keyup(function () {
        let key_id =$(this).attr('id')
        let lang_val =$(this).attr('id-name')
        let val_word =$(this).val()
// console.log(key_id)
// console.log(lang_val)
// console.log(val_word)
        $.ajax({
            url: '/cpanel/lang/library',
            method: 'get',
            data: {key_id:key_id,lang_val:lang_val,val_word:val_word},
            dataType: 'json',
            success: function (response) {
                // alert(response)
                if (response) {
                    let k=true;
                    if (response == 'err'){
                         inp.css({'border':'1px solid red'})

                    }else {
                        inp.css({'border':'none'})

                    }

                }
            },
            error: function (error) {
                console.log('error')
            }
        });


    })
})













