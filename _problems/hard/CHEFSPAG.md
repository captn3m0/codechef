---
category_name: hard
problem_code: CHEFSPAG
problem_name: 'Chef has a Spaghetti Garden'
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
max_timelimit: '9'
source_sizelimit: '50000'
problem_author: kevinsogo
problem_tester: dpraveen
date_added: 14-07-2015
tags:
    - kevinsogo
time:
    view_start_date: 1473931800
    submit_start_date: 1473931800
    visible_start_date: 1473931800
    end_date: 1735669800
    current: 1493556640
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SEPT16/mandarin/CHEFSPAG.pdf), [Russian](http://www.codechef.com/download/translated/SEPT16/russian/CHEFSPAG.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SEPT16/vietnamese/CHEFSPAG.pdf) as well.

Chef is tending a really large *spaghetti garden*. This garden consists of many *spaghetti trees*. Specifically, there is a spaghetti tree planted for each lattice point location **(x, y)** with **x**, **y** ≥ 0. (Yes, there are an infinite number of trees in Chef's garden!)

It's the 1st of April, so it's harvest time for Chef. Chef plans to harvest all *spaghetti strands* within a certain region today. In case you didn't know, a spaghetti tree bears *spaghetti strands* as its fruits.

Specifically, Chef plans to harvest all spaghetti strands hanging from every spaghetti tree whose location **(x, y)** is within the interior or boundary of a certain polygon with **N** vertices. Also, the spaghetti tree located at **(x, y)** currently bears exactly **Fx+y** fruits, where **Fk** satisfies the following fourth-order recurrence:

**Fk = a·Fk-1 + b·Fk-2 + c·Fk-3 + d·Fk-4**

How many strands of spaghetti will Chef be able to harvest today? Since this number can be very large, output it modulo **109 + 9**. (Note: this is slightly different from the usual mod.)

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains nine space separated integers **N**, **a**, **b**, **c**, **d**, **F0**, **F1**, **F2**, and **F3**.

After that, **N** lines follow. The **ith** line contains two integers **xi** and **yi**, denoting that **(xi, yi)** is the **ith** vertex of the polygon in counterclockwise order.

### Output

For each test case, output a single line containing the integer: the answer for that test case.

### Constraints

- 0 ≤ **a**, **b**, **c**, **d**, **F0**, **F1**, **F2** **F3** &lt; **109 + 9**
- The polygon is simple and non-degenerate.
- **1** ≤ **T** ≤ **2000**
- **3** ≤ **N** ≤ **16**
- The sum of the **N** in a single test file is ≤ **6000**

### Subtasks

**Subtask #1 (10 points):**- 0 ≤ **xi**, **yi** ≤ **100**

**Subtask #2 (30 points):**- 0 ≤ **xi**, **yi** ≤ **104**

**Subtask #3 (60 points):**- 0 ≤ **xi**, **yi** ≤ **109**

### Example

<pre><b>Input:</b>
<tt>2
4 1 2 3 4 0 1 2 3
1 1
2 1
2 2
1 2
4 1 2 3 4 0 1 2 3
1 1
3 1
3 3
1 3
</tt>
<b>Output:</b>
<tt>18
153
</tt>
</pre>
### Explanation

In both test cases, we have **Fk = k** for **0 ≤ k ≤ 3** and **Fk = Fk-1 + 2·Fk-2 + 3·Fk-3 + 4·Fk-4**. So you can check that **F4 = 10**, **F5 = 26** and **F6 = 63**

- In the first test case, Chef will harvest all spaghetti strands in the locations **(1, 1)**, **(1, 2)**, **(2, 1)**, **(2, 2)**. The total number is **F1+1 + F1+2 + F2+1 + F2+2** = **F2 + F3 + F3 + F4** = **18**
- In the second test case, Chef will harvest all spaghetti strands in the locations **(1, 1)**, **(1, 2)**, **(1, 3)**, **(2, 1)**, **(2, 2)**, **(2, 3)**, **(3, 1)**, **(3, 2)**, **(3, 3)**. The total number is **F1+1 + F1+2 + F1+3 + F2+1 + F2+2 + F2+3 + F3+1 + F3+2 + F3+3** = **F2 + F3 + F4 + F3 + F4 + F5 + F4 + F5 + F6** = **153**
