let  map1 = new Map();

function deleteRow(id){
   var r = confirm("Are you sure you want to delete this record?");
   if(r == true){
      window.location.assign("delete.php?id=" + id);
  }
}

function saveUnRegisteredDogs(map){
    let values = Array.from( map.values() );
    
    let arr1 = values.slice(0, Math.round(values.length/2));
    let arr2 = values.slice(Math.round(values.length/2),values.length);

    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          if (arr2.length > 0 ) {
         xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
                alert('saved');
            }
       }
        xmlhttp.open("GET", "UnregisteredDogs.php?dogsList=" + arr2+"&fromPage="+$('#fromPage').val()+"&id="+$('#id').val(), true);
        xmlhttp.send();
         }
    }
    }
    xmlhttp.open("GET", "UnregisteredDogs.php?dogsList=" + arr1+"&fromPage="+$('#fromPage').val()+"&id="+$('#id').val(), true);
    xmlhttp.send();

}

function getFather(element,gender){
   if (element.length == 0) {
    document.getElementById("df").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          if(gender == "Male"){
          document.getElementById("df").value = this.responseText;
          }
          else{
          document.getElementById("dm").value = this.responseText;
          }
      }
    }
    xmlhttp.open("GET", "checkDog.php?gender="+gender+"&inputValue="+element, true);
    xmlhttp.send();
  }

}


function setGenderVal(radioButon){
    if("male"==radioButon){
        $('#dg').val('Male');
        $('#dgFemale').prop('checked', false); // Checks it
    }
    else{
        $('#dg').val('Female');
        $('#dgMale').prop('checked', false); // Checks it
    }
}

function DogsDatabaseFilterAjax(){

}

function setChangedInputs(inputId){
    var valExist = false;
    
    for (let [k, v] of map1) {
        if (k === inputId) { 
            map1.delete(inputId);
           }
    }
    
    for (let [k, v] of map1) {
        if (v === $('#'+inputId).val()) { 
         valExist = true; 
       }
    }  
       

    if(!valExist){
        map1.set(inputId, $('#'+inputId).val());
    }

    $('#changedInputs').val(map1);
}

function getGen1(father,mother){
    
    getMothersGen1(mother);
    
    $('#maleGen2').val(father);
    $('#maleGen2').attr('readonly','readonly');

    var gFather1 = "" , gFather2 = "" , gFather3 = "";
    var gMother1="" , gMother2="" , gMother3="";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        gFather1 = this.responseText;

        if(gFather1 != ""){
        var gfather1Arr = JSON.parse(gfather1);
        //var gFather1Arr = gFather1.split(",");
           // if (gFather1Arr.length > 0){
               
            if(gFather1Arr['df'] != null && gFather1Arr['df'] != ""){
                $('#maleGen3a').val(gFather1Arr['df']);
                $('#maleGen3a').attr('readonly','readonly');
                getFathersGen3a(gFather1Arr['df']);
            }
            if(gFather1Arr['dm'] != null && gFather1Arr['dm'] != ""){
                $('#femaleGen3a').val(gFather1Arr['dm']);
                $('#femaleGen3a').attr('readonly','readonly');
                getMothersGen3a(gFather1Arr['dm']);
            }
            //}
             xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
           
        }
        }
        xmlhttp.open("GET", "DogInfo.php?gender=Male&inputValue="+gFather1, true);
        xmlhttp.send();
        } 
    }
    }
    xmlhttp.open("GET", "DogInfo.php?gender=Male&inputValue="+father, true);
    xmlhttp.send();

    

}

function getMothersGen1(mother){
   
    $('#femaleGen2').val(mother);
    $('#femaleGen2').attr('readonly','readonly');
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        gMother1 = this.responseText;

        if(gMother1 != ""){
        var gMother1Arr = JSON.parse(gMother1);
         //  if (gMother1Arr.length > 0){
               
            if(gMother1Arr['df'] != null && gMother1Arr['df'] != ""){
                $('#maleGen3b').val(gMother1Arr['df']);
                $('#maleGen3b').attr('readonly','readonly');
                getFathersGen3b(gMother1Arr['df']);
            }
            if(gMother1Arr['dm'] != null && gMother1Arr['dm'] != ""){
                $('#femaleGen3b').val(gMother1Arr['dm']);
                $('#femaleGen3b').attr('readonly','readonly');
                getMothersGen3b(gMother1Arr['dm']);
            }
           // }
             xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
           
        }
        }
        xmlhttp.open("GET", "DogInfo.php?gender=Female&inputValue="+gMother1, true);
        xmlhttp.send();
        } 
    }
    }
    xmlhttp.open("GET", "DogInfo.php?gender=Female&inputValue="+mother, true);
    xmlhttp.send();

}


function getSCBACounter(){

    $('#drn').attr('readonly','readonly');

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            scbaCounter  = this.responseText;
            $('#drn').val("SCBA/LB "+scbaCounter);
            $('#drnNum').val(scbaCounter);
        }
    }
    xmlhttp.open("GET", "SCBACounter.php", true);
    xmlhttp.send();

    $('#others').prop('checked', false); // Checks it
   
}

