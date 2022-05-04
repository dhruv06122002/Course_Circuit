var key = "AIzaSyCHvrQM98U7SHt_OerRwk-c4pUfdI-n3qY";
      
      var profileId = [1,2], profilepics = [1,2];
      function search() {
        profileId.length = 0;
        profilepics.length = 0;
        
        var x = document.querySelector(".search-box").value;
        var api =
          "https://www.googleapis.com/youtube/v3/search?part=snippet&q=" +
          x +
          "&key="+key+"&maxResults=20&type=video";
        
        $.getJSON(api, response);
      }
      var j=0,y=1;
      setTimeout(disapp, 3000);
      window.onload=ck(1);
      window.onload=searchTrending("");
      function disapp() {
       document.querySelector(".LoaderBG").style.transform = "translateY(-100%)";
      };
      function getProfile() {j=-1;j=-1;
        var inter = setInterval(searchh, 20);
        function searchh() {
        var api2="";
          j++;
          if (j > 8) clearInterval(inter);
          api2 =
            "https://www.googleapis.com/youtube/v3/channels?part=snippet&id=" +
            profileId[j] +
            "&key="+key;
          $.getJSON(api2, profilePix);
        }
        function profilePix(event) {
          profilepics.push(event.items[0].snippet.thumbnails.medium.url);
        }
      }
      function response(data) {
      document.querySelector(".container").innerHTML = "";
        for (var i = 0; i < data.items.length; i++)
       profileId.push(data.items[i].snippet.channelId);
        getProfile();
        setTimeout(() => {
          for (var j = 0; j < data.items.length; j++)
    document.querySelector(".container").innerHTML +=
                '<a target="_blank" style="text-decoration:none;" href="https://www.youtube.com/watch?v='+data.items[j].id.videoId+'"><div class="result"><img src="' +
                data.items[j].snippet.thumbnails.medium.url +
                '" class="thumbnail"/><h4 class="title">' +
                data.items[j].snippet.title +
                '</h4><h5 class="user">' +
                data.items[j].snippet.channelTitle +
                '</h5><img src="' +
                profilepics[j] +
                '" class="channelArt"/></div></a>';
        }, 1000);
        
      }
      function searchTrending(y){
             profileId = [];
        profilepics = [];
        var x = document.querySelector(".search-box").value; x = y;
        var api =
          "https://www.googleapis.com/youtube/v3/search?part=snippet&q=" +
          x +
          "&key="+key+"&maxResults=10&type=video";
        $.getJSON(api, response);
        x = "";
        }
        function ck(x){
            document.querySelector(".tab"+x).style.background="#fff";
            document.querySelector(".tab"+x).style.color="#000";       document.querySelector(".tab"+x).style.border="1px solid #fff";
           if(x!=y){ document.querySelector(".tab"+y).style.background="#3e3e3e";
            document.querySelector(".tab"+y).style.color="#fff";       document.querySelector(".tab"+y).style.border="1px solid #525252";}
            y=x;}
            var v=1;
            function cc(o){ document.querySelector(".text"+o).style.color="#fff";
            document.querySelector("#text"+o).style.color="#fff";
           if(o!=v){  document.querySelector(".text"+v).style.color="#909090"; 
           document.querySelector("#text"+v).style.color="#909090"; 
            }v=o;}
            