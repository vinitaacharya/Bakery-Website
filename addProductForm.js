$(document).ready( () => {
   
    // handle click on Join List button
    $("#addProduct").click( () => {
        const bread_Category = $("#breadCategory").val();
        const bread_Code = $("#breadCode").val();
        const bread_Name = $("#breadName").val();
        const bread_Description = $("#breadDescription").val();
        const bread_Price= $("#breadPrice").val();
        let isValid = true;

 //Bread Code ---------------------------------------------------------------------------
        
        if (bread_Code == "") { 
            $("#breadCode").next().text("This field should not be blank.");
            isValid = false;
        } else if (bread_Code.length < 4  ) { 
            $("#breadCode").next().text(
                "This field should have a minimum of 4 characters");
            isValid = false;
        } else if (bread_Code.length >10  ) { 
            $("#breadCode").next().text(
                "This field should have a maximum of 10 characters");
            isValid = false;
        }else {
            $("#breadCode").next().text("");
        }

//Bread Name ---------------------------------------------------------------------------
        if (bread_Name == "") { 
            $("#breadName").next().text("This field should not be blank.");
            isValid = false;
        } else if (bread_Name.length < 10  ) { 
            $("#breadName").next().text(
                "This field should have a minimum of 10 characters");
            isValid = false;
        } else if (bread_Name.length >100  ) { 
            $("#breadName").next().text(
                "This field should have a maximum of 100 characters");
            isValid = false;
        }else {
            $("#breadName").next().text("");
        }

//Bread Description ---------------------------------------------------------------------------
        if (bread_Description == "") { 
            $("#breadDescription").next().text("This field should not be blank.");
            isValid = false;
        } else if (bread_Description.length < 10  ) { 
            $("#breadDescription").next().text(
                "This field should have a minimum of 10 characters");
            isValid = false;
        } else if (bread_Description.length >225  ) { 
            $("#breadDescription").next().text(
                "This field should have a maximum of 255 characters");
            isValid = false;
        }else {
            $("#breadDescription").next().text("");
        } 
//Bread Price ---------------------------------------------------------------------------
if (bread_Price == "") { 
    $("#breadPrice").next().text("This field should not be blank.");
    isValid = false;
} else if (bread_Price<=0 ) { 
    $("#breadPrice").next().text(
        "This field should not be negative or zero");
    isValid = false;
} else if (bread_Price.length >100000  ) { 
    $("#breadPrice").next().text(
        "This field should not exceed $100,000");
    isValid = false;
}else {
    $("#breadPrice").next().text("");
}    
//ptherwise---------------------------------------------------------------     
        // submit the form if all entries are valid
        if (isValid) {
            $("#add_product_form").submit();
        }
    });
 //RESET button ---------------------------------------------------------------------------

 	// handle click on Clear Form button
     $("#clear_form").click( () => {
        $("#breadCode").val("");
        $("#breadName").val("");
        $("#breadDescription").val("");
        $("#breadPrice").val("");

        $("#breadCode").next().text("*");
        $("#breadName").next().text("*");
        $("#breadDescription").next().text("*");
        $("#breadPrice").next().text("*");
       
        
      
    });
 
});