function setDropDownData(input,hiddenInput){
    $('#'+hiddenInput).val($('#'+input).val());
}

function getOthersCounter(){

$('#drn').attr("readonly", false);
$('#scba').prop('checked', false); // Checks it

}


function getFathersGen3a(father){
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        gFather1 = this.responseText;

        if(gFather1 != ""){
        var gfather1Arr = JSON.parse(gfather1);
        //    if (gFather11Arr.length > 0){
               
            if(gFather11Arr['df'] != null && gFather11Arr['df'] != ""){
                $('#maleGen3a1').val(gFather11Arr['df']);
                $('#maleGen3a1').attr('readonly','readonly');
            }
            if(gFather11Arr['dm'] != null && gFather11Arr['dm'] != ""){
                $('#femaleGen3a1').val(gFather11Arr['dm']);
                $('#femaleGen3a1').attr('readonly','readonly');
            }
          //  }
        } 
    }
    }
    xmlhttp.open("GET", "DogInfo.php?gender=Male&inputValue="+father, true);
    xmlhttp.send();

}


function getMothersGen3a(mother){
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        gMother1 = this.responseText;

        if(gMother1 != ""){
        var gMother1Arr = JSON.parse(gMother1);
            //if (gMother1Arr.length > 0){
               
            if(gMother1Arr['df'] != null && gMother1Arr['df'] != ""){
                $('#maleGen3a2').val(gMother1Arr['df']);
                $('#maleGen3a2').attr('readonly','readonly');
            }
            if(gMother1Arr['dm'] != null && gMother1Arr['dm'] != ""){
                $('#femaleGen3a2').val(gMother1Arr['dm']);
                $('#femaleGen3a2').attr('readonly','readonly');
            }
            }
        } 
    }
    }
    xmlhttp.open("GET", "DogInfo.php?gender=Female&inputValue="+mother, true);
    xmlhttp.send();

}


function getFathersGen3b(father){
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        gFather1 = this.responseText;

        if(gFather1 != ""){
        var gfather1Arr = JSON.parse(gfather1);
        //    if (gFather11Arr.length > 0){
               
            if(gFather11Arr['df'] != null && gFather11Arr['df'] != ""){
                $('#maleGen3b1').val(gFather11Arr['df']);
                $('#maleGen3b1').attr('readonly','readonly');
            }
            if(gFather11Arr['dm'] != null && gFather11Arr['dm'] != ""){
                $('#femaleGen3b1').val(gFather11Arr['dm']);
                $('#femaleGen3b1').attr('readonly','readonly');
            }
          //  }
        } 
    }
    }
    xmlhttp.open("GET", "DogInfo.php?gender=Male&inputValue="+father, true);
    xmlhttp.send();

}


function getMothersGen3b(mother){
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        gMother1 = this.responseText;

        if(gMother1 != ""){
        var gMother1Arr = JSON.parse(gMother1);
//            if (gMother1Arr.length > 0){
               
            if(gMother1Arr['df'] != null && gMother1Arr['df'] != ""){
                $('#maleGen3b2').val(gMother1Arr['df']);
                $('#maleGen3b2').attr('readonly','readonly');
            }
            if(gMother1Arr['dm'] != null && gMother1Arr['dm'] != ""){
                $('#femaleGen3b2').val(gMother1Arr['dm']);
                $('#femaleGen3b2').attr('readonly','readonly');
            }
  //          }
        } 
    }
    }
    xmlhttp.open("GET", "DogInfo.php?gender=Female&inputValue="+mother, true);
    xmlhttp.send();

}


function generatePedigree(father,mother){
    
   
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        gfather1 = this.responseText;
        if(gfather1 != ""){
        var gfather1Arr = JSON.parse(gfather1);
        // if (gfather1Arr.size > 0){
               
            if(gfather1Arr['df'] != null && gfather1Arr['df'] != ""){
                $('#maleGen2').val(gfather1Arr['df']);
                $('#maleGen2').attr('readonly','readonly');
            }
            if(gfather1Arr['dm'] != null && gfather1Arr['dm'] != ""){
                $('#femaleGen2').val(gfather1Arr['dm']);
                $('#femaleGen2').attr('readonly','readonly');
            }
            getGen1(gfather1Arr['df'],gfather1Arr['dm']);
           // }

            //----------------------------

            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            var gMother1 = this.responseText;

            if(gMother1 != ""){
            var gMother1Arr = JSON.parse(gMother1);
                //if (gMother1Arr.length > 0){
               
                if(gMother1Arr['df'] != null && gMother1Arr['df'] != ""){
                    $('#fMaleGen2').val(gMother1Arr['df']);
                    $('#fMaleGen2').attr('readonly','readonly');
                }
                if(gMother1Arr['dm'] != null && gMother1Arr['dm'] != ""){
                    $('#fFemaleGen2').val(gMother1Arr['dm']);
                    $('#fFemaleGen2').attr('readonly','readonly');
                }
                getGenMother1(gMother1Arr['df'],gMother1Arr['dm']);
                //}
            } 
        }
        }
        xmlhttp.open("GET", "DogInfo.php?gender=Female&inputValue="+mother, true);
        xmlhttp.send();

            //----------------------------
            } 
    }
    }
    xmlhttp.open("GET", "DogInfo.php?gender=Male&inputValue="+father, true);
    xmlhttp.send();

}




