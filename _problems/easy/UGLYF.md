---
category_name: easy
problem_code: UGLYF
problem_name: 'Sherlock and the Ugly Flower'
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
problem_author: darkshadows
problem_tester: null
date_added: 27-09-2016
tags:
    - binary
    - cook75
    - darkshadows
    - easy
time:
    view_start_date: 1477247400
    submit_start_date: 1477247400
    visible_start_date: 1477247400
    end_date: 1735669800
    current: 1493558196
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK75/mandarin/UGLYF.pdf), [Russian](http://www.codechef.com/download/translated/COOK75/russian/UGLYF.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK75/vietnamese/UGLYF.pdf) as well.

Watson gives to Sherlock two strings **S1** and **S2** consisting of uppercase English alphabets. Next he wants Sherlock to build a flower in the following way:

He puts both strings perpendicular to each other in such a way that they overlap at the same character. For example, if he has two strings "**ABCDEF**" and "**XXBCZQ**", one possible way to make a flower is:

 ```

<span class="inner-pre" style="font-size: 20px">
          A
          B 
X X B C  Z  Q
          D
          E
          F
</span>
<pre>
Length of petals in the above flower are 2, 2, 3 and 3.

A flower's ugliness is sum of absolute difference of adjacent petal lengths *i.e.* *i.e.* if adjacent petal lengths are **L1, L2, L3, L4**, then ugliness of flower is **|L1 - L2| + |L2 - L3| + |L3 - L4| + |L4 - L1|.**

Sherlock wants to find minimum value of ugliness if we consider all possible flower configurations. Note that a configuration is valid even if any of the petal length is 0.

### Input

First line contains **T**, number of test cases. Each test case consists of string **S1** in one line followed by string **S2** in the next line. It is guaranteed that there exists at least one possible way to make a flower.

### Output

For each test case, output in one line the required answer.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **length(S1), length(S2)** ≤ **105**

### Example

</pre><b>Input:</b>
2
ABCDE
XXBCZQ
BBB
BBBBBB

<b>Output:</b> 
2
6
<pre>
### Explanation

Test case 1:
If we keep the configuration shown in statement, the ugliness is 2, which is minimum possible. 

Test case 2:
One of the best configurations is

</pre>
<span class="inner-pre" style="font-size: 20px">
       B 
B B B  B  B B
       B
</span>
where petal lengths are 1, 3, 1, 2.
<pre>