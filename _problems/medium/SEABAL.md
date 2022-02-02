---
category_name: medium
problem_code: SEABAL
problem_name: 'Sereja and Ballons'
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
problem_author: sereja
problem_tester: white_king
date_added: 5-06-2013
tags:
    - aug13
    - bit
    - fenwick
    - medium
    - segment
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/SEABAL'
time:
    view_start_date: 1376299800
    submit_start_date: 1376299800
    visible_start_date: 1376299800
    end_date: 1735669800
    current: 1493557899
layout: problem
---
All submissions for this problem are available.Sereja has n boxes with balloons. Boxes are numbered with integers from **1** to **n**. The first box contains **a\[1\]** balloons, the second- **a\[2\]** balloons and so on.

Also Sereja wrote down m pairs of the number **(l\[1\], r\[1\]), (l\[2\], r\[2\]), ..., (l\[m\], r\[m\])** on a piece of paper. Now Sereja decided to play and began to burst the balloons in the boxes. At every step Sereja bursts one balloon from some box and wants to know : what is the count of the indices **i (1 ≤ i ≤ m)**, that all balloons in the boxes with the indices from **l\[i\]** to **r\[i\]** are already bursted.

Please, help Sereja.

### Input

The first line contains numbers **n** and **m** — the number of the boxes and the number of the pair of numbers. The next line contains **n** integers **a\[1\], a\[2\], ..., a\[n\]**.

The following **m** lines contain **m** pairs of numbers **(l\[1\], r\[1\]), (l\[2\], r\[2\]), ..., (l\[m\], r\[m\])**.

The next line contains number **k** — the number of times, when Sereja had his balloon bursted. The next **k** line contains integers **x\[1\], x\[2\], ..., x\[k\]**. Index of the box, in what Sereja bursted a balloon at the step number **i (1 ≤ i ≤ k)**, is denoted as **y\[i\]**., which can be found as: **y\[i\] = x\[i\] + ans\[i - 1\]**, wherein **ans\[0\] = 0**, аnd **ans\[i\] (i&gt;0)** — is the answer on the problem after ith bursting of the balloons.

### Output

For each test case, print **k** lines — the answers after every steps.

### Constraints

- **1 ≤ n, m ≤ 10^5**
- **1 ≤ a\[i\] ≤ 100000**
- **1 ≤ l\[i\] ≤ r\[i\] ≤ n**

### Example

<pre><b>Input:</b>
5 3
1 1 1 1 1
5 5
2 2
1 3
5
4
2
0
2
3

<b>Output:</b>
0
1
1
2
3
</pre>
**Update:**

You may assume that, y\[i\] &lt;= n and k &lt;= 100000
