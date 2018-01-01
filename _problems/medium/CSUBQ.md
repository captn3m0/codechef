---
category_name: medium
problem_code: CSUBQ
problem_name: 'Chef and Subarray Queries'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - CAML
    - CLOJ
    - CLPS
    - COB
    - 'CPP 4.3.2'
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: code_hard123
problem_tester: null
date_added: 18-10-2017
tags:
    - code_hard123
    - medium
    - nov17
    - segment
editorial_url: 'https://discuss.codechef.com/problems/CSUBQ'
time:
    view_start_date: 1510579800
    submit_start_date: 1510579800
    visible_start_date: 1510579800
    end_date: 1735669800
    current: 1514816996
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/NOV17/mandarin/CSUBQ.pdf), [Russian](http://www.codechef.com/download/translated/NOV17/russian/CSUBQ.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV17/vietnamese/CSUBQ.pdf) as well.

 Chef has an array **A** consisting of **N** non-negative integers. Initially, all the elements are zero. Assume 1-based indexing. Chef is given two positive integers **L** and **R**. **(L Chef has to execute **Q** number of queries on the array **A**. These queries can be of the following two types: 
 **1 x y (1 ≤ x ≤ n)** - Replace the value of **xth** array element by **y**. 
 **2 l r (1 ≤ l ≤ r ≤ n)** - Return the number of subarrays **\[a , b\]** that lies in subarray **\[l , r\]** such that the value of the maximum array element in that subarray is atleast **L** and atmost **R**. 
 (A subarray **\[a , b\]** lies in a subarray **\[l , r\]** if and only if **a >= l** and **b ) 
 Since, Chef couldn't solve this task, can you please help him solve this task?****

### Input

The first line contains four space separated positive integers **N, Q, L** and **R** denoting the total number of elements in an array, total number of queries, value of **L**, and value of **R** respectively. 
Each of the next **Q** lines contains one of the two queries described above.

### Output

For each query of type 2, print the required answer in a new line.

### Constraints

1 ≤ N, Q ≤ 5 \* 10^5

1 ≤ L ≤ R ≤ 10^9

1 ≤ l ≤ r ≤ N

1 ≤ x ≤ N

1 ≤ y ≤ 10^9

### Subtasks

**Subtask #1** (10 points) : 1 ≤ N , Q ≤ 100 
**Subtask #2** (15 points) : 1 ≤ N , Q ≤ 5000 
**Subtask #3** (27 points) : 1 ≤ Q ≤ 10^4 
 **Subtask #4** (48 points) : Original Constraints 
### Example

<pre><b>Input:</b>

5 6 1 10
1 1 2
2 1 5 
1 3 11
1 4 3
2 3 5
2 1 5

<b>Output:</b>

5
2
4

</pre>### Explanation

**Query 1.**
 A = {0, 0, 0, 0, 0} 
After replacing value of 1st element by 2,
A = {2, 0, 0, 0, 0}

**Query 2.**
A = {2, 0, 0, 0, 0} 
All the subarrays that lies in a subarray \[1 , 5\] whose maximum value is atleast 1 and atmost 10 are -
 \[1 , 1\], \[1 , 2\], \[1 , 3\], \[1 , 4\] and \[1 , 5\]. Thus the answer is 5.

**Query 3.**
A = {2, 0, 0, 0, 0}
After replacing value of 3rd element by 11, 
A = {2, 0, 11, 0, 0}

**Query 4.**
A = {2, 0, 11, 0, 0} 
 After replacing value of 4th element by 3, 
A = {2, 0, 11, 3, 0}

**Query 5.**
A = {2, 0, 11, 3, 0}
All the subarrays that lies in a subarray \[3 , 5\] whose maximum value is atleast 1 and atmost 10 are -
 \[4 , 4\] and \[4 , 5\]. Thus the answer is 2.

**Query 6.**
A = {2, 0, 11, 3, 0}
All the subarrays that lies in a subarray \[1 , 5\] whose maximum value is atleast 1 and atmost 10 are -
 \[1 , 1\], \[1 , 2\], \[4 , 4\] and \[4 , 5\]. Thus the answer is 4.
