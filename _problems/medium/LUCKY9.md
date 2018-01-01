---
category_name: medium
problem_code: LUCKY9
problem_name: 'Lucky Balance'
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
problem_author: witua
problem_tester: laycurse
date_added: 15-02-2012
tags:
    - binomial
    - maths
    - medium
    - nov12
    - witua
editorial_url: 'http://discuss.codechef.com/problems/LUCKY9'
time:
    view_start_date: 1352712600
    submit_start_date: 1352712600
    visible_start_date: 1352712600
    end_date: 1735669800
    current: 1493557770
layout: problem
---
All submissions for this problem are available.Chef has the string **s** of length **n** consisted of digits **4** and **7**. The string **s** is called balanced if there exits such integer **x** (**1** ≤ **x** ≤ **n**) that the number of digits **4** in substring **s\[1; x)** is equal to the number of digits **7** in substring **s(x; n\]**, where **s\[1; x)** is the substring from the **1**st digit to (**x-1**)th digit of **s**, and **s(x; n\]** is the substring from the (**x+1**)th digit to **n**th digit of **s**. For example, **s = 747474** is a balanced string, because **s\[1; 4) = 747** has one **4** and **s(4; 6\] = 74** has one **7**. Note that **x** can be **1** or **n** and **s\[1; 1)** and **s(n; n\]** denote an empty string.

In one turn Chef can choose any pair of consecutive digits and swap them. Find for Chef the total number of different balanced string that can be obtained from string **s** using any (even 0) number of turns. Print the result modulo **1000000007**.

### Input

The first line of the input contains one integer **T**, the number of test cases. Then **T** lines follow, each of which contains string **s** for the corresponding test.

### Output

**T** lines, each of which contains single integer - the answer for the corresponding test modulo **109+7**.

### Constraints

1 ≤ **T** ≤ 10

1 ≤ **n** ≤ 5000

### Example

<pre>
<b>Input:</b>
2
47
4477

<b>Output:</b>
1
4

</pre>