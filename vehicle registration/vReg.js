var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}


let paraHeading = document.getElementById("para-heading");
let paraImg = document.getElementById("para-img");
let paraMain = document.getElementById("para-main");
let paraList = document.getElementById("para-list");
let moreDetails = document.getElementById("more-details");

document.getElementById("more-details").style.visibility = "hidden";
function changeContent(name){
  moreDetails.innerHTML = "<a href='../../Sarindu/Services.html'>More Details</a>";
  if(name == "comprehensive"){
    document.getElementById("more-details").style.visibility = "visible";
    paraHeading.innerHTML  = "Comprehensive";
    paraImg.src = "../img/vReg3.jpg";
    paraMain.innerHTML = "This is the full option package that is offered by ABC insurance.This covers a wide range of aspects and this covers your vehicle, your loved ones and the third party as well";

    paraList.innerHTML = "<ul> <li>Covers death or injuries caused to a third party person</li>" +  
                              "<li>Covers damages caused to a property of a third party person</li>" + 
                              "<li>Covers damages to your vehicle </li>" + 
                          "</ul>";

    // document.getElementById("anchor").href = "../../Sarindu/Services.html#comprehensive";
  }

  else if(name == "thirdParty"){
    document.getElementById("more-details").style.visibility = "visible";
    paraHeading.innerHTML  = "Third Party";
    paraImg.src = "../img/vReg1.jpg";
    paraMain.innerHTML = "This is the bare minimum that you can get started with, and by law your vehicle shoud be insured atleast by a third party cover. Third-party insurance covers accidental damage to the third party property or Death or bodily injury to a third party by the insured vehicle";
    
    paraList.innerHTML = "<ul> <li>Covers death or bodily injury to any third party person</li>" +  
                              "<li>Covers any damaged property up to Rs. 35,000/=	</li>" + 
                          "</ul>";

    // document.getElementById("anchor").href = "../../Sarindu/Services.html#third-party";
  }

  else if(name == "PIP"){
    document.getElementById("more-details").style.visibility = "visible";
    paraHeading.innerHTML  = "Personal Insurance Protection";
    paraImg.src = "../img/vReg2.jpg";
    paraMain.innerHTML = "This only covers any injuries to your self on top of the third party facilities. This will not cover your vehicle. This will cover your medical bills up to Rs. 25,000/=";
    
    // paraList.innerHTML = "<ul> <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>" +  
    //                           "<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>" + 
    //                           "<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry </li>" + 
    //                       "</ul>";
    // document.getElementById("anchor").href = "../../Sarindu/Services.html#PIP";
  }
}
