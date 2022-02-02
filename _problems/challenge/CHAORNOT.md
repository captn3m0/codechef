---
category_name: challenge
problem_code: CHAORNOT
problem_name: 'To challenge or not'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: ACRush
problem_tester: tuananh93
date_added: 25-04-2013
tags:
    - ACRush
    - challenge
    - june13
editorial_url: 'http://discuss.codechef.com/problems/CHAORNOT'
time:
    view_start_date: 1371460885
    submit_start_date: 1371460885
    visible_start_date: 1371460885
    end_date: 1735669800
    current: 1525199657
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Problem description.

 Chef became the problem writer of ACM/ICPC regional contest this year. One week before the contest, Chef came up with an interesting idea, and wrote the following problem :

 Given **N** integers **A1**, **A2**, ..., **An**, print YES (or NO) if there exists (or not) **3** numbers that form an arithmetic sequence. All integers are between 0 and **99999** (inclusive).

 As Chef expected, during the contest, most teams cannot figure out an efficient algorithm to solve it. But in the last minute of the contest, judges get one 10-lines submission, which is judged as correct. The short solution works as follows, if **N** &gt; **2000**, output YES, otherwise brute-force it.

 Chef felt extremely disappointed, and he/she believed that the solution is definitely wrong. Chef is now interested in how to challenge the submission.

 Chef needs your help. Chef would like you to find a set of integers, such that no **3** integers form an arithmetic sequence. To make the task more challenging, you are given a list of **M** integers **B1**, **B2**, ..., **BM**. You can only use integers from this list. The set does not require maximality, but larger sets will score more points.

### Input

 The first line of the input contains an integer **M** denoting the length of the list. The second line contains **M** space-separated integers **B1**, **B2**, ..., **BM** denoting the list.

### Output

First output the integer **N** on the first line. Then output **N** integers **A1**, **A2**, ..., **AN** on the second line.

### Constraints

- **1** ≤ **M** ≤ **100000**
- 0 ≤ **Bi** &lt; **100000** for each **1** ≤ **i** ≤ **M**

### Scoring

Your score for each test file is **100\*N/M**. Your overall score is the average of your scores on the individual test files. The goal is to maximize your score.

### Example

<pre><b>Input:</b>
10
1 2 3 4 5 6 7 8 9 10

<b>Output:</b>
4
1 4 6 9

</pre>
### Explanation

This sample output would score **100\*4/10=40**.

### Test Generation

 We have **50** official test cases, each of them is created as follows:
An integer **L** is chosen from **\[10000, 100000\]** uniformly at random. An real value **p** is chosen from **\[0.1, 0.9\]** uniformly at random. Then each number **x** from **\[0, L - 1\]**, **x** is added into the list with probability **p**, independently. Regenerate the list if it's empty.
