---
category_name: hard
problem_code: DISTNUM2
problem_name: 'Easy Queries'
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
max_timelimit: '6'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: kevinsogo
date_added: 23-08-2015
tags:
    - funtional
    - hard
    - may16
    - mgch
    - range
    - segment
editorial_url: 'http://discuss.codechef.com/problems/DISTNUM2'
time:
    view_start_date: 1463391000
    submit_start_date: 1463391000
    visible_start_date: 1463391000
    end_date: 1735669800
    current: 1493556690
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MAY16/mandarin/DISTNUM2.pdf), [Russian](http://www.codechef.com/download/translated/MAY16/russian/DISTNUM2.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MAY16/vietnamese/DISTNUM2.pdf) as well.

You are given an array **A** consisting of **N** positive integers. You have to answer **Q** queries on it of following type:

- **l r k** : Let **S** denote the _sorted (in increasing order)_ set of elements of array **A** with its indices between **l** and **r**. Note that set **S** contains distinct elements (i.e. no duplicates).
  You need to find **kth** number in it. If such a number does not exist, i.e. the **S** has less than **k** elements, output -1.

All the indices in the queries are 1-based.

### Input

The first line of input contains two space separated integers **N** and **Q** denoting the number of elements in **A**, and the number of queries, respectively.

 The second line of input contains **N** space separated integers denoting the array **A**.

 Each of the next **Q** lines contains five integers **ai**, **bi**, **ci**, **di**, **ki**.
 We will generate **li**, **ri** indices for this query as follows:

<pre>
Let answer for <b>i - 1<sup>th</sup></b> query equal <b>ans<sub>i - 1</sub></b>. 
For <b>0<sup>th</sup></b> query <b>ans<sub>0</sub></b> = 0. 
Define <b>l<sub>i</sub></b> = (<b>a<sub>i</sub></b> x <b>max(ans<sub>i - 1</sub>, 0)</b> + <b>b<sub>i</sub></b>) mod <b>N</b> + 1, 
<b>r<sub>i</sub></b> = (<b>c<sub>i</sub></b> x <b>max(ans<sub>i-1</sub>, 0)</b> + <b>d<sub>i</sub></b>) mod <b>N</b> + 1. 
If <b>l<sub>i</sub></b> > <b>r<sub>i</sub></b>, then swap <b>l<sub>i</sub></b> and <b>r<sub>i</sub></b>.
	
</pre>### Output

For each query, output the answer to the query in a single line. If such a number doesn't exist, output **-1**.

### Constraints

- **1** ≤ **N, Q** ≤ **105**
- **1** ≤ **Ai** ≤ **109**
- 0 ≤ **ai**, **bi**, **ci**, **di** ≤ **N**
- **1** ≤ **li** ≤ **ri** ≤ **N**
- **1** ≤ **ki** ≤ **N**

### Example

<pre><b>Input:</b>
4 4
3 2 1 2
0 1 0 3 2
2 0 0 3 4
1 2 1 3 2
2 0 0 3 3

<b>Output:</b>
2
-1
2
3

<b>Input:</b>
10 10
9 10 6 3 8 4 9 6 4 10
0 2 0 9 3
1 9 1 3 3
1 8 1 0 3
1 2 1 7 2
1 6 1 2 3
1 4 1 3 1
1 6 1 6 1
1 4 1 8 1
1 9 1 3 3
1 9 1 2 1

<b>Output:</b>
6
9
10
4
6
3
10
4
6
4
</pre>### Subtasks

- **Subtask #1 (10 points) :** **Q** x **N** ≤ 107
- **Subtask #2 (20 points) :** **ki** = 1
- **Subtask #3 (30 points) :** **ai** = 0, **ci** = 0
- **Subtask #4 (40 points) :** Original constraints

### Explanation

**Example #1:**

_Query 1._ Sorted set of elements : {1, 2}. Second number in this is 2.

_Query 2._ Sorted set of elements : {1, 2, 3}. Fourth number doesn't exist, hence answer is -1.

_Query 3._ Sorted set of elements : {1, 2}. Second number in this set is 2.

_Query 4._ Sorted set of elements : {1, 2, 3}. Third number in this set is 3.
