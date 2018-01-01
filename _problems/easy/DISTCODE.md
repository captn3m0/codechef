---
category_name: easy
problem_code: DISTCODE
problem_name: 'Distinct Codes'
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
problem_author: xcwgf666
problem_tester: pavel1996
date_added: 3-11-2015
tags:
    - basic
    - basics
    - cakewalk
    - constructions
    - language
    - ltime31
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/DISTCODE'
time:
    view_start_date: 1451205000
    submit_start_date: 1451205000
    visible_start_date: 1451205000
    end_date: 1735669800
    current: 1493558214
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME31/mandarin/DISTCODE.pdf), [Russian](http://www.codechef.com/download/translated/LTIME31/russian/DISTCODE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME31/vietnamese/DISTCODE.pdf) as well.

Sergey recently learned about **country codes** - two letter strings, denoting countries. For example, **BY** stands for Belarus and **IN** stands for India. Mesmerized by this new discovery, Sergey now looks for country codes everywhere!

Sergey has recently found a string **S** consisting of uppercase Latin letters. He wants to find the number of different country codes that appear in **S** as contiguous substrings. For the purpose of this problem, consider that every **2**-letter uppercase string is a valid country code.

### Input

The first line of input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first and only line of each test case contains a string **S**, consisting of uppercase Latin letters.

### Output

For each test case, output a single line containing the number of different country codes appearing in the given string.

### Constraints

- **1** ≤ **T** ≤ **100**
- Subtask 1 (35 points): **2** ≤ **|S|** ≤ **3**
- Subtask 2 (65 points): **2** ≤ **|S|** ≤ **104**

### Example

<pre><b>Input:</b>
<tt>2
INBY
BYBY</tt>

<b>Output:</b>
<tt>3
2</tt>

</pre>### Explanation
**Example case 1.** The codes are **IN**, **NB** and **BY**.

**Example case 2.** The codes are **BY** and **YB**.
