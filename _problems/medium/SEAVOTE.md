---
category_name: medium
problem_code: SEAVOTE
problem_name: 'Sereja and Votes'
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: shiplu
date_added: 1-12-2014
tags:
    - easy
    - jan15
    - maths
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/SEAVOTE'
time:
    view_start_date: 1421055000
    submit_start_date: 1421055000
    visible_start_date: 1421055000
    end_date: 1735669800
    current: 1493557928
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN15/mandarin/SEAVOTE.pdf) and [Russian](http://www.codechef.com/download/translated/JAN15/russian/SEAVOTE.pdf).

Sereja conducted a voting about **N** of his opinions. **Ai** percent of people voted for opinion number **i**. This statistics is called valid if sum of all **Ai** is equal to **100**.

Now let us define rounding up of a statistics **A**.

- If **Ai** is not an integer, it will be rounded up to next integer.
- Otherwise it will be left as it is.

e.g. **4.1** became **5**, **4.9** became **5** but **6** will still be **6**. Now let us consider a statistics **B** of size **N** in which each of **Bi** is an integer. Now he wants to know whether there exists some valid statistic **A** of size **N** (may contain real numbers) such that after rounding it up, it becomes same as **B**?

### Input

- First line of input contain integer **T** - number of test cases.
- For each test, case first line contains integer **N** - number of opinions.
- Next line contains **N** integers **B1, B2, ..., BN** as defined in the problem.

### Output

For each test case, output **YES** or **NO** denoting the answer of the problem, i.e. if there exists some statistics **A** which could be rounded to make it **B**, print **YES** otherwise **NO**. ### Constraints

- **1** ≤ **T** ≤ **50**
- **1** ≤ **N** ≤ **10000**
- ≤ **Bi** ≤ **1000**

### Sub tasks

- Subtask #1: **N ≤ 100** (50 points)
- Subtask #2: **original** (50 points)

### Example

<pre><b>Input:</b>
3
3
30 30 30
4
25 25 25 25
2
50 51
<b>Output:</b>
NO
YES
YES

</pre>### Explanation
- In test case 1, There can not be any **A** which could be rounded up to get **B**. Hence answer is NO.
- In test case 2, In this case **A** = {25, 25, 25, 25}. After rounding we get {25, 25, 25, 25} which is equal to **B**. Hence answer is YES.
- In test case 3, **A** = {49.5, 50.5}. After rounding up we get {50, 51} which is equal to **B**. Hence answer is YES.
