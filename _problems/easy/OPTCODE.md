---
category_name: easy
problem_code: OPTCODE
problem_name: 'Optimize The Slow Code'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 13-12-2017
tags:
    - admin2
    - gwr17rol
    - simple
    - sorting
time:
    view_start_date: 1516482000
    submit_start_date: 1516482000
    visible_start_date: 1516482000
    end_date: 1735669800
    current: 1525198940
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Chef hates unoptimized codes and people who write such codes. One fine day he decided to look through the kitchen's codebase and found a function whose pseudo-code is given here:

<pre>input: integer N, list X[1, 2, ..., N], list Y[1, 2, ..., N]

output: integer res

function:

set res = 0;
for i := 1 to N do
   for j := 1 to N do
      for k := 1 to N do
         if (X[i] = X[j]) OR (X[j] = X[k]) OR (X[k] = X[i])
            continue
         else
            set res = max(res, Y[i] + Y[j] + Y[k])
return res

</pre>

Luckily enough this code gets triggered only if the Head Chef makes a submission. But still there is a possibility that this can crash the judge. So help Chef by writing a new function which does the same thing but is faster.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains an integer **N** denoting the number of elements in the two lists.
- The i-th of the next **N** lines contains a pair of space-separated integers denoting the values of **X\[i\]** and **Y\[i\]** respectively.

### Output

For each test case, output an integer corresponding to the return value of the function.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **N** ≤ 105
- 1 ≤ **X\[i\]**, **Y\[i\]** ≤ 108
 
### Example

<pre>
<b>Input</b>
2
3
1 3
3 1
1 2
5
1 3
2 4
1 2
3 2
3 4

<b>Output</b>
0
11
</pre>
### Explanation

**Testcase 2:** The maximum is attained when i = 1, j = 2 and k = 5. This leads to res being 3 + 4 + 4 = 11. This value is attained in other iterations as well, but it never exceeds this, and hence this is the answer.
