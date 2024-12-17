function Sellervalidate(event){
    event.preventDefault();
    var departureCity = document.getElementById('departureCity').value;
    var arrivalCity=document.getElementById('arrivalCity').value;
    var Departure=document.getElementById('departureDate').value;
    let numberOfSeats=document.getElementById('numberOfSeats').value;
   
        
    
    
        if(departureCity == ""){
            document.getElementById('p').innerHTML = "departureCity can't left empty";
            //return false;
    
        }
    
        if(arrivalCity == ""){
            document.getElementById('a').innerHTML = "arrivalCity can't left empty";
            //return false;
        }
    
        if(Departure == ""){
            document.getElementById('r').innerHTML = "Departure can't left empty";
            //return false;
        }
        if(numberOfSeats == ""){
            document.getElementById('t').innerHTML = "numberOfSeats can't left empty";
            //return false;
        }
     
    
        
    else{
            return true;
        }
    
    
    }

    function ajax(){ 

        var departureCity = document.getElementById('departureCity').value;
    var arrivalCity=document.getElementById('arrivalCity').value;
    var Departure=document.getElementById('departureDate').value;
    let numberOfSeats=document.getElementById('numberOfSeats').value;
        let bus = {'departureCity' : departureCity, 'arrivalCity': arrivalCity , 'Departure': Departure, 'numberOfSeats': numberOfSeats};
         let json = JSON.stringify(bus);
          let xhttp = new XMLHttpRequest();
                        
                        
                        xhttp.open('POST','../phpValidation/addsellercheck.php', true);
                        xhttp.onreadystatechange = function (){                    
                            if(this.readyState == 4 && this.status == 200){
                                
                               
                                if(this.responseText){
                                //header('location: ../view/home.php');
                                 window.location.replace("../view/availablebuses.php");
                            }
                            }
                        }
        
                        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
                        xhttp.send('data='+json); 
        
                    }