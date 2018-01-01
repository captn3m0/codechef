---
category_name: medium
problem_code: CHRL1
problem_name: 'Chef and Shop'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: furko
problem_tester: xcwgf666
date_added: 12-01-2014
tags:
    - cakewalk
    - combinatorics
    - furko
    - ltime08
editorial_url: 'http://discuss.codechef.com/problems/CHRL1'
time:
    view_start_date: 1390725000
    submit_start_date: 1390725000
    visible_start_date: 1390725000
    end_date: 1735669800
    current: 1493557573
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Russian](http://www.codechef.com/download/translated/LTIME08/russian/CHRL1.pdf) also.

Chef likes shopping, and especially he likes to buy oranges. But right now he is short of money. He has only **k** rubles. There are **n** oranges. The **i-th** one costs **costi** rubles and has weight equal to **weighti**. Chef wants to buy a set of oranges with the maximal possible weight. Please help him, and tell him this weight.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The first line of each test case contains two numbers **n** and **k**. The following **n** lines contain two numbers **costi** and **weighti** respectively.

### Output

For each test case, output a single line containing maximal weight among all the affordable sets of oranges.

### Constraints

- **1** ≤ **T** ≤  **250**
- **1** ≤ **n** ≤  **10**
- **1** ≤ **k** ≤  **100000000**
- **1** ≤ **weighti** ≤  **100000000**
- **1** ≤ **costi** ≤  **100000000**

### Example

<pre><b>Input:</b>
2
1 3
2 2
3 4
2 1
2 2
3 5

<b>Output:</b>
2
5

</pre>### Scoring
Subtask 1 (30 points): All the oranges' weights equals to 1.

Subtask 2 (30 points):  **N = 5** 

Subtask 2 (40 points): See the constraints
