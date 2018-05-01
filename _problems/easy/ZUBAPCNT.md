---
category_name: easy
problem_code: ZUBAPCNT
problem_name: 'A - Appearance Count'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: zubaerkh
problem_tester: null
date_added: 13-11-2017
tags:
    - zubaerkh
time:
    view_start_date: 1517085000
    submit_start_date: 1517085000
    visible_start_date: 1517085000
    end_date: 1735669800
    current: 1525198943
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You will be given **m** strings. For each of those strings, you need to count the total number of appearances of that string as substrings in all possible strings of length **n** containing only lower case English letters.

A string may appear in a string multiple times. Also, these appearances may overlap. All these must be counted separately. For example, _aa_ appears thrice in the string _aaacaa_: _**aa**acaa_, _a**aa**caa_ and _aaac**aa**_.

### Input

- The first line contains one integer, **T**, the number of test cases. The description of each test case follows:
- The first line of each test case will contain two integers **n** and **m**.
- The ith of the next **m** lines will have one string in each line. All the strings will consist only of lower case English letters.

### Output

- For each test case, print **"Case x:"** (without quotes. **x** is the test case number, 1-indexed) in the first line.
- Then print **m** lines. The ith line should contain the number of appearances of the ith string in all possible strings of length **n**. As the numbers can be very large, print the answers modulo **109+7**
. 
### Constraints

- 1 ≤ **T** ≤ 100
- 1 ≤ **n** ≤ 100000
- 1 ≤ **m** ≤ 1000
- 1 ≤ Length of every string in input
- 1 ≤ Total length of all strings in one test case ≤ 5 \* 105
- 1 ≤ Total length of all strings in one test file ≤ 5 \* 106

### Example

<pre><b>Input:</b>
3
2 1
aa
2 1
d
12 3
cdmn
qweewef
qs

<b>Output:</b>
Case 1:
1
Case 2:
52
Case 3:
443568031
71288256
41317270
</pre>### Explanation:

**Testcase 1**: _aa_ is the only string of length 2 which contains _aa_ as a substring. And it occurs only once. Hence the answer is 1.
