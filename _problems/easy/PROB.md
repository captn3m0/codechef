---
category_name: easy
problem_code: PROB
problem_name: 'The Probability Of Winning'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: ballon_ziq
problem_tester: gamabunta
date_added: 28-04-2013
tags:
    - ballon_ziq
    - july13
    - probability
    - simple
    - simple
editorial_url: 'http://discuss.codechef.com/problems/PROB'
time:
    view_start_date: 1373880701
    submit_start_date: 1373880701
    visible_start_date: 1373880600
    end_date: 1735669800
    current: 1493558176
layout: problem
---
All submissions for this problem are available.Chef, Artem and Eugene are the best of friends and teammates. Recently, they won a lot of money at the Are You Feeling Lucky Cup. Having put their fortune to test and emerging victorious, they are now busy enjoying their wealth. Eugene wanted to drink it all away. Chef and Artem had better plans.

Chef and Artem decided to go to Las Vegas and put more of their fortune to test! Eugene stayed at home and continues drinking.

In Vegas, Chef and Artem found lots of interesting games. The most interesting one to them was the game of Lucky Tickets.

Lucky Tickets is played using **three** kinds of tickets

- **Type-1** called the winning ticket.
- **Type-2** called the losing ticket.
- **Type-3** called the try again ticket.

**Lucky Tickets** is played as follows

You know there are **T1** tickets of **Type-1**, **T2** tickets of **Type 2** and **T3** tickets of **Type-3** before the game begins.

All the tickets are placed in a sealed box. You are allowed to take out only one ticket from the box. Of course, you cannot see inside the box while choosing the ticket.

- If you choose a **Type-1** ticket, you are declared winner of Lucky Tickets and double your money.
- If you choose a **Type-2** ticket, you are declared loser of Lucky Tickets and lose all your money.
- If you choose a **Type-3** ticket, you have to try your fortune again and pick another ticket from the box and the selection process starts all over again.

Chef was able to convince the organizers of Lucky Tickets to let him go first and discard **T4** tickets. This means that Chef makes **T4** turns to choose exactly one ticket every turn, and despite what ticket he chose, he simply discards it. Chef also convinced the organizers to let Artem go right after he is finished.

What is the probability that Artem will win?

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. Each test case will consist of four space separeted integers **T1, T2, T3 and T4**, respectively.

### Output

For each test case, output a single line containing the probability that Artem will win. Your answer will be considered correct if it has an absolute error less then **10-6**.

### Constraints

**1 ≤ T ≤ 10000**
**1 ≤ T1, T2, T3 ≤ 1000000000**
**0 ≤ T4 < T1 + T2**

### Sample

```

<strong>Input</strong>
2
2 2 1 2
2 3 4 1

<strong>Output</strong>
0.5
0.4


```
### Explanation

**In the first test case**, the **5** possible outcomes after Chef discards 2 tickets is

- **(0,2,1)** with probability **(1/10)**. Probability of winning is  - since there are no winning tickets!
- **(2,0,1)** with probability **(1/10)**. Probability of winning is **1** - since there are no losing tickets!
- **(2,1,0)** with probability **(1/5)**. Probability of winning is **(2/3)** - there are no second chances!
- **(1,2,0)** with probability **(1/5)**. Probability of winning is **(1/3)** - there are no second chances!
- **(1,1,1)** with probability **(2/5)**. Probability of winning is **(1/3) + (1/3)\*(1/2) = (1/2)**. This is calculated by considering the two cases 
  - The winning ticket is picked in the first turn - probability **(1/3)**.
  - A **Type-3** ticket is picked in first turn, followed by the winning ticket - probability **(1/3)\*(1/2)**.

The over-all probability of winning is **(1/10) + (2/15) + (1/15) + (1/5) = (1/2)**.