let countInterval;
let timePassed = 0;

const initCountDown = (currentBlockTime, airdropEnds) => {
    countInterval = setInterval(() => countDown(currentBlockTime, airdropEnds), 1000); 
}

const countDown = (start, finish) => {

    const rightNow = start + timePassed;

    const timeLeft = finish - rightNow;

    if(timeLeft <= 0 && !window.location.href.includes('/scu')){
        return window.location.reload();
    }

    const oneDay = 1000 * 60 * 60 * 24;
    const daysLeft = Math.floor(timeLeft / oneDay);
    const daysRemainder = timeLeft % oneDay;

    const oneHour = 1000 * 60 * 60;
    const hoursLeft = Math.floor(daysRemainder / oneHour);
    const hoursReminder = daysRemainder % oneHour;

    const oneMinute = 1000 * 60;
    const minutesLeft = Math.floor(hoursReminder / oneMinute);
    const munutesReminder = hoursReminder % oneMinute;

    const secondsLeft = Math.floor(munutesReminder / 1000);
    
    const timeLeftString = `${daysLeft}d ${hoursLeft}h ${minutesLeft}m ${secondsLeft}s`;
    document.querySelector('.counter').innerText = timeLeftString;
    timePassed+= 1000;
    return true;
}

export { initCountDown }