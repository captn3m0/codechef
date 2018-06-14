---
category_name: challenge
problem_code: SEADIVM
problem_name: 'Sereja and Matrix Division'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - CLOJ
    - FS
max_timelimit: '10'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: null
date_added: 10-09-2014
tags:
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/SEADIVM'
time:
    view_start_date: 1434360600
    submit_start_date: 1434360600
    visible_start_date: 1434360600
    end_date: 1735669800
    current: 1525454468
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JUNE15/mandarin/SEADIVM.pdf) and [Russian](http://www.codechef.com/download/translated/JUNE15/russian/SEADIVM.pdf).

Sereja has a matrix with size **N\*M**, a cell with coordinate **(i,j)** contains the integer **A\[i\]\[j\]**. Sereja wants to divide the matrix into two parts between him and Dima. Sereja wants to choose **C** rectangles, i-th rectangle has coordinates **X1\[i\], Y1\[i\], X2\[i\], Y2\[i\]** (**1 , **1 , we assume that any cell with coordinate **(x, y)** fits condition **X1\[i\] and **Y1\[i\] lies inside i-th rectangle). They need to be chosen in such a way that rectangles divide matrix in two equal parts. Lets **Q\[x\]** be number of number **x** from given matrix, that lies in at least one of the chosen rectangles, let **W\[x\]** be the opposite value - number of number **x** from the given matrix, that lies outside of each rectangle. Set of chosen rectangles divide matrix on two equal parts if and only if **Q\[x\]=W\[x\]** for all **x**.******** Help Sereja minimize number **C**. Also find **C** rectangles that divide matrix in two equal parts. ### Input

First line contains the number of test cases **T**. **T** tests follow. First line of each test case contains integers **N, M**. Each of the next **N** lines contains **M** integers. It is guaranteed that there is at least one required division. ### Output

First line of each test case should contain number **C**. Each of next **C** lines contains four numbers - coordinates of a rectangle. Sum of squares of all chosen rectangles shouldn't exceed **N\*M**. ### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **N, M** ≤ **100**
- **1** ≤ **A\[i\]\[j\]** ≤ **1000**

### Example

<pre><b>Input:</b>
1
4 5
1 2 3 4 5
5 4 3 2 1
6 7 8 9 10
6 7 8 9 10

<b>Output:</b>
2
1 1 1 5
4 1 4 5
</pre>### Scoring

For each test case you will gain score **Y** as sum of all **C** in output. Lets **yourscore** is equal to sum of all **Y**. Score you will see on dashboard will be equal to **bestscore**/**yourscore**. ### Tests generation

There will be five test cases. Each test case will contain **100** tests inside, in each test **N = M = 100**. Matrices are generated randomly and they are guaranteed to have at least one solution.
