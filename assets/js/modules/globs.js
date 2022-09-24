const globs = {

    timeTable: { //Prod
        start: 1663200000000,
        airdropEnds: 1668384000000,
        presaleEnds: 1678752000000,
        roundOneEnds: 1683936000000,
        roundTwoEnds: 1689120000000,
    },

    prices:{
        presale: 0.05,
        roundOne: 0.07,
        roundTwo: 0.085
    },
    multiplier: {
        presale: 20,
        roundOne: 14,
        roundTwo: 12
    },
    minPresale: 5,
    minSale: 1,
    //net: "https://data-seed-prebsc-1-s1.binance.org:8545/",
    net: "https://bsc-dataseed.binance.org/"
}

export default globs;