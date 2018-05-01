---
category_name: hard
problem_code: MIXFLVOR
problem_name: 'Mixing flavors'
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
problem_author: kingofnumbers
problem_tester: errichto
date_added: 31-01-2017
tags:
    - cook79
    - gauss
    - kingofnumbers
    - medium
    - two
editorial_url: 'https://discuss.codechef.com/problems/MIXFLVOR'
time:
    view_start_date: 1487529000
    submit_start_date: 1487529000
    visible_start_date: 1487529000
    end_date: 1735669800
    current: 1493556779
layout: problem
---
All submissions for this problem are available.### Please refer to sample test in English version of statement.
Except for that, you can read problem statement in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK79/mandarin/MIXFLVOR.pdf), [Russian](http://www.codechef.com/download/translated/COOK79/russian/MIXFLVOR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK79/vietnamese/MIXFLVOR.pdf).

There are **N** ice-creams placed in a row in a shop, where the **i**-th has cost **C\[i\]** and flavor **F\[i\]**. Chef wants to buy some **consecutive segment** of ice-creams so that their total cost doesn't exceed his budget **K**, and he can mix some subset of bought ice-creams to make a new ice-cream with maximum possible flavor.

Mixing m ice-creams of flavors **A1, A2, .., Am** will result in an ice-cream of flavor equal to **A1 ^ A2 ^ ... ^ Am** where **^** is the [xor](https://en.wikipedia.org/wiki/Bitwise_operation#XOR) operation.

What is maximum possible flavor that Chef can get? It's guaranteed that at least one ice-cream has cost that doesn't exceed Chef's budget.

### Input

First line contains an integer **T**, which is the number of test-cases.

The first line of each test-case contains two integers: **N** and **K**.

Each of the following **N** lines contains two integers **C\[i\]** and **F\[i\]**.

### Output

Output the answer of each test-case in new line, the maximum flavor that the Chef can get.

### Constraints

- **1** ≤ **T** ≤ **10,000**
- **1** ≤ **N** ≤ **100,000**
- sum of **N** in all test-cases will not exceed **100,000**
- **1** ≤ **K** ≤ **10^14**
- **1** ≤ **F\[i\]** ≤ **10^9**
- **1** ≤ **C\[i\]** ≤ **10^9**
- **C\[i\]** ≤ **K** for at least one **i**

### Example

<pre><b>Input:</b>
2
5 15
2 4
7 1
5 9
15 6
3 12
3 1000
123 8
99999 1
80 7

<b>Output:</b>
13
8
</pre>### Explanation

**Test case 1:** The binary representations of the 5 flavors, in order, are: (_0100, 0001, 1001, 0110, 1100_), and the corresponding prices are (2,7,5,15,3).

If Chef buys only the 5th ice-cream with cost 3 and flavor 12. But if Chef buys the first 3 ice-creams, his total cost is 2+7+5 = 14, which is within his budget of 15, and hence valid. Now, from these three bought ice-creams, he can choose to mix just the first and third, and get a flavor of _0100^1001_ = _1101_, which is 13. You can verify that this is the best that he can do.

**Test case 2:** Chef can afford the first or the last ice-cream. He could afford them both but he must buy a consecutive segment of ice-creams while the cost of the second ice-cream is beyond his budget.

It's optimal to buy the first ice-cream only and use its flavor only, what gives us the answer 8.
