<html>
<title>Home Food</title>
<head>
  <style src="css/style.css"></style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="js/notify.js"></script>
    

</head>    
<body>
    
    <?php 
      include('topheader.php');
    ?>
<!--  <h1  style="size= 800px">Home Food</h1>-->
     
  

   <!-- <div>
      <p style="width: 800px size: 200px;">Home Food</p>
     <button color=blue><a>Veg</a></button>
     <button><a href="non-veg.php">Non-Veg</a></button>
    </div>     -->
    <div style="border: 2px solid #880000; padding: 10px; font-size: 15px; margin-top: 52px; box-shadow: #8b8686 5px 5px 5px; text-align: left; background: #ffffff;">

             
    <?php
    include 'getvegmenu.php';
    ?>
       
    </div>  
<!--
 <td  width="30%"> <p>Basket <button class="clear-basket">Clear Basket</button></p>
    <p id ="show-basket"></p>    
    <p id ="total-price"></p>  Price and Pay 
   

</td>
-->
    <?php 
      include('right-checkout.php');
    ?>
       
    
    
    
</body> 
<!--    <script type="text/javascript" src="js/functions.js"></script>-->
    <script>
    
function showonlyone(thechosenone) {
     $('.newboxes').each(function(index) {
          if ($(this).attr("id") == thechosenone) {
               $(this).show();
          }
          else {
               $(this).hide();
          }
     });
}
function selectimg(id){
    if(document.getElementById(id).src.match("unselected.png") =="unselected.png"){
  document.getElementById(id).src ="image/selected.png";
       console.log('Changed the image to colored');
        addToCartSuccessMsg();
        return;
 }
if(document.getElementById(id).src.match("selected.png") =="selected.png"){
  document.getElementById(id).src ="image/unselected.png";
   //  console.log('Changed the image to uncolored');
    removeFromCartSuccessMsg();
        return;
 }
}
    
    // Function for basket and checkout
  $(".add-to-basket").click(function(event){
            event.preventDefault();
      
    var name = $(this).attr("data-name");
    var shop = $(this).attr("data-shop");
    var price = Number($(this).attr("data-price"));
    //var count = Number($(this).attr("data-count"));
      var count = 1;
    addItemtoBasket(name,shop,price,count);
    displayBasket();
    });
    
    $(".clear-basket").click(function(event){
        event.preventDefault();
        clearBasket();
        console.log(basket);
        displayBasket();
    });
   
  
   
     
function displayBasket(){  // Displays basket in tabular form and allows user to checkout
    var basketArray = listBasket();
   // console.log('displaying basket');
    var output = "";
      output+=  '<div class="rTable" style="width: 40%;border: 1px solid #blue; margin:auto;">'+  
         '<div class="rTableHeading" >'+
                    '<div class="rTableHead" style="border-top:0px;border-left:0px;border-right:1px;border-bottom:0px;">X</div>'+
          '<div class="rTableHead" style="border-top:0px;border-left:0px;border-right:1px;border-bottom:0px;">Count</div>'+
                    '<div class="rTableHead" style="border-top:0px;border-left:0px;border-right:1px;border-bottom:0px;">Item</div>'+
                    '<div class="rTableHead" style="border-top:0px;border-left:0px;border-right:1px;border-bottom:0px;">Shop</div>'+
                    '<div class="rTableHead" style="border-top:0px;border-left:0px;border-right:1px;border-bottom:0px;">Price</div>';
   
    console.log(output);
    
    for (var i in basketArray){
//    output += basketArray[i].count+"  "+basketArray[i].name+"  "+basketArray[i].shop+"  "+basketArray[i].price+"<br/>"
     output += '<div class="rTableRow" style="width: 80%;border: 1px solid #000000;">'+
                   '<div class="rTableCell" style="border-left:0px;border-right: 1px;border-bottom: 1px;background-color:white;">'+
                     '<a style="decoration:none; text-align:center; color:red;}"'+   'onclick=removeFromBasketAll("'+basketArray[i].name.replace(" ","_")+'");>x</a></div>'+
         
                   '<div class="rTableCell" style="border-left:0px;border-right: 1px;border-bottom: 1px;background-color:white;">'+
         '<td><button style="background:green; color:white;" onclick=removeFromBasket("'+basketArray[i].name.replace(" ","_")+'");><'+
        '</button>'+ basketArray[i].count+ '<button style="background:green; color:white;" onclick=addItemtoBasket("'+basketArray[i].name.replace(" ","_")+'","'+basketArray[i].shop.replace(" ","_")+'",'+basketArray[i].price+',1);>></button></td>'+'</div>'+
         
                  
         
         
//          '<div class="rTableCell" style="border-left:0px;border-right: 1px;border-bottom: 1px;background-color:white;">'+
//         '<a class="add-to-basket" href="#" data-name ="'+<?php echo $row["Item"]; ?>+'" data-shop ="'+<?php echo $row["Shop"]; ?>+'" data-price="'+<?php echo $row["Price"]; ?>+'" data-count=1 >+</a>'+basketArray[i].count+ '</div>'+
         
//         <a class="add-to-basket" href="#" data-name ="<?php echo $row["Item"]; ?>" 
//                                                      data-shop ="<?php echo $row["Shop"]; ?>"
//                                                      data-price="<?php echo $row["Price"]; ?>"
//                                                      data-count=counter >
                                                          
                   '<div class="rTableCell" style="border-left:0px;border-right: 1px;border-bottom: 1px;background-color:white;">'+basketArray[i].name+'</div>'+
                 '<div class="rTableCell" style="border-left:0px;border-right: 1px;border-bottom: 1px;background-color:white;">'+basketArray[i].shop+'</div>'+
                 '<div class="rTableCell" style="border-left:0px;border-right: 1px;border-bottom: 1px;background-color:white;">'+'$'+basketArray[i].price+'</div>'+
         '</div>';  
    }
    
    //onclick="addItemtoBasket(Paneer Masala,Suraj Kitchen,2.1,1)"
     output+=       '<div class="rTableRow" style="width: 80%;border: 1px solid #000000;">'+
                    '<div class="rTableHead" style="border-top:0px;border-left:0px;border-right:1px;border-bottom:0px;"></div>'+
                    '<div class="rTableHead" style="border-top:0px;border-left:0px;border-right:1px;border-bottom:0px;"></div>'+
                    '<div class="rTableHead" style="border-top:0px;border-left:0px;border-right:1px;border-bottom:0px;"></div>'+
                    '<div class="rTableHead" style="border-top:0px;border-left:0px;border-right:1px;border-bottom:0px;"><B>Total Price:</B></div>'+
                    '<div class="rTableHead" style="border-top:0px;border-left:0px;border-right:1px;border-bottom:0px;"><B>'+'$'+totalCost()+'</B></div>'+
         '</div>';  
    
    
     output+= '</div></div><br/>';
  
    $("#show-basket").html(output);
     var htmlform = '<form action="./pay/checkout.php" method="post"><input type="hidden" name="product" ><input  type="hidden" name="price" value="'+totalCost()+'">'+
         '<input type="image" src="./image/paypal.png" style="margin-right:456px;" alt="Submit" align="right" ></input>';
      $("#total-price").html(htmlform);

}    
  //onclick="addItemtoBasket("Paneer Masala","Suraj Kitchen",2.1,1)"
    
    // *====== Shooping Basket Code below =======
