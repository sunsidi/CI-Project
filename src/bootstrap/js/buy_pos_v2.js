   var varPostage = 0 ; //邮费
   var g_maxNumber = 99 ; //最大购买数量
 
     //得到对象


      function getObj(id) {
        return $("#" + id);
      }


      var total = 4; //总数





      function chkAddAmount(id, type) {
        //得到数量文本框
        var varObj = getObj(createCountId(id));
        var varObjValue = varObj.val();
    if(type==0){
      //为空，用于计算用户输入数量，不改变文本框值，重新计算商品总金额
    }else if (type == 1) {
          varObjValue++;
        }
        else {
          varObjValue--;
        }

          //$(document).ready(function()
          //{
          if (varObjValue > 0) {
              $(".admission"+id).show();
          }else{
              $(".admission"+id).hide();
          }
          //});

        //判断数量是否大于最大购买数量
        if (varObjValue > g_maxNumber) {
      alert('a'+g_maxNumber+'b');
      varObj.val(g_maxNumber);
      changeSumPrice();
      changeSubtotal(id,g_maxNumber);
      return;
    }
        //判断数量是否小于1
        if (varObjValue < 1) {
          //当前文本框数量为1
          varObj.val(0);
          //设置当前文本框的
          getObj(createSubtotalId(id)).text(getObj(createFirstId(id)).text());
          //改变余额
          changeSumPrice();
          return;
        }
        varObj.val(varObjValue);
        changeSubtotal(id, varObjValue);

      }

      //改变小计

      function changeSubtotal(id, amount) {
        //得到单价
        var varFirstPrice = getObj(createFirstId(id)).text();
        //单价乘以数量
        var varSubtotal = floatCounstrue(varFirstPrice * amount);
        //赋值
        getObj(createSubtotalId(id)).text(varSubtotal);
        getObj(createNumId(id)).text(amount);

        //余额赋值
        changeSumPrice();
      }

      //改变余额

      function changeSumPrice() {
        var index = 1;
        var varSumPrice = parseFloat(getObj("serviceFee").text()) + parseFloat(getObj("deliveryCost").text());
        for (index; index <= total; index++) {
          var amount = getObj(createCountId(index)).val();
          var varFirstPrice = parseFloat(getObj(createFirstId(index)).text());
            varSumPrice +=  varFirstPrice * amount;
          //varSumPrice += parseFloat(getObj(createSubtotalId(index)).text());
     // alert(getObj(createSubtotalId(index)).text(1));
        }

        varSumPrice = floatCounstrue(varSumPrice);
        getObj("span_sumPirce").text(varSumPrice);
        getObj("b_sumPirce").text(varSumPrice);
      }

      //浮点型分析

      function floatCounstrue(val) {
      
        val = val.toString();
        var index = val.indexOf(".");
        if (index > 0) {      
          return val.substring(0, index + 3);
        }
        else {
          return val + ".00";
        }
      }


      //创建单价Id

      function createFirstId(id) {
        return "span_first_price_" + id;
      }

      //创建数量 I

      function createCountId(id) {
        return "input_count_" + id;
      }

     //创建显示购票数量
     function createNumId(id){
         return "span_subtotal_num_"+ id;
     }


      //创建小计Id

      function createSubtotalId(id) {
        return "span_subtotal_price_" + id;
      }
    
    function fnChangePictrue(number,flag){
      switch(number){
        case 1:
        
        break;
        case 2:
          var varImagePath1 = baseLocation+"web/images/message_btn.png";
        var varImagePath2 = baseLocation+"web/images/message_btn1.png";
        if(flag){
          alert(varImagePath1);
            getObj("next2 > img").attr("src",varImagePath2);
        }else{
          alert(varImagePath2);
          getObj("next2 > img").attr("src",varImagePath1);
        }
        
        break;
        
      }
    }


     //delivery charge
     document.getElementById("delivery1").onclick=function(){displayDeliveryCharge1()};
     function displayDeliveryCharge1()
     {
         document.getElementById("deliveryCost").innerHTML= 0;
         changeSumPrice()
     }

     document.getElementById("delivery2").onclick=function(){displayDeliveryCharge2()};
     function displayDeliveryCharge2()
     {
         document.getElementById("deliveryCost").innerHTML= 0;
         changeSumPrice()
     }

     document.getElementById("delivery3").onclick=function(){displayDeliveryCharge3()};
     function displayDeliveryCharge3()
     {
         document.getElementById("deliveryCost").innerHTML= 4.95;
         changeSumPrice()
     }