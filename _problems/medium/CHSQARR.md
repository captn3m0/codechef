---
category_name: medium
problem_code: CHSQARR
problem_name: 'Chef and Rectangle Array'
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
max_timelimit: '1 - 4'
source_sizelimit: '50000'
problem_author: antoniuk1
problem_tester: iscsi
date_added: 22-07-2015
tags:
    - antoniuk1
    - dynamic
    - june16
    - medium
    - partial
editorial_url: 'http://discuss.codechef.com/problems/CHSQARR'
time:
    view_start_date: 1465983000
    submit_start_date: 1465983000
    visible_start_date: 1465983000
    end_date: 1735669800
    current: 1493557573
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JUNE16/mandarin/CHSQARR.pdf), [Russian](http://www.codechef.com/download/translated/JUNE16/russian/CHSQARR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JUNE16/vietnamese/CHSQARR.pdf) as well.

Chef has a two-dimensional matrix **A** of dimensions **N** × **M**, (**N** rows and **M** columns).

He calls the matrix **A** beautiful if there exist an **a**×**b** submatrix, such that all of its elements are equal. In one minute Chef can increase one element of the matrix **A** by 1. Now he asks you to find out minimum time he will need to make the matrix **A** beautiful?

Please note that sub-matrix of a matrix is a **continuous** rectangular block of the matrix. It can be denoted by two pair of indices **(x1, y1)** and **(x2, y2)** where **x1 ≤ x2**, **y1 ≤ y2**. The content of the submatrix will be all the cells **(i, j)** such that **x1 ≤ i ≤ x2** and **y1 ≤ j ≤ y2**.

### Input

- There is a single test case.
- The first line contains two space-separated integers **N**, **M** denoting the number of rows and columns in the matrix **A**, respectively
- Each of the next **N** lines, contains **M** space-separated integers denoting the **i**-th row of the array
- Next line contains one integer **Q** - amount of questions
- Each of next **Q** lines contains two space-separated integers **a** and **b** denoting sizes of submatrix sought.
- All questions are independent and do not influence each other. It means when you answer question, you don't need to change the array

### Output

9. For each question, output a single line containing the minimum time that Chef needs to make an matrix **A** beautiful (for parameters **a** and **b** from question)
### Constraints

- **1** ≤ **Q** ≤ **50**
- **1** ≤ **N**, **M**, **Ai, j** ≤ **1000**
- **1** ≤ **a** ≤ **N**
- **1** ≤ **b** ≤ **M**

### Subtasks

**Subtask #1 (13 pts)**

- **1** ≤ **N**, **M** ≤ **50**
- TL = 1s

**Subtask #2 (35 pts)**

- **1** ≤ **N**, **M** ≤ **200**
- TL = 2s

**Subtask #3 (52 pts)**

- Original constraints
- TL = 4s

### Example

<pre><b>Input:</b>
3 4
1 8 3 4
5 2 3 1
3 6 2 2
4
1 1
2 2
2 3
3 2

<b>Output:</b>
0
4
15
9
</pre>### Explanation

**Question #1:**
Chef can choose any 1 × 1 submatrix and it will take his 0 minutes to make it beautiful.

**Question #2:**
The best variant is submatrix

<pre>
3 1
2 2
</pre>**Question #3:**
The next submatrix Chef can make equal in 15 minutes

<pre>
5 2 3
3 6 2
</pre>**Question #4:**

<pre>
3 4
3 1
2 2
</pre>