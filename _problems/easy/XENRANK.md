---
category_name: easy
problem_code: XENRANK
problem_name: 'Xenny and Coin Rankings'
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
problem_author: wittyceaser
problem_tester: null
date_added: 14-05-2017
tags:
    - wittyceaser
time:
    view_start_date: 1497259800
    submit_start_date: 1497259800
    visible_start_date: 1497259800
    end_date: 1735669800
    current: 1497284414
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JUNE17/mandarin/XENRANK.pdf), [Russian](http://www.codechef.com/download/translated/JUNE17/russian/XENRANK.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JUNE17/vietnamese/XENRANK.pdf) as well.

Xenny reverse-engineered all the binaries released by the International Security Agency (ISA) during summer vacation just to pass time. As a reward, the ISA gave him infinite ByteCoins.

Out of sheer boredom and a sense of purposelessness in life, Xenny decided to arrange the Coins on a 2-Dimensional Euclidean Plane. The boredom was so strong that he arranged these coins in a specific pattern, as opposed to the usual, monotonous way of storing coins in a Piggy Bank.

On each integer co-ordinate (x, y) where x ≥ 0 and y ≥ 0, a single coin was placed. And each coin was assigned a rank. The following pattern was followed in the arrangement:

Let's denote the co-ordinates of the kth coin by (xk, yk) and its rank by Rk.

![](https://docs.google.com/drawings/d/11xOeiWc_yhJz9WxoLddlTWO872Hel8of6atHHhWD2-Q/pub?w=475&h=422)For any 2 coins i, j:

if **(xi + yi) j + yj) or ( (xi + yi) == (xj + yj) and xi j)**

then **Ri j**. We sort all the coins by this comparison.

The index of the coin (C) in this sorted list of coins (1-indexed) is its rank.

Each query is as follows: Given **(U, V)**. Among the coins that are lying on or inside the rectangle with its diagonal end-points being **(0, 0)** and **(U, V)**, which is the coin that has the maximum rank?

### Input

The first line contains an integer, **T** - the number of testcases.

Each testcase contains 2 space-separated integers: **U**, **V**.

### Output

For each testcase, print the rank of the maximum ranked coin, on a new line. ### Constraints

 Subtask 1: (40 points)

- **1 ≤ T ≤ 100**
- **1 ≤ U, V ≤ 100**
 
 Subtask 2: (60 points)

- **1 ≤ T ≤ 100**
- **1 ≤ U, V ≤ 109**
 
### Sample Testcase

<pre>
<b>Input</b>:
1
1 2

<b>Output</b>:
8
</pre>