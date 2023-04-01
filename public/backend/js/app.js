$(document).ready(function() {

    // Varalation construct
    var subMenu = $('.nav-link.active .sub-menu');
    var arrownMenu = $('#sidebar-menu .arrow');
    let checkAll = $('#checkAll');
    var checkItem = $('.checkItem');
    let btnAction = $("input[name='btn-search']");

    /*
    * *
    * * SIDEBAR MENU DASHBOARD
    * *
    */
    subMenu.slideDown();

    if(isExist(arrownMenu)) {
        arrownMenu.click(function() {
            $(this).parents('li').children('.sub-menu').slideToggle();
            $(this).toggleClass('fa-angle-right fa-angle-down');
        });
    }


    /**
    ** CHECKED FORM **
    **/
//    if(isExist(checkAll) && isExist(checkItem)) {
//     if(checkAll.prop('checked') === true || checkItem.prop('checked') === true) {
//          btnAction.prop('disabled', false);
//     } else {
//          btnAction.prop('disabled', true);
//     }
//    }
//     if(isExist(checkAll)) {
//         checkAll.click(function() {
//             switch (checkAll.prop('checked')) {
//                 case true:
//                     checkItem.prop('checked', true);
//                     break;

//                 case false:
//                     checkItem.prop('checked', false);
//                 default:
//                     break;
//             }
//         });
//     }

    // if(isExist(checkItem)) {
    //     checkItem.change(function(e) {
    //         e.prevenDefault;
    //         // if($(this).prop('checked') === true) {
    //         //     btnAction.prop('disabled', false);
    //         // } else {
    //         //     btnAction.prop('disabled', true);
    //         // }
    //         console.log($(this).prop('checked'));
    //         if($("input[name='check_item[]']:checked").length == checkItem.length) {
    //             checkAll.prop('checked', true);
    //         } else {
    //             checkAll.prop('checked', false);
    //         }

    //         // console.log($("input[name='check_item[]']:checked").length);
    //         // if($("input[name='check_item[]']:checked").length == 0 && checkAll.prop('checked', false)) {
    //         //     btnAction.prop('disabled', true);
    //         // } else {
    //         //     btnAction.prop('disabled', false);
    //         // }
    //     });
    // }


    checkAll.change(function() {
            if($(this).prop('checked') === true) {
                checkItem.prop('checked', true)
                btnAction.prop("disabled", false);
            } else {
                checkItem.prop('checked', false);
                btnAction.prop("disabled", true);
            }
        });

        checkItem.change(function() {
            checkItem.length === $("input[name='check_item[]']:checked").length ? checkAll.prop('checked', true) : checkAll.prop('checked', false)
            $("input[name='check_item[]']:checked").length > 0 ? btnAction.prop("disabled", false): btnAction.prop("disabled", true);
        });

});