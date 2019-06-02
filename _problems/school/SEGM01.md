---
category_name: school
problem_code: SEGM01
problem_name: 'Bear and Segment 01'
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
problem_author: errichto
problem_tester: lg5293
date_added: 29-04-2017
tags:
    - cakewalk
    - errichto
    - linear
    - ltime47
time:
    view_start_date: 1493485200
    submit_start_date: 1493485200
    visible_start_date: 1493485200
    end_date: 1735669800
    current: 1497283934
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME47/mandarin/SEGM01.pdf), [Russian](http://www.codechef.com/download/translated/LTIME47/russian/SEGM01.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME47/vietnamese/SEGM01.pdf) as well.

Bear Limak has a string **S**. Each character of **S** is a digit '0' or '1'.

Help Limak and check if all the '1' digits form a single non-empty segment (consecutive subsequence) in the string. For each test case, print "YES" or "NO" accordingly.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The only line of each test case contains one string **S**, consisting of digits '0' and '1' only.

### Output

For each test case, output a single line containing the answer — "YES" if all the '1' digits form a single non-empty segment, and "NO" otherwise. Don't print the quotes.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ |**S**| ≤ 105 (here, |**S**| denotes the length of **S**)

### Subtasks

- Subtask #1 (50 points): 1 ≤ |**S**| ≤ 50
- Subtask #2 (50 points): Original constraints.

### Example

<pre><b>Input:</b>
6
001111110
00110011
000
1111
101010101
101111111111

<b>Output:</b>
YES
NO
NO
YES
NO
NO
</pre>
### Explanation

The answer is "YES" for strings 001111110 and 1111.

The answer is "NO" for 00110011 because the '1' digits form two disjoint segments (while they should all be consecutive, with no '0' digits between them).

The answer is "NO" for 000 because the segment formed by the '1' digits must be non-empty (as written in the statement).
