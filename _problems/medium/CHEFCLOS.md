---
category_name: medium
problem_code: CHEFCLOS
problem_name: 'Will and Closed Set'
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
max_timelimit: '2 - 4'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: pushkarmishra
date_added: 26-07-2016
tags:
    - admin2
    - dp
    - dynamic
    - hard
    - ltime38
editorial_url: 'http://discuss.codechef.com/problems/CHEFCLOS'
time:
    view_start_date: 1469901600
    submit_start_date: 1469901600
    visible_start_date: 1469901600
    end_date: 1735669800
    current: 1493557914
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME38/mandarin/CHEFCLOS.pdf), [Russian](http://www.codechef.com/download/translated/LTIME38/russian/CHEFCLOS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME38/vietnamese/CHEFCLOS.pdf) as well.

![](https://discuss.codechef.com/upfiles/math-prob-goodwill.jpeg)Will Hunting was learning about Greatest Common Divisor (gcd) of two numbers and properties related to it. He came across the concept of a closed set. He learned that a set is said to be closed under some operation iff for any two elements in the set, the result obtained after applying the operation on those two elements is also a part of the set.

Professor Lambeau wants to test Will on this newly learned topic. He comes up with the following challenge for Will. Consider an array **A** of length **N**. The array may or may not be closed under some operation. He wants to add **exactly** **K** elements in the array in the range **\[1, L\]** such that the resulting array is closed under the **gcd** operation. Note that the order in which the elements are going to be added does not matter. Also, an array **B** will be called closed under gcd operation, if for any two indices **i, j**, the element **gcd(Bi, Bj)** is also present in the array.

Will has started thinking about this problem. Can you beat him to the task and compute the number of ways before he does? Note that the answer could be large, so you must report it modulo **109 + 7**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

For each test case, first line consists three space separated integers denoting **N, K, L**.

Second line of each test case, contains **N** space separated integers denoting array **A**.

### Output

For each test case, output a single line containing an integer corresponding to the number of ways of adding elements in the range **\[1, L\]** to make the array closed under gcd operation.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N, Ai, K, L** ≤ **27**
- There exists an **i** such that **Ai** = 1
- Maximum value in the array **A** ≤ L

### Subtasks

**Subtask #1 (40 points), Time limit : 4 secs**- **1** ≤ **N, Ai, K, L ≤** **15**

 **Subtask #2 (40 points), Time limit : 4 secs**- **1** ≤ **N, Ai, K, L ≤** **25**

 **Subtask #3 (20 points), Time limit : 2 secs**- **1** ≤ **N, Ai, K, L ≤** **27**

### Example

<pre><b>Input:</b>
<tt>2
2 1 2
2 1
3 1 6
1 4 6</tt>

<b>Output:</b>
<tt>2
1</tt>
</pre>### Explanation

**In Test 1 :** The array **A = \[2, 1\]**. The array is already closed under gcd operation since gcd(2, 2) = 2, gcd(1, 1) = 1 and gcd(2, 1) = 2. So, the remaining element which needs to be added can be either **1** or **2**. So, answer is **2**.

**In Test 2 :** The array **A = \[1, 4, 6\]**. gcd(1, 1), gcd(1, 4) and gcd(1, 6) = 1 which is present in the array. gcd(4, 6) is 2 which is not present in the array. We have to add only one element in the array and make it closed under gcd operation. So the number to be added can only be **2**. There is only one way of doing that. So, the answer is **1**.
