---
category_name: medium
problem_code: SEAPERM2
problem_name: 'Sereja and Permutations'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: null
date_added: 10-09-2014
tags:
    - ad
    - hashing
    - medium
    - nov14
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/SEAPERM2'
time:
    view_start_date: 1416216600
    submit_start_date: 1416216600
    visible_start_date: 1416216600
    end_date: 1735669800
    current: 1493557926
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV14/mandarin/SEAPERM2.pdf) and [Russian](http://www.codechef.com/download/translated/NOV14/russian/SEAPERM2.pdf).

Sereja have permutation **p\[1\], p\[2\], ..., p\[n\]**. Sereja have made **n** permutations **q\[1\], q\[2\], ..., q\[n\]**, **q\[i\]** is permutation **p** without element **i** (we subtract 1 from all elements bigger than **i**). For example **8 1 2 3 4 5 6 7** without **5** is **7 1 2 3 4 5 6**. Sereja have made random shuffle of **q**. Help Sereja find initial permutation **p**.

### Input

First line contain number of test cases **T**. **T** tests follow. First line of each test case contain number **n**. Next **n** lines describe permutations **q\[1\]**, **q\[2\]**, ..., **q\[n\]**. Each line contain **n-1** number. It is guarantied that there is at least one solution for each test case.

### Output

For each test output permutation **p**. If there is more than one solution - output any.

### Constraints

- **1** ≤ **T** ≤  **10**
- **3** ≤ **n** ≤  **300**

### Subtasks

- Subtask #1: **3** ≤ **n** ≤  **6**  (13 points)
- Subtask #2: **3** ≤ **n** ≤  **50**  (27 points)
- Subtask #3: **3** ≤ **n** ≤  **300**  (60 points)

### Example

<pre><b>Input:</b>
1
3
1 2
1 2
1 2

<b>Output:</b>
1 2 3

</pre>