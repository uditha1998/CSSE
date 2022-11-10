$(document).ready(function () {

    $('#delete').click(function () {



        var id = $(this).attr("data-id");



        swal({

            title: "Are you sure?",

            text: "You will not be able to recover this Purchase Order",

            type: "warning",

            showCancelButton: true,

            confirmButtonColor: "#DD6B55",

            confirmButtonText: "Yes, delete it!",

            closeOnConfirm: false

        }, function () {



            $.ajax({

                url: "controller/purchase-order.php",

                type: "POST",

                data: {id: id, option: 'delete'},

                dataType: "JSON",

                success: function (jsonStr) {

                    if (jsonStr.status == "true") {



                        swal({

                            title: "Deleted!",

                            text: "Purchase Order has been deleted.",

                            type: 'success',

                            timer: 2000,

                            showConfirmButton: false

                        }, function () {

                            setTimeout(function () {

                                window.location.replace("manage-purchase-order.php");

                            }, 1500);

                        });






                    }

                }

            });

        });

    });

    $('.update').click(function () {



        var status = $(this).attr("data-id");
        var id = $(this).attr("data-id2");



        swal({

            title: "Are you sure?",

            text: "You will Update The Status Of The Purchase Order",

            type: "warning",

            showCancelButton: true,

            confirmButtonColor: "#DD6B55",

            confirmButtonText: "Yes, Update it!",

            closeOnConfirm: false

        }, function () {



            $.ajax({

                url: "controller/purchase-order.php",

                type: "POST",

                data: {id: id, status: status, option: 'update'},

                dataType: "JSON",

                success: function (jsonStr) {

                    if (jsonStr.status) {



                        swal({

                            title: "Updated!",

                            text: "Status of Purchase Order has been updated.",

                            type: 'success',

                            timer: 2000,

                            showConfirmButton: false

                        }, function () {

                            setTimeout(function () {

                                window.location.replace("manage-purchase-order.php");

                            }, 1500);

                        });






                    }

                }

            });

        });

    });

});