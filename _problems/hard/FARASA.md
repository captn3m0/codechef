---
category_name: hard
problem_code: FARASA
problem_name: 'Furik and Rubik and Sub Array'
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
max_timelimit: '2 - 4'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: gamabunta
date_added: 7-05-2013
tags:
    - fft
    - hard
    - july13
    - maths
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/FARASA'
time:
    view_start_date: 1373880600
    submit_start_date: 1373880600
    visible_start_date: 1373880600
    end_date: 1735669800
    current: 1493556704
layout: problem
---
All submissions for this problem are available.Furik and Rubik are playing the game **Sub array**. This game is played over an **array of integers**, consisting of **N** elements.

In this game, Furik decides an integer that is equal to **sum** of some **sub-array** of this array and Rubik wants to guess this number.

But, since Rubik is a busy man, he wants to know how many times in the worst case he will have to try to guess this number. You may assume he acts optimally, i.e. he doesn't call the same number twice, and calls only those numbers, that might have been decided by Furik, meaning, the sum of some or the other **sub-array**.

Let's call the array **b**, sub-array of the array **a**, if there are numbers **l** and **r** such, that **b1 = al AND b2 = al+1 AND ... b|b| = ar**, where **|b|** is the length of the array **b**.

### Input

The first line contains the positive integer **N**. The second line contains **N** positive integers, which are the elements of the array.

### Output

Output a single line containing the answer to the problem.

### Constraints

**Test Files with Time Limit set to 2 seconds**
**1 ≤ N \* S ≤ 1010**, where **S** is the sum of the elements in the array.

**Test Files with Time Limit set to 4 seconds**
**1 ≤ N \* S ≤ 4 \* 1010**

### Sample

<pre>
<b>Input</b>
3
1 2 3

<b>Output</b>
4

<b>Input</b>
9
6 1 7 3 7 1 8 5 7

<b>Output</b>
28


</pre>### Explanation
**Test Case 1:** Furik can decide one of the following numbers: 1, 2, 3, 5, 6. For example, let us assume Furik has decided 3. In the worst case, Rubik may call out 4 numbers, since there are only 5 such numbers.
