const createDates = () => {

    const now = new Date().getTime();

    const start = () => now + (1000 * 60 * 60);
    const airdropEnds = () => now + (1000 * 60 * 90);
    const presaleEnds = () => now + (1000 * 60 * 120);
    const roundOneEnds = () => now + (1000 * 60 * 150);
    const roundTwoEnds = () => now + (1000 * 60 * 180);

    const timeTableTest = {
        start: start(), 
        airdropEnds: airdropEnds(), 
        presaleEnds: presaleEnds(), 
        roundOneEnds: roundOneEnds(), 
        roundTwoEnds: roundTwoEnds()
    }

    console.log(timeTableTest);

    //PROD
    const airdropEndsProd = () => 1663200000000 + (1000 * 60 * 60 * 24 * 60);
    const presaleEndsProd = () => 1663200000000 + (1000 * 60 * 60 * 24 * 180);
    const roundOneEndsProd = () => 1663200000000 + (1000 * 60 * 60 * 24 * 240);
    const roundTwoEndsProd = () => 1663200000000 + (1000 * 60 * 60 * 24 * 300);

    const timeTableProd = {
        start: 1663200000000,
        airdropEnds: airdropEndsProd(),
        presaleEnds: presaleEndsProd(),
        roundOneEnds: roundOneEndsProd(),
        roundTwoEnds: roundTwoEndsProd(),
    };

    console.log("Titmetable Prod: \n\n", timeTableProd);

    console.log("start prod: ", new Date(timeTableProd.start));
    console.log("drop ends prod: ", new Date(timeTableProd.airdropEnds));
    console.log("presale ends prod: ", new Date(timeTableProd.presaleEnds));
    console.log("round 1 ends prod: ", new Date(timeTableProd.roundOneEnds));
    console.log("round 2 ends prod: ", new Date(timeTableProd.roundTwoEnds));

    const timeTableProdPHP = {
        start: 1663200000,
        airdropEnds: 1668384000,
        presaleEnds: 1678752000,
        roundOneEnds: 1683936000,
        roundTwoEnds: 1689120000,
    };

    
    console.log(timeTableProdPHP);
}

createDates();