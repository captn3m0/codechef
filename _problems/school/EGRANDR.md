---
category_name: school
problem_code: EGRANDR
problem_name: 'Andrash and Stipendium'
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
problem_author: egor_bobyk
problem_tester: mugurelionut
date_added: 19-02-2015
tags:
    - basic
    - cakewalk
    - egor_bobyk
    - july16
editorial_url: 'http://discuss.codechef.com/problems/EGRANDR'
time:
    view_start_date: 1468402200
    submit_start_date: 1468402200
    visible_start_date: 1468402200
    end_date: 1735669800
    current: 1492506728
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JULY16/mandarin/EGRANDR.pdf), [Russian](http://www.codechef.com/download/translated/JULY16/russian/EGRANDR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JULY16/vietnamese/EGRANDR.pdf) as well.

Andrash study in Uzhland National University. Now is the time of exam results. Andrash similar to other students, hopes that this scores in the exam could fetch him a scholarship/stipendium for his studies.

There are following simple rules to receive stipendium:

- University follows **5** point grading system. In an exam, a student can receive any score from 2 to 5. 2 is called an F grade, meaning that student has failed that exam.
- Student should not have fail any of the exams.
- Student must obtain a full score in some of his/her exams to show that he/she is excellent in some of the subjects.
- He/She must have a grade point average not less than **4.0**

You are given information regarding the exams and how Andrash performed in those. Can you help him figure out whether he will receive the stipendium or not!!

### Input

The first line of input contains a single integer **T** denoting the number of test cases. This will be followed by **T** test cases.

The first line of each test case contains an integer **N** denoting the number of examinations.

The next line of each test case contains **N** space separated integers denoting Andrash's score for each exam.

### Output

For each of the **T** test cases, output a single line - "Yes" (without quotes) if Andrash will receive stipendium, or "No" (without quotes) - otherwise.

### Constraints and Subtasks

- **1** ≤ **T** ≤ **40**
- Let **A\[i\]** denote Andrash's score for **i**-th exam

**Subtask #1: 20 points**

- **1** ≤ **N** ≤ **100**
- **2** ≤ **A\[i\]** ≤ **5**

**Subtask #2: 20 points**

- **1** ≤ **N** ≤ **105**
- **3** ≤ **A\[i\]** ≤ **5**

**Subtask #3: 60 points**

- **1** ≤ **N** ≤ **105**
- **2** ≤ **A\[i\]** ≤ **5**

### Example

<pre><b>Input:</b>
2
5
3 5 4 4 3
5
3 4 4 4 5

<b>Output:</b>
No
Yes

</pre>### Explanation
**Example case 1.** Student's average grade point score is 3.8 which makes him/her unqualified for obtaining the stipend.

**Example case 2.** Student satisfies all the criteria for getting stipend.
