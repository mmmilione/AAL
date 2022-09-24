# AAL - Token Antarctic of AntarcticLands (BEP20)#

This is repo contains the source code of the [AAL Token](https://antarctic.antarcticlands.org/).

The project was made in PHP and the interaction between the UI and Smart Contracts is made through **Ethers.js**. For some basic DB functionality, SQLite is used.

The project has the following features:

1) AAL Token Airdrop

2) AAL Token presale

3) AAL Roundsale in two stages

4) Proxy tokens redimable for AAL after 6 and 18 months respectively (SCU6 and SCU18)

5) Control panel which allows the contract owner to easily check stats on airdrop and presale.

By using timeIntervals and predefined timestamps, the website updates itself so that the UI reflects the various stages of the Token distribution cycle.

## Getting Started ##

Make sure you have PHP installed and clone the repo. Then do the following:

1) Set up your **Password** and **Vector** in the both `/db/encryption.php` and `/admin/control-panel.php`.

2) Set up timestamps that determine time limits of the various stages of the distribution cycle in both `/components/scriptSelector.php` and `/components/stageSelector.php`

3) Visit the `/makeDB.php` route in the browser to **instantiate the SQLite DB**.




