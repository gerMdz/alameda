const CURRENT_SERVICE_QUERY = `
query CurrentService {
  currentService(onEmpty: LOAD_NEXT) {
    id
    startTime
    endTime
    content {
      title
    }
  }
}
`;

async function startCountdown() {
    // Fetch the current or next service data

    const service = await fetch("https://online.iglesiaalameda.com/graphql", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            Accept: "application/json"
        },
        body: JSON.stringify({
            query: CURRENT_SERVICE_QUERY,
            operationName: "CurrentService"
        })
    })
        .then((response) => response.json())
        .catch((error) => console.error(error));

    // If no service was returned from the API, don't display the countdown
    // if (!service.data.currentService || !service.data.currentService.id) {
    //     return;
    // }

    // Set the service title
    // console.log(service.data.currentService.content.title);
    let title;
    if (service.data.currentService.content == null) {
        title = 'Null - sin datos';
    } else {
        title = service.data.currentService.content.title;
    }
    document.getElementById("serviceTitle").innerText =
        // service.data.currentService.content.title;
    title
    ;

    // Set the date we're counting down to
    const startTime = new Date(service.data.currentService.startTime).getTime();
    const endTime = new Date(service.data.currentService.endTime).getTime();

    // Create a one second interval to tick down to the startTime
    const intervalId = setInterval(function () {
        const now = new Date().getTime();

        // If we are between the start and end time, the service is live
        if (now >= startTime && now <= endTime) {
            clearInterval(intervalId);
            document.getElementById("countdown").innerHTML = "Live";
            return;
        }

        // Find the difference between now and the start time
        const difference = startTime - now;

        // Time calculations for days, hours, minutes and seconds
        const days = Math.floor(difference / (1000 * 60 * 60 * 24));
        const hours = Math.floor(
            (difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((difference % (1000 * 60)) / 1000);

        // Display the results in the element with id="countdown"
        document.getElementById("countdown").innerHTML =
            days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

        // If we are past the end time, clear the countdown
        if (difference < 0) {
            clearInterval(intervalId);
            document.getElementById("countdown").innerHTML = "";
            return;
        }
    }, 5000);
}

startCountdown();
