(function () {
    "use strict"

    function confirmDelete(event) {
        var message = confirm("Are you sure you want to delete?");
        if (message){
            console.log('confirmed!');
        } else {
            console.log('not confirmed!');
            return false;
        }

    }

    $('#delete-form').on('submit', confirmDelete);

    console.log('js working');
})();
