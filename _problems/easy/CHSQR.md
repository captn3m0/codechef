---
category_name: easy
problem_code: CHSQR
problem_name: 'Chef and squares'
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
problem_author: fiter
problem_tester: xcwgf666
date_added: 11-07-2016
tags:
    - basic
    - fiter
    - nov16
    - simple
editorial_url: 'http://discuss.codechef.com/problems/CHSQR'
time:
    view_start_date: 1479115800
    submit_start_date: 1479115800
    visible_start_date: 1479115800
    end_date: 1735669800
    current: 1493558129
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV16/mandarin/CHSQR.pdf), [Russian](http://www.codechef.com/download/translated/NOV16/russian/CHSQR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV16/vietnamese/CHSQR.pdf) as well.

Chef has finished his freshman year in college. As a present, his parents gave him a new problem to solve:

Chef has to fill a **K x K** square grid of integers in a certain way. Let us say that such a grid is _valid_ if:

- Each cell contains an integer from **1** and **K** (inclusive).
- No integer appears twice in the same row or the same column.

Let **F(K)** be maximum possible distance between the center of the square and the closest cell that contains **1**, among all possible squares with the side length **K**.

Here, we use the following notions:

- The distance between cell **(x, y)** and **(i, j)** is equal to **|x-i|+|y-j|**.
- The center of a **K x K** square is cell **((K+1)/2, (K+1)/2)** for odd **K**.

### Input

The first line of input contains a single integer **T** denoting the number of test cases.
Each test case consists of a single line containing a single odd integer **K**.

### Output

For each test case, print **K** lines each consisting of **K** space separated integers giving some square grid where the distance from the center of the grid to the nearest **1** is exactly **F(K)**. If there's more than 1 possible answer output any of them. ### Constraints

- **Ki** is odd.

**Subtask **\#1** (10 points)**  : - **1** ≤ **T** ≤ **50**
- **1** ≤ **Ki**≤ **5**
 
**Subtask **\#1** (90 points)**  : - **1** ≤ **T** ≤ **10**
- **1** ≤ **Ki** 400
 
### Example

<pre><b>Input:</b>
<tt>2
1
3</tt>
<b>Output:</b>
<tt>1
3 2 1
1 3 2
2 1 3</tt>


</pre>