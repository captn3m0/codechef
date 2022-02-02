---
category_name: easy
problem_code: PERMEXIS
problem_name: 'Watson asks Does Permutation Exist'
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
problem_author: darkshadows
problem_tester: null
date_added: 27-09-2016
tags:
    - cook75
    - darkshadows
    - logic
    - simple
    - sorting
time:
    view_start_date: 1477247400
    submit_start_date: 1477247400
    visible_start_date: 1477247400
    end_date: 1735669800
    current: 1493558217
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK75/mandarin/PERMEXIS.pdf), [Russian](http://www.codechef.com/download/translated/COOK75/russian/PERMEXIS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK75/vietnamese/PERMEXIS.pdf) as well.

Watson gives an array **A** of **N** integers **A1, A2, ..., AN** to Sherlock. He wants Sherlock to reorganize the array in a way such that no two adjacent numbers differ by more than 1.

Formally, if reorganized array is **B1, B2, ..., BN**, then the condition that **| Bi - Bi + 1 | ≤ 1**, for all **1 ≤ i &lt; N**(where **|x|** denotes the absolute value of **x**) should be met.

Sherlock is not sure that a solution exists, so he asks you.

### Input

First line contains **T**, number of test cases. Each test case consists of **N** in one line followed by **N** integers in next line denoting **A1, A2, ..., AN**.

### Output

For each test case, output in one line **YES** or **NO** denoting if array **A** can be reorganized in required way or not.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **N** ≤ **105**
- **1** ≤ **Ai** ≤ **109**
- Sum of **N** over all test cases ≤ **2\*105**

### Example

<pre><b>Input:</b>
2
4
3 2 2 3 
2
1 5

<b>Output:</b>
YES
NO
</pre>
### Explanation

Test case 1:
No need to reorganise. 

Test case 2:
No possible way.