var basket =[];

var item = [];
  function goToBasket(){
        item.push() = document.getElementById("demo").innerHTML.value;
        document.getElementById("food").innerHTML= item.indexof(1);

    }
    // Create a constructor for adding item to basket
    var Item = function(name,shop,price,count){
        this.name = name
        this.shop = shop
        this.price = price
        this.count = count
    }
   
    
    function addItemtoBasket(name,shop,price,changequantity){
          //var item = [name,shop,price,count];
        name = name.replace("_"," "); 
        shop = shop.replace("_"," "); 
        console.log('executing additem to basket');  
       //  if(basket ==null){
         //    var basket =[];
          
        console.log(basket);
        console.log(changequantity);
        
          for(var i in basket){
           if(basket[i].name ===name & basket[i].shop===shop ){
               //changequantity = changequantity
             //  basket[i].count++;
               basket[i].count = basket[i].count + changequantity;
               saveBasket();
               displayBasket();
               return;
               
           }
           
          }
          var item = new Item(name,shop,price,changequantity);
             basket.push( item );
        saveBasket();
        displayBasket();
           //  }
        }
 function removeFromBasket(name){ //Removes one from added item
      name = name.replace("_"," ");
     for (var i in basket){
         if(basket[i].name === name) {
             basket[i].count --; // cart[i].count -- will remove item
             if(basket[i].count === 0){
                 console.log('count 0 should be delted now');
                 basket.splice(i,1);
                  saveBasket();
             displayBasket();
             }
     saveBasket();
             displayBasket();
             break;
         }
     }
     saveBasket();
     displayBasket();
 }

 function removeFromBasketAll(name){ //Removes All added item
      name = name.replace("_"," ");
  for (var i in basket){
      if(basket[i].name === name){
          basket.splice(i,1);
     saveBasket();
     displayBasket();
          break;
     }
  }
     saveBasket();
     displayBasket();
 }

function clearBasket(){ // Clear everything from Basket
    basket =[];
    saveBasket();
    clearBasketMsg();
   
}

function countBasketItems(){ // Returns total number of items present in Basket
    var totalCount =0;
    for(var i in basket){
        totalCount += basket[i].count;
    }
    return totalCount;
}   
    function totalCost(){ // Returns the total cost of Basket
     var totalCost = 0;
        for(var i in basket){
            totalCost += basket[i].count*basket[i].price; 
            console.log(totalCost);
        }
        
       
        return totalCost.toFixed(2);
        //console.log(totalCost);
        
    }
  function listBasket(){ // List the items in Basket
      var basketCopy =[];
      for(var i in basket){
          var item = basket[i];
          var itemCopy = {};
          for (var p in item){
              itemCopy[p] = item[p];
          }
          basketCopy.push(itemCopy);
      }
      return basketCopy; // This is very important to use copy of Basket else if we use same basket then values will be overwritten.
      
  }
    
 function saveBasket(){ // Save the basket 
    
     localStorage.setItem("BasketOrder", JSON.stringify(basket));
     //save in table
     console.log(JSON.stringify(basket));
     console.log('Basket saved');
     }
 
function loadBasket(){
    if(localStorage.getItem("BasketOrder")==null){
        basket = [];
    }
    else{
    basket = JSON.parse(localStorage.getItem("BasketOrder"));
        }
}    
    loadBasket();
   // var array = listBasket();
    //console.log(basket);   
    
    function showMe(e) {
// i am spammy!
    //document.getElementById("enteredvalue").innerHTML = 
                //    document.getElementById(e).value;
         console.log("Printing now");
         console.log(document.getElementById(e).innerHTML);
        return document.getElementById(e).innerHTML;
}
    
    function addToCartSuccessMsg(){
       // alert('Added to card sucessfully');
        $.notify("Added to Basket!", "success");
        
    }
     function removeFromCartSuccessMsg(){
       // alert('Added to card sucessfully');
        $.notify("Removed from Basket!", "success");
        
    }
     function clearBasketMsg(){
       // alert('Added to card sucessfully');
        $.notify("Basket is cleared!", "success");
        
    }
</script>
</html>