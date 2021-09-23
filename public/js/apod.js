$('#search').on('click', function() {
      let url = $(this).data('otro');
      $.ajax({
            type: "GET",
            url: url,
            dataType: "JSON",
            success: function (response) {
                  $('#content').html(response.explanation);
                  $('#contentImg').html("<img src="+response.url+">");
            }
      });
})

// let searchButton = document.querySelector('#search');

// searchButton.addEventListener('click', ()=>{
// console.log("Searching...");
// sendApiRequest();
// })

// async function sendApiRequest(){ 
// let API_KEY = "1Xg3M8Ec92fsxxf4Nd3sBZrbDRY6KDiTiruFCGOe";
// let response = await fetch('https://api.nasa.gov/planetary/apod?api_key='+API_KEY);
// console.log(response);
// let data = await response.json();
// console.log(data);
// useApiData(data);
// }

// function useApiData(data) {
// document.querySelector('#content').innerHTML += data.explanation;
// document.querySelector('#content').innerHTML += "<img src="+data.url+">";
// }

