---
category_name: medium
problem_code: TWONIM
problem_name: 'Dual Nim'
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
problem_author: xellos0
problem_tester: antoniuk1
date_added: 27-01-2016
tags:
    - cook68
    - easy
    - game
    - nim
    - parity
    - xellos0
editorial_url: 'http://discuss.codechef.com/problems/TWONIM'
time:
    view_start_date: 1458498600
    submit_start_date: 1458498600
    visible_start_date: 1458498600
    end_date: 1735669800
    current: 1493557952
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK68/mandarin/TWONIM.pdf), [Russian](http://www.codechef.com/download/translated/COOK68/russian/TWONIM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK68/vietnamese/TWONIM.pdf) as well.

[Nim](https://en.wikipedia.org/wiki/Nim) is a well-known combinatorial game, based on removing stones from piles. In this problem, we'll deal with a similar game, which we'll call Dual Nim. The rules of this game are as follows:

- Initially, there are **N** piles of stones, numbered **1** through **N**. The **i**-th pile contains **ai** stones.
- The players take alternate turns. If the [bitwise XOR](https://en.wikipedia.org/wiki/Bitwise_operation#XOR) of all piles equals 0 before a player's turn, then that player wins the game.
- In his/her turn, a player must choose one of the remaining piles and remove it. (Note that if there are no piles, that player already won.)

Decide which player wins, given that both play optimally.

### Input

- The first line of the input contains an integer **T** - the number of test cases.
- The first line of each test case contains **N** - the number of piles.
- The following line contains **N** space-separated integers **a1,..,aN** - the sizes of piles.

### Output

For each test case, output one string on a separate line - "First" (without quotes) if the first player wins, "Second" (without quotes) if the second player wins.

### Constraints

- **1 ≤ T ≤ 10**
- **1 ≤ N ≤ 500**
- **1 ≤ ai ≤ 500**

### Example

<pre><b>Input:</b>
3
4
1 2 4 8
3
2 3 3
5
3 3 3 3 3

<b>Output:</b>
First
Second
Second

</pre>