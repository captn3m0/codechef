---
category_name: easy
problem_code: SUMQ
problem_name: Triplets
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
problem_author: vipsharmavip
problem_tester: null
date_added: 17-05-2017
tags:
    - vipsharmavip
time:
    view_start_date: 1497259800
    submit_start_date: 1497259800
    visible_start_date: 1497259800
    end_date: 1735669800
    current: 1497284413
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JUNE17/mandarin/SUMQ.pdf), [Russian](http://www.codechef.com/download/translated/JUNE17/russian/SUMQ.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JUNE17/vietnamese/SUMQ.pdf) as well.

Given a triplet of integers (X , Y , Z), such that X ≤ Y and Y ≥ Z, we define f(X , Y , Z) to be (X + Y) \* (Y + Z). If either X > Y or Y < Z, or both, then f(X , Y , Z) is defined to be 0.

You are provided three arrays  **A , B** and **C**  of any length (their lengths may or may not be equal).

Your task is to find the sum of f(X , Y , Z) over all triplets (X, Y , Z) where  **X, Y** and **Z**  belong to  **A**, **B** and **C** respectively.

 Output your sum for each test case modulo **1000000007**.

### Input

- The first line contains a single integer, **T**, which is the number of test cases. The description of each testcase follows:
- The first line of each testcase contains **3** integers: **p, q** and **r**. These denote the lengths of **A**,**B** and **C** respectively.
- The second line contains **p** integers, which are the elements of **A**
- The third line contains **q** integers, which are the elements of **B**
- The fourth line contains **r** integers, which are the elements of **C**

### Output

 Output the required sum modulo  **1000000007**  for each test case in a new line.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **p**, **q**, **r** ≤ 100000
- 1 ≤ every array element ≤ 1000000000

### Subtasks 

- Subtask #1 (30 points): 1 ≤ **p**,**q**,**r** ≤ 100
- Subtask #2 (70 points): 1 ≤ **p**,**q**,**r** ≤ 100000

### Example : 

<pre><b>Input:</b>
1 
3 1 3
1 2 3
5
4 5 6

<b>Output:</b>
399

</pre>### Explanation: 
 As there is only one choice for Y which equals to 5, to get a non-zero function value,we can choose any element for X from the set { 1 , 2 , 3 } and for Z from the set { 4 , 5 }

So triplets which give non-zero function values are:

 { 1 , 5 , 4 } : ( 1 + 5 ) \* ( 5 + 4 ) = 54

{ 1 , 5 , 5 } : ( 1 + 5 ) \* ( 5 + 5 ) = 60

{ 2 , 5 , 4 } : ( 2 + 5 ) \* ( 5 + 4 ) = 63

{ 2 , 5 , 5 } : ( 2 + 5 ) \* ( 5 + 5 ) = 70

{ 3 , 5 , 4 } : ( 3 + 5 ) \* ( 5 + 4 ) = 72

{ 3 , 5 , 5 } : ( 3 + 5 ) \* ( 5 + 5 ) = 80

Final answer : 54 + 60 + 63 + 70 + 72 + 80 = 399
