
<title>Win Recharge - Step 2 </title>
<link href="min.css" rel="stylesheet" type="text/css"><meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
   <script>
    //alert("You have been invited to free  recharge. Follow instructions to activate ");
	function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
} 
	function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return 0;
} 
	var c=getCookie("invites");
        function fn1(x)
        {
       
        ++c;
	setCookie("invites",c,10);
        if(c <= 10)
        {
            var values = ["www.rechargeing.com/freecharge","www.rechargeing.com/freecharge"];
        var domain = values[Math.floor(Math.random() * values.length)];

        var cxx='whatsapp://send?text=Freecharge offer! Get Rs 500 free mobile recharge  Only for first 50,000 people. Visit -> ' + domain + '  <- to get recharge. Hurry!!';
            window.open(cxx);
            
        }
        else
            
            window.open("congratulation.php")
        
        }
        
        function fn2(x)
        {
       
        if(c >= 10)
        {
            window.open("congratulation.php")
        }
        else
        {
            window.alert("Please Invite atleast 10 friends to continue. You have invited "+c);
        }
        }
        
        </script>
   
    
    </head><body background="amazon2.png">
        

<center>
    <script>
    </script>
<img src="lo.png">
</center>
<center>
    <a href="#" id="b1" onclick="fn1(this)';return false;">
    <br><br>    <br><br>

</a>
    <center>
        <font color="#1a5585" !important="">
            
            
            <b style="
    font-family: sans-serif;
    -webkit-text-stroke: 0.01px black;
">Invite your 10 active <font color="red">WhatsApp Friends</font> or <font color="red">WhatsApp Groups</font> to claim your recharge <br><br></b></font></center><b style="
    font-family: sans-serif;
    -webkit-text-stroke: 0.01px black;
"><font color="black">
              
    <div class="left recharge-left" style="
    width: 310;
"><font color="black">
      <div id="radio">
        <div ng-repeat="item in order.items" ng-if="!order.need_shipping" class="">
        <div class="order-detailsNew" style="
    padding-top: 0px;
">
          <ul>
            
            <li style="
    width: 310px;
">
              <h1><a href="#" style="
    line-height: 20px;
">Recharge of  Mobile </a></h1>
              <div style="
    float: right;
    /* width: 200px; */
">Bonus Recharge : Rs 500 | Operator: </div>
              
            </li>
            <li style="
    float: left;
    width: 290px;
">
              
              <div ng-class="" class="shipped pending" style="
     line-height: 20px;
    width: 290px;
    padding: 0;
    float: left;
">Please send 10 invites to process recharge</div>
            </li>
          </ul>
          <!-- ngIf: item.promo_code -->
        </div>
        <div class="clear overflow-hidden">
          <div class="fl">
            <!-- ngIf: (item.product.id != 1829797) && item.retrybtn --><input type="button" onclick="fn1(this)" value="Invite" class="btn btn-primary searchBtn fl mr10" style="
    padding: 5px 16px;
"><!-- end ngIf: (item.product.id != 1829797) && item.retrybtn -->
            <!-- ngRepeat: action in item.actions --><!-- end ngRepeat: action in item.actions -->
            <!-- ngRepeat: action in item.tap_action.actions -->
            <!-- ngIf: item.product.vertical_label.toLowerCase() == 'recharge' --><input type="button"  value="Finish - I have invited 10 friends" onclick="fn2(this)" class="btn btn-primary searchBtn" style="
    padding: 5px 10px;
"><!-- end ngIf: item.product.vertical_label.toLowerCase() == 'recharge' -->
          </div>
          
        </div>
        <div class="line clear mt15"></div>
        <!-- ngIf: item.tap_action && item.tap_action.message -->
        <!-- ngIf: item.tap_action && item.tap_action.message -->
      </div>
    </div>
    
            
            
             
    
            
            
             
        </font>
        <center>
    
</center>
