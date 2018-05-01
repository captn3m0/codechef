---
category_name: hard
problem_code: QPOLYSUM
problem_name: 'Quasi-Polynomial Sum'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: anton_lunyov
problem_tester: laycurse
date_added: 29-10-2012
tags:
    - anton_lunyov
    - dec12
    - hard
    - math
editorial_url: 'http://discuss.codechef.com/problems/QPOLYSUM'
time:
    view_start_date: 1355220923
    submit_start_date: 1355220923
    visible_start_date: 1355218200
    end_date: 1735669800
    current: 1493556801
layout: problem
---
All submissions for this problem are available.You are given a polynomial **P(X) = CD \* XD + ... + C1 \* X + C0** with integer coefficients **C0, C1, ..., CD**. You are also given a non-negative integer **Q** and positive integers **M** and **N**. Your task is to find the following sum

 **(P(0) \* Q0 + P(1) \* Q1 + ... + P(N − 1) \* QN − 1) mod M**.

Here **A mod B** means the remainder of the division of **A** by **B**.

Usually polynomials are given by the sequence of their coefficients. However, in this problem you will be given the sequence **A0, A1, ..., AD**, where **Ai = P(i) mod M**, as an input. One can prove that these values are enough to restore the value of **P(K) mod M** for any integer **K**. Therefore, the value of the above sum is uniquely determined by the values **M, Q, N, D, A0, A1, ..., AD**.

The function of the form **P(X) \* QX** sometimes is called _quasi-polynomial_, hence the title of the problem.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. The first line of each test case contains four space-separated integers **M, Q, N, D**. The second line contains **D + 1** space-separated integers  **A0, A1, ..., AD**.

### Output

For each test case, output a single line containing the value of the corresponding sum.

### Constraints

- **1** ≤ **T** ≤ **5000**
- **1** < **M** < **1018**
- 0 ≤ **Q** < **M**
- **1** ≤ **N** < **10100000**
- 0 ≤ **D** < **20000**
- 0 ≤ **Ai** < **M** for **i = 0, 1, ..., D**
- The sum of **D + 1** over each input file does not exceed **20000**.
- The overall number of digits in all numbers **N** in each input file does not exceed **105**.
- ****M** is not divisible by any number from **2** to **D + 14**, inclusive.**
- It is guaranteed that there exists a polynomial **P(X)** of degree at most **D** with integer coefficients such that **Ai = P(i) mod M** for **i = 0, 1, ..., D**.

### Example

<pre>
<b>Input:</b>
2
101 2 5 0
1
289 1 6 2
1 4 9

<b>Output:</b>
31
91
</pre>### Explanation

**Example case 1.** We have **M = 101, Q = 2, N = 5, D = 0** and **P(0) mod M = 1**. Therefore, **P(X) = C0** and **P(0) mod 101 = 1**. Hence,  **C0 mod 101 = 1**. So we can take, for example, **C0 = 1**. Then the corresponding sum takes the form of **(P(0) \* Q0 + P(1) \* Q1 + ... + P(N − 1) \* QN − 1) mod M = (1 \* 20 + 1 \* 21 + 1 \* 22 + 1 \* 23 + 1 \* 24) mod 101 = (1 + 2 + 4 + 8 + 16) mod 101 = 31 mod 101 = 31.** Note, that the polynomial **P(X)** is not unique. We can take, for example, **C0 = 102** or **C0 = 2021**. However, the same will be always the same.

**Example case 2.** We have **M = 289, Q = 1, N = 6, D = 2** and **P(0) mod M = 1, P(1) mod M = 4, P(2) mod M = 9**. It is easy to see that we can take **P(X) = (X + 1)2**. Then the corresponding sum takes the form of **(12 + 22 + 32 + 42 + 52 + 62) mod 289 = (1 + 4 + 9 + 16 + 25 + 36) mod 289 = 91.** Note that the polynomial **P(X)** again is not unique. In fact, the set of all polynomials of degree at most 2 that satisfy the conditions **P(0) mod 289 = 1, P(1) mod 289 = 4, P(2) mod 289 = 9** has the form of **{(X + 1)2 + 289 \* (C2 \* X2 + C1 \* X + C0) | C0, C1, C2** are integers}.
