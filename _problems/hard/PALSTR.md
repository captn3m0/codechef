---
category_name: hard
problem_code: PALSTR
problem_name: 'Chef And Palindromes'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: ma5termind
problem_tester: antoniuk1
date_added: 2-11-2015
tags:
    - cook66
    - dynamic
    - ma5termind
    - medium
    - palindrome
    - strings
    - z
editorial_url: 'http://discuss.codechef.com/problems/PALSTR'
time:
    view_start_date: 1453660200
    submit_start_date: 1453660200
    visible_start_date: 1453660200
    end_date: 1735669800
    current: 1493556786
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK66/mandarin/PALSTR.pdf), [Russian](http://www.codechef.com/download/translated/COOK66/russian/PALSTR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK66/vietnamese/PALSTR.pdf) as well.

Chef's love for symmetry is well-known. This love is especially expressed for palindromic strings. Today, he has a triplet of strings, <**A**, **B**, **C**>, where each string is consisting of lowercase characters. He is interested in counting the number of ordered triplet of strings <**S1, S2, S3**> such that **S1**, **S2**, and **S3** are non-empty substrings of **A**, **B**, and **C**, respectively, and **S1 + S2 + S3** is a palindromic string, with '+' denoting the string concatenation operator.

Note that **2** triplets are considered to be different if any substring chosen from a string in **1** triplet is different from the substring chosen from the same string in other triplet. You can check the definition of a substring [here](https://en.wikipedia.org/wiki/Substring).

**Note:**

A string **S** is palindromic if it reads the same both forward as well as backward. To know more about palindromes, click [here](https://en.wikipedia.org/wiki/Palindrome).

### Input

The first line of input contains a single integer **T** denoting the number of test cases. First line of each test case contains the string **A**, second line contains the string **B**, and the third contains the string **C**.

### Output

For each test case, output the required answer.

###  Constraints

**1. 1 ≤ T ≤ 20** 
**1. 1 ≤ |A|, |B|, |C| ≤ 1000** 
**1. A, B & C consist of lowercase characters only.** 
### Example

**Input**

<pre>
4
a
b
c
ab
ba
ab
ab
ab
ab
aa
aa
aa
</pre>
**Output**

<pre>
0
6
8
27
</pre>
### Explanation

- **Test 1:**  No such palindromic string is possible.
- **Test 2:**  "aaa", "bbb", "aba", "bab", "abba", "baab" are all possible palindromic strings.
- **Test 3:**  "aaa", "bbb", "aba", "bab", "abba", "baab", "babab", "ababa" are all possible palindromic strings.
