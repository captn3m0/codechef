---
category_name: easy
problem_code: MEX
problem_name: 'Max Mex'
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
    - kotlin
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
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: hruday968
problem_tester: alex_2oo8
date_added: 22-08-2017
tags:
    - greedy
    - hruday968
    - oct17
    - simple
    - sorting
editorial_url: 'https://discuss.codechef.com/problems/MEX'
time:
    view_start_date: 1508146200
    submit_start_date: 1508146200
    visible_start_date: 1508146200
    end_date: 1735669800
    current: 1514816827
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/OCT17/mandarin/MEX.pdf), [russian](http://www.codechef.com/download/translated/OCT17/russian/MEX.pdf) and [vietnamese](http://www.codechef.com/download/translated/OCT17/vietnamese/MEX.pdf) as well.

You are given a multi-set **S** of **N** integers, and an integer **K**. You want to find the maximum value of minimal excluded non-negative integer ([**MEX**](https://en.wikipedia.org/wiki/Mex_(mathematics))) of the multi-set given that you are allowed to add at most any **K** integers to the multi-set. Find the maximum value of MEX that you can obtain.

Few examples of finding MEX of a multi-set are as follows. MEX of multi-set {0} is 1, {1} is 0, {0, 1, 3} is 2, {0, 1, 2, 3, 5, 6} is 4.

### Input

The first line of the input contains an integer **T** denoting the number of testcases.

The first line of each test case contains two space seperated integers **N** and **K** denoting the size of the multi-set and the maximum number of extra integers that you can add in the multi-set respectively.

The second line contains **N** space separated integers denoting the multi-set **S**: **S1**, **S2** ,.... **SN**.

### Output

For each testcase, output the answer in a single line.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **105**
- 0 ≤ **K** ≤ **105**
- 0 ≤ **Si** ≤ **2 \* 105**

### Subtasks

- **Subtask #1** (15 points): **K**=0.
- **Subtask #2** (85 points): Original Constraints.

### Example

<pre><b>Input:</b>
4
3 0
1 0 2
3 1
1 0 2
4 3
2 5 4 9
2 0
3 4

<b>Output:</b>
3
4
6
0
</pre>
### Explanation

**Example case 1.** As **K** = 0, so we can't add any element to the multi-set. Elements of the set are {1, 0, 2}. The MEX value of this set is 3.

**Example case 2.** As **K** = 1, you are allowed to add at most 1 element to the multi-set. The multi-set are {1, 0, 2}. You can add element 3 to the multi-set, and it becomes {1, 0, 2, 3}. The MEX value of this multi-set is 4. There is no other way to have higher value of MEX of the set by adding at most one element to the multi-set.
