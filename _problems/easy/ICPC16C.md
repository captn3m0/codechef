---
category_name: easy
problem_code: ICPC16C
problem_name: 'Watson and Digit Sums'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.4'
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: admin3
problem_tester: null
date_added: 18-10-2016
tags:
    - admin3
time:
    view_start_date: 1477153800
    submit_start_date: 1477153800
    visible_start_date: 1477153800
    end_date: 1735669800
    current: 1493558214
layout: problem
---
All submissions for this problem are available.Watson is going to play mind games with Sherlock. He gives an integer **d** to Sherlock.

Among all possible positive integers **N** having sum of digits **d**, consider the integer **N+1**, and find the minimum possible digit sum **N+1** can have.

For example, if **d** = 9, then **N** could be 9, 18, 27, 36,711 and so on. However, if Sherlock chooses **N** = 9, then sum of digits of **N + 1** _i.e._ 10 will be 1, which is the minimum possible.

### Input

First line of the input contains an integer **T**, the number of test cases.

The only line of each test case consists of an integer **d**.

### Output

For each test case output the required answer in one line.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **d** ≤ **100000**

### Example

```
<b>Input:</b>
1
5

<b>Output:</b>
6

```
### Explanation

Possible value of **N** in given case are: 32,23,113,131 and so on, in each case digit sum of **(N+1)** would be **6**.