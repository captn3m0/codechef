---
category_name: medium
problem_code: ABCSTR
problem_name: ABC-Strings
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: kostya_by
problem_tester: gerald
date_added: 8-02-2014
tags:
    - ad
    - cook44
    - kostya_by
    - map
    - simple
editorial_url: 'http://discuss.codechef.com/problems/ABCSTR'
time:
    view_start_date: 1395599400
    submit_start_date: 1395599400
    visible_start_date: 1395599400
    end_date: 1735669800
    current: 1493557440
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK44/mandarin/ABCSTR.pdf) and [Russian](http://www.codechef.com/download/translated/COOK44/russian/ABCSTR.pdf) as well.

Mike likes strings. He is also interested in algorithms. A few days ago he discovered for himself a very nice problem:

 _You are given an AB-string **S**. You need to count the number of substrings of S, which have an equal number of 'A'-s and 'B'-s._

Do you know how to solve it? Good. Mike will make the problem a little bit more difficult for you.

 _You are given an ABC-string **S**. You need to count the number of substrings of S, which have an equal number of 'A'-s, 'B'-s and 'C'-s._

A string is called AB-string if it doesn't contain any symbols except 'A' or 'B'. A string is called ABC-string if it doesn't contain any symbols except 'A', 'B' or 'C'.

### Input

The first line of the input contains an ABC-string **S**.

### Output

Your output should contain the only integer, denoting the number of substrings of **S**, which have an equal number of 'A'-s, 'B'-s and 'C'-s.

The answer can go above a 32-bit integer. Please, use 64-bit integers for storing and processing data.

### Constraints

1 ≤ **|S|** ≤ 1 000 000; where **|S|** denotes the length of the given ABC-string.

### Example

<pre><b>Input:</b>
ABACABA

<b>Output:</b>
2
</pre>### Explanation

In the example you should count **S**\[2..4\] = "BAC" and **S**\[4..6\] = "CAB".
