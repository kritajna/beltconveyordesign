/**
 * Created by Kritajna
 */

$(document).ready(function() {

    // bulk density enable/disable
    $("#type_of_material-0").click(function(){
        $("#bulk_density").prop( "disabled", true );
    });
    $("#type_of_material-1").click(function(){
        $("#bulk_density").prop( "disabled", true );
    });
    $("#type_of_material-2").click(function(){
        $("#bulk_density").prop( "disabled", true );
    });
    $("#type_of_material-3").click(function(){
        $("#bulk_density").prop( "disabled", true );
    });
    $("#type_of_material-4").click(function(){
        $("#bulk_density").prop( "disabled", false );
    });

});
