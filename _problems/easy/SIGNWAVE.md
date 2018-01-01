---
category_name: easy
problem_code: SIGNWAVE
problem_name: 'Sign Wave'
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
problem_author: chandubaba
problem_tester: laycurse
date_added: 6-01-2015
tags:
    - chandubaba
    - march15
    - simple
    - trigonometry
editorial_url: 'http://discuss.codechef.com/problems/SIGNWAVE'
time:
    view_start_date: 1426498200
    submit_start_date: 1426498200
    visible_start_date: 1426498200
    end_date: 1735669800
    current: 1493558188
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MARCH15/mandarin/SIGNWAVE.pdf) and [Russian](http://www.codechef.com/download/translated/MARCH15/russian/SIGNWAVE.pdf).

There are **S** sine functions and **C** cosine functions as following:

**ai sin(2i x)**, **0 ≤ x ≤ 2π**, for **i = 0, 1, ..., S−1**,

**bj cos(2j x)**, **0 ≤ x ≤ 2π**, for **j = 0, 1, ..., C−1**,


where **ai, bj** are some positive constants (and note that the answer of this problem does not depend on **ai** and **bj**).

For example, the following figures show the case of **S = 2, C = 0** and the case of **S = 3, C = 2**.

![](/download/extimages/0925419993d0d4519b81b105a340b150.png)

This figure shows the case of **S = 2, C = 0**. There are two sine functions **a1 sin(x)** denoted by the red line, and **a2 sin(2x)** denoted by the blue line.

![](/download/extimages/f27db527f73499f44c46093b0758836d.png)

This figure shows the case of **S = 3, C = 2**. There are five functions **a1 sin(x)**, **a2 sin(2x)**, **a3 sin(4x)**, **b1 cos(x)** and **b2 cos(2x)**. In the figure, three sine functions are denoted by blue lines, and two cosine functions are denoted by red lines.

Chef wants to find the number of the points on the **x**-axis such that at least **K** functions through the points.

### Input

The first line of input contains an integer **T**, denoting the number of test cases. Then **T** test cases follow.

Each test case contains one line. The line contains three space-separated integers **S, C, K**.

### Output

For each test case, print the number of the points on the **x**-axis such that at least **K** functions through the points.

### Constraints and Subtasks

- **1 ≤ T ≤ 200**

**Subtask 1: 15 points**

- **0 ≤ S ≤ 12**
- **0 ≤ C ≤ 12**
- **1 ≤ K ≤ 25**

**Subtask 2: 30 points**

- **0 ≤ S ≤ 50**
- **C = 0**
- **1 ≤ K ≤ 50**

**Subtask 3: 25 points**

- **0 ≤ S ≤ 50**
- **0 ≤ C ≤ 50**
- **K = 1**

**Subtask 4: 30 points**

- **0 ≤ S ≤ 50**
- **0 ≤ C ≤ 50**
- **1 ≤ K ≤ 100**

### Example

<pre>
<b>Input:</b>
4
2 0 1
2 0 2
3 2 1
3 2 3

<b>Output:</b>
5
3
9
5

</pre>### Explanation
**Example 1.** This is the case of **S = 2, C = 0**. So the situation is the same as the first figure in the statement. There are **5** points on the **x**-axis such that at least **1** function through the points. That is, **x = 0, π/2, π, 3π/2, 2π**.

**Example 2.** This is also the case of **S = 2, C = 0**. So the situation is the same as the first figure in the statement. There are **3** points on the **x**-axis such that at least **2** functions through the points. That is, **x = 0, π, 2π**.

**Example 3.** This is the case of **S = 3, C = 2**. So the situation is the same as the second figure in the statement. There are **9** points on the **x**-axis such that at least **1** function through the points. That is, **x = 0, π/4, π/2, 3π/4, π, 5π/4, 3π/2, 7π/4, 2π**.

**Example 4.** This is the case of **S = 3, C = 2**. So the situation is the same as the second figure in the statement. There are **5** points on the **x**-axis such that at least **3** functions through the points. That is, **x = 0, π/2, π, 3π/2, 2π**. For example, three sine function through the point **x = 0**, and two sine functions and one cosine function through the point **x = π/2**.
