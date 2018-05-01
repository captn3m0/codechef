---
category_name: easy
problem_code: MMSUM
problem_name: 'Better Maximal Sum'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: 'kevinsogo,xcwgf666,antoniuk1'
date_added: 25-05-2016
tags:
    - maxsum
    - medium
    - snckql16
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/MMSUM'
time:
    view_start_date: 1464708600
    submit_start_date: 1464708600
    visible_start_date: 1464708600
    end_date: 1735669800
    current: 1493558169
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKQL16/mandarin/MMSUM.pdf), [Russian](http://www.codechef.com/download/translated/SNCKQL16/russian/MMSUM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKQL16/vietnamese/MMSUM.pdf) as well.

You're given an array of **N** integer numbers.

The **maximal sum** of the array is the maximal sum of the elements of a **nonempty** consecutive subarray of this array. For example, the maximal sum of the array **\[1, -2, 3, -2, 5\]** is **6** because the sum of the subarray **\[3, -2, 5\]** is **6** and it is impossible to achieve greater subarray sum.

Now you're allowed to remove **no more than one** element from the given array. What is the maximal possible maximal sum of the resulting array you can achieve by doing so?

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **N** denoting the number of elements in the given array.

The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the elements of the array.

### Output

For each test case, output a single line containing the maximal possible maximal sum of the array obtained by removing no more than one integer from the initial array.

### Constraints

- **1** ≤ **T** ≤ **10**
- **2** ≤ **N** ≤ **105**
- **-109** ≤ **Ai** ≤ **109**

### Example

<pre><b>Input:</b>
<tt>2
5
1 -2 3 -2 5
2
-1 -2</tt>

<b>Output:</b>
<tt>8
-1</tt>
</pre>### Explanation

**Example case 1.** As shown in the statement, the maximal sum of the initial array is **6**, but if you remove the fourth element (i.e. **-2**), then the array **\[1, -2, 3, 5\]** will have subarray **\[3, 5\]** and the value of the maximal sum will be equal to **8**.
