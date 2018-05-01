---
category_name: hard
problem_code: XETF
problem_name: 'Euler Totient Function Extended'
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
max_timelimit: '4 - 6'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: karanaggarwal
date_added: 21-03-2015
tags:
    - easy
    - inclusn
    - ltime23
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/XETF'
time:
    view_start_date: 1430037000
    submit_start_date: 1430037000
    visible_start_date: 1430037000
    end_date: 1735669800
    current: 1493556901
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME23/mandarin/XETF.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME23/russian/XETF.pdf).

Euler totient function (denoted by **phi(N)**) for a positive integer **N** is defined as number of positive integers less than or equal **N** that are coprime to **N**

Let's generalize this concept of Euler totient function. For positive integer **N** let's write out the integers that are less than or equal to **N** and are coprime to **N**. We'll get a list of integers of the form **A1, A2, ..., AM**, where **M = phi(N)**. Let's denote **EK(N) = A1K + A2K+...+AMK**. This way we obtain something more general version of Euler totient function, in particular, **E0(N) = phi(N)** for every positive integer **N**.

Your task is to calculate **EK(N)**. As answer could be large, print your answer modulo **109+7**

### Input

 The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two space separated integers **N** and **K**.

### Output

For each test case, output a single line containing the answer to the problem i.e. the value of **EK(N)** modulo **109+7**.

### Constraints

- **1** ≤ **T** ≤ **128**

Subtask 1 (7 points):

- **1** ≤ **N** ≤ **104**
- 0 ≤ **K** ≤ **104**

Subtask 2 (10 points):

- **1** ≤ **N** ≤ **1012**
- **K** = 0

Subtask 3 (28 points):

- **1** ≤ **N** ≤ **1012**
- **K** = **1**

Subtask 4 (55 points):

- **1** ≤ **N** ≤ **1012**
- 0 ≤ **K** ≤ **256**

### Example

<pre><b>Input:</b>
2
10 1
7 0

<b>Output:</b>
20
6
</pre>### Explanation

**Example case 1.** The numbers that are coprime to **10** are **1, 3, 7, 9**. Their sum is **20**.

**Example case 2.** **7** is a prime number, so any integer that is less than **7** is coprime to it.
