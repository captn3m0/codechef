---
category_name: hard
problem_code: PERMUTE
problem_name: 'Just Some Permutations 3'
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
problem_author: rustinpiece
problem_tester: tuananh93
date_added: 27-03-2013
tags:
    - ad
    - june13
    - medium
    - rustinpiece
editorial_url: 'http://discuss.codechef.com/problems/PERMUTE'
time:
    view_start_date: 1371462262
    submit_start_date: 1371462262
    visible_start_date: 1371460885
    end_date: 1735669800
    current: 1493556786
layout: problem
---
All submissions for this problem are available.Given two integers **N** and **M**, find how many permutations of **1, 2, ..., N** (first **N** natural numbers) are there where the sum of **every two adjacent** numbers is at most **M**.

### Input

First line of the input contains an integer **T** which is the number of test cases. Each of the following **T** lines contain two integers **N** and **M**.

### Output

For each test case output a single one line containing number of such permutations modulo **1000000007**.

### Constraints

- **1** ≤ **T** ≤ **100000(105)**
- **2** ≤ **N** ≤ **1000000(106)**
- **N** < **M** < **2\*N**

### Example

<pre><b>Input:</b>
2
4 5
5 8
<b>Output:</b>
4
72
</pre>### Explanation

For the 1st case all permutations are: {2,3,1,4}, {3,2,1,4}, {4,1,2,3} and {4,1,3,2}.
