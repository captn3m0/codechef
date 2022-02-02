---
category_name: easy
problem_code: LEDIV
problem_name: 'Little Elephant and Divisors'
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
problem_author: witua
problem_tester: null
date_added: 20-10-2012
tags:
    - cook28
    - simple
    - simple
    - witua
editorial_url: 'http://discuss.codechef.com/problems/LEDIV'
time:
    view_start_date: 1353262825
    submit_start_date: 1353262825
    visible_start_date: 1353263400
    end_date: 1735669800
    current: 1493558162
layout: problem
---
All submissions for this problem are available.The Little Elephant from the Zoo of Lviv has an array **A** that consists of **N** positive integers. Let **A\[i\]** be the **i**-th number in this array (**i = 1, 2, ..., N**).

Find the minimal number **x &gt; 1** such that **x** is a divisor of all integers from array **A**. More formally, this **x** should satisfy the following relations:

**A\[1\] mod x = 0**, **A\[2\] mod x = 0**, ..., **A\[N\] mod x = 0**,

where **mod** stands for the modulo operation. For example,  **8 mod 3 = 2**,  **2 mod 2 = 0**, **100 mod 5 = 0** and so on. If such number does not exist, output **-1**.

### Input

The first line of the input contains a single integer **T**, the number of test cases. **T** test cases follow. The first line of each test case contains a single integer **N**, the size of the array **A** for the corresponding test case. The second line contains **N** space separated integers **A\[1\]**, **A\[2\]**, ..., **A\[N\]**.

### Output

For each test case output a single line containing the answer for the corresponding test case.

### Constraints

**1** ≤ **T** ≤ **100000**

**1** ≤ **N** ≤ **100000**

The sum of values of **N** in each test file does not exceed **100000**

**1** ≤ **A\[i\]** ≤ **100000**

### Example

<pre>
<b>Input:</b>
2
3
2 4 8
3
4 7 5

<b>Output:</b>
2
-1

</pre>
### Explanation

**Case 1.** Clearly 2 is a divisor of each of the numbers 2, 4 and 8. Since 2 is the least number greater than 1 then it is the answer.

**Case 2.** Let's perform check for several first values of **x**.

**x****4 mod x****7 mod x****5 mod x**20113112403154206415740584759475As we see each number up to 9 does not divide all of the numbers in the array. Clearly all larger numbers also will fail to do this. So there is no such number **x &gt; 1** and the answer is **-1**.
