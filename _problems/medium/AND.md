---
category_name: medium
problem_code: AND
problem_name: 'Pairwise AND sum'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: Rubanenko
date_added: 18-07-2013
tags:
    - ad
    - ltime03
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/AND'
time:
    view_start_date: 1377419423
    submit_start_date: 1377419423
    visible_start_date: 1377419423
    end_date: 1735669800
    current: 1493557455
layout: problem
---
All submissions for this problem are available.You are given a sequence of **N** integer numbers **A**. Calculate the sum of **Ai AND Aj** for all the pairs (**i**, **j**) where **i < j**.

 The **AND** operation is the **Bitwise AND** operation, defined as in [here](http://en.wikipedia.org/wiki/Bitwise_operation#AND).

### Input

The first line of input consists of the integer **N**. 

The second line contains **N** integer numbers - the sequence **A**.

### Output

Output the answer to the problem on the first line of the output.

### Example

<pre><b>Input:</b>
5
1 2 3 4 5

<b>Output:</b>
9


</pre>### Scoring
Subtask 1 (13 points): **N** <= 1000, **Ai** <= 1. 

Subtask 2 (39 points): **N** <= 1000, **Ai** <= 109. 

Subtask 3 (21 points): **N** <= 105, **Ai** <= 1. 

Subtask 4 (27 points): **N** <= 105, **Ai** <= 106.
