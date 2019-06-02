---
category_name: medium
problem_code: LMA1
problem_name: 'Lucy and the Math Analysis'
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
problem_tester: null
date_added: 13-10-2013
tags:
    - easy
    - ltime06
    - math
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/LMA1'
time:
    view_start_date: 1385285563
    submit_start_date: 1385285563
    visible_start_date: 1385285563
    end_date: 1735669800
    current: 1493557755
layout: problem
---
All submissions for this problem are available.###  Read problems statements in Russian [here](http://www.codechef.com/download/translated/LTIME06/russian/LMA1.pdf)

Lucy is taking math analysis classes in her school. She always has a lot of homework and she always spends a considerable amount of time in order to do it, but today she had completely forgotten about it for some reason. So, please, help her!

Lucy asks you to solve to following problem: calculate the following:
 ![](//www.codechef.com/download/CodeCogsEqn-7.gif)
 Output the result till the **D-th** digit after the decimal point. We're asking you to output truncated result, but not rounded!

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

Each test is described by a line of four numbers - **a**, **p**, **q** and **D** respectively. **a**, **p**, **q** will be given with exactly two digits after the decimal point.

### Output

For each test case, output a single line containing the answer to the corresponding test case (with **D** digits after the decimal point).

### Example

<pre><b>Input:</b>
3
0.62 2.71 3.14 42
0.91 4.70 6.67 18
0.01 9.81 8.63 66

<b>Output:</b>
17.903573407202216066481994459833795013850415
796.867901234567901234
0.187143148658300173451688603203754718906234057749209264360779512294
</pre>
### Scoring

In all the test cases, 0.01 <= **a** < 1.00, 0.00 <= **p** <= 10.00, 0.00 <= **q** <= 10.00

Output will not exceed 1 MB

Subtask 1 (31 point): **T** = 100000, 5 <= **D** <= 7, 0.01 <= **a** <= 0.50

Subtask 2 (29 points): **T** = 100, 50 <= **D** <= 100

Subtask 3 (15 points): **T** = 10000, 50 <= **D** <= 100

Subtask 4 (25 points): 10 <= **T** <= 100, 1 <= **D** <= 100000
