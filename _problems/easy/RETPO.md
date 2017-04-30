---
category_name: easy
problem_code: RETPO
problem_name: 'Reach The Point'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: 'witalij_hq '
problem_tester: null
date_added: 25-04-2014
tags:
    - july14
    - maths
    - simple
    - witalij_hq
editorial_url: 'http://discuss.codechef.com/problems/RETPO'
time:
    view_start_date: 1405330200
    submit_start_date: 1405330200
    visible_start_date: 1405330200
    end_date: 1735669800
    current: 1493558181
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JULY14/mandarin/RETPO.pdf) and [Russian](http://www.codechef.com/download/translated/JULY14/russian/RETPO.pdf).

Recently Chef bought a bunch of robot-waiters. And now he needs to know how much to pay for the electricity that robots use for their work. All waiters serve food from the kitchen (which is in the point **(0, 0)**) and carry it to some table (which is in some point **(x, y)**) in a shortest way. But this is a beta version of robots and they can only do the next moves: turn right and make a step forward or turn left and make a step forward. Initially they look in direction of **X-axis**. Your task is to calculate for each query the number of moves they’ll do to reach corresponding table.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. For each test case there is a sing line containing two space-separated integers - **x** and **y**.

### Output

For each test case, output a single line containing number of moves that robot will make to reach point **(x, y)**

### Constraints

- **1** ≤ **T** ≤ **105**
- **-109** ≤ **x, y** ≤ **109**

### Example

```
<b>Input:</b>
2
3 3
3 4

<b>Output:</b>
6
7

```
### Explanation

**Example case 1.** Sequence of moves would be LRLRLR