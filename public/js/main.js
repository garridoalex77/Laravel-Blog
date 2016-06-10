(function () {
    "use strict"

    function confirmDelete(event) {
        var message = confirm("Are you sure you want to delete?");
        if (message){
        } else {
            return false;
        }

    }
    // modal code
    // $('#delete-form').on('submit', confirmDelete);

    // $('#myModal').on('shown.bs.modal', function () {
    //     $('#myInput').focus()
    // })

})();
