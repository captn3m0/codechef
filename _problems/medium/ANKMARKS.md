---
category_name: medium
problem_code: ANKMARKS
problem_name: 'VS and his marking scheme'
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
problem_author: code_master01
problem_tester: rubanenko
date_added: 8-06-2015
tags:
    - code_master01
    - cook59
    - matrix
    - medium
editorial_url: 'http://discuss.codechef.com/problems/ANKMARKS'
time:
    view_start_date: 1434911400
    submit_start_date: 1434911400
    visible_start_date: 1434911400
    end_date: 1735669800
    current: 1493557470
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK59/mandarin/ANKMARKS.pdf) and [Russian](http://www.codechef.com/download/translated/COOK59/russian/ANKMARKS.pdf) as well.

Chef VS recently conducted an exam on the subject of Computer Science. Being biased as well as lazy, he awards marks looking at only the students' roll numbers, and not their actual answers on the exam. Students have roll numbers ranging from 1 to **N**, where **N** is the number of students in his class. For a student with roll number **i**, chef VS's _favouritism_ value is given by **favi**.

For any two students with roll numbers next to each other, VS ensures that the one with the higher _favouritism_ value gets **strictly** more than _twice_ the marks received by the less favourite student.

The paper consisted of many problems and each problem must be graded with either the full score allotted to that problem, or zero score.

Since he does not want to get caught, VS must make sure that the number of marks awarded to any student must be expressible as a sum of maximum possible scores of problems, repeated any number of times. For example, suppose that the problems in the problem set carry marks from the set {2,5,7}. Clearly, no student can be awarded 1 mark. 7 marks may be awarded, as 7 = 2 + 5. 4 marks may also be handed out, as 4 = 2 + 2. Note that 0 marks can be awarded as well.

One of the students, Sahil, aspires to top the class, and is therefore very concerned about the marks he would get. While Sahil topping the class could have really been possible if the exam was on _The Harry Potter_ series, his chances are rather bleak on a Computer Science test. So, he finds out the **fav** array by breaking into VS's office, and uses this information to find the **minimum possible average** of marks obtained by the class and judge the ground reality. It is certain that VS never violates the conditions mentioned in the earlier paragraphs. Print the minimum possible average. Please note that test data is generated so as to ensure that every answer is always less than 252

### Input

The first line contains an integer **T**, denoting the number of test cases to follow.
Each test cases contains 4 lines.
The first line contains **N**, the number of students in the class.
The second line contains **N** space-separated integers, denoting the favouritism value for each student.
The third line contains the number of distinct marks in the set, **K**.
The fourth line contains **K** distinct numbers separated by a single space. These numbers represent the set of marks allotted to problems.

### Output

Output exactly **T** lines, each containing the answer for the corresponding test case. Absolute error of the output should be less than 1e-6. Please note that test data is generated so as to ensure that every answer is always less than 252.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **N** ≤ 1000
- 0 ≤ **favi** ≤ 109
- 1 ≤ **K** ≤ 50
- 1 ≤ marks allotted to a problem ≤ 50

### Example:

**Sample Input:**

```

2
3
1 2 3
3
2 5 7
4
1 2 2 3
3
2 4 8


```
**Sample Output:**

```

2.333333
1.000000

```
**Explanation:**

**Test 1:**
Award 0 to student 1, 2 to student 2 and 5 to student 3.
Total score of the class = 7
Average = 7 / 3 = 2.333333

Note that 4 is also a possible total score for the class, but the condition that student 3 should get **strictly** more that twice the marks obtained by student 2 would have been violated.

**Test 2:**
Award 0 to students 1 and 3. Award 2 to students 2 and 4.
Total score of the class = 4
Average = 4 / 4 = 1.000000

Here, you must notice that, despite the fact that student 2 and 3 are favoured equally by VS, they will not necessarily get the same number of marks.