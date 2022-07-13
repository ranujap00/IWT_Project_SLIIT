function swapContent(name) {
    if (name == "btn1") {
      document.getElementById("content").innerHTML = "<h1>Private car policy</h1><br><br><p>Any vehicle which has an unladen weight of less than 7500 kg ms can have this type of policy. These vehicles which will be insured under this policy can be used only for social, domestic, and pleasure purposes. Fire, Explosion, Lightning, Burglary and Theft, Riot and Strike, Typhoon, Hurricane, Storm, Tempest, Malicious act, Earthquake, Flood, Terrorist activity, Landslide/Rockslide will be covered by this policy under some agreed terms and conditions.</p><br><br>";
      document.getElementById("banner").src = "img/private-car-banner.jpg";
    }
    else if (name == "btn2") {
      document.getElementById("content").innerHTML = "<h1>Commercial Vehicle Policy</h1><br><br><p>Covering any damages to your commercial vehicle will be done under this policy. Fire, Explosion, Lightning, Burglary and Theft, Riot and Strike, Landslide/Rockslide will be covered by this policy under some agreed terms and conditions. This includes hired and rental vehicles as well. If you are a commercial entity who is having vehicles used for commercial purposes this might be your option.</p><br><br>";
      document.getElementById("banner").src = "img/commercial_vehicle_banner.jpg";
    }
    else if (name == "btn3") {
      document.getElementById("content").innerHTML = "<h1>Motorcycle Policy</h1><br><br><p>Accident, Fire, External explosion, Self-ignition, Lightning, Theft of vehicle, Malicious act, 3rd party damages, Strikes, Riots and Civil Commotion (SRCC), Specified natural perils (According to the policy schedule) will be given in this policy. This policy is ideal for Motorcycle owners.</p><br><br>";
      document.getElementById("banner").src = "img/harley-davidson-livewire-electric-motorcycle.jpg";
    }
    else if (name == "btn4") {
      document.getElementById("content").innerHTML = "<h1>Third Party Policy</h1><br><br><p>This policy is purchased by the insured from the insurance company (second party) for protection against the claims of another (third party). The significance of third-party insurance is that it offers the insured coverage for injury or damage they have caused. If you are looking for such a policy this might be yours.</p><br><br>";
      document.getElementById("banner").src = "img/service-banner.jpg";
    }
    else {
      alert("invalid!!");
    }
  }