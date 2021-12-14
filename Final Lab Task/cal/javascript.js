function showInput(elem)
{
    let screenVal =   document.getElementById("screen").value;   
    let val = document.getElementById(elem.id).value;
    

    if(screenVal.length>=1)
    {        
        document.getElementById("screen").value = screenVal.concat(val);
    }
    else
    {
       document.getElementById("screen").value = val;
    
    }

    document.getElementById("storeVal").value = val;

}


function calculation(elem)
{
    let screenVal =  document.getElementById("screen").value;
    operatorNew = document.getElementById(elem.id).value;
    document.getElementById("screen").value = screenVal.concat(operatorNew);
    let operatorCurr = document.getElementById("operator").value;
    let operatorAtLastIndex = parseInt(screenVal.substring(screenVal.length-1));

    if(screenVal=="")
    {
        calculate(operatorNew,operatorNew);
    }

    if(!(Number.isInteger(operatorAtLastIndex)))
    {
        document.getElementById("screen").value = screenVal.substring(0,screenVal.length-1).concat(operatorNew);
    }

    if(operatorCurr!="")
    {
        calculate(operatorCurr,operatorNew);
    }
    else
    {    
        calculate(operatorNew,operatorNew);
    }  

}

function equalsTo()
{
    let screenVal =  document.getElementById("screen").value;
    operatorNew = "";
    document.getElementById("screen").value = screenVal.concat(operatorNew);
    let operatorCurr = document.getElementById("operator").value;
    let operatorAtLastIndex = parseInt(screenVal.substring(screenVal.length-1));    
    calculate(operatorCurr,operatorNew);


    if(!(Number.isInteger(operatorAtLastIndex)))
    {
        document.getElementById("screen").value = screenVal.concat("0");
    }


}

function calculate(operatorCurr,operatorNew)
{  
     
    let operator = operatorCurr;

    document.getElementById("operator").value = operatorNew;

  
    let value = document.getElementById("screen").value;

    let index =  value.indexOf(operator);

    let val1 = value.substring(0,index);
    let val2 = value.substring(index+1);
    let result = 0;

    if(operator=="+"||operator=="-")
    {
        if(val1=="")
        {
            val1 = 0;
    
        }
        if(val2=="")
        {
            val2 = 0;
        
        }
    }
    if(operator=="×"||operator=="÷")
    {
        if(val1=="")
        {
            val1 = 0;
    
        }
        if(val2=="")
        {
            val2 = 1;
        
        }
    }


    val1 = parseInt(val1);  
    val2 = parseInt(val2); 


    

    if(operator=="+")
    {
        result = val1 + val2;
    }
    if(operator=="-")
    {
       result = val1 - val2;
    }
    if(operator=="×")
    {
        result = val1 * val2;
    }
    if(operator=="÷")
    {
        result = val1 / val2;
    }
   
    let res = result.toString();
    document.getElementById("screen").value = res.concat(operatorNew);   

}