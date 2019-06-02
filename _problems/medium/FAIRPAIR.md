---
category_name: medium
problem_code: FAIRPAIR
problem_name: 'Fair Pairing'
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
problem_author: kevinsogo
problem_tester: 'kevinsogo,xcwgf666'
date_added: 31-05-2016
tags:
    - easy
    - greedy
    - kevinsogo
    - snckpb16
editorial_url: 'http://discuss.codechef.com/problems/FAIRPAIR'
time:
    view_start_date: 1465831800
    submit_start_date: 1465831800
    visible_start_date: 1465831800
    end_date: 1735669800
    current: 1493557649
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKPB16/mandarin/FAIRPAIR.pdf), [Russian](http://www.codechef.com/download/translated/SNCKPB16/russian/FAIRPAIR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKPB16/vietnamese/FAIRPAIR.pdf) as well.

It's final exam week of Chef's cooking class. His class of **N** students are busy studying for it. Unfortunately, being crammers, each student is only able to study one topic. The **i**-th student studied topic **Si**. Topics are numbered **1** to **106**.

Chef prepared **N** tasks for exam. He intends to assign each task to exactly one student. Each task requires exactly one topic to pass. The **j**-th task requires topic **Tj**.

Chef is a sadistic teacher, he doesn't want the students to pass! Therefore he wants to assign the tasks in such that *the number of students assigned to the topic he/she studied for is minimized*. Can you please help Chef in finding any such assignment?

If there are multiple possible assignments, you may output any one.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **N**.

The second line contains **N** space-separated integers **S1**, **S2**, ..., **SN**.

The third line contains **N** space-separated integers **T1**, **T2**, ..., **TN**.

### Output

For each test case, output two lines.

The first line should contain a single integer denoting the minimum number of students assigned to the topic he/she studied for, i.e. number of students who passed the exam.

The second line should describes assignment. It should contain **N** space separated integers - **a1**, **a2**, ..., **aN**, meaning the **i**-th student is assigned to the **ai**-th task.

### Constraints

- **1** ≤ **T** ≤ **105**
- **1** ≤ **N** ≤ **103**
- The sum of the **N**s in a single test file is ≤ **3×105**
- **1** ≤ **Si** ≤ **106**
- **1** ≤ **Tj** ≤ **106**

### Example

<pre><b>Input:</b>
<tt>2
4
100 200 300 400
200 200 300 400
3
100 100 200
100 100 200</tt>

<b>Output:</b>
<tt>0
2 3 4 1
1
2 3 1</tt>
</pre>
### Explanation

**Example case 1.** Here, there exists an assignment where no student is assigned to the topic he/she studied for:

- Student **1** gets task **2**,
- Student **2** gets task **3**,
- Student **3** gets task **4**,
- Student **4** gets task **1**.

**Example case 2.** In this test case, there's no way we can avoid at least one student from being assigned the topic he/she studied for. But the sample output shows that the minimum in this case is **1**:

- Student **1** gets task **2** (and thus gets the topic he/she studied for),
- Student **2** gets task **3**,
- Student **3** gets task **1**.
