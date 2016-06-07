(function () {
    "use strict"

    function confirmDelete(event) {
        var message = confirm("Are you sure you want to delete?");
        if (message){
        } else {
            return false;
        }

    }

    $('#delete-form').on('submit', confirmDelete);

})();
