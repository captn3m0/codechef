---
category_name: easy
problem_code: FRNDMTNG
problem_name: 'Chef and His Friend'
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
problem_tester: null
date_added: 5-02-2015
tags:
    - antoniuk1
    - easy
    - frndmting
    - june15
    - maths
    - probability
editorial_url: 'http://discuss.codechef.com/problems/FRNDMTNG'
time:
    view_start_date: 1434360600
    submit_start_date: 1434360600
    visible_start_date: 1434360600
    end_date: 1735669800
    current: 1493558148
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JUNE15/mandarin/FRNDMTNG.pdf) and [Russian](http://www.codechef.com/download/translated/JUNE15/russian/FRNDMTNG.pdf).

Chef and his friend Yurii decided to meet in the cafe. As they are very busy one would not wait for another too long. Namely, after arriving, Chef will spend at most **t1** seconds waiting for Yurii while Yurii will wait no more than **t2** seconds.

Chef can arrive at any moment within **\[0..T1\]** with equal probability. Similarly Yurii can arrive at any moment within **\[0..T2\]**.

**Arrival time may be any real number from the interval.**

Chef asks you to calculate the [probability](http://en.wikipedia.org/wiki/Probability) of meeting his friend Yurii in the cafe.

### Input

First line of the input contains an integer **T** denoting the number of test cases. First and the only line of each test case contains four space-separated integers – **T1**, **T2**, **t1** and **t2**.

### Output

For each test case, output one the single real number - probability of meeting Chef and his friend Yurii. The answer will be considered correct if its absolute or relative error doesn't exceed **10-6**.

### Constraints

- **1 ≤ T ≤ 105**
- **1 ≤ T1, T2 ≤ 109**
- **0 ≤ t1, t2 ≤ 109**

**Subtask 1: (5 points)**

- **t1 = 0** and **t2 = 0**

**Subtask 2: (15 points)**

- **t1 = 0** or **t2 = 0**

**Subtask 3: (25 points)**

- **1 ≤ T ≤ 5**
- **1 ≤ T1, T2 ≤ 10**
- The answer will be considered correct if its absolute or relative error doesn't exceed **10-2**

**Subtask 4: (55 points)**

- Original constraints

### Example

```
<b>Input:</b>
2
2 2 1 1
1 1 1 1
<b>Output:</b>
0.750000
1.000000

```