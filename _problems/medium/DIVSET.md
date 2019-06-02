---
category_name: medium
problem_code: DIVSET
problem_name: 'Divide the Set'
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
problem_author: arpa
problem_tester: null
date_added: 28-07-2017
tags:
    - arpa
    - binary
    - ltime50
editorial_url: 'https://discuss.codechef.com/problems/DIVSET'
time:
    view_start_date: 1501349400
    submit_start_date: 1501349400
    visible_start_date: 1501349400
    end_date: 1735669800
    current: 1514816592
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/LTIME50/mandarin/DIVSET.pdf), [russian](http://www.codechef.com/download/translated/LTIME50/russian/DIVSET.pdf) and [vietnamese](http://www.codechef.com/download/translated/LTIME50/vietnamese/DIVSET.pdf) as well.

You are given **N** integers. In each step you can choose some **K** of the remaining numbers and delete them, if the following condition holds: Let the **K** numbers you've chosen be **a1**, **a2**, **a3**, ..., **aK** in sorted order. Then, for each i ≤ **K** - 1, **ai+1** must be greater than or equal to **ai \* C**.

You are asked to calculate the maximum number of steps you can possibly make.

### Input

- The first line of the input contains an integer **T**, denoting the number of test cases. The description of each testcase follows.
- The first line of each testcase contains three integers: **N**, **K**, and **C**
- The second line of each testcase contains the **N** initial numbers

### Output

For each test case output the answer in a new line.

### Subtasks

**Subtask #1** (40 points): - 1 ≤ **N** ≤ 103
- 1 ≤ Sum of **N** over all test cases ≤ 103

**Subtask #2** (60 points): - Original constraints

### Constraints

- 1 ≤ **T** ≤ 100
- 1 ≤ **N** ≤ 3 \* 105
- 1 ≤ **K** ≤ 64
- 2 ≤ **C** ≤ 50
- 1 ≤ **ai** ≤ 1018
- 1 ≤ Sum of **N** over all test cases ≤ 3 \* 105

### Example

<pre><b>Input:</b>
2
6 3 2
4 1 2 2 3 1
6 3 2
1 2 2 1 4 4

<b>Output:</b>
1
2
</pre>
### Explanation

**Testcase 1:** You can make one step by choosing **{1, 2, 4}**.

**Testcase 2:** You can make one step by choosing **{1, 2, 4}** and another by choosing **{1, 2, 4}**.
