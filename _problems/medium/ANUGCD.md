---
category_name: medium
problem_code: ANUGCD
problem_name: 'Maximum number, GCD condition'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: anudeep2011
problem_tester: null
date_added: 23-01-2014
tags:
    - anudeep2011
    - march14
    - medium
    - prime
    - segment
editorial_url: 'http://discuss.codechef.com/problems/ANUGCD'
time:
    view_start_date: 1395135000
    submit_start_date: 1395135000
    visible_start_date: 1395135000
    end_date: 1735669800
    current: 1493557477
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MARCH14/mandarin/ANUGCD.pdf) and [Russian](http://www.codechef.com/download/translated/MARCH14/russian/ANUGCD.pdf).

### Statement

You will be given an array **A** of **N** integers. You need to answer **M** queries.
Each query is of the form **G x y**.
For each query, construct the set **S** from **A**. **A\[i\]** is included in **S** if **x** <= **i** <= **y** and **GCD(G,A\[i\])** > 1.

Let **MAX** be the maximum number present in **S**. Output **MAX** and number of occurances of **MAX** in **S**. 
If no such number exists, output "**-1 -1**" (without quotes).

### Input

The first line of the input contains 2 integers **N** and **M**.
Next line has **N** integers representing the elements of array **A**.
**M** lines follow, one per query. Each line has 3 integers **G**, **x** and **y**

### Output

For each query output the required Answer.

### Constraints

- **1** ≤ **N,M,G,A\[i\]** ≤ **100000** (**1** ≤ **i** ≤ **N**)
- **1** ≤ **x** ≤ **y** ≤ **N**

### Example

<pre><b>Input</b>
6 5
1 2 3 4 5 4
2 1 5
121 1 6
3 2 6
5 5 5
24 4 6

<b>Output</b>
4 1
-1 -1
3 1
5 1
4 2
</pre>### Explanation

**Query #1**
GCD(2,1)=1, GCD(2,2)=2, GCD(2,3)=1, GCD(2,4)=2, GCD(2,5)=1

S = {2,4}

MAX = 4

**Query #2**
S = {}

There is no element in **A** such that GCD(121, A\[i\])>1

**Query #5**
GCD(24,4)=4, GCD(24,5)=1, GCD(24,4)=4

S = {4,4}

MAX = 4

Answer is "4 2" as there are 2 occurances of 4 in **S**
