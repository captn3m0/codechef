---
category_name: easy
problem_code: CHEFBEST
problem_name: 'Chef and his Best Friend'
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
problem_author: admin2
problem_tester: mgch
date_added: 1-02-2017
tags:
    - admin2
time:
    view_start_date: 1487496600
    submit_start_date: 1487496600
    visible_start_date: 1487496600
    end_date: 1735669800
    current: 1493558116
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB17/mandarin/CHEFBEST.pdf), [Russian](http://www.codechef.com/download/translated/FEB17/russian/CHEFBEST.pdf) and [Vietnamese](http://www.codechef.com/download/translated/FEB17/vietnamese/CHEFBEST.pdf) as well.

Chef and Chhotu are best friends. Chef knows that Chhotu is very intelligent. So, Chef gives Chhotu a simple problem and wants him to solve this problem by today. The problem is as follows.

There are **N** students in a classroom. The students are sitting in a single row. Chef wants that all the girls should sit in left side of the row and all the boys should sit in right side of the row. You are provided the initial row of the students by **N** binary integers, where if **i**-th integer is zero, then it means that at the **i**-th position, there is a boy, where **1** will mean girl. For example, if the initial arrangement be **\[0 1 0 1 1\]**, then final arrangement should be **\[1 1 1 0 0\]**.

In a single second, if a boy finds that a girl is sitting to his immediate right i.e. if a boy is sitting at ith position and a girl is sitting at (i+1)th position then they swap their positions. For example, let the initial arrangement be **\[0 1 0 1 1\]**. Boys are sitting at positions **1, 3** (1-based indexing) and girls are sitting at positions **2, 4, 5**. In a single second, boy at position 1 swaps his seat with girl at position **2**, and similarly boy at position **3** swaps his seat with girl at position 4. So, after one second, the arrangement becomes **\[1 0 1 0 1\]**.

 For detailed explanation, please see the explanation of the sample provided at the end of this statement. Now Chef wants to determine the total time after which all the girls move to the left side of the row and all the boys towards the right side of the row.

Chhotu can solve this problem very easily but today he is very busy. Please help Chhotu to solve this problem.

### Input

The first line of the input contains **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains an integer **N** denoting the number of students in the row.

The second line contains **N** space-separated integers - **A1**, **A2**, ..., **AN** denoting the initial arrangement of the students.

### Output

For each test case, output a single integer on a new line corresponding to the number of seconds required such that all girls are to the left of boys.

### Constraints

- **1 ≤ T ≤ 10**
- **1 ≤ N ≤ 105**
- **0 ≤ Ai  ≤ 1**

### Subtasks

**Subtask #1 (30 points):**

- **1 ≤ T ≤ 10**
- **1 ≤ N ≤ 103**

**Subtask #2 (70 points):**

- **1 ≤ T ≤ 10**
- **1 ≤ N ≤ 105**

### Example

**Input:**

```

2
10
0 1 1 1 0 1 1 0 1 1
5
0 1 0 1 1

```
**Output:**

```

7
3

```
### Explanation

**Test case 1:**

Initially, student's arrangement is **\[0 1 1 1 0 1 1 0 1 1\]**

After1st second **\[1 0 1 1 1 0 1 1 0 1\]**

After 2nd second **\[1 1 0 1 1 1 0 1 1 0\]**

After 3rd second **\[1 1 1 0 1 1 1 0 1 0\]**

After 4th second **\[1 1 1 1 0 1 1 1 0 0\]**

After 5th second **\[1 1 1 1 1 0 1 1 0 0\]**

After 6th second **\[1 1 1 1 1 1 0 1 0 0\]**

After 7th second **\[1 1 1 1 1 1 1 0 0 0\]**

Total time taken = **7** seconds

**Test case 2:**

Initially, student's arrangement is **\[0 1 0 1 1\]**

After 1st second **\[1 0 1 0 1\]**

After 2nd second **\[1 1 0 1 0\]**

After 3rd second **\[1 1 1 0 0\]**

Total time taken = **3** seconds