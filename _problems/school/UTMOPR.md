---
category_name: school
problem_code: UTMOPR
problem_name: 'Strange operations'
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
problem_author: code_note
problem_tester: rubanenko
date_added: 13-06-2015
tags:
    - basic
    - cakewalk
    - code_note
    - cook59
    - simulation
editorial_url: 'http://discuss.codechef.com/problems/UTMOPR'
time:
    view_start_date: 1434911400
    submit_start_date: 1434911400
    visible_start_date: 1434911400
    end_date: 1735669800
    current: 1492506743
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK59/mandarin/UTMOPR.pdf) and [Russian](http://www.codechef.com/download/translated/COOK59/russian/UTMOPR.pdf) as well.

Given an array consisting of **N** integers, you have to do the following operation **K** times.

- Find out the sum of all the elements in the array. Denote it by **S**. Insert an integer in the array strictly greater than **S**. Hence, size of the array will increase by one.
 
Thus, at the end of the **K** operations, the array will have **N** + **K** elements. Find out the smallest possible value of the last number inserted in the array. Since this number can be very large, you just have to tell whether it will be odd or even.

### Input

- The first line of each test file contains the number of test cases, **T**.
- The description of the test cases follows this line. Each test case description consists of 2 lines.
- The first line has the values of **N** and **K**, separated by a space.
- The next line contains a single-space separated list of values of the elements in the array.

### Output

- For each test case, output a single line containing the answer to the problem.If the number is even print **"even"** and if the number is odd print **"odd"**.

### Constraints:

- 1 ≤ **T** ≤10
- 1 ≤ **K** ≤ 106
- 1 ≤ **N** ≤ 103
- 1 ≤ array element ≤ 109

### Example

<pre><b>Sample Input:</b>
1
2 3
5 7
</pre>**Sample Output:**

<pre>
even

</pre>