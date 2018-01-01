---
category_name: easy
problem_code: MAXSEGM
problem_name: 'Maximum Unique Segment'
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
    - 'CPP 6.3'
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
    - 'PYTH 3.5'
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
problem_author: grumpy_gordon
problem_tester: lg5293
date_added: 21-06-2017
tags:
    - easy
    - grumpy_gordon
    - ltime49
    - two
editorial_url: 'https://discuss.codechef.com/problems/MAXSEGM'
time:
    view_start_date: 1498323600
    submit_start_date: 1498323600
    visible_start_date: 1498323600
    end_date: 1735669800
    current: 1514816005
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/LTIME49/mandarin/MAXSEGM.pdf), [russian](http://www.codechef.com/download/translated/LTIME49/russian/MAXSEGM.pdf) and [vietnamese](http://www.codechef.com/download/translated/LTIME49/vietnamese/MAXSEGM.pdf) as well.

You are given 2 arrays **W** = (**W1**, **W2**, .., **WN**) and **C** = (**C1**, **C2**, .., **CN**) with **N** elements each. A range \[l, r\] is _unique_ if all the elements **Cl**, **Cl+1**, .., **Cr** are unique (ie. no duplicates). The _sum_ of the range is **Wl** + **Wl+1** + ... + **Wr**.

You want to find an _unique_ range with the maximum _sum_ possible, and output this sum.

### Input

- The first line of the input contains an integer **T**, denoting the number of test cases. The description of each testcase follows.
- The first line of each test case contains a single integer **N**, denoting the size of the arrays.
- The second line contains **N** space-separated integers : **C1**, **C2**, .., **CN**.
- The third line contains **N** space-separated integers : **W1**, **W2**, .., **WN**.

### Output

For each testcase, output a single integer in a new line, which should be the maximum possible _sum_ of an _unique_ range.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **N** ≤ **1000000**
- ≤ **Ci** N
- ≤ **Wi** ≤ **1000000000**
- **1** ≤ Sum of **N** over all test cases ≤ **1000000**

### Subtasks

- Subtask #1 (30 points): Sum of **N** over all test cases ≤ **10000**
- Subtask #2 (70 points): Original constraints

### Example

<pre><b>Input:</b>
1
5
0 1 2 0 2
5 6 7 8 2

<b>Output:</b>
21

</pre>### Explanation
The range \[2, 4\] is an _unique_ range because (1, 2, 0) has no duplicates. Its _sum_ is 6 + 7 + 8 = 21. This is the maximum possible, and hence is the answer.
