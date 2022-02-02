---
category_name: easy
problem_code: MAXDIFF
problem_name: 'Maximum Weight Difference'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: vamsi_kavala
problem_tester: laycurse
date_added: 20-02-2013
tags:
    - april13
    - cakewalk
    - greedy
    - sorting
    - vamsi_kavala
editorial_url: 'http://discuss.codechef.com/problems/MAXDIFF'
time:
    view_start_date: 1366018200
    submit_start_date: 1366018200
    visible_start_date: 1366018200
    end_date: 1735669800
    current: 1493558167
layout: problem
---
All submissions for this problem are available.Chef has gone shopping with his 5-year old son. They have bought **N** items so far. The items are numbered from **1** to **N**, and the item **i** weighs **Wi** grams.

Chef's son insists on helping his father in carrying the items. He wants his dad to give him a few items. Chef does not want to burden his son. But he won't stop bothering him unless he is given a few items to carry. So Chef decides to give him some items. Obviously, Chef wants to give the kid less weight to carry.

However, his son is a smart kid. To avoid being given the bare minimum weight to carry, he suggests that the items are split into two groups, and one group contains exactly **K** items. Then Chef will carry the heavier group, and his son will carry the other group.

Help the Chef in deciding which items should the son take. Your task will be simple. Tell the Chef the maximum possible difference between the weight carried by him and the weight carried by the kid.

### Input:

The first line of input contains an integer **T**, denoting the number of test cases. Then **T** test cases follow. The first line of each test contains two space-separated integers **N** and **K**. The next line contains **N** space-separated integers **W1**, **W2**, ..., **WN**.

### Output:

For each test case, output the maximum possible difference between the weights carried by both in grams.

### Constraints:

- **1 ≤ T ≤ 100**
- **1 ≤ K &lt; N ≤ 100**
- **1 ≤ Wi ≤ 100000 (105)**

### Example:

<pre>
<b>Input:</b>
2
5 2
8 4 5 2 10
8 3
1 1 1 1 1 1 1 1

<b>Output:</b>
17
2
</pre>
### Explanation:

**Case #1:** The optimal way is that Chef gives his son **K=2** items with weights **2** and **4**. Chef carries the rest of the items himself. Thus the difference is: **(8+5+10) − (4+2) = 23 − 6 = 17**.

**Case #2:** Chef gives his son **3** items and he carries **5** items himself.
