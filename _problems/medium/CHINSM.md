---
category_name: medium
problem_code: CHINSM
problem_name: 'Chef and insomnia'
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
problem_author: zedthirtyeight
problem_tester: laycurse
date_added: 7-07-2015
tags:
    - ad
    - aug15
    - combinatorics
    - divisors
    - intervals
    - medium
    - zedthirtyeight
editorial_url: 'http://discuss.codechef.com/problems/CHINSM'
time:
    view_start_date: 1439803800
    submit_start_date: 1439803800
    visible_start_date: 1439803800
    end_date: 1735669800
    current: 1493557558
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/AUG15/mandarin/CHINSM.pdf) and [Russian](http://www.codechef.com/download/translated/AUG15/russian/CHINSM.pdf).

Chef sometimes suffers from insomnia. During sleepless nights, he often plays this game: He creates an array **A** of **N** integers and also decides one integer **K**. After that, he tries to count the number of non-empty contiguous subsequences (subsegments) of **A**, such that there are no bad pairs of integers in this subsegment. A pair **(x, y)** of integers is called bad if **x** is situated to the left of **y** in the array and **x mod y = K**. Finally, before going to sleep, Chef wrote down the answer on a sheet of paper. Sadly, he has forgotten it this morning and want your help regarding that.

### Input

- The first line contains two integers - **N** and **K**.
- Second line contains **N** integers - **A1**, **A2** ... **AN** - separated by spaces, denoting the array **A**.

### Output

A single line containing an integer - the answer to the problem.

### Constraints

- 1 ≤ **N**, **Ai** ≤ 105
- 0 ≤ **K** ≤ 105

### Subtasks

- Subtask 1: **N** ≤ 100 (15 points)
- Subtask 2: **N** ≤ 1000 (15 points)
- Subtask 3: **K** = 0 (10 points)
- Subtask 4: Original constraints (60 points)

### Example

<pre><b>Input:</b>
3 2
5 3 1

<b>Output:</b>
4
</pre>
### Explanation:

We can check **5 mod 3 = 2**, **5 mod 1 = 0** and **3 mod 1 = 0**. Thus **(5, 3)** is the only bad pair in the array. The **4** subsegments **A\[1;1\] = {5}, A\[2;2\] = {3}, A\[3;3\] = {1}, A\[2;3\] = {3, 1}** are OK. The other subsegments **A\[1;2\] = {5, 3}, A\[1;3\] = {5, 3, 1}** have a bad pair.
