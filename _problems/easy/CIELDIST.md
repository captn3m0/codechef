---
category_name: easy
problem_code: CIELDIST
problem_name: 'Minimum Distance'
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
max_timelimit: '2.013'
source_sizelimit: '50000'
problem_author: laycurse
problem_tester: anton_lunyov
date_added: 2-01-2013
tags:
    - cakewalk
    - cook30
    - laycurse
    - simple
editorial_url: 'http://discuss.codechef.com/problems/CIELDIST'
time:
    view_start_date: 1358709858
    submit_start_date: 1358709858
    visible_start_date: 1358709858
    end_date: 1735669800
    current: 1493558129
layout: problem
---
All submissions for this problem are available.In Wolf town there are **2** big markets **S** and **T**. The distance between these markets is **D**. Chef Ciel would like to run **2** restaurants in Wolf town, where the first restaurant will be supplied by the market **S** and the second one will be supplied by the market **T**. The markets run delivery service without charge within some distance, **DS** and **DT** respectively. Near these markets there are many rival restaurants. So Ciel decides to build one of her restaurants **exactly** at the distance **DS** from the market **S**, and build the other restaurant **exactly** at the distance **DT** from the market **T**.

Chef Ciel would like to build her restaurants as close as possible to each other for convenient communication. Your task is to calculate the minimum distance that could be achieved between her restaurants.

**Note.** Wolf town can be considered as an infinite 2D Cartesian plane. The markets and Ciel's restaurants should be considered as _points_ on a plane. The distance between the two points **A** and **B**, whose coordinates are **(Ax, Ay)** and **(Bx, By)** respectively, is defined by **Dist(A, B) = ((Ax − Bx)2 + (Ay − By)2)1/2**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. The only line of each test case contains three space-separated integers **DS**, **DT** and **D**.

### Output

For each test case, output a single line containing the minimum possible distance between Ciel's restaurants that could be achieved. The output must have an absolute or relative error at most **0.000001 (10−6)**. Please, note that your output should not have more than **1000** digits after the decimal point, otherwise you may (or may not) get _wrong answer_ or _runtime error (SIGXFSZ)_.

Note also that the answer could be , which means that two Ciel's restaurants should be located at the same building.

### Constraints

- **1** ≤ **T** ≤ **2013**
- **1** ≤ **DS**, **DT**, **D** ≤ **2013**

### Example

<pre>
<b>Input:</b>
4
15 15 50
15 15 18
43 88 200
2013 2013 2013

<b>Output:</b>
20.000
0.0
69.00000
0

</pre>### Explanation 
**Example case 1.** The distance between markets **S** and **T** is **50**. Assume for simplicity that **S** has coordinates **(0, 0)** and **T** has coordinates **(50, 0)**. Then Ciel could build her first restaurant **RS** at the point **(15, 0)** and the second restaurant **RT** at the point **(35, 0)**. This will ensure that the distance between **S** and **RS** is **DS = 15** and the distance between **T** and **RT** is **DT = 15**. The distance between restaurants appear to be **20** in this scenario. One can prove that this is the minimum possible distance.

**Example case 2.** Here Ciel can locate both her restaurants at the same place. Indeed, if **S = (0, 0)** and **T = (18, 0)** then Ciel could locate both her restaurants at the point **R = (9, 12)**. To check this note that **Dist(R, S) = ((9 − 0)2 + (12 − 0)2)1/2 = (81 + 144)1/2 = 2251/2 = 15**. Similarly it can be verified that **Dist(R, T) = 15**.

**Example case 3.** It is similar to the example case **1**. If **S = (0, 0)** and **T = (200, 0)** then the best way is to locate Ciel's restaurants at the points **RS = (43, 0)** and **RT = (112, 0)**. You can easily check by yourself that **Dist(S, RS) = 43**, **Dist(T, RT) = 88** and **Dist(RS, RT) = 69**.

Just to reiterate, your output can have any number of digits after the decimal point unless it is too long (more than **1000** digits after decimal point). However your output must have an absolute or relative error at most **10−6**.
