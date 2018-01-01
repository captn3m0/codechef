---
category_name: easy
problem_code: RRSTONE
problem_name: Stone
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
problem_author: Rubanenko
problem_tester: xcwgf666
date_added: 14-04-2014
tags:
    - Rubanenko
    - ad
    - easy
    - may14
editorial_url: 'http://discuss.codechef.com/problems/RRSTONE'
time:
    view_start_date: 1399887000
    submit_start_date: 1399887000
    visible_start_date: 1399887000
    end_date: 1735669800
    current: 1493558183
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MAY14/mandarin/RRSTONE.pdf) and [Russian](http://www.codechef.com/download/translated/MAY14/russian/RRSTONE.pdf).

Roman has no idea, why this problem is called Stone. He also has no idea on how to solve the followong problem: given array of **N** integers **A** and a number **K**. During a turn the maximal value over all **Ai** is chosen, let's call it **MAX**. Then **Ai** =
**MAX** - **Ai** is done for every **1 <= i <= N**. Help Roman to find out how will the array look like after **K** turns.

### Input

The numbers **N** and **K** are given in the first line of an input. Then **N** integers are given in the second line which denote the array **A**.

### Output

Output **N** numbers on a single line. It should be the array **A** after **K** turns.

### Constraints

- **1** <= **N** <= **105**
- <= **K** <= **109**
- **Ai** does not exceed **2 \* 109** by it's absolute value.

### Example

<pre><b>Input:</b>
4 1
5 -1 7 0

<b>Output:</b>
2 8 0 7

</pre>