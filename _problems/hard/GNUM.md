---
category_name: hard
problem_code: GNUM
problem_name: 'Game of Numbers'
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
problem_author: darkshadows
problem_tester: null
date_added: 23-05-2014
tags:
    - darkshadows
    - hard
    - july14
    - maths
    - maxflow
editorial_url: 'http://discuss.codechef.com/problems/GNUM'
time:
    view_start_date: 1405330200
    submit_start_date: 1405330200
    visible_start_date: 1405330200
    end_date: 1735669800
    current: 1493556718
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/JULY14/mandarin/GNUM1.pdf) and [Russian](http://www.codechef.com/download/translated/JULY14/russian/GNUM.pdf).

Mr. Yagami is playing a game of numbers. He has two arrays, each of size **N** denoted by **A1,A2...AN** and **B1,B2...BN**.

Now, he has to make a move each minute. Let us maintain two sets **S1** and **S2** which are empty intially. In one move , first he'll pick a pair of indexes **(i, j)** such that it's already not present in **S1**. Also, **Bj &gt; Ai** and **GCD(Ai,Bj)** is not **1**. Further, he'll pick another pair of indices **(p, q)** such that it's already not present in **S2**. Also, **Bp &lt; Aq** and **GCD(Aq,Bp)** is not **1**. Also, **GCD(Aq,Bp)** should not be coprime to **GCD(Ai,Bj)**. And, he'll add both pair of indices to **S1** and **S2**, respectively.

Help Mr. Yagami by printing the largest number of moves he can perform.

### Input

First line contain **T**, the number of testcases. Each testcase consists of **N** in one line, followed by two lines of **N** space separated integers each, denoting arrays **A** and **B**, respectively.

### Output

For each testcase, print the maximum number of moves Mr. Yagami can make, in one line.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **400**
- **1** ≤ **Ai, Bi** ≤ **109**

### Example

<pre><b>Input:</b>
2
4
2 5 6 14
3 4 7 10
2
2 3
5 7

<b>Output:</b>
3
0

</pre>
### Explanation

First testcase:
Following are the possible moves denoting by (i,j) and (p,q)
1st move: (1,2) and (2,3)
2nd move: (1,4) and (2,4)
3rd move: (3,4) and (4,4)
In any possible combination not more than 3 moves are possible.

Second testcase:
No move is possible.
