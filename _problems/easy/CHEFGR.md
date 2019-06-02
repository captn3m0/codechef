---
category_name: easy
problem_code: CHEFGR
problem_name: 'Chef and Ground'
languages_supported:
    - C
    - 'CPP 4.9.2'
    - JAVA
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: berezin
problem_tester: shangjingbo
date_added: 10-03-2014
tags:
    - basic
    - berezin
    - cakewalk
    - oct14
editorial_url: 'http://discuss.codechef.com/problems/CHEFGR'
time:
    view_start_date: 1413192600
    submit_start_date: 1413192600
    visible_start_date: 1413192600
    end_date: 1735669800
    current: 1493558118
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/OCT14/mandarin/CHEFGR.pdf) and [Russian](http://www.codechef.com/download/translated/OCT14/russian/CHEFGR.pdf).

Today Chef wants to clean his garden. Chef has **N** columns of ground. Each column has it's height . Chef can choose any column and increase its height by **1** using **1** cube of ground.

Chef wants to spend **exactly** **M** cubes. Can he make this in such way that the heights of all columns will become equal?

### Input

- First line of input contains an integer T denoting number of test cases.
- Then for each test case, The first line contains two integers **N** and **M**.
- The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the initial heights of the columns".

### Output

- If Chef can spend all cubes and make the columns equal print **Yes** else print **No**.

### Constraints

- **1** ≤ **T** ≤ **10^2**
- **1** ≤ **N** ≤ **10^2**
- **1** ≤ **Ai** ≤ **10^2**
- 0 ≤ **M** ≤ **10^4**

### Example

<pre><b>Input:</b>
3
5 7
3 3 4 2 1
5 6
3 3 4 2 1
5 8
3 3 4 2 1

<b>Output:</b>
Yes
No
No
</pre>
### Explanation

In the first case we can put cubes on columns in such count: **1, 1, 0, 2, 3**. The sum equals **M**.

In the second case we can't make the columns equal as we will receive something like **44443**.

In the third case we can make all columns equal but we will still have one cube extra, By using that cube, our heights of columns will become **44445**.
