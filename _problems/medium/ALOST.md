---
category_name: medium
problem_code: ALOST
problem_name: 'Akhil Recovers The Lost Array'
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
problem_author: amitpandeykgp
problem_tester: prateekg603
date_added: 19-04-2016
tags:
    - amitpandeykgp
    - ltime36
    - number
editorial_url: 'http://discuss.codechef.com/problems/ALOST'
time:
    view_start_date: 1464454800
    submit_start_date: 1464454800
    visible_start_date: 1464454800
    end_date: 1735669800
    current: 1493557447
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME36/mandarin/ALOST.pdf), [Russian](http://www.codechef.com/download/translated/LTIME36/russian/ALOST.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME36/vietnamese/ALOST.pdf) as well.

Akhil has an array consisting of **N** positive integers. As we know that there are **(N\*(N+1))/2** non-empty contiguous subarrays in an array of size **N**. Akhil found that exactly **E** of the contiguous subarrays had even sum and remaining **O = (N\*(N+1))/2 - E** have odd sum.

Next day, he lost the original array. But he still remembered the **E** and **O** values correctly. Now, he wants to recreate any such array which has exactly **E** even sum continuous subarrays and **O** odd ones. If there are many such possible arrays, printing any one of them will make him happy.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows:
- First line of each test case contains an integer **N** denoting the length of lost array.
- Second line of each test case contains two space separated integers **E** and **O**, denoting number of contiguous subarrays with even and odd sums, respectively.

### Output

- For each test case, output a single line containing all the integers of an array separated by a space.
- Each integer should lie between 0 and 100(both inclusive).
- If there is no such possible array, print **-1** in a single line.

### Constraints

- ≤ **E, O** ≤ **N\*(N+1)/2**
- **E + O** = **N\*(N+1)/2**

### Subtasks

12. Subtask #1 (20 points) : **1** ≤ sum of **N** over all test cases ≤ **15**
13. Subtask #2 (20 points) : **1** ≤ sum of **N** over all test cases ≤ **2 \* 103**
14. Subtask #3 (60 points) : **1** ≤ sum of **N** over all test cases ≤ **106**
### Example

<pre><b>Input:</b>
3
3
2 4
3
3 3
3
0 6

<b>Output:</b>
2 1 2
1 2 2
-1

</pre>### Explanation
**Example case 1.** There are total 6 subarrays : {2},{1},{2},{2,1},{1,2},{2,1,2}. Their sums {2, 1, 2, 3, 3, 5} are respectively. As 2 of them are even and 4 of them are odd. So, this is one possible answer which satisfies Akhil's requirements.

**Example case 3.** There is no array of length 3 whose all the subarrays have odd sum. Akhil might have remembered something incorrectly. Hence, you should print -1.
