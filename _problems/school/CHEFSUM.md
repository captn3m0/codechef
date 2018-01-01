---
category_name: school
problem_code: CHEFSUM
problem_name: 'Little Chef and Sums'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: prateekg603
problem_tester: jingbo_adm
date_added: 27-08-2017
tags:
    - cakewalk
    - prateekg603
    - sept17
editorial_url: 'https://discuss.codechef.com/problems/CHEFSUM'
time:
    view_start_date: 1498908900
    submit_start_date: 1498908900
    visible_start_date: 1498908900
    end_date: 1735669800
    current: 1514815982
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/SEPT17/mandarin/CHEFSUM.pdf), [russian](http://www.codechef.com/download/translated/SEPT17/russian/CHEFSUM.pdf) and [vietnamese](http://www.codechef.com/download/translated/SEPT17/vietnamese/CHEFSUM.pdf) as well.

Our little chef is fond of doing additions/sums in his free time. Today, he has an array **A** consisting of **N** positive integers and he will compute prefix and suffix sums over this array.

He first defines two functions **prefixSum(i)** and **suffixSum(i)** for the array as follows. The function **prefixSum(i)** denotes the sum of first **i** numbers of the array. Similarly, he defines **suffixSum(i)** as the sum of last **N - i + 1** numbers of the array.

Little Chef is interested in finding the minimum index **i** for which the value **prefixSum(i) + suffixSum(i)** is the minimum. In other words, first you should minimize the value of **prefixSum(i) + suffixSum(i)**, and then find the least index **i** for which this value is attained.

Since, he is very busy preparing the dishes for the guests, can you help him solve this problem?

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

The first line of each test case contains a single integer **N** denoting the number of integers in the array **A**.

The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the array **A**.

### Output

For each test case, output a single line containing the answer.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N, A\[i\]** ≤ **105**

### Subtasks

- **Subtask #1 : (20 points)**  **1 ≤ N ≤ 100**
- **Subtask #2 : (80 points)**  Original constraints

### Example

<pre><b>Input:</b>
2
3
1 2 3
4
2 1 3 1

<b>Output:</b>
1
2

</pre>### Explanation
**Example case 1.** Let's calculate prefixSum(i) + suffixSum(i) for all indexes **i** in the sample case.

<pre>
prefixSum(1) + suffixSum(1) = 1 + 6 = 7
prefixSum(2) + suffixSum(2) = 3 + 5 = 8
prefixSum(3) + suffixSum(3) = 6 + 3 = 9

</pre>The minimum value of the function is 7, which is attained at index 1, so the answer would be 1.
**Example case 2.** Let's calculate prefixSum(i) + suffixSum(i) for all indexes **i** in the sample case.

<pre>
prefixSum(1) + suffixSum(1) = 2 + 7 = 9
prefixSum(2) + suffixSum(2) = 3 + 5 = 8
prefixSum(3) + suffixSum(3) = 6 + 4 = 10
prefixSum(4) + suffixSum(4) = 7 + 1 = 8

</pre>The minimum value of the function is 8, which is achieved for indices 2 and 4. The minimum of these two indices 2, 4 is index 2. Hence, the answer will be 2.