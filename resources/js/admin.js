


require('./bootstrap');

$().ready(function(){

    pizzaFormValidator($('#pizzaCreateForm'));
    pizzaFormValidator($('#pizzaEditForm'));

    ingredientFormValidator($('#ingredientCreateForm'));
    ingredientFormValidator($('#ingredientEditForm'));

    function pizzaFormValidator(form){
        form.submit(function(event){
            let errors = false;
            $('#error-nome').hide();
            $('#error-descrizione').hide();
            $('#error-prezzo').hide();
            $('#error-ingredients').hide();

            // Campo nome
                if($('#nome').val().length === 0){
                    $('#error-nome').show('slow').text('Il campo nome è obbligatorio').fadeOut(4000);
                    $('#nome').addClass('is-invalid');
                    errors = true;
                }
                else if($('#nome').val().length < 3){
                    $('#error-nome').show('slow').text('Il campo nome deve avere minimo 3 caratteri').fadeOut(4000);
                    $('#nome').addClass('is-invalid');
                    errors = true;
                }
                else if($('#nome').val().length > 50){
                    $('#error-nome').show('slow').text('Il campo nome può avere massimo 50 caratteri').fadeOut(4000);
                    $('#nome').addClass('is-invalid');
                    errors = true;
                }else{
                    $('#nome').removeClass('is-invalid')
                }
            //

            // Campo descrizione
                if($('#descrizione').val().length === 0){
                    $('#error-descrizione').show('slow').text('Il campo descrizione è obbligatorio').fadeOut(4000);
                    $('#descrizione').addClass('is-invalid');
                    errors = true;
                }
                else if($('#descrizione').val().length < 5){
                    $('#error-descrizione').show('slow').text('Il campo descrizione deve avere minimo 5 caratteri').fadeOut(4000);
                    $('#descrizione').addClass('is-invalid');
                    errors = true;
                }else{
                    $('#descrizione').removeClass('is-invalid')
                }
            //

            // Campo prezzo
                if($('#prezzo').val().length === 0){
                    $('#error-prezzo').show('slow').text('Il campo prezzo è obbligatorio').fadeOut(4000);
                    $('#prezzo').addClass('is-invalid');
                    errors = true;
                }
                else if($('#prezzo').val() >= 100){
                    $('#error-prezzo').show('slow').text("Il campo prezzo deve essere inferiore a 100€").fadeOut(4000);
                    $('#prezzo').addClass('is-invalid');
                    errors = true;
                }
                else if(isNaN($('#prezzo').val())){
                    $('#error-prezzo').show('slow').text('Il campo prezzo deve contenere solo numeri').fadeOut(4000);
                    $('#prezzo').addClass('is-invalid');
                    errors = true;
                }else{
                    $('#prezzo').removeClass('is-invalid')
                }
            //

            //ci credeva solo Manu e aveva ragione.
            checked = $("input[type=checkbox]:checked").length;

            if(!checked) {
                $('#error-ingredients').show('slow').text('Almeno un ingrediente deve essere selezionato').fadeOut(4000);
                errors = true;
            }

            if(errors === true){
                event.preventDefault();
            }

        });

    }

    function ingredientFormValidator(form){
        form.submit(function(event){
            let errors = false;
            $('#error-name').hide();

            if($('#name').val().length === 0){
                $('#error-name').show('slow').text('Il campo nome è obbligatorio').fadeOut(4000);
                $('#name').addClass('is-invalid');
                errors = true;
            }
            else if($('#name').val().length < 3){
                $('#error-name').show('slow').text('Il campo nome deve avere minimo 3 caratteri').fadeOut(4000);
                $('#name').addClass('is-invalid');
                errors = true;
            }
            else if($('#name').val().length > 50){
                $('#error-name').show('slow').text('Il campo nome può avere massimo 50 caratteri').fadeOut(4000);
                $('#name').addClass('is-invalid');
                errors = true;
            }else{
                $('#name').removeClass('is-invalid')
            }


            if(errors === true){
                event.preventDefault();
            }

        });

    }
});
