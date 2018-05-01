---
category_name: medium
problem_code: TACNTSTR
problem_name: 'Counting Strings'
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
problem_author: tuananh93
problem_tester: errichto
date_added: 9-09-2016
tags:
    - cook74
    - dynamic
    - medium
    - tuananh93
editorial_url: 'http://discuss.codechef.com/problems/TACNTSTR'
time:
    view_start_date: 1474223400
    submit_start_date: 1474223400
    visible_start_date: 1474223400
    end_date: 1735669800
    current: 1493557941
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK74/mandarin/TACNTSTR.pdf), [Russian](http://www.codechef.com/download/translated/COOK74/russian/TACNTSTR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK74/vietnamese/TACNTSTR.pdf) as well.

You are given a string **s** consisting of upper case Latin alphabets, i.e. from 'A' to 'Z'. Your task is to find how many strings **t** with length equal to that of **S**, also consisting of upper case Latin alphabet are there satisfying the following conditions:

- String **t** is lexicographical larger than **s**
- When you write both **s** and **t** in the reverse order, **t** is still lexicographical larger than **s**.

Find out number of such strings **t**. As the answer could be very large, output it modulo **109 + 7**

### Input

The only line of input contains string **s**.

### Output

Output a single line containing an integer corresponding to the result in modulo **109 + 7**.

### Constraints

- **1 ≤ |S| ≤ 105**

### Example

<pre>
<b>Input 1</b>:
ZAZ

<b>Output 1</b>:
25

<b>Input 2</b>:
XYZ

<b>Output 2</b>:
5
</pre>### Explanation

**Test #1:** To make a valid string **t**, you can just replace the letter A in **S** by any other letter, e.g. by replacing 'A' by 'B', we get **t = ZBZ**. Note that ZBZ is lexicographically larger than ZAZ. Reverse of **t** (i.e. ZBZ) is also lexicographically larger than reverse of **s** (i.e. ZAZ).

**Test #2:** there are 5 valid strings: YYZ, ZYZ, XZZ, YZZ, ZZZ
