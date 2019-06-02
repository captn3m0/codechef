---
category_name: medium
problem_code: QNUMBER
problem_name: 'Queries About Numbers'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: 'kamranmaharov '
problem_tester: laycurse
date_added: 15-07-2012
tags:
    - factors
    - kamranmaharov
    - number
    - sep12
editorial_url: 'http://discuss.codechef.com/problems/QNUMBER'
time:
    view_start_date: 1347360315
    submit_start_date: 1347360315
    visible_start_date: 1347355800
    end_date: 1735669800
    current: 1493557867
layout: problem
---
All submissions for this problem are available.Chef loves number theory very much. Now it is time to solve a new kind of problem.

There is given a natural number **N**. Chef has to answer **Q** queries of the form **T K**.

Here **T** is the type of query and **K** is the natural number. 
If **T=**1, Chef must find the number of natural numbers which is divisor of both **N** and **K**. 
If **T=**2, Chef must find the number of natural numbers which is divisor of **N** and is divisible by **K**. 
If **T=**3, Chef must find the number of natural numbers which is divisor of **N** and is not divisible by **K**. 

Chef can solve all these queries, but you will be hungry for night if this happens, because Chef will not have free time to cook a meal. Therefore you compromise with him and decided that everyone must do his/her own job. You must program and Chef must cook.

### Input

There will be 2 numbers in the first line: **N** and **Q**. 
**Q** lines follow with 2 numbers each: **T** and **K**

### Output

For each of the **Q** lines you must output the result for corresponding query in separat line.

### Example

<pre>
<b>Input:</b>
12 6
1 6
1 14
2 4
2 3
3 12
3 14

<b>Output:</b>
4
2
2
3
5
6

</pre>
### Explanation

Numbers for each query: 
{1,2,3,6} 
{1,2} 
{4,12} 
{3,6,12} 
{1,2,3,4,6} 
{1,2,3,4,6,12} ### Constraints

1N12 
1Q5 
1T1K12
