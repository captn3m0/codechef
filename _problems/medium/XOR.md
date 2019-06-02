---
category_name: medium
problem_code: XOR
problem_name: 'Xor it'
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
problem_author: xcwgf666
problem_tester: anton_lunyov
date_added: 4-02-2012
tags:
    - march12
    - medium
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/XOR'
time:
    view_start_date: 1331461067
    submit_start_date: 1331461067
    visible_start_date: 1331458200
    end_date: 1735669800
    current: 1493557957
layout: problem
---
All submissions for this problem are available.Chef has given you a sequence **A\[1\], A\[2\], ..., A\[N\]** composed of **N** nonnegative integer numbers. Then, for each pair (**i**; **j**) such that **1 <= i < j <= N**, we have written a number that equals to **A\[i\] xor A\[j\]** (xor is exclusive or, "xor" in Pascal, "^" in C++). Thus, we have obtained **N\*(N-1)/2** numbers. Your task is to find **K** minimal numbers among them.

### Input

The first line of the input contains two space separated integers **N** and **K**. Each of the next **N** lines contains one integer, **i**th line contains number **A\[i\]**.

### Output

In the only line of output print space separated sequence of **K** numbers, the answer to the problem. Numbers should be in non-decreasing order.

### Constraints

 2 ≤ **N** ≤ 100000

 1 ≤ **K** ≤ **min{250000, N\*(N-1)/2}**

 0 ≤ **A\[i\]** < 231

### Example

<pre>
<b>Input:</b>
4 5
1
1
3
4

<b>Output:</b>
0 2 2 5 5
</pre>
### Explanation

In the sample input we have **4** numbers: **1, 1, 3, 4**. Therefore, there are **(4\*3)/2 = 6** pairwise XOR's. These XOR's are:
**1** xor **1** = 0 (**A\[1\]** xor **A\[2\]**)
**1** xor **3** = **2** (**A\[1\]** xor **A\[3\]**)
**1** xor **4** = **5** (**A\[1\]** xor **A\[4\]**)
**1** xor **3** = **2** (**A\[2\]** xor **A\[3\]**)
**1** xor **4** = **5** (**A\[2\]** xor **A\[4\]**)
**3** xor **4** = **7** (**A\[3\]** xor **A\[4\]**)
If we sort these numbers we will obtain: **0, 2, 2, 5, 5, 7**. The first **5** minimal numbers are: **0, 2, 2, 5, 5**.
