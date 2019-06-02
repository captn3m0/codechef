---
category_name: easy
problem_code: SEATL
problem_name: 'Sereja and Two Lines'
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
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: iscsi
date_added: 1-12-2014
tags:
    - feb16
    - medium
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/SEATL'
time:
    view_start_date: 1455528600
    submit_start_date: 1455528600
    visible_start_date: 1455528600
    end_date: 1735669800
    current: 1493558187
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB16/mandarin/SEATL.pdf), [Russian](http://www.codechef.com/download/translated/FEB16/russian/SEATL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/FEB16/vietnamese/SEATL.pdf) as well.

Sereja has a matrix **A** with **N** rows and **M** columns with positive integer elements. Consider the multiset **Sij** made from the elements in the **i**th row, along with those in the **j**th column of **A** (do not count the element **Aij** twice). Then, define a matrix **F** as **Fij = maxx ∈ Sij count(x, Sij)**, where **count(x, S)** gives the number of times a number **x** occurs in the multiset **S**.

For example, for the matrix

<pre>
1 2 1 2
3 4 1 2
1 1 1 1
2 2 2 2
</pre>
The matrix **F** is

<pre>
3 3 4 4
3 3 3 3
5 4 6 4
4 5 4 6
</pre>
Your task is to find the value of the maximum element of **F**.

### Input

The first line of input contains a single integer **T**, the number of test cases. **T** tests follow. First line of each test case contains two integers, **N** and **M**. Each of the next **N** lines contain **M** numbers, representing the matrix **A**. ### Output

For each test case, output a line containing a single integer, the answer to the problem. ### Constraints

- **1** ≤ **sum of N\*M over all testcases** ≤ **106**
- **1** ≤  **A\[i\]\[j\]**  ≤ **106**

### Example

<pre><b>Input:</b>
1
4 4
1 2 1 2
3 4 1 2
1 1 1 1
2 2 2 2

<b>Output:</b>
6

</pre>
### Sub tasks

- Sub task #1: **1 ≤ N, M ≤ 10** (10 points)
- Sub task #2: **1 ≤ N, M ≤ 100** (20 points)
- Sub task #3: **original constraints** (70 points)
