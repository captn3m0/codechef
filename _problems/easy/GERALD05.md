---
category_name: easy
problem_code: GERALD05
problem_name: 'Chef and Combinatorics'
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
problem_author: gerald
problem_tester: rustinpiece
date_added: 10-12-2013
tags:
    - combinatorics
    - cook41
    - dynamic
    - gerald
    - medium
editorial_url: 'http://discuss.codechef.com/problems/GERALD05'
time:
    view_start_date: 1387737000
    submit_start_date: 1387737000
    visible_start_date: 1387737000
    end_date: 1735669800
    current: 1493558150
layout: problem
---
All submissions for this problem are available.###  Read problems statements in Mandarin Chinese [here](http://www.codechef.com/download/translated/COOK41/mandarin/GERALD05.pdf)

###  Read problems statements in Russian [here](http://www.codechef.com/download/translated/COOK41/russian/GERALD05.docx)

### Problem Statement

Chef studies combinatorics. He tries to group objects by their _rang_ (a positive integer associated with each object). He also gives the formula for calculating the number of different objects with _rang_ **N** as following:

**the number of different objects with _rang_ N = F(N) = A0 + A1 \* N + A2 \* N2 + A3 \* N3**.Now Chef wants to know how many different multisets of these objects exist such that sum of _rang_s of the objects in the multiset equals to **S**. You are given the coefficients in **F(N)** and the target sum **S**. Please, find the number of different multisets modulo **1,000,000,007**.

You should consider a multiset as an unordered sequence of integers. Two multisets are different if and only if there at least exists one element which occurs **X** times in the first multiset but **Y** times in the second one, where **(X ≠ Y)**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. 

The first line of each test case contains four integers **A0**, **A1**, **A2**, **A3**. The second line contains an integer **S**.

### Output

For each test case, output a single line containing a single integer - the answer to the test case modulo **1,000,000,007**.

### Constraints

- **1** ≤ **T** ≤ **500**
- **1** ≤ **S** ≤ **100**
- ≤ **Ai** ≤ **1000**
- Sum of all **S** for all test cases is not greater than 500. It's guaranteed that at least one **Ai** is non-zero.

### Example

<pre><b>Input:</b>
4
1 0 0 0
1
1 0 0 0
3
0 1 0 0
2
2 3 1 4
10

<b>Output:</b>
1
3
3
213986343

</pre>### Explanation
**Example case 2.** 

In the second example function looks as follows **F(N) = 1**. So for each _rang_ there is a single object of the _rang_. To get multiset with sum of _rang_s equal to 3, you can pick: three objects of _rang_ 1, or one object of _rang_ 1 and one of _rang_ 2, or only one object of _rang_ 3. 

**Example case 3.** 

In the third example function looks as follows **F(N) = N**. So, you have one distinct object of _rang_ 1, two distinct objects of _rang_ 2, three distinct objects of _rang_ 3 and so on. To get
multiset with sum of _rang_s equal to 2, you can pick: two objects of _rang_ 1, one of objects of _rang_ 2 (two ways).
