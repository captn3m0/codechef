---
{"category_name":"easy","problem_code":"MARTING1","problem_name":"Martingale","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"dojiboy9","problem_tester":null,"date_added":"25-12-2018","tags":{"0":"dojiboy9"},"time":{"view_start_date":1546074900,"submit_start_date":1546074900,"visible_start_date":1546074900,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>You are playing a game called _Martingale_. The rules of the game are as follows:

```
1.  At the beginning of the game, you are given $N$ as input.
2.  Set $V = N$, and set $X = 1$
3.  Flip a fair coin.
3a.   If the coin lands on heads: Increase $V$ by $X$, and then set $X = 1$
3b.   If the coin lands on tails: Decrease $V$ by $X$, and then set $X = 2X$
4.  If $V$ less than or equal to $0$ or $V$ greater than or equal to $2N$
4a.   End the game.
5.  Proceed to step 3.
```
------------

Given the initial value $N$, what is the expected number of turns (coin flips) you will play before ending the game?

###Input:
Input consists of a single integer, $N$ (with $1 \leq N \leq 1,000,000$), the initial input to the game.

###Output:
A single decimal number, containing the expected number of turns you will play this game before it ends. Your output will be accepted if it is within $10^{-6}$ absolute or relative error.

###Sample Input 1:
```
1
```

###Sample Output 1:
```
1.000000000000
```

###Sample Input 2:
```
3
```

###Sample Output 2:
```
3.9609375
```