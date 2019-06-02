---
category_name: medium
problem_code: EQUALMOD
problem_name: 'Modulo Equality'
languages_supported:
    - C
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: wittyceaser
problem_tester: null
date_added: 29-10-2017
tags:
    - acmind17
    - easy
    - prefix
    - wittyceaser
time:
    view_start_date: 1509900600
    submit_start_date: 1509900600
    visible_start_date: 1509900600
    end_date: 1735669800
    current: 1525454464
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You have two arrays **A** and **B**, each containing **N** integers.

Elements of array **B** cannot be modified.

You may perform an arbitrary number of operations (including zero number of operations). In one operation, you can choose one index i (1 ≤ i ≤ **N**) and increment **Ai** by 1. Each index can be chosen any number of times.

Find the minimum number of operations required to modify the array **A** such that for every pair **i, j (1 ≤ i, j ≤ N)**, **(Ai % Bi)** equals **(Aj % Bj)**. Here, % denotes the modulo operator (the remainder after dividing by **Bi**). Note that **0 ≤ (Ai % Bi) i**.

### Input

First line of the input contains an integer **T** denoting the number of testcases. The description of **T** testcases is as follows:

First line of each testcase contains a positive integer **N**, denoting the number of elements in arrays **A** and **B**.

Second line contains **N** space-separated whole numbers **A1**, **A2**, ..., **AN**.

Third line contains **N** space-separated natural numbers **B1**, **B2**, ..., **BN**.

### Output

For each testcase, output a single line containing the minimum number of operations required to modify the array **A** in order to satisfy the required conditions.

### Constraints

- **1** ≤ **T** ≤ **1000**
- **1** ≤ **N** ≤ **5 \* 105**
- 0 ≤ **Ai** ≤ **109**
- **1** ≤ **Bi** ≤ **109**
- Sum of **N** across all testcases in a single file will be ≤ **5 \* 105**

### Example

<pre><b>Input:</b>
2
3
4 2 2
5 3 4
4
2 1 1 2
3 3 3 3

<b>Output:</b>
3
2
</pre>
### Explanation

 **Example case 1.** **A1** can be increased from **4** to **7** in **3 operations** so that:

- A1 % B1 = 2
- A2 % B2 = 2
- A3 % B3 = 2
 
 **Example case 2.** **A2, A3** can **both be increased** from **1** to **2** in **2 operations** total so that:

- A1 % B1 = 2
- A2 % B2 = 2
- A3 % B3 = 2
- A4 % B4 = 2
