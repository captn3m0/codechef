---
category_name: medium
problem_code: NWAYS
problem_name: 'Number of Ways '
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
problem_author: amitpandeykgp
problem_tester: xcwgf666
date_added: 4-05-2015
tags:
    - amitpandeykgp
    - combinatorics
    - easy
    - ltime24
editorial_url: 'http://discuss.codechef.com/problems/NWAYS'
time:
    view_start_date: 1433061000
    submit_start_date: 1433061000
    visible_start_date: 1433061000
    end_date: 1735669800
    current: 1493557822
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME24/mandarin/NWAYS.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME24/russian/NWAYS.pdf).

Devu is learning Combinatorics in his college. He find it very interesting to calculate number of ways of going to point **(c,d)** from point **(a,b)** in co-ordinate plane. We can take horizontal and vertical steps only and can not visit at a point twice. In a step, you can move one unit only. We have to reach to the point **(c,d)** from the point **(a,b)** using **abs(a-c)+ abs(b-d)** steps only.

Devu has two sets of points. Set **A** contains points having **X** co-ordinate 0 and **Y** co-ordinates varying from **1** to **N**(both inclusive). Set **B** contains points having **X** co-ordinate **K** and **Y** co-ordinates varying from **1** to **N**(both inclusive). Both sets contains **N** number of integral points. He wants to calculate the sum of number of ways to going to the each point of set **B** from the each point of set **A** .

As the answer can be large, print it modulo **1000000007**.

### Input

- First line of input contains an integer **T** denoting number of test cases.
- Next **T** lines will contain pair of integers **N** and **K**
### Output

For each test case, print a single integer representing the answer of that test case.

### Constraints

**Subtask #1: 10 points**

- **1 ≤ T ≤ 20, 1 ≤ N ,K ≤ 1000**

**Subtask #1: 10 points**

- **1 ≤ T ≤ 20, 1 ≤ N ,K ≤ 106**

**Subtask #3: 80 points**

- **1 ≤ T ≤ 10000, 1 ≤ N,K ≤ 106**

### Example


<pre><b>Input:</b>
2
2 2
4 5

<b>Output:</b>
8
236
</pre>### Explanation

For the first sample case,

ways\[(0,1)->(2,1)\]= 1

ways\[(0,2)->(2,2)\]= 1

ways\[(0,1)->(2,2)\]= 3

ways\[(0,2)->(2,1)\]= 3

**So, the total number of ways = 8.**
