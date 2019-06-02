---
category_name: school
problem_code: SMPAIR
problem_name: 'The Smallest Pair'
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
problem_author: xcwgf666
problem_tester: furko
date_added: 5-06-2014
tags:
    - cakewalk
    - ltime13
    - sorting
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/SMPAIR'
time:
    view_start_date: 1404030600
    submit_start_date: 1404030600
    visible_start_date: 1404030600
    end_date: 1735669800
    current: 1492507616
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME13/mandarin/SMPAIR.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME13/russian/SMPAIR.pdf).

You are given a sequence **a1, a2, ..., aN**. Find the smallest possible value of **ai + aj**, where 1 ≤ **i** j ≤ **N**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each description consists of a single integer **N**.

The second line of each description contains **N** space separated integers - **a1, a2, ..., aN** respectively.

### Output

For each test case, output a single line containing a single integer - the smallest possible sum for the corresponding test case.

### Constraints

- **T** = **105**, **N** = **2** : 13 points.
- **T** = **105**, **2** ≤ **N** ≤ **10** : 16 points.
- **T** = **1000**, **2** ≤ **N** ≤ **100** : 31 points.
- **T** = **10**, **2** ≤ **N** ≤ **105** : 40 points.
- **1** ≤ **ai** ≤ **106**

### Example

<pre><b>Input:</b>
1
4
5 1 3 4

<b>Output:</b>
4
</pre>
### Explanation

Here we pick **a2** and **a3**. Their sum equals to 1 + 3 = 4.
