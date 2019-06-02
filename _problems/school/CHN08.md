---
category_name: school
problem_code: CHN08
problem_name: 'Crazy Malvika discovers Crazy Fibonacci function'
languages_supported:
    - C
    - CPP14
    - JAVA
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 17-01-2016
tags:
    - acm15chn
    - admin2
    - modulo
    - recurrence
time:
    view_start_date: 1453546800
    submit_start_date: 1453546800
    visible_start_date: 1453546800
    end_date: 1735669800
    current: 1492506692
layout: problem
---
All submissions for this problem are available.Malvika was getting bored of the usual Fibonacci problems, and decided to add a little twist to it. She defined a new function **f()** with the following properties:

- She'll give you two integers, **A** and **B**. **f(1)** is defined to be **A** and **f(2)** is **B**.
- And for all integers **x ≥ 2, f(x) = f(x-1) + f(x+1)**.

She'll give an integer **N**, and you have to find out what **f(N)** is. Output the answers modulo **109+7**.

### Input

- The first line of input contains a single integer **T** denoting number of test cases.
- The only line of each test case contains three integers: **A**, **B** and **N**, denoting **f(1)**, **f(2)** and the query.

### Output

- For each test case, output a line which contains a single integer, corresponding to **f(N)** for the given input.

### Constraints

- 1 ≤ **T** ≤ **105**
- **-109** ≤ **A** , **B** ≤ **109**
- 1 ≤ **N** ≤ **109**

### Example

<pre><b>Input:</b>
2
10 17 3
23 17 3


<b>Output:</b>
7
1000000001
</pre>
### Explanation

In the first test case, **f(3)** = 7, and so that is the output.

In the second test case, **f(3)** = -6 and the answer modulo **109+7** is 1000000001.
