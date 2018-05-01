---
category_name: easy
problem_code: ANKGAME
problem_name: 'Ankit, Srijan and a game of stone piles'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: code_master01
problem_tester: rubanenko
date_added: 31-03-2015
tags:
    - code_master01
    - combinatorics
    - cook59
    - counting
    - easy
    - game
editorial_url: 'http://discuss.codechef.com/problems/ANKGAME'
time:
    view_start_date: 1434911400
    submit_start_date: 1434911400
    visible_start_date: 1434911400
    end_date: 1735669800
    current: 1493558106
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK59/mandarin/ANKGAME.pdf) and [Russian](http://www.codechef.com/download/translated/COOK59/russian/ANKGAME.pdf) as well.

There are **N** piles of stones, where i-th pile has **A**i stones. A game is played on these piles, in order from pile **1** to **N**. When the game is on the i-th pile, a player can remove any non-zero number of stones from this pile in a single move. If the current pile becomes empty, the game moves on to the next pile. The player who is unable to make a move loses.

Srijan and Ankit are going to play this game. Ankit, being younger, always gets to start the game. However, Srijan, being clever, sneaks into the game arena early and permutes the order of piles. Then, the game is played on this new order of piles. Your task is to find out the number of orders in which the piles can be arranged so that Ankit wins the game. Assume that both the players play optimally. Since the answer can be very large, output it modulo **109 + 7**.

Note that two orders are considered different if their contents are different. Formally, two orders A and B are different if there exists an index **k (1 ≤ k ≤ N**) such that **Ak != Bk**.

### Input

- The first line contains an integer **T**, denoting the number of test cases to follow. Each of the test cases contains exactly two lines.
- The first line for each test case contains an integer **N**, denoting the number of piles, and the next line contains **N** space-separated integers, denoting the number of stones in the piles.

### Output

For each test case, output a single integer corresponding to the answer for that test case.

### Constraints

- 1 ≤ **T** ≤ 1000
- 1 ≤ **N** ≤ 105
- 1 ≤ **A**i ≤ 1010
- The sum of values of **N** over all test cases does not exceed 106.

### Example:

**Sample input:**

<pre>
2
3
1 1 2
2
2 3

</pre>**Sample Output:**

<pre>
2
2

</pre>**Explanation:**

**Case 1:**
The following different orders are possible:

\[1, 1, 2\]
Ankit removes the only stone in the first pile.
Srijan removes the only stone in the second pile.
Ankit removes both the stones in the second pile.
Ankit wins.

\[1, 2, 1\]
Ankit removes the only stone in the first pile.
Srijan takes one stone from then the second pile. Ankit removes the remaining one stone from the second pile.
Srijan removes the only stone in the third pile.
Srijan wins.

\[2, 1, 1\]
Ankit removes both the stones in the first pile.
Srijan removes the only stone in the second pile.
Ankit removes the only stone in the second pile.
Ankit wins.

Thus, Ankit wins on 2 different orders.
