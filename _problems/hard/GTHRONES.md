---
category_name: hard
problem_code: GTHRONES
problem_name: 'A Game of Thrones'
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
problem_author: yellow_agony
problem_tester: laycurse
date_added: 8-07-2012
tags:
    - aug12
    - flow
    - hard
    - matching
    - yellow_agony
editorial_url: 'http://discuss.codechef.com/problems/GTHRONES'
time:
    view_start_date: 1344677937
    submit_start_date: 1344677937
    visible_start_date: 1344677400
    end_date: 1735669800
    current: 1493556724
layout: problem
---
All submissions for this problem are available.Bran and Tyrion are the last two high lords fighting for the Iron Throne. With a mutual agreement that included all knights of the realm, it was decided to settle the issue with a game of thrones, of course not a game of swords but a game of numbers, after all one of them is a cripple and other is a dwarf. Seven wisest men of the realm came forward and forged rules of this game which are as follows :

1. Initially **N** numbers were written down on a notebook (possibly with multiple copies of every number).

2. Players alternate their turns with Bran playing first.

3. In the first turn Bran gets to choose a number of his choice from the numbers written on the notebook and declare it as the current number of the game.

4. After that in every move this is what they do : let's say the current number of the game is **u**. They erase **u** from the notebook (if u was written multiple times, they erase it only once) and declare one of the numbers still written on the notebook **v** as current number of the game. **v** can be chosen iff prime factorization of **u** and **v** differ by exactly 1 prime factor. ( Read notes for a more formal definition)

5. The player who can't make a move loses the game.



You're one of Varys' spider and he has asked you to predict the outcome of this game beforehand so that he can devise future strategy. So you've to find out who has a winning strategy assuming both players play optimally.

**Notes:**  
1\) **v** can be chosen after **u** iff either of the following conditions hold :

1. **v** > **u** and **u** | **v** and (**v** / **u**) is prime
2. **u** > **v** and **v** | **u** and (**u** / **v**) is prime

2) A natural number if prime if it has exactly two distinct positive factors. 1 is not a prime number. 
### Input

First line of the input contains a single integer **N** denoting number of different numbers written in the notebook. Then follow **N** lines. Each of the following lines contain two space separated integers : **ui**and **ci** where **ui**is the ith distinct integer written on notebook and it has been repeated **ci**number of times.

### Output

Your program should print Bran if he has a a winning strategy else it should print Tyrion. Also in case Bran could win, your program must output the smallest number Bran could choose in the first turn to ensure a win. See sample output for details.

### Example

<pre>
<b>Input:</b>
3
2 3
14 3
21 2

<b>Output:</b>
Bran 21

</pre>### Constraints:
1 N 1 ui1 ciAll **ui**are distinct.
