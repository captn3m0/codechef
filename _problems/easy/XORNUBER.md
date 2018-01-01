---
category_name: easy
problem_code: XORNUBER
problem_name: 'Chef and the XORed Number '
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
problem_author: rustinpiece
problem_tester: iscsi
date_added: 31-07-2015
tags:
    - basic
    - bitwise
    - cook61
    - rustinpiece
    - simple
editorial_url: 'http://discuss.codechef.com/problems/XORNUBER'
time:
    view_start_date: 1440357600
    submit_start_date: 1440357600
    visible_start_date: 1440357600
    end_date: 1735669800
    current: 1493558197
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK61/mandarin/XORNUBER.pdf) and [Russian](http://www.codechef.com/download/translated/COOK61/russian/XORNUBER.pdf) as well.

Given an integer **N**, Chef wants to find the smallest positive integer **M** such that the [bitwise XOR](https://en.wikipedia.org/wiki/Bitwise_operation#XOR) of **M** and **M+1** is **N**. If no such **M** exists output **-1**.

### Input

The first line of input contain an integer **T** denoting the number of test cases. Each of the following **T** lines contains an integer **N** for that test case.

### Output

For each test case, output a single line containing the number **M** or **-1** as described above.

### Constraints

- **1** ≤ **T** ≤ **5000**
- **1** ≤ **N** ≤ **230**

### Example

<pre><b>Input:</b>
1
3

<b>Output:</b>
1

</pre>### Explanation
**First Example :**  **M** desired in the problem would be 1. As bitwise XOR of 1 and 2 is equal to 3.
