---
category_name: easy
problem_code: LRQUER
problem_name: 'L-R queries'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - CAML
    - CLOJ
    - CLPS
    - COB
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
max_timelimit: '1 - 4'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: alex_2oo8
date_added: 20-11-2017
tags:
    - easy
    - ltime54
    - mgch
    - segment
editorial_url: 'https://discuss.codechef.com/problems/LRQUER'
time:
    view_start_date: 1511629200
    submit_start_date: 1511629200
    visible_start_date: 1511629200
    end_date: 1735669800
    current: 1514816987
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME54/mandarin/LRQUER.pdf), [Russian](http://www.codechef.com/download/translated/LTIME54/russian/LRQUER.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME54/vietnamese/LRQUER.pdf) as well.

Chef has an array **A** of size **N**. His friend Chuwi playing with this array in a next way: he chooses a continuous subarray **A**\[**L**..**R**\] and finds the maximum of (**A**\[**M**\] - **A**\[**L**\]) \* (**A**\[**R**\] - **A**\[**M**\]) over all values of **M** where **L** ≤ **M** ≤ **R**. Chef wants to hopple Chuwi and changes elements of his array sometimes. Please help Chuwi to solve this easy problem. ### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. The first line of each test case contains two positive integers **N** denoting the number of elements in Chef's array and **Q** denoting the number of operations performed by Chef and Chuwi. The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the Chef's array. Next **Q** contains three integers - **type** = 1 **L** **R** denoting that Chuwi takes subarray **A**\[**L**..**R**\] and finds the maximum of his function. **type** = 2 **X** **Y** denoting that Chef changes element **A**\[**X**\] by **Y**.

### Output

For every Chuwi's performed operation output the maximal value in a single line. ### Constraints

- **1** ≤ **T** ≤ **1000**
- **1** ≤ **N**, **Q** ≤ **105**
- **1** ≤ **Ai**, **Y** ≤ **109**
- **1** ≤ **L** ≤ **R** ≤ **N**
- **1** ≤ **X** ≤ **N**
- **1** ≤ **type** ≤ **2**
- Sum of **N** over all test cases ≤ **2\*105**
- Sum of **Q** over all test cases ≤ **2\*105**

### Subtasks

- **Subtask #1: (20 points)**  sum of **N** over all test cases ≤ **5\*103** and sum of **Q** over all test cases ≤ **5\*103** and **TL** = **1** sec
- **Subtask #2: (30 points)**  **1** ≤ **Ai**, **Y** ≤ **102**
- **Subtask #3: (50 points)**  Original constraints

### Example

<pre><b>Input:</b>
1
4 3
2 1 4 3
1 1 4
2 2 3
1 1 3

<b>Output:</b>
0
1

</pre>### Explanation

**Example case 1.** For Chuwi's subarray \[2, 1, 4, 3\] there are 4 possible values of (**A**\[**M**\] - **A**\[**L**\]) \* (**A**\[**R**\] - **A**\[**M**\]) - {0, -2, -2, 0} correspondingly, maximal value will be 0. After the second operation array will be \[2, 3, 4, 3\]. And for Chuwi's subarray \[2, 3, 4\] possible 3 values - {0, 1, 0}, hence answer is 1.
