---
category_name: medium
problem_code: XORGRID
problem_name: 'Devu and most energetic minion'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: flying_ant
problem_tester: null
date_added: 15-05-2015
tags:
    - cook58
    - flying_ant
    - medium
    - tries
editorial_url: 'http://discuss.codechef.com/problems/XORGRID'
time:
    view_start_date: 1432492200
    submit_start_date: 1432492200
    visible_start_date: 1432492200
    end_date: 1735669800
    current: 1493557957
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK58/mandarin/XORGRID.pdf) and [Russian](http://www.codechef.com/download/translated/COOK58/russian/XORGRID.pdf) as well.

After celebrating his birthday, Devu decided to have some adventure and set himself on a secret mission by joining the AVL (Anti-Villain League) to fight against bad people. For their new secret mission, Devu wants to recruit the most energetic minion. You know how minions get energy? By eating bananas. The minions travel in a grid **B** that has bananas in each of its **N x N** cells. **B\[x\]\[y\]** is the energy stored in a banana in row **x** and column **y**.

The journey starts from top-left cell (1, 1) and ends at bottom-right cell **(N, N)** by going only either right or down each step (i.e. from a cell (x, y) to either (x, y + 1) or (x + 1, y) only). Initial energy of minion is zero. When a minion with energy **e** enters a cell (x, y), it eats a banana and its energy becomes **e ^ B\[x\]\[y\]**, where **^** is the standard bitwise-XOR operator. There are many different ways of completing the journey. Please help the minion to find out a journey with maximum energy so that it can be recruited by Devu. Please output the maximum energy a minion can achieve in some journey

*(Bitwise xor operator is denoted by a caret (^) in several programming languages like C, C++, C#, Java, Perl, Ruby and Python. More about it: http://en.wikipedia.org/wiki/Exclusive\_or)*### Input

- There is a single test case.
- First line contains an integer **N** denoting the number of rows or columns of the grid **B**.
- Next **N** lines represent the grid B, where each of these N lines contain N space separated integers. i-th line contains **N** space separated integers denoting i-th row of the grid B.

### Output

Print a single integer denoting maximum energy a minion can achieve at the end of a right-down path from (1, 1) to **(N, N)**.

### Constraints

- **2** ≤ **N** ≤ **18**
- 0 ≤ **B\[i\]\[j\]** ≤ **109**

### Example

<pre><b>Input:</b>
3
1 3 2
3 4 3
5 3 7

<b>Output:</b>
4
</pre>
### Explanation

<pre>
There are 6 different possible journeys of the minion, and energy at the end of them are --
One journey -- 1 ^ 3 ^ 2 ^ 3 ^ 7 = 4
Four journeys -- 1 ^ 3 ^ 4 ^ 3 ^ 7 = 2
One journeys -- 1 ^ 3 ^ 5 ^ 3 ^ 7 = 3
So the maximum energy achieved by a minion is 4.
</pre>