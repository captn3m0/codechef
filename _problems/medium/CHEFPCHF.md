---
category_name: medium
problem_code: CHEFPCHF
problem_name: 'Chef and Programming Contest by His Friend'
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
    - COB
    - 'CPP 4.3.2'
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: r_64
problem_tester: null
date_added: 22-09-2017
tags:
    - binary
    - hashing
    - ltime52
    - medium
    - palindromes
    - r_64
editorial_url: 'https://discuss.codechef.com/problems/CHEFPCHF'
time:
    view_start_date: 1506790800
    submit_start_date: 1506790800
    visible_start_date: 1506790800
    end_date: 1735669800
    current: 1514816015
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/LTIME52/mandarin/CHEFPCHF.pdf), [russian](http://www.codechef.com/download/translated/LTIME52/russian/CHEFPCHF.pdf) and [vietnamese](http://www.codechef.com/download/translated/LTIME52/vietnamese/CHEFPCHF.pdf) as well.

 Fehc is Chef's best friend. They grew up with each other, and often help each other with competitive programming.

 Chef is participating in a programming contest prepared by Fehc and finds the following problem in Fehc's problem set: given a string **s**\[**1**..**N**\], count the number of pairs of indices **1** ≤ **i** ≤ **j** ≤ **N** such that **s**\[**i..j**\] is palindrome and **j-i** is even. The characters that may appear in **s** are 0, 1, 2, ..., 109.

 Chef doesn't know the solution, but he knows Fehc's habits of creating test data. When preparing data for a string problem, Fehc always generates a string of **N** 0's, and replaces some of the 0's by other characters. Thus, Chef assumes that there are only **K** nonzero characters in **s**, and **K** is usually much smaller than **N**.

 Given this useful information, can you help Chef solve this problem?

###  Input

- The first line of input contains one integer **T** denoting the number of test cases.
- For each test case, the first line contains two space-separated integers **N** and **K**.
- **K** lines follow; the **i**-th of these lines contains two space-separated integers **pi** and **qi**, meaning that the **i**-th nonzero character is **s**\[**pi**\] = **qi**.

###  Output

 For each test case, output one integer denoting the answer to the problem.

###  Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **109**
- ≤ **K** ≤ **105**
- **1** ≤ **p1** < **p2** < ... < **pK** ≤ **N**
- **1** ≤ **qi** ≤ **109**

 Subtask #1 (9 points):

- **N ≤ 1000**

 Subtask #2 (14 points):

- **N ≤ 105**

 Subtask #3 (21 points):

- **K ≤ 1000**

 Subtask #4 (56 points):

- original constraints

###  Example

<pre>
<b>Input:</b>
3
7 2
5 1
6 1
7 3
2 1
4 2
6 1
10 0

<b>Output:</b>
9
12
30


</pre>###  Explanation
 **Example case 1:** s={0,0,0,0,1,1,0}. The 9 pairs (i,j) are: (1,1), (2,2), ..., (7,7), (1,3) and (2,4).

 **Example case 2:** s={0,1,0,2,0,1,0}.

 **Example case 3:** s={0,0,0,0,0,0,0,0,0,0}.
