---
category_name: challenge
problem_code: SEASOR
problem_name: 'Sereja and Sorting'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - CLOJ
    - FS
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: gamabunta
date_added: 8-06-2013
tags:
    - ad
    - challenge
    - july13
    - sereja
    - sorting
editorial_url: 'http://discuss.codechef.com/problems/SEASOR'
time:
    view_start_date: 1373880932
    submit_start_date: 1373880932
    visible_start_date: 1373880600
    end_date: 1735669800
    current: 1525454424
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Sereja has an array, which consists of **N** integers. Let the integers be denoted by **a1, a2, ... aN**. Sereja has just started learning about sorting. Sereja wrote a program, which takes input of an index **idx** and then sorts the elements of Sereja's array which satisfy **{ ai : idx ≤ i < min(N + 1, idx + K) }**.

Now, Sereja wants to solve the more interesting problem of sorting the original array. But, Sereja is not very keen on writing more programs. So he asks you to write a program that provides input to his program so that his array is sorted. He shall be more pleased if you sort his array in as few operations (where an operation is one invocation of Sereja's program) as possible.

### Input

The first line of the input contains an integer **T**, the number of test cases. The description of **T** test cases follows. The first line of each test case contains integers **N** and **K**. **N** is then length of Sereja's array for that test case. **K** is the size of the block that is sorted whenever Sereja's program is invoked with an index. The second line of each test case contains integers **a1, a2, ... an**.

### Output

This is a challenge problem, hence the output specification is very strict. Make sure you produce output exactly as described here, otherwise you will get a verdict of Wrong Answer..

For each test case, the first line contains an integer **Q**, the number of times you want to invoke Sereja's program for that test case. **Q** must be an integer between 0 and (n\*n/k + 1000), inclusive. On the next line, print exactly **Q** space separated integers **q1 q2 ... qN**. Make sure that each **qi** falls exactly in the range **\[1,N\]**. The order in which the integers appear, is the order in which they will be used to step by step invoke Sereja's program and sort the sub-arrays. Refer to the next section on **Scoring** to know how your output is scored. It is important to note that for each test file, you **have** to successfully sort at least one of the **Sereja's Arrays** (i.e. for at least one test case, the given array, should be sorted in the end of all the calls). Failure to do so will result in a Wrong Answer verdict.

### Scoring

If your program solves a test case, it receives the score of **Q \* K** for that test case. **Solving** a test case means that the given array should have been successfully sorted in the end. Otherwise the test case is considered, not solved. In this case, your program receives a score of 10,000,000 for that test case. The total score for a test file is the sum of scores of each test case in the file. The total score of the program is simply the sum of the scores for each test files, divided by the number of test files (this is what the generic master judge does). Since the number of test files are same for everyone, this is effectively equal to the sum of scores for all the test files. In case it isn't apparent yet, the objective of this problem is to **minimize your total score**.

### Constraints

**1 ≤ T ≤ 10**
**1 ≤ N ≤ 1000**
**2 ≤ K ≤ N**
**1 ≤ ai ≤ 1000000000**
**You may assume there is always some way to sort the array within (n\*n/k + 1000) calls**

### Sample

<pre>
<b>Input</b>
3
1 2
1
5 3
10 1 2 3 4
10 3
10 1 2 3 4 5 6 7 9 10

<b>Output:</b>
0
3
1 2 3
5
1 3 5 7 8

</pre>
The above sample will receive a score of **0\*1 + 3\*3 + 5\*3 = 24**.
