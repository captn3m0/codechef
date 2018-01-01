---
category_name: easy
problem_code: TAAPLUSB
problem_name: 'A Plus B Again!'
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
problem_author: tuananh93
problem_tester: keshav_57
date_added: 15-05-2013
tags:
    - cook36
    - easy
    - maths
    - probability
    - tsaplusb
    - tuananh93
editorial_url: 'http://discuss.codechef.com/problems/TAAPLUSB'
time:
    view_start_date: 1374431400
    submit_start_date: 1374431400
    visible_start_date: 1374431400
    end_date: 1735669800
    current: 1493558191
layout: problem
---
All submissions for this problem are available.Have you ever implemented a program adding two big integers that cannot be represented by the primitive data type of your programming language? The algorithm is just simulation of the column addition method that we have been taught in elementary school. Sometimes we forget the carry and the result is incorrect.

 In this problem, you need to evaluate the expected value of the number of times we have non-zero carry when adding two non-negative integers that contain **at most N** digits each. Note that we are adding the numbers in their **base 10** representation.

For example, the following table shows the number of carries when adding some pairs of numbers:

**A****B****Number of carries**2040111119112392311235987655### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
Each test case has a single line containing an integer **N**.

### Output

For each test case, output a single line containing the required expected value.
Your answer will be accepted if the error is less than 10 -6.

### Constraints

- **1** ≤ **T** ≤ **100,000(105)**
- **1** ≤ **N** ≤ **100,000(105)**

### Example

<pre><b>Input:</b>
3
1
2
3

<b>Output:</b>
0.45
0.945
1.4445


</pre>### Explanation
**Example case 1.**
We have 10\*10 = 100 cases of adding two 1-digit number.
The carry appears when adding 1 and 9, 2 and 9, 3 and 9 ... and so on,
there are 45 cases in total and in each case, the carry appears exactly once.
