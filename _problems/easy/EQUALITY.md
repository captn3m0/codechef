---
category_name: easy
problem_code: EQUALITY
problem_name: Equality
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
problem_author: kostya_by
problem_tester: stzgd
date_added: 16-03-2015
tags:
    - cook57
    - easy
    - kostya_by
    - linear
    - math
editorial_url: 'http://discuss.codechef.com/problems/EQUALITY'
time:
    view_start_date: 1429470000
    submit_start_date: 1429470000
    visible_start_date: 1429470000
    end_date: 1735669800
    current: 1493558143
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK57/mandarin/EQUALITY.pdf) and [Russian](http://www.codechef.com/download/translated/COOK57/russian/EQUALITY.pdf) as well.

An _equation_ is an equality containing one or more variables. Solving the equation consists of determining which values of the variables make the equality true. In this situation, variables are also known as unknowns and the values which satisfy the equality are known as solutions. An equation differs from an identity in that an equation is not necessarily true for all possible values of the variable.

There are many types of equations, and they are found in all areas of mathematics. For instance, a linear equation is an algebraic equation in which each term is either a constant or the product of a constant and (the first power of) a single variable.

In this problem we'll consider quite a special kind of systems of linear equations. To be more specific, you are given a system of **N** linear equations of the following form:

- **x2** + **x3** + ... + **xN - 1** + **xN** = **a1**
- **x1** + **x3** + ... + **xN - 1** + **xN** = **a2**
- ...
- **x1** + **x2** + ... + **xN - 2** + **xN** = **aN - 1**
- **x1** + **x2** + ... + **xN - 2** + **xN - 1** = **aN**

In other words, **i**'th equation of the system consists of the sum of all the variable **x1**, ..., **xN** except **xi** to the left of the equality sign and the constant **ai** to the right of the equality sign.

One can easily prove, that a system of linear equations as described above always have exactly one solution in case **N** is greater than one. Your task is to find the solution of the system(such a sequence **x1**, **x2**, ..., **xN**, that turns each of the equations into equality). It's guaranteed, that the solution of the system is a sequence consisting only of integers from the range \[1, 108\].

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of the test case description contains one integer **N** denoting the number of equations in the system.

The second line contains **N** integers **a1**, **a2**, ..., **aN** denoting the constants defining a system of linear equations, that you are asked to solve.

### Output

For each test case, output a single line containing **N** integers: a sequence **x1**, **x2**, ..., **xN**, which is the solution of the system.

### Constraints

16. 1 ≤ **T** ≤ 25000
17. 2 ≤ **N** ≤ 50000
18. 1 ≤ **ai** ≤ 5 × 1012
19. 1 ≤ **xi** ≤ 108
20. The sum of all **N** in the input is not greater than 50000
### Example

<pre><b>Input:</b>
2
3
9 6 5
4
13 11 10 8

<b>Output:</b>
1 4 5 
1 3 4 6 


</pre>### Explanation
 In the first test case, we can simply replace the variables with the values from the correct output to make sure, that all the conditions are satisfied:

- **x2** + **x3** = 4 + 5 = 9 = **a1**
- **x1** + **x3** = 1 + 5 = 6 = **a2**
- **x1** + **x2** = 1 + 4 = 5 = **a3**

 In the second test case, we can repeat the same process to make sure, that all the conditions are satisfied:

- **x2** + **x3** + **x4** = 3 + 4 + 6 = 13 = **a1**
- **x1** + **x3** + **x4** = 1 + 4 + 6 = 11 = **a2**
- **x1** + **x2** + **x4** = 1 + 3 + 6 = 10 = **a3**
- **x1** + **x2** + **x3** = 1 + 3 + 4 = 8 = **a4**
