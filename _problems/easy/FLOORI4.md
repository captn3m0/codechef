---
category_name: easy
problem_code: FLOORI4
problem_name: Flooring
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: devuy11
problem_tester: xcwgf666
date_added: 21-07-2014
tags:
    - ad
    - devuy11
    - easy
    - math
    - sept14
editorial_url: 'http://discuss.codechef.com/problems/FLOORI4'
time:
    view_start_date: 1410773400
    submit_start_date: 1410773400
    visible_start_date: 1410773400
    end_date: 1735669800
    current: 1493558145
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SEPT14/mandarin/FLOORI4.pdf) and [Russian](http://www.codechef.com/download/translated/SEPT14/russian/FLOORI4.pdf).

Your task is simple. 


You need to find the value of 
![](/download/extimages/cf6ab82c8e6808558c16486b31044dce.gif).


As the value could be too large, output it modulo **M**.

### Input

The first contains an integer **T**, denoting the number of the test cases.

Then there are **T** lines, each describing a single test case and contains two space separated integers **N** and **M** respectively.

### Output

For each test case, output the value of summation modulo **M** on a separate line.

### Constraints

- **1** ≤  **M**  ≤ **100000**

There are two types of datasets:

- **1** ≤ **N** ≤ **106** , **1** ≤ **T** ≤ **3000**
- **106** ≤ **N** ≤ **1010** , **1** ≤ **T** ≤ **30**

### Example

<pre><b>Input:</b>
1
4 1000

<b>Output:</b>
373

</pre>### Explanation
14\*4 + 24\*2 + 34\*1 + 44\*1 = 373
