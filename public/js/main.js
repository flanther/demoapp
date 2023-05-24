$(document).ready(function(){

    function capitalize(str) {
        return str.charAt(0).toUpperCase() + str.slice(1).toLowerCase();
    }

    $('#getData').click(function(){
        $.get("/allactors", function(data){
            let rowhtml = '';
            
            data.data.forEach(function(item){
                rowhtml += '<tr><td>' + item.id + '</td><td>' + capitalize(item.firstName) + '</td><td>' + capitalize(item.lastName) + '</td></tr>';
            });

            $('#secondTable').find('tbody').append(rowhtml);
            let table = new DataTable('#second-table');
        });
        $('#secondTable').show();
    });
  
});