---
category_name: medium
problem_code: GAMCOUNT
problem_name: 'Counting Games'
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '6'
source_sizelimit: '50000'
problem_author: kevinsogo
problem_tester: null
date_added: 2-07-2016
tags:
    - kevinsogo
time:
    view_start_date: 1468063200
    submit_start_date: 1468063200
    visible_start_date: 1468063200
    end_date: 1735669800
    current: 1493557671
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL16/mandarin/GAMCOUNT.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL16/russian/GAMCOUNT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL16/vietnamese/GAMCOUNT.pdf) as well.

Henry and Derek are waiting in a room. They have successfully qualified for the Snackdown Finals 2016, and decide to pass the time by playing a new game.

Before the game starts, they select **N** numbers: **v(0)**, **v(1)**, ..., **v(N-1)**. These numbers will stay fixed throughout the game.

The initial state of the game consists of **K** integers **x1**, **x2**, ..., **xK**, each of which is in the range **\[0, N-1\]**. Thus, there are **NK** distinct states all in all. Then the players take turns, starting with Henry. In a turn, a player selects one of the integers, say **xi**, and decreases it by some _positive multiple_ of **2v(xi)**. However, this is only valid if the resulting number is nonnegative. A player loses if there are no more valid moves left.

Henry and Derek have gotten really good at playing this game, so much that they have figured out the optimal strategy, and they always play optimally! This made the game really boring for them, because the winner is solely determined by the initial state of the game. So instead of playing the game, they decided to just answer the following question instead:

**Of all the **NK** possible initial states, how many of them result in a win for Henry?**

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two integers, **N** and **K**.

The second line contains **N** space-separated integers **v(0)**, **v(1)**, ..., **v(N-1)**.

### Output

For each test case, output a single line containing a single integer, the number of initial states that result in a win for Henry. This number can be very large, so output it modulo **109 + 7**.

### Constraints

- **1** ≤ **T** ≤ **3**
- **1** ≤ **K** ≤ **106**
- **1** ≤ **N** ≤ **105**
- ≤ **v(i)** ≤ **104**

### Example

```
<b>Input:</b>
<tt>3
2 3
1 0
5 3
2 0 1 0 0
5 3
2 0 1 0 1
</tt>
<b>Output:</b>
<tt>4
94
100</tt>

```
### Explanation

In the first case, the following initial states result in a win for Henry: \[1,1,1\], \[0,0,1\], \[0,1,0\], \[1,0,0\].