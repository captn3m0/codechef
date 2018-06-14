---
category_name: easy
problem_code: NUMBGAME
problem_name: 'Number Game'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: balajiganapath
problem_tester: null
date_added: 13-12-2017
tags:
    - acm17kgp
    - balajiganapath
    - dfs
    - graph
    - kgp17rol
    - medium
    - number
editorial_url: 'https://discuss.codechef.com/problems/NUMBGAME'
time:
    view_start_date: 1515875400
    submit_start_date: 1515875400
    visible_start_date: 1515875400
    end_date: 1735669800
    current: 1525454369
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are playing a game with a robot. The game starts with two integers: **A** and **M**. The robot makes exactly one move in the entire game, and it does so at the very beginning - it will remove exactly 1 digit from **A** and output it as the starting value (say _X_). Note that the value **A** remains intact. It is not changed by the robot. After the robot makes its moves, it is your turn. You can make an unlimited number of moves. In each move, you must remove exactly 1 digit from A and append it to _X_ (to the right side of X). Again note that none of your moves change the value of **A**. You win if you can eventually make X a multiple of M (i.e. X mod M = 0). How many possible starting moves bot can make such that you are guaranteed to win assuming you play optimally?

Here is an example of a game: Suppose the numbers are **A** = 1003, **M** = 4. The robot can make four possible starting moves: 003 by removing 1st digit, 103 by removing 2nd or 3rd digit (both count as a separate possibilities even though the starting X will be same) or 100 by removing the 4th digit. Let us say the robot chooses 003 as the starting move. Then you can win by appending 100 (by removing the 4th digit) making X = 003100 which is divisible by 4.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows
- The only line of each test case contains 2 integers **A** and **M**.

### Output

- For each test case, output a single line containing the number of possible first moves that the robot can make such that you can force a win.

### Constraints

- **1** ≤ **T** ≤ **100**
- **10** ≤ **A** < **10106** (i.e. The number of digits in **A** can be upto 106)
- **1** ≤ **M** ≤ **1000**
- The sum of number of digits of **A** over all test cases will not exceed **5 \* 10^6**

### Example

<pre><b>Input:</b>
5
1003 4
11 4
2004 3
123 1
100000 27

<b>Output:</b>
4
0
4
3
6
</pre>### Explanation

**Testcase 1:** Whatever the robot's starting move is, you can win by appending 100

**Testcase 2:** It is not possible to win, whatever the starting move of the robot
