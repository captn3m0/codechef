---
category_name: medium
problem_code: SMARKET
problem_name: 'Stable market'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: pkacprzak
problem_tester: null
date_added: 29-03-2017
tags:
    - april17
    - pkacprzak
editorial_url: 'https://discuss.codechef.com/problems/SMARKET'
time:
    view_start_date: 1492421400
    submit_start_date: 1492421400
    visible_start_date: 1492421400
    end_date: 1735669800
    current: 1497284443
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL17/mandarin/SMARKET.pdf), [Russian](http://www.codechef.com/download/translated/APRIL17/russian/SMARKET.pdf) and [Vietnamese](http://www.codechef.com/download/translated/APRIL17/vietnamese/SMARKET.pdf) as well.

Sometimes, the stability of a stock market is at least as important as rapid price changes.

Let a **stable block** be a maximal consecutive block of days with same stock prices.

Moreover, let a **stable block of order K** be a stable block of length **at least K**.

For example, if stock prices for 7 consecutive days are: 20, 10, 10, 7, 7, 7, 10, then there are 4 stable blocks there: \[20\], \[10, 10\], \[7, 7, 7\] and \[10\]. Moreover, there are: - 0 stable blocks of order 4 or higher
- 1 stable block of order 3: \[7, 7, 7\]
- 2 stable block of order 2: \[10, 10\], \[7, 7, 7\]
- 4 stable block of order 1: \[20\], \[10, 10\], \[7, 7, 7\] and \[10\]

Given historical prices of a stock across **N** days, the goal is to answer **Q** customers' questions.

The **i**-th question contains three integers **Li, Ri** and **Ki**. It asks for the number of stable blocks of order **Ki**, if only the stock prices of the days in the range **Li, Ri** are considered.

### Input

- In the first line there is a single integer **T**, denoting the number of test cases to handle. After that the description of **T** test cases follow.
- The first line of each test case contains two space-separated integers **N** and **Q**, denoting respectively, the number of days for which the stock prices are given, and the number of questions to answer.
- The second line contains **N** space-separated integers **A1, A2, ..., AN**, where **Ai** denotes the price of the stock on the **i**-th day.
- **Q** lines follow. In the **i**-th of them there are three space-separated integers **Li, Ri** and **Ki** denoting the **i**-th query.

### Output

For each test case, print answers to all queries in the test case, one per line.

### Constraints

- 1 ≤ **T** ≤ 5
- 1 ≤ **N, Q** ≤ 105
- 1 ≤ **Ai** ≤ 106
- 1 ≤ **Li** ≤ **Ri** ≤ **N**
- 1 ≤ **Ki** ≤ **Ri - Li + 1**
 
### Subtasks

**Subtask #1: (10 points)**

- 1 ≤ **N, Q** ≤ 3000
 
**Subtask #2: (90 points)**

- original constraints

### Example

<pre><b>Input:</b>
2
8 5
20 10 10 10 7 7 7 10
2 6 2
3 6 2
3 6 3
3 8 3
3 8 1
3 2
27 27 27
1 3 1
2 2 1


<b>Output:</b>
2
2
0
1
3
1
1
</pre>
### Explanation

There are two test cases to handle

**Test case #1:**

There are **8** days for which prices are given and **5** queries to handle.

The first query asks for the number of stable blocks of order **2** in range **\[2, 6\]**, which corresponds to prices **10 10 10 7 7**. The answer is **2** because there are two such blocks: **10 10 10** and **7 7**.

The second query asks for the number of stable blocks of order **2** in range **\[3, 6\]**, which corresponds to prices **10 10 7 7**. The answer is **2** because there are two such blocks: **10 10** and **7 7**.

The third query asks for the number of stable blocks of order **3** in range **\[3, 6\]**, which corresponds to prices **10 10 7 7**. The answer is 0 because there is no stable block of order **3** there (maximum order of a stable block is **2**).

The fourth query asks for the number of stable blocks of order **3** in range **\[3, 8\]**, which corresponds to prices **10 10 7 7 7 10**. The answer is **1** because the only stable block of order **3** here is **7 7 7**.

The fifth query asks for the number of stable blocks of order **1** in range **\[3, 8\]**, which corresponds to prices **10 10 7 7 7 10**. The answer is **3** because there are **3** stable blocks of order **1** there: **10 10**, **7 7 7** and **10**.

**Test case #2:**

There are **3** days for which prices are given and **2** queries to handle.

The first query asks for the number of stable blocks of order **1** in range **\[1, 3\]**, which corresponds to prices **27 27 27**. The answer is **1** because the only such block there is **27 27 27**.

The second query asks for the number of stable blocks of order **1** in range **\[2, 2\]**, which corresponds to a single price **27**. The answer is **1** because the only such block there is **27**.
