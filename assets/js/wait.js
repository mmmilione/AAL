import globs from "./modules/globs.js";

const hiddenCountDown = () => {
    const now = new Date().getTime();
    console.log("Is ", now, " >= ", globs.timeTable.start, "? ", now >= globs.timeTable.start);
    console.log("Secs Left: ", (globs.timeTable.start - now) / 1000);
    if(now >= globs.timeTable.start) window.location.reload();
}

document.addEventListener('DOMContentLoaded', async () => {
    setInterval(() => hiddenCountDown(), 1000);
})