const bodyTrs=document.getElementById("trs");

// Function to send request to the server
function sendRequest() {
    // Use fetch API to send GET request to the server
    fetch('/api')
    .then(response => response.text()) // Corrected: response.text() to parse the response as text
    .then(data => {
        // Save the results in a variable or process the data as needed
        console.log('Data received:'); // Corrected: Removed unnecessary comment /* data */
        // Example: Saving data in a variable
        renderTrs(data);
    })
    .catch(error => {
        console.error('Error fetching data:');
        bodyTrs.innerHTML=`<tr> Error fetching data: Network Problem </tr>`;
    });
}


// Function to process received data
function renderTrs(data) {
    bodyTrs.innerHTML=data;
}





// Send the initial request
sendRequest();

// Set interval to send request every 10 seconds
setInterval(sendRequest, 10000);
