---
category_name: hard
problem_code: FN
problem_name: 'Fibonacci Number'
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
max_timelimit: '0.5 - 15'
source_sizelimit: '20000'
problem_author: aekd_adm
problem_tester: shangjingbo
date_added: 29-08-2013
tags:
    - aekd_adm
    - maths
    - medium
    - number
    - oct13
editorial_url: 'http://discuss.codechef.com/problems/FN'
time:
    view_start_date: 1381743000
    submit_start_date: 1381743000
    visible_start_date: 1381743000
    end_date: 1735669800
    current: 1493556711
layout: problem
---
All submissions for this problem are available.###  Read problems statements in Mandarin Chinese [here](http://www.codechef.com/download/translated/OCT13/mandarin/FN.pdf)

### Problem Statement

As we know, Fibonacci Number is defined as

**Fn=n if n ≤ 1**

 **Fn=Fn-1+Fn-2, otherwise**

Now this problem is quite simple: you are given one prime number **P** and one non-negative integer **C**

You are expected to find the smallest non-negative integer **n**, such that

**Fn≡C(mod P)**

The definition of "mod" could be found here:
[here](http://en.wikipedia.org/wiki/Modular_arithmetic)

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. Only one line of each test case, which contains two integers **C** and **P** denoting the number described above.


### Output

For each test case, output a single line containing one integer indicates the smallest **n**. If such **n** do not exist, output **-1** instead 
### Constraints

**1** ≤ **T** ≤ **100**

**11** ≤ **P** ≤ **2000000000** and is one **prime number**

 ≤ **C** ≤ **P-1**

**(P Mod 10)** is **square number**

### Example

<pre><b>Input:</b>
4
0 11
16 19
18 19
4 19

<b>Output:</b>
0
14
16
-1

<p>
<b>Hint:</b>
Here are the first few fibonacci number when mod by 19:

n	
0	1	2	3	4	5	6	7	8	9	10	11	12	13	14	15	16	17	18	19
F_n(mod 19)	
0	1	1	2	3	5	8	13	2     15	17	13	11	5	16	2	18	1	0	1
</p>


</pre>