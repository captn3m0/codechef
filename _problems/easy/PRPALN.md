---
category_name: easy
problem_code: PRPALN
problem_name: 'Let us construct palindrome'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 5-10-2014
tags:
    - ad
    - admin2
    - greedy
    - nov14
editorial_url: 'http://discuss.codechef.com/problems/PRPALN'
time:
    view_start_date: 1416216600
    submit_start_date: 1416216600
    visible_start_date: 1416216600
    end_date: 1735669800
    current: 1493558217
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV14/mandarin/PRPALN.pdf) and [Russian](http://www.codechef.com/download/translated/NOV14/russian/PRPALN.pdf).

Given a string **s**. Can you make it a palindrome by deleting exactly one character? Note that size of the string after deletion would be one less than it was before.

### Input

First line of the input contains a single integer T denoting number of test cases.

For each test case, you are given a single line containing string  **s.**

### Output

For each test case, print **YES** or **NO** depending on the answer of the problem.

### Constraints

 **Subtask 1, 35 points**

- **1** ≤ **T** ≤ **100**
- **2** ≤  **size of string s** ≤ **1000**
- String **s** contains lowercase English alphabets (ie. from 'a' to 'z').

 **Subtask 2, 65 points**

- **2** ≤  **size of string s** ≤ **10^5**
- Sum of size of string **s** over all the input test cases won't exceed 10^6
- String **s** contains lowercase English alphabets (ie. from 'a' to 'z').

### Example

<pre><b>Input:</b>
4
aaa
abc
abdbca
abba

<b>Output:</b>
YES
NO
YES
YES

</pre>### Explanation
**Example case 1.** Delete any one 'a', resulting string is "aa" which is a palindrome.

**Example case 2.** It is not possible to delete exactly one character and having a palindrome.

**Example case 3.** Delete 'c', resulting string is "abdba" which is a palindrome.

**Example case 4.** Delete 'b', resulting string is "aba" which is a palindrome.
