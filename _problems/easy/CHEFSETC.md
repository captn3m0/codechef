---
category_name: easy
problem_code: CHEFSETC
problem_name: 'Chef and Subset'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: tuananh93
date_added: 9-12-2016
tags:
    - bitmasks
    - bruteforce
    - cakewalk
    - cook77
    - mgch
editorial_url: 'https://discuss.codechef.com/problems/CHEFSETC'
time:
    view_start_date: 1482085800
    submit_start_date: 1482085800
    visible_start_date: 1482085800
    end_date: 1735669800
    current: 1493558121
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK77/mandarin/CHEFSETC.pdf), [Russian](http://www.codechef.com/download/translated/COOK77/russian/CHEFSETC.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK77/vietnamese/CHEFSETC.pdf) as well.

Chef likes problems which using some math. Now he asks you to solve next one. You have 4 integers, Chef wondering is there non-empty subset which has sum equals 0.

### Input

The first line of input contains **T** - number of test cases.

Each of the next **T** lines containing four pairwise distinct integer numbers - **a**, **b**, **c**, **d**.

### Output

For each test case output "Yes", if possible to get 0 by choosing non-empty subset of {**a**, **b**, **c**, **d**} with sum equal 0, or "No" in another case.

### Constraints

- **1** ≤ **T** ≤ **103**
- **-106** ≤ **a**, **b**, **c**, **d** ≤ **106**

### Example

<pre><b>Input:</b>
3
1 2 0 3
1 2 4 -1
1 2 3 4

<b>Output:</b>
Yes
Yes
No

</pre>### Explanation
**Example case 1.** We can choose subset {0}

**Example case 2.** We can choose subset {-1, 1}
