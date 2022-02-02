---
category_name: school
problem_code: ENTEXAM
problem_name: 'Entrance Exam'
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
problem_author: xcwgf666
problem_tester: 'kevinsogo, xcwgf666'
date_added: 13-05-2015
tags:
    - loop
    - simple
    - snckpb16
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/ENTEXAM'
time:
    view_start_date: 1465831800
    submit_start_date: 1465831800
    visible_start_date: 1465831800
    end_date: 1735669800
    current: 1492506721
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKPB16/mandarin/ENTEXAM.pdf), [Russian](http://www.codechef.com/download/translated/SNCKPB16/russian/ENTEXAM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKPB16/vietnamese/ENTEXAM.pdf) as well.

The faculty of application management and consulting services (FAMCS) of the Berland State University (BSU) has always been popular among Berland's enrollees. This year, **N** students attended the entrance exams, but no more than **K** will enter the university. In order to decide who are these students, there are series of entrance exams. All the students with score strictly greater than at least **(N-K)** students' total score gets enrolled.

In total there are **E** entrance exams, in each of them one can score between 0 and **M** points, inclusively. The first **E-1** exams had already been conducted, and now it's time for the last tribulation.

Sergey is the student who wants very hard to enter the university, so he had collected the information about the first **E-1** from all **N-1** enrollees (i.e., everyone except him). Of course, he knows his own scores as well.

In order to estimate his chances to enter the University after the last exam, Sergey went to a fortune teller. From the visit, he learnt about scores that everyone except him will get at the last exam. Now he wants to calculate the minimum score he needs to score in order to enter to the university. But now he's still very busy with minimizing the amount of change he gets in the shops, so he asks you to help him.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains four space separated integers **N, K, E, M** denoting the number of students, the maximal number of students who'll get enrolled, the total number of entrance exams and maximal number of points for a single exam, respectively.

The following **N-1** lines will contain **E** integers each, where the first **E-1** integers correspond to the scores of the exams conducted. The last integer corresponds to the score at the last exam, that was predicted by the fortune-teller.

The last line contains **E-1** integers denoting Sergey's score for the first **E-1** exams.

### Output

For each test case, output a single line containing the minimum score Sergey should get in the last exam in order to be enrolled. If Sergey doesn't have a chance to be enrolled, output "Impossible" (without quotes).

### Constraints

- **1** ≤ **T** ≤ **5**
- **1** ≤ **K** &lt; **N** ≤ **104**
- **1** ≤ **M** ≤ **109**
- **1** ≤ **E** ≤ **4**

### Example

<pre><b>Input:</b>
<tt>1
4 2 3 10
7 7 7
4 6 10
7 10 9
9 9</tt>

<b>Output:</b>
<tt>4</tt>
</pre>
### Explanation

**Example case 1.** If Sergey gets 4 points at the last exam, his score will be equal to 9+9+4=22. This will be the second score among all the enrollees - the first one will get 21, the second one will get 20 and the third will have the total of 26. Thus, Sergey will enter the university.
