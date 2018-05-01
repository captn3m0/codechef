---
category_name: medium
problem_code: CHSPARR
problem_name: 'Chef and Super Array'
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
problem_author: antoniuk1
problem_tester: 'kevinsogo,xcwgf666'
date_added: 21-07-2015
tags:
    - algebra
    - antoniuk1
    - medium
    - series
    - snckpa16
editorial_url: 'http://discuss.codechef.com/problems/CHSPARR'
time:
    view_start_date: 1465140600
    submit_start_date: 1465140600
    visible_start_date: 1465140600
    end_date: 1735669800
    current: 1493557573
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](/download/translated/SNCKPA16/mandarin/CHSPARR.pdf), [Russian](/download/translated/SNCKPA16/russian/CHSPARR.pdf) and [Vietnamese](/download/translated/SNCKPA16/vietnamese/CHSPARR.pdf) as well.

Chef has a an array **A** consisting of **N** elements. He wants to add some elements into the array as per the below mentioned process.

After each minute, Chef iterates over the array in order from left to right, and takes every two neighbouring pair of elements, say **x** and **y**, he adds a new element **x + y** in the middle of elements **x** and **y**.

For example, if initial array **A** = {1, 6, 9}.

- After first minute, the array **A** will be equal to {1, **7**, 6, **15**, 9}. Please note that the elements shown in the bold font are the newly added elements during first minute. As you can observe that **7** = 1 + 6, and **15** = 6 + 9.
- After second minute, the array will be {1, **8**, 7, **13**, 6, **21**, 15, **24**, 9}. Once again, elements added during the second minute, are shown in bold.
 
Chef wants to know the sum of elements between **xth** and **yth** positions in the array **A** (i.e. **Ax + Ax + 1 + ... + Ay**) after **m** minutes. As the answer could be large, output it modulo 109+7 (1000000007). Please note that we use 1 based indexing in the problem.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains four space-separated integers **N**, **m**, **x**, **y** denoting the number of elements in the array **A** in the beginning, amount of minutes and range for finding sum.
- The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the array **A** in the beginning.
 
### Output

- For each test case, output a single line containing an integer corresponding to the sum of elements between **xth** and **yth** positions in the array **A** after **m** minutes modulo 109+7.
 
### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **105**
- **1** ≤ **Ai** ≤ **103**
- **1** ≤ **m** ≤ **30**
- **1** ≤ **x** ≤ **y** ≤ size of the array **A** (**|A|**) after **m** minutes
 
### Example

 ```
<b>Input:</b>
2
3 1 1 5
1 6 9
3 2 6 7
1 6 9

<b>Output:</b>
38
36
<pre>### Explanation

**Example case 1.**
 After the first minute **A** = {1, 7, 6, 15, 9} and sum of all elements will be 38.

**Example case 2.**
 After the second minute the array **A** will be {1, 8, 7, 13, 6, 21, 15, 24, 9} and sum of elements between 6th and 7th equals to 21 + 15 = 36.
