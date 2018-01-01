---
category_name: medium
problem_code: TASHIFT
problem_name: 'Shift The String'
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
problem_author: tuananh93
problem_tester: null
date_added: 3-07-2014
tags:
    - kmp
    - ltime14
    - medium
    - strings
    - tuananh93
editorial_url: 'http://discuss.codechef.com/problems/TASHIFT'
time:
    view_start_date: 1406452500
    submit_start_date: 1406452500
    visible_start_date: 1406452500
    end_date: 1735669800
    current: 1493557944
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME14/mandarin/TASHIFT.pdf).

You are given two strings **A** and **B** of the same length. Each string contains **N** Lower case Latin character (from 'a' to 'z'). A shift operation will remove the first character of a string and add the same character at the end of that string. For example after you perform a shift operation on a string 'abcd', the new string will be 'bcda'. If you perform this operation two times, the new string will be 'cdab'. You need to use some (maybe none) shift operations on the string **B** to maximize the length of the longest common prefix of **A** and **B**. If more than one result can be found pick the one that use smallest number of shift operations.

### Input

The first line of the input contains a single integer **N**. The second and the third lind contains the string **A** and **B** respectively.

### Output

Contains a single integer which is the number of shift operations.

### Constraints

30 points:

- **1** ≤ **N** ≤ **5000**

30 points:

- **1** ≤ **N** ≤ **104**

40 points:

- **1** ≤ **N** ≤ **106**

### Example

<pre><b>Input:</b>
5
ccadd
bddcc

<b>Output:</b>
3


</pre>