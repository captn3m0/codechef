---
category_name: easy
problem_code: COMPEXP
problem_name: 'Compression Algorithm'
languages_supported:
    - C
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: usaxena95
problem_tester: null
date_added: 30-10-2017
tags:
    - acmind17
    - easy
    - expected
    - usaxena95
time:
    view_start_date: 1509900600
    submit_start_date: 1509900600
    visible_start_date: 1509900600
    end_date: 1735669800
    current: 1525198885
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Mr. X has come up with a new string compression algorithm. Consider a string of length **N** which contains up to **K** distinct characters. The compression algorithm works as follows: Replace each maximal contiguous substring containing only one distinct character (repeated an arbitrary number of times) and replace it by 2 values: the character and the length of the substring.

For example, the string "aabbaaa" will be compressed to "a, 2, b, 2, a, 3". Thus the length of the compressed string is 6.

Since Mr. X is living in advanced times, the length of any integer is considered to be 1. For example, if a string is compressed to "a, 111, b, 13", then its length after compression is considered to be 4.

To test his algorithm, he needs to know the expected length of the compressed string for given **N** and **K** if the input string is randomly uniformly chosen from all possibilities. He wants to run this experiment multiple times for different **N, K** and needs your help.

### Input

The first line of the input contains an integer **T** denoting the number of queries. The description of **T** test cases follows.

The first and only line of each test case contains two integers **N** and **K** denoting the number of letters in the input string and the maximum number of distinct characters that can be present in the string.

### Output

 For each test case, output a single line containing the expected length of the compressed string. Your answer will be considered correct if the absolute error is less than **10-6**

### Constraints

- **1 ≤ T ≤ 105**
- **1 ≤ N, K ≤ 109**

### Example

<pre><b>Input:</b>
2
3 1
3 2
<b>Output:</b>
2.0
4.0

</pre>
### Explanation

**Example case 1:**There is only one string: aaa with compressed string = a, 3. Therefore length = 2

**Example case 2**Input strings:
"aaa": "a, 3". Length = 2
"aab": "a, 2, b, 1". Length = 4 
"aba": "a, 1, b, 1, a, 1". Length = 6
"abb": "a, 1, b, 2". Length = 4
"baa": "b, 1, a, 2". Length = 4
"bab": "b, 1, a, 1, b, 1". Length = 6
"bba": "b, 2, a, 1". Length = 4
"bbb": "b, 3". Length = 2
Expected value = **(2+4+6+4+4+6+4+2)/8 = 32/8 = 4**
