
$('#typeClient').change(function(){
    if($('#typeClient').val() == 0){
        $('#contentLegalClient').hide();
        $('#contentNaturalClient').show();
    }else{
        $('#contentNaturalClient').hide();
        $('#contentLegalClient').show();
    }
});
