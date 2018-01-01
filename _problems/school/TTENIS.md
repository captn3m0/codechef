---
category_name: school
problem_code: TTENIS
problem_name: 'Chef and Table Tennis'
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
problem_author: 'iscsi '
problem_tester: null
date_added: 8-06-2015
tags:
    - iscsi
    - snck15el
editorial_url: 'http://discuss.codechef.com/problems/TTENIS'
time:
    view_start_date: 1434135600
    submit_start_date: 1434135600
    visible_start_date: 1434135600
    end_date: 1735669800
    current: 1492507193
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCK15EL/mandarin/TTENIS.pdf) , [Russian](http://www.codechef.com/download/translated/SNCK15EL/russian/TTENIS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCK15EL/vietnamese/TTENIS.pdf)

Chef likes to play table tennis. He found some statistics of matches which described who won the points in order. A game shall be won by the player first scoring 11 points except in the case when both players have 10 points each, then the game shall be won by the first player subsequently gaining a lead of 2 points. Could you please help the Chef find out who the winner was from the given statistics? (It is guaranteed that statistics represent always a valid, finished match.)

### Input

The first line of the input contains an integer **T**, denoting the number of test cases. The description of **T** test cases follows. Each test case consist a binary string **S**, which describes a match. '0' means Chef lose a point, whereas '1' means he won the point.

### Output

For each test case, output on a separate line a string describing who won the match. If Chef won then print "WIN" (without quotes), otherwise print "LOSE" (without quotes).

### Constraints

9. **1** ≤ **T** ≤ **1000**
10. **1** ≤ **length(S)** ≤ **100**
### Example

<pre><b>Input:</b>
2
0101111111111
11100000000000

<b>Output:</b>
WIN
LOSE

</pre>### Explanation
**Example case 1.** Chef won the match 11:2, his opponent won just two points, the first and the third of the match.

**Example case 2.** Chef lost this match 11:3, however he started very well the match, he won the first three points in a row, but maybe he got tired and after that lost 11 points in a row.
