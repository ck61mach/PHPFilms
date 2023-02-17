$("#formSearchFilm").validate({
    rules: {
        filmTitle: {
            required: true,
            minlength: 2
        }
    },
    messages: {
        filmTitle: {
            required: 'Enter the name of the desired title!',
            minlength: 'Enter at least two characters for the desired title!'
        }
    }
});