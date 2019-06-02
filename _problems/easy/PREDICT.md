---
category_name: easy
problem_code: PREDICT
problem_name: Predictopus
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
problem_author: mkagenius
problem_tester: tuananh93
date_added: 22-04-2013
tags:
    - easy
    - june13
    - mkagenius
    - probability
editorial_url: 'http://discuss.codechef.com/problems/PREDICT'
time:
    view_start_date: 1371462362
    submit_start_date: 1371462362
    visible_start_date: 1371460885
    end_date: 1735669800
    current: 1493558176
layout: problem
---
All submissions for this problem are available.Chef Datta likes betting in Indian Premier League very much.

He has **10000** rupees. Today the match is between *team A* and *team B*. The winning probability of *team A* is **PA**, and hence winning probability of *team B* is **PB = 1 − PA**. 

Datta is free to bet any integral amount of money on any of the two teams as long as the total amount of money bet is at most **10000** rupees.
Help him know the expected amount of money he will eventually have if today he places his bet(s) optimally.

### Rules of the game:

If *team X* with winning probability **PX** actually wins and someone bets **M** rupees on this team, he will gain **(2\*(1−PX)) \* M** rupees.

If *team X* with winning probability **PX** actually loses and someone bets **N** rupees on this team, he will just lose **N** rupees.

### Input

First line contains single integer **T**, the number of testcases. Then **T** lines follow, each line contains **PA** the probability that *team A* wins.

### Output

For each test case output single line containing the expected amount of money Datta will eventually have today if he places his bet(s) optimally. Your answer will be accepted if the absolute error is less than **10−6**.

### Constraints

- **1** ≤ **T** ≤ **100001 (105+1)**
- **0.0** ≤  **PA**  ≤ **1.0**
- **PA** has at most **5** digits after the decimal point.

### Example

<pre><b>Input:</b>
1
0.510

<b>Output:</b>
10098
</pre>
### Example bet:

Look at the following situation:




![june-codechef](//codechef.com/download/PREDICT.png)




If chef Datta bets **6,000** on *team A* and **4,000** on *team B*, the expected amount of money he will have after the bet is settled is **10,018**. Apparently that is not the best he can do **;)**