function getGenMother1(father,mother){
   
    
    if(mother != 'undifined' && mother != '' && mother != null ){
        getMMothersGen1(mother);
    }
    if(father != 'undifined' && father != '' && father != null ){
   
    $('#fMaleGen2').val(father);
    $('#fMaleGen2').attr('readonly','readonly');

    var gFather1 = "" , gFather2 = "" , gFather3 = "";
    var gMother1="" , gMother2="" , gMother3="";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        gFather1 = this.responseText;

        if(gFather1 != ""){
         var gfather1Arr = JSON.parse(gfather1);
         //if (gFather1Arr.length > 0){
               
            if(gFather1Arr['df'] != null && gFather1Arr['df'] != ""){
                $('#fmaleGen3a').val(gFather1Arr['df']);
                $('#fmaleGen3a').attr('readonly','readonly');
                getFFathersGen3a(gFather1Arr['df']);
            }
            if(gFather1Arr['dm'] != null && gFather1Arr['dm'] != ""){
                $('#ffemaleGen3a').val(gFather1Arr['dm']);
                $('#ffemaleGen3a').attr('readonly','readonly');
                getMMothersGen3a(gFather1Arr['dm']);
            }
           // }
             xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
           
        }
        }
        xmlhttp.open("GET", "DogInfo.php?gender=Male&inputValue="+gFather1, true);
        xmlhttp.send();
        } 
    }
    }
    xmlhttp.open("GET", "DogInfo.php?gender=Male&inputValue="+father, true);
    xmlhttp.send();

    
    }
    

}

function getFFathersGen3a(father){
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        gFather1 = this.responseText;

        if(gFather1 != ""){
         var gfather1Arr = JSON.parse(gfather1);
         //if (gFather11Arr.length > 0){
               
            if(gFather11Arr['df'] != null && gFather11Arr['df'] != ""){
                $('#fmaleGen3a1').val(gFather11Arr['df']);
                $('#fmaleGen3a1').attr('readonly','readonly');
            }
            if(gFather11Arr['dm'] != null && gFather11Arr['dm'] != ""){
                $('#ffemaleGen3a1').val(gFather11Arr['dm']);
                $('#ffemaleGen3a1').attr('readonly','readonly');
            }
           // }
        } 
    }
    }
    xmlhttp.open("GET", "DogInfo.php?gender=Male&inputValue="+father, true);
    xmlhttp.send();

}

function getMMothersGen3a(mother){
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        gMother1 = this.responseText;

        if(gMother1 != ""){
         var gMother1Arr = JSON.parse(gMother1);
//            if (gMother1Arr.length > 0){
               
            if(gMother1Arr['df'] != null && gMother1Arr['df'] != ""){
                $('#fmaleGen3a2').val(gMother1Arr['df']);
                $('#fmaleGen3a2').attr('readonly','readonly');
            }
            if(gMother1Arr['dm'] != null && gMother1Arr['dm'] != ""){
                $('#ffemaleGen3a2').val(gMother1Arr['dm']);
                $('#ffemaleGen3a2').attr('readonly','readonly');
            }
  //          }
        } 
    }
    }
    xmlhttp.open("GET", "DogInfo.php?gender=Female&inputValue="+mother, true);
    xmlhttp.send();

}


function getMMothersGen1(mother){
   
    $('#ffemaleGen2').val(mother);
    $('#ffemaleGen2').attr('readonly','readonly');
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        gMother1 = this.responseText;

        if(gMother1 != ""){
        var gMother1Arr = JSON.parse(gMother1);
//            if (gMother1Arr.length > 0){
               
            if(gMother1Arr['df'] != null && gMother1Arr['df'] != ""){
                $('#fmaleGen3b').val(gMother1Arr['df']);
                $('#fmaleGen3b').attr('readonly','readonly');
                getFathersGen3b(gMother1Arr['df']);
            }
            if(gMother1Arr['dm'] != null && gMother1Arr['dm'] != ""){
                $('#ffemaleGen3b').val(gMother1Arr['dm']);
                $('#ffemaleGen3b').attr('readonly','readonly');
                getMothersGen3b(gMother1Arr['dm']);
            }
     //       }
             xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
           
        }
        }
        xmlhttp.open("GET", "DogInfo.php?gender=Female&inputValue="+gMother1, true);
        xmlhttp.send();
        } 
    }
    }
    xmlhttp.open("GET", "DogInfo.php?gender=Female&inputValue="+mother, true);
    xmlhttp.send();

}

}