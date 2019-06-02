---
category_name: medium
problem_code: POWERMUL
problem_name: Fombinatorial
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
problem_author: devuy11
problem_tester: null
date_added: 21-07-2014
tags:
    - devuy11
    - easy
    - nov14
    - number
editorial_url: 'http://discuss.codechef.com/problems/POWERMUL'
time:
    view_start_date: 1416216600
    submit_start_date: 1416216600
    visible_start_date: 1416216600
    end_date: 1735669800
    current: 1493557852
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/NOV14/mandarin/POWERMUL.pdf) and [Russian](http://www.codechef.com/download/translated/NOV14/russian/POWERMUL.pdf).

You are given a function f which is defined as :


![](https://codechef_shared.s3.amazonaws.com/download/NOV14/CodeCogsEqn%283%29.gif)

Your task is to find the value of **f(N) / ( f(r)\*f(N-r) )**

 . As it will be a large number output it modulo **M**.

###  Input 

First line contains **T** , number of test cases to follow.

Next follows **T** test case.

First line of ever test case contain 3 space separated integers **N , M** and **Q**.

Next **Q** line follows , each line contain r.

### Output

For every test case , output **Q** lines , each line containing the answer.

### Constraints

- 2 ≤ **N** ≤ 105
- 1 ≤ **M** ≤ 109
- 2 ≤ Sum of **N** over all test cases ≤ 5\*105
- 2 ≤ Sum of **Q** over all test cases ≤ 105
- 1 < **r** < **N**

### Subtasks

- Subtask 1: N ≤ 5 , rest of the constraints are same. Points - 9
- Subtask 2: N ≤ 500 , M is a prime number , rest of the constraints are same. Points - 31
- Subtask 3: Refer to constraints above : Points-60

<pre><h3>Sample Input</h3>
1
5 24 2
2
3
<h3>Sample Output</h3>
8
8
</pre>
### Explanation

f\[1\] = 1

f\[2\] = 4

f\[3\] = 1\*22\*33 = 108

f\[4\] =1\*22\*33\*44 = 27648

f\[5\] = 1\*22\*33\*44\*55 =86400000

value of f\[5\] / (f\[2\]\*f\[3\]) = 200000 and 200000%24 is 8
