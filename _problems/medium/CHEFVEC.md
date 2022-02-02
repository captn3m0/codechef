---
category_name: medium
problem_code: CHEFVEC
problem_name: 'Chef and Vectors'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.4'
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: null
date_added: 9-12-2015
tags:
    - cook65
    - digit
    - dynamic
    - hard
    - memoization
    - mgch
editorial_url: 'http://discuss.codechef.com/problems/CHEFVEC'
time:
    view_start_date: 1450636200
    submit_start_date: 1450636200
    visible_start_date: 1450636200
    end_date: 1735669800
    current: 1493557549
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK65/mandarin/CHEFVEC.pdf), [Russian](http://www.codechef.com/download/translated/COOK65/russian/CHEFVEC.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK65/vietnamese/CHEFVEC.pdf) as well.

Chef has an integer array **X**, and a binary array **S**, both of size **N**. He wants to know how many vectors (denote by **V**) of **N** elements exist, for which the following conditions hold for all valid indices **i** (that is, for all 1 ≤ **i** ≤ **N**).

4. 0 ≤ **Vi** &lt; 1018
5. If **Si** = 1, **Vi** is ≥ **Xi**, and if **Si** = 0, **Vi** ≤ **Xi**
6. Sum of the elements of **V**, when viewed as a string, contains "47" as a substring.
Please help Chef find this count. Since it may be a very large number, you should output the count modulo **109+7**.

### Input

The first line of input contains one integer **N**. The next **N** lines contain two integers each, with the **ith** containing **Si** and **Xi**. If **Si** = 0, then **Vi** ≤ **Xi**, otherwise **Vi** ≥ **Xi**. ### Output

Output a single line containing a single integer — the answer to Chef's problem modulo **109**+**7**. ### Constraints

- 1 ≤ **N** ≤ 8
- 0 ≤ **Xi** &lt; 1018
- **Si** is either 0 or 1.

### Example

<pre>
<b>Input:</b>
<tt>2
0 22
0 30
</tt>
<b>Output:</b>
<tt>6
</tt>
</pre>
### Explanation:

There are 6 such vectors: (17, 30), (18, 29), (19, 28), (20, 27), (21, 26), (22, 25).
