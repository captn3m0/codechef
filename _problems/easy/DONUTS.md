---
category_name: easy
problem_code: DONUTS
problem_name: 'Chain of Doughnuts'
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
problem_author: m0stik
problem_tester: kevinsogo
date_added: 30-04-2015
tags:
    - easy
    - greedy
    - m0stik
    - sept15
    - sorting
editorial_url: 'http://discuss.codechef.com/problems/DONUTS'
time:
    view_start_date: 1442223000
    submit_start_date: 1442223000
    visible_start_date: 1442223000
    end_date: 1735669800
    current: 1493558214
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin](http://www.codechef.com/download/translated/SEPT15/mandarin/DONUTS.pdf) and [Russian](http://www.codechef.com/download/translated/SEPT15/russian/DONUTS.pdf). Translations in Vietnamese to be uploaded soon.

There is new delicious item in Chef's menu - a doughnut chain. Doughnuts connected successively in line forming a chain.


![](https://s3.amazonaws.com/codechef_shared/download/SEPT15/DONUT1.jpg)_Chain of 3 doughnuts_

Chef has received an urgent order for making a chain of **N** doughnuts. He noticed that there are exactly **N** cooked doughnuts in the kitchen, some of which are already connected in chains. The only thing he needs to do is connect them in one chain.

He can cut one doughnut (from any position in a chain) into two halves and then use this cut doughnut to link two different chains.
Help Chef determine the minimum number of cuts needed to complete the order.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases.
- The first line of each test case contains two integer **N** and **M** denoting the size of order and number of cooked chains respectively.
- The second line contains **M** space-separated integers **A1**, **A2**, ..., **AM** denoting the size of the chains.

_It is guaranteed that **N** is equal to the sum of all **Ai**'s over **1<=_i_<=M**._

### Output

For each test case, output a single line containing an integer corresponding to the number of cuts needed Chef to make the order.

### Constraints and Subtasks

- **1** ≤ **T** ≤ **200**
- **1** ≤ **N** ≤ **2\*109**
- **1** ≤ **Ai** ≤ **105**

**Subtask 1: 10 points**

- **1** ≤ **M** ≤ **2\*104**
- **Ai = 1**

**Subtask 2: 30 points**

- **1** ≤ **M** ≤ **100**

**Subtask 3: 60 points**

- **1** ≤ **M** ≤ **2\*104**

### Example

<pre><b>Input:</b>
2
11 3
4 3 4
6 3
3 2 1

<b>Output:</b>
2
1


</pre>### Explanation
**Example 1:** We could cut 2 doughnut from any "chain" and use them to connect chains to the one. 
 For example, let's cut it from the first chain. After this we will have chains of sizes 2, 3, 4 and two doughnuts that have been cut. So we could connect the first chain with second and second with third using these two doughnuts./>

**Example 2:** We cut doughnut from the last "chain" and connect the first two chains.

![](https://s3.amazonaws.com/codechef_shared/download/SEPT15/DONUT2.png)

_Image for second example. Yellow doughnut has been cut._
