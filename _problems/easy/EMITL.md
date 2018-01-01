---
category_name: easy
problem_code: EMITL
problem_name: emitL
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
problem_author: pavel1996
problem_tester: xcwgf666
date_added: 26-09-2015
tags:
    - ad
    - cakewalk
    - implementation
    - ltime29
    - pavel1996
    - string
editorial_url: 'http://discuss.codechef.com/problems/EMITL'
time:
    view_start_date: 1445761800
    submit_start_date: 1445761800
    visible_start_date: 1445761800
    end_date: 1735669800
    current: 1493558141
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME29/mandarin/EMITL.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME29/russian/EMITL.pdf)

You are given a string **S** constisting of uppercase Latin letters. Is it possible to reorder the characters in this string to get a string with prefix "**LTIME**" and suffix "**EMITL**"?

_We remind you that a **prefix** of a string is any substring which contains its first character, while a **suffix** of a string is substring containing its last character._

### Input

The first line contains a single integer **T**, denoting the number of testcases. The descriptions of **T** test cases follow.

The first and only line of the test case description has one non-empty string **S** consisting of uppercase Latin letters only.

### Output

For each testcase output a single line containing the string **"YES"** (without quotes) if it's possible to reorder the characters to get the required prefix and suffix, or **"NO"** (without quotes) otherwise.

### Constraints

- Subtask 1 (23 points) : **1** ≤ **T** ≤ **100**, **1** ≤ **|S|** ≤ **9**
- Subtask 2 (77 points) : **1** ≤ **T** ≤ **1000**, **1** ≤ **|S|** ≤ **100**

### Example

<pre><b>Input:</b>
<tt>3
LTIMEAZAZAITLME
LLLTTTIIIMMMEEEAHA
LTIMEM</tt>

<b>Output:</b>
<tt>YES
YES
NO</tt>


</pre>### Explanation
**Test case 1**: we can permute the last 5 letters and get LTIMEAZAZAEMITL

**Test case 2**: we have 3 copies of each of the letters 'L', 'T', 'I', 'M', 'E' so we can leave 5 of them in the beginning and move 5 of them to the end.

**Test case 3**: we have only one letter 'L' so we can't make necessary prefix and suffix at the same time.
