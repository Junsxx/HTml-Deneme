default.php
<button onclick="copyEmail()">Emaili Kopyala</button>
<a onclick="copyEmail()" href=""> asdasdads</a>
<script>
function copyEmail() {
  const email = "yesilarda83@gmail.com";
  navigator.clipboard.writeText(email).then(() => {
    alert("Email kopyalandı!");
  });
}
</script>
<br><br><br>

<div id="cs-hours">Yükleniyor...</div>

<script>
const apiKey = "66E34E3FCE0A2BCD77AB23C16F9F39BC";
const steamID = "76561199184319290";

fetch(`https://api.steampowered.com/IPlayerService/GetOwnedGames/v1/?key=${apiKey}&steamid=${steamID}&include_appinfo=true`)
.then(res => res.json())
.then(data => {

  const games = data.response.games;

  const cs = games.find(game => game.appid === 730);

  if(cs){
    const hours = (cs.playtime_forever / 60).toFixed(1);
    document.getElementById("cs-hours").innerText =
      "CS2 Oynama Süresi: " + hours + " saat";
  } else {
    document.getElementById("cs-hours").innerText =
      "CS bulunamadı";
  }

});
</script>




<br><br><br><br>
1
<div id="cs"></div>

<script>
const steamID = "76561199184319290";

fetch(`https://steamcommunity.com/profiles/${steamID}/games/?xml=1`)
.then(res => res.text())
.then(data => {

const parser = new DOMParser();
const xml = parser.parseFromString(data,"text/xml");

const games = xml.getElementsByTagName("game");

for(let game of games){
    if(game.getElementsByTagName("appID")[0].textContent == "730"){
        let minutes = game.getElementsByTagName("hoursOnRecord")[0].textContent;
        document.getElementById("cs").innerText = "CS saat: " + minutes;
    }
}

});
</script>




<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
