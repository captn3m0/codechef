---
category_name: medium
problem_code: DIVPRO
problem_name: 'Dividing Products'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: viv001
problem_tester: anton_lunyov
date_added: 28-08-2012
tags:
    - dynamic
    - jan13
    - medium
    - viv001
editorial_url: 'http://discuss.codechef.com/problems/DIVPRO'
time:
    view_start_date: 1358247191
    submit_start_date: 1358247191
    visible_start_date: 1358242651
    end_date: 1735669800
    current: 1493557633
layout: problem
---
All submissions for this problem are available.Dr. Bobo, while working in his laboratory, thought of an interesting problem. He has spent considerable time trying to find a solution but in vain. So he turns to you to find the solution using your special powers of coding.

For a positive integer **N**, he defines a function **DIVPRO(N**) as follows.

- Let **N** be **L**-digit number and **ni** is the **i**-th digit in the decimal representation of **N** (**i** = **1**, **2**, ..., **L**). So we can write **N** = **n1n2**...**nL**.
- Then **DIVPRO(N)** = **n1** / **n2** \* **n3** / **n4 \* ...**  (i.e., we alternate division and multiplication of digits).
- The result is calculated from left to right.
- Division here is performed in standard mathematical way, so the result of the division can be non-integer number.
- If division by 0 occurs at any point for a given **N**, then **DIVPRO(N)** is undefined in such a case.

Let's consider some examples:

- **DIVPRO(1)** = **1**. In fact, **DIVPRO(N)** = **N** for any 1-digit number **N**.
- **DIVPRO(42)** = **4** / **2** = **2** is an integer.
- **DIVPRO(123)** = **1** / **2** \* **3** = **3** / **2** = **1.5** is non-integer.
- **DIVPRO(370)** = **3** / **7** \* 0 = 0, while intermediate result was **3** / **7** which is non-integer.
- **DIVPRO(3465009)** = **3** / **4** \* **6** / **5** \* 0 / 0 \* **9** is undefined since we have division by zero.

Now Dr. Bobo would like to know how many **L**-digit numbers have their **DIVPRO** value equal to **V** and he wants your help. Since this number can be quite large output it modulo **232**, that is, you need to find the remainder of the division of the answer by **232**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. The only line of each test case contains two space-separated integers **L** and **V**.

### Output

 For each test case, output a single line containing the number of **L**-digit positive integers, whose **DIVPRO** value is **V**. As was mentioned above you should print this number modulo **232**.

### Constraints

- **1** ≤ **T** ≤ **320000** (**320** thousands)
- **1** ≤ **L** ≤ **36**
- 0 ≤ **V** &lt; **1018**

### Example

<pre>
<b>Input:</b>
4
2 0
3 27
5 24
10 45

<b>Output:</b>
0
5
486
2349595
</pre>
###  Explanation

**Example case 1.** No 2-digit number has **DIVPRO** value of 0 (as leading zeros are not allowed). Hence the answer is zero.

**Example case 2.** The only 3-digit numbers having **DIVPRO** value of **27** are **319**, **629**, **913**, **926** and **939**. So there are 5 such numbers in all.

### Warning!

The input file size could reach 7MB so be sure you are using fast I/O method.
