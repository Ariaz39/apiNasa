$('#list').on('click', function() {
      let url = $(this).data('otro');
      $.ajax({
            type: "GET",
            url: url,
            dataType: "JSON",
            success: function (response) {
                  $.each(response, function (key, value) {
                        $('#tarjeta').append(`<div class="col-md-4">
                                    <div class="card">
                                          <div class="card-header">
                                                ${value.id}
                                          </div>
                                          <div class="card-body">
                                                <h4 class="card-title">${value.title}</h4>
                                                <p class="card-text">${value.body}</p>
                                          </div>
                                    </div>
                              </div>`)
                  })

                  

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

