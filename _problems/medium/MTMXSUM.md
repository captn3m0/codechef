---
category_name: medium
problem_code: MTMXSUM
problem_name: 'Matrix Maximum Sum'
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
problem_author: ma5termind
problem_tester: iscsi
date_added: 22-10-2015
tags:
    - easy
    - feb16
    - ma5termind
editorial_url: 'http://discuss.codechef.com/problems/MTMXSUM'
time:
    view_start_date: 1455528600
    submit_start_date: 1455528600
    visible_start_date: 1455528600
    end_date: 1735669800
    current: 1493557814
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB16/mandarin/MTMXSUM.pdf), [Russian](http://www.codechef.com/download/translated/FEB16/russian/MTMXSUM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/FEB16/vietnamese/MTMXSUM.pdf) as well.

Devu and Churu love to play with numbers. Today, each of them has an **1 - based** array consisting of **N** positive integers. Devu named his array as **A** while Churu called his array **B**. They have decided to construct a matrix **C** of size **N × N** using given arrays **A** and **B** where an entry **Ci,j** in the matrix is given by following expression.

![](https://s3.amazonaws.com/hr-challenge-images/0/1454483626-30b1711b6a-image2.JPG "image2.JPG")where **Ci,j** denotes the value of the **jth** cell in the **ith** row of matrix **C**, **Ai** denotes the **ith** element of the array **A** and **Bj** denotes the **jth** element of the array **B**.


For example, consider the following arrays **A** and **B** each containing **3** elements.

<pre>
<b>A = [4, 1, 9]</b>
<b>B = [3, 4, 1]</b>

Constructed matrix <b>C</b> will look like:<b>
       [20, 30, 20],
C = [12, 18, 12],
       [48, 72, 48],
</b>

</pre>Then, for a given **K**, they will create a list **LK** of all sub-matrices of size **K x K** from the constructed matrix **C** and compute the following expression over the created list **LK**.
![](https://s3.amazonaws.com/hr-challenge-images/0/1454483411-9199f9c2a5-image1.JPG "image1.JPG")where **max( X )** denotes the maximum element present in the matrix **X**.


For example, consider the above matrix **C** and **K = 2**. Here, **LK** contains following **4** sub-matrices of size **2 x 2**.

<pre><b>
[20, 30]      [30, 20]      [12, 18]      [18, 12]
[12, 18]      [18, 12]      [48, 72]      [72, 48]

M<sub>1</sub> = 30      M<sub>2</sub> = 30      M<sub>3</sub> = 72      M<sub>4</sub> = 72</b>

</pre>Therefore, for **K = 2**, **S = M1 + M2 + M3 + M4 = (30 + 30 + 72 + 72) % (109 + 7) = 204.**

Devu and Churu like the task very much and decided to compute the above expression for all possible values of **K** such that **1 ≤ K ≤ N** but suddenly their mom called them for some urgent work and they had to leave the task in between. Can you help them completing this task?

### Input

The first line of input contains a single integer **N** denoting the size of both arrays **A** and **B**. Second line of input contains **N** space-separated integers denoting the array **A**. Third line of input also contains **N** space separated integers, denoting the array **B**.

### Output

Output **N** space-separated integers, where the **ith** integer in the output denotes the required answer considering all sub-matrices of size **i x i**.

### Constraints

**1. 1 ≤ N ≤ 105** **1. 1 ≤ Ai, Bj ≤ 109** 
### Subtasks

**1. 1 ≤ N ≤ 104 : ( 40 pts )** **1. 1 ≤ N ≤ 105 : ( 60 pts )** 
###  Example 

<pre>
<b>Input</b>
3
4 1 9
3 4 1

<b>Output</b>
280 204 72


</pre>