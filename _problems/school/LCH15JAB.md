---
category_name: school
problem_code: LCH15JAB
problem_name: 'Piece of cake'
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
problem_author: pavel1996
problem_tester: rubanenko
date_added: 25-12-2014
tags:
    - ad
    - cakewalk
    - ltime20
    - pavel1996
time:
    view_start_date: 1422174600
    submit_start_date: 1422174600
    visible_start_date: 1422174600
    end_date: 1735669800
    current: 1492507586
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME20/mandarin/LCH15JAB.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME20/russian/LCH15JAB.pdf).

This is a very easy warm-up problem.

You are given a string. Your task is to determine whether number of occurrences of some character in the string is equal to the sum of the numbers of occurrences of other characters in the string.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. Each of the next **T** lines contains one string **S** consisting of lowercase latin letters.

### Output

For each test case, output a single line containing **"YES"** if the string satisfies the condition given above or **"NO"** otherwise.

### Constraints

10. **1** ≤ **T** ≤ **1000**
11. **1** ≤ **length of S** ≤ **50**
### Subtasks

**Subtask #1**\[28 points\]: **S** contains no more than **2** different letters.
**Subtask #2**\[72 points\]: No additional conditions

### Example

<pre><b>Input:</b>
4
acab
zzqzqq
abc
kklkwwww
<b>Output:</b>
YES
YES
NO
YES
</pre>