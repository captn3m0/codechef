---
category_name: hard
problem_code: DUALPAL
problem_name: 'Chef and the Dual Palindromes'
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
max_timelimit: '8'
source_sizelimit: '8000'
problem_author: rustinpiece
problem_tester: iscsi
date_added: 31-07-2015
tags:
    - backtracking
    - cook61
    - hard
    - maths
    - rustinpiece
editorial_url: 'http://discuss.codechef.com/problems/DUALPAL'
time:
    view_start_date: 1440357600
    submit_start_date: 1440357600
    visible_start_date: 1440357600
    end_date: 1735669800
    current: 1493556697
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK61/mandarin/DUALPAL.pdf) and [Russian](http://www.codechef.com/download/translated/COOK61/russian/DUALPAL.pdf) as well.

A number is called a _Dual Palindrome_ if it's representation in bases **B1** and **B2** are both palindromes. e.g. Let **B1** = 3, **B2** = 4, then number 130 (in base 10) will be called a _Dual Palindrome_, as it is palindrome in base 3 (11211) as well as in base 4 (2002). However, it is not a _Dual Palindrome_ for **B1** = 3 and **B2** = 5 as it's not a palindrome in base 5(1010).

Given two integers **B1** and **B2**, Chef wants to find Dual Palindromes less than **260**. If there are more than 1000 Dual Palindromes, then output the first 1000 only (these numbers should be in base 10).

### Input

The fine line of the input contains an integer **T** denoting the number of test cases.

 Each test case consists of a single line containing two space separated integers: **B1** and **B2**, respectively.

### Output

For each test case, output a list of space separated integers which are Dual Palindromes less than **260** for the input bases. If there are more than 1000 Dual Palindromes, then output the first 1000 only. The numbers should be printed in an ascending order.

### Constraints

- **1** ≤ **T** ≤ **5**
- **2** ≤ **B1** < **B2** ≤ **16**

### Example

```
<b>Input:</b>
1
2 3

<b>Output:</b>
1 6643 1422773 5415589 90396755477 381920985378904469

```
### Note

Source limit for the problem is 8000B instead of usual 50000B.