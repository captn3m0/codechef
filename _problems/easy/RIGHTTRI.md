---
category_name: easy
problem_code: RIGHTTRI
problem_name: 'Right Triangle'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: mgch
date_added: 27-05-2016
tags:
    - binary
    - cook71
    - easy
    - kingofnumbers
editorial_url: 'http://discuss.codechef.com/problems/RIGHTTRI'
time:
    view_start_date: 1466965800
    submit_start_date: 1466965800
    visible_start_date: 1466965800
    end_date: 1735669800
    current: 1493558181
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK71/mandarin/RIGHTTRI.pdf), [Russian](http://www.codechef.com/download/translated/COOK71/russian/RIGHTTRI.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK71/vietnamese/RIGHTTRI.pdf) as well.

Chef taught his brother Chefu about right angled triangle and its properties. Chefu says that he has understood everything about right angled triangles. Chef wants to check learning of his brother by asking the following question "Can you find a right angled triangle whose length of hypotenuse is **H** and its area is **S**?"

Chefu is confused how to solve it. I hope you are not. Please solve this by finding a right angled triangle with hypotenuse **H** and area **S**. If it not possible to do so, then output -1.

### Input

The first line of the input contains a single integer **T** denoting the number of test-cases. **T** test cases follow.

For each test case, there will be a single line containing two space separated integers **H** and **S**.

### Output

Output the answer for each test-case in a single line. If it is not possible to find such a triangle, output -1. Otherwise print 3 real numbers corresponding to the lengths of the sides of the triangle sorted in non-decreasing order. Please note that the length of the triangle sides should not differ by more than **0.01** in absolute value from the correct lengths.

### Constraints

- **1** ≤ **T** ≤ **105**
- **1** ≤ **H** ≤ **106**
- **1** ≤ **S** ≤ **1012**

### Example

<pre><b>Input:</b>
<tt>4
5 6
6 10
258303 89837245228
616153 77878145466
</tt>
<b>Output:</b>
<tt>3.00000 4.00000 5.00000
-1
-1
285168.817674 546189.769984 616153.000000
</tt>

</pre>