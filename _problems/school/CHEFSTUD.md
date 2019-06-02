---
category_name: school
problem_code: CHEFSTUD
problem_name: 'Chef and his Students'
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
problem_tester: animesh_f
date_added: 22-11-2016
tags:
    - admin2
    - cakewalk
    - ltime42
editorial_url: 'http://discuss.codechef.com/problems/CHEFSTUD'
time:
    view_start_date: 1480181400
    submit_start_date: 1480181400
    visible_start_date: 1480181400
    end_date: 1735669800
    current: 1492507174
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME42/mandarin/CHEFSTUD.pdf), [Russian](http://www.codechef.com/download/translated/LTIME42/russian/CHEFSTUD.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME42/vietnamese/CHEFSTUD.pdf) as well.

Chef is instructor of the famous course "Introduction to Algorithms" in a famous univerisity. There are **n** students in his class. There is not enough space in the class room, so students sit in a long hallway in a linear fashion.

One day Chef was late to class. As a result, some of the students have formed pairs and are talking to each other, while the others are busy studying. This information is given to you by a string **s** of length **n**, consisting of characters '\*', ', where '\*' denotes that the student is studying, '>' denotes that the corresponding student is talking to the student to the right, and '

For example, consider a sample configuration of students - **\*>. Here students numbered 1 and 4 are busy studying, while the student 2 and 3 are talking to each other. In this example, **>, student 1 and 2 are talking to each other, and 3 and 4 are also talking to each other. You are guaranteed that the given input is a valid configuration, i.e.  can not be a valid string **s**, as here student 1 is shown to be talking to left, but there is no student to the left. Same is the case for right. Similarly, **>> is also not a valid configuration, as students 2 and 3 are talking to each other, so student 1 won't be able to talk to student 2.******

When the students see their teacher coming, those who were talking get afraid and immediately turn around, i.e. students talking to left have now turned to the right, and the one talking to right have turned to the left. When Chef sees two students facing each other, he will assume that they were talking. A student who is busy studying will continue doing so. Chef will call each pair of students who were talking and punish them. Can you find out how many pairs of students will get punished?

For example, in case **\*>, when students see Chef, their new configuration will be **\*\***. Chef sees that no students are talking to each other. So no one is punished. While in case **>, the new configuration of students will be , Chef sees that student 2 and 3 are talking to each other and they will be punished.****

### Input

The first line of the input contains an integer **T** denoting the number of the test cases.

Each test case contains a string **s** denoting the activities of students before students see Chef entering the class.

### Output

For each test case, output a single integer denoting the number of pairs of students that will be punished.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **|s|** ≤ **105**

### Subtasks

**Subtask #1: (30 points)**- **1** ≤ **T** ≤ **10**
- **1** ≤ **|s|** ≤ **105**
- No student is studying.

 
**Subtask #2: (70 points)**- Original Constraints.

### Example

<pre><b>Input:</b>
4
>Output:
0
0
1
2
</pre>
### Explanation

**Example case 1.** The updated configuration will be . No students are talking to each other, so no one will be punished.

**Example case 2 and 3.** These examples are already explained in the problem statement.
