---
category_name: hard
problem_code: XORTREEH
problem_name: 'Chef and Horcrux'
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
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: adkroxx
problem_tester: alex_2oo8
date_added: 23-08-2017
tags:
    - adkroxx
    - fast
    - fastmodexp
    - fft
    - hard
    - ntt
    - oct17
editorial_url: 'https://discuss.codechef.com/problems/XORTREEH'
time:
    view_start_date: 1508146200
    submit_start_date: 1508146200
    visible_start_date: 1508146200
    end_date: 1735669800
    current: 1514816847
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/OCT17/mandarin/XORTREEH.pdf), [russian](http://www.codechef.com/download/translated/OCT17/russian/XORTREEH.pdf) and [vietnamese](http://www.codechef.com/download/translated/OCT17/vietnamese/XORTREEH.pdf) as well.

Once again Harry is out there with his friends Ron and Hermione looking out for Horcruxes. They found out that one of the Horcrux is located at The Lestrange Vault. But You-Know-Who has locked the vault with a dark spell.

Fortunately, the password to the vault can be found out by solving a problem. But they were not able to solve the problem and hence need help from Chef. Since Chef is quite busy, he has delegated this task to you.

You are given an array of **N** elements. [**MEX**](https://en.wikipedia.org/wiki/Mex_(mathematics)) of a set is defined as the minimum non-negative integer that doesn't exist in it. For example, the MEX of the set {0, 2, 4} is 1 and the MEX of the set {1, 2, 3} is 0. Note that the MEX of empty set will be 0.

Similar to [Expected value](https://en.wikipedia.org/wiki/Expected_value), let's define _Cheftated value_, **C\[Y\]** of a random variable **Y** as follows:

![](https://discuss.codechef.com/upfiles/XORTREEH_img1.jpeg)where **Y** is a random variable with a finite number of outcomes **y1, y2, ..... , ya** occurring with probabilities **p1, p2, ..... , pa**. Take **00 = 1**. You are given an array **A** consisting of **N** non-negative integers. Your task is to calculate the cheftated value of base **K** xor sum of MEX values of **X** randomly selected subsequences( **repetitions allowed**) of A.

Cheftated value can always be represented as an irreducible fraction **P/Q** such that **gcd(Q, 330301441) = 1**, i.e. **Q-1** ([multiplicative inverse](https://en.wikipedia.org/wiki/Modular_multiplicative_inverse)) modulo **330301441** exists. You have to print the value **P \* Q-1** modulo **330301441**. Please see the sample explanation for more details.

Also, xor-sum in base **K** (xork) can be perfomed by representing the numbers in base **K** and [adding each digit in base K](https://en.wikipedia.org/wiki/Addition#Addition_in_other_bases)( **without carrying forward**), e.g. xorsum of 6 and 9 in base 5 is equal to **115 xor5 145 = 205**, i.e. the number **10**.

### Input

First line of the input contains an integer **T** denoting number of test cases.

First line of each test case contains three space separated integers **N**, **K** and **X**.

Second line of each test case contains **N** space separated integers, **i**-th of which is **Ai** denoting the ith element of the array.

### Output

For each test case, output a line containing single integer representing the value of **P\*Q-1** modulo **330301441**.

### Constraints

- **1** ≤ **T** ≤ **5**
- **1** ≤ **N** ≤ **105**
- **2** ≤ **K** ≤ **10**
- **2** ≤ **X** ≤ **1018**
- ≤ **Ai** ≤ **105**

### Subtasks

- **Subtask #1** (15 points) : **K** ≤ 3
- **Subtask #2** (15 points) : **N** ≤ 103
- **Subtask #3** (70 points) : Original constraints

### Example

<pre>
<b>Input:</b>
2
3 2 2
1 0 2
4 4 4
4 0 1 1

<b>Output:</b>
87392358
88861416

</pre>### Explanation
**Example case 1:** Let's name the sub-sequences as A = \[\], B = \[1\], C = \[0\], D = \[2\], E = \[1, 0\], F = \[1, 2\], G = \[0, 2\], H = \[1, 0, 2\].

Possible outcome of xor values after selecting two sub-sequences (repetitions allowed):

- 0 when you select (two from (A, B, D, F)) or (two from (C, G)) or (two from (E)) or (two from (H)) making it 22 ways.
- 1 when you select (one from (A, B, D, F) and one from (C, G)) or (one from (E) and one from (H)) making it 18 ways.
- 2 when you select (one from (A, B, D, F) and one from (E)) or (one from (H) and one from (C, G)) making it 12 ways.
- 3 when you select (one from (A, B, D, F) and one from (H)) or (one from (E) and one from (C, G)) making it 12 ways.

Cheftated value = 02\*0 \* (22/64)3\*0 + 12\*1 \* (18/64)3\*1 + 22\*2 \* (12/64)3\*2 + 32\*3 \* (12/64)3\*3 = 70310425195/68719476736.

Answer to print = 70310425195 \* 68719476736-1 mod 330301441 = **87392358**
