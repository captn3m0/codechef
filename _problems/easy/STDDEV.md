---
category_name: easy
problem_code: STDDEV
problem_name: 'Obtain Desired Standard Deviation'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 30-10-2017
tags:
    - acmind17
    - ad
    - admin2
    - simple
time:
    view_start_date: 1509900600
    submit_start_date: 1509900600
    visible_start_date: 1509900600
    end_date: 1735669800
    current: 1525198941
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Given two integers **N** and **σ**, find any array **a** with length **N** such that the standard deviation of the elements of the array is equal to **σ**. The standard deviation is given by the following formula: ![](https://codechef_shared.s3.amazonaws.com/download/upload/ACMIND17/sd_compressed.jpg)

For each **1 ≤ i ≤ N**, **ai** may be any real number with **|ai| ≤ 108**.

If there is more than one possible answer, you may output any one of them. If there is no such array, output -1 instead.

Please note that the denominator only contains **N**. (In the usual formula for standard deviation, **N-1** is used. That's not the definition we're using here.)

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of the test cases follows.

The first and only line of each test case contains two space separated integers **N, σ**.

### Output

For each test case, output a single line containing **N** space-separated real numbers denoting the elements of the array **a**.

If it is not possible to construct such an array, output -1 instead. If there is more than one possible solution, you may output any one.

Your answer will be considered correct if the standard deviation of the printed array doesn't differ from σ by more than 10-2 in absolute value.

### Constraints

- **1 ≤ T ≤ 105**
- **1 ≤ N ≤ 105**
- **0 ≤ σ ≤ 105**
- Sum of **N** over all test cases won't exceed **106**

### Example

<pre>
<b>Input</b>
3
2 2
3 3
4 0

<b>Output</b>
2 6
3.5 2 8.979967
3 3 3 3
</pre>