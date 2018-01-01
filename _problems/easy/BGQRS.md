---
category_name: easy
problem_code: BGQRS
problem_name: 'Big Queries'
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
problem_author: antoniuk1
problem_tester: alex_2oo8
date_added: 27-01-2015
tags:
    - antoniuk1
    - chasethered
editorial_url: 'https://discuss.codechef.com/problems/BGQRS'
time:
    view_start_date: 1476696600
    submit_start_date: 1476696600
    visible_start_date: 1476696600
    end_date: 1735669800
    current: 1493558109
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/OCT16/mandarin/BGQRS.pdf), [Russian](http://www.codechef.com/download/translated/OCT16/russian/BGQRS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/OCT16/vietnamese/BGQRS.pdf) as well.

**WARNING: This problem has large input / output files. Use of faster I/O methods is recommended.**

You are given an array **A** consisting of **N** integers. You have to answer **M** queries on it. Each query belongs to one of the following three types:

- **1 L R X** : multiply each number in the range **AL**, **AL + 1**, ..., **AR** by **X**.
- **2 L R Y** : Replace the elements **AL**, **AL + 1**, ..., **AR** by **Y, 2 \* Y, ... (R - L + 1) \* Y**. In other words, the number **Ai** will be equal to **(i - L + 1) \* Y** for each **i** from **L** to **R**.
- **3 L R** : Find the product of all numbers in the range **AL**, **AL + 1**, ..., **AR**. As this number could be very large, you have to just find the number of trailing zeros of this number when represented in decimal notation.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. **T** test cases follow.

The first line of each test case contains two space-separated integers **N** and **M**.

The second line contains **N** space-separated integers denoting **A1**, **A2**, ..., **AN**

For next **M** lines, each line contains a query.

Each query is given by three or four (please refer to the statement) space separated integers.

The first integer denotes type of the query. For every type of query next two integers denote **L** and **R**. For each query of type 1, next integer denote **X**. For each query of type 2, next integer denote **Y**.

### Output

For each test case, output a single line containing the sum of answers of all the queries of type 3.

### Constraints

- **1** ≤ **T** ≤ **5**
- **1** ≤ **N, M, N + M**  ≤ **105**
- **1** ≤ **L** ≤ **R** ≤ **N**
- **1** ≤ **X, Y, Ai** ≤ **109**

### Subtasks

- Subtask #1 (18 points): **1 ≤ **N, M, X, Y, Ai** ≤ 10**
- Subtask #2 (31 points): **1 ≤ **N, M** ≤ 1000**
- Subtask #3 (51 points): **original constraints**

### Example

<pre><b>Input:</b>
1
5 5
2 4 3 5 5
3 2 4
3 2 5
2 2 4 1
1 3 3 10
3 1 5

<b>Output:</b>
5

</pre>### Explanation
Array: **\[2, 4, 3, 5, 5\]**

- 1st query: **\[4, 3, 5\]**, 4 \* 3 \* 5 = 60 : answer 1.
- 2nd query: **\[4, 3, 5, 5\]**, 4 \* 3 \* 5 \* 5 = 300 : answer 2.
- 3rd query: **\[2, 4, 3, 5, 5\] => \[2, 1, 2, 3, 5\]**.
- 4th query: **\[2, 1, 2, 3, 5\] => \[2, 1, 20, 3, 5\]**.
- 5th query: **\[2, 1, 20, 3, 5\]**, 2 \* 1 \* 20 \* 3 \* 5 = 600 - answer 2.

Sum of all answers = 5.
