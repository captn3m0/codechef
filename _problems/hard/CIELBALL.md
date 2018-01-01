---
category_name: hard
problem_code: CIELBALL
problem_name: 'Ciel and Ball Guessing Game'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: laycurse
problem_tester: null
date_added: 4-07-2012
tags:
    - binary
    - cook24
    - dynamic
    - hard
    - laycurse
editorial_url: 'http://discuss.codechef.com/problems/CIELBALL'
time:
    view_start_date: 1342982904
    submit_start_date: 1342982904
    visible_start_date: 1342982428
    end_date: 1735669800
    current: 1493556655
layout: problem
---
All submissions for this problem are available.Tomya is a girl. She loves Chef Ciel very much.

Since Tomya has completed collecting the stamps in Ciel's restaurant, she now challenges the bonus game in her restaurant. There are colored balls in a box. The number of colors is **N**, and the number of balls color **i** in the box is **Si** for **i** = 1, 2, ..., **N** initially. At first, Tomya has **M** coins. And Tomya's aim in this game is to get many coins at the end of the game. This game will run as follows.

Tomya chooses a color, and Tomya bets some coins (suppose **x** coins are bet) on the color. Here **x** must be non-negative integer at most **L**, and Tomya must have **x** coins before betting. Then Ciel chooses a ball from the box, checks its color and discards the ball. If the ball has the same color as Tomya's bet, then Tomya gets **B**·**x** coins, otherwise Tomya must pay **x** coins. Note that, if Tomya wins, then she receives back her bet as well as **B**·**x** coins. While the box has at least one ball, the above process are repeated. When the box is empty, the game is over.

The game is very kind, because Tomya always can increase her coins. Instead of this, Ciel is not kind in this game, she chooses the balls which minimize Tomya's coins at the end of the game (Yes, she can choose balls as she likes!). Your task is to calculate the maximum number of coins that can be obtained by Tomya at the end of the game.

### Input

The first line contains an integer **T**, the number of test cases. Then **T** test cases follow. The first line of each test case contains 4 integers **N**, **B**, **M**, **L**. Then the next line contains **N** integers **S**1, **S**2, ..., **SN**.

### Output

For each test case, print the maximum number of coins that can be obtained by Tomya at the end of the game.

### Constraints

1 ≤ **T** ≤ 5
1 ≤ **N**, **B** ≤ 30
1 ≤ **M**, **L** ≤ 1000000000000 (1012)
1 ≤ **Si** ≤ 30

### Sample Input

<pre>2
2 1 30 100
2 2
3 1 1 58
30 28 2
</pre>### Sample Output
<pre>80
2
</pre>### Explanations
In the first sample, one of the strategy to obtain 80 coins is as follow:
At first, Tomya bets 0 coins. Let the color 2 be chosen by Ciel. (Now, **S**1 = 2, **S**2 = 1, Coins = 30)
Then, Tomya bets 10 coins on the color 1.
\--- If the color 1 is chosen, she will get 10 coins.
\--- (Now, **S**1 = 1, **S**2 = 1, Coins = 40)
\------ In next turn, Tomya bets 0 coins, and let color 2 be chosen.
\------ (Now, **S**1 = 1, **S**2 = 0, Coins = 40)
\------ Lastly, Tomya bets all 40 coins on the color 1, and she will get 40 coins.
\------ (Game over with **S**1 = 0, **S**2 = 0, Coins = 80)
\--- If the color 2 is chosen in the second turn, she must lose 10 coins.
\--- (Now, **S**1 = 2, **S**2 = 0, Coins = 20)
\------ In this case, Tomya bets all 20 coins on the color 1, and she will get 20 coins.
\------ (Now, **S**1 = 1, **S**2 = 0, Coins = 40)
\------ Then, once more, Tomya bets all 40 coins on the color 1, and she will get 40 coins.
\------ (Game over with **S**1 = 0, **S**2 = 0, Coins = 80)

In the second sample, Tomya has only 1 coin. Therefore Tomya must not bet her coin while the box contains balls of at least 2 different colors. Ciel must always choose a ball of the most popular color. So while the box has at least two balls there always exist two balls of different colors in the box. So Tomya can bet her coin only on the last ball.
