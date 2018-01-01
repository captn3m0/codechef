---
category_name: medium
problem_code: DGTCNT
problem_name: 'Chef and Digits'
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
problem_author: acyume
problem_tester: null
date_added: 16-09-2016
tags:
    - acyume
    - april17
editorial_url: 'https://discuss.codechef.com/problems/DGTCNT'
time:
    view_start_date: 1492421400
    submit_start_date: 1492421400
    visible_start_date: 1492421400
    end_date: 1735669800
    current: 1497284432
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL17/mandarin/DGTCNT.pdf), [Russian](http://www.codechef.com/download/translated/APRIL17/russian/DGTCNT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/APRIL17/vietnamese/DGTCNT.pdf) as well.

Chef loves integers, but of course not all of them. For some personal reason, he considers the integers **a**0, **a**1, ..., and **a**9 unlucky. If for an integer x, suppose there exists some digit i (0 ≤ i ≤ 9) which appears exactly **a**i times in the decimal presentation of x (without leading zeros), then Chef dislikes x. Otherwise Chef loves it.

Chef wants to count the number of the integers between **L** and **R**, both inclusive, which he loves. Can you please help him in this?

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follow.

The first line of each test case contains two space separated integers **L, R**.

The second line will contain exactly 10 space separated integers, the i-th integer denotes **a**i-1.

### Output

For each test case, output an integer corresponding to the answer, in a new line.

### Constraints

- 1 ≤ **T** ≤ 20
- 1 ≤ **L** ≤ **R** ≤ 1018
- 0 ≤ **a**i ≤ 18

### Subtasks

**Subtask #1 (25 points)**

- 1 ≤ **L** ≤ **R** ≤ 105

**Subtask #2 (15 points)**

- **a**i = 0, for all i

**Subtask #3 (60 points)**

- 1 ≤ **L** ≤ **R** ≤ 1018

### Example

<pre><b>Input</b>
2
21 28
5 4 3 2 1 1 2 3 4 5
233 23333
2 3 3 3 3 2 3 3 3 3

<b>Output</b>
6
19627

</pre>### Explanation
**In example 1**. Chef dislikes the integers 24 because the digit 4 appears exactly 1 time in 24, and **a**4 = 1. Similarly, he also dislikes the integer 25 because the digit 5 appears exactly 1 time in 25 and **a**5 = 1. These are the only two integers which Chef dislikes in the range \[21,28\]. Thus Chef loves the integers 21, 22, 23, 26, 27, and 28. Therefore the answer is 6.
