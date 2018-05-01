---
category_name: medium
problem_code: FOMBRO
problem_name: Zombinatorial
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
problem_author: devuy11
problem_tester: anudeep2011
date_added: 11-11-2014
tags:
    - cook55
    - devuy11
    - dynamic
    - mathematics
    - simple
editorial_url: 'http://discuss.codechef.com/problems/FOMBRO'
time:
    view_start_date: 1424025000
    submit_start_date: 1424025000
    visible_start_date: 1424025000
    end_date: 1735669800
    current: 1493557664
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK55/mandarin/FOMBRO.pdf) and [Russian](http://www.codechef.com/download/translated/COOK55/russian/FOMBRO.pdf) as well.

You are given a function f which is defined as :

![](https://codechef_shared.s3.amazonaws.com/download/COOK55/main_equation.png)

Your task is to find the value of

![](https://codechef_shared.s3.amazonaws.com/download/COOK55/fraction.png) 

where **M** is given in input.

### Input Format

First line contains **T**, the number of test cases.

First line of each test case contain 3 space separated integers **N**, **M** and **Q**.

Next **Q** line follows, each line contain **r**.

### Output Format

For each test case, output **Q** lines, each line containing the required answer.

### Constraints

2 ≤ **N** ≤ 106

1 ≤ **M** ≤ 109

2 ≤ Sum of **N** over all test cases ≤ 106

1 ≤ Sum of **Q** over all test cases ≤ 2\*105

1 ≤ **T** ≤ 105

1 < **r** < **N**

<pre>
<b>Sample Input</b>
2
5 114 1
2
50 3874 3
31
17
21

<b>Sample Output</b>
72
3718
624
1144

</pre>### Explanation for first test case

f\[1\] = 1

f\[2\] = 2

f\[3\] = 1\*22 \* 3 = 12

f\[4\] =1\*23\*32\*4 = 8\*9\*4 = 288

f\[5\] = 1\*24\*33\*42\*5 =34560

value of f\[5\] / (f\[2\]\*f\[3\]) = 1440 and 1440 %114 is 72
