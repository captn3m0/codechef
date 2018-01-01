---
category_name: easy
problem_code: KSPHERES
problem_name: Spheres
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: aangairbender
problem_tester: null
date_added: 29-07-2015
tags:
    - aangairbender
    - dynamic
    - easy
    - oct15
editorial_url: 'http://discuss.codechef.com/problems/KSPHERES'
time:
    view_start_date: 1444642200
    submit_start_date: 1444642200
    visible_start_date: 1444642200
    end_date: 1735669800
    current: 1493558158
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/OCT15/mandarin/KSPHERES.pdf) and [Russian](http://www.codechef.com/download/translated/OCT15/russian/KSPHERES.pdf) 

Eugene has a sequence of upper hemispheres and another of lower hemispheres. The first set consists of **N** upper hemispheres indexed 1 to **N** and the second has **M** lower hemispheres indexed 1 to **M**. The hemispheres in any sequence can have different radii.

He is now set out on building spheres using them. To build a sphere of radius **R**, he must take one upper half of the radius **R** and one lower half of the radius **R**. Also, he can put a sphere into a bigger one and create a sequence of nested concentric spheres. But he can't put two or more spheres directly into another one.

Examples:

![](https://www.codechef.com/download/OCT15//ok.png)
![](https://www.codechef.com/download/OCT15//wrong.png)

If there is a sequence of (**D+1**) nested spheres, we can call this sequence as a **D**-sequence.

![](https://www.codechef.com/download/OCT15/1-sequence.png)
![](https://www.codechef.com/download/OCT15//2-sequence.png)

Eugene has to find out how many different **X**-sequence are possible (**1** <= **X** <= **C**). An **X** sequence is different from another if the index of any of the hemisphere used in one **X**-sequence is different from the other. Eugene doesn't know how to do it, so Chef agreed to help him. Of course, Chef is too busy now and he asks you to help him.

### Input

The first line contains a three integers: **N** denoting the number of upper sphere halves, **M** denoting the number of lower sphere halves and **C**.

The second line contains **N** space-separated integers **U1**, **U2**, ..., **UN** denoting the radii of upper hemispheres.

The third line contains **M** space-separated integers **L1**, **L2**, ..., **LM** denoting the radii of lower hemispheres.

### Output

Output a single line containing **C** space-separated integers **D1**, **D2**, ..., **DC**, where **Di** is the number of ways there are to build **i**-sequence in modulo **109+7**.

### Constraints

- **1** ≤ **N** ≤ **105**
- **1** ≤ **M** ≤ **105**
- **1** ≤ **C** ≤ **103**
- **1** ≤ **Ui** ≤ **C**
- **1** ≤ **Li** ≤ **C**

### Subtasks

- **Subtask 1:** 1 ≤ **N, M, C** ≤ **10** - **15 points**
- **Subtask 2:** 1 ≤ **N, M, C** ≤ **100** - **25 points**
- **Subtask 3:** **Original constraints** - **60 points**

### Example

<pre><b>Input:</b>
<tt>3 4 3
1 2 3
1 1 3 2</tt>

<b>Output:</b>
<tt>5 2 0</tt>

</pre>### Explanation
We can build spheres with such radii:

**R**=1 and there are 2 ways to do it. (We can choose any of 2 lower hemispheres with **R**=1)

**R**=2 and there is 1 way to do it.

**R**=3 and there is 1 way to do it.

We can build these **1**-sequences:

1->2 and there are 2 ways to do it. ( sphere with radius 1 is inside sphere with radius 2, we can choose any of 2 ways of building sphere with radius 1)

1->3 and there are 2 ways to do it.

2->3 and there is 1 way to do it.

**2 + 2 + 1 = 5**

We can build these **2**-sequences:

1->2->3 and there are 2 ways to do it.

We can't build **3**-sequences, because we don't have 4 spheres of different radii.
