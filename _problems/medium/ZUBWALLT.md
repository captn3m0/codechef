---
category_name: medium
problem_code: ZUBWALLT
problem_name: 'Organize The Wallet'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
max_timelimit: '7'
source_sizelimit: '50000'
problem_author: zubaerkh
problem_tester: null
date_added: 8-11-2017
tags:
    - dp
    - gwr17rol
    - medium
    - zubaerkh
time:
    view_start_date: 1516482000
    submit_start_date: 1516482000
    visible_start_date: 1516482000
    end_date: 1735669800
    current: 1525454402
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Ranju has many currency notes in his wallet. There are notes of denominations **10, 20, 50, 100, 200, 500**, and **2000** rupees in his wallet right now, but the notes are all messed up. He wants to organize his wallet so that all the notes of each denomination are together. **The notes don't necessarily need to be in sorted order.**

In each step, Ranju can take a note and insert this note at any place among the remaining notes. Please determine the minimum number of steps he requires to achieve his goal.

![](https://codechef_shared.s3.amazonaws.com/download/upload/ACM17GWR/ZUBWALLT.png)

### Input

The first line of the input is the number of test cases, **T**. Description of each test case is given below.

The first line of each testcase contains a single integer, **N**, the number of notes in the wallet.

The next line contains **N** integers: **A1, A2, A3, ... , AN** which represent the notes in the wallet at the initial state.

### Output

For each test case, print the minimum number of steps required to organize the wallet, in a new line.

### Constraints

- **1** ≤ **T** ≤  **5**
- **1** ≤ **N** ≤  **105**
- Each of **Ai** will be from the set **{10, 20, 50, 100, 200, 500, 2000}**

### Example

<pre><b>Input:</b>
<tt>2
6
500 500 100 200 200 100
9
100 200 200 500 100 100 500 100 100
</tt>
<b>Output:</b>
<tt>1
2
</tt>
</pre>
### Explanation

**Testcase 1**: We can move the last 100 rupee note and insert it to the right of 1st 100 rupee note. The result would be 500 500 100 100 200 200.

**Testcase 2**: One possible way would be the following:

- In the first step, we can move the first note, which has denomination 100 next to 7th note, which has denomination 500. The result will be : 200 200 500 100 100 500 100 100 100.
- In the second step, we can move the 6th note, which has denomination 500 to the right of the 3rd note, which has denomination 500. The result will be 200 200 500 500 100 100 100 100 100
