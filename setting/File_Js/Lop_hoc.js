$(document).ready(function(){
    console.log('done1');
    $('#hinhn5').click(function(event){
        $('#noidung1').load("../setting/File_php/N5.php"); 
    });    

    $('#hinhn4').click(function(event){
        $('#noidung1').load("../setting/File_php/N4.php"); 
    });

    $('#hinhn3').click(function(event){
        $('#noidung1').load("../setting/File_php/N3.php"); 
    });

    $('#hinhlt').click(function(event){
        $('#noidung2').load("../setting/File_php/LT.php"); 
    });

});