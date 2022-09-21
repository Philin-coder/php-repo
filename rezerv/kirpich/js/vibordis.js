
$(document).ready(function()
    {
        $('#kod_grupp').click(function()
        {
            //
           // kod_grupp = document.getElementById('#kod_grupp').value;
           var kod_grupp = $(this).val(); 
            $.ajax({
                type: 'POST',
                url: "vibordis.php", 
                data:({kod_grupp: kod_grupp}), //данные
                dataType: 'html',
                success: function(result) {
                $("#id_nagruzka").html(result);
                }
            })
        })
    })