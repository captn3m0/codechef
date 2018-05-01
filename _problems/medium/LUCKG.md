---
category_name: medium
problem_code: LUCKG
problem_name: 'Lucky Game'
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
problem_author: 'witalij_hq '
problem_tester: null
date_added: 25-04-2014
tags:
    - ad
    - bfs
    - july14
    - medium
    - witalij_hq
editorial_url: 'http://discuss.codechef.com/problems/LUCKG'
time:
    view_start_date: 1405330200
    submit_start_date: 1405330200
    visible_start_date: 1405330200
    end_date: 1735669800
    current: 1493557762
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JULY14/mandarin/LUCKG.pdf) and [Russian](http://www.codechef.com/download/translated/JULY14/russian/LUCKG.pdf).

Chef, to entertain customers, decided to establish some kind of game in his restaurant. And here is what he invented:
n players sit around a round table. There is n \* m cards with unique numbers of range **1..n\*m**.
Each player has m cards. In each set of the game each player selects some card and everyone shows his card at the same time. Card of **ith** player is compared to card of player **p\[i\]**. If it’s number is greater than the number on card of player **p\[i\]**, then **ith** gets a point. **P** is a permutation of sequence **0..n-1**.
But all customers when playing this game want to win. Chef on his side wants to please his customers. So, he decided to give cards in such way, that each player gets a point with probability larger than **½**.
But it appears to be a complicated task, so he asks you for help.

### Input

First line of input contains **T** – number of test cases. Then **T** test cases follow. Each test case consists of two lines. First line contains two numbers – **n** and **m**. Second one – permutation **p**.

### Output

For each test case, if there’s no solution output single line _“No Solution”_ (without quotes), otherwise output **n** lines with cards for each player. **ith** line should contain **m** numbers in increasing order – numbers on **ith** player’s cards.

Extra spaces at the end of the line are not allowed./>

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **n, m** ≤ **103**

### Example

<pre><b>Input:</b>
2
1 1
0
3 3
2 0 1

<b>Output:</b>
No Solution
2 6 7
3 4 8
1 5 9
</pre>**Explanation**
For second test case, probability is 5/9 for each player to get a point.
