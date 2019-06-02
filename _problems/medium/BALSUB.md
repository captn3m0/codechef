---
category_name: medium
problem_code: BALSUB
problem_name: 'Balanced Parenthesis Substrings'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.6'
    - PYPY
    - PYP3
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: balajiganapath
problem_tester: null
date_added: 25-12-2018
tags:
    - balajiganapath
time:
    view_start_date: 1546074900
    submit_start_date: 1546074900
    visible_start_date: 1546074900
    end_date: 1735669800
    current: 1559472967
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.A balanced parenthesis string is defined as follows: - The empty string is balanced - If `P` is balanced, `(P)` is also balanced - If `P` and `Q` are balanced `PQ` is also balanced `"()"`, `"(())()"` are examples of balanced parenthesis strings while `"(()"`, `"())"` are not balanced. A substring of a string is a contiguous subsection of the given string. Given $n$ and $k$, output a balanced parenthesis string of length $n$ having exactly $k$ substrings which are also balanced. If no such string is possible, output `"impossible"` without quotes. If there are multiple answers, print any. ###Input: - First line will contain $T$, number of testcases. Then the testcases follow. - Each testcase contains of a single line of input, which has two integers, $n$ and $k$, separated by space ###Output: For each testcase, output any balanced parenthesis string which satisfies the condition or `"impossible"` if no such string exists. ###Constraints - $1 \\leq T \\leq 5000$ - $1 \\leq n \\leq 200$ - $1 \\leq k \\leq 10^5$ ###Sample Input: 3 2 1 5 3 6 4 ###Sample Output: () impossible ()(()) ###EXPLANATION: Case 1: The entire string is also considered as its own substring so there is exactly 1 balanced substring: `()` itself Case 2: No balanced string with length 5 exists Case 3: There are exactly 4 substrings that are balanced (indices are 0 based): 1. Substring 0 to 1: `()` 2. Substring 3 to 4: `()` 3. Substring 2 to 5: `(())` 4. Substring 0 to 5: `()(())`
