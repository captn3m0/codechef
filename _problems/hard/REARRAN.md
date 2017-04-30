---
category_name: hard
problem_code: REARRAN
problem_name: Rearrangement
languages_supported:
    - C
    - 'CPP 4.9.2'
    - CPP14
    - JAVA
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: gennady.korotkevich
problem_tester: gamabunta
date_added: 13-10-2012
tags:
    - bruteforce
    - cook27
    - gennady
    - meet
    - simple
time:
    view_start_date: 1350845099
    submit_start_date: 1350845099
    visible_start_date: 1350845041
    end_date: 1735669800
    current: 1493556981
layout: problem
---
All submissions for this problem are available.Emily has an array of **N** integers. She wants to rearrange its elements in such a way that the sum of any **K** **consecutive** elements of the rearranged array is divisible by **M**. She was able to accomplish this for several small cases. Help her with the larger ones.

### Input

The first line of the input contains a single integer **T**, the number of test cases (no more than 5). Each test case is described by exactly two lines. The first of these lines contains three space-separated integers **N**, **M** and **K**, respectively (1 ≤ **K** ≤ 70, 2\***K** ≤ **N** ≤ 10000, 1 ≤ **M** ≤ 109). The second of these lines contains **N** space-separated integers **Ai** (0 ≤ **Ai** ≤ 109).

### Output

For each test case output exactly one line containing either a single integer -1 if there is no solution or a sequence of **N** space-separated integers which has the required property and is a permutation of the array **A** from the input. If there are several ways to do this, any of them will be accepted.

### Example

```

<b>Input:</b>
3
6 4 3
6 1 1 9 2 5
8 2 3
2 5 0 9 1 9 9 4
8 5 3
1 9 0 1 1 9 9 1

<b>Output:</b>
2 9 1 6 5 1
2 5 9 0 9 9 4 1
-1

```
### Explanation

There are 6 sequences of 3 consecutive numbers in (2 5 9 0 9 9 4 1). Formally:

- (2 5 9), sum = 16, which is divisible by 2
- (5 9 0), sum = 14, which is divisible by 2
- (9 0 9), sum = 18, which is divisible by 2
- (0 9 9), sum = 18, which is divisible by 2
- (9 9 4), sum = 22, which is divisible by 2
- (9 4 1), sum = 14, which is divisible by 2


Another possible answer is (4 5 9 0 1 9 2 9)./>