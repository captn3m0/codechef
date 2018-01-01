---
category_name: hard
problem_code: CIELKARA
problem_name: 'Ciel and Karaoke'
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
max_timelimit: '2.013'
source_sizelimit: '50000'
problem_author: laycurse
problem_tester: anton_lunyov
date_added: 2-01-2013
tags:
    - cook30
    - laycurse
    - math
    - medium
editorial_url: 'http://discuss.codechef.com/problems/CIELKARA'
time:
    view_start_date: 1358709987
    submit_start_date: 1358709987
    visible_start_date: 1358709858
    end_date: 1735669800
    current: 1493556958
layout: problem
---
All submissions for this problem are available.You need to find the distance from the given piecewise-constant function to the set of all functions, satisfying Lipschitz condition with the constant **K**, in the space **L1(−∞, +∞)**. If you understand nothing here then read the problem statement below :P

Chef Ciel and her friends go to _karaoke_ after the New Year's party. In karaoke, they sing songs, and moreover, recent karaoke machines can score their performance. To get a high score, one of the most important things is to sing with correct pitches.

The correct pitch at time **t** for some song is represented as **f(t)**, where **f(t)** is a piecewise-constant function. In this problem, let us consider the infinitely long time **−∞** < **t** < **+∞** for simplicity. Let **N−1** integers **A1** < **A2** < ... < **AN−1** denote the time moments when the correct pitch is changed. That is,

- **f(t)** = **B0**, for **−∞** < **t** < **A1**,
- **f(t)** = **Bk**, for **Ak** ≤ **t** < **Ak+1** (**1** ≤ **k** ≤ **N−2**),
- **f(t)** = **BN−1**, for **AN−1** ≤ **t** < **+∞**.

On the other hand, Ciel cannot change her pitch instantly. So Ciel's pitch **g(t)** must satisfy the condition **|g(x) − g(y)| ≤ K |x − y|** for all real **x** and **y**. In particular **g(t)** is a continuous function and **|g'(t)|** ≤ **K** for all **t** where **g'(t)** exists (**g'(t)** denotes the derivative of **g(t)**).

The score assigned to Ciel by the karaoke machine is the value of the integral of **|f(t) − g(t)|** over the interval **(−∞, +∞**). Your task is to calculate the minimum value of this integral over all possible functions **g(t)** that satisfy the above condition.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

Each test case consists of exactly 3 lines. The first line of each test case contains two space separated integers **N** and **K**. The second line contains **N−1** space separated integers **A1, A2, ..., AN−1**. Finally, the third line contains **N** space separated integers **B0, B1, ..., BN−1**.

### Output

For each test case, output a single line containing the minimum value of the integral mentioned in the problem statement. The output must have an absolute or relative error at most **0.000001 (10−6)**. Please, note that your output should not have more than **1000** digits after the decimal point, otherwise you may (or may not) get _wrong answer_ or _runtime error (SIGXFSZ)_.

### Constraints

- **1** ≤ **T** ≤ **250**
- **2** ≤ **N** ≤ **8**
- **1** ≤ **K** ≤ **4**
- ≤ **A1** < **A2** < ... < **AN−1** ≤ **20130120**
- ≤ **B0**, **B1**, ..., **BN−1** ≤ **20130120**
- It can occur that **Bi−1** = **Bi** for some **i = 1, 2, ..., N−1**
- The sum of **N3** in one test file does not exceed **2013**

### Example

<pre>
<b>Input:</b>
3
2 1
1000
900 1000
2 2
1000
900 1000
3 1
500 1200
20 60 30

<b>Output:</b>
2500.0000000000
1250.0000000000
625.0000000000

</pre>### Explanation
The following figure corresponds to the example case 1. Here the bold red line denotes the correct pitch **f(t)** and the blue line denotes the optimal Ciel's pitch **g(t)**. The answer is the area of the green region.

![](http://www.codechef.com/download/CIELKARA.png)
