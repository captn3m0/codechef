---
category_name: easy
problem_code: CHEFARK
problem_name: 'Chef and Array and K'
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
problem_author: berezin
problem_tester: null
date_added: 14-10-2015
tags:
    - berezin
    - easy
    - june16
editorial_url: 'http://discuss.codechef.com/problems/CHEFARK'
time:
    view_start_date: 1465983000
    submit_start_date: 1465983000
    visible_start_date: 1465983000
    end_date: 1735669800
    current: 1493558116
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JUNE16/mandarin/CHEFARK.pdf), [Russian](http://www.codechef.com/download/translated/JUNE16/russian/CHEFARK.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JUNE16/vietnamese/CHEFARK.pdf) as well.

Chef has an array **A** consisting of **N** integers. He also has an intger **K**.

Chef wants you to find out number of different arrays he can obtain from array **A** by applying the following operation **exactly** **K** times.

- Pick some element in the array and multiply it by **-1**

As answer could be quite large, print it modulo **109 + 7**.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains two space separated integers **N**, **K** as defined above.
- The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the elements of the array.

### Output

- For each test case, output a single line containing an integer corresponding to the number of different arrays Chef can get modulo **109 + 7**.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N, K** ≤ **105**
- **-106** ≤ **Ai** ≤ **106**

### Subtasks

- **Subtask #1 (10 points)** : **N, K** ≤ **10**
- **Subtask #2 (30 points)** : **N, K** ≤ **100**
- **Subtask #3 (60 points)** : **N, K** ≤ **105**

### Example

<pre><b>Input:</b>
3
1 3
100
3 1
1 2 1
3 2
1 2 1

<b>Output:</b>
1
3
4

</pre>### Explanation
**Example case 1.**Chef has only one element and must apply the operation 3 times to it. After applying the operations, he will end up with -100. That is the only array he will get.

**Example case 2.**Chef can apply operation to one of three elements. So, he can obtain three different arrays.

**Example case 3.**Note that other than applying operation to positions **(1, 2)**, **(1, 3)**, **(2, 3)**, Chef can also apply the operation twice on some element and get the original.

In summary, Chef can get following four arrays.

<pre>
[1, 2, 1]
[-1, -2, 1]
[-1, 2, -1]
[1, -2, -1]

</pre>