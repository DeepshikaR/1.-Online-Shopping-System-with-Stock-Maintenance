<!DOCTYPE html>
<html>
<head>   
<meta http-equiv="refresh" content="3">
<link rel="stylesheet" href="style.css"> 
<style>

</style>
<script>
        var element=document.getElementsByClassName("items")[0];
        var width=155; 
        /*element.innerHtml='<div class="item1 bor">
            <div class="item_img bor">
            image
            </div>
            <div class="item_details bor">
            name<br>price
            </div>
            <div class="item_qty bor">
            quantity
            </div>
            <div class="addToCart bor">
            addtocart
            </div>
        </div>';   
        for(var i=1;i<3;i++){
            element.innerHtml+='<div class="item1 bor">
                                    <div class="item_img bor">
                                    image
                                    </div>
                                    <div class="item_details bor">
                                    name<br>price
                                    </div>
                                    <div class="item_qty bor">
                                    quantity
                                    </div>
                                    <div class="addToCart bor">
                                    addtocart
                                    </div>
                                </div>';
            var item=decument.getElementsByclassName("item")[i];
            
            if(i%2==1){
                item.style.right='5px';
                item.style.left='0px';
            }
            else{
                item.style.right='0px';
                item.style.left='5px';
                item.style.width=(parseInt(item.style.width[:-2])+width)+'px';
                width+=155;                
            }

        }*/
        element.innerHtml='<div class="item1 bor">
            <div class="item_img bor">
            image
            </div>
            <div class="item_details bor">
            name<br>price
            </div>
            <div class="item_qty bor">
            quantity
            </div>
            <div class="addToCart bor">
            addtocart
            </div>
        </div>';
    </script>
</head>
<body>
<div class="item_body">
    <div class="items ">
    
        
    </div>
    
</div>
</body>
</html>