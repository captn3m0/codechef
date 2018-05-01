---
category_name: easy
problem_code: NEWSCH
problem_name: 'The New Scheme'
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
problem_author: 'witalij_hq '
problem_tester: anton_lunyov
date_added: 10-08-2012
tags:
    - matrix
    - oct12
    - simple
    - witalij_hq
editorial_url: 'http://discuss.codechef.com/problems/NEWSCH'
time:
    view_start_date: 1350293400
    submit_start_date: 1350293400
    visible_start_date: 1350293400
    end_date: 1735669800
    current: 1493558171
layout: problem
---
All submissions for this problem are available.Scheme? - Too loudly said. Just a new idea. Now Chef is expanding his business. He wants to make some new restaurants in the big city of Lviv. To make his business competitive he should interest customers. Now he knows how. But don't tell anyone - it is a secret plan. Chef knows four national Ukrainian dishes - **salo**, **borsch**, **varenyky** and **galushky**. It is too few, of course, but enough for the beginning. Every day in his restaurant will be a dish of the day among these four ones. And dishes of the consecutive days must be different. To make the scheme more refined the dish of the first day and the dish of the last day must be different too. Now he wants his assistant to make schedule for some period. Chef suspects that there is more than one possible schedule. Hence he wants his assistant to prepare all possible plans so that he can choose the best one among them. He asks you for help. At first tell him how many such schedules exist. Since the answer can be large output it modulo **109 + 7**, that is, you need to output the remainder of division of the actual answer by **109 + 7**.

### Input

The first line of the input contains an integer **T**, the number of test cases. Each of the following **T** lines contains a single integer **N** denoting the number of days for which the schedule should be made.

### Output

For each test case output a single integer in a separate line, the answer for the corresponding test case.

### Constraints

**1** ≤ **T** ≤ **100**
**2** ≤ **N** ≤ **109**

### Example

<pre>
<b>Input:</b>
3
2
3
5

<b>Output:</b>
12
24
240
</pre>### Explanation

**Case 1.** For **N = 2** days we have the following **12** schedules:

First daySecond day salo  borsch  salo  varenyky  salo  galushky  borsch  salo  borsch  varenyky  borsch  galushky  varenyky  salo  varenyky  borsch  varenyky  galushky  galushky  salo  galushky  borsch  galushky  varenyky **Case 2.** For **N = 3** we have the following **24** schedules:

First daySecond dayThird day salo  borsch  varenyky  salo  borsch  galushky  salo  varenyky  borsch  salo  varenyky  galushky  salo  galushky  borsch  salo  galushky  varenyky  borsch  salo  varenyky  borsch  salo  galushky  borsch  varenyky  salo  borsch  varenyky  galushky  borsch  galushky  salo  borsch  galushky  varenyky  varenyky  salo  borsch  varenyky  salo  galushky  varenyky  borsch  salo  varenyky  borsch  galushky  varenyky  galushky  salo  varenyky  galushky  borsch  galushky  salo  borsch  galushky  salo  varenyky  galushky  borsch  salo  galushky  borsch  varenyky  galushky  varenyky  salo  galushky  varenyky  borsch **Case 3.** Don't be afraid. This time we will not provide you with a table of 240 schedules. The only thing we want to mention here is that apart from the previous two cases schedules for other values of **N** can have equal dishes (and even must have for **N > 4**). For example the schedule **(salo, borsch, salo, borsch)** is a correct schedule for **N = 4** while the schedule **(varenyky, salo, galushky, verynky, salo)** is a correct schedule for **N = 5**.
