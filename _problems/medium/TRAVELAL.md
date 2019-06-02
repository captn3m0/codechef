---
category_name: medium
problem_code: TRAVELAL
problem_name: 'Travel to all Points'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: arpa
problem_tester: null
date_added: 28-07-2017
tags:
    - arpa
    - binary
    - ltime50
editorial_url: 'https://discuss.codechef.com/problems/TRAVELAL'
time:
    view_start_date: 1501349400
    submit_start_date: 1501349400
    visible_start_date: 1501349400
    end_date: 1735669800
    current: 1514816026
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/LTIME50/mandarin/TRAVELAL.pdf), [russian](http://www.codechef.com/download/translated/LTIME50/russian/TRAVELAL.pdf) and [vietnamese](http://www.codechef.com/download/translated/LTIME50/vietnamese/TRAVELAL.pdf) as well.

There are **N** *special* points on the 2-D plane. You can travel from a special point (**xi**, **yi**) to another special point (**xj**, **yj**) if and only if |**xi** - **xj**| + |**yi** - **yj**| ≥ **D**.

You need to find the largest integer **D**, such that we can start at some special point and visit each of the other special points, directly or through other special points. Note that you can visit a special point more than once.

### Input

- The first line of the input contains an integer **T**, denoting the number of test cases. The description of each testcase follows.
- The first line of each testcase contains a single integer, **N**, which denotes the number of special points.
- The i-th of the next **N** lines contains two integers, **xi** and **yi**, which denotes that (**xi**, **yi**) is a special point.

### Output

For each test case, output a single line containing the answer.

### Subtasks

**Subtask #1** (20 points): - 2 ≤ **N** ≤ 103
- 2 ≤ Sum of **N** over all test cases ≤ 103

**Subtask #2** (60 points): - 2 ≤ **N** ≤ 3 \* 104
- 2 ≤ Sum of **N** over all test cases ≤ 3 \* 104

**Subtask #3** (20 points): - Original constraints

### Constraints

- 1 ≤ **T** ≤ 50
- 2 ≤ **N** ≤106
- 0 ≤ **xi**, **yi** ≤ 109
- 2 ≤ Sum of **N** over all test cases ≤ 106

### Example

<pre><b>Input:</b>
1
6
1 7
8 5
6 3
10 3
5 2
6 10

<b>Output:</b>
9
</pre>
### Explanation

We can start at some point and travel to all of the points if **D** ≤ 9, but not if **D** is greater than 9. Hence the answer is 9.

Let us take an example when **D** is 9. You can start at (1, 7) and move to (8, 5) because |1 - 8| + |7 - 5| = 9 ≥ 9. From (8, 5) you can move back to (1, 7) and then to (10, 3). From there you can go to (6, 10) and then to (5, 2). You then go to (1, 7) and then to (6, 3). Hence, we have visited all the special points.
