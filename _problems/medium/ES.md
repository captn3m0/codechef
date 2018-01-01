---
category_name: medium
problem_code: ES
problem_name: 'Euler Sum'
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
max_timelimit: '2'
source_sizelimit: '1000'
problem_author: cgy4ever
problem_tester: null
date_added: 9-05-2017
tags:
    - cgy4ever
    - hard
    - june17
    - number
time:
    view_start_date: 1497259800
    submit_start_date: 1497259800
    visible_start_date: 1497259800
    end_date: 1735669800
    current: 1497284437
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JUNE17/mandarin/ES.pdf), [Russian](http://www.codechef.com/download/translated/JUNE17/russian/ES.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JUNE17/vietnamese/ES.pdf) as well.

Compute:

 floor\[1\*e\] + floor\[2\*e\] + floor\[3\*e\] + ... + floor\[**n**\*e\],

where floor\[x\] is the largest integer that is not greater than x, and e is Euler's number: 2.7182818284...

### Input

A single line which contains a single integer: **n**.

### Output

A single line which contains a single integer which should be the answer.

### Constraints

**1** ≤ **n** ≤ **104000**### Subtasks

- Subtask #1 (50 points): **1** ≤ **n** ≤ **10100**
- Subtask #2 (50 points): Original constraints.

### Example

<pre><b>Input:</b>
3

<b>Output:</b>
15

</pre>### Explanation
<pre>
floor[1*e] = floor[2.71828..] = 2.
floor[2*e] = floor[5.43656..] = 5.
floor[3*e] = floor[8.15484..] = 8.
So the answer is 2+5+8=15.

</pre>### Note
Source code limit is 1000 bytes.
