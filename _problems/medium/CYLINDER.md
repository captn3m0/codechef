---
category_name: medium
problem_code: CYLINDER
problem_name: Cylinder
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
problem_author: anton_lunyov
problem_tester: laycurse
date_added: 11-03-2013
tags:
    - anton_lunyov
    - april13
    - maths
    - medium
editorial_url: 'http://discuss.codechef.com/problems/CYLINDER'
time:
    view_start_date: 1366018200
    submit_start_date: 1366018200
    visible_start_date: 1366018200
    end_date: 1735669800
    current: 1493557611
layout: problem
---
All submissions for this problem are available.Chef wants to make a steel container. The container should be of cylindrical form and should have as large volume as possible. He has a rectangular steel sheet of the size **W × H** for this. His plan is the following:

- At first he cuts the sheet into two rectangular sheets by horizontal or vertical cut.
- Then he takes one of the obtained sheets and cuts out two equal non-overlapping circles from it. Let the radius of each circle be **R**.
- Finally he cuts out the rectangular sheet of the size **2πR × A** for maximal possible **A** from the second sheet, with sizes parallel to the sides of the second sheet. He will use it as a lateral surface of the container. Namely, he rolls up the obtained sheet along the side **2πR** to obtain the lateral surface of cylinder.
- Thus, Chef obtains the cylindrical container of height **A** and radius **R**, having bottom and top made from steel.

Chef is aware of your advanced math abilities and asks you for help to find the optimal container. Output the maximum volume of the container that could be achieved by the above scheme.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. The only line of each test case contains two space-separated integers **W** and **H**.

### Output

For each test case, output a single line containing the maximum volume of the container. Your answer will be considered as correct if it has a relative error less than **10−11**. More formally, if the correct output is **A** and your output is **B**, your output will be considered as correct if and only if **|A − B| ≤ 10−11 \* A**.

### Constrains

- **1** ≤ **T** ≤ **400000** (**4 \* 105**)
- **1** ≤ **W** ≤ **999999** (**106 − 1**)
- **1** ≤ **H** ≤ **999999** (**106 − 1**)

### Example

```

<b>Input:</b>
3
4 4
2 3
1 6

<b>Output:</b>
3.471819240663
0.824190535860
0.785398163397

```
### Explanation

In all examples blue circles are top and bottom of container. Yellow rectangle is used to create lateral surface. Namely, we roll up it along the direction of blue arrow to match green borders.

**Example case 1:**

![](//codechef.com/download/CYLINDER_Example1.png)

**R ≅ 0.63662, A ≅ 2.72676.**/>/>

**Example case 2:**

![](//codechef.com/download/CYLINDER_Example2.png)

**R ≅ 0.36218, A = 2.**/>/>

**Example case 3:**

![](//codechef.com/download/CYLINDER_Example3.png)

**R = 0.5, A = 1.**/>