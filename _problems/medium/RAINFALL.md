---
category_name: medium
problem_code: RAINFALL
problem_name: 'Rain vs City'
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
problem_author: utkarsh_lath
problem_tester: null
date_added: 7-07-2016
tags:
    - utkarsh_lath
time:
    view_start_date: 1468063200
    submit_start_date: 1468063200
    visible_start_date: 1468063200
    end_date: 1735669800
    current: 1493557875
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL16/mandarin/RAINFALL.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL16/russian/RAINFALL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL16/vietnamese/RAINFALL.pdf) as well.

You are given an **n\*m** matrix **A**. **A\[1\]\[1\]** is the top-left cell, and **A\[n\]\[m\]** is the bottom-right cell. You want to fill a matrix **B\[n\]\[m\]** using the following pseudo code. All the entries of matrix **B** are zero initially.

`randomInt(a, b)` returns an uniform random integer between a and b (both inclusive). That is, all the b-a+1 integers have an equal probability of being returned.


<pre>
For x = 1 to n:
  For y = 1 to m:
    I = randomInt(1, x)
    J = randomInt(1, y)
    K = randomInt(x, n)
    L = randomInt(y, m)
    Consider the rectangle formed by (I, J) as top-left and (K, L) as 
    right-bottom cell. Add A[x][y] to every cell in the B matrix which
    is within this rectangle.
    This means B[p][q] += A[x][y] if I <= p <= K and J <= q <= L.

</pre>A city is constructed, which has **n \* m** houses. The house located at **(i, j)** has height **B\[i\]\[j\]** above sea level. After **X** amount of rainfall, all houses whose height is less than or equal to **X** are submerged in water.

Note than in the above construction, the heights of houses inside the city are not constant, but vary based on outcome of the previous algorithm.

You have to answer **Q** queries, where each query is defined by an integer **k** (**0 < k < n \* m**). You have to find the smallest integer **X**, so that if there is **X** amount of rainfall, expected number of houses submerged in water are at least **k**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains three integers, **n, m** and **Q**.

The next **n** lines contain **m** space separated integers each, denoting the initial matrix **A**.

The next **Q** lines have one integer each, the query parameter **k**.

### Output

For each test case, for each query, output a single line containing the smallest value of integer **X**.

### Constraints

- **1** ≤ **T** ≤ **1000**
- **1 ≤ n,m ≤ 20**
- **1 ≤ A\[i\]\[j\] ≤ 5**
- **1 ≤ Q ≤ 400**
- **0 < k < n\*m**
- The sum of **n\*m** for all test cases in a single file does not exceed 500

### Example

<pre><b>Input:</b>
1
1 2 1
2 3
1

<b>Output:</b>
3

</pre>### Explanation
These are the following possible values of B:

<pre>
2 3

5 3

2 5

5 5

</pre>All these four values of **B** appear with same probability, 1/4. The expected number of houses submerged when X = 3 is (2 \* 1/4 + 1 \* 1/4 + 1 \* 1/4 + 0 \* 1/4) = 1.if rainfall is less than 3, then the expected number of submerged houses is less than 1.
